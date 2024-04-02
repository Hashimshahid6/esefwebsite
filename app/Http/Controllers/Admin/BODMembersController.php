<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\BODMembersModel;
use App\Rules\PlainText;

class BODMembersController extends Controller
{
    public function list(){
        $data['bodmembers'] = BODMembersModel::getBODMembers();
        $data['header_title'] = 'BOD Members List';
        return view('admin.bodmembers.list', $data);
    }//

    public function add()
    {
        $data['header_title'] = 'Add New Member';
        return view('admin.bodmembers.add', $data);
    }//

    public function insert(Request $request)
    {
        request()->validate([
            'member_name' => ['required', 'string', new PlainText],
            'member_designation' => ['required', 'string', new PlainText],
            'member_details' => 'required|string',
            'member_picture' => 'required|image|mimes:jpeg,png,jpg,PNG,JPG,JPEG|max:2048',
            'picture_sequence' => 'required|numeric',
        ], [
            'member_picture.max' => 'Image size should be less than 2MB',
        ]);

        $bodmember = new BODMembersModel();
        $bodmember->member_name = trim($request->member_name);
        $bodmember->member_designation = trim($request->member_designation);
        $bodmember->member_details = strip_tags(trim($request->member_details));
        if($request->hasFile('member_picture')){
            $imageName = time().'.'.$request->member_picture->extension();  
            $request->member_picture->move(public_path('uploads/bod_members'), $imageName);
            $bodmember->member_picture = 'uploads/bod_members/'.$imageName;
        }
        $bodmember->picture_sequence = trim($request->picture_sequence);
        $bodmember->created_by = Auth()->user()->id;
        $bodmember->save();
        return redirect()->route('bodmembers.list')->with('success', 'BOD Member Created Successfully');
    }//

    public function update($id, Request $request){
        request()->validate([
            'member_name' => ['required', 'string', new PlainText],
            'member_designation' => ['required', 'string', new PlainText],
            'member_details' => 'required|string',
            'member_picture' => 'image|mimes:jpeg,png,jpg,PNG,JPG,JPEG|max:2048',
            'picture_sequence' => 'required|numeric',
        ], [
            'member_picture.max' => 'Image size should be less than 2MB',
        ]);
        $bodmember = BODMembersModel::find($id);
        $bodmember->member_name = trim($request->member_name);
        $bodmember->member_designation = trim($request->member_designation);
        $bodmember->member_details = strip_tags(trim($request->member_details));
        if($request->hasFile('member_picture')){
            $imageName = time().'.'.$request->member_picture->extension();  
            $request->member_picture->move(public_path('uploads/bod_members'), $imageName);
            $bodmember->member_picture = 'uploads/bod_members/'.$imageName;
        }
        $bodmember->picture_sequence = trim($request->picture_sequence);
        $bodmember->status = $request->status;
        $bodmember->save();

        return redirect()->route('bodmembers.list')->with('success', 'Member Successfully Updated');
    }//

    public function edit($id)
    {
        $data['bodmember'] = BODMembersModel::find($id);
        $data['header_title'] = 'Edit Member';
        return view('admin.bodmembers.edit', $data);
    }//

    public function delete($id)
    {
        $bodmember = BODMembersModel::find($id);
        $bodmember->status = -1;
        $bodmember->save();
        return redirect()->route('bodmembers.list')->with('success', 'Member Successfully Deleted');
    }//
}
