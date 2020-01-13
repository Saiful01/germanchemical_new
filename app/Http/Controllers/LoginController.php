<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function loginCheck(Request $request)
    {

        $array = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        $remember = true;
        if (Auth::attempt($array, $remember)) {

            return redirect()->to('/home');
        } else {
            return back()->with('failed', "Email or password is wrong");
        }
    }

    public function logout(){


        Auth::logout();

        return redirect()->to('/admin/login');
    }
}
