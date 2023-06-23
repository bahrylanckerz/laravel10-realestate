@extends('admin.layouts.template')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Change Password</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Admin Change Password</h6>
                    <form method="post" action="{{ route('admin.password.change.store') }}" class="forms-sample">
                        @csrf
                        <div class="mb-3">
                            <label for="currentPassword" class="form-label">Current Password</label>
                            <input type="password" id="currentPassword" name="currentPassword" class="form-control" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label">New Password</label>
                            <input type="password" id="newPassword" name="newPassword" class="form-control" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm New Password</label>
                            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-primary btn-icon-text">
                            <i class="btn-icon-prepend" data-feather="send"></i>
                            Submit
                        </button>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary btn-icon-text">
                            <i class="btn-icon-prepend" data-feather="arrow-left"></i>
                            Cancel
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection