@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">School Administrator Dashboard</h4>
                    <small>School Management Panel</small>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Students</h5>
                                    <h2 class="text-primary">856</h2>
                                    <p class="card-text">Total Students</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Teachers</h5>
                                    <h2 class="text-success">42</h2>
                                    <p class="card-text">Teaching Staff</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Classes</h5>
                                    <h2 class="text-info">24</h2>
                                    <p class="card-text">Active Classes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Attendance</h5>
                                    <h2 class="text-warning">94%</h2>
                                    <p class="card-text">Today's Rate</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <h5>School Management</h5>
                            <div class="d-grid gap-2 d-md-flex">
                                <button class="btn btn-primary me-2">Manage Students</button>
                                <button class="btn btn-success me-2">Manage Teachers</button>
                                <button class="btn btn-info me-2">Class Setup</button>
                                <button class="btn btn-warning me-2">Academic Calendar</button>
                                <button class="btn btn-secondary">Reports</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection