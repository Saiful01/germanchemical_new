<?php

namespace App\Http\Controllers;

use App\Contac;
use Illuminate\Http\Request;

class ContacController extends Controller
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
        return view ('admin.contac.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            Contac::create($request->all());

           return back()->with('success',"Successfylly Saved");
       }catch(\Exception $exception){

           return back()->with('failed',$exception->getMessage());
     
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contac  $contac
     * @return \Illuminate\Http\Response
     */
    public function show(Contac $contac)
    {
        return view('admin.contac.view')->with('result',Contac::get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contac  $contac
     * @return \Illuminate\Http\Response
     */
    public function edit(Contac $contac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contac  $contac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contac $contac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contac  $contac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contac $contac)
    {
        //
    }
}
