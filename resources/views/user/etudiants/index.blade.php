@extends('layouts.user')

@section('style')
<style>
    /* ── Page Apprenants (index) ── */
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

    /* Grille des cartes */
    .student-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 2rem;
        margin: 3rem 0;
    }

    .student-card {
        background: #fff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0,0,0,0.06);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    .student-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 48px rgba(0,0,0,0.10);
    }

    .student-card__image {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 */
        overflow: hidden;
        background: #f1f3f1;
    }
    .student-card__image img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .student-card:hover .student-card__image img {
        transform: scale(1.04);
    }

    .student-card__body {
        padding: 1.5rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    .student-card__body .post__time {
        font-size: 0.85rem;
        color: #888;
        margin-bottom: 0.5rem;
        display: block;
    }
    .student-card__body h2 {
        font-size: 1.2rem;
        font-weight: 600;
        margin: 0 0 0.75rem 0;
        line-height: 1.4;
    }
    .student-card__body h2 a {
        color: #2d3e2d;
        text-decoration: none;
        transition: color 0.2s;
    }
    .student-card__body h2 a:hover {
        color: #7cb342;
    }

    .student-card__footer {
        padding: 1rem 1.5rem 1.5rem;
        border-top: 1px solid #f0f0f0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.9rem;
    }
    .student-card__footer a {
        color: #7cb342;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.2s;
    }
    .student-card__footer a:hover {
        color: #558b2f;
    }
    .student-card__footer .post__comments {
        color: #888;
        display: flex;
        align-items: center;
        gap: 4px;
    }
    .student-card__footer .post__comments i {
        font-size: 1rem;
    }

    @media (max-width: 576px) {
        .student-grid {
            grid-template-columns: 1fr;
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
                    <span property="name" class="post post-page current-item">{{ __('messages.student_page_title') }}</span>
                    <meta property="position" content="2">
                </span>
            </div>
        </div>
    </div>

    <!-- Grille des cartes -->
    <div class="container">
        <div class="student-grid">
            @foreach($events as $event)
                <div class="student-card">
                    <div class="student-card__image">
                        <a href="{{ route('apprenants.show', $event->id) }}">
                            <img src="{{ asset($event->image_url) }}" alt="{{ $event->{'title_'.app()->getLocale()} }}" loading="lazy">
                        </a>
                    </div>
                    <div class="student-card__body">
                        <time datetime="{{ $event->created_at->format('Y-m-d') }}" class="post__time">
                            <i class="far fa-calendar-alt me-1"></i> {{ $event->created_at->format('F j, Y') }}
                        </time>
                        <h2><a href="{{ route('apprenants.show', $event->id) }}">{{ $event->{'title_'.app()->getLocale()} }}</a></h2>
                    </div>
                    <div class="student-card__footer">
                        <a href="#">{{ __('messages.student_category') }}</a>
                        <span class="post__comments"><i class="far fa-comment"></i> 7</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection