@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">SuperAdmin Dashboard</h4>
                    <small>Full System Control Panel</small>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- System Overview -->
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Users</h5>
                                    <h2 class="text-primary">1,254</h2>
                                    <p class="card-text">Total System Users</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Schools</h5>
                                    <h2 class="text-success">12</h2>
                                    <p class="card-text">Managed Schools</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Active</h5>
                                    <h2 class="text-info">98%</h2>
                                    <p class="card-text">System Uptime</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card dashboard-card">
                                <div class="card-body">
                                    <h5 class="card-title">Revenue</h5>
                                    <h2 class="text-warning">₦2.5M</h2>
                                    <p class="card-text">This Month</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <h5>Quick Actions</h5>
                            <div class="d-grid gap-2 d-md-flex">
                                <a href="{{ route('manage.roles') }}" class="btn btn-primary me-2">
                                    <i class="fas fa-users-cog"></i> Manage Roles
                                </a>
                                <button class="btn btn-success me-2">
                                    <i class="fas fa-school"></i> Manage Schools
                                </button>
                                <button class="btn btn-info me-2">
                                    <i class="fas fa-cog"></i> System Settings
                                </button>
                                <button class="btn btn-warning">
                                    <i class="fas fa-chart-bar"></i> Analytics
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Recent System Activity</h6>
                                </div>
                                <div class="card-body">
                                    <div class="list-group">
                                        <div class="list-group-item">New school registered - Grace International School</div>
                                        <div class="list-group-item">User role updated - John Doe to SchoolAdmin</div>
                                        <div class="list-group-item">System backup completed successfully</div>
                                        <div class="list-group-item">Payment gateway integration updated</div>
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