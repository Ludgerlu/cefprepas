
@extends('layouts.admin')


@section('style')
<link
    href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css"
    rel="stylesheet"
/>
@endsection

@section('main')
<main class="main-content">
  <!-- Top Navigation -->
  <div class="top-nav">
      <h1>Dashboard</h1>
      <div class="user-menu">
          <img src="profile.jpg" alt="Admin">
          <span>Admin User</span>
      </div>
  </div>

  <!-- Content Sections -->
  <div class="row">
    <!-- Messages Section -->
    <div class="card">
        <div class="card-header">
            <h2>Messages</h2>
            {{-- <a href="{{ route('admin.messages.index') }} " class="btn btn-sm btn-primary">View All</a> --}}
        </div>
        <div class="card-body">
            <table id="message" class="table table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Numero</th>
                        <th>Message</th>
                        <th>Date</th>
                        {{-- <th>Actions</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->numero }}</td>
                            <td>{{ $message->message }}</td>
                            <td>{{ $message->created_at->format('d/m/Y') }}</td>
                            {{-- <td>
                                <a href="{{ route('admin.messages.show', $evaluation->id_note) }}" class="btn btn-sm btn-primary">
                                    Détails
                                </a>
                            </td> --}}
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
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#message").DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json",
                },
                pageLength: 10,
                dom: "<'row'<'col-sm-12 col-md-6 mb-3'l><'col-sm-12 col-md-6 mb-3'f>" +
                        "<'col-sm-12 col-md-6 mb-3'B>>"+
                        "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                buttons: [
                    {
                        extend: "excel",
                        className: "btn btn-cef-green btn-sm",
                        text: "Excel",
                    },
                    {
                        extend: "csv",
                        className: "btn btn-cef-green btn-sm",
                        text: "CSV",
                    },
                    {
                        extend: "pdf",
                        className: "btn btn-cef-green btn-sm",
                        text: "PDF",
                    },
                ],
                order: [[4, "desc"]],
            });

            
        });
    </script>
@endsection 













