@extends('admin.layouts.template')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Profile Information</h6>
                    <form method="post" action="{{ route('admin.profile.update') }}" class="forms-sample">
                        @csrf
                        <input type="hidden" name="_method" value="put">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control" autocomplete="off" value="{{ old('name') ?: $user->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control" autocomplete="off" value="{{ old('username') ?: $user->username }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control" autocomplete="off" value="{{ old('email') ?: $user->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" id="phone" name="phone" class="form-control" autocomplete="off" value="{{ old('phone') ?: $user->phone }}">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea id="address" name="address" class="form-control" autocomplete="off" rows="3">{{ old('address') ?: $user->address }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <input type="text" id="role" name="role" class="form-control" autocomplete="off" value="{{ ucfirst($user->role) }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="text" id="status" name="status" class="form-control" autocomplete="off" value="{{ ucfirst($user->status) }}" disabled>
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