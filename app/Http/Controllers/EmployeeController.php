<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    //
    public function index(){
        // อ่านข้อมูลทั้งหมดจากตาราง employees โดยจะคืนค่าเป็น json data
        // $employees = DB::table('employees')->get(); // select * from employees

        // อ่านข้อมูลเพียงรายการเดียวจากตาราง employees
        $employees = DB::table('employees')->first(); // select * from employees limit 1

        return $employees;
    }
}
