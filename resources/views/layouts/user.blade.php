
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>CEFPREPAS</title>
        
        <meta name="description" content="Centre de formation agréé MINEFOP à Soa, Yaoundé. Obtenez votre Diplôme (DQP) ou Certificat (CQP) en agriculture, élevage et pisciculture. Inscriptions ouvertes !" />
        <meta name="keywords" content="formation agricole Yaoundé, certification DQP CQP Cameroun, école agriculture Soa, MINEFOP élevage pisciculture, formation professionnelle agricole,centre de formation en agropastoral, agropastoral, École en agronomie, école en agropastoral, formation d'un an au cameroun, formation en élevage au cameroun, formation en pisciculture au cameroun, formation en agriculture au cameroun, formation courte durée" />

        <!-- Open Graph / Social Media Meta Tags -->
        <meta property="og:title" content="Centre de Formation Professionnelle en Elevage, Pisciculture et Agriculture à Yaoundé" />
        <meta property="og:description" content="Centre agréé MINEFOP à Soa. Formations en agriculture, élevage et pisciculture avec diplôme DQP ou certificat CQP." />
        <meta property="og:url" content="{{ url('/') }}" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="{{ asset('assets/img/Logo_CEFPREPAS.j.png') }}" />

        <!-- Canonical URL (Laravel) -->
        <link rel="canonical" href="{{ url('/') }}" />


        
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
        <link rel="shortcut icon" href="{{ asset('assets/img/Logo_CEFPREPAS.j.png') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" /> 
        <style>
            /* Custom styles for full-width mega menu */
            body {
                overflow-x: hidden;
            }
            /* Your existing styles remain unchanged */
            .navbar {
                transition: all 0.3s ease;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                z-index: 1020;
            }
            
            .navbar.scrolled {
                width: -webkit-fill-available;
                position: fixed;
                background-color: rgba(33, 37, 41, 0.95) !important;
                padding-top: 5px;
                padding-bottom: 5px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
                top: 0;
            }
            .navbar-nav > li:hover > a {
                color: #b9dda3 !important;
            }

            .navbar-nav .nav-link.active, .navbar-nav .nav-link.show
            {
                color: #b9dda3 !important;
            }
            .dropdown-item.active {
                background-color: #f8f9fa;
                color: #b9dda3;
                font-weight: 600;
            }   
            @media (max-width: 991.98px) {
                .navbar-collapse {
                    position: fixed;
                    left: 0;
                    top: 0;
                    width: 80%;
                    max-width: 300px;
                    background-color: var(--white-color);
                    padding: 20px;
                    overflow-y: auto;
                    z-index: 1000;
                    transition: transform 0.3s ease-in-out;
                    transform: translateX(-100%);
                    height: 120vh;
                }
                .navbar-collapse.show {
                    transform: translateX(0);
                }
                
                .dropdown-menu {
                    /*background-color: #495057;*/
                    border: none;
                }
                
                /*.dropdown-item {*/
                /*    color: rgba(255, 255, 255, 0.8);*/
                /*}*/
                
                .dropdown-item:hover {
                    background-color: #6c757d;
                    color: white;
                }
                
                .dropdown-divider {
                    border-color: #6c757d;
                }
            }
            
            @media (min-width: 992px) {
                .dropdown:hover .dropdown-menu {
                    display: block;
                }
            }
        </style>



<style>
 /* Mega Menu Full Width Styles */
.dropdown-mega-menu {
  position: static !important; /* Essential for full-width dropdown */
}

.mega-menu {
  width: 100vw !important;
  left: 50% !important;
  right: auto !important;
  transform: translateX(-50%) !important;
  padding: 1.5rem 0;
  border: none;
  border-radius: 0;
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
  margin: 0 !important;
  max-width: none !important;
}

.mega-menu .container {
  max-width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}

.mega-menu .row {
  margin-left: -15px;
  margin-right: -15px;
}

/* Ensure dropdown stays open on hover */
@media (min-width: 992px) {
  .dropdown-mega-menu:hover .mega-menu {
    display: block !important;
  }
}

</style>

        @yield('style')
    </head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RX7642KNY3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-RX7642KNY3');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-57KTPD6W');</script>
    <!-- End Google Tag Manager -->
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57KTPD6W"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div class="shadow-sm header_top_bar d-none d-md-block m-0">
            <div class="container">
                <div class="row p-1">
                    <div class="col-md-3 d-flex align-items-center gap-3">
                        <!-- Header top bar Socials -->
                        <div class="header_top_bar_socs">
                            <ul class="list-unstyled d-flex gap-4 mb-0">
                                <li>
                                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-9 d-flex justify-content-end align-items-center gap-3">
                        <!-- Search Icon -->
                        <div class="search-toggler-unit">
                            <div class="search-top-bar" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="menu-/-nos-formation" transform="translate(-745.000000, -17.000000)" fill="#5F625E" stroke="#5F625E" stroke-width="0.605">
                                            <path
                                                d="M753.234892,31.7107492 C749.665799,31.7107492 746.76159,28.8063555 746.76159,25.2362407 C746.76159,21.6661258 749.665799,18.7616964 753.234892,18.7616964 C756.803984,18.7616964 759.708193,21.6660901 759.708193,25.2362407 C759.708193,28.8063912 756.803984,31.7107492 753.234892,31.7107492 M764,35.4648166 L758.604719,30.0684942 C759.759849,28.785718 760.469783,27.0944042 760.469783,25.2362049 C760.469748,21.2461984 757.22419,18 753.234892,18 C749.245593,18 746,21.2461984 746,25.2362407 C746,29.2262829 749.245593,32.4724813 753.234892,32.4724813 C755.092744,32.4724813 756.783707,31.7624145 758.06628,30.6070696 L763.458205,36 C763.638875,35.8216531 763.819544,35.6433777 764,35.4648166"
                                                id="Fill-1"
                                            ></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        
                        <!-- Brochure Download Button -->
                        <a class="btn btn-secondary text-decoration-none btn-grey" target="_blank" href="{{ asset('assets/doc/prospectus_cefprepas.pdf') }}" title="{{ __('messages.download_brochure') }}"> 
                            <i class="fa-solid fa-arrow-down"></i> {{ __('messages.download_brochure') }} 
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ asset('assets/img/Logo_CEFPREPAS.JPG') }}" alt="CEFPREPAS" style="height: 10vh; max-height: 70px;" />
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" 
                        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link @if(request()->routeIs('index')) active @endif" href="{{ route('index') }}">{{ __('messages.home') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle @if(request()->routeIs(['about', 'atout', 'documents.index', 'emploie', 'photo', 'promoteur', 'apprenants.index'])) active @endif" 
                            href="#" id="cefprepasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                CEFPREPAS
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cefprepasDropdown">
                                <li><a class="dropdown-item @if(request()->routeIs('about')) active @endif" href="{{ route('about') }}">{{ __('messages.about') }}</a></li>
                                <li><a class="dropdown-item @if(request()->routeIs('atout')) active @endif" href="{{ route('atout') }}">{{ __('messages.atout') }}</a></li>
                                <li><a class="dropdown-item @if(request()->routeIs('documents.index')) active @endif" href="{{ route('documents.index') }}">{{ __('messages.document') }}</a></li>
                                <li><a class="dropdown-item @if(request()->routeIs('emploie')) active @endif" href="{{ route('emploie') }}">{{ __('messages.emploie') }}</a></li>
                                <li><a class="dropdown-item @if(request()->routeIs('photo')) active @endif" href="{{ route('photo') }}">{{ __('messages.photo') }}</a></li>
                                <li><a class="dropdown-item @if(request()->routeIs('promoteur')) active @endif" href="{{ route('promoteur') }}">{{ __('messages.promoteur') }}</a></li>
                                <li><a class="dropdown-item @if(request()->routeIs('apprenants.index')) active @endif" href="{{ route('apprenants.index') }}">{{ __('messages.apprenants') }}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle @if(request()->routeIs(['formations.index', 'programme', 'diplome'])) active @endif" 
                            href="#" id="formationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('messages.formations') }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="formationsDropdown">
                                <li><a class="dropdown-item @if(request()->routeIs('formations.index')) active @endif" href="{{ route('formations.index') }}">{{ __('messages.formations') }}</a></li>
                                <li><a class="dropdown-item @if(request()->routeIs('programme')) active @endif" href="{{ route('programme') }}">{{ __('messages.programme') }}</a></li>
                                <li><a class="dropdown-item @if(request()->routeIs('diplome')) active @endif" href="{{ route('diplome') }}">{{ __('messages.diplome') }}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->routeIs('actualites.index')) active @endif" href="{{ route('actualites.index') }}">{{ __('messages.actualites') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->routeIs('contact')) active @endif" href="{{ route('contact') }}">{{ __('messages.contact') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-cef-green text-white rounded-pill px-4 @if(request()->routeIs('inscription')) active @endif" 
                            href="{{ route('inscription') }}" style="padding: 0.5rem 1.5rem;">
                                {{ __('messages.inscription') }}
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="fi fi-{{ app()->getLocale() == 'en' ? 'gb' : app()->getLocale() }} me-1"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                                @foreach(config('app.available_locales') as $locale => $name)
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center @if(app()->getLocale() == $locale) active @endif" 
                                        href="{{ route('locale.set', $locale) }}">
                                            <span class="fi fi-{{ $locale == 'en' ? 'gb' : $locale }} me-2"></span>
                                            {{ $name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content -->
        @yield('main')
        
        <!-- Footer -->
       <footer class="footer footer-light">
            <div class="container">
                <div class="row g-4">
                    <!-- Colonne 1 : Logo + description + réseaux -->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <a href="{{ route('index') }}" class="footer-logo">
                                <img src="{{ asset('assets/img/Logo_CEFPREPAS.JPG') }}" alt="CEFPREPAS" style="height: 60px;">
                            </a>
                            <p class="mt-3 text-muted small">
                                {{ __('messages.institute_description') }}
                            </p>
                            <ul class="social-links list-unstyled d-flex gap-3 mt-3">
                                <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Colonne 2 : Liens rapides (Home, About, etc.) -->
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget">
                            <h5 class="fw-bold">{{ __('messages.home') }}</h5>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('about') }}">{{ __('messages.about') }}</a></li>
                                <li><a href="{{ route('formations.index') }}">{{ __('messages.formations') }}</a></li>
                                <li><a href="{{ route('inscription') }}">{{ __('messages.online_registration') }}</a></li>
                                <li><a href="{{ route('contact') }}">{{ __('messages.contact') }}</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Colonne 3 : Mot du Promoteur + blog, galerie, etc. -->
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget">
                            <h5 class="fw-bold">{{ __('messages.promoteur_word') }}</h5>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('actualites.index') }}">{{ __('messages.news_blog') }}</a></li>
                                <li><a href="{{ route('apprenants.index') }}">{{ __('messages.student_life') }}</a></li>
                                <li><a href="{{ route('photo') }}">{{ __('messages.photo_gallery') }}</a></li>
                                <li><a href="{{ route('emploie') }}">{{ __('messages.internship_jobs') }}</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Colonne 4 : Contact + Newsletter -->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h5 class="fw-bold">{{ __('messages.contact') }}</h5>
                            <address class="text-muted small">
                                <i class="fas fa-map-marker-alt me-2 text-cef-green"></i> {{ __('messages.address') }}<br>
                                <i class="fas fa-phone me-2 text-cef-green"></i> +237 695566666 / +237 677444071<br>
                                <i class="fas fa-envelope me-2 text-cef-green"></i> cefprepas@outlook.com
                            </address>
                            <!-- Formulaire newsletter -->
                            <form action="#" class="mt-3">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Votre email" aria-label="Newsletter">
                                    <button class="btn btn-cef-green" type="submit"><i class="fas fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <hr class="my-4">
                <div class="row align-items-center">
                    <div class="col-md-6 text-md-start text-center">
                        <p class="text-muted small mb-0">&copy; {{ date('Y') }} CEFPREPAS. Tous droits réservés.</p>
                    </div>
                    <div class="col-md-6 text-md-end text-center">
                        <a href="#" class="text-muted text-decoration-none small me-3">Politique de confidentialité</a>
                        <a href="#" class="text-muted text-decoration-none small">Conditions d'utilisation</a>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const navbar = document.querySelector('.navbar');
                
                // Close mobile sidebar when clicking outside
                document.addEventListener('click', function(event) {
                    const isClickInsideNavbar = navbar.contains(event.target);
                    const isNavbarToggler = event.target.classList.contains('navbar-toggler') || 
                                        event.target.closest('.navbar-toggler');
                    
                    if (!isClickInsideNavbar && !isNavbarToggler && window.innerWidth < 992) {
                        const navbarCollapse = document.querySelector('.navbar-collapse');
                        if (navbarCollapse.classList.contains('show')) {
                            const toggler = document.querySelector('.navbar-toggler');
                            bootstrap.Collapse.getInstance(navbarCollapse).hide();
                        }
                    }
                });
                
            });
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Sidebar functionality
                const sidebar = document.getElementById('sidebar');
                const sidebarToggle = document.getElementById('sidebarToggle');
                const sidebarClose = document.getElementById('sidebarClose');
                const sidebarOverlay = document.getElementById('sidebarOverlay');
                
                // Toggle sidebar
                sidebarToggle.addEventListener('click', function() {
                    sidebar.classList.add('show');
                    sidebarOverlay.classList.add('show');
                    document.body.style.overflow = 'hidden';
                });
                
                // Close sidebar
                sidebarClose.addEventListener('click', function() {
                    sidebar.classList.remove('show');
                    sidebarOverlay.classList.remove('show');
                    document.body.style.overflow = '';
                });
                
                // Close sidebar when clicking overlay
                sidebarOverlay.addEventListener('click', function() {
                    sidebar.classList.remove('show');
                    sidebarOverlay.classList.remove('show');
                    document.body.style.overflow = '';
                });
                
                // Dropdown functionality
                const dropdownItems = document.querySelectorAll('.has-dropdown');
                
                dropdownItems.forEach(item => {
                    const link = item.querySelector('.sidebar-link');
                    
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        item.classList.toggle('active');
                        const dropdown = item.querySelector('.sidebar-dropdown');
                        dropdown.classList.toggle('show');
                    });
                });
                
                // Update navbar behavior to work with new sidebar
                function updateNavbar() {
                    const $navbar = $("#mainNav");
                    if ($(window).scrollTop() > 100) {
                        $navbar.removeClass("transparent").addClass("non-transparent");
                    } else {
                        $navbar.removeClass("non-transparent").addClass("transparent");
                    }
                }
                
                $(window).scroll(updateNavbar);
                // updateNavbar(); // Initialize on load
            });
        </script>


        @yield('stript')
    </body>
</html>