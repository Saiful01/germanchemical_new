<?php

namespace App\Http\Controllers;

use App\Contac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ControllerEng extends Controller
{
    public function home()
    {
         $result = \App\Slider::get();
        return view('home')->with('sliders', $result);
    }

    public function companyintro()
    {

        return view('pages.company.companyintro');
    }

    public function MFChairman()
    {

        return view('pages.company.MFChairman');
    }

    public function prd()
    {

        return view('pages.company.prd');
    }

    public function pr()
    {

        return view('pages.company.pr');
    }

    public function contact()
    {

        return view('pages.contact');
    }

    public function messageStore(Request $request)
    {
        unset($request['_token']);
        try {
            Contac::create($request->all());

            //TODO::send email
            $msg = $request['con_name'] . ", " . $request['con_email'] . " Sent you message: " . $request['con_msg'];
           // Mail::to();
            mail("info@germanchemicalsltd.com", "Mail from Website", $msg);

            return back()->with('success', "Your message have been submitted.");
        } catch (\Exception $exception) {

            return back()->with('failed', $exception->getMessage());

        }

    }

    public function desired()
    {

        return view('pages.career.desired');
    }

    public function hr()
    {

        return view('pages.career.hr');
    }

    public function recruitment()
    {

        return view('pages.career.recruitment');
    }

    public function information()
    {

        return view('pages.career.information');
    }

    public function media()
    {

        return view('pages.media');
    }

    public function products()
    {

        $result = \App\Product::get();
        return view('pages.products.products')->with('result', $result);
    }

    public function webmails()
    {

        return view('pages.webmails');
    }

    public function career()
    {

        return view('pages.career');
    }
}
