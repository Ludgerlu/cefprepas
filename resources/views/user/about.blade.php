@extends('layouts.user') 
@section('style')
<style>
    ol li, ul li {
        margin-bottom: 8px;
    }

    section#about ,section#promoteur{
        height:auto !important;
    }
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
    #about .image img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    #about .image:hover img {
        transform: scale(1.1);
    }

    /* Optional overlay effect */
    #about .image::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.2);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    #about .image:hover::after {
        opacity: 1;
    }
</style>
@endsection 
@section('main')
<main class="content">
    <div class="entry-header clearfix" style="background: linear-gradient(135deg, #ecf0f1, #b9dda3); background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="entry-title-left">
                <div class="entry-title text-center text-uppercase text-dark fs-5">
                    <h1>{{ __('about.title') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="breadcrumbs_unit">
            <div class="container">
                <div class="navxtBreads">
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="Go to cefprepas.com" href="{{ route('index') }}" class="home"><span property="name">{{ __('about.breadcrumb_home') }}</span></a><meta property="position" content="1">
                    </span>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name" class="post post-page current-item text-uppercase">{{ __('about.breadcrumb_about') }}</span><meta property="url" content="https://www.CEFPREPAS.com/"><meta property="position" content="2">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="empty_space" style="height: 87px;">
            <span class="empty_space_inner"></span>
        </div>
        <section id="about">
            <h1 class="text-uppercase fw-bolder" style="text-align: center;">{{ __('about.page_title') }}</h1>
            <div class="empty_space" style="height: 87px;">
                <span class="empty_space_inner"></span>
            </div>
            <div class="row">
                <div class="col-md-7 order-lg-1 order-2 mb-3">
                    <p class="text-justify mb-4">{{ __('about.approval_text') }}</p>
                    <p class="text-justify mb-4">{{ __('about.description_text') }}</p>
                    <ul>
                        @foreach(__('about.trainings') as $training)
                            <li><strong>{{ $training }}</strong></li>
                        @endforeach
                    </ul>
                    <p>{!! __('about.facilities_text') !!}</p>
                </div>
                <div class="col-md-5 order-lg-2 order-1 mb-3">
                    <img src="{{ asset('assets/img/lapin.jpg') }}" alt="#" style="width: 100%;box-shadow: 0px 20px 60px 10px rgba(0, 0, 0, 0.1);border-radius: 20px;">
                </div>
            </div>
            <div class="empty_space" style="height: 87px;">
                <span class="empty_space_inner"></span>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <img src="{{ asset('assets/img/bonASavoir.jpeg') }}" alt="#" style="height: 503px;width: 100%;box-shadow: 0px 20px 60px 10px rgba(0, 0, 0, 0.1);border-radius: 20px;">
                </div>
                <div class="col-md-6 mb-3">
                    <div class="mb-3" style="justify-items: center;">
                        <h4 class="text-uppercase fw-bold">{{ __('about.good_to_know') }}</h4>
                        <ul>
                            @foreach(__('about.know_points') as $point)
                                <li><strong>{{ $point }}</strong></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="empty_space" style="height: 87px;">
                <span class="empty_space_inner"></span>
            </div>
        </section>
    </div>
    {{-- ajouter les temoinage et partenaire --}}
</main>
@endsection
