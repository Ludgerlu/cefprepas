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
    .promoter-section {
        padding: 2rem 0 4rem;
    }

    .promoter-card {
        background: #fff;
        border-radius: 20px;
        padding: 3rem 2.5rem;
        box-shadow: 0 8px 30px rgba(0,0,0,0.05);
        border: 1px solid #f0f0f0;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    .promoter-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(to right, #7cb342, #b9dda3);
    }
    .promoter-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 40px rgba(124, 179, 66, 0.08);
        border-color: #7cb342;
    }

    .promoter-profile {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 2rem;
        margin-bottom: 2rem;
    }
    .promoter-avatar {
        flex: 0 0 120px;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        overflow: hidden;
        border: 4px solid #7cb342;
        box-shadow: 0 8px 20px rgba(124, 179, 66, 0.15);
    }
    .promoter-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .promoter-avatar-placeholder {
        background: #b9dda3;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #2d3e2d;
        font-size: 3rem;
        font-weight: 700;
        width: 100%;
        height: 100%;
    }
    .promoter-title {
        flex: 1;
    }
    .promoter-title h2 {
        font-size: 2rem;
        font-weight: 700;
        color: #2d3e2d;
        margin: 0 0 0.25rem 0;
    }
    .promoter-title .role {
        font-size: 1rem;
        font-weight: 600;
        color: #7cb342;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    .promoter-title .role i {
        margin-right: 0.5rem;
    }

    .promoter-message {
        font-size: 1.05rem;
        line-height: 1.9;
        color: #333;
        margin-top: 1.5rem;
        padding: 1.5rem 2rem;
        background: #f8faf7;
        border-radius: 16px;
        border-left: 4px solid #7cb342;
        position: relative;
    }
    .promoter-message::before {
        content: '"';
        font-size: 4rem;
        color: #b9dda3;
        position: absolute;
        left: 0.5rem;
        top: -0.5rem;
        line-height: 1;
        font-family: Georgia, serif;
    }
    .promoter-message p {
        margin-bottom: 1rem;
    }
    .promoter-message p:last-child {
        margin-bottom: 0;
    }

    .promoter-signature {
        margin-top: 1.5rem;
        text-align: right;
        font-style: italic;
        color: #7cb342;
        font-size: 1.1rem;
    }
    .promoter-signature i {
        font-style: normal;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .promoter-card {
            padding: 2rem 1.5rem;
        }
        .promoter-profile {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .promoter-avatar {
            flex: 0 0 100px;
            width: 100px;
            height: 100px;
        }
        .promoter-title h2 {
            font-size: 1.6rem;
        }
        .promoter-message {
            padding: 1.5rem 1.2rem;
            font-size: 0.95rem;
        }
        .promoter-message::before {
            font-size: 3rem;
            left: 0.2rem;
            top: -0.3rem;
        }
    }
    @media (max-width: 576px) {
        .promoter-card {
            padding: 1.5rem 1rem;
        }
        .promoter-avatar {
            flex: 0 0 80px;
            width: 80px;
            height: 80px;
        }
    }
</style>
@endsection

@section('main')
<main class="content">
    <div class="entry-header">
        <div class="container">
            <h1>{{ __('promoteur.page_title') }}</h1>
        </div>
    </div>

    <div class="breadcrumbs_unit">
        <div class="container">
            <div class="navxtBreads">
                <span><a href="{{ route('index') }}">{{ __('messages.home') }}</a></span>
                &gt;
                <span class="current-item">{{ __('promoteur.breadcrumb') }}</span>
            </div>
        </div>
    </div>

    <div class="container promoter-section">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="promoter-card">
                    <div class="promoter-profile">
                        <div class="promoter-avatar">
                            {{-- Replace with actual photo if available --}}
                            @if(isset($founderPhoto) && $founderPhoto)
                                <img src="{{ asset($founderPhoto) }}" alt="{{ __('promoteur.founder_name') }}">
                            @else
                                <div class="promoter-avatar-placeholder">
                                    {{ substr(__('promoteur.founder_name'), 0, 1) }}
                                </div>
                            @endif
                        </div>
                        <div class="promoter-title">
                            <h2>{{ __('promoteur.founder_name') }}</h2>
                            <div class="role"><i class="fas fa-user-tie"></i> {{ __('promoteur.founder_title') }}</div>
                        </div>
                    </div>

                    <div class="promoter-message">
                        <p>{!! __('promoteur.message.welcome') !!}</p>
                        <p>{!! __('promoteur.message.mission') !!}</p>
                        <p>{!! __('promoteur.message.since') !!}</p>
                        <p>{!! __('promoteur.message.training') !!}</p>
                        <p>{!! __('promoteur.message.commitment') !!}</p>
                        <p>{!! __('promoteur.message.conclusion') !!}</p>
                    </div>

                    <div class="promoter-signature">
                        <i>{{ __('promoteur.founder_name') }}</i><br>
                        {{ __('promoteur.founder_title') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection