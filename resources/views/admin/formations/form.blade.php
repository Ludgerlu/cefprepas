@extends('layouts.admin')

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>{{ isset($formation) ? 'Edit' : 'Create' }} Formation</h1>
        <div class="user-menu">
            <img src="{{ asset('profile.jpg') }}" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2 class="h5 mb-0">Formation Information</h2>
            <a href="{{ route('admin.formations.index') }}" class="btn btn-sm btn-secondary">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>
        <div class="card-body">
            <form action="{{ isset($formation) ? route('admin.formations.update', $formation->id) : route('admin.formations.store') }}" 
                  method="POST" 
                  enctype="multipart/form-data">
                @csrf
                @if(isset($formation)) @method('PUT') @endif
                
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mb-3">English Content</h4>
                        
                        <div class="mb-3">
                            <label for="title_en" class="form-label">Title *</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" 
                                   value="{{ old('title_en', $formation->title_en ?? '') }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="filieres_en" class="form-label">Filieres *</label>
                            <textarea class="form-control" id="filieres_en" name="filieres_en" 
                                      rows="3" required>{{ old('filieres_en', $formation->filieres_en ?? '') }}</textarea>
                            <small class="text-muted">List filieres separated by new lines</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="description_en" class="form-label">Description *</label>
                            <textarea class="form-control" id="description_en" name="description_en" 
                                      rows="5" required>{{ old('description_en', $formation->description_en ?? '') }}</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="objectif_en" class="form-label">Objectives *</label>
                            <textarea class="form-control" id="objectif_en" name="objectif_en" 
                                      rows="5" required>{{ old('objectif_en', $formation->objectif_en ?? '') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <h4 class="mb-3">French Content</h4>
                        
                        <div class="mb-3">
                            <label for="title_fr" class="form-label">Titre *</label>
                            <input type="text" class="form-control" id="title_fr" name="title_fr" 
                                   value="{{ old('title_fr', $formation->title_fr ?? '') }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="filieres_fr" class="form-label">Filieres *</label>
                            <textarea class="form-control" id="filieres_fr" name="filieres_fr" 
                                      rows="3" required>{{ old('filieres_fr', $formation->filieres_fr ?? '') }}</textarea>
                            <small class="text-muted">Liste des filières séparées par des nouvelles lignes</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="description_fr" class="form-label">Description *</label>
                            <textarea class="form-control" id="description_fr" name="description_fr" 
                                      rows="5" required>{{ old('description_fr', $formation->description_fr ?? '') }}</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="objectif_fr" class="form-label">Objectifs *</label>
                            <textarea class="form-control" id="objectif_fr" name="objectif_fr" 
                                      rows="5" required>{{ old('objectif_fr', $formation->objectif_fr ?? '') }}</textarea>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="duree" class="form-label">Duration (months) *</label>
                            <input type="number" class="form-control" id="duree" name="duree" 
                                   value="{{ old('duree', $formation->duree ?? '') }}" required>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="reussite" class="form-label">Success Rate (%) *</label>
                            <input type="number" class="form-control" id="reussite" name="reussite" 
                                   value="{{ old('reussite', $formation->reussite ?? '') }}" min="0" max="100" required>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="rentree" class="form-label">Next Intake *</label>
                            <input type="date" class="form-control" id="rentree" name="rentree" 
                                   value="{{ old('rentree', isset($formation) ? $formation->rentree->format('Y-m-d') : '') }}" required>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="image_url" class="form-label">
                        Formation Image *
                        @if(isset($formation)) 
                            <span class="text-muted">(Leave blank to keep current)</span>
                        @endif
                    </label>
                    <input type="file" class="form-control" id="image_url" name="image_url"
                           {{ !isset($formation) ? 'required' : '' }}>
                    @if(isset($formation) && $formation->image_url)
                        <div class="mt-2">
                            <img src="{{ asset($formation->image_url) }}" 
                                 alt="Current Image" 
                                 width="150" 
                                 class="img-thumbnail">
                            <p class="text-muted small mt-1">Current Image</p>
                        </div>
                    @endif
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> {{ isset($formation) ? 'Update' : 'Save' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection