@extends('layouts.admin')

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>Image Details</h1>
        <div class="user-menu">
            <img src="{{ asset('profile.jpg') }}" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h5 mb-0">{{ $image->name_en }} / {{ $image->name_fr }}</h2>
            <div>
                <a href="{{ route('admin.images.index') }}" class="btn btn-sm btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back
                </a>
                <a href="{{ route('admin.images.edit', $image->id) }}" class="btn btn-sm btn-primary ms-2">
                    <i class="bi bi-pencil"></i> Edit
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4 text-center">
                        <img src="{{ asset($image->image_url) }}" 
                             alt="{{ $image->name_en }}" 
                             class="img-fluid rounded"
                             style="max-height: 400px;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="mb-0">Image Information</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li><strong>English Name:</strong> {{ $image->name_en }}</li>
                                <li><strong>French Name:</strong> {{ $image->name_fr }}</li>
                                <li><strong>Image Path:</strong> {{ $image->image_url }}</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Usage Example</h5>
                        </div>
                        <div class="card-body">
                            <p>To use this image in your views:</p>
                            <pre><code>&lt;img src="{{ '{{' }} asset('storage/{{ $image->image_url }}') }}" 
     alt="{{ '{{' }} __('Image: '.$image->name_en) }}" 
     class="img-fluid"&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection