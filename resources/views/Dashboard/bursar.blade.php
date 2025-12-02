@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-danger text-white">
                    <h4 class="mb-0">Bursar Dashboard</h4>
                    <small>Financial Management Panel</small>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Revenue</h5>
                                    <h2 class="text-success">₦2.1M</h2>
                                    <p class="card-text">This Month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Outstanding</h5>
                                    <h2 class="text-danger">₦450K</h2>
                                    <p class="card-text">Fee Balances</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Collections</h5>
                                    <h2 class="text-info">78%</h2>
                                    <p class="card-text">Collection Rate</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Expenses</h5>
                                    <h2 class="text-warning">₦1.2M</h2>
                                    <p class="card-text">This Month</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Recent Transactions</h6>
                                </div>
                                <div class="card-body">
                                    <div class="list-group">
                                        <div class="list-group-item d-flex justify-content-between">
                                            <span>School Fees - John Doe</span>
                                            <span class="text-success">₦45,000</span>
                                        </div>
                                        <div class="list-group-item d-flex justify-content-between">
                                            <span>PTA Levy - Jane Smith</span>
                                            <span class="text-success">₦5,000</span>
                                        </div>
                                        <div class="list-group-item d-flex justify-content-between">
                                            <span>Salary - Mr. Johnson</span>
                                            <span class="text-danger">₦85,000</span>
                                        </div>
                                        <div class="list-group-item d-flex justify-content-between">
                                            <span>Utilities</span>
                                            <span class="text-danger">₦25,000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Financial Tools</h6>
                                </div>
                                <div class="card-body">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary mb-2">Fee Management</button>
                                        <button class="btn btn-success mb-2">Generate Invoice</button>
                                        <button class="btn btn-info mb-2">Financial Reports</button>
                                        <button class="btn btn-warning">Expense Tracking</button>
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