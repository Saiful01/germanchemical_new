<?php

namespace App\Http\Controllers;

class ControllerBangla extends Controller
{

    public function home()
    {
        $result = \App\Slider::get();
        return view('pages.bangla.home')->with('result', $result);
    }
}
