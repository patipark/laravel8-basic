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

# route แบบมี parameter
Route::get('user/{id}', function ($id) {
    return 'User page id=' . $id;
});

# route แบบมี parameter และแบบ option คือส่งหรือไม่ส่งไปก็ได้
Route::get('member/{id?}', function ($id = null) {
    return 'Member id=' . ($id ?? '');
});

// optional parameter?
Route::get('member/{name?}', function ($name = null) {
    return 'Member name=' .($name ?? '');
});

// format parameter string
Route::get('category/{name}', function ($name) {
    return 'Category name=' . $name;
})->where(['name' => '[A-Za-z]+']);