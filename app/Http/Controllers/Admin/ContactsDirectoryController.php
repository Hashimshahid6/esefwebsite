<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\ContactsDirectoryModel;
use App\Rules\PlainText;

class ContactsDirectoryController extends Controller
{
    public function list(){
        $data['contactsdirectory'] = ContactsDirectoryModel::getContactsDirectory();
        $data['header_title'] = 'Contacts Directory List';
        return view('admin.contacts_directory.list', $data);
    }//

    public function add()
    {
        $data['header_title'] = 'Add New Contact';
        return view('admin.contacts_directory.add', $data);
    }//

    public function insert(Request $request)
    {
        request()->validate([
            'designation' => ['required', 'string', new PlainText],
            'telephone_no' => ['required', 'string', new PlainText],
            'email' => 'required|email',
        ], [
            'email.email' => 'Invalid Email Address',
        ]);

        $contactsdirectory = new ContactsDirectoryModel();
        $contactsdirectory->designation = trim($request->designation);
        $contactsdirectory->telephone_no = trim($request->telephone_no);
        $contactsdirectory->email = strip_tags(trim($request->email));
        $contactsdirectory->created_by = Auth()->user()->id;
        $contactsdirectory->save();
        return redirect()->route('contacts_directory.list')->with('success', 'Record Created Successfully');
    }//

    public function update($id, Request $request){

        request()->validate([
            'designation' => ['required', 'string', new PlainText],
            'telephone_no' => ['required', 'string', new PlainText],
            'email' => 'required|email',
        ], [
            'email.email' => 'Invalid Email Address',
        ]);
        $contactsdirectory = new ContactsDirectoryModel();
        $contactsdirectory->designation = trim($request->designation);
        $contactsdirectory->telephone_no = trim($request->telephone_no);
        $contactsdirectory->email = strip_tags(trim($request->email));
        $contactsdirectory->status = 1;
        $contactsdirectory->created_by = Auth()->user()->id;
        $contactsdirectory->save();

        return redirect()->route('contacts_directory.list')->with('success', 'Record Successfully Updated');
    }//

    public function edit($id)
    {
        $data['contactsdirectory'] = ContactsDirectoryModel::find($id);
        $data['header_title'] = 'Edit Contact';
        return view('admin.contacts_directory.edit', $data);
    }//

    public function delete($id)
    {
        $contactsdirectory = ContactsDirectoryModel::find($id);
        $contactsdirectory->status = -1;
        $contactsdirectory->save();
        return redirect()->route('contacts_directory.list')->with('success', 'Record Successfully Deleted');
    }//
}
