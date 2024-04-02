<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\SlidersModel;
use App\Rules\PlainText;

class SlidersController extends Controller
{
    public function list(){
        $data['sliders'] = SlidersModel::getSliders();
        $data['header_title'] = 'Sliders List';
        return view('admin.sliders.list', $data);
    }//

    public function add()
    {
        $data['header_title'] = 'Add New Slider';
        return view('admin.sliders.add', $data);
    }//

    public function insert(Request $request)
    {
        request()->validate([
            'title' => ['required', 'string', new PlainText],
            'description' => ['required', 'string', new PlainText],
            'picture' => 'required|image|mimes:jpeg,png,jpg,PNG,JPG,JPEG|max:2048',
        ], [
            'picture.max' => 'Image size should be less than 2MB',
        ]);

        $slider = new SlidersModel();
        $slider->title = trim($request->title);
        $slider->description = strip_tags(trim($request->description));
        if($request->hasFile('picture')){
            $imageName = time().'.'.$request->picture->extension();  
            $request->picture->move(public_path('uploads/sliders'), $imageName);
            $slider->picture = 'uploads/sliders/'.$imageName;
        }
        $slider->created_by = Auth()->user()->id;
        $slider->save();
        return redirect()->route('sliders.list')->with('success', 'Slider Created Successfully');
    }//

    public function update($id, Request $request){
        request()->validate([
            'title' => ['required', 'string', new PlainText],
            'description' => ['required', 'string', new PlainText],
            'picture' => 'image|mimes:jpeg,png,jpg,PNG,JPG,JPEG|max:2048',
        ], [
            'picture.max' => 'Image size should be less than 2MB',
        ]);
        $slider = SlidersModel::find($id);
        $slider->title = trim($request->title);
        $slider->description = strip_tags(trim($request->description));
        if($request->hasFile('picture')){
            $imageName = time().'.'.$request->picture->extension();  
            $request->picture->move(public_path('uploads/sliders'), $imageName);
            $slider->picture = 'uploads/sliders/'.$imageName;
        }
        $slider->status = $request->status;
        $slider->save();

        return redirect()->route('sliders.list')->with('success', 'Slider Successfully Updated');
    }//

    public function edit($id)
    {
        $data['slider'] = SlidersModel::find($id);
        $data['header_title'] = 'Edit Slider';
        return view('admin.sliders.edit', $data);
    }//

    public function delete($id)
    {
        $slider = SlidersModel::find($id);
        $slider->status = -1;
        $slider->save();
        return redirect()->route('sliders.list')->with('success', 'Slider Successfully Deleted');
    }//
}
