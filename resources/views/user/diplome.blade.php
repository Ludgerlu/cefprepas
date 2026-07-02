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
    }
    
    .entry-header .container {
        position: relative;
        z-index: 2;
    }

    .entry-header .entry-title h1 {
        font-size: 50px;
        color: #2c3e50;
        font-weight: 700;
        animation: fadeInDown 0.8s ease-out;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    }
    
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
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
        transition: color 0.3s ease;
    }
    
    .breadcrumbs_unit .navxtBreads > span a:hover {
        color: #3498db;
        text-decoration: none;
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

    /* Portfolio Items Styling */
    .portfolio-item {
        width: auto;
        margin-bottom: 30px;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.6s ease forwards;
    }
    
    .portfolio-item:nth-child(1) { animation-delay: 0.2s; }
    .portfolio-item:nth-child(2) { animation-delay: 0.4s; }
    
    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .portfolio-item:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }
        
    .portfolio-img {
        width: 455px;
        height: 250px;
        object-fit: cover;
        transition: transform 0.5s cubic-bezier(0.215, 0.61, 0.355, 1);
        filter: brightness(0.9);
    }
        
    .portfolio-item:hover .portfolio-img {
        transform: scale(1.1);
        filter: brightness(1);
    }
        
    .portfolio-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.6) 50%, transparent 100%);
        color: white;
        padding: 1.5rem;
        transform: translateY(10px);
        opacity: 0.95;
        transition: all 0.4s ease;
    }
    
    .portfolio-item:hover .portfolio-overlay {
        opacity: 1;
        transform: translateY(0);
        background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.7) 100%);
    }
    
    .portfolio-overlay h5 {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 0.8rem;
        color: white;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
    }
    
    .portfolio-overlay .btn {
        background: linear-gradient(45deg, #3498db, #2980b9);
        border: none;
        padding: 0.5rem 1.5rem;
        border-radius: 5px;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(52, 152, 219, 0.3);
    }
    
    .portfolio-overlay .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(52, 152, 219, 0.4);
        background: linear-gradient(45deg, #2980b9, #3498db);
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
        animation: widthGrow 1s ease-out forwards;
    }
    
    @keyframes widthGrow {
        from { width: 0; }
        to { width: 100px; }
    }
    
    /* Modal Styling */
    .modal-content {
        border-radius: 10px;
        overflow: hidden;
        border: none;
        box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        animation: modalSlideIn 0.5s ease-out;
    }
    
    @keyframes modalSlideIn {
        from {
            opacity: 0;
            transform: translateY(-30px) scale(0.95);
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
    
    .btn-close {
        filter: invert(1) brightness(100);
        opacity: 0.8;
        transition: all 0.3s ease;
    }
    
    .btn-close:hover {
        opacity: 1;
        transform: rotate(90deg);
    }
    
    .modal-body {
        padding: 2rem;
        background: #f8f9fa;
    }
    
    .modal-body ul {
        padding-left: 0;
    }
    
    .modal-body ul li {
        padding: 0.8rem 1rem;
        margin-bottom: 0.5rem;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        border-left: 4px solid #3498db;
        transform: translateX(-20px);
        opacity: 0;
        animation: slideIn 0.5s ease forwards;
        transition: all 0.3s ease;
    }
    
    .modal-body ul li:nth-child(1) { animation-delay: 0.2s; }
    .modal-body ul li:nth-child(2) { animation-delay: 0.3s; }
    
    @keyframes slideIn {
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    .modal-body ul li:hover {
        transform: translateX(5px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        border-left: 4px solid #2ecc71;
    }
    
    .modal-body ul li i {
        color: #3498db;
        font-size: 1.1rem;
        margin-right: 0.8rem;
        animation: iconPulse 2s infinite;
    }
    
    @keyframes iconPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.2); }
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
        border-radius: 5px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .modal-footer .btn-secondary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(149, 165, 166, 0.3);
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
        
        .portfolio-img {
            width: 100%;
            height: 200px;
        }
        
        .portfolio-overlay h5 {
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
        .portfolio-overlay {
            padding: 1rem;
        }
        
        .modal-header {
            padding: 1rem;
        }
        
        .modal-title {
            font-size: 1.25rem;
        }
        
        .sub_pages_shortcode h1 {
            font-size: 1.8rem;
        }
    }
</style>
@endsection 
@section('main')
<main class="content">
    <div class="entry-header clearfix" style="background: linear-gradient(135deg, #ecf0f1, #b9dda3); background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="entry-title-left">
                <div class="entry-title text-center text-uppercase text-dark fs-5">
                    <h1>{{ __('diplome.page_title') }}</h1>
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
                        <span property="name" class="post post-page current-item text-uppercase">{{ __('diplome.page_title') }}</span><meta property="url" content="https://www.CEFPREPAS.com/"><meta property="position" content="2">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="empty_space" style="height: 87px;">
            <span class="empty_space_inner"></span>
        </div>
        <section class="sub_pages_shortcode">
            <h1 class="text-uppercase fw-bolder" style="text-align: center;">{{ __('diplome.section_title') }}</h1>
            <div class="empty_space" style="height: 87px;">
                <span class="empty_space_inner"></span>
            </div>
            <!-- Portfolio Grid -->
            <div class="row portfolio-grid d-flex justify-content-between">
                <!-- Item 1 -->
                <div class="col-lg-6 portfolio-item" data-category="web">
                    <div class="portfolio-card">
                        <img src="{{ asset('assets/img/CQP.jpeg')}}" class="portfolio-img" alt="Web Project">
                        <div class="portfolio-overlay">
                            <h5>{{ __('diplome.cqp_title') }}</h5>
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#CQPModal">
                                {{ __('diplome.know_more') }} <i class="fas fa-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Item 2 -->
                <div class="col-lg-4 portfolio-item" data-category="graphic">
                    <div class="portfolio-card">
                        <img src="{{ asset('assets/img/attestation2.jpeg')}}" class="portfolio-img" alt="Poster Design">
                        <div class="portfolio-overlay">
                            <h5>{{ __('diplome.attestation_title') }}</h5>
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#DQPModal">
                                {{ __('diplome.know_more') }} <i class="fas fa-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="empty_space" style="height: 87px;">
                <span class="empty_space_inner"></span>
            </div>
        </section>
    </div>
</main>

<!-- Portfolio Modal -->
<div class="modal fade" id="CQPModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalProjectTitle">{{ __('diplome.cqp_modal_title') }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle text-primary me-2"></i> {{ __('diplome.cqp_point_1') }}</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> {{ __('diplome.cqp_point_2') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>{{ __('diplome.close') }}
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal -->
<div class="modal fade" id="DQPModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalProjectTitle">{{ __('diplome.attestation_modal_title') }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle text-primary me-2"></i> {{ __('diplome.attestation_point_1') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>{{ __('diplome.close') }}
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize animations on scroll
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, { threshold: 0.1 });
        
        portfolioItems.forEach(item => observer.observe(item));
    });
</script>
@endpush
@endsection