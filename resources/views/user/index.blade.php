@extends('layouts.user')

@section('style')
    <style>
        /* ── Additional styles for the updated sections ── */
        /* ── Hero Slider ── */
        .hero-slider {
            position: relative;
            overflow: hidden;
            height: 100vh;
            min-height: 600px;
            background: var(--green-dark, #1e4d2b);
        }

        .slider-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 0.8s ease;
            display: flex;
            align-items: center;
        }

        .slide.active {
            opacity: 1;
        }

        .slide-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(30, 77, 43, 0.85) 0%, rgba(30, 77, 43, 0.50) 100%);
            z-index: 1;
        }

        .slide-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            width: 100%;
            padding: 40px 20px;
            color: #fff;
            animation: heroFade 0.7s ease;
            text-align: center;
        }

        @keyframes heroFade {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .slide-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #f5c842; /* amber */
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            margin-bottom: 20px;
        }
        .slide-eyebrow::before {
            content: '';
            width: 20px;
            height: 2px;
            background: #f5c842;
        }

        .slide-content h1 {
            font-size: clamp(2rem, 5vw, 3.4rem);
            color: #fff;
            margin-bottom: 20px;
            line-height: 1.15;
        }
        .slide-content h1 {
            font-size: clamp(2.4rem, 5vw, 4rem);
            color: #fff;
            margin-bottom: 20px;
            line-height: 1.15;
            font-weight: 700;
            text-align: center;
        }

        .slide-content p {
            color: rgba(255,255,255,0.85);
            max-width: 600px;
            margin: 0 auto 36px auto;  /* ← centre le paragraphe */
            font-size: 1.15rem;
            line-height: 1.7;
            text-align: center;
        }

        .slide-actions {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .slide-actions .btn {
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .slide-actions .btn-primary {
            background: #4caf70;
            color: #fff;
            border: none;
        }
        .slide-actions .btn-primary:hover {
            background: #2e7d45;
            transform: translateY(-2px);
        }
        .slide-actions .btn-outline-light {
            background: transparent;
            color: #fff;
            border: 2px solid rgba(255,255,255,0.5);
        }
        .slide-actions .btn-outline-light:hover {
            background: rgba(255,255,255,0.1);
        }

        .hero-stats {
            display: flex;
            gap: 2.5rem;
            flex-wrap: wrap;
        }
        .hero-stats .stat-item .number {
            font-size: 2rem;
            font-weight: 700;
            color: #f5c842;
            line-height: 1.2;
        }
        .hero-stats .stat-item .label {
            font-size: 0.85rem;
            color: rgba(255,255,255,0.6);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Contrôles */
        .slider-control {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 2px solid rgba(255,255,255,0.3);
            background: rgba(255,255,255,0.08);
            color: #fff;
            font-size: 1.6rem;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(4px);
        }
        .slider-control:hover {
            background: #2e7d45;
            border-color: #2e7d45;
        }
        .slider-control.prev { left: 24px; }
        .slider-control.next { right: 24px; }

        .slider-dots {
            position: absolute;
            bottom: 36px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            display: flex;
            gap: 10px;
        }
        .slider-dots .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255,255,255,0.4);
            cursor: pointer;
            transition: all 0.3s;
            border: none;
        }
        .slider-dots .dot.active {
            background: #f5c842;
            width: 28px;
            border-radius: 4px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-slider { height: 100vh; min-height: 500px; }
            .slider-control { width: 36px; height: 36px; font-size: 1.2rem; }
            .slider-control.prev { left: 10px; }
            .slider-control.next { right: 10px; }
            .slide-content { padding: 20px 0; }
            .hero-stats { gap: 1.5rem; }
            .hero-stats .stat-item .number { font-size: 1.6rem; }
        }
        @media (max-width: 480px) {
            .slide-content h1 { font-size: 1.8rem; }
            .slide-actions .btn { padding: 10px 20px; font-size: 0.85rem; }
        }

        /* Hero (single image + particles) */
        .hero {
            position: relative;
            min-height: 92vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #1e3a2b; /* fallback */
        }
        .hero-bg {
            position: absolute;
            inset: 0;
            background: url({{  asset('assets/img/solaire.jpeg') }}) center/cover no-repeat;
            opacity: 0.18;
        }
        .hero-particles {
            position: absolute;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
        }
        .particle {
            position: absolute;
            width: 6px;
            height: 6px;
            background: #c8d9c0;
            border-radius: 50%;
            opacity: 0;
            animation: float-up 8s infinite ease-in-out;
        }
        .particle:nth-child(1) { left: 10%; animation-delay: 0s; width: 10px; height: 10px; }
        .particle:nth-child(2) { left: 25%; animation-delay: 1.5s; width: 16px; height: 16px; background: #d4a853; }
        .particle:nth-child(3) { left: 45%; animation-delay: 3s; }
        .particle:nth-child(4) { left: 65%; animation-delay: 1s; width: 8px; height: 8px; background: #d4a853; }
        .particle:nth-child(5) { left: 80%; animation-delay: 4.5s; width: 14px; height: 14px; }
        .particle:nth-child(6) { left: 92%; animation-delay: 2s; width: 10px; height: 10px; background: #d4a853; }
        .particle:nth-child(7) { left: 15%; animation-delay: 0.5s; width: 10px; height: 10px; }
        .particle:nth-child(8) { left: 30%; animation-delay: 1.5s; width: 16px; height: 16px; background: #d4a853; }
        .particle:nth-child(9) { left: 58%; animation-delay: 3s; width: 20px; height: 20px; background: #c8d9c0; }
        .particle:nth-child(10) { left: 72%; animation-delay: 1s; width: 8px; height: 8px; background: #d4a853; }
        .particle:nth-child(11) { left: 89%; animation-delay: 4.5s; width: 14px; height: 14px; }
        .particle:nth-child(12) { left: 99%; animation-delay: 2s; width: 10px; height: 10px; background: #d4a853; }
        .particle:nth-child(13) { left: 13%; animation-delay: 0.2s; width: 10px; height: 10px; }
        .particle:nth-child(14) { left: 20%; animation-delay: 1.5s; width: 16px; height: 16px; background: #d4a853; }
        .particle:nth-child(15) { left: 34%; animation-delay: 3s; }
        .particle:nth-child(16) { left: 28%; animation-delay: 1s; width: 8px; height: 8px; background: #d4a853; }
        .particle:nth-child(17) { left: 48%; animation-delay: 4.5s; width: 14px; height: 14px; }
        .particle:nth-child(18) { left: 69%; animation-delay: 2s; width: 10px; height: 10px; background: #d4a853; }
        .particle:nth-child(19) { left: 51%; animation-delay: 0.7s; width: 10px; height: 10px; }
        .particle:nth-child(20) { left: 68%; animation-delay: 1.5s; width: 16px; height: 16px; background: #d4a853; }
        .particle:nth-child(21) { left: 4%; animation-delay: 3s; width: 20px; height: 20px; background: #c8d9c0; }
        .particle:nth-child(22) { left: 7%; animation-delay: 1s; width: 8px; height: 8px; background: #d4a853; }
        .particle:nth-child(23) { left: 87%; animation-delay: 4.5s; width: 14px; height: 14px; }
        .particle:nth-child(24) { left: 9%; animation-delay: 2s; width: 10px; height: 10px; background: #d4a853; }

        @keyframes float-up {
            0% { opacity: 0; transform: translateY(100px) scale(0.5); }
            20% { opacity: 0.6; }
            80% { opacity: 0.4; }
            100% { opacity: 0; transform: translateY(-200px) scale(1); }
        }

        .hero{
            height: 100vh !important;
        }
        .hero-content { position: relative; z-index: 2; }
        .hero-eyebrow {
            display: inline-flex; align-items: center; gap: 0.5rem;
            font-size: 0.78rem; font-weight: 600; letter-spacing: 0.12em;
            text-transform: uppercase; color: #d3e9c3;
            background: rgba(212, 168, 83, 0.12);
            padding: 0.35rem 0.9rem; border-radius: 99px;
            margin-bottom: 1.5rem;
        }
        .hero-title {
            font-size: clamp(2.4rem, 5vw, 4rem);
            color: #fff;
            line-height: 1.15;
            margin-bottom: 1.25rem;
        }
        .hero-title span { color: #d3e9c3; }
        .hero-desc {
            color: rgba(255,255,255,0.75);
            font-size: 1.05rem;
            line-height: 1.8;
            max-width: 520px;
            margin-bottom: 2rem;
        }
        .hero-stats {
            display: flex;
            gap: 2.5rem;
            margin-top: 2rem;
            flex-wrap: wrap;
        }
        .stat-item .number {
            font-size: 2rem;
            font-weight: 700;
            color: #d3e9c3;
            line-height: 1.2;
        }
        .stat-item .label {
            font-size: 0.85rem;
            color: rgba(255,255,255,0.6);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .hero-card {
            background: #d3e9c3;
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 20px;
            padding: 2rem 1.8rem;
            color: #fff;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            transition: transform 0.3s ease;
        }
        .hero-card:hover { transform: translateY(-4px); }
        .hero-card .hero-card-badge {
            background: #b3b7bb;
            color: #1e3a2b;
            font-size: 0.7rem;
            font-weight: 700;
            padding: 0.2rem 0.8rem;
            border-radius: 99px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .service-list-mini {
            list-style: none;
            padding: 0;
            margin: 1rem 0 0;
        }
        .service-list-mini li {
            padding: 0.6rem 0;
            border-bottom: 1px solid rgba(255,255,255,0.06);
            display: flex;
            align-items: center;
            gap: 0.7rem;
            font-size: 0.95rem;
            color: rgba(255,255,255,0.85);
        }
        .service-list-mini li:last-child { border-bottom: none; }
        .service-list-mini li i { color: #000000; width: 20px; font-size: 1.1rem; }
        .btn-primary-custom {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: #b3b7bb;
            color: #1e3a2b;
            font-weight: 600;
            padding: 0.7rem 1.8rem;
            border-radius: 99px;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            font-size: 0.9rem;
        }
        .btn-primary-custom:hover {
            background: #c49a3f;
            color: #1e3a2b;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(212,168,83,0.3);
        }
        .btn-primary-custom i { transition: transform 0.3s; }
        .btn-primary-custom:hover i { transform: translateX(4px); }

        /* Info Two */
        .info-two {
            padding: 3rem 0;
            background: #f8faf7;
        }
        .info-two-item {
            background: #fff;
            padding: 1.5rem 2rem;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.04);
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
            border: 1px solid #eef3ee;
        }
        .info-two-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.08);
        }
        .info-two-item span img { max-width: 48px; }

        /* News section */
        .news-section {
            padding: 70px 0;
            background: #f8faf7;
        }
        .news-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 6px 25px rgba(0,0,0,0.06);
            transition: transform 0.35s ease, box-shadow 0.35s ease;
            height: 100%;
            border: 1px solid #f0f0f0;
        }
        .news-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 14px 40px rgba(0,0,0,0.10);
        }
        .news-card .news-img {
            height: 200px;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .news-card .news-img .news-date-badge {
            position: absolute;
            top: 16px;
            left: 16px;
            background: #7cb342;
            color: #fff;
            font-weight: 700;
            font-size: 0.8rem;
            padding: 6px 14px;
            border-radius: 30px;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 12px rgba(124,179,66,0.3);
        }
        .news-card .news-body { padding: 20px 22px 24px; }
        .news-card .news-body h4 { font-size: 1.1rem; font-weight: 600; color: #2d3e2d; margin-bottom: 10px; line-height: 1.4; }
        .news-card .news-body .news-meta {
            display: flex;
            gap: 18px;
            font-size: 0.85rem;
            color: #888;
            margin-bottom: 10px;
        }
        .news-card .news-body .news-meta i { margin-right: 4px; }
        .news-card .news-body p { color: #666; font-size: 0.92rem; line-height: 1.6; margin-bottom: 14px; }
        .news-card .news-body .btn-news {
            color: #7cb342;
            font-weight: 600;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .news-card .news-body .btn-news:hover { color: #558b2f; gap: 12px; }


        /* ── Testimonials Carousel ── */
        .testimonials-section {
            background: #f8faf7;
            padding: 60px 0;
        }

        .testimonial-card {
            background: #fff;
            border-radius: 20px;
            padding: 2rem 1.5rem;
            box-shadow: 0 8px 30px rgba(0,0,0,0.06);
            transition: transform 0.3s ease;
            margin: 0.5rem;
        }
        .testimonial-card:hover {
            transform: translateY(-5px);
        }

        .testimonial-avatar {
            width: 80px;
            height: 80px;
        }
        .testimonial-avatar img,
        .testimonial-avatar .avatar-placeholder {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: 3px solid #7cb342;
        }
        .avatar-placeholder {
            background: #7cb342;
            color: #fff;
            font-size: 2rem;
            font-weight: 600;
        }

        .testimonial-text {
            font-size: 0.95rem;
            line-height: 1.7;
            color: #555;
            padding: 1rem 0;
            position: relative;
            margin-top: 0.5rem;
        }
        .testimonial-text::before {
            content: '"';
            font-size: 3rem;
            color: #b9dda3;
            position: absolute;
            left: 0;
            top: -0.5rem;
            line-height: 1;
        }
        .testimonial-text::after {
            content: '"';
            font-size: 3rem;
            color: #b9dda3;
            position: absolute;
            right: 0;
            bottom: -0.5rem;
            line-height: 1;
        }

        /* Owl Carousel custom dots */
        .testimonial-carousel .owl-dots {
            margin-top: 1.5rem;
        }
        .testimonial-carousel .owl-dot span {
            background: #ccc;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            transition: 0.3s;
        }
        .testimonial-carousel .owl-dot.active span {
            background: #7cb342;
            transform: scale(1.2);
        }
        .testimonial-carousel .owl-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
            pointer-events: none;
        }
        .testimonial-carousel .owl-nav button {
            pointer-events: auto;
            background: #fff !important;
            border-radius: 50% !important;
            width: 44px;
            height: 44px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: 0.3s;
        }
        .testimonial-carousel .owl-nav button:hover {
            background: #7cb342 !important;
            color: #fff !important;
        }
        .testimonial-carousel .owl-nav .owl-prev {
            position: absolute;
            left: -20px;
        }
        .testimonial-carousel .owl-nav .owl-next {
            position: absolute;
            right: -20px;
        }
        @media (max-width: 768px) {
            .testimonial-carousel .owl-nav .owl-prev { left: 0; }
            .testimonial-carousel .owl-nav .owl-next { right: 0; }
        }
        /* Events section (styled like cf.html) */
        .events-section {
            padding: 70px 0;
            background: #fff;
        }
        .event-item {
            background: #f5f9f2;
            border-radius: 12px;
            padding: 24px;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            border: 1px solid #e8f0e3;
            transition: all 0.3s ease;
            margin-bottom: 24px;
            gap: 1rem;
        }
        .event-item:hover {
            background: #7cb342;
            border-color: #7cb342;
            color: #fff;
        }
        .event-item:hover .text-neutral-500,
        .event-item:hover .text-neutral-700,
        .event-item:hover h4,
        .event-item:hover h3 {
            color: #fff !important;
        }
        .event-item .event-date {
            min-width: 70px;
            text-align: center;
        }
        .event-item .event-date h3 {
            font-size: 2.6rem;
            font-weight: 800;
            color: #7cb342;
            margin-bottom: 0;
            line-height: 1;
        }
        .event-item .event-date span {
            font-size: 0.9rem;
            color: #555;
        }
        .event-item .event-divider {
            border-left: 2px dashed #ccc;
            height: 72px;
            margin: 0 1rem;
        }
        .event-item .event-info {
            flex: 1;
        }
        .event-item .event-info .meta {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 8px;
        }
        .event-item .event-info .meta span {
            font-size: 0.9rem;
            color: #666;
        }
        .event-item .event-info h4 {
            font-size: 1.2rem;
            font-weight: 700;
            color: #2d3e2d;
            margin: 0;
        }
        .event-item .event-action {
            flex-shrink: 0;
        }
        .btn-outline-main {
            border: 2px solid #7cb342;
            color: #7cb342;
            background: transparent;
            padding: 0.5rem 1.5rem;
            border-radius: 40px;
            font-weight: 600;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .btn-outline-main:hover {
            background: #7cb342;
            color: #fff;
            border-color: #7cb342;
        }
        .event-item:hover .btn-outline-main {
            border-color: #fff;
            color: #fff;
        }
        .event-item:hover .btn-outline-main:hover {
            background: #fff;
            color: #7cb342;
        }

        /* Promo section */
        .promo-section {
            padding: 70px 0;
            background: linear-gradient(135deg, #f5f9f2 0%, #e8f0e3 100%);
        }
        .promo-card {
            background: #fff;
            border-radius: 24px;
            padding: 40px 35px;
            box-shadow: 0 12px 50px rgba(0,0,0,0.07);
            position: relative;
            overflow: hidden;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            border: 1px solid rgba(124,179,66,0.15);
        }
        .promo-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 60px rgba(0,0,0,0.10);
        }
        .promo-card .promo-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #ff6b35;
            color: #fff;
            font-weight: 700;
            font-size: 0.8rem;
            padding: 6px 18px;
            border-radius: 40px;
            letter-spacing: 0.5px;
            animation: pulse-badge 2s infinite;
        }
        @keyframes pulse-badge {
            0%,100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        .promo-card .promo-icon { font-size: 2.8rem; color: #7cb342; margin-bottom: 12px; }
        .promo-card h3 { font-weight: 700; color: #2d3e2d; font-size: 1.6rem; }
        .promo-card .promo-highlight { font-size: 2.2rem; font-weight: 800; color: #7cb342; }
        .promo-card ul { list-style: none; padding: 0; margin: 16px 0 20px; }
        .promo-card ul li { padding: 6px 0; font-size: 0.98rem; color: #444; display: flex; align-items: center; gap: 10px; }
        .promo-card ul li i { color: #7cb342; font-size: 1.1rem; }
        .promo-card .btn-promo {
            background: #7cb342;
            color: #fff;
            border: none;
            padding: 12px 40px;
            border-radius: 40px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        .promo-card .btn-promo:hover {
            background: #558b2f;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(124,179,66,0.35);
        }

        /* Contact section */
        .contact-section {
            padding: 70px 0;
            background: #f8faf7;
        }
        .contact-section .contact-info-item {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 24px;
        }
        .contact-section .contact-info-item .icon-circle {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: #7cb342;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
            transition: transform 0.3s;
        }
        .contact-section .contact-info-item:hover .icon-circle { transform: scale(1.06); }
        .contact-section .contact-info-item h6 { font-weight: 600; color: #2d3e2d; margin-bottom: 2px; }
        .contact-section .contact-info-item p { color: #666; margin: 0; font-size: 0.95rem; }
        .contact-form .form-control {
            border-radius: 12px;
            padding: 14px 18px;
            border: 1px solid #e0e7e0;
            font-size: 0.95rem;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .contact-form .form-control:focus {
            border-color: #7cb342;
            box-shadow: 0 0 0 4px rgba(124,179,66,0.12);
        }
        .contact-form .btn-submit {
            background: #7cb342;
            color: #fff;
            border: none;
            padding: 14px 40px;
            border-radius: 40px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s;
        }
        .contact-form .btn-submit:hover {
            background: #558b2f;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(124,179,66,0.3);
        }

        /* Responsive tweaks */
        @media (max-width: 768px) {
            .hero { min-height: 100vh; padding: 4rem 0; }
            .hero-stats { gap: 1.5rem; }
            .stat-item .number { font-size: 1.6rem; }
            .hero-card { padding: 1.5rem; }
            .event-item { flex-direction: column; align-items: stretch; }
            .event-item .event-divider { display: none; }
            .promo-card { padding: 28px 20px; }
            .promo-card .promo-highlight { font-size: 1.6rem; }
            .contact-section .contact-info-item .icon-circle { width: 44px; height: 44px; font-size: 1rem; }
        }
        @media (max-width: 576px) {
            .hero-title { font-size: 2rem; }
            .hero-desc { font-size: 0.95rem; }
            .news-card .news-img { height: 160px; }
        }
    </style>
@endsection

@section('main')
    <main class="content" id="home">

        <!-- ═══════════ HERO (single image + particles) ═══════════ -->
        <section class="hero">
            <div class="hero-bg"></div> <!-- Replace with your own image if desired -->
            <div class="hero-particles">
                <span class="particle"></span><span class="particle"></span>
                <span class="particle"></span><span class="particle"></span>
                <span class="particle"></span><span class="particle"></span>
                <span class="particle"></span><span class="particle"></span>
                <span class="particle"></span><span class="particle"></span>
                <span class="particle"></span><span class="particle"></span>
                <span class="particle"></span><span class="particle"></span>
                <span class="particle"></span><span class="particle"></span>
                <span class="particle"></span><span class="particle"></span>
                <span class="particle"></span><span class="particle"></span>
                <span class="particle"></span><span class="particle"></span>
                <span class="particle"></span><span class="particle"></span>
            </div>
            <div class="container py-5">
                <div class="d-flex justify-content-center align-items-center gy-5">
                    <div class="hero-content">
                        <h1 class="hero-title">
                            Formez-vous aux métiers<br>
                            <span>de l'agropastoral</span>
                        </h1>
                        <p class="hero-desc">
                            CEFPREPAS est un Centre de Formation Professionnelle agréé par le Ministère de l'Emploi et de la Formation Professionnelle (MINEFOP). Nous formons des experts en agriculture, élevage, pisciculture et énergies renouvelables.
                        </p>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <div class="number" data-count="10">10+</div>
                                <div class="label">Années d'expertise</div>
                            </div>
                            <div class="stat-item">
                                <div class="number" data-count="50">50+</div>
                                <div class="label">Promotions formées</div>
                            </div>
                            <div class="stat-item">
                                <div class="number" data-count="4">4</div>
                                <div class="label">Domaines de formation</div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-5 offset-lg-1">
                        <div class="hero-card">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <h6 class="text-black">Nos programmes</h6>
                            </div>
                            <ul class="service-list-mini">
                                <li class="text-black"><i class="bi bi-tree"></i> Agriculture durable</li>
                                <li class="text-black"><i class="bi bi-shield-check"></i> Élevage et santé animale</li>
                                <li class="text-black"><i class="bi bi-people"></i> Pisciculture & aquaculture</li>
                                <li class="text-black"><i class="bi bi-sun"></i> Production de biogaz (énergie renouvelable)</li>
                                <li class="text-black"><i class="bi bi-geo-alt"></i> Gestion des ressources naturelles</li>
                            </ul>
                            <!-- <a href="{{ route('inscription') }}" class="btn card-btn w-100 justify-content-center mt-3">
                                S'inscrire maintenant <i class="bi bi-arrow-right"></i>
                            </a> --
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        

        <!-- ─── ABOUT SECTION (style modernisé) ─── -->
        <section class="about-section py-5">
            <div class="container">
                <div class="row align-items-center g-5">
                    <!-- Colonne gauche : texte -->
                    <div class="col-lg-6">
                        <span class="badge bg-success mb-3 px-3 py-2" style="font-size:0.85rem; border-radius:40px;">
                            <i class="fas fa-seedling me-1"></i> {{ __('index.about.badge') ?? 'À propos' }}
                        </span>
                        <h2 class="display-5 fw-bold text-dark" style="color:#2d3e2d;">
                            {{ __('index.about.title') }}
                        </h2>
                        <p class="lead text-muted" style="font-size:1.05rem; line-height:1.7;">
                            {{ __('index.about.text') }}
                        </p>
                        <p class="text-muted" style="font-size:1rem; line-height:1.8;">
                            {{ __('index.about.detail') ?? 'Fondé en 2018, CEFPREPAS est un centre de formation agréé par le MINEFOP. Nous formons les futurs professionnels de l\'agriculture, de l\'élevage et de la pisciculture, avec une approche alliant théorie et pratique sur le terrain.' }}
                        </p>

                        <!-- Mission / Vision / Valeurs (3 colonnes) -->
                        <div class="row g-3 mt-4">
                            <div class="col-md-4">
                                <div class="about-card h-100 p-3 rounded-3 bg-light border-0 shadow-sm">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <span class="text-success" style="font-size:1.5rem;"><i class="fas fa-bullseye"></i></span>
                                        <h5 class="fw-bold mb-0 text-dark">{{ __('index.about.mission') ?? 'Mission' }}</h5>
                                    </div>
                                    <p class="text-muted small mb-0" style="line-height:1.6;">
                                        {{ __('index.about.mission_text') ?? 'Former des professionnels compétents pour relever les défis de la sécurité alimentaire et du développement durable.' }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-card h-100 p-3 rounded-3 bg-light border-0 shadow-sm">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <span class="text-success" style="font-size:1.5rem;"><i class="fas fa-eye"></i></span>
                                        <h5 class="fw-bold mb-0 text-dark">{{ __('index.about.vision') ?? 'Vision' }}</h5>
                                    </div>
                                    <p class="text-muted small mb-0" style="line-height:1.6;">
                                        {{ __('index.about.vision_text') ?? 'Devenir un pôle d\'excellence agro-pastoral en Afrique centrale, au service de la jeunesse et du développement rural.' }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-card h-100 p-3 rounded-3 bg-light border-0 shadow-sm">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <span class="text-success" style="font-size:1.5rem;"><i class="fas fa-gem"></i></span>
                                        <h5 class="fw-bold mb-0 text-dark">{{ __('index.about.values') ?? 'Valeurs' }}</h5>
                                    </div>
                                    <p class="text-muted small mb-0" style="line-height:1.6;">
                                        {{ __('index.about.values_text') ?? 'Excellence, intégrité, proximité, innovation et durabilité au service de la formation et de la recherche.' }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('about') }}" class="btn btn-cef-green btn-lg px-5 rounded-pill">
                                <i class="fas fa-arrow-right me-2"></i> {{ __('index.about.button') }}
                            </a>
                        </div>
                    </div>

                    <!-- Colonne droite : image -->
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/student.jpg') }}" alt="{{ __('index.about.title') }}" class="img-fluid rounded-4 shadow-lg" style="object-fit:cover; max-height:500px; width:100%;">
                            <!-- Optionnel : une petite étiquette superposée -->
                            <div class="position-absolute bottom-0 start-0 p-3 bg-success bg-opacity-75 text-white rounded-bottom-4" style="border-radius: 0 0 16px 16px;">
                                <i class="fas fa-graduation-cap me-2"></i> {{ __('index.about.since') ?? 'Depuis 2018' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ PROMO PROGRAMME ═══ -->
        <section class="promo-section">
            <div class="container">
                <div class="row align-items-center g-4">
                     <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
                        <div class="promo-card">
                            <img src="{{ asset('assets/img/lab2.png') }}" alt="Laboratoire pédagogique CEFPREPAS" class="img-fluid rounded">
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                        <span class="badge bg-success mb-3 px-3 py-2" style="font-size:0.9rem; border-radius:40px;">
                            <i class="fas fa-flask me-1"></i> Laboratoire Pédagogique
                        </span>
                        <h2 class="display-5 fw-bold text-dark" style="color:#2d3e2d;">
                            Nos apprenants en pleine manipulation au laboratoire<br>
                            <span style="color:#7cb342;">– une immersion concrète dans les métiers de l’agropastoral</span>
                        </h2>
                        <p class="lead text-muted" style="font-size:1.1rem;">
                            Au cœur de notre centre, le laboratoire pédagogique est un espace dédié à la pratique et à l’expérimentation. 
                            Équipé de matériel moderne, il permet aux apprenants de réaliser des analyses, des tests et des manipulations 
                            en conditions réelles, sous la supervision de formateurs expérimentés.
                        </p>
                        <ul class="list-unstyled mt-3">
                            <li class="py-2">
                                <i class="fas fa-check-circle text-success me-2"></i> 
                                <strong>Analyses de sol, d’eau et de plantes</strong> – techniques de laboratoire appliquées
                            </li>
                            <li class="py-2">
                                <i class="fas fa-check-circle text-success me-2"></i> 
                                <strong>Microscopie et biologie</strong> – observation des micro‑organismes et des cellules
                            </li>
                            <li class="py-2">
                                <i class="fas fa-check-circle text-success me-2"></i> 
                                <strong>Tests de germination, de qualité des semences</strong> – maîtrise des protocoles
                            </li>
                            <li class="py-2">
                                <i class="fas fa-check-circle text-success me-2"></i> 
                                <strong>Travaux pratiques supervisés</strong> – encadrement personnalisé pour chaque apprenant
                            </li>
                        </ul>
                        <a href="{{ route('inscription') }}" class="btn btn-cef-green btn-lg px-5 mt-2 rounded-pill">
                            <i class="fas fa-graduation-cap me-2"></i> S'inscrire maintenant
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- ─── PROGRAMS ─── -->
        <section class="filiere-section">
            <div class="empty_space" style="height: 87px;">
                <span class="empty_space_inner"></span>
            </div>
            <div class="container">
                <h2 class="section-title text-center mb-5">{{ __('index.programs_title') }}</h2>
                <div class="row">
                    @foreach ($data['formations'] as $formation)
                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="card-item">
                                <div class="card-image" style="background-image: url({{ asset($formation->image_url) }});"></div>
                                <div class="card-front">
                                    <h3 class="card-front-title">{{ $formation->{'title_'.app()->getLocale()} }}</h3>
                                </div>
                                <div class="card-content">
                                    <h3 class="card-title">{{ $formation->{'title_'.app()->getLocale()} }}</h3>
                                    <p class="card-description" style="white-space: pre-line;">{{ Str::limit( $formation->{'description_'.app()->getLocale()}, 75) }}</p>
                                    
                                    <a href="{{ route('formations.show',$formation->id) }}" class="btn card-btn">{{ __('index.learn_more') }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


         <!-- ═══ EVENTS SECTION  ═══ -->
        <section class="events-section">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center flex-wrap mb-4" data-aos="fade-up">
                    <h2 class="section-title text-start mb-0">Événements à Venir</h2>
                    <!-- <span class="text-muted" style="font-size:0.95rem;">Participez à Nos Prochains Événements</span> -->
                </div>
                <p class="text-muted mb-4" data-aos="fade-up" data-aos-delay="50">Rejoignez-nous pour une variété d'événements passionnants qui répondent à vos intérêts et besoins d'apprentissage.</p>
                <div class="row">
                    <div class="col-md-8">
                        <div class="event-list">
                            @foreach($data['events'] as $event)
                                <div class="event-item" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                                    <div class="event-date">
                                        <h3>{{ $event->created_at->format('d') }}</h3>
                                        <span>{{ ucfirst($event->created_at->format('M')) }}, {{ $event->created_at->format('Y') }}</span>
                                    </div>
                                    <span class="event-divider"></span>
                                    <div class="event-info">
                                        <div class="meta">
                                            <span><i class="fas fa-clock"></i> {{ $event->created_at->format('H:i') }} à {{ $event->created_at->addHours(8)->format('H:i') }}</span>
                                            <span><i class="fas fa-map-marker-alt"></i> ISTAPA, Yaoundé</span>
                                        </div>
                                        <h4>{{ $event->{'title_'.app()->getLocale()} }}</h4>
                                    </div>
                                    <div class="event-action">
                                        <a href="{{ route('actualites.show', $event->id) }}" class="btn-outline-main">
                                            Rejoindre <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
        
                        <div class="text-center mt-4">
                            <a href="{{ route('actualites.index') }}" class="btn btn-outline-main rounded-pill px-5 py-2">
                                Voir Tous les Événements <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('assets/img/lab4.jpeg') }}" alt="" style="width: 100%;border-radius: 15px;">
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ NEWS SECTION (Blog) ═══ -->
        <section class="news-section">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center flex-wrap mb-4" data-aos="fade-up">
                    <h2 class="section-title text-start mb-0">Dernières Nouvelles</h2>
                    <a href="{{ route('apprenants.index') }}" class="btn btn-outline-success rounded-pill px-4">Voir tout <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
                <div class="row g-4">
                    @forelse($data['news'] as $index => $news)
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="news-card">
                                <div class="news-img" style="background-image: url('{{ asset($news->image_url ?? 'assets/img/default-news.jpg') }}');">
                                    <span class="news-date-badge">
                                        {{ \Carbon\Carbon::parse($news->date_event)->format('d') }}
                                        {{ strtoupper(\Carbon\Carbon::parse($news->date_event)->format('M')) }}
                                    </span>
                                </div>
                                <div class="news-body">
                                    <div class="news-meta">
                                        <span><i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($news->date_event)->translatedFormat('d F Y') }}</span>
                                        <!-- <span><i class="far fa-comment"></i> {{ $news->comments_count ?? 0 }}</span> -->
                                        <span><i class="far fa-eye"></i> {{ $news->views ?? 0 }}</span>
                                    </div>
                                    <h4>{{ $news->{'title_'.app()->getLocale()} }}</h4>
                                    <p>{{ Str::limit($news->{'description_'.app()->getLocale()}, 100) }}</p>
                                    <a href="{{ route('apprenants.show', $news->id) }}" class="btn-news">Lire la Suite <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="text-muted">Aucune actualité pour le moment.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- ─── TESTIMONIALS CAROUSEL ─── -->
        <section class="testimonials-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mb-4 mb-lg-0">
                        <div class="owl-carousel owl-theme testimonial-carousel">
                            @foreach($data['testimonials'] as $testimonial)
                                <div class="item">
                                    <div class="testimonial-card text-center p-4">
                                        <div class="testimonial-avatar mx-auto mb-3">
                                            @if($testimonial->image_url)
                                                <img src="{{ asset($testimonial->image_url) }}" alt="{{ $testimonial->name }}" class="rounded-circle">
                                            @else
                                                <div class="avatar-placeholder rounded-circle d-flex align-items-center justify-content-center">
                                                    {{ substr($testimonial->name, 0, 1) }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="student-info">
                                            <h4 class="student-name">{{ $testimonial->name }}</h4>
                                            <p class="student-program">{{ $testimonial->formation->{'title_'.app()->getLocale()} }}</p>
                                        </div>
                                        <blockquote class="testimonial-text">
                                            {!! strip_tags($testimonial->{'description_'.app()->getLocale()}) !!}
                                        </blockquote>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xl-5 ps-xl-5 m-auto">
                        <div class="d-flex align-items-center mb-3">
                            <span class="text-main-600 text-2xl d-flex"><i class="ph-bold ph-book-open"></i></span>
                            <h5 class="display-5 fw-bold text-dark" style="color:#2d3e2d;">{{ __('index.testimonials_title') }}<br><span style="color:#7cb342;">Ce que Dit Notre Communauté</span></h5>
                        </div>
                        <p>
                            Bienvenue dans notre section témoignages, où les membres de notre communauté universitaire partagent leurs expériences et points de vue sur la vie à CEFPREPAS. Nous vous i nvitons à nous rejoindre et à faire partie de notre parcours inspirant d'apprentissage, de croissance et d'accomplissement.
                        </p>
                    </div>
                </div>
        </div>
        </section>

        <!-- ─── STUDENT LIFE CAROUSEL ─── -->
        <!-- <section class="carousel-container">
            <div class="owl-carousel owl-theme event-caroussel">
                @foreach($data['events'] as $event)
                    <div class="item">
                        <div class="row row-flex align-items-center">
                            <div class="col-sm-7 img_col">
                                <div class="img_wrapper" style="height: 500px;">
                                    <img src="{{ asset($event->image_url) }}" alt="{{ $event->{'title_'.app()->getLocale()} }}" title="{{ $event->{'title_'.app()->getLocale()} }}" class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="content_wrapper text-center">
                                    <h5 class="text-uppercase">
                                        {{ $event->news == 1 ? __('messages.actualites') : __('messages.apprenants') }}
                                    </h5>
                                    <div class="post_cats_date">
                                        <span class="date">{{ $event->created_at->format('F j, Y') }}</span>
                                    </div>
                                    <h1>{{ $event->{'title_'.app()->getLocale()} }}</h1>
                                    <a href="{{ $event->news == 1 ? route('actualites.show', $event->id) : route('apprenants.show', $event->id) }}" class="btn btn-cef-green btn-lg">
                                        {{ __('index.events.learn_more') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section> -->

        
        <!-- ═══ CONTACT FORM ═══ -->
        <section class="contact-section">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5" data-aos="fade-right" data-aos-duration="800">
                        <h2 class="section-title text-start">Contactez-nous</h2>
                        <p class="text-muted mb-4">Nous sommes à votre disposition pour toute question relative à nos formations, inscriptions ou partenariats.</p>

                        <div class="contact-info-item">
                            <div class="icon-circle"><i class="fas fa-map-marker-alt"></i></div>
                            <div>
                                <h6>Adresse</h6>
                                <p>{{ __('messages.address') }}</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="icon-circle"><i class="fas fa-phone-alt"></i></div>
                            <div>
                                <h6>Téléphone</h6>
                                <p>+237 695566666 / +237 677444071</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="icon-circle"><i class="fas fa-envelope"></i></div>
                            <div>
                                <h6>Email</h6>
                                <p>cefprepas@outlook.com</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="icon-circle"><i class="fas fa-clock"></i></div>
                            <div>
                                <h6>Horaires</h6>
                                <p>Lun – Ven : 08:00 – 17:00</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
                        <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                            <h4 class="fw-bold mb-3">Envoyez-nous un message</h4>
                            <form class="contact-form" action="#" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Votre nom</label>
                                        <input type="text" class="form-control" placeholder="Nom complet" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Email</label>
                                        <input type="email" class="form-control" placeholder="exemple@email.com" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">Sujet</label>
                                        <input type="text" class="form-control" placeholder="Objet de votre message">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">Message</label>
                                        <textarea class="form-control" rows="5" placeholder="Votre message ici..." required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn-submit"><i class="fas fa-paper-plane me-2"></i> Envoyer le message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── PARTNERS ─── -->
        <section class="partners-section" style="height: 50vh;">
            <div class="container">
                <h2 class="section-title">{{ __('index.partners_title') }}</h2>
                <div class="owl-carousel owl-theme partner-caroussel">
                    @foreach ($data['partners'] as $partner)
                        <div class="item text-center">
                            <a href="{{$partner->link}}" target="_blank">
                                <img src="{{ asset('images/partners/'.$partner->logo) }}" 
                                alt="{{ $partner->name_en }}"  class="partner-logo" />
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>
@endsection
@section('stript')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 700,
        easing: 'ease-out-cubic',
        once: true,
        offset: 50
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const slides = document.querySelectorAll(".slide");
        const dots = document.querySelectorAll(".slide-dot");
        let currentSlide = 0;
        const slideInterval = 10000; // 10 seconds per slide
        let slideTimer;

        // Function to show a specific slide and trigger animations
        function showSlide(index) {
            // Hide all slides and reset animation state
            slides.forEach((slide) => {
                slide.classList.remove("active");
                const content = slide.querySelector(".slide-content");
                const animatables = slide.querySelectorAll(".animate-slide");

                // Reset content
                if (content) {
                    content.style.opacity = '';
                    content.style.transform = '';
                }

                // Reset text elements
                animatables.forEach(el => {
                    el.style.opacity = '0';
                    el.style.transform = 'translateY(30px)';
                });
            });

            // Remove active class from dots
            dots.forEach((dot) => dot.classList.remove("active"));

            // Show the new slide
            const slide = slides[index];
            const content = slide.querySelector(".slide-content");
            const animatables = slide.querySelectorAll(".animate-slide");

            slide.classList.add("active");
            dots[index].classList.add("active");

            // Force reflow to reset animations
            void content.offsetHeight;

            // Re-enable transitions and animate in
            content.style.transition = 'all 0.7s ease-out';
            content.style.transitionDelay = '0.2s';
            content.style.opacity = '1';
            content.style.transform = 'scale(1)';
            content.style.visibility = 'visible';

            // Animate child elements with delay
            animatables.forEach((el, i) => {
                const delay = parseFloat(el.style.animationDelay) || 0;
                el.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                setTimeout(() => {
                    el.style.opacity = '';
                    el.style.transform = '';
                    el.style.visibility = '';
                }, delay * 1000);
            });

            currentSlide = index;
        }

        // Auto-advance slides
        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        // Start slideshow
        slideTimer = setInterval(nextSlide, slideInterval);

        // Dot navigation
        dots.forEach((dot) => {
            dot.addEventListener("click", function () {
                clearInterval(slideTimer);
                const slideIndex = parseInt(this.getAttribute("data-slide"));
                showSlide(slideIndex);
                slideTimer = setInterval(nextSlide, slideInterval);
            });
        });

        // Pause on hover
        // const slideshow = document.querySelector(".hero-slideshow");
        // slideshow.addEventListener("mouseenter", () => clearInterval(slideTimer));
        // slideshow.addEventListener("mouseleave", () => {
        //     slideTimer = setInterval(nextSlide, slideInterval);
        // });

        // ✅ Trigger animation on first slide immediately on load
        // Small delay to ensure browser rendering is ready
        setTimeout(() => {
            showSlide(0);
        }, 100);
    });
</script>

<script>
    
    // Testimonials Carousel
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
            768: { items: 1 },
            992: { items: 1 }
        }
    });
    $(document).ready(function(){
        $('.partner-caroussel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            responsive: {
                0: { items: 2 },
                600: { items: 2 },
                1000: { items: 2 }
            }
        });
    });
</script>
@endsection