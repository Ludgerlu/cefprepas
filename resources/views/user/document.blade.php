@extends('layouts.user')

@section('style')
<style>
    .document-card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        height: 100%;
    }
    
    .document-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }
    
    .document-icon {
        font-size: 3rem;
        color: #b9dda3;
    }
    
    .document-type {
        color: #676767;
        font-size: 0.9rem;
    }
    
    .document-size {
        color: #aaa;
        font-size: 0.8rem;
    }
    
    .document-date {
        color: #aaa;
        font-size: 0.8rem;
    }
    
    .page-header {
        background: linear-gradient(135deg, #ecf0f1, #b9dda3);
        padding: 80px 0;
        margin-bottom: 40px;
    }
    
    .breadcrumb-custom {
        background-color: #f6f6f6;
        padding: 10px 0;
        font-size: 0.9rem;
    }
    
    .breadcrumb-custom a {
        color: #5F625E;
        text-decoration: none;
    }
    
    .breadcrumb-custom .active {
        color: #aaa;
    }
</style>
@endsection

@section('main')
<main class="content">
    <!-- Page Header -->
    <div class="page-header text-center">
        <div class="container">
            <h1>{{ __('Documents') }}</h1>
        </div>
    </div>
    
    <!-- Breadcrumb -->
    <div class="breadcrumb-custom">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Documents') }}</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <!-- Documents Section -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card document-card p-3">
                    <div class="card-body text-center">
                        <i class="bi bi-file-pdf document-icon"></i>
                        <h5 class="mt-3">Fiche D'inscription</h5>
                        <p class="document-type">Fiche D'inscription</p>
                        {{-- <p class="document-size">{{ $document->formatted_size }}</p> --}}
                        <div class="d-grid gap-2">
                            <a target="_blank" href="{{ asset('assets/doc/fiche_inscription.pdf') }}" class="btn btn-success">
                                <i class="bi bi-download me-2"></i> {{ __('Download') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-md-4 mb-4">
                <div class="card document-card p-3">
                    <div class="card-body text-center">
                        <i class="bi bi-file-pdf document-icon"></i>
                        <h5 class="mt-3">Fiche D'inscription</h5>
                        <p class="document-type">Brochure CEFPREPAS</p>
                        {{-- <p class="document-size">{{ $document->formatted_size }}</p> --}}
                        <div class="d-grid gap-2">
                            <a target="_blank" href="{{ asset('assets/doc/prospectus_cefprepas.pdf') }}" class="btn btn-success">
                                <i class="bi bi-download me-2"></i> {{ __('Download') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection