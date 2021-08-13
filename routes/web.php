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

// format parameter integer
Route::get('group/{id}', function ($id) {
    return 'Category name=' . $id;
})->where(['id' => '[0-9]+']);

// alias route ==> http://xxxxxxxxx/newurl/travel  (name=travel)
Route::get('product/category/set/{name}', function ($name) {
    return 'Category name=' . $name;
})->name('newurl');


#การแสดง csrf token ของ laravel เพื่อนำไปใส่ใน header แนบส่งมากับ requet เมื่อต้องการเข้าถึงด้วย method post หรือ method อื่นๆที่ laravel บังคับให้ต้องแนบ csrf มาทุกครั้ง
Route::get('/csrf', function () {
    return csrf_token();
});

#สอบเรียก method post ด้วยการแนบ csrf token กับ header โดยตั้งชื่อว่า X-CSRF-TOKEN = token ที่ได้จาก route ด้านบน
Route::post('product', function () {
    return 'product page xxxxxxx';
});

########## send route to controller กรณีไม่ได้ use namespace class controller ###########
// // Route::get('/','HomeController@home'); // version < 8
Route::get('/','App\Http\Controllers\HomeController@home'); // version 8 up
Route::get('/service','App\Http\Controllers\HomeController@service');
Route::get('/about','App\Http\Controllers\HomeController@about');
Route::get('/contact','App\Http\Controllers\HomeController@contact');
Route::get('/login','App\Http\Controllers\HomeController@login');
