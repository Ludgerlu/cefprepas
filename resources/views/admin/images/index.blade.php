@extends('layouts.admin')

@section('style')
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
<style>
    .image-thumbnail {
        width: 100px;
        height: 80px;
        object-fit: cover;
        border-radius: 4px;
        border: 1px solid #dee2e6;
    }
</style>
@endsection

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>Images Management</h1>
        <div class="user-menu">
            <img src="{{ asset('profile.jpg') }}" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h5 mb-0">All Images</h2>
            <a href="{{ route('admin.images.create') }}" class="btn btn-sm btn-primary">
                <i class="bi bi-plus-circle"></i> Add New
            </a>
        </div>
        <div class="card-body">
            <table id="imagesTable" class="table table-striped" style="width:100%">
                <thead class="table-light">
                    <tr>
                        <th>Preview</th>
                        <th>English Name</th>
                        <th>French Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($images as $image)
                        <tr>
                            <td>
                                <img src="{{ asset($image->image_url) }}" 
                                     alt="{{ $image->name_en }}" 
                                     class="image-thumbnail">
                            </td>
                            <td>{{ $image->name_en }}</td>
                            <td>{{ $image->name_fr }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.images.show', $image->id) }}" 
                                       class="btn btn-sm btn-info" 
                                       title="View">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.images.edit', $image->id) }}" 
                                       class="btn btn-sm btn-primary" 
                                       title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.images.destroy', $image->id) }}" 
                                          method="POST" 
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="btn btn-sm btn-danger" 
                                                title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this image?')">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#imagesTable').DataTable({
            responsive: true,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json",
            },
            columnDefs: [
                { responsivePriority: 1, targets: 1 }, // English Name
                { responsivePriority: 2, targets: 3 }, // Actions
                { responsivePriority: 3, targets: 2 }, // French Name
                { responsivePriority: 4, targets: 0 }, // Preview
            ],
            order: [[1, 'asc']]
        });
    });
</script>
@endsection