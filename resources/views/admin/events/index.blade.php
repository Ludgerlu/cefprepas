@extends('layouts.admin')

@section('style')
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
<style>
    .event-image {
        width: 80px;
        height: 60px;
        object-fit: cover;
        border-radius: 4px;
    }
    .badge-type {
        font-size: 0.8rem;
        padding: 0.35em 0.65em;
    }
</style>
@endsection

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>Events Management</h1>
        <div class="user-menu">
            <img src="#" alt="Admin">
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
            <h2 class="h5 mb-0">All Events</h2>
            <a href="{{ route('admin.events.create') }}" class="btn btn-sm btn-primary">
                <i class="bi bi-plus-circle"></i> Add New
            </a>
        </div>
        <div class="card-body">
            <table id="eventsTable" class="table table-striped" style="width:100%">
                <thead class="table-light">
                    <tr>
                        <th>Image</th>
                        <th>English Title</th>
                        <th>French Title</th>
                        <th>Vu</th>
                        <th>Type</th>
                        <th>Event Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td>
                                <img src="{{ asset($event->image_url) }}" 
                                     alt="{{ $event->title_en }}" 
                                     class="event-image">
                            </td>
                            <td>{{ $event->title_en }}</td>
                            <td>{{ $event->title_fr }}</td>
                            <td>{{ $event->views }}</td>
                            <td>
                                <span class="badge bg-secondary badge-type">
                                    {{ $event->news == 1 ? "Actualite": "Vie d'etudiant" }}
                                </span>
                            </td>
                            <td>{{ $event->date_event->format('d/m/Y') }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.events.show', $event->id) }}" 
                                       class="btn btn-sm btn-info" 
                                       title="View">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.events.edit', $event->id) }}" 
                                       class="btn btn-sm btn-primary" 
                                       title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.events.destroy', $event->id) }}" 
                                          method="POST" 
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="btn btn-sm btn-danger" 
                                                title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this event?')">
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
        $('#eventsTable').DataTable({
            responsive: true,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json",
            },
            columnDefs: [
                { responsivePriority: 1, targets: 1 }, // English Title
                { responsivePriority: 2, targets: 5 }, // Actions
                { responsivePriority: 3, targets: 2 }, // French Title
                { responsivePriority: 4, targets: 3 }, // Type
                { responsivePriority: 5, targets: 4 }, // Event Date
                { responsivePriority: 6, targets: 0 }, // Image
            ],
            order: [[4, 'asc']] // Sort by event date
        });
    });
</script>
@endsection