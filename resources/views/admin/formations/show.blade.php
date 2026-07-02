@extends('layouts.admin')

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>Formation Details</h1>
        <div class="user-menu">
            <img src="#" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h5 mb-0">{{ $formation->title_en }} / {{ $formation->title_fr }}</h2>
            <div>
                <a href="{{ route('admin.formations.index') }}" class="btn btn-sm btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back
                </a>
                <a href="{{ route('admin.formations.edit', $formation->id) }}" class="btn btn-sm btn-primary ms-2">
                    <i class="bi bi-pencil"></i> Edit
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-4 text-center mb-4">
                        <img src="{{ asset($formation->image_url) }}"  
                         alt="{{ $formation->title_en }}" 
                         class="img-fluid rounded mb-3"
                         style="max-height: 250px;">
                </div>
                <div class="col-md-8 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Program Information</h5>
                            <ul class="list-unstyled">
                                <li><strong>Duration:</strong> {{ $formation->duree }} months</li>
                                <li><strong>Success Rate:</strong> {{ $formation->reussite }}%</li>
                                <li><strong>Next Intake:</strong> {{ $formation->rentree->format('F Y') }}</li>
                                <li><strong>Created:</strong> {{ $formation->created_at->format('d/m/Y H:i') }}</li>
                                <li><strong>Updated:</strong> {{ $formation->updated_at->format('d/m/Y H:i') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 card mb-4">
                            <div class="card-header">
                                <h5 class="mb-0">English Content</h5>
                            </div>
                            <div class="card-body">
                                <h6>Filieres</h6>
                                <div>{!! nl2br(e($formation->filieres_en)) !!}</div>
                                
                                <h6 class="mt-3">Description</h6>
                                <div>{!! nl2br(e($formation->description_en)) !!}</div>
                                
                                <h6 class="mt-3">Objectives</h6>
                                <div>{!! nl2br(e($formation->objectif_en)) !!}</div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 card mb-4">
                            <div class="card-header">
                                <h5 class="mb-0">French Content</h5>
                            </div>
                            <div class="card-body">
                                <h6>Filieres</h6>
                                <div>{!! nl2br(e($formation->filieres_fr)) !!}</div>
                                
                                <h6 class="mt-3">Description</h6>
                                <div>{!! nl2br(e($formation->description_fr)) !!}</div>
                                
                                <h6 class="mt-3">Objectifs</h6>
                                <div>{!! nl2br(e($formation->objectif_fr)) !!}</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</main>
@endsection