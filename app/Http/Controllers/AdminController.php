<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function superAdmin()
    {
        return view('admin.super-admin');
    }
    
    public function systemSettings()
    {
        return view('admin.system-settings');
    }
    
    public function schoolAdmin()
    {
        return view('admin.school-admin');
    }
    
    public function manageUsers()
    {
        return view('admin.manage-users');
    }
    
    public function teacher()
    {
        return view('teacher.dashboard');
    }
    
    public function manageClasses()
    {
        return view('teacher.manage-classes');
    }
    
    public function student()
    {
        return view('student.dashboard');
    }
    
    public function myGrades()
    {
        return view('student.my-grades');
    }
    
    public function parent()
    {
        return view('parent.dashboard');
    }
    
    public function childGrades()
    {
        return view('parent.child-grades');
    }
    
    public function bursar()
    {
        return view('bursar.dashboard');
    }
    
    public function managePayments()
    {
        return view('bursar.manage-payments');
    }
}