<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('slider_image')) {

            $image = $request->file('slider_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/slider');
            $image->move($destinationPath, $image_name);
            $array = [
                'slider_name' => $request['slider_name'],
                'slider_title' => $request['slider_title'],
                'slider_sub_title' => $request['slider_sub_title'],
                'slider_image' => $image_name,
            ];
        } else {
            $array = [
                'slider_name' => $request['slider_name'],
                'slider_title' => $request['slider_title'],
                'slider_sub_title' => $request['slider_sub_title']
            ];
        }


        try {
            Slider::create($array);
            //DB::table('sliders')->create($array);

            return back()->with('success', "Successfylly Saved");
        } catch (\Exception $exception) {

            return back()->with('failed', $exception->getMessage());

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return view('admin.slider.show')->with('result', Slider::get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($slider_id)
    {
        $result = Slider::where('slider_id', $slider_id)->first();

        return view('admin.slider.edit')->with('result', $result);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {

        if ($request->hasFile('slider_image')) {

            $image = $request->file('slider_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/slider');
            $image->move($destinationPath, $image_name);
            $array = [
                'slider_name' => $request['slider_name'],
                'slider_title' => $request['slider_title'],
                'slider_sub_title' => $request['slider_sub_title'],
                'slider_image' => $image_name,
            ];
        } else {
            $array = [
                'slider_name' => $request['slider_name'],
                'slider_title' => $request['slider_title'],
                'slider_sub_title' => $request['slider_sub_title']
            ];
        }


        try {
            Slider::where('slider_id', $request['slider_id'])->update($array);
            //DB::table('sliders')->create($array);

            return back()->with('success', "Successfylly updated");
        } catch (\Exception $exception) {

            return back()->with('failed', $exception->getMessage());

        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (Slider::count() <= 2) {
            return back()->with('failed', "You are not able to delete slider. Please update Slider image");
        }

        try {
            Slider::where('slider_id', $id)->delete();

            return back()->with('success', "Successfylly deleted");
        } catch (\Exception $exception) {

            return back()->with('failed', $exception->getMessage());

        }


    }
}
