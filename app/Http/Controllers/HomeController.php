<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index()
    {
        // Redirect users to their respective dashboards based on role
        if (auth()->check()) {
            if (auth()->user()->hasRole('SuperAdmin')) {
                return redirect()->route('superadmin.dashboard');
            } elseif (auth()->user()->hasRole('SchoolAdmin')) {
                return redirect()->route('schooladmin.dashboard');
            } elseif (auth()->user()->hasRole('Teacher')) {
                return redirect()->route('teacher.dashboard');
            } elseif (auth()->user()->hasRole('Student')) {
                return redirect()->route('student.dashboard');
            } elseif (auth()->user()->hasRole('Parent')) {
                return redirect()->route('parent.dashboard');
            } elseif (auth()->user()->hasRole('Bursar')) {
                return redirect()->route('bursar.dashboard');
            }
        }
        
        return view('home');
    }

    /**
     * Show SuperAdmin Dashboard
     */
    public function superAdminDashboard()
    {
        return view('dashboard.superadmin');
    }

    /**
     * Show SchoolAdmin Dashboard
     */
    public function schoolAdminDashboard()
    {
        return view('dashboard.schooladmin');
    }

    /**
     * Show Teacher Dashboard
     */
    public function teacherDashboard()
    {
        return view('dashboard.teacher');
    }

    /**
     * Show Student Dashboard
     */
    public function studentDashboard()
    {
        return view('dashboard.student');
    }

    /**
     * Show Parent Dashboard
     */
    public function parentDashboard()
    {
        return view('dashboard.parent');
    }

    /**
     * Show Bursar Dashboard
     */
    public function bursarDashboard()
    {
        return view('dashboard.bursar');
    }

    /**
     * Show Role Management Page
     */
    public function manageRoles()
    {
        return view('admin.manage-roles');
    }

}