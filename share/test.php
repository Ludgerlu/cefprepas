
<div class="masterstudy-authorization-modal" style="opacity: 0;">
            <div class="masterstudy-authorization-modal__wrapper">
                <div class="masterstudy-authorization-modal__container">
                    <span class="masterstudy-authorization-modal__close"></span>
                    <div class="masterstudy-authorization masterstudy-authorization_style-modal masterstudy-authorization_login">
                        <div class="masterstudy-authorization__wrapper">
                            <div class="masterstudy-authorization__header">
                                <span class="masterstudy-authorization__header-title"> Sign In </span>
                            </div>
                            <div id="masterstudy-authorization-form-login" class="masterstudy-authorization__form">
                                <div class="masterstudy-authorization__form-wrapper">
                                    <div class="masterstudy-authorization__form-field">
                                        <input type="text" name="user_login" class="masterstudy-authorization__form-input" placeholder="Enter email or username" />
                                    </div>
                                    <div class="masterstudy-authorization__form-field">
                                        <input type="password" name="user_password" class="masterstudy-authorization__form-input masterstudy-authorization__form-input_pass" placeholder="Entrez le mot de passe" />
                                        <span class="masterstudy-authorization__form-show-pass"></span>
                                    </div>
                                </div>
                            </div>

                            <div id="masterstudy-authorization-form-register" class="masterstudy-authorization__form">
                                <div class="masterstudy-authorization__form-wrapper">
                                    <div class="masterstudy-authorization__form-field">
                                        <input type="text" name="register_user_email" class="masterstudy-authorization__form-input" placeholder="Enter your email" />
                                    </div>
                                    <div class="masterstudy-authorization__form-field">
                                        <input type="text" name="register_user_login" class="masterstudy-authorization__form-input" placeholder="Enter username" />
                                    </div>
                                    <div class="masterstudy-authorization__form-field">
                                        <input type="password" name="register_user_password" class="masterstudy-authorization__form-input masterstudy-authorization__form-input_pass" placeholder="Entrez le mot de passe" />
                                        <span class="masterstudy-authorization__form-show-pass"></span>
                                        <span class="masterstudy-authorization__form-explain-pass">
                                            The password must have a minimum of 8 characters of numbers and letters, contain at least 1 capital letter, and should not exceed 20 characters
                                        </span>
                                    </div>
                                    <div class="masterstudy-authorization__form-field">
                                        <input type="password" name="register_user_password_re" class="masterstudy-authorization__form-input masterstudy-authorization__form-input_pass" placeholder="Repeat password" />
                                        <span class="masterstudy-authorization__form-show-pass"></span>
                                    </div>
                                    <div class="masterstudy-authorization__instructor">
                                        <div class="masterstudy-authorization__checkbox">
                                            <input type="checkbox" name="be_instructor" id="masterstudy-authorization-instructor" />
                                            <span class="masterstudy-authorization__checkbox-wrapper"></span>
                                        </div>
                                        <span class="masterstudy-authorization__instructor-text"> I want to sign up as instructor </span>
                                    </div>
                                    <div class="masterstudy-authorization__instructor-container">
                                        <div class="masterstudy-authorization__form-field">
                                            <input type="text" name="degree" class="masterstudy-authorization__form-input" placeholder="Saisir le niveau" />
                                        </div>
                                        <div class="masterstudy-authorization__form-field">
                                            <input type="text" name="expertize" class="masterstudy-authorization__form-input" placeholder="Enter expertize" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="masterstudy-authorization__actions">
                                <div class="masterstudy-authorization__actions-remember">
                                    <div class="masterstudy-authorization__checkbox">
                                        <input type="checkbox" name="masterstudy-authorization-remember" id="masterstudy-authorization-remember" />
                                        <span class="masterstudy-authorization__checkbox-wrapper"></span>
                                    </div>
                                    <span class="masterstudy-authorization__checkbox-title"> Se souvenir de moi </span>
                                </div>

                                <a href="#" class="masterstudy-button masterstudy-button_style-primary masterstudy-button_size-sm" data-id="masterstudy-authorization-login-button">
                                    <span class="masterstudy-button__title">Sign In</span>
                                </a>

                                <a href="#" class="masterstudy-button masterstudy-button_style-primary masterstudy-button_size-sm" data-id="masterstudy-authorization-register-button">
                                    <span class="masterstudy-button__title">S&#039;inscrire</span>
                                </a>
                            </div>
                        </div>
                        <div class="masterstudy-authorization__restore">
                            <div class="masterstudy-authorization__restore-header">
                                <span class="masterstudy-authorization__restore-header-back"></span>
                                <span class="masterstudy-authorization__restore-header-title"> Restore password </span>
                            </div>
                            <div id="masterstudy-authorization-form-restore" class="masterstudy-authorization__form">
                                <div class="masterstudy-authorization__form-wrapper">
                                    <div class="masterstudy-authorization__form-field">
                                        <input type="text" name="restore_user_login" class="masterstudy-authorization__form-input" placeholder="Enter your email" />
                                    </div>
                                </div>
                            </div>
                            <div class="masterstudy-authorization__actions">
                                <a href="#" class="masterstudy-button masterstudy-button_style-primary masterstudy-button_size-sm" data-id="masterstudy-authorization-restore-button">
                                    <span class="masterstudy-button__title">Send reset link</span>
                                </a>
                            </div>
                        </div>

                        <div id="masterstudy-authorization-restore-pass" class="masterstudy-authorization__send-mail">
                            <div class="masterstudy-authorization__send-mail-icon-wrapper">
                                <span class="masterstudy-authorization__send-mail-icon"></span>
                            </div>
                            <span class="masterstudy-authorization__send-mail-content">
                                <span class="masterstudy-authorization__send-mail-content-title"> Password reset link sent </span>
                                <span class="masterstudy-authorization__send-mail-content-subtitle"> to your email </span>
                            </span>

                            <a href="#" class="masterstudy-button masterstudy-button_style-primary masterstudy-button_size-sm" data-id="masterstudy-authorization-close-button">
                                <span class="masterstudy-button__title">Fermer</span>
                            </a>
                        </div>

                        <div class="masterstudy-authorization__instructor-confirm">
                            <div class="masterstudy-authorization__instructor-confirm-icon-wrapper">
                                <span class="masterstudy-authorization__instructor-confirm-icon"></span>
                            </div>
                            <span class="masterstudy-authorization__instructor-confirm-title"> Your application is sent </span>
                            <span class="masterstudy-authorization__instructor-confirm-instructions"> We&#039;ll send you an email as soon as your application is approved. </span>
                            <span class="masterstudy-authorization__instructor-confirm-actions">
                                <a href="user-account/index.html" class="masterstudy-button masterstudy-button_style-primary masterstudy-button_size-sm" data-id="masterstudy-authorization-instructor-confirm-button">
                                    <span class="masterstudy-button__title">Go to Profile</span>
                                </a>
                            </span>
                        </div>
                        <div class="masterstudy-authorization__switch">
                            <div class="masterstudy-authorization__switch-wrapper">
                                <div class="masterstudy-authorization__switch-account">
                                    <span class="masterstudy-authorization__switch-account-title"> No account? </span>
                                    <a href="#" id="masterstudy-authorization-sign-up" class="masterstudy-authorization__switch-account-link"> S&#039;inscrire </a>
                                    <a href="#" id="masterstudy-authorization-sign-in" class="masterstudy-authorization__switch-account-link"> Sign In </a>
                                </div>
                                <span class="masterstudy-authorization__switch-lost-pass"> Mot de passe perdu </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer id="footer" class="parallax-off">
            <div id="emailSubsribeUP">
                <!--Start Newsletter Style1-->
                <section class="newsletter-style1">
                    <div class="auto-container">     
                        <div class="sec-title text-center">        
                        <h2 style="color:white;">Ne manquez rien de notre actualité ! </h2>
                    </div>
                    <div class="row">
                        <h2 style="align-content:center;"></h2>
                                
                        <!--Start Newsletter Style1 Title-->
                        <div class="col-lg-4">
                            <div class="newsletter-style1__title">
                                <h2>Inscription à<br /> la newsletter</h2>

                            </div>
                        </div>
                        <!--End Newsletter Style1 Title-->

                        <!--Start Newsletter Style1 Form-->
                        <div class="col-lg-8">
                            <div class="newsletter-style1__form">
                                <form action="#" method="get" class="comment-one__form contact-form-validated"
                                    novalidate="novalidate">
                                    <div class="newsletter-style1__form-inner">
                                        <ul>
                                            <li>
                                                <div class="comment-form__input-box">
                                                    <input name="subscriber_Email" type="text" id="subscriber_Email" placeholder="Votre adresse e-mail" />
                                                </div>
                                            </li>
                                        </ul>
                                        
                                        </div>
                                        <div class="newsletter-style1__form-btn">                                         
                                                <input type="submit" name="subscriber_submit_Btn" value="Souscrire" id="subscriber_submit_Btn" class="btn-one newsletter-style1__form-btn" data-loading-text="Please wait..." />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--End Newsletter Style1 Form-->               
                    </div>
                    </div>
                </section>
                <!--End Newsletter Style1-->
            </div>
            <div class="footer_wrapper">
                <div id="footer_bottom">
                    <div class="footer_widgets_wrapper kek text-normal">
                        <div class="container">
                            <div class="widgets cols_4 clearfix">
                                <div class="footer_top_sidebar">
                                    <aside id="media_image-6" class="widget widget_media_image">
                                        <img
                                            width="278"
                                            height="300"
                                            src="wp-content/uploads/2021/11/Picto_datadocke-278x300.jpg"
                                            class="image wp-image-5189 attachment-medium size-medium"
                                            alt="Accueil"
                                            style="max-width: 100%; height: auto;"
                                            decoding="async"
                                            loading="lazy"
                                            srcset="
                                                https://www.ingenieurs2000.com/wp-content/uploads/2021/11/Picto_datadocke-278x300.jpg 278w,
                                                https://www.ingenieurs2000.com/wp-content/uploads/2021/11/Picto_datadocke-600x647.jpg 600w,
                                                https://www.ingenieurs2000.com/wp-content/uploads/2021/11/Picto_datadocke.jpg         716w
                                            "
                                            sizes="(max-width: 278px) 100vw, 278px"
                                        />
                                    </aside>
                                    <aside id="media_image-5" class="widget widget_media_image">
                                        <img
                                            width="300"
                                            height="300"
                                            src="wp-content/uploads/2022/01/QUALIOPI-Ingenieurs2000-avec-Mention-300x300.png"
                                            class="image wp-image-33767 attachment-medium size-medium"
                                            alt="Accueil"
                                            style="max-width: 100%; height: auto;"
                                            decoding="async"
                                            loading="lazy"
                                            srcset="
                                                https://www.ingenieurs2000.com/wp-content/uploads/2022/01/QUALIOPI-Ingenieurs2000-avec-Mention-300x300.png 300w,
                                                https://www.ingenieurs2000.com/wp-content/uploads/2022/01/QUALIOPI-Ingenieurs2000-avec-Mention-150x150.png 150w,
                                                https://www.ingenieurs2000.com/wp-content/uploads/2022/01/QUALIOPI-Ingenieurs2000-avec-Mention-75x75.png    75w,
                                                https://www.ingenieurs2000.com/wp-content/uploads/2022/01/QUALIOPI-Ingenieurs2000-avec-Mention-129x129.png 129w,
                                                https://www.ingenieurs2000.com/wp-content/uploads/2022/01/QUALIOPI-Ingenieurs2000-avec-Mention-69x69.png    69w,
                                                https://www.ingenieurs2000.com/wp-content/uploads/2022/01/QUALIOPI-Ingenieurs2000-avec-Mention.png         500w
                                            "
                                            sizes="(max-width: 300px) 100vw, 300px"
                                        />
                                    </aside>
                                    <aside id="media_image-7" class="widget widget_media_image">
                                        <img
                                            width="300"
                                            height="81"
                                            src="wp-content/uploads/2023/01/LOGO-IDF-300x81.png"
                                            class="image wp-image-44788 attachment-medium size-medium"
                                            alt="Accueil"
                                            style="max-width: 100%; height: auto;"
                                            decoding="async"
                                            loading="lazy"
                                            srcset="
                                                https://www.ingenieurs2000.com/wp-content/uploads/2023/01/LOGO-IDF-300x81.png 300w,
                                                https://www.ingenieurs2000.com/wp-content/uploads/2023/01/LOGO-IDF-322x87.png 322w,
                                                https://www.ingenieurs2000.com/wp-content/uploads/2023/01/LOGO-IDF.png        326w
                                            "
                                            sizes="(max-width: 300px) 100vw, 300px"
                                        />
                                    </aside>
                                </div>
                                <div class="footer_bottom_sidebar">
                                    <aside id="nav_menu-3" class="widget widget_nav_menu">
                                        <div class="menu-footer-col2-container">
                                            <ul id="menu-footer-col2" class="menu">
                                                <li id="menu-item-5186" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-5186">
                                                    <a rel="privacy-policy" href="mentions-legales/index.html">Mentions Légales</a>
                                                </li>
                                                <li id="menu-item-18299" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18299">
                                                    <a href="https://app.hub3e.com/landing-page/8/candidature-ingenieurs-2000">Candidatez</a>
                                                </li>
                                                <li id="menu-item-18750" class="popupform menu-item menu-item-type-custom menu-item-object-custom menu-item-18750"><a href="#">Téléchargez la brochure</a></li>
                                            </ul>
                                        </div>
                                    </aside>
                                    <aside id="nav_menu-2" class="widget widget_nav_menu">
                                        <div class="menu-footer-col1-container">
                                            <ul id="menu-footer-col1" class="menu">
                                                <li id="menu-item-5179" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5179"><a href="index.php">Accuille</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5181"> <a href="about.php">A propos de nous</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5181"> <a href="formation.php">Nos filières</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5181"><a href="inscription.php">Inscription en ligne</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5181">  <a href="contact.php">Contact</a></li>  
                                            </ul>
                                        </div>
                                    </aside>
									<aside id="nav_menu-0" class="widget widget_nav_menu">
                                        <div class="menu-footer-col1-container">
                                            <ul id="menu-footer-col0" class="menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5181"> <a href="promoteur.php">Mot du Promoteur</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5181"> <a href="actu.php">Blog d'actualites </a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5181"> <a href="etudiant.php">vie des etudiants </a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5181"> <a href="galerie.php"> Galerie photo </a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5181"><a href="actu.php"> NEWS</a></li>
                                            </ul>
                                        </div>
                                    </aside>
                                    
                                    <aside id="custom_html-2" class="widget_text widget widget_nav_menu">
                                        <div class="menu-footer-col2-container">
											
											<ul class="menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-5186">
                                                    <a rel="privacy-policy" href="#"> Ebogo I - derrière<br /> Radio Bonne Nouvelle</a>
                                                </li>
											</ul>
                                            <div class="media_image-1">
												<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.36518455444!2d11.58648307302863!3d3.9448891477500307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bc77573bf97eb%3A0x6bda6343ef0c76e7!2sCEFPREPAS!5e0!3m2!1sfr!2scm!4v1712879792605!5m2!1sfr!2scm" width="350" height="260" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        
                                            </div>
                                        </div>
                                    </aside>
                                    <aside id="stm_text-2" class="widget stm_wp_widget_text">
                                        <div class="textwidget">
                                            <script>
                                                jQuery(document).ready(function ($) {
                                                    jQuery('iframe[src*="youtube.com"]').each(function () {
                                                        jQuery(this).parent().addClass("youtubevideo");
                                                    });
                                                });
                                            </script>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="footer_copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-4">
                                <div class="clearfix">
                                    <div class="pull-left xs-pull-left">
                                        <!-- Header top bar Socials -->
                                        <div class="pull-left">
                                            <div class="copyright_socials">
                                                <ul class="clearfix">
                                                    <li>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right xs-pull-left hidden-sm hidden-xs">
                                        <ul class="footer_menu heading_font clearfix"></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-8">
                                <div class="clearfix">
                                    <div class="copyright_text">©Copyright @2024 CEFPREPAS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="footer_copyright2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-8">
                                <div class="clearfix">
                                    <div class="copyright_text">©Copyright @2024 CEFPREPAS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Searchform -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body heading_font">
                        <div class="search-title">Rechercher</div>
                        <form role="search" method="get" id="searchform" action="#">
                            <div class="search-wrapper">
                                <input placeholder="Commencer à écrire ici…" type="text" class="form-control search-input" value="" name="s" id="s" />
                                <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var cf7_custom_image = "wp-content/themes/md3-child/assets/img/index.html";
            var daysStr = "Jours";
            var hoursStr = "Heures";
            var minutesStr = "Minutes";
            var secondsStr = "Secondes";
        </script>

        <script type="text/javascript">
            window.RS_MODULES = window.RS_MODULES || {};
            window.RS_MODULES.modules = window.RS_MODULES.modules || {};
            window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
            window.RS_MODULES.defered = true;
            window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
            window.RS_MODULES.type = "compiled";
        </script>
        
        <script>
            var authorization_data, authorization_settings;

            if (typeof authorization_data === "undefined") {
                authorization_data = {
                    register_nonce: "377bb35445",
                    instructor_nonce: "c1e94aeae2",
                    login_nonce: "97502c0973",
                    restore_nonce: "1e63d49c97",
                    ajax_url: "https://www.ingenieurs2000.com/wp-admin/admin-ajax.php",
                    email_confirmation: "",
                    recaptcha_site_key: "",
                    default_fields: [],
                    additional_fields: [],
                    instructor_fields: [],
                    only_for_instructor: "",
                    user_account_page: "https://www.ingenieurs2000.com/user-account/",
                    instructor_premoderation: "1",
                };
            }
            if (typeof authorization_settings === "undefined") {
                authorization_settings = {
                    register_mode: "",
                    titles: { login: { main: "Sign In", account: "No account?", separator: "or sign in with email" }, register: { main: "S'inscrire", account: "Have account?", separator: "or sign up with email" } },
                };
            }
        </script>
        
        <!-- Matomo -->
        <script type="text/javascript">
            var _paq = (window._paq = window._paq || []);
            _paq.push(["trackPageView"]);
            _paq.push(["enableLinkTracking"]);
            _paq.push(["alwaysUseSendBeacon"]);
            _paq.push(["setTrackerUrl", "\/\/www.ingenieurs2000.com\/wp-content\/plugins\/matomo\/app\/matomo.php"]);
            _paq.push(["setSiteId", "1"]);
            var d = document,
                g = d.createElement("script"),
                s = d.getElementsByTagName("script")[0];
            g.type = "text/javascript";
            g.async = true;
            g.src = "\/\/www.ingenieurs2000.com\/wp-content\/uploads\/matomo\/matomo.js";
            s.parentNode.insertBefore(g, s);
        </script>
        <!-- End Matomo Code -->
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                document.addEventListener(
                    "wpcf7mailsent",
                    function (event) {
                        if (event.detail.contactFormId == "5") {
                            if ($("body #wpcf7-f5-o1 .documentation-required").length) {
                                window.open($("body #wpcf7-f5-o1 .documentation-required option:selected").val(), "_blank");
                            }
                        } else {
                            if ($("body .documentation-required").length) {
                                window.open($("body .documentation-required option:selected").val(), "_blank");
                            }
                        }
                    },
                    false
                );
            });
        </script>
        <script type="text/html" id="wpb-modifications"></script>
        <link rel="stylesheet" id="vc_google_fonts_abril_fatfaceregular-css" href="http://fonts.googleapis.com/css?family=Abril+Fatface%3Aregular&amp;subset=latin&amp;ver=6.5" type="text/css" media="all" />
        <link rel="stylesheet" id="stm-image_box-style_3-css" href="wp-content/themes/md3/assets/css/vc_modules/image_box/style_36aec.css?ver=3.0" type="text/css" media="all" />
        <style id="stm-image_box-style_3-inline-css" type="text/css">
            .module__fed00e32e0fcbabe978b5ae5ed6bece7 .stm_image_box__icon {
                background-color: #eff5e0;
            }
            .module__2fd14b2351c397180168a03073abcb4a .stm_image_box__icon {
                background-color: #f4f8ec;
            }
            .module__746044852c9fb1fae00765bab31273de .stm_image_box__icon {
                background-color: #f4f8ec;
            }
            .module__162a5d5f235cac3d6952700e93b84f23 .stm_image_box__icon {
                background-color: #f4f8ec;
            }
        </style>
        <link rel="stylesheet" id="lightbox2-css" href="wp-content/plugins/js_composer/assets/lib/lightbox2/dist/css/lightbox.mine1b2.css?ver=6.9.0" type="text/css" media="all" />
        <link rel="stylesheet" id="vc_pageable_owl-carousel-css-css" href="wp-content/plugins/js_composer/assets/lib/owl-carousel2-dist/assets/owl.mine1b2.css?ver=6.9.0" type="text/css" media="all" />
        <link rel="stylesheet" id="vc_animate-css-css" href="wp-content/plugins/js_composer/assets/lib/bower/animate-css/animate.mine1b2.css?ver=6.9.0" type="text/css" media="all" />
        <link rel="stylesheet" id="vc_carousel_css-css" href="wp-content/plugins/js_composer/assets/lib/vc_carousel/css/vc_carousel.mine1b2.css?ver=6.9.0" type="text/css" media="all" />
        <link rel="stylesheet" id="owl.carousel-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/vendors/owl.carousel.min3d36.css?ver=3.3.1" type="text/css" media="all" />
        <link rel="stylesheet" id="stm-testimonials-style_4-css" href="wp-content/themes/md3/assets/css/vc_modules/testimonials/style_46aec.css?ver=3.0" type="text/css" media="all" />
        <link rel="stylesheet" id="cookie-law-info-table-css" href="wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-tabledeae.css?ver=3.2.1" type="text/css" media="all" />
        <link rel="stylesheet" id="masterstudy-authorization-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/css/components/authorization3d36.css?ver=3.3.1" type="text/css" media="all" />
        <link rel="stylesheet" id="masterstudy-button-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/css/components/button3d36.css?ver=3.3.1" type="text/css" media="all" />
        <link rel="stylesheet" id="rs-plugin-settings-css" href="wp-content/plugins/revslider/public/assets/css/rs6adc6.css?ver=6.5.5" type="text/css" media="all" />
        
        <script type="text/javascript" src="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/vendors/bootstrap.min3d36.js?ver=3.3.1" id="masterstudy-bootstrap-js"></script>
        <script type="text/javascript" src="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/vendors/ms-bootstrap-custom3d36.js?ver=3.3.1" id="masterstudy-bootstrap-custom-js"></script>
        <script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/swv/js/index7404.js?ver=5.9.3" id="swv-js"></script>
        <script type="text/javascript" id="contact-form-7-js-extra">
            /* <![CDATA[ */
            var wpcf7 = { api: { root: "https:\/\/www.ingenieurs2000.com\/wp-json\/", namespace: "contact-form-7\/v1" }, cached: "1" };
            /* ]]> */
        </script>
        <script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/js/index7404.js?ver=5.9.3" id="contact-form-7-js"></script>
        <script type="text/javascript" src="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/js/countdown3d36.js?ver=3.3.1" id="lms_countdown.js-js"></script>
        <script type="text/javascript" src="wp-content/plugins/revslider/public/assets/js/rbtools.minadc6.js?ver=6.5.5" defer async id="tp-tools-js"></script>
        <script type="text/javascript" src="wp-content/plugins/revslider/public/assets/js/rs6.minadc6.js?ver=6.5.5" defer async id="revmin-js"></script>
        <script data-cookieyes="cookieyes-functional" type="text/javascript" src="wp-content/themes/md3-child/assets/js/studizz001e.js?ver=2.0.0" id="studizz_bot_script-js"></script>
        <script type="text/javascript" id="wpcfto_metaboxes.js-js-extra">
            /* <![CDATA[ */
            var wpcfto_global_settings = {
                translations: {
                    font_size: "Taille de la police",
                    line_height: "Hauteur de ligne",
                    word_spacing: "Espacement entre les mots",
                    letter_spacing: "Espacement entre les lettres",
                    font_family: "Famille de polices",
                    backup_font_family: "Sauvegarde de la famille de polices",
                    font_weight: "Poids et style de la police",
                    font_subset: "Sous-ensembles de polices",
                    text_align: "Alignement du texte",
                    font_color: "Couleur de la police",
                    "text-transform": "Transformation du texte",
                    export: "Copier les param\u00e8tres",
                    import: "Importer les param\u00e8tres",
                    import_notice: "WARNING! This will overwrite all existing option values, please proceed with caution!",
                    exported_data: "Param\u00e8tres copi\u00e9s dans la m\u00e9moire tampon",
                    exported_data_error: "Impossible de copier les param\u00e8tres",
                    export_data_label: "Options d&#039;exportation",
                    import_data_label: "Options d&#039;import",
                    vue_select_notice: "D\u00e9sol\u00e9, aucune option ne correspond",
                },
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="wp-content/plugins/masterstudy-lms-learning-management-system/_core/libraries/nuxy/metaboxes/assets/js/metaboxes596f.js?ver=1714751625" id="wpcfto_metaboxes.js-js"></script>
        <script type="text/javascript" src="wp-content/themes/md3/assets/vendors/jquery.fancybox.min6aec.js?ver=3.0" id="fancybox-js"></script>
        <script type="text/javascript" src="wp-content/themes/md3/assets/js/select2.full.min6aec.js?ver=3.0" id="select2-js"></script>
        <script type="text/javascript" src="wp-content/themes/md3/assets/js/custom6aec.js?ver=3.0" id="stm_theme_scripts-js"></script>
        <script type="text/javascript" src="wp-content/themes/md3/assets/js/ajax.submit6aec.js?ver=3.0" id="ajaxsubmit-js"></script>
        <script type="text/javascript" src="wp-content/plugins/wpb-popup-for-contact-form-7/assets/js/sweetalert2.all.min5243.js?ver=5.4.5" id="wpb-pcf-sweetalert2-js"></script>
        <script type="text/javascript" src="wp-includes/js/underscore.mind584.js?ver=1.13.4" id="underscore-js"></script>
        <script type="text/javascript" id="wp-util-js-extra">
            /* <![CDATA[ */
            var _wpUtilSettings = { ajax: { url: "\/wp-admin\/admin-ajax.php" } };
            /* ]]> */
        </script>
        <script type="text/javascript" src="wp-includes/js/wp-util.min8f99.js?ver=6.5" id="wp-util-js"></script>
        <script type="text/javascript" id="wpb-pcf-scripts-js-extra">
            /* <![CDATA[ */
            var WPB_PCF_Vars = { ajaxurl: "https:\/\/www.ingenieurs2000.com\/wp-admin\/admin-ajax.php", nonce: "ec0189b713" };
            /* ]]> */
        </script>
        <script type="text/javascript" src="wp-content/plugins/wpb-popup-for-contact-form-7/assets/js/frontend5243.js?ver=5.4.5" id="wpb-pcf-scripts-js"></script>
        <script type="text/javascript" src="wp-content/plugins/vc_carousel_anything/assets/libs/slick/slick.minf24c.js?ver=1.6" id="slick-js"></script>
        <script type="text/javascript" src="wp-content/plugins/vc_carousel_anything/assets/js/script.js" id="bb-vcuc-js"></script>
        <script type="text/javascript" id="wpb_composer_front_js-js-extra">
            /* <![CDATA[ */
            var vcData = { currentTheme: { slug: "md3" } };
            /* ]]> */
        </script>
        <script type="text/javascript" src="wp-content/plugins/js_composer/assets/js/dist/js_composer_front.mine1b2.js?ver=6.9.0" id="wpb_composer_front_js-js"></script>
        <script type="text/javascript" src="wp-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.mine1b2.js?ver=6.9.0" id="vc_jquery_skrollr_js-js"></script>
        <script type="text/javascript" src="wp-content/plugins/js_composer/assets/lib/lightbox2/dist/js/lightbox.mine1b2.js?ver=6.9.0" id="lightbox2-js"></script>
        <script type="text/javascript" src="wp-content/plugins/js_composer/assets/lib/owl-carousel2-dist/owl.carousel.mine1b2.js?ver=6.9.0" id="vc_pageable_owl-carousel-js"></script>
        <script type="text/javascript" src="wp-content/plugins/js_composer/assets/lib/bower/imagesloaded/imagesloaded.pkgd.mine1b2.js?ver=6.9.0" id="vc_grid-js-imagesloaded-js"></script>
        <script type="text/javascript" src="wp-content/plugins/js_composer/assets/lib/vc_waypoints/vc-waypoints.mine1b2.js?ver=6.9.0" id="vc_waypoints-js"></script>
        <script type="text/javascript" src="wp-content/plugins/js_composer/assets/js/dist/vc_grid.mine1b2.js?ver=6.9.0" id="vc_grid-js"></script>
        <script type="text/javascript" src="wp-content/plugins/js_composer/assets/lib/vc_carousel/js/transition.mine1b2.js?ver=6.9.0" id="vc_transition_bootstrap_js-js"></script>
        <script type="text/javascript" src="wp-content/plugins/js_composer/assets/lib/vc_carousel/js/vc_carousel.mine1b2.js?ver=6.9.0" id="vc_carousel_js-js"></script>
        <script type="text/javascript" src="wp-content/plugins/wpcf7-recaptcha/assets/js/wpcf7-recaptcha-controls62ea.js?ver=1.2" id="wpcf7-recaptcha-controls-js"></script>
        <script type="text/javascript" id="google-recaptcha-js-extra">
            /* <![CDATA[ */
            var wpcf7iqfix = { recaptcha_empty: "Please verify that you are not a robot.", response_err: "wpcf7-recaptcha: Could not verify reCaptcha response." };
            /* ]]> */
        </script>
        <script type="text/javascript" src="../www.google.com/recaptcha/api8ce6.js?hl=fr_FR&amp;onload=recaptchaCallback&amp;render=explicit&amp;ver=2.0" id="google-recaptcha-js"></script>
        <script defer type="text/javascript" src="wp-content/plugins/akismet/_inc/akismet-frontendbdce.js?ver=1711035025" id="akismet-frontend-js"></script>
        <script type="text/javascript" src="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/vendors/owl.carousel3d36.js?ver=3.3.1" id="owl.carousel-js"></script>
        <script type="text/javascript" src="wp-content/themes/md3-child/assets/js/vc_modules/testimonials/style_4cc90.js?ver=807377100313" id="stm-testimonials-js"></script>
        <script type="text/javascript" src="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/js/components/authorization/main3d36.js?ver=3.3.1" id="masterstudy-authorization-main-js"></script>
        <script type="text/javascript" src="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/js/components/authorization/ajax3d36.js?ver=3.3.1" id="masterstudy-authorization-ajax-js"></script>
        <script type="text/javascript">
            (function () {
                var expirationDate = new Date();
                expirationDate.setTime(expirationDate.getTime() + 31536000 * 1000);
                document.cookie = "pll_language=fr; expires=" + expirationDate.toUTCString() + "; path=/; secure; SameSite=Lax";
            })();
        </script>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "LocalBusiness"
            }
        </script>
        <script type="text/javascript" id="wpsp-script-frontend"></script>
    </body>
</html>