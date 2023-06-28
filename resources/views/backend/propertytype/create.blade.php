@extends('admin.layouts.template')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Property Type</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Add New Property Type</h6>
                    <form method="post" action="{{ route('admin.propertytype.store') }}" class="forms-sample">
                        @csrf
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" id="type" name="type" class="form-control @error('type') is-invalid @enderror" autocomplete="off">
                            @error('type')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Type</label>
                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" autocomplete="off">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
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