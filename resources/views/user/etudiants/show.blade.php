@extends('layouts.user')

@section('style')
<style>
    /* ── Page Apprenant (show) ── */
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

    .blog-post {
        background: #fff;
        border-radius: 20px;
        padding: 2.5rem;
        box-shadow: 0 8px 40px rgba(0,0,0,0.04);
        margin: 3rem 0;
    }
    .blog-post .post-meta {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1.5rem;
        color: #888;
        font-size: 0.95rem;
        margin-bottom: 1.5rem;
    }
    .blog-post .post-meta i {
        margin-right: 4px;
        color: #7cb342;
    }
    .blog-post .featured-image {
        border-radius: 16px;
        overflow: hidden;
        margin-bottom: 2rem;
        box-shadow: 0 8px 24px rgba(0,0,0,0.06);
    }
    .blog-post .featured-image img {
        width: 100%;
        height: auto;
        max-height: 500px;
        object-fit: cover;
        display: block;
        transition: transform 0.4s ease;
    }
    .blog-post .featured-image img:hover {
        transform: scale(1.02);
    }

    .blog-content {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #333;
    }
    .blog-content p {
        margin-bottom: 1.5rem;
    }
    .blog-content .lead {
        font-size: 1.5rem;
        font-weight: 600;
        color: #2d3e2d;
        margin-top: 2rem;
    }
    .blog-content .contact-info {
        background: #f8faf7;
        padding: 1.5rem 2rem;
        border-radius: 16px;
        border-left: 4px solid #7cb342;
        margin: 2rem 0;
    }
    .blog-content .contact-info p {
        margin-bottom: 0.5rem;
    }
    .blog-content .contact-info .label {
        font-weight: 600;
        color: #2d3e2d;
    }
    .blog-content .contact-info .value {
        color: #7cb342;
        font-weight: 500;
    }

    @media (max-width: 768px) {
        .blog-post {
            padding: 1.5rem;
        }
        .blog-content .lead {
            font-size: 1.2rem;
        }
        .blog-content .contact-info {
            padding: 1rem;
        }
    }
</style>
@endsection

@section('main')
<main class="content">
    <!-- Header -->
    <div class="entry-header">
        <div class="container">
            <h1>{{ __('messages.student_page_title') }}</h1>
        </div>
    </div>

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
                    <a property="item" typeof="WebPage" href="{{ route('apprenants.index') }}" class="home"><span property="name">{{ __('messages.student_page_title') }}</span></a>
                    <meta property="position" content="2">
                </span>
                &gt;
                <span property="itemListElement" typeof="ListItem">
                    <span property="name" class="post post-page current-item">{{ $event->{'title_'.app()->getLocale()} }}</span>
                    <meta property="position" content="3">
                </span>
            </div>
        </div>
    </div>

    <!-- Article -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <article class="blog-post">
                    <!-- En-tête -->
                    <div class="text-center mb-4">
                        <span class="badge bg-success text-uppercase px-3 py-2" style="font-size:0.8rem;">{{ __('messages.student_page_title') }}</span>
                        <h1 class="display-5 fw-bold mt-3 mb-2">{{ $event->{'title_'.app()->getLocale()} }}</h1>
                        <div class="post-meta">
                            <span><i class="far fa-calendar-alt"></i> {{ $event->created_at->format('F j, Y') }}</span>
                            <span><i class="far fa-eye"></i> {{ $event->views ?? 0 }}</span>
                        </div>
                    </div>

                    <!-- Image -->
                    @if($event->image_url)
                        <div class="featured-image">
                            <img src="{{ asset($event->image_url) }}" alt="{{ $event->{'title_'.app()->getLocale()} }}" loading="lazy">
                        </div>
                    @endif

                    <!-- Contenu -->
                    <div class="blog-content">
                        {!! nl2br(e($event->{'description_'.app()->getLocale()})) !!}

                        <div class="lead">{{ __('messages.questions') }}</div>
                        <div class="contact-info">
                            <p><span class="label">{{ __('messages.contact_admissions') }}</span></p>
                            <p><span class="label">{{ __('messages.by_email') }} :</span> <span class="value">cefprepas@outlook.com</span></p>
                            <p><span class="label">{{ __('messages.phone') }} :</span> <span class="value">+237 695 566 666 / +237 677 444 071</span></p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>
@endsection