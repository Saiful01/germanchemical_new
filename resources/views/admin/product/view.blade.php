@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">

            <div class="row">
                <div class="col-md-6">
                    <h4>Product</h4>
                </div>

                <div class="col-md-6">
                    <a class="btn btn-success float-right" href="/product/create">+New</a>
                </div>
            </div>

        </div>
        @if(Session::has('success'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
        @endif

        @if(Session::has('failed'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('failed') }}</p>
        @endif
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Title </th>
                <th>Details</th>
                <th>Image</th>
                <th> Action</th>



            </tr>
            </thead>

            @php($i=1)
            @foreach($result as $res)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$res->pro_title}} </td>
                    <td>{!! $res->pro_details !!} </td>
                    <td><img src="/images/product/{{$res->pro_image}}" height="50px"/> </td>

                    <td><a class="btn btn-sm btn-info" href="/product/edit/{{$res->pro_id}}">Edit</a><a class="btn btn-sm btn-danger" href="/product/delete/{{$res->pro_id}}" onclick="return confirm('Are you sure you want to delete this item')">Delete</a></td>


                </tr>

            @endforeach


        </table>



@endsection
