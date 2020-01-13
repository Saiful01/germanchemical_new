@extends('layouts.app')

@section('content')

    <style>


        .btn-big {
            height: 113px;
            line-height: 90px;
            font-size: 35px;
            border-radius: 2px;
            margin-bottom: 10px;
        }

    </style>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <a href="/slider/view" class="btn btn-primary btn-big btn-block">
                    Sliders

                </a>
            </div>
            <div class="col-md-3">
                <a href="/job/view" class="btn btn-secondary btn-big btn-block">
                    Jobs

                </a>
            </div>
            <div class="col-md-3">
                <a href="/applicant/view" class="btn btn-success btn-big btn-block">
                    Applicants

                </a>
            </div>


            <div class="col-md-3">
                <a href="/jobapplicant/show" class="btn btn-info btn-big btn-block">
                    Job Applicants

                </a>
            </div>

            <div class="col-md-3">
                <a href="/employee/view" class="btn btn-danger btn-big btn-block">
                    Employees

                </a>
            </div>
            <div class="col-md-3">
                <a href="/product/view" class="btn btn-success btn-big btn-block">
                    Products

                </a>
            </div>

            <div class="col-md-3">
                <a href="/contact/view" class="btn btn-info btn-big btn-block">
                    Latest Message

                </a>
            </div>

            <div class="col-md-3">
                <a href="/contact/view" class="btn btn-danger btn-big btn-block">
                    Latest Message

                </a>
            </div>
        </div>
    </div>

@endsection
