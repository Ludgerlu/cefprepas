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
    .atout-section {
        padding: 2rem 0 4rem;
    }
    .atout-block {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 2rem;
        margin-bottom: 4rem;
        background: #fff;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 8px 30px rgba(0,0,0,0.04);
        border: 1px solid #f0f0f0;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .atout-block:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 40px rgba(124, 179, 66, 0.08);
        border-color: #7cb342;
    }
    .atout-block .atout-image {
        flex: 0 0 45%;
        max-width: 45%;
        border-radius: 16px;
        overflow: hidden;
    }
    .atout-block .atout-image img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .atout-block:hover .atout-image img {
        transform: scale(1.02);
    }
    .atout-block .atout-text {
        flex: 1;
        padding: 0 1rem;
    }
    .atout-block .atout-text .icon {
        display: inline-block;
        font-size: 2.5rem;
        color: #7cb342;
        margin-bottom: 0.5rem;
    }
    .atout-block .atout-text h2 {
        font-size: 1.8rem;
        font-weight: 700;
        color: #2d3e2d;
        margin-bottom: 1rem;
    }
    .atout-block .atout-text p {
        font-size: 1rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 0;
    }

    /* alternance image à droite */
    .atout-block.reverse .atout-image {
        order: 2;
    }
    .atout-block.reverse .atout-text {
        order: 1;
    }

    @media (max-width: 768px) {
        .atout-block {
            flex-direction: column;
            padding: 1.5rem;
        }
        .atout-block .atout-image {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .atout-block .atout-image img {
            height: 200px;
        }
        .atout-block.reverse .atout-image {
            order: 1;
        }
        .atout-block.reverse .atout-text {
            order: 2;
        }
        .atout-block .atout-text h2 {
            font-size: 1.5rem;
        }
    }
</style>
@endsection

@section('main')
<main class="content">
    <div class="entry-header">
        <div class="container">
            <h1>{{ __('atout.atout_title') }}</h1>
        </div>
    </div>

    <div class="breadcrumbs_unit">
        <div class="container">
            <div class="navxtBreads">
                <span><a href="{{ route('index') }}">{{ __('messages.home') }}</a></span>
                &gt;
                <span class="current-item">{{ __('atout.atout_title') }}</span>
            </div>
        </div>
    </div>

    <div class="container atout-section">
        <!-- Mission -->
        <div class="atout-block">
            <div class="atout-image">
                <img src="{{ asset('assets/img/farm.jpg') }}" alt="{{ __('atout.our_mission') }}">
            </div>
            <div class="atout-text">
                <span class="icon"><i class="fas fa-bullseye"></i></span>
                <h2>{{ __('atout.our_mission') }}</h2>
                <p>{{ __('atout.mission_text') }}</p>
            </div>
        </div>

        <!-- Valeurs -->
        <div class="atout-block reverse">
            <div class="atout-text">
                <span class="icon"><i class="fas fa-gem"></i></span>
                <h2>{{ __('atout.our_values') }}</h2>
                <p>{{ __('atout.values_text') }}</p>
            </div>
            <div class="atout-image">
                <img src="{{ asset('assets/img/nosValuers.jpeg') }}" alt="{{ __('atout.our_values') }}">
            </div>
        </div>

        <!-- Vision -->
        <div class="atout-block">
            <div class="atout-image">
                <img src="{{ asset('assets/img/nosVision2.jpeg') }}" alt="{{ __('atout.our_vision') }}">
            </div>
            <div class="atout-text">
                <span class="icon"><i class="fas fa-eye"></i></span>
                <h2>{{ __('atout.our_vision') }}</h2>
                <p>{{ __('atout.vision_text') }}</p>
            </div>
        </div>
    </div>
</main>
@endsection