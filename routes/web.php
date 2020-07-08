<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
    Route::get('/', ['middleware' => 'auth', 'uses' => 'Teach\TeachController@profile']);
    Route::get('/calendar', ['middleware' => 'auth', 'uses' => 'Teach\TeachController@getCalendar']);
    Route::get('/student', ['middleware' => 'auth', 'uses' => 'Teach\TeachController@getStudent']);
    Route::get('/attendance', ['middleware' => 'auth', 'uses' => 'Teach\TeachController@getAttendance']);
    Route::get('/my-payment', ['middleware' => 'auth', 'uses' => 'Teach\TeachController@getMyPayment']);
    Route::get('/logout', ['middleware' => 'auth', 'uses' => 'Teach\TeachController@logout']);
    Route::post('/add-attendance', ['middleware' => 'auth', 'uses' => 'Teach\TeachController@addAtendance']);
    Route::post('/update-profile', ['middleware' => 'auth', 'uses' => 'Teach\TeachController@UpdateTeachProfile']);
//Route::get('/', function () {
//    return view('profile');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register-teacher', 'Teach\TeachController@registerTeacher');
Route::post('/add-teachers', 'Teach\TeachController@addTeacher');
