<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//admin login strat
Route::get('/admin/login', 'LoginController@login');
Route::post('/admin/login/check', 'LoginController@loginCheck');

//end admin login
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/logout', 'LoginController@logout');

//Admin Section slider
Route::get('/slider/create', 'SliderController@create');
Route::post('/slider/store', 'SliderController@store');
Route::get('/slider/view', 'SliderController@show');
Route::get('/slider/edit/{id}', 'SliderController@edit');

Route::post('/slider/update', 'SliderController@update');
Route::get('/slider/delete/{id}', 'SliderController@destroy');


//Admin Section job
Route::get('/job/create', 'JobController@create');
Route::post('/job/store', 'JobController@store');
Route::get('/job/view', 'JobController@show');
Route::get('/job/edit/{id}', 'JobController@edit');
Route::get('/job/applicant/{id}', 'JobController@applicant');
Route::post('/job/update', 'JobController@update');
Route::get('/job/delete/{id}', 'JobController@destroy');
Route::get('/jobapplicant/show/{id}', 'JobController@applicant');


//Admin section Apllicant table
Route::get('/applicant/create', 'ApplicantTableController@create');
Route::post('/applicant/store', 'ApplicantTableController@store');
Route::get('/applicant/view', 'ApplicantTableController@show');
Route::get('/applicant/delete/{id}', 'ApplicantTableController@destroy');


//admin JobApplicant table
Route::get('/jobapplicant/create', 'JobApplicantController@create');
Route::get('/jobapplicant/show', 'JobApplicantController@show');
Route::get('/jobapplicant/delete/{id}', 'JobApplicantController@destroy');

//admin section Employee manage...
Route::get('/employee/create', 'EmployeeController@create');
Route::post('/employee/store', 'EmployeeController@store');
Route::get('/employee/view', 'EmployeeController@show');
Route::get('/employee/edit/{id}', 'EmployeeController@edit');
Route::post('/employee/update', 'EmployeeController@update');
Route::get('/employee/delete/{id}', 'EmployeeController@destroy');

//admin section product manage...
Route::get('/product/create', 'ProductController@create');
Route::post('/product/store', 'ProductController@store');
Route::get('/product/view', 'ProductController@show');
Route::get('/product/edit/{id}', 'ProductController@edit');
Route::get('/pages/products/details/{id}', 'ProductController@details');
Route::post('/product/update', 'ProductController@update');
Route::get('/product/delete/{id}', 'ProductController@destroy');

// admin section contac list
Route::get('/contac/create', 'ContacController@create');
Route::post('/contac/store', 'ContacController@store');
Route::get('/contact/view', 'ContacController@show');
Route::get('/contac/delete/{id}', 'ContacController@destroy');


//Public

Route::get('/', 'ControllerEng@home');
Route::get('/eng/home', 'ControllerEng@home');

Route::get('/companyintro', 'ControllerEng@companyintro');
Route::get('/MFChairman', 'ControllerEng@MFChairman');
Route::get('/prd', 'ControllerEng@prd');
Route::get('/pr', 'ControllerEng@pr');
Route::get('/contact', 'ControllerEng@contact');
Route::post('/message/store', 'ControllerEng@messageStore');
Route::get('/desired', 'ControllerEng@desired');
Route::get('/hr', 'ControllerEng@hr');
Route::get('/recruitment', 'ControllerEng@recruitment');
Route::get('/information', 'ControllerEng@information');


Route::get('/apply', 'Controller@apply');
Route::get('/job/job-detail/{id}', 'Controller@jobDetail');
Route::get('/job/job-apply/{id}', 'Controller@jobApply');
Route::post('/applicant/job-apply', 'Controller@jobApplicantInsert');

Route::get('/media', 'ControllerEng@media');
Route::get('/products', 'ControllerEng@products');
Route::get('/career', 'ControllerEng@career');
Route::get('/webmails', 'ControllerEng@webmails');


Auth::routes();


//Email
Route::post('/email', 'Controller@email');


//For Bangla
Route::group(['prefix' => 'bangla', 'as' => 'bangla.'], function () {

    Route::get('/home', 'ControllerBangla@home');

});



