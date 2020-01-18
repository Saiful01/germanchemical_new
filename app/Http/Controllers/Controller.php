<?php

namespace App\Http\Controllers;


use App\applys;
use App\job;
use App\JobApplicant;
use Exception;
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
        } catch (Exception $exception) {
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
            'apply_name' => 'required',
            'apply_email' => 'required',
            'apply_phone' => 'required',
            'apply_nid' => 'required',
            'apply_cv' => 'required',
            'apply_interest' => 'required',

        ]);
        if ($validator->fails()) {
            return back()->with('failed', "All fields required.");
        }


        if ($request->hasFile('apply_cv')) {

            $cv = $request->file('apply_cv');
            $cv_name = time() . '.' . $cv->getClientOriginalExtension();
            $destinationPath = public_path('/cv');
            $cv->move($destinationPath, $cv_name);
            $applicant_array = [
                'apply_name' => $request['apply_name'],
                'apply_email' => $request['apply_email'],
                'apply_phone' => $request['apply_phone'],
                'apply_nid' => $request['apply_nid'],
                'apply_interest' => $request['apply_interest'],
                'apply_cv' => $cv_name

            ];
        } else {
            $applicant_array = [
                'apply_name' => $request['apply_name'],
                'apply_email' => $request['apply_email'],
                'apply_phone' => $request['apply_phone'],
                'apply_nid' => $request['apply_nid'],
                'apply_interest' => $request['apply_interest']

            ];
        }


        try {
            /*$is_exist=JobApplicant::where('app_phone',$request['phone'])->first();
            if(!is_null($is_exist)){
                return back()->with('failed', "Already Applied for this job");
            }*/

            $applicant_id = DB::table('apply_tables')->insertGetId($applicant_array);

            //Todo::insert into JobApplicant Table
            $job_applicant_array = [
                'job_id' => $request['id'],
                'apply_id' => $applicant_id

            ];

            JobApplicant::create($job_applicant_array);

            return redirect()->to('/apply')->with('success', "Successfully Applied.");


        } catch (Exception $exception) {

            //return back()->with('failed', "There is an Error, Try again later");
            return back()->with('failed', $exception->getMessage());

        }


    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'apply_name' => 'required',
            'apply_email' => 'required',
            'apply_phone' => 'required',
            'apply_nid' => 'required',
            'apply_cv' => 'required',
            'apply_interest' => 'required',

        ]);
        if ($validator->fails()) {
            return back()->with('failed', "All fields required.");
        }


        if ($request->hasFile('apply_cv')) {

            $cv = $request->file('apply_cv');
            $cv_name = time() . '.' . $cv->getClientOriginalExtension();
            $destinationPath = public_path('/cv');
            $cv->move($destinationPath, $cv_name);
            $array = [
                'apply_name' => $request['apply_name'],
                'apply_email' => $request['apply_email'],
                'apply_phone' => $request['apply_phone'],
                'apply_nid' => $request['apply_nid'],
                'apply_interest' => $request['apply_interest'],
                'apply_cv' => $cv_name

            ];
        } else {
            $array = [
                'apply_name' => $request['apply_name'],
                'apply_email' => $request['apply_email'],
                'apply_phone' => $request['apply_phone'],
                'apply_nid' => $request['apply_nid'],
                'apply_interest' => $request['apply_interest']

            ];

        }
        try {
            //applys::create($array);
            DB::table('applys')->insert($array);

            return back()->with('success', "Successfylly Saved");
        } catch (Exception $exception) {

            //return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());

        }


    }

    public function lol()
    {

        return view('admin.apply.view')
            ->with('result', DB::table('applys')->orderBy('apply_id', 'DESC')->get());
    }

    public function destroy($id)
    {
        //return $id;
        try {
            DB::table('applys')->where('apply_id', $id)->delete();


            return back()->with('success', "Successfylly deleted");
        } catch (Exception $exception) {

            return back()->with('failed', $exception->getMessage());

        }
    }

}
