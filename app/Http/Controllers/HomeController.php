<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Mockery\Exception;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!Auth::check()) {
                return Redirect::to('/admin/login');
            }
            return $next($request);
        });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function setting()
    {
        if (!Auth::check()) {
            Redirect::to('/admin/logout');
        }
        return view('admin.setting.index');
    }

    public function settingUpdate(Request $request)
    {

        if (Hash::check($request->old_password, Auth::user()->password)) {

            try {
                User::where('id', Auth::user()->id)->update([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'password' => Hash::make($request['password'])
                ]);

                return back()->with('success', "updated");
            } catch (Exception $exception) {
                return back()->with('failed', "There was a problem ");
            }
        } else {
            return back()->with('failed', "Old Password not matched");
        }



    }
}
