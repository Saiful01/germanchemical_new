<?php

namespace App\Http\Controllers;

use App\JobApplicant;
use Illuminate\Http\Request;

class JobApplicantController extends Controller
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
        return view('admin.jonapplicant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobApplicant  $jobApplicant
     * @return \Illuminate\Http\Response
     */
    public function show(JobApplicant $jobApplicant)
    {
         $result= JobApplicant::join('applicant_tables','applicant_tables.id','=','job_applicants.applicant_id')->get();
        return view ('admin.jobapplicant.show',compact ('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobApplicant  $jobApplicant
     * @return \Illuminate\Http\Response
     */
    public function edit(JobApplicant $jobApplicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobApplicant  $jobApplicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobApplicant $jobApplicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobApplicant  $jobApplicant
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        try{   
            JobApplicant ::where('id',$id)->delete();
            

            return back()->with('success',"Successfylly deleted");
        }catch(\Exception $exception){

            return back()->with('failed',$exception->getMessage());
      
        }
    }
}
