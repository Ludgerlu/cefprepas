@extends('layouts.admin')

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>Partner Details</h1>
        <div class="user-menu">
            <img src="{{ asset('profile.jpg') }}" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h5 mb-0">{{ $partner->name_en }}</h2>
            <div class="d-flex gap-2">
                <a href="{{ route('admin.partners.edit', $partner->id) }}" class="btn btn-sm btn-primary">
                    <i class="bi bi-pencil"></i> Edit
                </a>
                <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this partner?')">
                        <i class="bi bi-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    @if($partner->logo)
                        <img src="{{ $partner->logo_url }}" alt="{{ $partner->name_en }}" class="img-fluid rounded">
                    @else
                        <div class="text-center py-4 bg-light rounded">
                            <i class="bi bi-image fs-1 text-muted"></i>
                            <p class="mt-2 text-muted">No logo available</p>
                        </div>
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="mb-3">
                        <h5 class="text-muted mb-2">English Name</h5>
                        <p>{{ $partner->name_en }}</p>
                    </div>
                    <div class="mb-3">
                        <h5 class="text-muted mb-2">French Name</h5>
                        <p>{{ $partner->name_fr }}</p>
                    </div>
                    <div class="mb-3">
                        <h5 class="text-muted mb-2">Website</h5>
                        <p>
                            <a href="{{ $partner->link }}" target="_blank">{{ $partner->link }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection