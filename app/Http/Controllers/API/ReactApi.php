<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\BannerModel;
use App\Models\NewsModel;
use App\Models\MessagesModel;
use App\Models\ServicesModel;
use App\Rules\PlainText;
use App\Models\BODMembersModel;
use App\Models\GalleryModel;
use App\Models\TendersModel;
use App\Models\ContactsDirectoryModel;

class ReactApi extends Controller
{
    public function all_banners(){
        $banners = BannerModel::where('status','1')->get()->toArray();
        return response()->json($banners, 200);
    }//
    public function home_news(){
    	// $data['messages'] = MessagesModel::getMessages();
        $home_news = NewsModel::where('status','1')->orderBy('id','desc')->take(15)->get()->toArray();
        return response()->json($home_news, 200);
    } //
    public function all_news(){
    	// $data['messages'] = MessagesModel::getMessages();
        $all_news = NewsModel::where('status','1')->orderBy('id','desc')->get()->toArray();
        return response()->json($all_news, 200);
    } //
    public function news_detail($slug){
    	$news_detail = NewsModel::where('slug', $slug)->first();
    	if($news_detail){
        	return response()->json($news_detail->toArray(), 200);
    	}else{
        	return response()->json(array('Error'=>'No Data Found'), 404);
    	}
    }//
    public function messages(){
        $messages = MessagesModel::where('status','1')->get()->toArray();
        return response()->json($messages, 200);
    } //
    public function home_schemes(){
        $services = ServicesModel::where('status','1')->get()->toArray();
        return response()->json($services, 200);
    } //
    public function bod_members(){
        $bod_members = BODMembersModel::where('status','1')->get()->toArray();
        return response()->json($bod_members, 200);
    } //
    public function gallery(){
        $gallery = GalleryModel::where('status','1')->orderBy('id','desc')->get()->toArray();
        return response()->json($gallery, 200);
    } //
    public function tenders(){
        $tenders = TendersModel::where('status','1')->orderBy('id','desc')->get()->toArray();
        return response()->json($tenders, 200);
    } //
    public function telephone_book(){
        $telephone_book = ContactsDirectoryModel::where('status','1')->get()->toArray();
        return response()->json($telephone_book, 200);
    } //
    public function nfe(){
        $data = array();
        $view = view('components/nfe_data', ['data' => $data])->render();
        return response()->json($view, 200);
    } //
    public function contactus_form(){
        echo "<pre>";
        print_r (request()->post());
        echo "</pre>"; die;
    }
    public function add()
    {
        $data['header_title'] = 'Add New Banner';
        return view('admin.banners.add', $data);
    }//

    public function insert(Request $request)
    {
        request()->validate([
            'title' => 'nullable | string',
            'description' => 'nullable | string',
            'picture' => 'required|image|mimes:jpeg,png,jpg,PNG,JPG,JPEG,jfif|max:4048',
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
            'title' => 'nullable | string',
            'description' => 'nullable | string',
            'picture' => 'image|mimes:jpeg,png,jpg,PNG,JPG,JPEG,jfif|max:4048',
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
