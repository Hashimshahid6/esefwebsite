<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUsModel;
use App\Rules\PlainText;

class ContactUsController extends Controller
{
    public function list(){
        $data['contact_us'] = ContactUsModel::getContacts();
        $data['header_title'] = 'Contact Us List';
        return view('admin.contact_us.list', $data);
    }//
}
