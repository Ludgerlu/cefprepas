@extends('layouts.admin')

@section('main')
<main class="main-content">
    <!-- Top Navigation -->
    <div class="top-nav">
        <h1>Testimony Details</h1>
        <div class="user-menu">
            <img src="profile.jpg" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>{{ $testimony->name }}</h2>
            <a href="{{ route('admin.testimonies.index') }}" class="btn btn-sm btn-secondary">Back to List</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset($testimony->image_url) }}" alt="{{ $testimony->name }}" class="img-fluid rounded">
                </div>
                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tr>
                            <th>Filiere</th>
                            <td>{{ $testimony->formation->name ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ $testimony->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>{{ $testimony->updated_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    </table>
                    
                    <div class="mt-4">
                        <h4>English Description</h4>
                        <p>{{ $testimony->description_en }}</p>
                        
                        <h4 class="mt-3">French Description</h4>
                        <p>{{ $testimony->description_fr }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.testimonies.edit', $testimony->id) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
</main>
@endsection