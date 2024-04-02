<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function login()
    {
        $data['header_title'] = 'Login';
        if(!empty(Auth::check())){
            return redirect()->route('admin.dashboard', $data);
        }
        return view('admin.auth.login');
    }//
    
    public function authenticate(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // dd(Hash::make(12345678));
        $remember = !empty($request->remember) ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->with('error', 'Please Enter Email & Password');
        }
    }//

    public function dashboard()
    {
        $data['header_title'] = 'Dashboard';
        return view('admin.dashboard', $data);
    }//

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }//
}
