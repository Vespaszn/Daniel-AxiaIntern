<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Public routes
Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Auth::routes();

// Role-based dashboard routes
Route::middleware(['auth'])->group(function () {
    // Home route that redirects based on role
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    // Individual dashboard routes
    Route::get('/superadmin/dashboard', [HomeController::class, 'superAdminDashboard'])->name('superadmin.dashboard')->middleware('role:SuperAdmin');
    Route::get('/schooladmin/dashboard', [HomeController::class, 'schoolAdminDashboard'])->name('schooladmin.dashboard')->middleware('role:SchoolAdmin');
    Route::get('/teacher/dashboard', [HomeController::class, 'teacherDashboard'])->name('teacher.dashboard')->middleware('role:Teacher');
    Route::get('/student/dashboard', [HomeController::class, 'studentDashboard'])->name('student.dashboard')->middleware('role:Student');
    Route::get('/parent/dashboard', [HomeController::class, 'parentDashboard'])->name('parent.dashboard')->middleware('role:Parent');
    Route::get('/bursar/dashboard', [HomeController::class, 'bursarDashboard'])->name('bursar.dashboard')->middleware('role:Bursar');
    
    // Role management (SuperAdmin only)
    Route::get('/manage-roles', [HomeController::class, 'manageRoles'])->name('manage.roles')->middleware('role:SuperAdmin');
});