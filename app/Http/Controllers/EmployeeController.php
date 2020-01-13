<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
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
        return view ('admin.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('emp_image')) {
           
            $image = $request->file('emp_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/employee');
            $image->move($destinationPath, $image_name);
            $array=[
                'emp_name'=>$request['emp_name'],
                'emp_email'=>$request['emp_email'],
                'emp_phone'=>$request['emp_phone'],
                'emp_bio'=>$request['emp_bio'],
                'emp_image'=>$image_name,
                'emp_designation'=>$request['emp_designation'],
                'emp_join_date'=>$request['emp_join_date'],
            ];
        }else{
            $array=[
                'emp_name'=>$request['emp_name'],
                'emp_email'=>$request['emp_email'],
                'emp_phone'=>$request['emp_phone'],
                'emp_bio'=>$request['emp_bio'],
                'emp_designation'=>$request['emp_designation'],
                'emp_join_date'=>$request['emp_join_date'],
            ];
        }
        
         

        try{
            Employee::create($array);
            //DB::table('sliders')->create($array);

            return back()->with('success',"Successfylly Saved");
        }catch(\Exception $exception){

            return back()->with('failed',$exception->getMessage());
      
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('admin.employee.view')->with('result',Employee::get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result= Employee::where('emp_id',$id)->first();

        return view('admin.employee.edit')->with('result', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        if ($request->hasFile('emp_image')) {
           
            $image = $request->file('emp_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/employee');
            $image->move($destinationPath, $image_name);
            $array=[
                'emp_name'=>$request['emp_name'],
                'emp_email'=>$request['emp_email'],
                'emp_phone'=>$request['emp_phone'],
                'emp_bio'=>$request['emp_bio'],
                'emp_image'=>$image_name,
                'emp_designation'=>$request['emp_designation'],
                'emp_join_date'=>$request['emp_join_date'],
            ];
        }else{
            $array=[
                'emp_name'=>$request['emp_name'],
                'emp_email'=>$request['emp_email'],
                'emp_phone'=>$request['emp_phone'],
                'emp_bio'=>$request['emp_bio'],
                'emp_designation'=>$request['emp_designation'],
                'emp_join_date'=>$request['emp_join_date'],
            ];
        }
        
         

        try{
            Employee::where('emp_id',$request['emp_id'])->update($array);

            return back()->with('success',"Successfylly updated");
        }catch(\Exception $exception){

            return back()->with('failed',$exception->getMessage());
      
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            Employee:: where('emp_id',$id)->delete();
            return back()->with('success',"Successfully deleted" );
        }catch (\Exception $exception) {

            return back()->with ('failed',$exception->getMessage());
        }
    }
}
