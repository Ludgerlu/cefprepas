@extends('layouts.admin')

@section('main')
<main class="main-content">
    <!-- Top Navigation -->
    <div class="top-nav">
        <h1>Inscription Details</h1>
        <div class="user-menu">
            <img src="profile.jpg" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    <!-- Back button -->
    <div class="mb-4">
        <a href="{{ route('admin.inscriptions.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Back to List
        </a>
    </div>

    <!-- Inscription Details Card -->
    <div class="card">
        <div class="card-header">
            <h2>Inscription #{{ $inscription->id }}</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-item">
                        <span class="detail-label">Full Name:</span>
                        <span class="detail-value">{{ $inscription->name }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Email:</span>
                        <span class="detail-value">{{ $inscription->email }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Date of Birth:</span>
                        <span class="detail-value">{{ $inscription->date_naissance->format('d/m/Y') }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Phone Number:</span>
                        <span class="detail-value">{{ $inscription->numero_portable }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">WhatsApp:</span>
                        <span class="detail-value">{{ $inscription->numero_whatsapp }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-item">
                        <span class="detail-label">Residence:</span>
                        <span class="detail-value">{{ $inscription->lieu_residence }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Programme:</span>
                        <span class="detail-value">{{ $inscription->programme }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Filiere:</span>
                        <span class="detail-value">{{ $inscription->filiere }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Gender:</span>
                        <span class="detail-value">{{ $inscription->sexe }}</span>
                    </div>
                </div>
            </div>
            
            <!-- Objective -->
            <div class="mt-4">
                <h5>Objective:</h5>
                <div class="p-3 bg-light rounded">
                    {{ $inscription->objectif }}
                </div>
            </div>
            
            <!-- Dates -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="detail-item">
                        <span class="detail-label">Created At:</span>
                        <span class="detail-value">{{ $inscription->created_at->format('d/m/Y H:i') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection