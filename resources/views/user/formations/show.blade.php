@extends('layouts.user')

@section('style')
<style>
    /* ── Header et breadcrumbs (inchangés) ── */
    .entry-header {
        position: relative;
        background-color: #fff;
        padding: 120px 0;
        background-size: cover;
    }
    .entry-header .entry-title h1 {
        font-size: 50px;
    }
    .breadcrumbs_unit {
        background-color: #f6f6f6;
        padding: 9px 0 7px;
        border-bottom: 1px solid #f0f2f5;
    }
    .breadcrumbs_unit .navxtBreads {
        font-size: 11px;
        color: #aaa;
        text-transform: uppercase;
    }
    .breadcrumbs_unit .navxtBreads > span {
        color: #5F625E;
        text-transform: initial !important;
        font-weight: 500;
    }
    .breadcrumbs_unit .navxtBreads > span:first-child > a {
        font-weight: bold !important;
    }
    .breadcrumbs_unit .navxtBreads > span a {
        color: #5F625E;
        text-transform: initial !important;
        font-weight: 500;
        font-size: 11px;
    }
    .breadcrumbs_unit .navxtBreads > span a:hover {
        color: #7cb342;
    }

    /* ── Hero de la formation ── */
    .course-hero {
        background: linear-gradient(135deg, #ecf0f1, #b9dda3);
        padding: 3rem 0;
        margin-bottom: 0;
    }
    .course-hero h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2d3e2d;
    }
    .course-hero .hero-badges .badge {
        background: rgba(255,255,255,0.8);
        color: #2d3e2d;
        font-weight: 500;
        padding: 0.4rem 1rem;
        border-radius: 40px;
        font-size: 0.9rem;
    }
    .course-hero .hero-badges .badge i {
        margin-right: 4px;
        color: #7cb342;
    }
    .course-hero .hero-image {
        border-radius: 50%;
        border: 5px solid #fff;
        max-width: 200px;
        width: 100%;
        height: auto;
        box-shadow: 0 8px 24px rgba(0,0,0,0.08);
    }

    /* ── Contenu principal ── */
    .formation-content {
        padding: 2rem 0;
    }
    .formation-content .section-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: #2d3e2d;
        margin-bottom: 1.5rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid #b9dda3;
    }
    .formation-content .section-title i {
        color: #7cb342;
        margin-right: 8px;
    }
    .formation-content .description {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #333;
    }
    .formation-content .info-card {
        background: #f8faf7;
        border-radius: 16px;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        border: 1px solid #eef3ee;
        transition: transform 0.2s;
    }
    .formation-content .info-card:hover {
        transform: translateY(-2px);
    }
    .formation-content .info-card h5 {
        font-weight: 600;
        color: #2d3e2d;
        margin-bottom: 0.75rem;
    }
    .formation-content .info-card ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .formation-content .info-card ul li {
        padding: 0.4rem 0;
        border-bottom: 1px solid #e9ecef;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .formation-content .info-card ul li:last-child {
        border-bottom: none;
    }
    .formation-content .info-card ul li .label {
        color: #666;
    }
    .formation-content .info-card ul li .value {
        font-weight: 500;
        color: #2d3e2d;
    }

    /* ── Barre latérale ── */
    .sidebar-card {
        background: #fff;
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: 0 8px 30px rgba(0,0,0,0.06);
        border: 1px solid #f0f0f0;
        margin-bottom: 2rem;
    }
    .sidebar-card .btn-apply {
        background: #7cb342;
        color: #fff;
        border: none;
        padding: 0.7rem 1.5rem;
        border-radius: 40px;
        font-weight: 600;
        width: 100%;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }
    .sidebar-card .btn-apply:hover {
        background: #558b2f;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(124,179,66,0.25);
    }
    .sidebar-card .btn-brochure {
        background: transparent;
        border: 2px solid #7cb342;
        color: #7cb342;
        padding: 0.7rem 1.5rem;
        border-radius: 40px;
        font-weight: 600;
        width: 100%;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        margin-top: 0.5rem;
    }
    .sidebar-card .btn-brochure:hover {
        background: #7cb342;
        color: #fff;
    }

    /* ── Responsive ── */
    @media (max-width: 768px) {
        .course-hero h1 {
            font-size: 2rem;
        }
        .course-hero .hero-image {
            max-width: 120px;
            margin-top: 1rem;
        }
    }
</style>
@endsection

