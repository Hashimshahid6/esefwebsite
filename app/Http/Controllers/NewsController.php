<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsModel;
use App\Models\BannerModel;
use App\Rules\PlainText;

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
            'title' => ['required', 'string', new PlainText],
            'description' => ['required', 'string', new PlainText],
            'date' => 'required|date',
        ]);

        $news = new NewsModel();
        $news->title = trim($request->title);
        $news->description = strip_tags(trim($request->description));
        $news->date = $request->date;
        $news->created_by = Auth()->user()->id;
        $news->save();
        return redirect()->route('news.list')->with('success', 'News Created Successfully');
    }//

    public function update($id, Request $request){
        request()->validate([
            'title' => ['required', 'string', new PlainText],
            'description' => ['required', 'string', new PlainText],
            'date' => 'required|date',
        ]);
        $news = NewsModel::find($id);
        $news->title = trim($request->title);
        $news->description = strip_tags(trim($request->description));
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
