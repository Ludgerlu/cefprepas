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

    .team-details__top-content .title span {
        color: green;
        font-size: 16px;
        line-height: 21px;
        font-weight: 700;
        letter-spacing: 0.1em;
    }
    
</style>
@endsection 
@section('main')
<main class="content">
    <div class="entry-header clearfix" style="background: linear-gradient(135deg, #ecf0f1, #b9dda3); background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="entry-title-left">
                <div class="entry-title text-center text-uppercase text-dark fs-5">
                    <h1>{{ __('emploie.page_title') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="breadcrumbs_unit">
            <div class="container">
                <div class="navxtBreads">
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="Go to cefprepas.com" href="{{ route('index') }}" class="home"><span property="name">{{ __('messages.home') }}</span></a><meta property="position" content="1">
                    </span>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name" class="post post-page current-item text-uppercase">{{ __('emploie.breadcrumb') }}</span><meta property="url" content="https://www.CEFPREPAS.com/"><meta property="position" content="2">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="empty_space" style="height: 87px;">
            <span class="empty_space_inner"></span>
        </div>
        <section id="promoteur">
            <div class="row">
                <h2 class="text-uppercase text-center">{{ __('emploie.employment_title') }}</h2>
                <div class="col-md-6">
                    <h3 class="text-uppercase text-center">{{ __('emploie.generic_skills_title') }}</h3>
                    <ul>
                        @foreach (__('emploie.generic_skills') as $skill)
                            <li>{{ $skill }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3 class="text-uppercase text-center">{{ __('emploie.specific_skills_title') }}</h3>
                    <ul>
                        @foreach (__('emploie.specific_skills') as $skill)
                            <li>{{ $skill }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="team-details__top-content">
                        <div class="title">
                            <h2 class="text-uppercase text-center">{{ __('emploie.internship_title') }}</h2>
                        </div>
                        <div class="text-box">
                            <p class="text1">{{ __('emploie.internship_description') }}</p>
                            <br>                     
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="empty_space" style="height: 87px;">
            <span class="empty_space_inner"></span>
        </div>
    </div>
    {{-- ajouter partenaire --}}
</main>
@endsection