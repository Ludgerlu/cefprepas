@extends('layouts.admin')

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>Add New Document</h1>
        <div class="user-menu">
            <img src="{{ asset('profile.jpg') }}" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2 class="h5 mb-0">Document Details</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.documents.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label for="document" class="form-label">Document File</label>
                    <input type="file" class="form-control" id="document" name="document" required>
                    <small class="text-muted">Max file size: 5MB</small>
                </div>
                <button type="submit" class="btn btn-primary">Upload Document</button>
                <a href="{{ route('admin.documents.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</main>
@endsection