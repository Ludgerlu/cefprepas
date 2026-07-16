@extends('layouts.user')

@section('style')
<style>
    /* ── En-tête et fil d'Ariane ── */
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

    /* ── Contenu principal ── */
    .about-content {
        padding: 2rem 0 3rem;
    }
    .about-content .about-text {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #333;
    }
    .about-content .about-text ul {
        list-style: none;
        padding: 0;
    }
    .about-content .about-text ul li {
        padding: 0.5rem 0;
        border-bottom: 1px solid #f0f0f0;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .about-content .about-text ul li:last-child {
        border-bottom: none;
    }
    .about-content .about-text ul li::before {
        content: "✓";
        color: #7cb342;
        font-weight: 700;
        font-size: 1.1rem;
    }
    .about-content .about-image {
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        transition: transform 0.3s ease;
    }
    .about-content .about-image:hover {
        transform: scale(1.01);
    }
    .about-content .about-image img {
        width: 100%;
        height: 100%;
        max-height: 400px;
        object-fit: cover;
        display: block;
    }

    .know-card {
        background: #f8faf7;
        border-radius: 16px;
        padding: 2rem;
        border: 1px solid #eef3ee;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }
    .know-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(124, 179, 66, 0.08);
        border-color: #7cb342;
    }
    .know-card h4 {
        font-weight: 700;
        color: #2d3e2d;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .know-card h4 i {
        color: #7cb342;
        font-size: 1.5rem;
    }
    .know-card ul {
        list-style: none;
        padding: 0;
    }
    .know-card ul li {
        padding: 0.6rem 0;
        border-bottom: 1px solid #e9ecef;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .know-card ul li:last-child {
        border-bottom: none;
    }
    .know-card ul li::before {
        content: "✦";
        color: #7cb342;
        font-weight: 700;
    }

    /* ── Témoignages (carousel) ── */
    .testimonials-section {
        padding: 60px 0;
        background: #fff;
    }
    .testimonial-card {
        background: #f8faf7;
        border-radius: 20px;
        padding: 2rem 1.5rem;
        box-shadow: 0 8px 30px rgba(0,0,0,0.04);
        transition: transform 0.3s ease;
        margin: 0.5rem;
        text-align: center;
    }
    .testimonial-card:hover {
        transform: translateY(-4px);
    }
    .testimonial-avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid #7cb342;
        margin: 0 auto 1rem;
    }
    .testimonial-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .testimonial-card .student-name {
        font-size: 1.1rem;
        font-weight: 600;
        color: #2d3e2d;
        margin-bottom: 0.25rem;
    }
    .testimonial-card .student-program {
        font-size: 0.9rem;
        color: #7cb342;
        font-weight: 500;
    }
    .testimonial-card .testimonial-text {
        font-size: 0.95rem;
        line-height: 1.7;
        color: #555;
        margin-top: 1rem;
        position: relative;
        padding: 0 1rem;
    }
    .testimonial-card .testimonial-text::before,
    .testimonial-card .testimonial-text::after {
        content: '"';
        font-size: 2.5rem;
        color: #b9dda3;
        position: absolute;
        line-height: 1;
    }
    .testimonial-card .testimonial-text::before {
        left: 0;
        top: -0.5rem;
    }
    .testimonial-card .testimonial-text::after {
        right: 0;
        bottom: -1rem;
    }

    /* ── Partenaires ── */
    .partners-section {
        padding: 60px 0;
        background: #f8faf7;
    }
    .partner-logo {
        max-height: 100px;
        max-width: 180px;
        object-fit: contain;
        filter: grayscale(0.2);
        transition: all 0.4s ease;
    }
    .partner-logo:hover {
        filter: grayscale(0);
        transform: scale(1.04);
    }

    /* ── Responsive ── */
    @media (max-width: 768px) {
        .about-content .about-image img {
            max-height: 250px;
        }
        .know-card {
            padding: 1.5rem;
        }
        .testimonial-card {
            padding: 1.5rem 1rem;
        }
    }
</style>
@endsection

