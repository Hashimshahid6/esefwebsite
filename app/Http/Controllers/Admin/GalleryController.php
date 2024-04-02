<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\GalleryModel;
use App\Rules\PlainText;

class GalleryController extends Controller
{
    public function list(){
        $data['getGallery'] = GalleryModel::getGallery();
        $data['header_title'] = 'Gallery List';
        return view('admin.gallery.list', $data);
    }//

    public function add()
    {
        $data['header_title'] = 'Add New Image to Gallery';
        return view('admin.gallery.add', $data);
    }//

    public function insert(Request $request)
    {
        request()->validate([
            'title' => ['required', 'string', new PlainText],
            'picture' => 'required|image|mimes:jpeg,png,jpg,PNG,JPG,JPEG|max:2048',
        ], [
            'picture.max' => 'Image size should be less than 2MB',
        ]);

        $gallery = new GalleryModel();
        $gallery->title = trim($request->title);
        if($request->hasFile('picture')){
            $imageName = time().'.'.$request->picture->extension();  
            $request->picture->move(public_path('uploads/gallery'), $imageName);
            $gallery->picture = 'uploads/gallery/'.$imageName;
        }
        $gallery->created_by = Auth()->user()->id;
        $gallery->save();
        return redirect()->route('gallery.list')->with('success', 'Image Added to Gallery Successfully');
    }//

    public function update($id, Request $request){
        request()->validate([
            'title' => ['required', 'string', new PlainText],
            'picture' => 'image|mimes:jpeg,png,jpg,PNG,JPG,JPEG|max:2048',
        ], [
            'picture.max' => 'Image size should be less than 2MB',
        ]);
        $gallery = GalleryModel::find($id);
        $gallery->title = trim($request->title);
        if($request->hasFile('picture')){
            $imageName = time().'.'.$request->picture->extension();  
            $request->picture->move(public_path('uploads/gallery'), $imageName);
            $gallery->picture = 'uploads/gallery/'.$imageName;
        }
        $gallery->status = $request->status;
        $gallery->save();

        return redirect()->route('gallery.list')->with('success', 'Gallery Successfully Updated');
    }//

    public function edit($id)
    {
        $data['gallery'] = GalleryModel::find($id);
        $data['header_title'] = 'Edit Gallery';
        return view('admin.gallery.edit', $data);
    }//

    public function delete($id)
    {
        $gallery = GalleryModel::find($id);
        $gallery->status = -1;
        $gallery->save();
        return redirect()->route('gallery.list')->with('success', 'Gallery Successfully Deleted');
    }//
}
