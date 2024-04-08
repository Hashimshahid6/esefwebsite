<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\MessagesModel;
use App\Rules\PlainText;

class MessagesController extends Controller
{
    public function list(){
        $data['messages'] = MessagesModel::getmessages();
        $data['header_title'] = 'Messages List';
        return view('admin.messages.list', $data);
    }//

    public function add()
    {
        $data['header_title'] = 'Add New Message';
        return view('admin.messages.add', $data);
    }//

    public function insert(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string', new PlainText],
            'designation' => ['required', 'string', new PlainText],
            'description' => 'required|string',
            'picture' => 'required|image|mimes:jpeg,png,jpg,PNG,JPG,JPEG|max:2048',
            'twitter_link' => 'nullable|url',
            'facebook_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
        ], [
            'picture.max' => 'Image size should be less than 2MB',
        ]);

        $message = new MessagesModel();
        $message->name = trim($request->name);
        $message->designation = trim($request->designation);
        $message->description = trim($request->description);
        if($request->hasFile('picture')){
            $imageName = time().'.'.$request->picture->extension();  
            $request->picture->move(public_path('uploads/messages'), $imageName);
            $message->picture = 'uploads/messages/'.$imageName;
            // Delete previous image if it exists
            if($message->picture && file_exists(public_path($message->picture))){
                unlink(public_path($message->picture));
            }
        }
        $message->twitter_link = trim($request->twitter_link);
        $message->facebook_link = trim($request->facebook_link);
        $message->instagram_link = trim($request->instagram_link);
        $message->linkedin_link = trim($request->linkedin_link);
        $message->created_by = Auth()->user()->id;
        $message->save();
        return redirect()->route('messages.list')->with('success', 'Message Created Successfully');
    }//

    public function update($id, Request $request){
        request()->validate([
            'name' => ['required', 'string', new PlainText],
            'designation' => ['required', 'string', new PlainText],
            'description' => 'required|string',
            'picture' => 'image|mimes:jpeg,png,jpg,PNG,JPG,JPEG|max:2048',
            'twitter_link' => 'nullable|url',
            'facebook_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
        ], [
            'picture.max' => 'Image size should be less than 2MB',
        ]);
        $message = MessagesModel::find($id);
        $message->name = trim($request->name);
        $message->designation = trim($request->designation);
        $message->description = strip_tags(trim($request->description));
        if($request->hasFile('picture')){
            $imageName = time().'.'.$request->picture->extension();  
            $request->picture->move(public_path('uploads/messages'), $imageName);
            $message->picture = 'uploads/messages/'.$imageName;
        }
        $message->twitter_link = trim($request->twitter_link);
        $message->facebook_link = trim($request->facebook_link);
        $message->instagram_link = trim($request->instagram_link);
        $message->linkedin_link = trim($request->linkedin_link);
        $message->status = $request->status;
        $message->save();

        return redirect()->route('messages.list')->with('success', 'Message Successfully Updated');
    }//

    public function edit($id)
    {
        $data['message'] = MessagesModel::find($id);
        $data['header_title'] = 'Edit Member';
        return view('admin.messages.edit', $data);
    }//

    public function delete($id)
    {
        $message = MessagesModel::find($id);
        $message->status = -1;
        $message->save();
        return redirect()->route('messages.list')->with('success', 'Message Successfully Deleted');
    }//
}
