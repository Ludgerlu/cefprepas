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
    .job-section {
        padding: 2rem 0 4rem;
    }

    .job-card {
        background: #fff;
        border-radius: 20px;
        padding: 2rem 1.8rem;
        box-shadow: 0 8px 30px rgba(0,0,0,0.04);
        border: 1px solid #f0f0f0;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }
    .job-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 40px rgba(124, 179, 66, 0.08);
        border-color: #7cb342;
    }
    .job-card h3 {
        font-size: 1.3rem;
        font-weight: 700;
        color: #2d3e2d;
        margin-bottom: 1.2rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        border-bottom: 2px solid #b9dda3;
        padding-bottom: 0.75rem;
    }
    .job-card h3 i {
        color: #7cb342;
        font-size: 1.5rem;
    }

    .job-card ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .job-card ul li {
        padding: 0.6rem 0;
        border-bottom: 1px solid #f0f0f0;
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        font-size: 0.98rem;
        line-height: 1.5;
        color: #333;
    }
    .job-card ul li:last-child {
        border-bottom: none;
    }
    .job-card ul li::before {
        content: "✓";
        color: #7cb342;
        font-weight: 700;
        font-size: 1.1rem;
        flex-shrink: 0;
        margin-top: 0.1rem;
    }

    /* ── Stage section ── */
    .internship-card {
        background: #f8faf7;
        border-radius: 16px;
        padding: 2.5rem 2rem;
        border-left: 5px solid #7cb342;
        box-shadow: 0 8px 20px rgba(0,0,0,0.03);
        margin-top: 2rem;
    }
    .internship-card h2 {
        font-size: 1.6rem;
        font-weight: 700;
        color: #2d3e2d;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    .internship-card h2 i {
        color: #7cb342;
    }
    .internship-card p {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #444;
        margin-bottom: 1.5rem;
    }
    .internship-card .btn-apply {
        background: #7cb342;
        color: #fff;
        border: none;
        padding: 0.6rem 2rem;
        border-radius: 40px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    .internship-card .btn-apply:hover {
        background: #558b2f;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(124, 179, 66, 0.25);
    }

    @media (max-width: 768px) {
        .job-card {
            padding: 1.5rem;
        }
        .job-card h3 {
            font-size: 1.1rem;
        }
        .internship-card {
            padding: 1.5rem;
        }
        .internship-card h2 {
            font-size: 1.3rem;
        }
    }
</style>
@endsection

@section('main')
<main class="content">
    <div class="entry-header">
        <div class="container">
            <h1>{{ __('emploie.page_title') }}</h1>
        </div>
    </div>

    <div class="breadcrumbs_unit">
        <div class="container">
            <div class="navxtBreads">
                <span><a href="{{ route('index') }}">{{ __('messages.home') }}</a></span>
                &gt;
                <span class="current-item">{{ __('emploie.breadcrumb') }}</span>
            </div>
        </div>
    </div>

    <div class="container job-section">
        <!-- Compétences -->
        <div class="row g-4">
            <div class="col-md-6">
                <div class="job-card">
                    <h3><i class="fas fa-tools"></i> {{ __('emploie.generic_skills_title') }}</h3>
                    <ul>
                        @foreach (__('emploie.generic_skills') as $skill)
                            <li>{{ $skill }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="job-card">
                    <h3><i class="fas fa-graduation-cap"></i> {{ __('emploie.specific_skills_title') }}</h3>
                    <ul>
                        @foreach (__('emploie.specific_skills') as $skill)
                            <li>{{ $skill }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!-- Stages -->
        <div class="internship-card">
            <h2><i class="fas fa-briefcase"></i> {{ __('emploie.internship_title') }}</h2>
            <p>{{ __('emploie.internship_description') }}</p>
            <a href="{{ route('contact') }}" class="btn-apply">
                {{ __('emploie.apply_now') ?? 'Postuler' }} <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <!-- Optionnel : Partenaires (si données passées) -->
        @if(isset($data['partners']) && $data['partners']->count() > 0)
        <div class="partners-section mt-5">
            <h3 class="text-center fw-bold mb-4">{{ __('index.partners_title') ?? 'Nos partenaires' }}</h3>
            <div class="owl-carousel owl-theme partner-caroussel">
                @foreach($data['partners'] as $partner)
                    <div class="item text-center">
                        <a href="{{ $partner->link }}" target="_blank">
                            <img src="{{ asset('images/partners/'.$partner->logo) }}" alt="{{ $partner->name_en }}" class="partner-logo" style="max-height:80px;max-width:150px;object-fit:contain;filter:grayscale(0.2);transition:0.3s;">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</main>
@endsection

@section('stript')
@if(isset($data['partners']) && $data['partners']->count() > 0)
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
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
@endif
@endsection