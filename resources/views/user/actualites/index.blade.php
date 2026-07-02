@extends('layouts.user') 
@section('style')
<style>

    
    h1, h2 {
        display: block;
        font-family: 'Oswald', sans-serif;
        font-style: normal;
        font-weight: 300;
        line-height: 1.4em;
        color: var(--headings-color);
    }

    h1 {
        font-size: calc(24px + 2vw);
        margin: 1.2em 0;
    }

    h2 {
        font-size: calc(22px + .8vw);
    }

    h1 a,
    h2 a {
        font-weight: 300;
        text-decoration: none;
        color: var(--headings-color);
        background-color: transparent;
        outline: none;
    }
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




    
    .bg-img {
        background-size: cover; 
        background-position: center center; 
        opacity:1; 
        min-height:300px;
    }

    .shadow {
        box-shadow: 0 10px 40px 0 rgba(62, 57, 107, 0.07), 0 2px 9px 0 rgba(62, 57, 107, 0.06);
    }
</style>
@endsection 
@section('main')
<main class="content">
    <div class="entry-header clearfix" style="background: linear-gradient(135deg, #ecf0f1, #b9dda3); background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="entry-title-left">
                <div class="entry-title text-center text-uppercase text-dark fs-5">
                    <h1>{{ __('messages.actualites') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="breadcrumbs_unit">
            <div class="container">
                <div class="navxtBreads">
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="{{ __('actualites.go_to_cefprepas') }}" href="{{ route('index') }}" class="home"><span property="name">{{ __('messages.home') }}</span></a><meta property="position" content="1">
                    </span>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name" class="post post-page current-item text-uppercase">{{ __('messages.actualites') }}</span><meta property="url" content="https://www.CEFPREPAS.com/"><meta property="position" content="2">
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
            <h1 class="text-uppercase fw-bolder" style="text-align: center;">{{ __('messages.actualites') }}</h1>

            <div>
                @foreach($events as $event)
                    <div class="row my-5 border bg-light shadow">
                        <div class="col-md-6 {{ $loop->odd ? '' : 'order-2' }} bg-img" style="background-image:url({{ $event->image_url }})">
                        </div>
                        <div class="col-md-6 align-self-center p-4">
                            <h3 class="text-success">{{ $event->{'title_'.app()->getLocale()} }}</h3>
                            <p>{{ $event->{'description_'.app()->getLocale()} }}</p>
                            <a href="{{ route('actualites.show',$event->id) }}" class="btn btn-outline-success btn-sm">{{ __('actualites.learn_more') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</main>
@endsection
