@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">

            <div class="row">
                <div class="col-md-6">
                    <h4>Slider</h4>
                </div>

                <div class="col-md-6">
                    <a class="btn btn-outline-info float-right" href="/slider/create">+New</a>
                </div>
            </div>

        </div>

        <div class="card-body">

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
                    <th>Name</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Image</th>
                    <th>Action</th>


                </tr>
                </thead>

                @php($i=1)
                @foreach($result as $res)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$res->slider_name}} </td>
                        <td>{{$res->slider_title}} </td>
                        <td>{{$res->slider_sub_title}} </td>
                        <td><img src="/images/slider/{{$res->slider_image}}" width="100px" height="70px"/></td>
                        <td><a class="btn btn-sm btn-info" href="/slider/edit/{{$res->slider_id}}">Edit</a> <a
                                    class="btn btn-sm btn-danger" href="/slider/delete/{{$res->slider_id}}" onclick="return confirm('Are you sure you want to delete this item')">Delete</a></td>


                    </tr>

                @endforeach


            </table>

        </div>
    </div>

@endsection
