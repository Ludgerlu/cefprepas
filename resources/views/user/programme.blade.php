@extends('layouts.user') 
@section('style')
<style>
    ol li, ul li {
        margin-bottom: 8px;
    }

    section#about ,section#promoteur{
        height:auto !important;
    }
    
    .entry-header {
        position: relative;
        background-color: #fff;
        padding: 120px 0;
        background-size: cover;
        overflow: hidden;
    }
    
    .entry-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(236, 240, 241, 0.9) 0%, rgba(185, 221, 163, 0.9) 100%);
        z-index: 1;
    }
    
    .entry-header .container {
        position: relative;
        z-index: 2;
    }

    .entry-header .entry-title h1 {
        font-size: 3.5rem;
        color: #2c3e50;
        font-weight: 800;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        animation: fadeInDown 0.8s ease-out;
    }
    
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .breadcrumbs_unit {
        padding-top: 11px;
        background: linear-gradient(to right, #f6f6f6, #ffffff);
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
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

    .breadcrumbs_unit .navxtBreads > span a:hover {
        color: #3498db;
        transition: color 0.3s ease;
    }

    /* Program Cards Styling */
    .programe-item {
        margin-bottom: 30px;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        background: white;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.6s ease forwards;
    }
    
    .programe-item:nth-child(1) { animation-delay: 0.1s; }
    .programe-item:nth-child(2) { animation-delay: 0.2s; }
    .programe-item:nth-child(3) { animation-delay: 0.3s; }
    .programe-item:nth-child(4) { animation-delay: 0.4s; }
    
    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .programe-item:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }
    
    .programe-card {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
    }
    
    .programe-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        transition: all 0.6s cubic-bezier(0.215, 0.61, 0.355, 1);
        filter: brightness(0.9);
    }
    
    .programe-item:hover .programe-img {
        transform: scale(1.1);
        filter: brightness(1);
    }
    
    .programe-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.5) 50%, transparent 100%);
        color: white;
        padding: 2rem 1.5rem;
        transform: translateY(20px);
        opacity: 0;
        transition: all 0.4s ease;
    }
    
    .programe-item:hover .programe-overlay {
        transform: translateY(0);
        opacity: 1;
    }
    
    .programe-overlay h5 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: white;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
    }
    
    .programe-overlay .btn {
        background: linear-gradient(45deg, #3498db, #2980b9);
        border: none;
        padding: 0.5rem 1.5rem;
        border-radius: 50px;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
    }
    
    .programe-overlay .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(52, 152, 219, 0.4);
        background: linear-gradient(45deg, #2980b9, #3498db);
    }
    
    /* Modal Styling */
    .modal-content {
        border-radius: 20px;
        overflow: hidden;
        border: none;
        box-shadow: 0 25px 50px rgba(0,0,0,0.2);
        animation: modalSlideIn 0.5s ease-out;
    }
    
    @keyframes modalSlideIn {
        from {
            opacity: 0;
            transform: translateY(-50px) scale(0.9);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }
    
    .modal-header {
        background: linear-gradient(135deg, #2c3e50, #3498db);
        color: white;
        border-bottom: none;
        padding: 1.5rem 2rem;
    }
    
    .modal-title {
        font-weight: 700;
        font-size: 1.5rem;
    }
    
    .modal-body {
        padding: 2rem;
        background: #f8f9fa;
    }
    
    .modal-body .row > div {
        animation: fadeIn 0.6s ease-out forwards;
        opacity: 0;
    }
    
    .modal-body .row > div:nth-child(1) { animation-delay: 0.1s; }
    .modal-body .row > div:nth-child(2) { animation-delay: 0.2s; }
    .modal-body .row > div:nth-child(3) { animation-delay: 0.3s; }
    .modal-body .row > div:nth-child(4) { animation-delay: 0.4s; }
    .modal-body .row > div:nth-child(5) { animation-delay: 0.5s; }
    .modal-body .row > div:nth-child(6) { animation-delay: 0.6s; }
    
    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }
    
    .modal-body h5 {
        color: #2c3e50;
        font-weight: 700;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid #3498db;
        display: inline-block;
    }
    
    .modal-body p {
        color: #555;
        line-height: 1.6;
        font-size: 1rem;
    }
    
    .modal-body ul {
        padding-left: 0;
    }
    
    .modal-body ul li {
        padding: 0.5rem 0;
        border-bottom: 1px solid #eee;
        color: #555;
    }
    
    .modal-body ul li:last-child {
        border-bottom: none;
    }
    
    .modal-body ul li i {
        color: #3498db;
        font-size: 1.1rem;
    }
    
    .modal-footer {
        border-top: 1px solid #eee;
        padding: 1rem 2rem;
        background: white;
    }
    
    .modal-footer .btn-secondary {
        background: linear-gradient(45deg, #95a5a6, #7f8c8d);
        border: none;
        padding: 0.5rem 2rem;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .modal-footer .btn-secondary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(149, 165, 166, 0.3);
    }
    
    /* Section Title */
    .sub_pages_shortcode h1 {
        position: relative;
        padding-bottom: 1rem;
        color: #2c3e50;
    }
    
    .sub_pages_shortcode h1::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(to right, #3498db, #2ecc71);
        border-radius: 2px;
    }
    
    /* Empty Space Animation */
    .empty_space_inner {
        display: block;
        animation: pulse 2s infinite ease-in-out;
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.7; }
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .entry-header .entry-title h1 {
            font-size: 2.5rem;
        }
        
        .programe-img {
            height: 250px;
        }
        
        .programe-overlay h5 {
            font-size: 1.25rem;
        }
        
        .modal-dialog {
            margin: 1rem;
        }
        
        .modal-body {
            padding: 1.5rem;
        }
    }
    
    @media (max-width: 576px) {
        .programe-overlay {
            padding: 1.5rem 1rem;
        }
        
        .modal-header {
            padding: 1rem;
        }
        
        .modal-title {
            font-size: 1.25rem;
        }
    }
</style>
@endsection 

@section('main')
<main class="content">
    <div class="entry-header">
        <div class="container">
            <div class="entry-title-left">
                <div class="entry-title text-center text-uppercase">
                    <h1 data-aos="fade-down" data-aos-duration="800">{{ __('programme.page_title') }}</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="breadcrumbs_unit">
        <div class="container">
            <div class="navxtBreads">
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Go to cefprepas.com" href="{{ route('index') }}" class="home">
                        <span property="name">{{ __('messages.home') }}</span>
                    </a>
                    <meta property="position" content="1">
                </span>
                &gt;
                <span property="itemListElement" typeof="ListItem">
                    <span property="name" class="post post-page current-item text-uppercase">{{ __('programme.breadcrumb') }}</span>
                    <meta property="url" content="https://www.CEFPREPAS.com/">
                    <meta property="position" content="2">
                </span>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="empty_space" style="height: 87px;">
            <span class="empty_space_inner"></span>
        </div>
        
        <section class="sub_pages_shortcode">
            <h1 class="text-uppercase fw-bolder text-center mb-4" data-aos="fade-up" data-aos-duration="800">
                {{ __('programme.section_title') }}
            </h1>
            
            <div class="empty_space" style="height: 60px;">
                <span class="empty_space_inner"></span>
            </div>
            
            <div class="row">
                @foreach(['fci', 'fcc', 'fa', 'fsc'] as $program)
                <div class="col-lg-6 col-md-6 programe-item mb-4" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="programe-card">
                        <img src={{ asset(__('programme.programs.'.$program.'.img') )}} class="programe-img" alt="{{ __('programme.programs.'.$program.'.title') }}">
                        <div class="programe-overlay">
                            <h5>{{ __('programme.programs.'.$program.'.title') }}</h5>
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#{{ strtoupper($program) }}Modal">
                                {{ __('programme.view_button') }} <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="empty_space" style="height: 87px;">
                <span class="empty_space_inner"></span>
            </div>
        </section>
    </div>
</main>

@foreach(['fci', 'fcc', 'fa', 'fsc'] as $program)
<div class="modal fade" id="{{ strtoupper($program) }}Modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('programme.programs.'.$program.'.modal_title') }}</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 mb-4 text-center">
                        <h5>{{ __('programme.programs.'.$program.'.target_audience') }}</h5>
                        <p>{{ __('programme.programs.'.$program.'.target_text') }}</p>
                    </div>
                    <div class="col-md-4 mb-4 text-center">
                        <h5>{{ __('programme.programs.'.$program.'.duration') }}</h5>
                        <p>{{ __('programme.programs.'.$program.'.duration_text') }}</p>
                    </div>
                    
                    @if(isset(__('programme.programs.'.$program)['sessions_list']))
                    <div class="col-md-4 mb-4">
                        <h5 class="text-center">{{ __('programme.programs.'.$program.'.sessions') }}</h5>
                        <ul class="list-unstyled">
                            @foreach(__('programme.programs.'.$program.'.sessions_list') as $session)
                            <li><i class="fas fa-check-circle text-primary me-2"></i> {{ $session }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @elseif(isset(__('programme.programs.'.$program)['sessions']))
                    <div class="col-md-4 mb-4">
                        <h5 class="text-center">{{ __('programme.programs.'.$program.'.sessions') }}</h5>
                        <p>{{ __('programme.programs.'.$program.'.sessions_text') }}</p>
                    </div>
                    @endif
                    
                    @if(isset(__('programme.programs.'.$program)['scheduling']))
                    <div class="col-md-6 mb-4">
                        <h5 class="text-center">{{ __('programme.programs.'.$program.'.scheduling') }}</h5>
                        <p>{{ __('programme.programs.'.$program.'.scheduling_text') }}</p>
                    </div>
                    @endif
                    
                    @if(isset(__('programme.programs.'.$program)['location']))
                    <div class="col-md-4 mb-4">
                        <h5 class="text-center">{{ __('programme.programs.'.$program.'.location') }}</h5>
                        <p>{{ __('programme.programs.'.$program.'.location_text') }}</p>
                    </div>
                    @endif
                    
                    @if(isset(__('programme.programs.'.$program)['content']))
                    <div class="col-md-6 mb-4">
                        <h5 class="text-center">{{ __('programme.programs.'.$program.'.content') }}</h5>
                        <p>{{ __('programme.programs.'.$program.'.content_text') }}</p>
                    </div>
                    @endif
                    
                    @if(isset(__('programme.programs.'.$program)['schedule']))
                    <div class="col-md-6 mb-4">
                        <h5 class="text-center">{{ __('programme.programs.'.$program.'.schedule') }}</h5>
                        <p>{{ __('programme.programs.'.$program.'.schedule_text') }}</p>
                    </div>
                    @endif
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>{{ __('programme.close_button') }}
                </button>
            </div>
        </div>
    </div>
</div>
@endforeach

@push('scripts')
<script>
    // Initialize animations on scroll
    document.addEventListener('DOMContentLoaded', function() {
        // Add scroll-triggered animations
        const programItems = document.querySelectorAll('.programe-item');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, { threshold: 0.1 });
        
        programItems.forEach(item => observer.observe(item));
        
        // Modal animation
        const modalEl = document.getElementById('FCIModal');
        modalEl.addEventListener('show.bs.modal', function() {
            this.querySelector('.modal-content').style.animation = 'modalSlideIn 0.5s ease-out';
        });
    });
</script>
@endpush
@endsection