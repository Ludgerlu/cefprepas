@extends('layouts.admin')

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>Event Details</h1>
        <div class="user-menu">
            <img src="{{ asset('profile.jpg') }}" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h5 mb-0">{{ $event->title_en }} / {{ $event->title_fr }}</h2>
            <div>
                <a href="{{ route('admin.events.index') }}" class="btn btn-sm btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back
                </a>
                <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-sm btn-primary ms-2">
                    <i class="bi bi-pencil"></i> Edit
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="{{ asset($event->image_url) }}" 
                         alt="{{ $event->title_en }}" 
                         class="img-fluid rounded">
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Event Information</h5>
                            <ul class="list-unstyled">
                                <li><strong>Views:</strong> {{ $event->views }}</li>
                                <li><strong>Type:</strong> <span class="badge bg-secondary">{{ ucfirst($event->type) }}</span></li>
                                <li><strong>Date:</strong> {{ $event->date_event->format('l, F j, Y') }}</li>
                                <li><strong>Created:</strong> {{ $event->created_at->format('d/m/Y H:i') }}</li>
                                <li><strong>Updated:</strong> {{ $event->updated_at->format('d/m/Y H:i') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="mb-0">English Content</h5>
                        </div>
                        <div class="card-body">
                            <h4>{{ $event->title_en }}</h4>
                            <div class="mt-3">{!! nl2br(e($event->description_en)) !!}</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="mb-0">French Content</h5>
                        </div>
                        <div class="card-body">
                            <h4>{{ $event->title_fr }}</h4>
                            <div class="mt-3">{!! nl2br(e($event->description_fr)) !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection