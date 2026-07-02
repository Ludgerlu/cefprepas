@extends('layouts.admin')

@section('style')
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
<style>
    .badge-duration {
        background-color: #6c757d;
    }
    .badge-success-rate {
        background-color: #28a745;
    }
</style>
@endsection

@section('main')
<main class="main-content">
    <!-- Top Navigation -->
    <div class="top-nav">
        <h1>Filieres Management</h1>
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

    <!-- Content Section -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h5 mb-0">All Filieres</h2>
            <a href="{{ route('admin.filieres.create') }}" class="btn btn-sm btn-primary">
                <i class="bi bi-plus-circle"></i> Add New
            </a>
        </div>
        <div class="card-body">
            <table id="filieresTable" class="table table-striped" style="width:100%">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>English Title</th>
                        <th>French Title</th>
                        <th>Duration</th>
                        <th>Success Rate</th>
                        <th>Intake</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($filieres as $filiere)
                        <tr>
                            <td>{{ $filiere->id }}</td>
                            <td>{{ $filiere->title_en }}</td>
                            <td>{{ $filiere->title_fr }}</td>
                            <td>
                                <span class="badge badge-duration">{{ $filiere->duree }} months</span>
                            </td>
                            <td>
                                <span class="badge badge-success-rate">{{ $filiere->reussite }}%</span>
                            </td>
                            <td>{{ $filiere->rentree->format('M Y') }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.filieres.show', $filiere->id) }}" 
                                       class="btn btn-sm btn-info" 
                                       title="View">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.filieres.edit', $filiere->id) }}" 
                                       class="btn btn-sm btn-primary" 
                                       title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.filieres.destroy', $filiere->id) }}" 
                                          method="POST" 
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="btn btn-sm btn-danger" 
                                                title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this filiere?')">
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
        $('#filieresTable').DataTable({
            responsive: true,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json",
            },
            columnDefs: [
                { responsivePriority: 1, targets: 1 }, // English Title
                { responsivePriority: 2, targets: 6 }, // Actions
                { responsivePriority: 3, targets: 2 }, // French Title
                { responsivePriority: 4, targets: 3 }, // Duration
                { responsivePriority: 5, targets: 4 }, // Success Rate
                { responsivePriority: 6, targets: 0 }, // ID
                { responsivePriority: 7, targets: 5 }, // Intake
            ],
            order: [[0, 'desc']]
        });
    });
</script>
@endsection