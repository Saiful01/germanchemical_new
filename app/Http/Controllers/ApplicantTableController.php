<?php

namespace App\Http\Controllers;

use App\Applicant_table;
use Illuminate\Http\Request;

class ApplicantTableController extends Controller
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
        return view ('admin.applicant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $array=[
            'app_name'=>$request['app_name'],
            'app_email'=>$request['app_email'],
            'app_max_edu'=>$request['app_max_edu'],
            'app_phone'=>$request['app_phone'],
            'app_password'=>$request['app_password'],
         
        ];
         

        try{
             Applicant_Table::create($array);
            //DB::table('sliders')->create($array);

           return redirect('pages.career.apply')->with('success',"Successfylly Saved");
        }catch(\Exception $exception){

            //return $exception->getMessage();
            return back()->with('failed',$exception->getMessage());
      
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Applicant_table  $applicant_table
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant_table $applicant_table)
    {
        return view('admin.applicant.view')->with('result',Applicant_table::get());
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Applicant_table  $applicant_table
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant_table $applicant_table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Applicant_table  $applicant_table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant_table $applicant_table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Applicant_table  $applicant_table
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //return $id;
        try{   
            Applicant_Table ::where('id',$id)->delete();
            

            return back()->with('success',"Successfylly deleted");
        }catch(\Exception $exception){

            return back()->with('failed',$exception->getMessage());
      
        }
    }
}
