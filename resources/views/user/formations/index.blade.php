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
</style>
@endsection 
@section('main')
<main class="content">
    <div class="entry-header clearfix" style="background: linear-gradient(135deg, #ecf0f1, #b9dda3); background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="entry-title-left">
                <div class="entry-title text-center text-uppercase text-dark fs-5">
                    <h1>{{ __('formation.page_title') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="breadcrumbs_unit">
            <div class="container">
                <div class="navxtBreads">
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="{{ __('messages.go_to_cefprepas') }}" href="{{ route('index') }}" class="home"><span property="name">{{ __('messages.home') }}</span></a><meta property="position" content="1">
                    </span>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name" class="post post-page current-item text-uppercase">{{ __('formation.page_title') }}</span><meta property="url" content="https://www.CEFPREPAS.com/"><meta property="position" content="2">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="empty_space" style="height: 87px;">
            <span class="empty_space_inner"></span>
        </div>
        <section>
            <h1 class="text-uppercase fw-bolder mb-4" style="text-align: center;">{{ __('formation.offered_courses') }}</h1>
            <div class="row">
                @foreach($formations as $formation)
                    <div class="col-lg-6 col-md-6 mb-5 mt-3">
                        <div class="card course-card">
                            <img src="{{ asset($formation->image_url) }}" class="card-img-top" alt="{{ $formation->{'title_'.app()->getLocale()} }}">
                            <div class="card-body">
                                <h5 class="card-title text-dark">{{ $formation->{'title_'.app()->getLocale()} }}</h5>
                                <p class="card-text text-muted">{{ Str::limit( $formation->{'description_'.app()->getLocale()}, 75) }}</p>
                                <ul class="list-group list-group-flush mb-3">
                                    <li class="list-group-item"><i class="fas fa-clock me-2"></i>{{ __('formation.duration') }}: {{ $formation->duree }} {{ __('formation.months') }}</li>
                                    <li class="list-group-item"><i class="fas fa-user-graduate me-2"></i>{{ __('formation.degree') }}: CQP/DQP</li>
                                </ul>
                                <a href="{{ route('formations.show',$formation->id) }}" class="btn btn-primary">{{ __('formation.learn_more') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <div class="empty_space" style="height: 87px;">
            <span class="empty_space_inner"></span>
        </div>
    </div>
</main>
@endsection