@section('main')
<main class="content">
    <!-- Header -->
    <div class="entry-header">
        <div class="container">
            <h1>{{ __('about.title') }}</h1>
        </div>
    </div>

    <!-- Breadcrumbs -->
    <div class="breadcrumbs_unit">
        <div class="container">
            <div class="navxtBreads">
                <span><a href="{{ route('index') }}">{{ __('about.breadcrumb_home') }}</a></span>
                &gt;
                <span class="current-item">{{ __('about.breadcrumb_about') }}</span>
            </div>
        </div>
    </div>

    <!-- Contenu -->
    <div class="container about-content">
        <h2 class="text-center fw-bold mb-5">{{ __('about.page_title') }}</h2>

        <!-- Bloc 1 : Approbation + description + formations -->
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-7">
                <div class="about-text">
                    <p>{{ __('about.approval_text') }}</p>
                    <p>{{ __('about.description_text') }}</p>
                    <ul>
                        @foreach(__('about.trainings') as $training)
                            <li><strong>{{ $training }}</strong></li>
                        @endforeach
                    </ul>
                    <p>{!! __('about.facilities_text') !!}</p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-image">
                    <img src="{{ asset('assets/img/lapin.jpg') }}" alt="{{ __('about.page_title') }}">
                </div>
            </div>
        </div>

        <!-- Bloc 2 : Bon à savoir + image -->
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{ asset('assets/img/bonASavoir.jpeg') }}" alt="{{ __('about.good_to_know') }}">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="know-card">
                    <h4><i class="fas fa-lightbulb"></i> {{ __('about.good_to_know') }}</h4>
                    <ul>
                        @foreach(__('about.know_points') as $point)
                            <li><strong>{{ $point }}</strong></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- ─── TÉMOIGNAGES ─── -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title text-center mb-4">{{ __('index.testimonials_title') ?? 'Témoignages' }}</h2>
            <div class="owl-carousel owl-theme testimonial-carousel">
                @if(isset($data['testimonials']))
                    @foreach($data['testimonials'] as $testimonial)
                        <div class="item">
                            <div class="testimonial-card">
                                <div class="testimonial-avatar mx-auto">
                                    @if($testimonial->image_url)
                                        <img src="{{ asset($testimonial->image_url) }}" alt="{{ $testimonial->name }}">
                                    @else
                                        <div class="d-flex align-items-center justify-content-center bg-success text-white rounded-circle" style="width:80px;height:80px;font-size:2rem;font-weight:600;">
                                            {{ substr($testimonial->name, 0, 1) }}
                                        </div>
                                    @endif
                                </div>
                                <div class="student-name">{{ $testimonial->name }}</div>
                                <div class="student-program">{{ $testimonial->formation->{'title_'.app()->getLocale()} }}</div>
                                <blockquote class="testimonial-text">
                                    {!! strip_tags($testimonial->{'description_'.app()->getLocale()}) !!}
                                </blockquote>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-center text-muted">Aucun témoignage disponible.</p>
                @endif
            </div>
        </div>
    </section>

    <!-- ─── PARTENAIRES ─── -->
    <section class="partners-section">
        <div class="container">
            <h2 class="section-title text-center mb-4">{{ __('index.partners_title') ?? 'Nos partenaires' }}</h2>
            <div class="owl-carousel owl-theme partner-caroussel">
                @if(isset($data['partners']))
                    @foreach($data['partners'] as $partner)
                        <div class="item text-center">
                            <a href="{{ $partner->link }}" target="_blank">
                                <img src="{{ asset('images/partners/'.$partner->logo) }}" alt="{{ $partner->name_en }}" class="partner-logo">
                            </a>
                        </div>
                    @endforeach
                @else
                    <p class="text-center text-muted">Aucun partenaire.</p>
                @endif
            </div>
        </div>
    </section>
</main>
@endsection

@section('stript')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        // Témoignages carousel
        $('.testimonial-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            responsive: {
                0: { items: 1 },
                768: { items: 2 },
                992: { items: 2 }
            }
        });

        // Partenaires carousel
        $('.partner-caroussel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: { items: 2 },
                600: { items: 3 },
                1000: { items: 4 }
            }
        });
    });
</script>
@endsection