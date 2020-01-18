@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">

            <h4>Applicant List</h4>
            <hr>
        </div>

        <div class="card-body">


            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Applicant name</th>
                    <th> Email</th>
                    <th>phone</th>
                    <th> NID number</th>
                    <th> Interested Field</th>
                    <th> Cv</th>
                    <th> Action</th>

                </tr>
                </thead>

                @php($i=1)
                @foreach($result as $res)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$res->apply_name}} </td>
                        <td>{{$res->apply_email}} </td>
                        <td>{{$res->apply_phone}} </td>
                        <td>{{$res->apply_nid}}</td>
                        <td>{{$res->apply_interest}}</td>
                        <td>{{-- @if(strcmp(substr($res->apply_cv, -3),"pdf")==0)
                                <iframe src="/cv/{{$res->apply_cv}}" ></iframe>
                            @else
                                <a href="/cv/{{$res->app_cv}}" download>Download CV </a>
                            @endif--}}
                            <a href="/cv/{{$res->apply_cv}}" download>Download CV </a>

                        </td>
                        <td><a class="btn btn-danger" href="/apply/delete/{{$res->apply_id}}">Delete</a></td>


                    </tr>

                @endforeach


            </table>



@endsection
