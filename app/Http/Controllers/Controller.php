<?php

namespace App\Http\Controllers;


use App\job;
use App\JobApplicant;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function email(Request $request)
    {

        try {
            $msg = "Email from: " . $request['name'] . "<br> Phone" . $request['phone'] . "<br>  Email: " . $request['email'] . "<br>  Message: " . $request['message'];
            $email = "info@germanchemicalltd.com";

            mail($email, "Mail from German Chemical Website", $msg);

            return back()->with('success', "Successfully Mail Send");
        } catch (\Exception $exception) {
            return back()->with('failed', "There is a problem");
        }
        // the message


    }


    public function apply()
    {

        $result = Job::get();
        return view('pages.career.apply')->with('result', $result);

    }


    public function jobDetail($id)
    {

        $result = Job::where('job_id', $id)->first();

        $job_list = job::limit(10)->get();
        return view('pages.career.job-detail')
            ->with('job_list', $job_list)
            ->with('result', $result);

    }

    public function jobApply($id)
    {

        $result = Job::where('job_id', $id)->first();
        return view('pages.career.job-apply')
            ->with('id', $id)
            ->with('result', $result);

    }

    public function jobApplicantInsert(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'app_name' => 'required',
            'email' => 'required',
            'app_max_edu' => 'required',
            'phone' => 'required',
            'app_cv' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->with('failed', "All fields required.");
        }


        if ($request->hasFile('app_cv')) {

            $cv = $request->file('app_cv');
            $cv_name = time() . '.' . $cv->getClientOriginalExtension();
            $destinationPath = public_path('/cv');
            $cv->move($destinationPath, $cv_name);
            $applicant_array = [
                'app_name' => $request['app_name'],
                'app_email' => $request['email'],
                'app_max_edu' => $request['app_max_edu'],
                'app_phone' => $request['phone'],
                'app_cv' => $cv_name

            ];
        } else {
            $applicant_array = [
                'app_name' => $request['app_name'],
                'app_email' => $request['email'],
                'app_max_edu' => $request['app_max_edu'],
                'app_phone' => $request['phone']

            ];
        }


        try {
            /*$is_exist=JobApplicant::where('app_phone',$request['phone'])->first();
            if(!is_null($is_exist)){
                return back()->with('failed', "Already Applied for this job");
            }*/

            $applicant_id = DB::table('applicant_tables')->insertGetId($applicant_array);

            //Todo::insert into JobApplicant Table
            $job_applicant_array = [
                'job_id' => $request['id'],
                'applicant_id' => $applicant_id

            ];

            JobApplicant::create($job_applicant_array);

            return redirect()->to('/apply')->with('success', "Successfully Applied.");


        } catch (\Exception $exception) {

            //return back()->with('failed', "There is an Error, Try again later");
            return back()->with('failed', $exception->getMessage());

        }


    }

}
