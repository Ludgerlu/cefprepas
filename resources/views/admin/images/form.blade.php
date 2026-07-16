@extends('layouts.admin')

@section('main')
<main class="main-content">
    <div class="top-nav">
        <h1>{{ isset($image) ? 'Edit' : 'Create' }} Image</h1>
        <div class="user-menu">
            <img src="#" alt="Admin">
            <span>Admin User</span>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2 class="h5 mb-0">Image Information</h2>
            <a href="{{ route('admin.images.index') }}" class="btn btn-sm btn-secondary">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>
        <div class="card-body">
            <form action="{{ isset($image) ? route('admin.images.update', $image->id) : route('admin.images.store') }}" 
                  method="POST" 
                  enctype="multipart/form-data">
                @csrf
                @if(isset($image)) @method('PUT') @endif
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name_en" class="form-label">English Name *</label>
                            <input type="text" class="form-control" id="name_en" name="name_en" 
                                   value="{{ old('name_en', $image->name_en ?? '') }}" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name_fr" class="form-label">French Name *</label>
                            <input type="text" class="form-control" id="name_fr" name="name_fr" 
                                   value="{{ old('name_fr', $image->name_fr ?? '') }}" required>
                        </div>
                    </div>
                </div>
                
                {{-- SECTION IMAGE AVEC COMPRESSION ET APERÇU --}}
                <div class="mb-3">
                    <label for="image_url" class="form-label">
                        Image File *
                        @if(isset($image)) 
                            <span class="text-muted">(Leave blank to keep current)</span>
                        @endif
                    </label>
                    
                    <div class="input-group">
                        <input type="file" 
                               accept="image/jpeg,image/jpg,image/png" 
                               class="form-control" 
                               id="image_url" 
                               name="image_url"
                               {{ !isset($image) ? 'required' : '' }}>
                        <label class="input-group-text" for="image_url">
                            <i class="bi bi-camera-fill"></i>
                        </label>
                    </div>
                    <small class="text-muted">
                        Formats acceptés : JPG, PNG (max 10MB avant compression)
                    </small>

                    {{-- Loader de compression --}}
                    <div id="upload-loader" class="text-center mt-2" style="display: none;">
                        <div class="spinner-border text-success spinner-border-sm" role="status">
                            <span class="visually-hidden">Compression en cours...</span>
                        </div>
                        <span class="text-muted ms-2">Compression de l'image en cours...</span>
                    </div>

                    {{-- Aperçu de l'image --}}
                    <div class="mt-2 position-relative" style="display: inline-block;">
                        <img src="{{ isset($image) && $image->image_url ? asset($image->image_url) : asset('assets/img/default.jpg') }}" 
                             alt="Aperçu de l'image" 
                             id="preview_image_url" 
                             width="200" 
                             class="img-thumbnail" 
                             style="max-width: 100%; height: auto; border: 1px solid #dee2e6;">
                        {{-- Badge de compression (caché par défaut) --}}
                        <span id="compression-status" 
                              class="position-absolute top-0 start-0 badge bg-success m-2" 
                              style="display: none;">
                            <i class="bi bi-check-circle"></i> Compressée
                        </span>
                    </div>

                    {{-- Détails de compression (affichés après compression) --}}
                    <div id="compression-info" style="display: none;" class="mt-2">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <h6 class="alert-heading"><i class="bi bi-check-circle-fill"></i> Image optimisée</h6>
                            <div id="compression-details"></div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    </div>

                    @if(isset($image) && $image->image_url)
                        <div class="mt-2">
                            <p class="text-muted small">Image actuelle :</p>
                            <img src="{{ asset($image->image_url) }}" 
                                 alt="Current Image" 
                                 width="150" 
                                 class="img-thumbnail">
                        </div>
                    @endif
                </div>
                {{-- FIN SECTION IMAGE --}}
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> {{ isset($image) ? 'Update' : 'Save' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection

{{-- Scripts pour la compression d'image --}}
@section('script')
{{-- Inclure le script de compression (doit être présent dans public/assets/js/) --}}
<script src="{{ asset('assets/js/image-compression.js') }}"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Références DOM
    const fileInput = document.getElementById('image_url');
    const previewImg = document.getElementById('preview_image_url');
    const loader = document.getElementById('upload-loader');
    const compressionStatus = document.getElementById('compression-status');
    const compressionInfo = document.getElementById('compression-info');
    const compressionDetails = document.getElementById('compression-details');

    // Gérer le changement de fichier
    fileInput.addEventListener('change', async function(e) {
        // Réinitialiser les affichages
        compressionInfo.style.display = 'none';
        compressionStatus.style.display = 'none';

        // Si aucun fichier sélectionné, on remet l'aperçu par défaut (ou l'image existante)
        if (!this.files || this.files.length === 0) {
            const defaultSrc = "{{ isset($image) && $image->image_url ? asset($image->image_url) : asset('assets/img/default.jpg') }}";
            previewImg.src = defaultSrc;
            return;
        }

        // Appeler la fonction de compression (importée depuis image-compression.js)
        // Cette fonction gère le loader, l'aperçu, le toast et met à jour les détails
        await handleImageUpload(this, 'preview_image_url');

        // Vérifier si l'image a bien été compressée (le fichier contient "_compressed" dans son nom)
        if (this.files && this.files[0] && this.files[0].name.includes('_compressed')) {
            compressionStatus.style.display = 'inline-block';
            
            // Les détails de compression ont été mis à jour par handleImageUpload
            // dans l'élément #compression-details. On affiche le bloc si des détails existent.
            if (compressionDetails && compressionDetails.innerHTML.trim() !== '') {
                compressionInfo.style.display = 'block';
            }
        }
    });

    // Optionnel : si une image existe déjà, on peut afficher un badge "existante" ? Pas nécessaire.
});
</script>
@endsection