@section('main')
<main class="content">
    <!-- Hero -->
    <section class="course-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="display-4 fw-bold text-dark">{{ $formation->{'title_'.app()->getLocale()} }}</h1>
                    <div class="hero-badges d-flex flex-wrap gap-2 mt-3">
                        <span class="badge"><i class="fas fa-clock"></i> {{ $formation->duree }} {{ __('formation.months') }}</span>
                        <span class="badge"><i class="fas fa-university"></i> CEFPREPAS</span>
                        <span class="badge"><i class="fas fa-tag"></i> CQP / DQP</span>
                    </div>
                </div>
                <div class="col-md-4 text-center d-none d-md-block">
                    <img src="{{ asset($formation->image_url) }}" alt="{{ $formation->{'title_'.app()->getLocale()} }}" class="hero-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumbs -->
    <div class="breadcrumbs_unit">
        <div class="container">
            <div class="navxtBreads">
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="{{ __('messages.go_to_cefprepas') }}" href="{{ route('index') }}" class="home"><span property="name">{{ __('messages.home') }}</span></a>
                    <meta property="position" content="1">
                </span>
                &gt;
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" href="{{ route('formations.index') }}" class="home"><span property="name">{{ __('formation.page_title') }}</span></a>
                    <meta property="position" content="2">
                </span>
                &gt;
                <span property="itemListElement" typeof="ListItem">
                    <span property="name" class="post post-page current-item text-uppercase">{{ $formation->{'title_'.app()->getLocale()} }}</span>
                    <meta property="position" content="3">
                </span>
            </div>
        </div>
    </div>

    <!-- Contenu -->
    <div class="container formation-content">
        <div class="row">
            <!-- Colonne principale -->
            <div class="col-lg-8">
                <!-- Description -->
                <div class="mb-4">
                    <h2 class="section-title"><i class="fas fa-info-circle"></i> {{ __('formation.course_overview') }}</h2>
                    <div class="description">
                        {!! nl2br(e($formation->{'description_'.app()->getLocale()})) !!}
                    </div>
                </div>

                <!-- Objectifs -->
                @if($formation->{'objectif_'.app()->getLocale()})
                <div class="info-card">
                    <h5><i class="fas fa-bullseye text-cef-green"></i> {{ __('formation.program_objectives') }}</h5>
                    <ul>
                        <li class="border-0 ps-0">{!! nl2br(e($formation->{'objectif_'.app()->getLocale()})) !!}</li>
                    </ul>
                </div>
                @endif

                <!-- Diplômes obtenus -->
                <div class="info-card">
                    <h5><i class="fas fa-graduation-cap text-cef-green"></i> {{ __('formation.diplomas_obtained') }}</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>{{ __('formation.cqp_title') }}</h6>
                            <ul>
                                <li><span class="label">{{ __('formation.cqp_point_1') }}</span></li>
                                <li><span class="label">{{ __('formation.cqp_point_2') }}</span></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>{{ __('formation.dqp_title') }}</h6>
                            <ul>
                                <li><span class="label">{{ __('formation.dqp_point_1') }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Données clés -->
                <div class="info-card">
                    <h5><i class="fas fa-key text-cef-green"></i> {{ __('formation.key_facts') }}</h5>
                    <ul>
                        <li>
                            <span class="label"><i class="fas fa-calendar-alt text-cef-green me-2"></i>{{ __('formation.start_dates') }}</span>
                            <span class="value">{{ $formation->rentree->format('F Y') }}</span>
                        </li>
                        <li>
                            <span class="label"><i class="fas fa-map-marker-alt text-cef-green me-2"></i>{{ __('formation.location') }}</span>
                            <span class="value">{{ __('formation.on_campus') }}</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Barre latérale -->
            <div class="col-lg-4">
                <!-- Candidature -->
                <div class="sidebar-card text-center">
                    <h4 class="card-title text-dark">{{ __('formation.ready_to_apply') }}</h4>
                    <p class="card-text text-muted">{{ __('formation.start_application') }}</p>
                    <a href="#" class="btn-apply">
                        <i class="fas fa-pencil-alt me-2"></i>{{ __('formation.apply_now') }}
                    </a>
                    <a href="{{ asset('assets/doc/prospectus_cefprepas.pdf') }}" class="btn-brochure">
                        <i class="fas fa-download me-2"></i>{{ __('formation.download_brochure') }}
                    </a>
                </div>

                <!-- Contact -->
                <div class="sidebar-card">
                    <h4><i class="fas fa-question-circle text-cef-green me-2"></i>{{ __('messages.questions') }}</h4>
                    <p class="text-muted">{{ __('formation.contact_team') }}</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-envelope text-cef-green me-2"></i> cefprepas@outlook.com</li>
                        <li class="mb-2"><i class="fas fa-phone text-cef-green me-2"></i> +237 695 566 666 / +237 677 444 071</li>
                        <li><i class="fas fa-clock text-cef-green me-2"></i> {{ __('formation.working_hours') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection