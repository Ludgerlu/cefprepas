@extends('layouts.admin')

@section('style')
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
@endsection

@section('main')
<main class="main-content">
    <!-- Top Navigation -->
    <div class="top-nav">
        <h1>Testimonies</h1>
        <div class="user-menu">
            <img src="profile.jpg" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Content Section -->
    <div class="card">
        <div class="card-header">
            <h2>All Testimonies</h2>
            <a href="{{ route('admin.testimonies.create') }}" class="btn btn-sm btn-primary">Add New</a>
        </div>
        <div class="card-body">
            <table id="testimoniesTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Filiere</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($testimonies as $testimony)
                        <tr>
                            <td>
                                <img src="{{ asset($testimony->image_url) }}" alt="{{ $testimony->name }}" width="50" class="img-thumbnail">
                            </td>
                            <td>{{ $testimony->name }}</td>
                            <td>{{ $testimony->filiere->name ?? 'N/A' }}</td>
                            <td>{{ $testimony->created_at->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('admin.testimonies.show', $testimony->id) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('admin.testimonies.edit', $testimony->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.testimonies.destroy', $testimony->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
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
        $('#testimoniesTable').DataTable({
            responsive: true,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json",
            },
            pageLength: 10,
            order: [[3, 'desc']]
        });
    });
</script>
@endsection