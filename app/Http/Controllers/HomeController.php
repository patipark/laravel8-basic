<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return 'หน้า home';
    }

    public function about(){
        return 'หน้า about';
    }

    public function service(){
        return 'หน้า service';
    }

    public function contact(){
        return 'หน้า contact';
    }

    public function login(){
        return 'หน้า login';
    }
}
