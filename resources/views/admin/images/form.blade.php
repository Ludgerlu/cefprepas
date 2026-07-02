@extends('layouts.admin')

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>{{ isset($image) ? 'Edit' : 'Create' }} Image</h1>
        <div class="user-menu">
            <img src="{{ asset('profile.jpg') }}" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2 class="h5 mb-0">Image Information</h2>
            <a href="{{ route('admin.images.index') }}" class="btn btn-sm btn-secondary">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>
        <div class="card-body">
            <form action="{{ isset($image) ? route('admin.images.update', $image->id) : route('admin.images.store') }}" 
                  method="POST" 
                  enctype="multipart/form-data">
                @csrf
                @if(isset($image)) @method('PUT') @endif
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name_en" class="form-label">English Name *</label>
                            <input type="text" class="form-control" id="name_en" name="name_en" 
                                   value="{{ old('name_en', $image->name_en ?? '') }}" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name_fr" class="form-label">French Name *</label>
                            <input type="text" class="form-control" id="name_fr" name="name_fr" 
                                   value="{{ old('name_fr', $image->name_fr ?? '') }}" required>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="image_url" class="form-label">
                        Image File *
                        @if(isset($image)) 
                            <span class="text-muted">(Leave blank to keep current)</span>
                        @endif
                    </label>
                    <input type="file" class="form-control" id="image_url" name="image_url"
                           {{ !isset($image) ? 'required' : '' }}>
                    @if(isset($image) && $image->image_url)
                        <div class="mt-2">
                            <img src="{{ asset($image->image_url) }}" 
                                 alt="Current Image" 
                                 width="150" 
                                 class="img-thumbnail">
                            <p class="text-muted small mt-1">Current Image</p>
                        </div>
                    @endif
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> {{ isset($image) ? 'Update' : 'Save' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection