@extends('layouts.user')

@section('style')
<style>
    /* ── Styles article actualité (green theme) ── */

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
        font-family: 'Oswald', sans-serif;
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

    .article-wrapper {
        background: #fff;
        border-radius: 20px;
        padding: 2.5rem;
        box-shadow: 0 8px 40px rgba(0,0,0,0.04);
        margin: 3rem 0;
        border: 1px solid #f0f0f0;
    }

    .article-header {
        margin-bottom: 2rem;
        border-bottom: 2px solid #f0f0f0;
        padding-bottom: 1.5rem;
    }
    .article-header .article-meta {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        color: #888;
        font-size: 0.95rem;
        margin-bottom: 0.5rem;
    }
    .article-header .article-meta i {
        margin-right: 4px;
        color: #7cb342;
    }
    .article-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2d3e2d;
        margin: 0.5rem 0;
        line-height: 1.2;
        font-family: 'Oswald', sans-serif;
    }
    .article-header .badge-category {
        background: #7cb342;
        color: #fff;
        font-weight: 500;
        padding: 0.3rem 1.2rem;
        border-radius: 40px;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .article-image {
        border-radius: 16px;
        overflow: hidden;
        margin-bottom: 2rem;
        box-shadow: 0 8px 24px rgba(0,0,0,0.06);
    }
    .article-image img {
        width: 100%;
        height: auto;
        max-height: 500px;
        object-fit: cover;
        display: block;
        transition: transform 0.4s ease;
    }
    .article-image img:hover {
        transform: scale(1.02);
    }

    .article-body {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #333;
        font-family: 'Roboto', sans-serif;
    }
    .article-body p {
        margin-bottom: 1.5rem;
    }
    .article-body .lead-cta {
        font-size: 1.5rem;
        font-weight: 600;
        color: #2d3e2d;
        margin-top: 2rem;
        padding-top: 1.5rem;
        border-top: 2px solid #f0f0f0;
        font-family: 'Oswald', sans-serif;
    }
    .article-body .contact-box {
        background: #f8faf7;
        padding: 1.5rem 2rem;
        border-radius: 16px;
        border-left: 4px solid #7cb342;
        margin: 2rem 0;
    }
    .article-body .contact-box p {
        margin-bottom: 0.5rem;
    }
    .article-body .contact-box .label {
        font-weight: 600;
        color: #2d3e2d;
    }
    .article-body .contact-box .value {
        color: #7cb342;
        font-weight: 500;
    }

    @media (max-width: 768px) {
        .article-wrapper {
            padding: 1.5rem;
        }
        .article-header h1 {
            font-size: 2rem;
        }
        .article-body .lead-cta {
            font-size: 1.2rem;
        }
        .article-body .contact-box {
            padding: 1rem;
        }
    }
</style>
@endsection

@section('main')
<main class="content">
    <!-- Header -->
    <div class="entry-header clearfix">
        <div class="container">
            <div class="entry-title-left">
                <div class="entry-title text-center text-uppercase text-dark fs-5">
                    <h1>{{ __('actualites.news') }}</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumbs -->
    <div class="breadcrumbs_unit">
        <div class="container">
            <div class="navxtBreads">
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="{{ __('actualites.go_to_cefprepas') }}" href="{{ route('index') }}" class="home"><span property="name">{{ __('actualites.home') }}</span></a>
                </span>
                &gt;
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" href="{{ route('actualites.index') }}" class="home"><span property="name">{{ __('actualites.news') }}</span></a>
                </span>
                &gt;
                <span property="itemListElement" typeof="ListItem">
                    <span property="name" class="post post-page current-item text-uppercase">{{ $event->{'title_'.app()->getLocale()} }}</span>
                </span>
            </div>
        </div>
    </div>

    <!-- Article -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <article class="article-wrapper">
                    <!-- En-tête -->
                    <header class="article-header">
                        <div class="article-meta">
                            <span><i class="far fa-calendar-alt"></i> {{ $event->created_at->format('F j, Y') }}</span>
                            <span><i class="far fa-eye"></i> {{ $event->views ?? 0 }}</span>
                        </div>
                        <h1>{{ $event->{'title_'.app()->getLocale()} }}</h1>
                        <span class="badge-category">{{ __('messages.actualites') }}</span>
                    </header>

                    <!-- Image -->
                    @if($event->image_url)
                        <div class="article-image">
                            <img src="{{ asset($event->image_url) }}" alt="{{ $event->{'title_'.app()->getLocale()} }}" loading="lazy">
                        </div>
                    @endif

                    <!-- Corps -->
                    <div class="article-body">
                        {!! nl2br(e($event->{'description_'.app()->getLocale()})) !!}

                        <div class="lead-cta">{{ __('actualites.questions') }}</div>
                        <div class="contact-box">
                            <p><span class="label">{{ __('actualites.contact_admissions') }}</span></p>
                            <p><span class="label">{{ __('actualites.by_email') }} :</span> <span class="value">cefprepas@outlook.com</span></p>
                            <p><span class="label">{{ __('actualites.phone') }} :</span> <span class="value">+237 695 566 666 / +237 677 444 071</span></p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>
@endsection