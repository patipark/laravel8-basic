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
    // return view('welcome');
    return 'This is home page route';
});

# http://xxxxxxxx/about
Route::get('about', function () {
    return 'About page';
});

# http://xxxxxxxx/service
Route::get('service', function () {
    return 'Service page';
});

# http://xxxxxxxx/contact
Route::get('contact', function () {
    return 'Contact page';
});

# http://xxxxxxxx/login
Route::get('login', function () {
    return 'Lgin page';
});