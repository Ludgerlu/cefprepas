@extends('layouts.admin')

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>Edit Document</h1>
        <div class="user-menu">
            <img src="{{ asset('profile.jpg') }}" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2 class="h5 mb-0">Edit Document Details</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.documents.update', $document->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name_en" class="form-label">English Name</label>
                    <input type="text" class="form-control" id="name_en" name="name_en" 
                           value="{{ old('name_en', $document->name_en) }}" required>
                </div>
                <div class="mb-3">
                    <label for="name_fr" class="form-label">French Name</label>
                    <input type="text" class="form-control" id="name_fr" name="name_fr" 
                           value="{{ old('name_fr', $document->name_fr) }}" required>
                </div>
                <div class="mb-3">
                    <label for="document" class="form-label">Replace Document (optional)</label>
                    <input type="file" class="form-control" id="document" name="document">
                    <small class="text-muted">Current document:</small>
                    <div class="mt-2">
                        @if($document->isImage())
                            <img src="{{ $document->file_url }}" alt="{{ $document->name_en }}" class="img-thumbnail" style="max-height: 100px;">
                        @else
                            <div class="file-icon">
                                <i class="bi bi-file-earmark"></i> {{ basename($document->path) }}
                            </div>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update Document</button>
                <a href="{{ route('admin.documents.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</main>
@endsection