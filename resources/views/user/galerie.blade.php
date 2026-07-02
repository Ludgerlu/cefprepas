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

    .portfolio-section {
        padding: 60px 15px;
        background: #f8f9fa;
    }
    
    .portfolio-filter {
        margin-bottom: 30px;
        text-align: center;
    }
    
    .portfolio-filter button {
        display: inline-block;
        padding: 8px 20px;
        margin: 0 5px;
        background: #fff;
        border: 1px solid #ddd;
        color: #333;
        border-radius: 30px;
        cursor: pointer;
        transition: all 0.3s;
    }
    
    .portfolio-filter button:hover,
    .portfolio-filter button.active {
        background: #007bff;
        color: #fff;
        border-color: #007bff;
    }
    
    
    .portfolio-item {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    
    .portfolio-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    
    .portfolio-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }
    
    .portfolio-item:hover .portfolio-img {
        transform: scale(1.05);
    }
    
    .portfolio-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(168, 255, 110, 0.61);
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
        font-size: 40px;
    }
    
    /* Magnific Popup adjustments */
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
    <div class="entry-header clearfix" style="background: linear-gradient(135deg, #ecf0f1, #b9dda3); background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="entry-title-left">
                <div class="entry-title text-center text-uppercase text-dark fs-5">
                    <h1>Galerie</h1>
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
                        <span property="name" class="post post-page current-item text-uppercase">Galerie</span><meta property="url" content="https://www.CEFPREPAS.com/"><meta property="position" content="2">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="empty_space" style="height: 87px;">
            <span class="empty_space_inner"></span>
        </div>
        <section class="portfolio-section">
            <div>
                <div class="portfolio-items rows">
                    @foreach($photos as $photo)
                        <div class="portfolio-item selfie col-md-2 mb-3 me-3">
                            <a href="{{ asset($photo->image_url) }}" class="image-link" title="{{ $photo->{'name_'.app()->getLocale()} }}">
                                <img src="{{ asset($photo->image_url) }}" alt={{ $photo->{'name_'.app()->getLocale()} }}  class="portfolio-img">
                                <div class="portfolio-overlay">
                                    <i class="bi bi-search"></i>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</main>

@endsection

@section('stript')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Isotope for filtering -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
<!-- Magnific Popup for lightbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>
$(document).ready(function() {
    // Initialize Isotope
    var $grid = $('.portfolio-items').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    
    // Filter items on button click
    $('.portfolio-filter button').on('click', function() {
        $('.portfolio-filter button').removeClass('active');
        $(this).addClass('active');
        
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });
    
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