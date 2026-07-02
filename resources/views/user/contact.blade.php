
@extends('layouts.user') 
@section('style')
<style>
    ol li, ul li {
        margin-bottom: 8px;
    }

    section#about ,section#promoteur,section.contact-page{
        height:auto !important;
    }
    .entry-header {
        position: relative;
        background-color: #fff;
        padding: 120px 0;
        background-size: cover;
    }
    

    .entry-header .entry-title h1 {
        font-size: 50px;
        /* color: #fff; */
    }
    .breadcrumbs_unit {
        padding-top: 11px;
    }





    .breadcrumbs_unit {
        background-color: #f6f6f6;
        padding: 9px 0 7px;
        border-bottom: 1px solid #f0f2f5;
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

    .team-details__top-content .title span {
        color: green; /*   replace with cef var */
        font-size: 16px;
        line-height: 21px;
        font-weight: 700;
        letter-spacing: 0.1em;
    }


    /*** 
    =============================================
        Contact Page
    =============================================
    ***/
    .contact-page {
    position: relative;
    display: block;
    background: #ffffff;
    }

    .contact-page__content {
    position: relative;
    display: block;
    }

    .contact-page__content .title-box {
    position: relative;
    display: block;
    margin-bottom: 23px;
    }

    .contact-page__content .title-box h2 {
    font-weight: 600;
    font-size: 30px;
    line-height: 30px;
    margin-bottom: 22px;
    }

    .contact-page__content .title-box p {
    margin: 0;
    }

    .contact-page__contact-info {
    position: relative;
    display: block;
    }

    .contact-page__contact-info li {
    position: relative;
    display: block;
    padding-left: 30px;
    margin-bottom: 20px;
    }

    .contact-page__contact-info li:last-child {
    margin-bottom: 0;
    }

    .contact-page__contact-info li .icon-box {
    position: absolute;
    top: 5px;
    left: 0;
    }

    .contact-page__contact-info li .icon-box span::before {
    position: relative;
    display: inline-block;
    /* color: var(--thm-base); */
    color: #b9dda3;
    font-size: 20px;
    font-weight: 700;
    }

    .contact-page__contact-info li .text-box {
    position: relative;
    display: block;
    }

    .contact-page__contact-info li .text-box h4 {
    font-weight: 500;
    font-size: 18px;
    line-height: 28px;
    margin-bottom: 4px;
    }

    .contact-page__contact-info li .text-box p {
    font-weight: 500;
    font-size: 18px;
    line-height: 28px;
    }

    .contact-page__contact-info li .text-box p a {
    /* color: var(--thm-gray); */
    color: #676767;
    transition: all 200ms linear;
    transition-delay: 0.1s;

    }

    .contact-page__contact-info li .text-box p a:hover {
    /* color: var(--thm-base); */
    color: #b9dda3;
    }

    .contact-page__social-links {
    position: relative;
    display: block;
    margin-top: 37px;
    }

    .contact-page__social-links li {
    position: relative;
    display: inline-block;
    margin-right: 6px;
    }

    .contact-page__social-links li:last-child {
    margin-right: 0;
    }

    .contact-page__social-links li a {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    background: #3b5998;
    border-radius: 50%;
    text-align: center;
    }

    .contact-page__social-links li a.bg2 {
    background: #dc4e41;
    }

    .contact-page__social-links li a.bg3 {
    background: #070100;
    }

    .contact-page__social-links li a.bg4 {
    background: #3f729b;
    }

    .contact-page__social-links li a span {
    position: relative;
    display: block;
    }

    .contact-page__social-links li a span::before {
    position: relative;
    display: inline-block;
    color: #ffffff;
    font-size: 16px;
    }


    .contact-page__form {
    position: relative;
    display: block;
    background: #FFFFFF;
    box-shadow: 0px 20px 60px 10px rgba(0, 0, 0, 0.07);
    border-radius: 15px;
    padding: 42px 50px 50px;
    }

    .contact-page__form .add-comment-box {
    margin-top: 0px;
    }

    .contact-page__form .add-comment-box .inner-title {
    padding-bottom: 32px;
    }

    .add-comment-box #contact-form {
    position: relative;
    display: block;
    }

    .add-comment-box #contact-form .input-box {
    position: relative;
    display: block;
    margin-bottom: 30px;
    }

    .add-comment-box #contact-form input[type="text"],
    .add-comment-box #contact-form input[type="email"],.add-comment-box #contact-form input[type="number"],
    .add-comment-box #contact-form textarea {
    border-radius: 20px;
    position: relative;
    display: block;
    background: #ffffff;
    border: 1px solid #E5E5E5;
    width: 100%;
    height: 50px ;
    /* color: var(--thm-gray); */
    color: #676767;
    font-weight: 500;
    font-size: 16px ;
    font-style: normal;
    text-transform: none;
    padding: 0 35px !important;
    transition: all 500ms ease;
    /* font-family: var(--thm-font); */
    font-family: 'DM Sans', sans-serif;
    }

    .add-comment-box #contact-form textarea {
    height: 180px;
    padding: 12px 35px;
    }

    .add-comment-box #contact-form .text-input:focus {
    border-color: rgba(79, 247, 1, 0.1);
    box-shadow: 0px 10px 40px rgba(62, 84, 141, 0.1);
    }

    .add-comment-box #contact-form input:focus {
    border-color: rgba(79, 247, 1, 0.1);
    box-shadow: 0px 10px 40px rgba(62, 84, 141, 0.1);
    }

    .add-comment-box #contact-form textarea:focus {
    border-color: rgba(79, 247, 1, 0.1);
    box-shadow: 0px 10px 40px rgba(62, 84, 141, 0.1);
    }

    .add-comment-box #contact-form .button-box {
    position: relative;
    display: block;
    padding-top: 0px;
    line-height: 0;
    text-align: center;
    }

    .add-comment-box #contact-form .button-box button.btn-one {
    line-height: 60px;
    box-shadow: 0px 15px 50px rgba(235, 41, 44, 0.3);
    padding-left: 45px;
    padding-right: 45px;
    }


    /*** 
    =============================================
    Google Map
    =============================================
    ***/
    .google-map {
    position: relative;
    display: block;
    }

    .contact-page-map {
    position: relative;
    display: block;
    border: none;
    height: 450px;
    width: 100%;
    }

