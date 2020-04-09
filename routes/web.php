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

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login','login@getData')->name('login.insert');


Route::get('/newtest', function () {
   return view('newtest');
});



Route::post('/newtest','newtest@getData')->name('newtest.create');



Route::get('/registration','registration@create')->name('regist.create');


Route::post('/registration','registration@insertData')->name('regist.create');



Route::get('/userdetails','usersDetails@index')->name('user.details');;

