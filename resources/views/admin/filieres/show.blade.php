@extends('layouts.admin')

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>Filiere Details</h1>
        <div class="user-menu">
            <img src="{{ asset('profile.jpg') }}" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h5 mb-0">{{ $filiere->title_en }} / {{ $filiere->title_fr }}</h2>
            <div>
                <a href="{{ route('admin.filieres.index') }}" class="btn btn-sm btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back
                </a>
                <a href="{{ route('admin.filieres.edit', $filiere->id) }}" class="btn btn-sm btn-primary ms-2">
                    <i class="bi bi-pencil"></i> Edit
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Basic Information</h5>
                            <ul class="list-unstyled">
                                <li><strong>Duration:</strong> {{ $filiere->duree }} months</li>
                                <li><strong>Success Rate:</strong> {{ $filiere->reussite }}%</li>
                                <li><strong>Next Intake:</strong> {{ $filiere->rentree->format('F Y') }}</li>
                                <li><strong>Created:</strong> {{ $filiere->created_at->format('d/m/Y H:i') }}</li>
                                <li><strong>Updated:</strong> {{ $filiere->updated_at->format('d/m/Y H:i') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="mb-0">English Content</h5>
                        </div>
                        <div class="card-body">
                            <h6>Subtitle</h6>
                            <p>{{ $filiere->sub_en }}</p>
                            
                            <h6 class="mt-3">Description</h6>
                            <div>{!! nl2br(e($filiere->description_en)) !!}</div>
                            
                            <h6 class="mt-3">Objectives</h6>
                            <div>{!! nl2br(e($filiere->objectif_en)) !!}</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="mb-0">French Content</h5>
                        </div>
                        <div class="card-body">
                            <h6>Sous-titre</h6>
                            <p>{{ $filiere->sub_fr }}</p>
                            
                            <h6 class="mt-3">Description</h6>
                            <div>{!! nl2br(e($filiere->description_fr)) !!}</div>
                            
                            <h6 class="mt-3">Objectifs</h6>
                            <div>{!! nl2br(e($filiere->objectif_fr)) !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection