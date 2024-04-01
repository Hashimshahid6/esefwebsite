<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerModel;
use App\Models\MessagesModel;
use App\Models\ServicesModel;

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
        return view('about_us', $data);
    }//

    public function objectives(){
        $data['heade_title'] = 'Objectives';
        return view('objectives', $data);
    }//
}
