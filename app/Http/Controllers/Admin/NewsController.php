<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\NewsModel;
use App\Rules\PlainText;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function list(){
        $data['news'] = NewsModel::getNews();
        $data['header_title'] = 'News List';
        return view('admin.news.list', $data);
    }//

    public function add()
    {
        $data['header_title'] = 'Add News';
        return view('admin.news.add', $data);
    }//

    public function insert(Request $request)
    {
        request()->validate([
            'title' => 'required', 'string',
            'description' => 'required | string',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|date',
        ],
        [
            'picture.image' => 'The file must be an image (jpeg, png, jpg, gif, svg)',
            'picture.mimes' => 'The file must be a file of type: jpeg, png, jpg, gif, svg',
            'picture.max' => 'The file must be less than 2MB',
        ]);

        $news = new NewsModel();
        $news->title = trim($request->title);
        $news->slug = Str::slug($request->title);
        $news->description = strip_tags(trim($request->description));
        if($request->hasFile('picture')){
            $imageName = time().'.'.$request->picture->extension();  
            $request->picture->move(public_path('uploads/news_updates'), $imageName);
            $news->picture = 'uploads/news_updates/'.$imageName;
        } 
        $news->date = $request->date;
        $news->created_by = Auth()->user()->id;
        $news->save();
        return redirect()->route('news.list')->with('success', 'News Created Successfully');
    }//

    public function update($id, Request $request){
        request()->validate([
            'title' => 'required', 'string',
            'description' => 'required', 'string',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048
            'date' => 'required|date',
        ],
        [
            'picture.image' => 'The file must be an image (jpeg, png, jpg, gif, svg)',
            'picture.mimes' => 'The file must be a file of type: jpeg, png, jpg, gif, svg',
            'picture.max' => 'The file must be less than 2MB',
        ]);
        $news = NewsModel::find($id);
        $news->title = trim($request->title);
        $news->slug = Str::slug($request->title, '-');
        $news->description = strip_tags(stripslashes(trim($request->description)));
        if($request->hasFile('picture')){
            $imageName = time().'.'.$request->picture->extension();  
            $request->picture->move(public_path('uploads/news_updates'), $imageName);
            $news->picture = 'uploads/news_updates/'.$imageName;
            // Delete previous image if it exists
            if($news->picture && file_exists(public_path($news->picture))){
                unlink(public_path($news->picture));
            }
        } 
        $news->date = $request->date;
        $news->status = $request->status;
        $news->save();

        return redirect()->route('news.list')->with('success', 'News Successfully Updated');
    }//

    public function edit($id)
    {
        $data['news'] = NewsModel::find($id);
        $data['header_title'] = 'Edit News';
        return view('admin.news.edit', $data);
    }//

    public function delete($id)
    {
        $news = NewsModel::find($id);
        $news->status = -1;
        $news->save();
        return redirect()->route('news.list')->with('success', 'News Successfully Deleted');
    }//
}
