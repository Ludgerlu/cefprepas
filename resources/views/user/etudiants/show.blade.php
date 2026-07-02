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




    
    .blog-header {
        border-bottom: 1px solid #dee2e6;
    }
    .category-badge {
        background-color: #e9ecef;
        color: #495057;
    }
    .blog-image {
        height: 400px;
        object-fit: cover;
        margin-bottom: 2rem;
        border-radius: 4px;
    }
    @media (max-width: 768px) {
        .blog-image {
            height: 250px;
        }
    }


    .interactive-image {
        transition: transform 0.3s;
        cursor: zoom-in;
    }
    .interactive-image:hover {
        transform: scale(1.02);
    }
</style>
@endsection 
@section('main')
<main class="content">
    <div class="entry-header clearfix" style="background: linear-gradient(135deg, #ecf0f1, #b9dda3); background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="entry-title-left">
                <div class="entry-title text-center text-uppercase text-dark fs-5">
                    <h1>{{ __('messages.student_page_title') }}</h1>
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
                        <a property="item" typeof="WebPage" href="{{ route('apprenants.index') }}" class="home"><span property="name">{{ __('messages.student_page_title') }}</span></a><meta property="position" content="1">
                    </span>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name" class="post post-page current-item text-uppercase">{{ $event->{'title_'.app()->getLocale()} }}</span><meta property="url" content="https://www.CEFPREPAS.com/"><meta property="position" content="2">
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
            <div class="py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <article class="blog-post">
                            <div class="text-center mb-5">
                                <span class="badge bg-primary mb-3 text-uppercase">{{ __('messages.student_page_title') }}</span>
                                <h1 class="display-4 fw-bold mb-3">{{ $event->{'title_'.app()->getLocale()} }}</h1>
                                <div class="d-flex justify-content-center align-items-center text-muted">
                                    <span class="me-3">{{ $event->created_at->format('F j, Y') }}</span>
                                </div>
                            </div>
                            
                            <div class="mb-5">
                                <img src="{{ asset($event->image_url) }}" 
                                    style="height: 491px;width: 736px;"
                                     class="img-fluid rounded-3 shadow interactive-image" 
                                     alt="{{ $event->{'title_'.app()->getLocale()} }}">
                            </div>
        
                            <div class="blog-content">
                                <p>{!! nl2br(e($event->{'description_'.app()->getLocale()})) !!}</p>
                                
                                <p class="lead fs-2 fw-bold">
                                    {{ __('messages.questions') }}
                                </p>
                                <p>{{ __('messages.contact_admissions') }}</p>
                                <p>{{ __('messages.by_email') }}: <span class="text-cef-green">cefprepas@outlook.com</span></p>
                                <p>{{ __('messages.phone') }}: +237 695 566 666 / +237 677 444 071</p>
                            </div>
                        </article>
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




