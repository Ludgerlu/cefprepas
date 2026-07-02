@extends('layouts.user') 
@section('style')
<style>
    /* Your existing CSS remains unchanged */
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

    /* Rest of your CSS remains exactly the same */
    /* ... */
</style>
@endsection 

@section('main')
<main class="content">
    <div class="entry-header clearfix" style="background: linear-gradient(135deg, #ecf0f1, #b9dda3);; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="entry-title-left">
                <div class="entry-title text-center text-uppercase text-dark fs-5">
                    <h1>{{ __('atout.atout_title') }}</h1>
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
                        <span property="name" class="post post-page current-item text-uppercase">{{ __('atout.atout_title') }}</span><meta property="url" content="https://www.CEFPREPAS.com/"><meta property="position" content="2">
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
            <h1 class="text-uppercase fw-bolder" style="text-align: center;">{{ __('atout.atout_title') }}</h1>
            <p>{{ __('atout.atout_description') }}</p>
            <div class="empty_space" style="height: 87px;">
                <span class="empty_space_inner"></span>
            </div>
            <div class="row">
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <img src="{{ asset('assets/img/farm.jpg') }}" alt="#" style="width: 100%;box-shadow: 0px 20px 60px 10px rgba(0, 0, 0, 0.1);border-radius: 20px;">
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="m-auto" style="justify-items: center;">
                            <h4 class="text-uppercase fw-bold">{{ __('atout.our_mission') }}</h4>
                            <p>{{ __('atout.mission_text') }}</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-7 order-lg-1 order-2 mb-3 text-center">
                        <h2>{{ __('atout.our_values') }}</h2>
                        <p class="text-justify mb-4">{{ __('atout.values_text') }}</p>
                    </div>
                    <div class="col-md-5 order-lg-2 order-1 mb-3">
                        <img src="{{ asset('assets/img/nosValuers.jpeg')}}" alt="#" style="height: 390px;width: 100%;box-shadow: 0px 20px 60px 10px rgba(0, 0, 0, 0.1);border-radius: 20px;">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-5 mb-3">
                        <img src="{{ asset('assets/img/nosVision2.jpeg')}}" alt="#" style="height: 390px;width: 100%;box-shadow: 0px 20px 60px 10px rgba(0, 0, 0, 0.1);border-radius: 20px;">
                    </div>
                    <div class="col-md-7 mb-3 text-center">
                        <h4 class="text-uppercase fw-bold">{{ __('atout.our_vision') }}</h4>
                        <p class="text-justify mb-4">{{ __('atout.vision_text') }}</p>
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