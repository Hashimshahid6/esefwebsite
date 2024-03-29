<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function list()
    {
        $data['usersRecord'] = User::usersRecord();
        $data['header_title'] = 'Users List';
        return view('admin.admin.list', $data);
    }//

    public function add()
    {
        $data['header_title'] = 'Add User';
        return view('admin.admin.add', $data);
    }//

    public function insert(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:20', 
            'status' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin.list')->with('success', 'User Added Successfully');
    }//

    public function edit($id){
        $data['userRecord'] = User::find($id);
        $data['header_title'] = 'Edit User';
        return view('admin.admin.edit', $data);
    }//

    public function update($id, Request $request){
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'required|min:6|max:20',
            'status' => 'required',
        ]);
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->status = $request->status;
        $user->save();
        return redirect()->route('admin.list')->with('success', 'User Updated Successfully');
    }//

    public function delete($id){
        $user = User::find($id);
        $user->status = -1;
        $user->save();
        return redirect()->route('admin.list')->with('success', 'User Deleted Successfully');
    }
}
