<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\BannerModel;
use App\Rules\PlainText;

class BannerController extends Controller
{
    public function list(){
        $data['banners'] = BannerModel::getBanners();
        $data['header_title'] = 'Banners List';
        return view('admin.banners.list', $data);
    }//

    public function add()
    {
        $data['header_title'] = 'Add New Banner';
        return view('admin.banners.add', $data);
    }//

    public function insert(Request $request)
    {
        request()->validate([
            'title' => ['required', 'string', new PlainText],
            'description' => ['required', 'string', new PlainText],
            'picture' => 'required|image|mimes:jpeg,png,jpg,PNG,JPG,JPEG|max:4048',
        ], [
            'picture.max' => 'Image size should be less than 4MB',
        ]);

        $banner = new BannerModel();
        $banner->title = trim($request->title);
        $banner->description = trim($request->description);
        if($request->hasFile('picture')){
            $imageName = time().'.'.$request->picture->extension();  
            $request->picture->move(public_path('uploads/banners'), $imageName);
            $banner->picture = 'uploads/banners/'.$imageName;
        }
        $banner->created_by = Auth()->user()->id;
        $banner->save();
        return redirect()->route('banners.list')->with('success', 'Banner Created Successfully');
    }//

    public function update($id, Request $request){
        request()->validate([
            'title' => ['required', 'string', new PlainText],
            'description' => ['required', 'string', new PlainText],
            'picture' => 'image|mimes:jpeg,png,jpg,PNG,JPG,JPEG|max:4048',
        ], [
            'picture.max' => 'Image size should be less than 4MB',
        ]);
        $banner = BannerModel::find($id);
        $banner->title = trim($request->title);
        $banner->description = trim($request->description);
        if($request->hasFile('picture')){
            $imageName = time().'.'.$request->picture->extension();  
            $request->picture->move(public_path('uploads/banners'), $imageName);
            $banner->picture = 'uploads/banners/'.$imageName;
        }
        $banner->status = $request->status;
        $banner->save();

        return redirect()->route('banners.list')->with('success', 'Banner Successfully Updated');
    }//

    public function edit($id)
    {
        $data['banner'] = BannerModel::find($id);
        $data['header_title'] = 'Edit Banner';
        return view('admin.banners.edit', $data);
    }//

    public function delete($id)
    {
        $banner = BannerModel::find($id);
        $banner->status = -1;
        $banner->save();
        return redirect()->route('banners.list')->with('success', 'Banner Successfully Deleted');
    }//
}
