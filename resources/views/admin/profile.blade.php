@extends('admin.layouts.template')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </nav>
    <div class="row">
        <div class="d-none d-md-block col-md-4 left-wrapper">
            <div class="card rounded">
                <div class="card-body text-center">
                    <img class="wd-100 rounded-circle mb-2" src="{{ (!empty($user->photo)) ? asset('uploads/img/'.$user->photo) : asset('uploads/img/no_image.jpg') }}" alt="profile">
                    <br>
                    <span class="h4">{{ $user->name }}</span>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
                        <p class="text-muted">{{ date('j F Y', strtotime($user->created_at)) }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Role:</label>
                        <p class="text-muted">{{ ucfirst($user->role) }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Status:</label>
                        <p class="text-muted">{{ ucfirst($user->status) }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Website:</label>
                        <p class="text-muted">www.nobleui.com</p>
                    </div>
                    <div class="mt-3 d-flex justify-content-center social-links">
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                        </a>
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                        </a>
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 grid-margin stretch-card">
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
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Photo</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3 d-md-flex justify-content-md-center">
                                <img id="image-preview" class="wd-70 rounded-circle mb-3" src="{{ asset('uploads/img/no_image.jpg') }}" alt="new-profile">
                            </div>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#image-preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection