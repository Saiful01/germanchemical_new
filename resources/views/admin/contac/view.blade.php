@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">

            <h1 class="text-center text-primary">Contact List</h1>
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
                    <th>Contact name</th>
                    <th> Email</th>
                    <th> phone</th>
                    <th> message</th>
                    <th> Delete</th>
                </tr>
                </thead>

                @php($i=1)
                @foreach($result as $res)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$res->con_name}} </td>
                        <td>{{$res->con_email}} </td>
                        <td>{{$res->con_phone}}</td>
                        <td>{{$res->con_msg}}</td>
                        <td><a class="btn btn-danger" href="/contac/delete/{{$res->con_id}}">Delete</a></td>

                    </tr>

                @endforeach


            </table>



@endsection
