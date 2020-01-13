@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">

            <h4>Applicant List</h4>
            <hr>
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
                    <th>Applicant name</th>
                    <th> Email</th>
                    <th>Max Qualification level</th>
                    <th> phone</th>
                    <th> Delete</th>

                </tr>
                </thead>

                @php($i=1)
                @foreach($result as $res)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$res->app_name}} </td>
                        <td>{{$res->app_email}} </td>
                        <td>{{$res->app_max_edu}} </td>
                        <td>{{$res->app_phone}}</td>
                        <td><a class="btn btn-danger" href="/applicant/delete/{{$res->id}}">Delete</a></td>


                    </tr>

                @endforeach


            </table>



@endsection
