@extends('layouts.admin')

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>Edit Partner</h1>
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
            <form action="{{ route('admin.partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="name_en" class="form-label">English Name</label>
                    <input type="text" class="form-control" id="name_en" name="name_en" value="{{ old('name_en', $partner->name_en) }}" required>
                </div>

                <div class="mb-3">
                    <label for="name_fr" class="form-label">French Name</label>
                    <input type="text" class="form-control" id="name_fr" name="name_fr" value="{{ old('name_fr', $partner->name_fr) }}" required>
                </div>

                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    @if($partner->logo)
                        <div class="mb-2">
                            <img src="{{ $partner->logo_url }}" alt="Current logo" class="img-thumbnail" style="max-height: 100px;">
                        </div>
                    @endif
                    <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                    <small class="text-muted">Leave empty to keep current logo</small>
                </div>

                <div class="mb-3">
                    <label for="link" class="form-label">Website Link</label>
                    <input type="url" class="form-control" id="link" name="link" value="{{ old('link', $partner->link) }}" required>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.partners.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update Partner</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
