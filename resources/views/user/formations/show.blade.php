@extends('layouts.user') 
@section('style')
<style>
    .entry-header {
        position: relative;
        background-color: #fff;
        padding: 120px 0;
        background-size: cover;
    }
    

    .entry-header .entry-title h1 {
        font-size: 50px;
        /* color: #fff; */
    }
    .breadcrumbs_unit {
        padding-top: 11px;
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

    .breadcrumbs_unit .navxtBreads > span {
        color: #aaa;
        font-size: 11px;
        text-transform: uppercase;
    }
    .breadcrumbs_unit .navxtBreads > span:first-child > a {
        font-weight: bold !important;
    }

    .breadcrumbs_unit .navxtBreads > span a {
        color: #5F625E;
        text-transform: initial !important;
        font-weight: 500;
    }
    
    .breadcrumbs_unit .navxtBreads > span a {
        font-size: 11px;
        color: #aaa;
    }
    .breadcrumbs_unit .navxtBreads > span a {
        color: #5F625E;
        text-transform: initial !important;
        font-weight: 500;
    }



    img {
        border-style: none;
        height: auto;
    }

    a img {
        border: none;
        outline: none;
    }

    figure {
        display: block;
        background-color: #fff;
        -ms-interpolation-mode: bicubic;
    }

    figure img {
        display: block;
        width: auto;
        max-width: 100%;
    }

    .course-card {
            transition: transform 0.3s;
            margin-bottom: 20px;
            height: 100%;
        }
        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .course-badge {
            position: absolute;
            top: 10px;
            right: 10px;
        }
        .course-hero {
            background: linear-gradient(135deg, #ecf0f1, #b9dda3 100%);
            color: white;
            padding: 4rem 0;
            margin-bottom: 2rem;
        }
        .syllabus-item {
            border-left: 3px solid #0d6efd;
            padding-left: 15px;
            margin-bottom: 15px;
        }
        .instructor-card {
            transition: transform 0.3s;
        }
        .instructor-card:hover {
            transform: translateY(-5px);
        }
        .requirement-badge {
            margin-right: 5px;
            margin-bottom: 5px;
        }
        .back-to-courses {
            margin-bottom: 20px;
        }

        .card {
            font-size: inherit;
            font-weight: normal;
            color: black;
        }

        .cart-title{
            font-weight: normal;
        }
</style>
@endsection 
@section('main')
<main class="content">
    <section class="course-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="display-4 fw-bold text-dark">{{ $formation->{'title_'.app()->getLocale()} }}</h1>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <span class="badge bg-light text-dark">
                            <i class="fas fa-clock me-1"></i> {{ $formation->duree }} {{ __('formation.months') }}
                        </span>
                        <span class="badge bg-light text-dark">
                            <i class="fas fa-university me-1"></i> CEFPREPAS
                        </span>
                    </div>
                </div>
                <div class="col-md-4 text-center d-none d-md-block">
                    <img src="{{ asset($formation->image_url) }}" alt="{{ $formation->{'title_'.app()->getLocale()} }}" class="img-fluid rounded-circle" style="border: 5px solid white; max-width: 200px;">
                </div>
            </div>
        </div>
    </section>
    <div class="breadcrumbs_unit">
        <div class="container">
            <div class="navxtBreads">
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="{{ __('messages.go_to_cefprepas') }}" href="{{ route('index') }}" class="home"><span property="name">{{ __('messages.home') }}</span></a><meta property="position" content="1">
                </span>
                &gt;
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" href="{{ route('formations.index') }}" class="home"><span property="name">{{ __('formation.page_title') }}</span></a>
                </span>
                &gt;
                <span property="itemListElement" typeof="ListItem">
                    <span property="name" class="post post-page current-item text-uppercase">{{ $formation->{'title_'.app()->getLocale()} }}</span><meta property="url" content="https://www.CEFPREPAS.com/"><meta property="position" content="2">
                </span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="empty_space" style="height: 87px;">
            <span class="empty_space_inner"></span>
        </div>
        <section>
           <div class="row">
                <div class="col-lg-8">
                    <section class="mb-5">
                        <h2 class="fw-bold mb-4"><i class="fas fa-info-circle text-cef-green me-2"></i>{{ __('formation.course_overview') }}</h2>                        
                        
                        <div style="white-space: pre-line;">
                            {{ $formation->{'description_'.app()->getLocale()} }}
                        </div>
                        <div class="row mt-4 mb-4">
                            <div class="col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-bullseye text-cef-green me-2"></i>{{ __('formation.program_objectives') }}</h5>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item border-0 ps-0">{!! nl2br(e($formation->{'objectif_'.app()->getLocale()})) !!}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 mb-4">
                                    <div class="card-body">
                                        <h4 class="card-title"><i class="fas fa-bullseye text-cef-green me-2"></i>{{ __('formation.key_facts') }}</h4>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 ps-0">
                                                <span><i class="fas fa-calendar-alt text-cef-green me-2"></i>{{ __('formation.start_dates') }}</span>
                                                <span class="badge bg-light text-dark">{{ $formation->rentree->format('F Y') }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 ps-0">
                                                <span><i class="fas fa-map-marker-alt text-cef-green me-2"></i>{{ __('formation.location') }}</span>
                                                <span class="badge bg-light text-dark">{{ __('formation.on_campus') }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-bullseye text-cef-green me-2"></i>{{ __('formation.diplomas_obtained') }}</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>{{ __('formation.cqp_title') }}</h6>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item border-0 ps-0">{{ __('formation.cqp_point_1') }}</li>
                                                    <li class="list-group-item border-0 ps-0">{{ __('formation.cqp_point_2') }}</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>{{ __('formation.dqp_title') }}</h6>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item border-0 ps-0">{{ __('formation.dqp_point_1') }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
    
                <div class="col-lg-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body text-center">
                            <h4 class="card-title text-dark">{{ __('formation.ready_to_apply') }}</h4>
                            <p class="card-text text-dark">{{ __('formation.start_application') }}</p>
                            <a href="#" class="btn btn-primary btn-lg w-100 mb-2">
                                <i class="fas fa-pencil-alt me-2"></i>{{ __('formation.apply_now') }}
                            </a>
                            <a href="{{ asset('assets/doc/prospectus_cefprepas.pdf') }}" class="btn btn-outline-secondary w-100">
                                <i class="fas fa-download me-2"></i>{{ __('formation.download_brochure') }}
                            </a>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><i class="fas fa-question-circle text-cef-green me-2"></i>{{ __('messages.questions') }}</h4>
                            <p class="card-text">{{ __('formation.contact_team') }}</p>
                            
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item border-0 ps-0">
                                    <i class="fas fa-envelope me-2 text-cef-green"></i>cefprepas@outlook.com
                                </li>
                                <li class="list-group-item border-0 ps-0">
                                    <i class="fas fa-phone me-2 text-cef-green"></i>+237 695 566 666 / +237 677 444 071
                                </li>
                                <li class="list-group-item border-0 ps-0">
                                    <i class="fas fa-clock me-2 text-cef-green"></i>{{ __('formation.working_hours') }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="empty_space" style="height: 87px;">
            <span class="empty_space_inner"></span>
        </div>
    </div>
</main>
@endsection





