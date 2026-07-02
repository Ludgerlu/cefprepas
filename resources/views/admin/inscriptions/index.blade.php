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
        <h1>Inscriptions</h1>
        <div class="user-menu">
            <img src="profile.jpg" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>


    <!-- Inscriptions Table -->
    <div class="card">
        <div class="card-header">
            <h2>All Inscriptions</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="inscriptionsTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Programme</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($inscriptions as $inscription)
                        <tr>
                            <td>{{ $inscription->id }}</td>
                            <td>{{ $inscription->name }}</td>
                            <td>{{ $inscription->email }}</td>
                            <td>{{ $inscription->programme }}</td>
                            <td>{{ $inscription->created_at->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('admin.inscriptions.show', $inscription->id) }}" class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i> View
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</main>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#inscriptionsTable').DataTable({
            responsive: true,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json",
            },
            order: [[0, 'desc']]
        });
    });
</script>
@endsection