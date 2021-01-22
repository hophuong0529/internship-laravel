<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $auth = $this->auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        if(!$auth) {
            return back()->withErrors("Email and password not matching!!");
        }
        return redirect()->route('admin.home');
    }

    public function auth($guard = 'web')
    {
        return Auth::guard($guard);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

}
