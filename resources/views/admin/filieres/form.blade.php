@extends('layouts.admin')

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>{{ isset($filiere) ? 'Edit' : 'Create' }} Filiere</h1>
        <div class="user-menu">
            <img src="{{ asset('profile.jpg') }}" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2 class="h5 mb-0">Filiere Information</h2>
            <a href="{{ route('admin.filieres.index') }}" class="btn btn-sm btn-secondary">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>
        <div class="card-body">
            <form action="{{ isset($filiere) ? route('admin.filieres.update', $filiere->id) : route('admin.filieres.store') }}" 
                  method="POST">
                @csrf
                @if(isset($filiere)) @method('PUT') @endif
                
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mb-3">English Content</h4>
                        
                        <div class="mb-3">
                            <label for="title_en" class="form-label">Title *</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" 
                                   value="{{ old('title_en', $filiere->title_en ?? '') }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="sub_en" class="form-label">Subtitle *</label>
                            <input type="text" class="form-control" id="sub_en" name="sub_en" 
                                   value="{{ old('sub_en', $filiere->sub_en ?? '') }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="description_en" class="form-label">Description *</label>
                            <textarea class="form-control" id="description_en" name="description_en" 
                                      rows="5" required>{{ old('description_en', $filiere->description_en ?? '') }}</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="objectif_en" class="form-label">Objectives *</label>
                            <textarea class="form-control" id="objectif_en" name="objectif_en" 
                                      rows="5" required>{{ old('objectif_en', $filiere->objectif_en ?? '') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <h4 class="mb-3">French Content</h4>
                        
                        <div class="mb-3">
                            <label for="title_fr" class="form-label">Titre *</label>
                            <input type="text" class="form-control" id="title_fr" name="title_fr" 
                                   value="{{ old('title_fr', $filiere->title_fr ?? '') }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="sub_fr" class="form-label">Sous-titre *</label>
                            <input type="text" class="form-control" id="sub_fr" name="sub_fr" 
                                   value="{{ old('sub_fr', $filiere->sub_fr ?? '') }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="description_fr" class="form-label">Description *</label>
                            <textarea class="form-control" id="description_fr" name="description_fr" 
                                      rows="5" required>{{ old('description_fr', $filiere->description_fr ?? '') }}</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="objectif_fr" class="form-label">Objectifs *</label>
                            <textarea class="form-control" id="objectif_fr" name="objectif_fr" 
                                      rows="5" required>{{ old('objectif_fr', $filiere->objectif_fr ?? '') }}</textarea>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="duree" class="form-label">Duration (months) *</label>
                            <input type="number" class="form-control" id="duree" name="duree" 
                                   value="{{ old('duree', $filiere->duree ?? '') }}" required>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="reussite" class="form-label">Success Rate (%) *</label>
                            <input type="number" class="form-control" id="reussite" name="reussite" 
                                   value="{{ old('reussite', $filiere->reussite ?? '') }}" min="0" max="100" required>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="rentree" class="form-label">Next Intake *</label>
                            <input type="date" class="form-control" id="rentree" name="rentree" 
                                   value="{{ old('rentree', isset($filiere) ? $filiere->rentree->format('Y-m-d') : '') }}" required>
                        </div>
                    </div>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> {{ isset($filiere) ? 'Update' : 'Save' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection