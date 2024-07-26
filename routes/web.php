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
    return 'welcome';
});

//homepage//
Route::get('/homepage', function () {
    return view('homepage');
});
//institut-motdirecteur//
Route::get('/institut-motdirecteur', function () {
    return view('institut-motdirecteur');
});
//contact//
Route::get('/contact', function () {
    return view('contact');
});