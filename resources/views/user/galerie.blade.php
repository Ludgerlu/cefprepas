@extends('layouts.user')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<style>
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

    .portfolio-section {
        padding: 60px 0;
        background: #f8faf7;
    }

    /* ── Masonry grid with irregular heights ── */
    .portfolio-items {
        column-count: 4;
        column-gap: 20px;
        margin: 0;
    }

    .portfolio-item {
        break-inside: avoid;
        margin-bottom: 20px;
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.06);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: #fff;
        border: 1px solid #f0f0f0;
    }
    .portfolio-item:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 40px rgba(124, 179, 66, 0.10);
        border-color: #7cb342;
    }

    .portfolio-item a {
        display: block;
        text-decoration: none;
    }

    .portfolio-img {
        display: block;
        width: 100%;
        height: auto;
        transition: transform 0.5s ease;
    }
    .portfolio-item:hover .portfolio-img {
        transform: scale(1.02);
    }

    .portfolio-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(124, 179, 66, 0.75);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .portfolio-item:hover .portfolio-overlay {
        opacity: 1;
    }
    .portfolio-overlay i {
        color: #fff;
        font-size: 2.5rem;
        transform: scale(0.8);
        transition: transform 0.3s ease;
    }
    .portfolio-item:hover .portfolio-overlay i {
        transform: scale(1);
    }

    /* ── Responsive columns ── */
    @media (max-width: 1200px) {
        .portfolio-items { column-count: 3; }
    }
    @media (max-width: 768px) {
        .portfolio-items { column-count: 2; }
    }
    @media (max-width: 480px) {
        .portfolio-items { column-count: 1; }
    }

    /* ── Magnific Popup tweaks ── */
    .mfp-image-holder .mfp-close,
    .mfp-iframe-holder .mfp-close {
        color: #fff;
        right: 0;
        text-align: center;
        padding-right: 0;
        width: 100%;
    }
    .mfp-title {
        text-align: center;
        padding: 10px;
        color: #fff;
        background: rgba(0,0,0,0.7);
    }
</style>
@endsection

@section('main')
<main class="content">
    <div class="entry-header clearfix" style="background: linear-gradient(135deg, #ecf0f1, #b9dda3);">
        <div class="container">
            <div class="entry-title text-center text-uppercase text-dark fs-5">
                <h1>{{ __('photo.gallery') ?? 'Galerie' }}</h1>
            </div>
        </div>
    </div>

    <div class="breadcrumbs_unit">
        <div class="container">
            <div class="navxtBreads">
                <span><a href="{{ route('index') }}">{{ __('messages.home') }}</a></span>
                &gt;
                <span class="current-item text-uppercase">{{ __('photo.gallery') ?? 'Galerie' }}</span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="empty_space" style="height: 40px;"></div>
        <section class="portfolio-section">
            <div class="portfolio-items">
                @foreach($photos as $photo)
                    <div class="portfolio-item">
                        <a href="{{ asset($photo->image_url) }}" class="image-link" title="{{ $photo->{'name_'.app()->getLocale()} }}">
                            <img src="{{ asset($photo->image_url) }}" alt="{{ $photo->{'name_'.app()->getLocale()} }}" class="portfolio-img" loading="lazy">
                            <div class="portfolio-overlay">
                                <i class="bi bi-search"></i>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
        <div class="empty_space" style="height: 40px;"></div>
    </div>
</main>
@endsection

@section('stript')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script>
$(document).ready(function() {
    // Initialize Magnific Popup
    $('.image-link').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        },
        image: {
            titleSrc: 'title'
        },
        zoom: {
            enabled: true,
            duration: 300,
            easing: 'ease-in-out'
        }
    });
});
</script>
@endsection