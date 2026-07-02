@extends('layouts.admin')

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>{{ isset($event) ? 'Edit' : 'Create' }} Event</h1>
        <div class="user-menu">
            <img src="{{ asset('profile.jpg') }}" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2 class="h5 mb-0">Event Information</h2>
            <a href="{{ route('admin.events.index') }}" class="btn btn-sm btn-secondary">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>
        <div class="card-body">
            <form action="{{ isset($event) ? route('admin.events.update', $event->id) : route('admin.events.store') }}" 
                  method="POST" 
                  enctype="multipart/form-data">
                @csrf
                @if(isset($event)) @method('PUT') @endif
                
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mb-3">English Content</h4>
                        
                        <div class="mb-3">
                            <label for="title_en" class="form-label">Title *</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" 
                                   value="{{ old('title_en', $event->title_en ?? '') }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="description_en" class="form-label">Description *</label>
                            <textarea class="form-control" id="description_en" name="description_en" 
                                      rows="5" required>{{ old('description_en', $event->description_en ?? '') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <h4 class="mb-3">French Content</h4>
                        
                        <div class="mb-3">
                            <label for="title_fr" class="form-label">Titre *</label>
                            <input type="text" class="form-control" id="title_fr" name="title_fr" 
                                   value="{{ old('title_fr', $event->title_fr ?? '') }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="description_fr" class="form-label">Description *</label>
                            <textarea class="form-control" id="description_fr" name="description_fr" 
                                      rows="5" required>{{ old('description_fr', $event->description_fr ?? '') }}</textarea>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="type" class="form-label">Event Type *</label>
                            <select class="form-select" id="news" name="news" required>
                                <option value="">Select Event Type</option>
                                @foreach($eventTypes as $key => $value)
                                    <option value="{{ $key }}"
                                        {{ (old('news', $event->news ?? '') == $key ? 'selected' : '') }}>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="date_event" class="form-label">Event Date *</label>
                            <input type="date" class="form-control" id="date_event" name="date_event" 
                                   value="{{ old('date_event', isset($event) ? $event->date_event->format('Y-m-d') : '') }}" required>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="image_url" class="form-label">
                        Event Image *
                        @if(isset($event)) 
                            <span class="text-muted">(Leave blank to keep current)</span>
                        @endif
                    </label>
                    <input type="file" class="form-control" id="image_url" name="image_url"
                           {{ !isset($event) ? 'required' : '' }}>
                    @if(isset($event) && $event->image_url)
                        <div class="mt-2">
                            <img src="{{ asset($event->image_url) }}" 
                                 alt="Current Image" 
                                 width="150" 
                                 class="img-thumbnail">
                            <p class="text-muted small mt-1">Current Image</p>
                        </div>
                    @endif
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> {{ isset($event) ? 'Update' : 'Save' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection