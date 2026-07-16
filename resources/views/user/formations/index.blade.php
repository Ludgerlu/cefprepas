@extends('layouts.user')

@section('style')
<style>
    /* ── Header et breadcrumbs (inchangés) ── */
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
    .breadcrumbs_unit .navxtBreads > span:first-child > a {
        font-weight: bold !important;
    }
    .breadcrumbs_unit .navxtBreads > span a {
        color: #5F625E;
        text-transform: initial !important;
        font-weight: 500;
        font-size: 11px;
    }
    .breadcrumbs_unit .navxtBreads > span a:hover {
        color: #7cb342;
    }

    /* ── Grille des formations ── */
    .formation-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 2rem;
        margin: 2rem 0;
    }

    .formation-card {
        background: #fff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0,0,0,0.06);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #f0f0f0;
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    .formation-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 48px rgba(124, 179, 66, 0.12);
        border-color: #7cb342;
    }

    .formation-card__image {
        position: relative;
        padding-bottom: 56.25%;
        overflow: hidden;
        background: #f1f3f1;
    }
    .formation-card__image img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .formation-card:hover .formation-card__image img {
        transform: scale(1.04);
    }

    .formation-card__body {
        padding: 1.5rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    .formation-card__body h3 {
        font-size: 1.25rem;
        font-weight: 600;
        color: #2d3e2d;
        margin: 0 0 0.5rem 0;
        line-height: 1.4;
    }
    .formation-card__body h3 a {
        color: #2d3e2d;
        text-decoration: none;
        transition: color 0.2s;
    }
    .formation-card__body h3 a:hover {
        color: #7cb342;
    }
    .formation-card__body p {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
        flex: 1;
        margin-bottom: 1rem;
    }
    .formation-card__meta {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }
    .formation-card__meta .badge {
        background: #f1f3f1;
        color: #2d3e2d;
        font-weight: 500;
        padding: 0.3rem 0.8rem;
        border-radius: 40px;
        font-size: 0.85rem;
    }
    .formation-card__meta .badge i {
        margin-right: 4px;
        color: #7cb342;
    }
    .formation-card__footer {
        margin-top: auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-top: 1px solid #f0f0f0;
        padding-top: 1rem;
    }
    .formation-card__footer .btn-formation {
        background: #7cb342;
        color: #fff;
        border: none;
        padding: 0.4rem 1.8rem;
        border-radius: 40px;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    .formation-card__footer .btn-formation:hover {
        background: #558b2f;
        transform: translateX(4px);
    }
    .formation-card__footer .btn-formation i {
        font-size: 0.8rem;
    }

    @media (max-width: 576px) {
        .formation-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection

@section('main')
<main class="content">
    <!-- Header -->
    <div class="entry-header clearfix" style="background: linear-gradient(135deg, #ecf0f1, #b9dda3); background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="entry-title-left">
                <div class="entry-title text-center text-uppercase text-dark fs-5">
                    <h1>{{ __('formation.page_title') }}</h1>
                </div>
            </div>
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
                    <span property="name" class="post post-page current-item text-uppercase">{{ __('formation.page_title') }}</span>
                    <meta property="url" content="https://www.CEFPREPAS.com/"><meta property="position" content="2">
                </span>
            </div>
        </div>
    </div>

    <!-- Grille -->
    <div class="container">
        <div class="empty_space" style="height: 40px;"></div>
        <h1 class="text-uppercase fw-bolder mb-4 text-center">{{ __('formation.offered_courses') }}</h1>
        <div class="formation-grid">
            @foreach($formations as $formation)
                <div class="formation-card">
                    <div class="formation-card__image">
                        <a href="{{ route('formations.show', $formation->id) }}">
                            <img src="{{ asset($formation->image_url) }}" alt="{{ $formation->{'title_'.app()->getLocale()} }}" loading="lazy">
                        </a>
                    </div>
                    <div class="formation-card__body">
                        <h3><a href="{{ route('formations.show', $formation->id) }}">{{ $formation->{'title_'.app()->getLocale()} }}</a></h3>
                        <p>{{ Str::limit($formation->{'description_'.app()->getLocale()}, 90) }}</p>
                        <div class="formation-card__meta">
                            <span class="badge"><i class="fas fa-clock"></i> {{ $formation->duree }} {{ __('formation.months') }}</span>
                            <span class="badge"><i class="fas fa-user-graduate"></i> CQP/DQP</span>
                        </div>
                        <div class="formation-card__footer">
                            <a href="{{ route('formations.show', $formation->id) }}" class="btn-formation">
                                {{ __('formation.learn_more') }} <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="empty_space" style="height: 40px;"></div>
    </div>
</main>
@endsection