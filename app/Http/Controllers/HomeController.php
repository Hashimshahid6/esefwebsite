<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerModel;
use App\Models\MessagesModel;
use App\Models\ServicesModel;
use App\Models\BODMembersModel;

class HomeController extends Controller
{
    public function index(){
        $data['heade_title'] = 'Home';
        $data['banners'] = BannerModel::getBanners();
        $data['messages'] = MessagesModel::getMessages();
        $data['services'] = ServicesModel::getServices();
        return view('home', $data);
    }//

    public function about(){
        $data['heade_title'] = 'About Us';
        return view('about_us.about_us', $data);
    }//

    public function objectives(){
        $data['heade_title'] = 'Objectives';
        return view('about_us.objectives', $data);
    }//

    public function bod_members(){
        $data['heade_title'] = 'BOD Members';
        $data['bodMembers'] = BODMembersModel::getBODMembers();
        return view('about_us.bod_members', $data);
    }//

    public function schemes(){
        $data['heade_title'] = 'Schemes';
        $data['services'] = ServicesModel::getServices();
        return view('schemes.schemes', $data);
    }//

    public function gcs(){
        $data['heade_title'] = 'GCS';
        return view('schemes.gcs', $data);
    }//

    public function ess(){
        $data['heade_title'] = 'ESS';
        return view('schemes.ess', $data);
    }//

    public function nsi(){
        $data['heade_title'] = 'NSI';
        return view('schemes.nsi', $data);
    }//

    public function social_media(){
        $data['heade_title'] = 'Social Media';
        return view('media.social_media', $data);
    }//
}
