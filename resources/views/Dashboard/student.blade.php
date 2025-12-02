@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">Student Dashboard</h4>
                    <small>Learning Portal - Welcome back!</small>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Class</h5>
                                    <h2 class="text-primary">JSS 2A</h2>
                                    <p class="card-text">Current Class</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Average</h5>
                                    <h2 class="text-success">78%</h2>
                                    <p class="card-text">Current Average</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Assignments</h5>
                                    <h2 class="text-info">5</h2>
                                    <p class="card-text">Pending</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Attendance</h5>
                                    <h2 class="text-warning">96%</h2>
                                    <p class="card-text">This Term</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Today's Classes</h6>
                                </div>
                                <div class="card-body">
                                    <div class="list-group">
                                        <div class="list-group-item">Mathematics - 8:00 AM</div>
                                        <div class="list-group-item">English - 9:00 AM</div>
                                        <div class="list-group-item">Science - 10:30 AM</div>
                                        <div class="list-group-item">Social Studies - 1:00 PM</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h6>My Activities</h6>
                                </div>
                                <div class="card-body">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary mb-2">View Timetable</button>
                                        <button class="btn btn-success mb-2">Check Results</button>
                                        <button class="btn btn-info mb-2">Submit Assignment</button>
                                        <button class="btn btn-warning">E-Learning</button>
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