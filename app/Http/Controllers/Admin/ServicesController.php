<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\ServicesModel;
use App\Rules\PlainText;

class ServicesController extends Controller
{
    public function list(){
        $data['services'] = ServicesModel::getServices();
        $data['header_title'] = 'Services List';
        return view('admin.services.list', $data);
    }//

    public function add()
    {
        $data['header_title'] = 'Add New Service';
        return view('admin.services.add', $data);
    }//

    public function insert(Request $request)
    {
        request()->validate([
            'title' => ['required', 'string', new PlainText],
            'description' => 'required|string',
            'icon' => 'required|image|mimes:jpeg,png,jpg,PNG,JPG,JPEG|max:2048',
        ], [
            'icon.max' => 'Image size should be less than 2MB',
        ]);

        $service = new ServicesModel();
        $service->title = trim($request->title);
        $service->description = strip_tags(trim($request->description));
        if($request->hasFile('icon')){
            $imageName = time().'.'.$request->icon->extension();  
            $request->icon->move(public_path('uploads/services'), $imageName);
            $service->icon = 'uploads/services/'.$imageName;
            // Delete previous image if it exists
            if($service->icon && file_exists(public_path($service->icon))){
                unlink(public_path($service->icon));
            }
        }
        $service->created_by = Auth()->user()->id;
        $service->save();
        return redirect()->route('services.list')->with('success', 'Service Created Successfully');
    }//

    public function update($id, Request $request){
        request()->validate([
            'title' => ['required', 'string', new PlainText],
            'description' => 'required|string',
            'icon' => 'image|mimes:jpeg,png,jpg,PNG,JPG,JPEG|max:2048',
        ], [
            'icon.max' => 'Image size should be less than 2MB',
        ]);
        $service = ServicesModel::find($id);
        $service->title = trim($request->title);
        $service->description = strip_tags(trim($request->description));
        if($request->hasFile('icon')){
            $imageName = time().'.'.$request->icon->extension();  
            $request->icon->move(public_path('uploads/services'), $imageName);
            $service->icon = 'uploads/services/'.$imageName;
        }
        $service->status = $request->status;
        $service->save();

        return redirect()->route('services.list')->with('success', 'Service Successfully Updated');
    }//

    public function edit($id)
    {
        $data['service'] = ServicesModel::find($id);
        $data['header_title'] = 'Edit Service';
        return view('admin.services.edit', $data);
    }//

    public function delete($id)
    {
        $service = ServicesModel::find($id);
        $service->status = -1;
        $service->save();
        return redirect()->route('services.list')->with('success', 'Service Successfully Deleted');
    }//
}
