@extends('admin.layouts.template')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Property Type</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Type</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">{{ $title }}</h6>
                    <form method="post" action="{{ route('admin.propertytype.update') }}" class="forms-sample">
                        @csrf
                        <input type="hidden" id="id" name="id" value="{{ $data->id }}">
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" id="type" name="type" class="form-control @error('type') is-invalid @enderror" autocomplete="off" value="{{ old('type') ?: $data->type_name }}">
                            @error('type')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="icon" class="form-label">Icon</label>
                            <input type="text" id="icon" name="icon" class="form-control @error('icon') is-invalid @enderror" autocomplete="off" value="{{ old('icon') ?: $data->type_icon }}">
                            @error('icon')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-icon-text">
                            <i class="btn-icon-prepend" data-feather="send"></i>
                            Submit
                        </button>
                        <a href="{{ route('admin.propertytype') }}" class="btn btn-secondary btn-icon-text">
                            <i class="btn-icon-prepend" data-feather="arrow-left"></i>
                            Cancel
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection