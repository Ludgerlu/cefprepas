@extends('layouts.user')

@section('style')
<style>


.testimonial-avatar {
    width: 80px;
    height: 80px;
    margin: 0 auto;
}

.testimonial-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border: 3px solid #b9dda3;
}

.avatar-placeholder {
    width: 100%;
    height: 100%;
    background-color: #b9dda3;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    font-weight: bold;
}

.student-info {
    padding-left: 20px;
}

.student-name {
    font-size: 1.3rem;
    margin-bottom: 5px;
    color: #333;
}

.student-program {
    font-size: 0.9rem;
    color: #676767;
    font-style: italic;
}

.testimonial-text {
    font-size: 1rem;
    line-height: 1.6;
    color: #555;
    padding: 15px;
    background-color: #f8f9fa;
    border-radius: 8px;
    position: relative;
}

.testimonial-text::before {
    content: '"';
    font-size: 3rem;
    color: #b9dda3;
    position: absolute;
    left: 5px;
    top: -15px;
    line-height: 1;
}

.testimonial-text::after {
    content: '"';
    font-size: 3rem;
    color: #b9dda3;
    position: absolute;
    right: 5px;
    bottom: -25px;
    line-height: 1;
}
</style>
@endsection

@section('main')
<main class="content" id="home">
    <!-- Slideshow Section -->
    <section  class="hero-slideshow">
        @foreach (__('index.slides') as $index => $slide)
        <!-- Slide {{ $index + 1 }} -->
        <div
            class="slide {{ $index === 0 ? 'active' : '' }}"
            style="
                background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset($slide['image']) }}');
                background-size: cover;
                background-position: center;
            "
        >
            <div class="slide-content">
                <h1 class="animate-slide" data-animation="slide-up">{{ $slide['title'] }}</h1>
                <p class="animate-slide" data-animation="fade-up" style="animation-delay: 0.3s;">{{ $slide['text'] }}</p>
                <a href="{{ route('formations.index') }}" class="btn btn-cef-green animate-slide" style="animation-delay: 0.6s;">{{ $slide['button'] }}</a>
            </div>
        </div>
        @endforeach

        <!-- Slide Navigation Dots -->
        <div class="slide-nav">
            @foreach (__('index.slides') as $index => $slide)
            <span class="slide-dot {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}"></span>
            @endforeach
        </div>
    </section>
    
    <!-- About Section - responsive -->
    <section class="about-section py-5 bg-light">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-1 order-2 text-center mb-4 mb-lg-0">
                    <h1 class="display-5 fw-bold mb-4">{{ __('index.about.title') }}</h1>
                    <p class="lead mb-4">
                        {{ __('index.about.text') }}
                    </p>
                    <a href="#" class="btn btn-cef-green btn-lg px-4">{{ __('index.about.button') }}</a>
                </div>

                <div class="col-lg-7 order-lg-2 order-1 mb-3">
                    <div class="image">
                        <img src="{{ asset('assets/img/student.jpg') }}" alt="{{ __('index.about.title') }}" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filières Section - responsive cards -->
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

    <section class="testimonials-section">
        <!--<div class="empty_space" style="height: 87px;">-->
        <!--    <span class="empty_space_inner"></span>-->
        <!--</div>-->
        <div class="container">
            <h2 class="section-title">{{ __('index.testimonials_title') }}</h2>

            <div class="testimonial-slider">
                @foreach($data['testimonials'] as $index => $testimonial)
                    <div class="testimonial-slide {{ $index === 0 ? 'active' : '' }}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="testimonial-card">
                                    <!-- Avatar and Student Info Row -->
                                    <div class="row align-items-center">
                                        <!-- Avatar Column -->
                                        <div class="col-md-2 text-center">
                                            <div class="testimonial-avatar">
                                                @if($testimonial->image_url)
                                                    <img src="{{ asset($testimonial->image_url) }}" alt="{{ $testimonial->name }}" class="img-fluid rounded-circle">
                                                @else
                                                    <div class="avatar-placeholder rounded-circle">
                                                        {{ substr($testimonial->name, 0, 1) }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        <!-- Student Info Column -->
                                        <div class="col-md-10">
                                            <div class="student-info">
                                                <h3 class="student-name">{{ $testimonial->name }}</h3>
                                                <p class="student-program">{{ $testimonial->formation->{'title_'.app()->getLocale()} }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Testimonial Text -->
                                    <blockquote class="testimonial-text mt-3">
                                        {!! strip_tags($testimonial->{'description_'.app()->getLocale()}) !!} 
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Navigation Dots -->
                <div class="slider-dots">
                    @foreach($data['testimonials'] as $index => $testimonial)
                    <span class="dot {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}"></span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="carousel-container">
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
</section>

    <section class="partners-section" style="height: 50vh;">
        <div class="container">
            <h2 class="section-title">{{ __('index.partners_title') }}</h2>
            <div class="owl-carousel owl-theme partner-caroussel">
                @foreach ($data['partners'] as $partner)
                    <div class="item text-center">
                        <a href="{{$partner->link}}" target="_blank">
                            <img src="{{ asset('public/images/partners/'.$partner->logo) }}" 
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
                    content.style.visibility = 'hidden';
                    content.style.transition = 'none';
                }

                // Reset text elements
                animatables.forEach(el => {
                    el.style.opacity = '0';
                    el.style.transform = 'translateY(30px)';
                    el.style.visibility = 'hidden';
                    el.style.transition = 'none';
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
    $(document).ready(function(){
        $('.event-caroussel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            responsive: {
                0: { items: 1 },
                600: { items: 1 },
                1000: { items: 1 }
            }
        });
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