</style>
@endsection 
@section('main')
<main class="content">
    <div class="entry-header clearfix" style="background: linear-gradient(135deg, #ecf0f1, #b9dda3); background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="entry-title-left">
                <div class="entry-title text-center text-uppercase text-dark fs-5">
                    <h1>{{ __('contact.title') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="breadcrumbs_unit">
            <div class="container">
                <div class="navxtBreads">
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="Go to cefprepas.com" href="{{ route('index') }}" class="home"><span property="name">{{ __('contact.breadcrumb_home') }}</span></a><meta property="position" content="1">
                    </span>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name" class="post post-page current-item text-uppercase">{{ __('contact.breadcrumb_contact') }}</span><meta property="url" content="https://www.CEFPREPAS.com/"><meta property="position" content="2">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="empty_space" style="height: 87px;">
            <span class="empty_space_inner"></span>
        </div>
        <section class="contact-page">
            <h1 class="text-uppercase fw-bolder text-center">{{ __('contact.title') }}</h1>
            <div class="empty_space" style="height: 87px;">
                <span class="empty_space_inner"></span>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element">
                                <div class="contact-page__content">
                                    <div class="title-box">
                                        <h2>{{ __('contact.main_office') }}</h2>
                                        <p>{{ __('contact.office_description') }}</p>
                                    </div>
                                    <ul class="contact-page__contact-info">
                                        <li>
                                            <div class="icon-box">
                                                <span class="fas fa-map-marker-alt"></span>
                                            </div>
                                            <div class="text-box">
                                                <h4>{{ __('contact.address_title') }}</h4>
                                                <p>{{ __('contact.address') }}</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-box">
                                                <span class="fas fa-phone-volume"></span>
                                            </div>
                                            <div class="text-box">
                                                <h4>{{ __('contact.phone_title') }}</h4>
                                                <p><a href="tel:+237695566666">+237 695566666 </a></p>
                                                <p><a href="tel:+237677444071">+237 677444071 </a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-box">
                                                <span class="far fa-envelope"></span>
                                            </div>
                                            <div class="text-box">
                                                <h4>{{ __('contact.email_title') }}</h4>
                                                <p><a href="#">cefprepas@outlook.com</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-box">
                                                <span class="far fa-clock"></span>
                                            </div>
                                            <div class="text-box">
                                                <h4>{{ __('contact.hours_title') }}</h4>
                                                <p>{{ __('contact.hours') }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="contact-page__social-links">
                                        <li><a href="https://web.facebook.com/CEFPREPAS" target="_blank"><span class="fab fa-facebook"></span></a></li>
                                        <li><a href="https://www.youtube.com/@cefprepas8345" target="_blank" class="bg2"><span class=" fab fa-youtube"></span></a></li>
                                        <li><a href="https://twitter.com/cefprepas1" target="_blank" class="bg3"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="https://www.instagram.com/cefprepas/" target="_blank" class="bg4"><span class="fab fa-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-7">
                    <div class="vc_column-inner">
                        <div class="contact-page__form">
                            <div class="add-comment-box">
                                <div class="inner-title">
                                    <h2 class="text-uppercase fw-bold text-center">{{ __('contact.leave_message') }}</h2>
                                </div>
                                <form id="contact-form" name="contact_form" class="default-form2" method="POST" action="{{ route('contact.submit') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="input-box">
                                                    <input name="name" type="text" id="name" class="form-control" placeholder="{{ __('contact.name_placeholder') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <input name="email" type="email" id="email" class="form-control" placeholder="{{ __('contact.email_placeholder') }}" required>
                                                <div class="input-box">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="input-box">
                                                    <input name="numero" type="tel" id="numero" class="form-control" placeholder="{{ __('contact.phone_placeholder') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <div class="input-box">
                                                    <textarea name="message" rows="2" cols="20" id="message" class="form-control" placeholder="{{ __('contact.message_placeholder') }}" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="button-box">
                                                <button type="submit" class="btn btn-success">{{ __('contact.submit_button') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <h3 class="text-uppercase fw-bold text-center">{{ __('contact.map_title') }}</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.36518455444!2d11.58648307302863!3d3.9448891477500307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bc77573bf97eb%3A0x6bda6343ef0c76e7!2sCEFPREPAS!5e0!3m2!1sfr!2scm!4v1712879792605!5m2!1sfr!2scm" class="contact-page-map" width="350" height="260" style="border: 0px; pointer-events: none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="empty_space" style="height: 87px;">
                <span class="empty_space_inner"></span>
            </div>
        </section>
    </div>
</main>
@endsection

