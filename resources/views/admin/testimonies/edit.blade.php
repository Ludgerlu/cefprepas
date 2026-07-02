@extends('layouts.admin')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

@endsection

@section('main')
<main class="main-content">
    <!-- Top Navigation -->
    <div class="top-nav">
        <h1>Edit Testimony</h1>
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
            <form action="{{ route('admin.testimonies.update', $testimony->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $testimony->name }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="formation_id" class="form-label">Formations</label>
                            <select class="form-select" id="formation_id" name="formation_id" required>
                                <option value="">Select Formation</option>
                                @foreach($formations as $formation)
                                    <option value="{{ $formation->id }}" {{ $testimony->formation_id == $formation->id ? 'selected' : '' }}>{{ $formation->title_en }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="image_url" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image_url" name="image_url">
                            @if($testimony->image_url)
                                <div class="mt-2">
                                    <img src="{{ asset($testimony->image_url) }}" alt="Current Image" width="100" class="img-thumbnail">
                                    <p class="text-muted small mt-1">Current Image</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="description_en" class="form-label">English Description</label>
                            <textarea class="form-control" id="description_en" name="description_en" rows="5" required>{{ $testimony->description_en }}</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="description_fr" class="form-label">French Description</label>
                            <textarea class="form-control" id="description_fr" name="description_fr" rows="5" required>{{ $testimony->description_fr }}</textarea>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</main>
@endsection


@section('script')
<script src="{{asset('assets/js/summernote-lite.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $('#description_fr, #description_en').summernote({
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
@endsection