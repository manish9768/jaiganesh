<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function __construct()
    {

    }

    public function getLogin()
    {
        if (Auth::check()) {
            return redirect()->to('admin');
            // return view('admin.dashboard');
        } else {
            return view('login');
        }
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = $request->only('username', 'password');
        $remember_me = false;
        if ($request->has('remember')) {
            $remember_me = true;
        }

        if (Auth::attempt($credentials, $remember_me)) {

            // return redirect()->intended('admin');
            return view('home');
        } else {  
        	\Session::flash('error','Incorrect username or password. Please try again.');
            return redirect()->back()->withInput();
        }
    }

    public function getLogout()
    {
        if (Auth::check()) {
        	Auth::logout(); 
            return redirect()->to('login');
        } else {  
            return redirect()->to('login');
        }
    }

    public function getHome()
    {   
        $data['topbar'] = 'home';
        return view('home',$data);
    }

    public function getAboutus()
    {   
        $data['topbar'] = 'about';
        return view('aboutus',$data);
    }

    public function getContactus()
    {   
        $data['topbar'] = 'contact';
        return view('contactus',$data);
    }
}
