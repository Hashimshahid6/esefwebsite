<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\TendersModel;
use App\Rules\PlainText;


class TendersController extends Controller
{
    public function list($type = null){
        $data['tenders'] = TendersModel::getTenders($type);
        $data['header_title'] = 'Tenders List';
        if($type == 2){
            $data['header_title'] = 'Proactive Disclosure List';
        }
        $data['type'] = $type;
        return view('admin.tenders.list', $data);
    }//

    public function add($type)
    {
        $data['header_title'] = 'Add Tenders';
        if($type == 2){
            $data['header_title'] = 'Add Proactive Disclosure';
        }
        $data['type'] = $type;
        return view('admin.tenders.add', $data);
    }//

    public function insert(Request $request)
    {
        request()->validate([
            'title' => ['required', 'string', new PlainText],
            // 'description' => ['required', 'string', new PlainText],
            'attachment' => 'required|mimes:pdf|max:2048',
            'date' => 'required|date',
        ],
        [
            'attachment.mimes' => 'The file must be a file of type: pdf',
            'attachment.max' => 'The file must be less than 2MB',
        ]);

        $tenders = new TendersModel();
        $tenders->title = trim($request->title);
        if($request->hasFile('attachment')){
            $attachmentName = time().'.'.$request->attachment->extension();  
            $request->attachment->move(public_path('uploads/tenders'), $attachmentName);
            $tenders->attachment = 'uploads/tenders/'.$attachmentName;
        }
        $tenders->date = $request->date;
        $tenders->type = $request->type;
        $tenders->created_by = Auth()->user()->id;
        $tenders->save();
        return redirect()->route('tenders.list')->with('success', 'Record Created Successfully');
    }//

    public function update($id, Request $request){
        request()->validate([
            'title' => ['required', 'string', new PlainText],
            'attachment' => 'mimes:pdf|max:2048',
            'date' => 'required|date',
        ],
        [
            'attachment.mimes' => 'The file must be a file of type: pdf',
            'attachment.max' => 'The file must be less than 2MB',
        ]);
        $tenders = TendersModel::find($id);
        $tenders->title = trim($request->title);
        if($request->hasFile('attachment')){
            $attachmentName = time().'.'.$request->attachment->extension();  
            $request->attachment->move(public_path('uploads/tenders'), $attachmentName);
            $tenders->attachment = 'uploads/tenders/'.$attachmentName;
            // Delete previous image if it exists
            if($tenders->attachment && file_exists(public_path($tenders->attachment))){
                unlink(public_path($tenders->attachment));
            }
        }
        $tenders->date = $request->date;
        $tenders->status = $request->status;
        $tenders->save();

        return redirect()->route('tenders.list')->with('success', 'Record Successfully Updated');
    }//

    public function edit($id)
    {
        $data['tenders'] = TendersModel::find($id);
        $data['header_title'] = 'Edit Tenders';
        return view('admin.tenders.edit', $data);
    }//

    public function delete($id)
    {
        $tenders = TendersModel::find($id);
        $tenders->status = -1;
        $tenders->save();
        return redirect()->route('tenders.list')->with('success', 'Record Successfully Deleted');
    }//
}
