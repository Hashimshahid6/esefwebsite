<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\NfeAlpModel;
use App\Rules\PlainText;
use Illuminate\Support\Str;

class NfeAlpController extends Controller
{
    public function list($id=NULL){
			// echo ini_get('post_max_size'); die;
				if($id != ""){
        	$data['list'] = NfeAlpModel::getChildrenDocs($id);
				}else{
        	$data['list'] = NfeAlpModel::getParents();
				}
        $data['header_title'] = 'NFE ALP';
				// dd($data);
        return view('admin.nfealp.list', $data);
    }//

    public function add()
    {
        $data['header_title'] = 'Add Document';
        $data['parents'] = NfeAlpModel::getParentsOnly();
				return view('admin.nfealp.add', $data);
    }//

    public function insert(Request $request)
    {
        request()->validate([
            'name' => 'required|string',
            'attachment' => 'required|mimes:pdf,PDF',
        ],
        [
            'attachment.max' => 'The file size exceeded. Please upload small size pdf',
        ]);
				// dd($validation->errors());

        $nfealp = new NfeAlpModel();
        $nfealp->parent_id = $request->parent_id;
        $nfealp->name = trim($request->name);
        $nfealp->description = strip_tags(trim($request->description));
        if($request->hasFile('attachment')){
						$originalName = $request->attachment->getClientOriginalName();
            $imageName = $originalName;//.'.'.$request->attachment->extension();  
            $request->attachment->move(public_path('uploads/nfealp'), $imageName);
            $nfealp->attachment = 'uploads/nfealp/'.$imageName;
        } 
        $nfealp->save();
        return redirect()->back()->with('success', 'Uploaded Successfully');
    }//

    public function update($id, Request $request){
        request()->validate([
            'name' => 'required|string',
            'attachment' => 'mimes:pdf,PDF', // 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048
        ],
        [
            'attachment.max' => 'The file must be less than 2MB',
        ]);
				// dd($request->all());
        $nfealp = NfeAlpModel::find($id);
        $nfealp->name = trim($request->name);
        if($request->hasFile('attachment')){
						$originalName = $request->attachment->getClientOriginalName();
            $imageName = $originalName;//.'.'.$request->attachment->extension();  
            $request->attachment->move(public_path('uploads/nfealp'), $imageName);
            $nfealp->attachment = 'uploads/nfealp/'.$imageName;
            // Delete previous image if it exists
            if($nfealp->attachment && file_exists(public_path('uploads/nfealp/'.$nfealp->attachment))){
                unlink(public_path($nfealp->attachment));
            } //
        } 
        $nfealp->save();
        return redirect(url('admin/nfealp/list/'.$nfealp->parent_id))->with('success', 'Upload Updated Successfully.');
    }//

    public function edit($id)
    {
			$data['header_title'] = 'Edit Document';
			$nfealp_row = NfeAlpModel::with('parent')->find($id);
			// dd($nfealp_row);
			if($nfealp_row != null){
				if($nfealp_row->parent != null){
					$data['subcats'] = NfeAlpModel::siblings($nfealp_row->parent);
				} //
			} //
			$data['nfealp_row'] = $nfealp_row;
			$data['parents'] = NfeAlpModel::getParentsOnly();
			return view('admin.nfealp.edit', $data);
    }//

    public function delete($id)
    {
        $news = NewsModel::find($id);
        $news->status = -1;
        $news->save();
        return redirect()->route('news.list')->with('success', 'News Successfully Deleted');
    }//
		public function getChildrenOnly(Request $request){
			$parent_id = $request->parent_id;
			$children = NfeAlpModel::getChildrenOnly($parent_id);
			return response()->json($children, 200);
		}
}
