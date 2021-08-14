<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    //
    public function dbbuilder()
    {
        // อ่านข้อมูลทั้งหมดจากตาราง employees โดยจะคืนค่าเป็น json data
        // $employees = DB::table('employees')->get(); // select * from employees

        // อ่านข้อมูลเพียงรายการเดียวจากตาราง employees
        // $employees = DB::table('employees')->first(); // select * from employees limit 1

        // อ่านข้อมูลแบบระบุ field ที่ต้องการ
        // $employees = DB::table('employees')->first(['fullname','gender','email']); // select fullname, gender, email from employees

        // อ่านข้อมูลแบบระบุเงื่อนไข
        // $employees = DB::table('employees')->where('id', 2)->get();
        // $employees = DB::table('employees')->where('id', '>=', 2)->get(['id','fullname','email']);
        // $employees = DB::table('employees')
        //                     ->where('id', 2)
        //                     ->where('status',1)
        //                     ->orWhere('age',20)
        //                     ->first();

        // ค้นหาโดยระบุ id โดยตรง
        // $employees = DB::table('employees')->find(3); // select * from employees where id='3'

        // การนับจำนวน record
        // $employees = DB::table('employees')->count();

        // การหาค่าสูงสุด ต่ำสุด และค่าเฉลี่ย
        // $employees = DB::table('employees')->max('age');
        // $employees = DB::table('employees')->min('age');
        // $employees = DB::table('employees')->avg('age');


        // การจัดเรียนข้อมูล และการเลือกข้อมูลบางส่วน (limit)
        // $employees = DB::table('employees')->orderBy('age')->get(); // order asc
        // $employees = DB::table('employees')->orderByDesc('age')->get(); // order desc
        // $employees = DB::table('employees')->orderByDesc('age')->limit(2)->get();


        // การเพิ่มข้อมูลเข้าไปในตาราง --------------------------------------------
        // $data = array(
        //     'fullname' => 'Samit Koyom',
        //     'gender' => 'Male',
        //     'email' => 'samit@email.com',
        //     'tel' => '0898938889389',
        //     'age' => 38,
        //     'address' => '20/2 moo.2 bangkok',
        //     'avartar' => 'noavatar.jpg',
        //     'status' => 1
        // );

        // $employees = DB::table('employees')->insert($data);

        //  // การแก้ไขข้อมูลเข้าไปในตาราง --------------------------------------------
        // $data = array(
        //     'email' => 'samitkk@gmail.com',
        //     'tel' => '02222333444',
        //     'age' => 42
        // );

        // $employees = DB::table('employees')->where('id', 3)->update($data);


        // การลบข้อมูลเข้าไปในตาราง --------------------------------------------
        //  $employees = DB::table('employees')->where('id', 70000)->delete();

        $employees = DB::table('employees')->get();
        return $employees;
    }

    public function usemodel()
    {
        # การใช้งาน Model
        // อ่านข้อมูลทั้งหมดจากตาราง employees
        // $employees = Employee::all(); // select * from employees
        // $employees = Employee::all(['id','fullname']);

        // อ่านข้อมูลเพียงรายการเดียวจากตาราง employees
        // $employees = Employee::first();
        // $employees = Employee::first(['id','fullname']);

        // อ่านข้อมูลแบบระบุเงื่อนไข
        // $employees = Employee::where('id', 3)->get();
        // $employees = Employee::where('age', '>=', 27)->get();

        // การจัดเรียนข้อมูล และการเลือกข้อมูลบางส่วน
        // $employees = Employee::where('age', '>=', 27)
        //     ->orderByDesc('age')
        //     ->get();

        // การเพิ่มข้อมูลเข้าไปในตาราง --------------------------------------------
        $data = array(
            'fullname' => 'Samit Koyom',
            'gender' => 'Male',
            'email' => 'samit@email.com',
            'tel' => '0898938889389',
            'age' => 38,
            'address' => '20/2 moo.2 bangkok',
            'avartar' => 'noavatar.jpg',
            'status' => 1
        );

        $employees = Employee::create($data);

        return $employees;
    }
}
