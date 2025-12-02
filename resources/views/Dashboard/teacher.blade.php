@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Teacher Dashboard</h4>
                    <small>Teaching and Classroom Management</small>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">My Classes</h5>
                                    <h2 class="text-primary">6</h2>
                                    <p class="card-text">Assigned Classes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Students</h5>
                                    <h2 class="text-success">186</h2>
                                    <p class="card-text">Total Students</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Assignments</h5>
                                    <h2 class="text-info">8</h2>
                                    <p class="card-text">Pending Grading</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Lessons</h5>
                                    <h2 class="text-warning">3</h2>
                                    <p class="card-text">Today's Schedule</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Today's Schedule</h6>
                                </div>
                                <div class="card-body">
                                    <div class="list-group">
                                        <div class="list-group-item">8:00 AM - Mathematics (JSS 2A)</div>
                                        <div class="list-group-item">10:00 AM - Physics (SS 1B)</div>
                                        <div class="list-group-item">1:00 PM - Mathematics (JSS 3C)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Quick Actions</h6>
                                </div>
                                <div class="card-body">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary mb-2">Take Attendance</button>
                                        <button class="btn btn-success mb-2">Create Assignment</button>
                                        <button class="btn btn-info mb-2">Record Results</button>
                                        <button class="btn btn-warning">Lesson Plans</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection