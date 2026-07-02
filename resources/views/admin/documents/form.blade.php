@extends('layouts.admin')

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>{{ isset($document) ? 'Edit' : 'Upload' }} Document</h1>
        <div class="user-menu">
            <img src="{{ asset('profile.jpg') }}" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2 class="h5 mb-0">Document Information</h2>
            <a href="{{ route('admin.documents.index') }}" class="btn btn-sm btn-secondary">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>
        <div class="card-body">
            <form action="{{ isset($document) ? route('admin.documents.update', $document) : route('admin.documents.store') }}" 
                  method="POST" 
                  enctype="multipart/form-data">
                @csrf
                @if(isset($document)) @method('PUT') @endif
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name_en" class="form-label">English Name *</label>
                            <input type="text" class="form-control @error('name_en') is-invalid @enderror" 
                                   id="name_en" name="name_en" 
                                   value="{{ old('name_en', $document->name_en ?? '') }}" required>
                            @error('name_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name_fr" class="form-label">French Name *</label>
                            <input type="text" class="form-control @error('name_fr') is-invalid @enderror" 
                                   id="name_fr" name="name_fr" 
                                   value="{{ old('name_fr', $document->name_fr ?? '') }}" required>
                            @error('name_fr')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="document" class="form-label">
                        Document File *
                        @if(isset($document)) 
                            <span class="text-muted">(Leave blank to keep current)</span>
                        @endif
                    </label>
                    <input type="file" class="form-control @error('document') is-invalid @enderror" 
                           id="document" name="document"
                           {{ !isset($document) ? 'required' : '' }}>
                    @error('document')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                           
                    @if(isset($document))
                        <div class="mt-2">
                            <p class="mb-1">Current File: {{ basename($document->path) }}</p>
                            <p class="text-muted small mb-0">Type: {{ $document->mime_type }}</p>
                            <p class="text-muted small mb-0">Size: {{ number_format($document->size / 1024, 2) }} KB</p>
                            <a href="{{ route('admin.documents.download', $document) }}" class="btn btn-sm btn-outline-primary mt-2">
                                <i class="bi bi-download"></i> Download
                            </a>
                        </div>
                    @endif
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> {{ isset($document) ? 'Update' : 'Upload' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection