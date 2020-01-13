<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        return view ('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('pro_image')) {

    
            $image = $request->file('pro_image');
            $image_name = time() . '.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/product');
            $image->move($destinationPath,$image_name);
            $array= [

                'pro_title'=>$request['pro_title'],
                'pro_details'=>$request['pro_details'],
                'pro_image'=>$image_name,
                'pro_price'=>$request['pro_price'],
            ];
        }else{
            $array= [

                'pro_title'=>$request['pro_title'],
                'pro_details'=>$request['pro_details'],
                'pro_price'=>$request['pro_price'],
            ];


        }
        try {
            Product::create($array);
            return back()-> with('success',"Successfully Saved");
        }catch(\Exception $exception) {

            return back()->with('failed',$exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.product.view')->with('result',Product::get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $result= Product::where('pro_id',$id)->first();

        return view('admin.product.edit')->with('result', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        
        if ($request->hasFile('pro_image')) {

            $image = $request->file('pro_image');
            $image_name = time() . '.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/product');
            $image->move($destinationPath,$image_name);
            $array= [

                'pro_title'=>$request['pro_title'],
                'pro_details'=>$request['pro_details'],
                'pro_image'=>$image_name,
                'pro_price'=>$request['pro_price'],
            ];
        }else{
            $array= [

                'pro_title'=>$request['pro_title'],
                'pro_details'=>$request['pro_details'],
                'pro_price'=>$request['pro_price'],
            ];


        }
        try {
            Product::where('pro_id',$request['pro_id'])->update($array);
            return back()-> with('success',"Successfully Updated");
        }catch(\Exception $exception) {

            return back()->with('failed',$exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        try {

            Product:: where('pro_id',$id)->delete();
            return back()->with('success',"Successfully deleted" );
        }catch (\Exception $exception) {

            return back()->with ('failed',$exception->getMessage());
        }
    }
    public function details($id) {


        $result=Product::where('pro_id',$id)->first();
        return view('pages.products.details')->with('result',$result);

    }
    }

