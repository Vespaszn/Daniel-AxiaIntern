<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return view('welcome');
});

// Protected routes with role-based access
Route::middleware(['auth'])->group(function () {
    // Dashboard accessible by all authenticated users
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // SuperAdmin only routes
    Route::middleware(['role:SuperAdmin'])->group(function () {
        Route::get('/super-admin', [AdminController::class, 'superAdmin'])->name('super.admin');
        Route::get('/system-settings', [AdminController::class, 'systemSettings'])->name('system.settings');
    });
    
    // SchoolAdmin only routes
    Route::middleware(['role:SchoolAdmin'])->group(function () {
        Route::get('/school-admin', [AdminController::class, 'schoolAdmin'])->name('school.admin');
        Route::get('/manage-users', [AdminController::class, 'manageUsers'])->name('manage.users');
    });
    
    // Teacher only routes
    Route::middleware(['role:Teacher'])->group(function () {
        Route::get('/teacher', [AdminController::class, 'teacher'])->name('teacher.dashboard');
        Route::get('/manage-classes', [AdminController::class, 'manageClasses'])->name('manage.classes');
    });
    
    // Student only routes
    Route::middleware(['role:Student'])->group(function () {
        Route::get('/student', [AdminController::class, 'student'])->name('student.dashboard');
        Route::get('/my-grades', [AdminController::class, 'myGrades'])->name('my.grades');
    });
    
    // Parent only routes
    Route::middleware(['role:Parent'])->group(function () {
        Route::get('/parent', [AdminController::class, 'parent'])->name('parent.dashboard');
        Route::get('/child-grades', [AdminController::class, 'childGrades'])->name('child.grades');
    });
    
    // Bursar only routes
    Route::middleware(['role:Bursar'])->group(function () {
        Route::get('/bursar', [AdminController::class, 'bursar'])->name('bursar.dashboard');
        Route::get('/manage-payments', [AdminController::class, 'managePayments'])->name('manage.payments');
    });
});