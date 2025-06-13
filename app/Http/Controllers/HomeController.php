<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerModel;
use App\Models\MessagesModel;
use App\Models\ServicesModel;
use App\Models\BODMembersModel;
use App\Models\GalleryModel;
use App\Models\NewsModel;
use App\Models\TendersModel;
use App\Models\NfeAlpModel;
use App\Models\ContactsDirectoryModel;
use App\Models\ContactUsModel;
use App\Rules\PlainText;
use App\Models\SuccessStoriesModel;

class HomeController extends Controller
{
    public function index(){
        $data['header_title'] = 'Home';
        $data['banners'] = BannerModel::getBanners();
        $data['messages'] = MessagesModel::getMessages();
        $data['news'] = NewsModel::getNews();
        $data['services'] = ServicesModel::getServices();
        return view('home', $data);
    }//

    public function about(){
        $data['header_title'] = 'About Us';
        return view('about_us.about_us', $data);
    }//

    public function objectives(){
        $data['header_title'] = 'Objectives';
        return view('about_us.objectives', $data);
    }//

    public function bod_members(){
        $data['header_title'] = 'BOD Members';
        $data['bodMembers'] = BODMembersModel::getBODMembers();
        return view('about_us.bod_members', $data);
    }//

    public function schemes(){
        $data['header_title'] = 'Schemes';
        $data['services'] = ServicesModel::getServices();
        return view('schemes.schemes', $data);
    }//

    public function gcs(){
        $data['header_title'] = 'GCS';
        return view('schemes.gcs', $data);
    }//

    public function ess(){
        $data['header_title'] = 'ESS';
        return view('schemes.ess', $data);
    }//

    public function nsi(){
        $data['header_title'] = 'NSI';
        return view('schemes.nsi', $data);
    }//
    
		public function scheme_alp(){
        $data['header_title'] = 'ALP';
        return view('schemes.alp', $data);
    }//

    public function social_media(){
        $data['header_title'] = 'Social Media';
        return view('media.social_media', $data);
    }//

    public function gallery(){
        $data['header_title'] = 'Gallery';
        $data['gallery'] = GalleryModel::getGallery();
        return view('media.gallery', $data);
    }//

    public function news_and_updates(){
        $data['header_title'] = 'News and Updates';
        $data['news'] = NewsModel::getNews();
        return view('media.news_and_updates', $data);
    }//

    public function news_detail($slug){
        $data['header_title'] = 'News Details';
        $data['news_detail'] = NewsModel::where('slug', $slug)->first();
        return view('media.news_detail', $data);
    }//

    public function tender(){
        $data['header_title'] = 'Tenders';
        $data['tenders'] = TendersModel::getTenders();
        return view('downloads.tender', $data);
    }//
    
		public function downloads_nfe(){
        $data['header_title'] = 'NFE ALP';
        $data['list'] = NfeAlpModel::getParents();
        return view('downloads.nfe', $data);
    }//

    public function contact_us(){
        $data['header_title'] = 'Contact Us';
        $data['contacts_directory'] = ContactsDirectoryModel::getContactsDirectory();
        return view('contact_us', $data);
    }//

    public function insertcontact(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string', new PlainText],
            'email' => 'required|email',
            'subject' => ['required', 'string', new PlainText],
            'message' => ['required', 'string', new PlainText],
        ], [
            'email.email' => 'Invalid Email Address',
        ]);

        $contactus = new ContactUsModel();
        $contactus->name = trim($request->name);
        $contactus->email = trim($request->email);
        $contactus->subject = strip_tags(trim($request->subject));
        $contactus->message = strip_tags(trim($request->message));
        $contactus->save();
        return redirect()->back()->with('success', 'Your message has been sent successfully. Our team will respond you as soon as possible.');
    }//

    public function nfe(){
        $data['header_title'] = 'NFE';
        return view('nfe', $data);
    }//

		public function nfealp(){
        $data['header_title'] = 'NFE ALP';
				$data['descriptionrow'] = NfeAlpModel::getDescriptionRow();
				$data['list'] = NfeAlpModel::getParents();
				// dd($data);
				return view('nfealp', $data);
    }//

    public function success_stories(){
        $data['header_title'] = 'Success Stories';
        $data['success_stories'] = SuccessStoriesModel::getSuccessStories();
        return view('success-stories', $data);
    }//
}
