
@extends('layouts.user')

@section('style')
<style>
    /* ── Styles pour les actualités (index) ── */

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

    /* ── Article horizontal ── */
    .news-row {
        display: flex;
        flex-wrap: wrap;
        background: #fff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0,0,0,0.06);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-bottom: 2rem;
        border: 1px solid #f0f0f0;
    }
    .news-row:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 40px rgba(124, 179, 66, 0.10);
        border-color: #7cb342;
    }

    .news-row__image {
        flex: 0 0 40%;
        min-height: 250px;
        background-size: cover;
        background-position: center;
        transition: transform 0.4s ease;
    }
    .news-row:hover .news-row__image {
        transform: scale(1.02);
    }

    .news-row__body {
        flex: 1;
        padding: 2rem 2rem 2rem 2rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .news-row__body .news-meta {
        font-size: 0.85rem;
        color: #888;
        margin-bottom: 0.75rem;
    }
    .news-row__body .news-meta i {
        margin-right: 4px;
        color: #7cb342;
    }
    .news-row__body h3 {
        font-size: 1.4rem;
        font-weight: 600;
        color: #2d3e2d;
        margin: 0 0 0.5rem 0;
        line-height: 1.3;
    }
    .news-row__body h3 a {
        color: #2d3e2d;
        text-decoration: none;
        transition: color 0.2s;
    }
    .news-row__body h3 a:hover {
        color: #7cb342;
    }
    .news-row__body p {
        color: #555;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 1rem;
        flex: 1;
    }
    .news-row__body .btn-news {
        align-self: flex-start;
        background: #7cb342;
        color: #fff;
        border: none;
        padding: 0.4rem 1.8rem;
        border-radius: 40px;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s;
        text-decoration: none;
    }
    .news-row__body .btn-news:hover {
        background: #558b2f;
        transform: translateX(4px);
    }

    /* Alternance : inverser l’ordre sur les lignes paires */
    .news-row:nth-child(even) .news-row__image {
        order: 2;
    }
    .news-row:nth-child(even) .news-row__body {
        order: 1;
    }

    @media (max-width: 768px) {
        .news-row__image {
            flex: 0 0 100%;
            min-height: 200px;
        }
        .news-row:nth-child(even) .news-row__image {
            order: 1;
        }
        .news-row:nth-child(even) .news-row__body {
            order: 2;
        }
        .news-row__body {
            padding: 1.5rem;
        }
        .news-row__body h3 {
            font-size: 1.2rem;
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
                    <h1>{{ __('messages.actualites') }}</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumbs -->
    <div class="breadcrumbs_unit">
        <div class="container">
            <div class="navxtBreads">
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="{{ __('actualites.go_to_cefprepas') }}" href="{{ route('index') }}" class="home"><span property="name">{{ __('messages.home') }}</span></a>
                    <meta property="position" content="1">
                </span>
                &gt;
                <span property="itemListElement" typeof="ListItem">
                    <span property="name" class="post post-page current-item text-uppercase">{{ __('messages.actualites') }}</span>
                    <meta property="url" content="https://www.CEFPREPAS.com/"><meta property="position" content="2">
                </span>
            </div>
        </div>
    </div>

    <!-- Liste des articles -->
    <div class="container">
        <div class="empty_space" style="height: 40px;"></div>

        @foreach($events as $event)
            <div class="news-row">
                <div class="news-row__image" style="background-image: url('{{ asset($event->image_url) }}');"></div>
                <div class="news-row__body">
                    <div class="news-meta">
                        <span><i class="far fa-calendar-alt"></i> {{ $event->created_at->format('F j, Y') }}</span>
                        <span class="ms-3"><i class="far fa-eye"></i> {{ $event->views ?? 0 }}</span>
                    </div>
                    <h3><a href="{{ route('actualites.show', $event->id) }}">{{ $event->{'title_'.app()->getLocale()} }}</a></h3>
                    <p>{{ Str::limit($event->{'description_'.app()->getLocale()}, 150) }}</p>
                    <a href="{{ route('actualites.show', $event->id) }}" class="btn-news">{{ __('actualites.learn_more') }}</a>
                </div>
            </div>
        @endforeach

         <!-- Pagination -->
        @if($events->hasPages())
            <div class="pagination-section">
                <div class="pagination-info">
                    Affichage de {{ $events->firstItem() }} à {{ $events->lastItem() }} sur {{ $events->total() }} contenus
                </div>
                <div class="pagination-wrapper">
                    {{ $events->appends(request()->query())->links('pagination::bootstrap-5') }}
                </div>
            </div>
        @endif
        <div class="empty_space" style="height: 87px;">
            <span class="empty_space_inner"></span>
        </div>
    </div>
</main>
@endsection