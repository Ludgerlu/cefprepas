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

    /* ── Grille des diplômes ── */
    .diplome-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin: 2rem 0 4rem;
    }

    .diplome-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0,0,0,0.06);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #f0f0f0;
    }
    .diplome-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 48px rgba(124, 179, 66, 0.10);
        border-color: #7cb342;
    }

    .diplome-card__image {
        position: relative;
        padding-bottom: 66.66%; /* 3:2 */
        overflow: hidden;
        background: #f1f3f1;
    }
    .diplome-card__image img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .diplome-card:hover .diplome-card__image img {
        transform: scale(1.04);
    }

    .diplome-card__overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
        padding: 1.5rem;
        color: #fff;
    }
    .diplome-card__overlay h5 {
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }
    .diplome-card__overlay .btn-diplome {
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
    .diplome-card__overlay .btn-diplome:hover {
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
    .modal-body ul {
        list-style: none;
        padding: 0;
    }
    .modal-body ul li {
        padding: 0.8rem 1rem;
        margin-bottom: 0.5rem;
        background: #f8faf7;
        border-radius: 10px;
        border-left: 4px solid #7cb342;
        transition: all 0.2s;
    }
    .modal-body ul li:hover {
        background: #e8f0e3;
        transform: translateX(4px);
    }
    .modal-body ul li i {
        color: #7cb342;
        margin-right: 0.5rem;
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
            <h1>{{ __('diplome.page_title') }}</h1>
        </div>
    </div>

    <div class="breadcrumbs_unit">
        <div class="container">
            <div class="navxtBreads">
                <span><a href="{{ route('index') }}">{{ __('messages.home') }}</a></span>
                &gt;
                <span class="current-item">{{ __('diplome.page_title') }}</span>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center fw-bold mb-4">{{ __('diplome.section_title') }}</h2>
        <div class="diplome-grid">
            <!-- CQP -->
            <div class="diplome-card">
                <div class="diplome-card__image">
                    <img src="{{ asset('assets/img/CQP.jpeg') }}" alt="{{ __('diplome.cqp_title') }}">
                    <div class="diplome-card__overlay">
                        <h5>{{ __('diplome.cqp_title') }}</h5>
                        <button class="btn-diplome" data-bs-toggle="modal" data-bs-target="#CQPModal">
                            {{ __('diplome.know_more') }} <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Attestation / DQP -->
            <div class="diplome-card">
                <div class="diplome-card__image">
                    <img src="{{ asset('assets/img/attestation2.jpeg') }}" alt="{{ __('diplome.attestation_title') }}">
                    <div class="diplome-card__overlay">
                        <h5>{{ __('diplome.attestation_title') }}</h5>
                        <button class="btn-diplome" data-bs-toggle="modal" data-bs-target="#DQPModal">
                            {{ __('diplome.know_more') }} <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Modal CQP -->
<div class="modal fade" id="CQPModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('diplome.cqp_modal_title') }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li><i class="fas fa-check-circle"></i> {{ __('diplome.cqp_point_1') }}</li>
                    <li><i class="fas fa-check-circle"></i> {{ __('diplome.cqp_point_2') }}</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('diplome.close') }}</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Attestation -->
<div class="modal fade" id="DQPModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('diplome.attestation_modal_title') }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li><i class="fas fa-check-circle"></i> {{ __('diplome.attestation_point_1') }}</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('diplome.close') }}</button>
            </div>
        </div>
    </div>
</div>
@endsection