@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h4 class="mb-0">Parent Dashboard</h4>
                    <small>Monitoring your ward's progress</small>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-12">
                            <h5>My Wards</h5>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h6>John Doe</h6>
                                            <p class="mb-1">JSS 2A</p>
                                            <span class="badge bg-success">Average: 82%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h6>Jane Doe</h6>
                                            <p class="mb-1">SS 1B</p>
                                            <span class="badge bg-info">Average: 75%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Attendance</h5>
                                    <h2 class="text-primary">94%</h2>
                                    <p class="card-text">This Term</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Performance</h5>
                                    <h2 class="text-success">B+</h2>
                                    <p class="card-text">Current Grade</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Fee Balance</h5>
                                    <h2 class="text-danger">₦15,000</h2>
                                    <p class="card-text">Outstanding</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Reports</h5>
                                    <h2 class="text-warning">3</h2>
                                    <p class="card-text">This Month</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <h5>Parent Portal</h5>
                            <div class="d-grid gap-2 d-md-flex">
                                <button class="btn btn-primary me-2">View Academic Report</button>
                                <button class="btn btn-success me-2">Check Attendance</button>
                                <button class="btn btn-info me-2">Pay School Fees</button>
                                <button class="btn btn-warning">Message Teachers</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection