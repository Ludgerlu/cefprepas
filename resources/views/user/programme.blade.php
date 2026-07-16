@extends('layouts.user')

@section('style')
<style>
    /* ── En-tête et fil d'Ariane ── */
    .entry-header {
        background: linear-gradient(135deg, #ecf0f1, #b9dda3);
        padding: 80px 0;
        text-align: center;
    }
    .entry-header h1 {
        font-size: clamp(2rem, 5vw, 3.5rem);
        font-weight: 700;
        color: #2d3e2d;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .breadcrumbs_unit {
        background: #f8faf7;
        padding: 12px 0;
        border-bottom: 1px solid #e9ecef;
    }
    .breadcrumbs_unit .navxtBreads {
        font-size: 0.85rem;
        color: #6c757d;
    }
    .breadcrumbs_unit .navxtBreads a {
        color: #7cb342;
        text-decoration: none;
        font-weight: 500;
    }
    .breadcrumbs_unit .navxtBreads a:hover {
        text-decoration: underline;
    }
    .breadcrumbs_unit .navxtBreads .current-item {
        color: #2d3e2d;
        font-weight: 600;
    }

    /* ── Grille des programmes ── */
    .programme-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        margin: 2rem 0 4rem;
    }

    .programme-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0,0,0,0.06);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #f0f0f0;
    }
    .programme-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 48px rgba(124, 179, 66, 0.10);
        border-color: #7cb342;
    }

    .programme-card__image {
        position: relative;
        padding-bottom: 66.66%;
        overflow: hidden;
        background: #f1f3f1;
    }
    .programme-card__image img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .programme-card:hover .programme-card__image img {
        transform: scale(1.04);
    }

    .programme-card__overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
        padding: 1.5rem;
        color: #fff;
    }
    .programme-card__overlay h5 {
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }
    .programme-card__overlay .btn-programme {
        background: #7cb342;
        color: #fff;
        border: none;
        padding: 0.4rem 1.5rem;
        border-radius: 40px;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    .programme-card__overlay .btn-programme:hover {
        background: #558b2f;
        transform: translateX(4px);
    }

    /* ── Modales ── */
    .modal-content {
        border-radius: 20px;
        border: none;
        box-shadow: 0 25px 50px rgba(0,0,0,0.15);
    }
    .modal-header {
        background: #2d3e2d;
        color: #fff;
        border-bottom: none;
        padding: 1.5rem 2rem;
    }
    .modal-header .btn-close {
        filter: invert(1);
    }
    .modal-title {
        font-weight: 700;
    }
    .modal-body {
        padding: 2rem;
    }
    .modal-body .info-item {
        margin-bottom: 1.5rem;
    }
    .modal-body .info-item h5 {
        font-weight: 700;
        color: #2d3e2d;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .modal-body .info-item h5 i {
        color: #7cb342;
    }
    .modal-body .info-item p {
        color: #555;
        line-height: 1.6;
        margin-bottom: 0;
    }
    .modal-body .info-item ul {
        list-style: none;
        padding: 0;
    }
    .modal-body .info-item ul li {
        padding: 0.4rem 0;
        border-bottom: 1px solid #f0f0f0;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .modal-body .info-item ul li i {
        color: #7cb342;
    }
    .modal-footer {
        border-top: 1px solid #e9ecef;
        padding: 1rem 2rem;
    }
    .modal-footer .btn-secondary {
        background: #6c757d;
        border: none;
        border-radius: 40px;
        padding: 0.5rem 2rem;
        font-weight: 600;
        transition: all 0.3s;
    }
    .modal-footer .btn-secondary:hover {
        background: #5a6268;
        transform: translateY(-2px);
    }
</style>
@endsection

@section('main')
<main class="content">
    <div class="entry-header">
        <div class="container">
            <h1>{{ __('programme.page_title') }}</h1>
        </div>
    </div>

    <div class="breadcrumbs_unit">
        <div class="container">
            <div class="navxtBreads">
                <span><a href="{{ route('index') }}">{{ __('messages.home') }}</a></span>
                &gt;
                <span class="current-item">{{ __('programme.breadcrumb') }}</span>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center fw-bold mb-4">{{ __('programme.section_title') }}</h2>
        <div class="programme-grid">
            @foreach(['fci', 'fcc', 'fa', 'fsc'] as $program)
                <div class="programme-card">
                    <div class="programme-card__image">
                        <img src="{{ asset(__('programme.programs.'.$program.'.img')) }}" alt="{{ __('programme.programs.'.$program.'.title') }}">
                        <div class="programme-card__overlay">
                            <h5>{{ __('programme.programs.'.$program.'.title') }}</h5>
                            <button class="btn-programme" data-bs-toggle="modal" data-bs-target="#{{ strtoupper($program) }}Modal">
                                {{ __('programme.view_button') }} <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

@foreach(['fci', 'fcc', 'fa', 'fsc'] as $program)
<div class="modal fade" id="{{ strtoupper($program) }}Modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('programme.programs.'.$program.'.modal_title') }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 info-item">
                        <h5><i class="fas fa-users"></i> {{ __('programme.programs.'.$program.'.target_audience') }}</h5>
                        <p>{{ __('programme.programs.'.$program.'.target_text') }}</p>
                    </div>
                    <div class="col-md-6 info-item">
                        <h5><i class="fas fa-clock"></i> {{ __('programme.programs.'.$program.'.duration') }}</h5>
                        <p>{{ __('programme.programs.'.$program.'.duration_text') }}</p>
                    </div>
                    @if(isset(__('programme.programs.'.$program)['sessions_list']))
                    <div class="col-md-6 info-item">
                        <h5><i class="fas fa-list"></i> {{ __('programme.programs.'.$program.'.sessions') }}</h5>
                        <ul>
                            @foreach(__('programme.programs.'.$program.'.sessions_list') as $session)
                            <li><i class="fas fa-check-circle"></i> {{ $session }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(isset(__('programme.programs.'.$program)['scheduling']))
                    <div class="col-md-6 info-item">
                        <h5><i class="fas fa-calendar-alt"></i> {{ __('programme.programs.'.$program.'.scheduling') }}</h5>
                        <p>{{ __('programme.programs.'.$program.'.scheduling_text') }}</p>
                    </div>
                    @endif
                    @if(isset(__('programme.programs.'.$program)['location']))
                    <div class="col-md-6 info-item">
                        <h5><i class="fas fa-map-marker-alt"></i> {{ __('programme.programs.'.$program.'.location') }}</h5>
                        <p>{{ __('programme.programs.'.$program.'.location_text') }}</p>
                    </div>
                    @endif
                    @if(isset(__('programme.programs.'.$program)['content']))
                    <div class="col-md-6 info-item">
                        <h5><i class="fas fa-book"></i> {{ __('programme.programs.'.$program.'.content') }}</h5>
                        <p>{{ __('programme.programs.'.$program.'.content_text') }}</p>
                    </div>
                    @endif
                    @if(isset(__('programme.programs.'.$program)['schedule']))
                    <div class="col-md-6 info-item">
                        <h5><i class="fas fa-calendar-check"></i> {{ __('programme.programs.'.$program.'.schedule') }}</h5>
                        <p>{{ __('programme.programs.'.$program.'.schedule_text') }}</p>
                    </div>
                    @endif
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('programme.close_button') }}</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection