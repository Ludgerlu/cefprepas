@extends('layouts.admin')

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>Add New Partner</h1>
        <div class="user-menu">
            <img src="{{ asset('profile.jpg') }}" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2 class="h5 mb-0">Partner Details</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                    <label for="name_en" class="form-label">English Name</label>
                    <input type="text" class="form-control" id="name_en" name="name_en" required>
                </div>

                <div class="mb-3">
                    <label for="name_fr" class="form-label">French Name</label>
                    <input type="text" class="form-control" id="name_fr" name="name_fr" required>
                </div>

                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo" accept="image/*" required>
                    <small class="text-muted">Max size: 2MB. Formats: jpeg, png, jpg, gif, svg</small>
                </div>

                <div class="mb-3">
                    <label for="link" class="form-label">Website Link</label>
                    <input type="url" class="form-control" id="link" name="link" placeholder="https://example.com" required>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.partners.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save Partner</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection