<?php

use App\Course;
use App\User;

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/onthia1', function () {
    return view('questiona1');
})->name('questiona1');

Route::get('/onthib1', function () {
    return view('questionb1');
})->name('questionb1');

Route::get('/onthic', function () {
    return view('questionc');
})->name('questionc');

Route::get('/onthid', function () {
    return view('questiond');
})->name('questiond');

Route::resource('/user', 'UserController')->except('show')->middleware('auth');

Route::resource('/theodoi1', 'TheodoiController')->except('show')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/course', 'CourseController@index')->name('course.index');

Route::resource('/course', 'CourseController')->except('index', 'show')->middleware('auth');

Route::get('/course/{course}/enroll', 'CourseController@enroll')->name('course.enroll');

Route::get('/course/{course}/unenroll', 'CourseController@unenroll')->name('course.unenroll');

Route::get('/course/{course}/complete', 'CourseController@complete')->name('course.complete');

Route::get('/course/{course}', 'CourseController@show')->name('course.show');

Route::resource('/user', 'UserController')->except('show')->middleware('auth');

Route::get('/user/{user}/account', 'UserController@account')->name('user.account');

Route::get('/dashboard', 'EnrollmentController@dashboard')->name('dashboard')->middleware('auth');

Route::get('/dashboard/{user}/{course}/approve', 'EnrollmentController@approve')->name('enrollment.approve');

Route::get('/dashboard/{user}/{course}/disapprove', 'EnrollmentController@disapprove')->name('enrollment.disapprove');

Route::resource('/theodoi', 'theodoiController');

Route::resource('/', 'CourseController');
Route::get('/introduction',function(){
    return view('intro');
})->name('intro');