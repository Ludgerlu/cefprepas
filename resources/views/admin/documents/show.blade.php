@extends('layouts.admin')

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>Document Details</h1>
        <div class="user-menu">
            <img src="{{ asset('profile.jpg') }}" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h5 mb-0">Document Information</h2>
            <div>
                <a href="{{ route('admin.documents.edit', $document->id) }}" class="btn btn-sm btn-primary">
                    <i class="bi bi-pencil"></i> Edit
                </a>
                <a href="{{ $document->file_url }}" class="btn btn-sm btn-success" download>
                    <i class="bi bi-download"></i> Download
                </a>
                <a href="{{ route('admin.documents.index') }}" class="btn btn-sm btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center">
                    @if($document->isImage())
                        <img src="{{ $document->file_url }}" alt="{{ $document->name_en }}" class="img-fluid rounded mb-3">
                    @else
                        <div class="file-icon display-1 mb-3">
                            <i class="bi bi-file-earmark"></i>
                        </div>
                    @endif
                    <a href="{{ $document->file_url }}" class="btn btn-primary w-100" download>
                        <i class="bi bi-download"></i> Download Document
                    </a>
                </div>
                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tr>
                            <th width="30%">English Name</th>
                            <td>{{ $document->name_en }}</td>
                        </tr>
                        <tr>
                            <th>French Name</th>
                            <td>{{ $document->name_fr }}</td>
                        </tr>
                        <tr>
                            <th>File Size</th>
                            <td>{{ number_format($document->size / 1024, 2) }} KB</td>
                        </tr>
                        <tr>
                            <th>MIME Type</th>
                            <td>{{ $document->mime_type }}</td>
                        </tr>
                        <tr>
                            <th>Uploaded By</th>
                            <td>User #{{ $document->user_id }}</td>
                        </tr>
                        <tr>
                            <th>Storage Path</th>
                            <td><code>{{ $document->path }}</code></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection