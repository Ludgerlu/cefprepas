<?php
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$index = "//localhost/cefprepas/index.php";
?>

<?php
$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
include('./condb.php');
?>
<!DOCTYPE html>
<html lang="fr-FR" class="no-js">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->
        <link rel="pingback" href="xmlrpc.php" />
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

        <!-- This site is optimized with the Yoast SEO plugin v22.3 - https://yoast.com/wordpress/plugins/seo/ -->
        <title>CEFPREPAS</title>
        <meta name="description" content="Crée en 19991, Ingénieurs 2000 forme aux métiers d’ingénieurs et de techniciens par l’apprentissage pour l’industrie ou les entreprises." />
        <link rel="canonical" href="index.html" />
        <meta property="og:locale" content="fr_FR" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="CEFPREPAS" />
        <!-- <meta property="og:description" content="Crée en 19991, Ingénieurs 2000 forme aux métiers d’ingénieurs et de techniciens par l’apprentissage pour l’industrie ou les entreprises." /> -->
        <meta property="og:url" content="index.php" />
        <meta property="og:site_name" content="CEFPREPAR.cm" />
        <meta property="article:modified_time" content="2024-04-02T09:28:42+00:00" />
        <!-- <meta property="og:image" content="cef/Logo_CEFPREPAS.j.png" /> -->
        <!-- <meta property="og:image:width" content="1200" /> -->
        <!-- <meta property="og:image:height" content="628" /> -->
        <!-- <meta property="og:image:type" content="image/jpeg" /> -->
        <meta name="twitter:card" content="summary_large_image" />
        <!-- / Yoast SEO plugin. -->

        <link rel="dns-prefetch" href="http://webchat.studizz.fr/" />
        <link rel="dns-prefetch" href="http://fonts.googleapis.com/" />
        <link rel="alternate" type="application/rss+xml" title="Ingenieurs2000.com &raquo; Flux" href="feed/index.html" />
        <link rel="alternate" type="application/rss+xml" title="Ingenieurs2000.com &raquo; Flux des commentaires" href="comments/feed/index.html" />
        <script type="text/javascript">
            /* <![CDATA[ */
            window._wpemojiSettings = {
                baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
                ext: ".png",
                svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
                svgExt: ".svg",
                source: { concatemoji: "https:\/\/www.ingenieurs2000.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5" },
            };
            /*! This file is auto-generated */
            !(function (i, n) {
                var o, s, e;
                function c(e) {
                    try {
                        var t = { supportTests: e, timestamp: new Date().valueOf() };
                        sessionStorage.setItem(o, JSON.stringify(t));
                    } catch (e) {}
                }
                function p(e, t, n) {
                    e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                    var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                        r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                    return t.every(function (e, t) {
                        return e === r[t];
                    });
                }
                function u(e, t, n) {
                    switch (t) {
                        case "flag":
                            return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")
                                ? !1
                                : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") &&
                                      !n(
                                          e,
                                          "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                          "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                      );
                        case "emoji":
                            return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b");
                    }
                    return !1;
                }
                function f(e, t, n) {
                    var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                        a = r.getContext("2d", { willReadFrequently: !0 }),
                        o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
                    return (
                        e.forEach(function (e) {
                            o[e] = t(a, e, n);
                        }),
                        o
                    );
                }
                function t(e) {
                    var t = i.createElement("script");
                    (t.src = e), (t.defer = !0), i.head.appendChild(t);
                }
                "undefined" != typeof Promise &&
                    ((o = "wpEmojiSettingsSupports"),
                    (s = ["flag", "emoji"]),
                    (n.supports = { everything: !0, everythingExceptFlag: !0 }),
                    (e = new Promise(function (e) {
                        i.addEventListener("DOMContentLoaded", e, { once: !0 });
                    })),
                    new Promise(function (t) {
                        var n = (function () {
                            try {
                                var e = JSON.parse(sessionStorage.getItem(o));
                                if ("object" == typeof e && "number" == typeof e.timestamp && new Date().valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests;
                            } catch (e) {}
                            return null;
                        })();
                        if (!n) {
                            if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob)
                                try {
                                    var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                                        r = new Blob([e], { type: "text/javascript" }),
                                        a = new Worker(URL.createObjectURL(r), { name: "wpTestEmojiSupports" });
                                    return void (a.onmessage = function (e) {
                                        c((n = e.data)), a.terminate(), t(n);
                                    });
                                } catch (e) {}
                            c((n = f(s, u, p)));
                        }
                        t(n);
                    })
                        .then(function (e) {
                            for (var t in e) (n.supports[t] = e[t]), (n.supports.everything = n.supports.everything && n.supports[t]), "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                            (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag),
                                (n.DOMReady = !1),
                                (n.readyCallback = function () {
                                    n.DOMReady = !0;
                                });
                        })
                        .then(function () {
                            return e;
                        })
                        .then(function () {
                            var e;
                            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
                        }));
            })((window, document), window._wpemojiSettings);
            /* ]]> */
        </script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

        <link rel="stylesheet" href="assets/bootstrap/css/boottstrap.min.css" type="text/css" media="all" />

        <link rel="stylesheet" id="bb_vcparam_toggle-css" href="wp-content/plugins/vc_carousel_anything/assets/admin/css/vcparam/vcparam-toggle8f99.css?ver=6.5" type="text/css" media="all" />
        <link rel="stylesheet" id="masterstudy-bootstrap-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/vendors/bootstrap.min3d36.css?ver=3.3.1" type="text/css" media="all" />
        <link rel="stylesheet" id="masterstudy-bootstrap-custom-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/vendors/ms-bootstrap-custom3d36.css?ver=3.3.1" type="text/css" media="all" />
        <style id="wp-emoji-styles-inline-css" type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <style id="masterstudy-cta-style-inline-css" type="text/css">
            .wp-block-masterstudy-cta {
                --masterstudy-cta-bg: var(--wp-block-masterstudy-cta--bgColor, var(--masterstudy-color--white));
                background-color: var(--masterstudy-cta-bg);
                background-position: 50%;
                background-repeat: no-repeat;
                background-size: cover;
                box-sizing: border-box;
                color: var(--wp-block-masterstudy-cta--color, var(--masterstudy-color-dark-100)) !important;
                display: flex;
                flex-direction: column;
                gap: 20px;
                margin-left: auto;
                margin-right: auto;
                padding: 12px 20px;
                transition: 0.2s linear;
            }
            .wp-block-masterstudy-cta--hasWidth {
                max-width: var(--wp-block-masterstudy-cta--width, auto) !important;
                width: 100%;
            }
            .wp-block-masterstudy-cta--bgTransparent {
                background: transparent !important;
            }
            .wp-block-masterstudy-cta__description {
                color: var(--wp-block-masterstudy-cta--color, var(--masterstudy-color-dark-70)) !important;
                margin: 0;
                padding: 0;
            }
            .wp-block-masterstudy-cta:is(:hover, :active, :focus),
            .wp-block-masterstudy-cta:is(:hover, :active, :focus) .wp-block-masterstudy-cta__description {
                background-color: var(--wp-block-masterstudy-cta--bgHoverColor, var(--masterstudy-cta-bg));
                color: var(--wp-block-masterstudy-cta--hoverColor, var(--masterstudy-color-dark-100)) !important;
            }
            .wp-block-masterstudy-cta .wp-block-masterstudy-button {
                border-radius: 0;
            }
            .wp-block-masterstudy-cta.alignwide {
                max-width: var(--wp--style--global--wide-size, 930px);
            }
            .wp-block-masterstudy-cta.alignfull {
                margin-left: calc(var(--wp--style--root--padding-left) * -1);
                margin-right: calc(var(--wp--style--root--padding-right) * -1);
                max-width: 100%;
            }
            .wp-block-masterstudy-cta:where(:not(.alignleft):not(.alignright):not(.alignfull)) {
                margin-left: auto !important;
                margin-right: auto !important;
                max-width: var(--wp--style--global--content-size, 1140px);
            }
            .wp-block-masterstudy-cta .wp-block-masterstudy-advanced-text:where(:not(.alignleft):not(.alignright):not(.alignfull)) {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }
        </style>
        <style id="masterstudy-icon-style-inline-css" type="text/css">
            :root {
                --masterstudy-color--primary-100: #227aff;
                --masterstudy-color--primary-70: rgba(34, 122, 255, 0.7);
                --masterstudy-color--primary-50: rgba(34, 122, 255, 0.5);
                --masterstudy-color--primary-30: rgba(34, 122, 255, 0.3);
                --masterstudy-color--primary-10: rgba(34, 122, 255, 0.1);
                --masterstudy-color--primary-5: rgba(34, 122, 255, 0.05);
                --masterstudy-color--secondary-100: #fff;
                --masterstudy-color--secondary-80: hsla(0, 0%, 100%, 0.8);
                --masterstudy-color--secondary-70: hsla(0, 0%, 100%, 0.7);
                --masterstudy-color--secondary-50: hsla(0, 0%, 100%, 0.5);
                --masterstudy-color--secondary-30: hsla(0, 0%, 100%, 0.3);
                --masterstudy-color--secondary-10: hsla(0, 0%, 100%, 0.1);
                --masterstudy-color--secondary-5: hsla(0, 0%, 100%, 0.05);
                --masterstudy-color--primary-hover: rgba(34, 122, 255, 0.85);
                --masterstudy-color--warning-100: #ffa800;
                --masterstudy-color--warning-70: rgba(255, 168, 0, 0.7);
                --masterstudy-color--warning-50: rgba(255, 168, 0, 0.5);
                --masterstudy-color--warning-30: rgba(255, 168, 0, 0.3);
                --masterstudy-color--warning-10: rgba(255, 168, 0, 0.1);
                --masterstudy-color--warning-5: rgba(255, 168, 0, 0.05);
                --masterstudy-color--warning-hover: rgba(255, 168, 0, 0.85);
                --masterstudy-color--danger-100: #ff3945;
                --masterstudy-color--danger-70: rgba(255, 57, 69, 0.7);
                --masterstudy-color--danger-50: rgba(255, 57, 69, 0.5);
                --masterstudy-color--danger-30: rgba(255, 57, 69, 0.3);
                --masterstudy-color--danger-10: rgba(255, 57, 69, 0.1);
                --masterstudy-color--danger-5: rgba(255, 57, 69, 0.05);
                --masterstudy-color--danger-hover: rgba(255, 57, 69, 0.85);
                --masterstudy-color--success-100: #61cc2f;
                --masterstudy-color--success-70: rgba(97, 204, 47, 0.7);
                --masterstudy-color--success-50: rgba(97, 204, 47, 0.5);
                --masterstudy-color--success-30: rgba(97, 204, 47, 0.3);
                --masterstudy-color--success-10: rgba(97, 204, 47, 0.1);
                --masterstudy-color--success-5: rgba(97, 204, 47, 0.05);
                --masterstudy-color--success-hover: rgba(97, 204, 47, 0.85);
                --masterstudy-color--white: #fff;
                --masterstudy-color-dark-100: #001931;
                --masterstudy-color-dark-80: rgba(77, 94, 111, 0.1);
                --masterstudy-color-dark-70: #4d5e6f;
                --masterstudy-color-dark-50: #808c98;
                --masterstudy-color-dark-30: #b3bac2;
                --masterstudy-color-dark-10: rgba(0, 25, 49, 0.1);
                --masterstudy-color-dark-5: rgba(0, 25, 49, 0.05);
            }
            .wp-block-masterstudy-icon {
                align-items: center;
                background-color: transparent;
                border-color: transparent;
                border-radius: 50%;
                border-style: solid;
                box-sizing: border-box;
                color: #000;
                display: inline-flex;
                justify-content: center;
                line-height: 0;
                transition: transform 0.1s linear;
            }
            .wp-block-masterstudy-icon > * {
                margin-block: 0;
            }
            .wp-block-masterstudy-icon:hover {
                transform: scale(1.075);
            }
            .wp-block-masterstudy-icon span {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .wp-block-masterstudy-icon svg {
                color: currentColor !important;
                fill: currentColor !important;
            }
            @media screen and (max-width: 575.98px) {
                .wp-block-masterstudy-icon,
                .wp-block-masterstudy-icon svg {
                    height: var(--wp-block-masterstudy-icon-mobile--height, 24px) !important;
                    width: var(--wp-block-masterstudy-icon-mobile--width, 24px) !important;
                }
            }
            @media screen and (min-width: 576px) and (max-width: 991.98px) {
                .wp-block-masterstudy-icon,
                .wp-block-masterstudy-icon svg {
                    height: var(--wp-block-masterstudy-icon-tablet--height, 24px) !important;
                    width: var(--wp-block-masterstudy-icon-tablet--width, 24px) !important;
                }
            }
            @media screen and (min-width: 992px) {
                .wp-block-masterstudy-icon,
                .wp-block-masterstudy-icon svg {
                    height: var(--wp-block-masterstudy-icon-desktop--height, 24px) !important;
                    width: var(--wp-block-masterstudy-icon-desktop--width, 24px) !important;
                }
            }
        </style>
        <style id="masterstudy-button-style-inline-css" type="text/css">
            :root {
                --masterstudy-color--primary-100: #227aff;
                --masterstudy-color--primary-70: rgba(34, 122, 255, 0.7);
                --masterstudy-color--primary-50: rgba(34, 122, 255, 0.5);
                --masterstudy-color--primary-30: rgba(34, 122, 255, 0.3);
                --masterstudy-color--primary-10: rgba(34, 122, 255, 0.1);
                --masterstudy-color--primary-5: rgba(34, 122, 255, 0.05);
                --masterstudy-color--secondary-100: #fff;
                --masterstudy-color--secondary-80: hsla(0, 0%, 100%, 0.8);
                --masterstudy-color--secondary-70: hsla(0, 0%, 100%, 0.7);
                --masterstudy-color--secondary-50: hsla(0, 0%, 100%, 0.5);
                --masterstudy-color--secondary-30: hsla(0, 0%, 100%, 0.3);
                --masterstudy-color--secondary-10: hsla(0, 0%, 100%, 0.1);
                --masterstudy-color--secondary-5: hsla(0, 0%, 100%, 0.05);
                --masterstudy-color--primary-hover: rgba(34, 122, 255, 0.85);
                --masterstudy-color--warning-100: #ffa800;
                --masterstudy-color--warning-70: rgba(255, 168, 0, 0.7);
                --masterstudy-color--warning-50: rgba(255, 168, 0, 0.5);
                --masterstudy-color--warning-30: rgba(255, 168, 0, 0.3);
                --masterstudy-color--warning-10: rgba(255, 168, 0, 0.1);
                --masterstudy-color--warning-5: rgba(255, 168, 0, 0.05);
                --masterstudy-color--warning-hover: rgba(255, 168, 0, 0.85);
                --masterstudy-color--danger-100: #ff3945;
                --masterstudy-color--danger-70: rgba(255, 57, 69, 0.7);
                --masterstudy-color--danger-50: rgba(255, 57, 69, 0.5);
                --masterstudy-color--danger-30: rgba(255, 57, 69, 0.3);
                --masterstudy-color--danger-10: rgba(255, 57, 69, 0.1);
                --masterstudy-color--danger-5: rgba(255, 57, 69, 0.05);
                --masterstudy-color--danger-hover: rgba(255, 57, 69, 0.85);
                --masterstudy-color--success-100: #61cc2f;
                --masterstudy-color--success-70: rgba(97, 204, 47, 0.7);
                --masterstudy-color--success-50: rgba(97, 204, 47, 0.5);
                --masterstudy-color--success-30: rgba(97, 204, 47, 0.3);
                --masterstudy-color--success-10: rgba(97, 204, 47, 0.1);
                --masterstudy-color--success-5: rgba(97, 204, 47, 0.05);
                --masterstudy-color--success-hover: rgba(97, 204, 47, 0.85);
                --masterstudy-color--white: #fff;
                --masterstudy-color-dark-100: #001931;
                --masterstudy-color-dark-80: rgba(77, 94, 111, 0.1);
                --masterstudy-color-dark-70: #4d5e6f;
                --masterstudy-color-dark-50: #808c98;
                --masterstudy-color-dark-30: #b3bac2;
                --masterstudy-color-dark-10: rgba(0, 25, 49, 0.1);
                --masterstudy-color-dark-5: rgba(0, 25, 49, 0.05);
            }
            .wp-block-masterstudy-button {
                align-items: center;
                background-color: var(--wp-block-masterstudy-button--bgColor, #385bce);
                border-radius: 9999px;
                border-width: 0;
                border: 1px solid var(--wp-block-masterstudy-button--bgColor, #385bce);
                box-sizing: border-box;
                color: var(--wp-block-masterstudy-button--color, var(--masterstudy-color--white)) !important;
                display: inline-flex;
                font-family: inherit;
                font-size: inherit;
                justify-content: center;
                line-height: inherit;
                padding: 11px 18px;
                text-decoration: none;
                transition: 0.2s linear;
            }
            @media (hover: hover) {
                .wp-block-masterstudy-button {
                    cursor: pointer;
                }
            }
            .wp-block-masterstudy-button:is(:hover, :active, :focus) {
                background-color: var(--wp-block-masterstudy-button--bgHoverColor, var(--masterstudy-color--white)) !important;
                border-color: var(--wp-block-masterstudy-button--bgColor, #385bce);
                color: var(--wp-block-masterstudy-button--hoverColor, #385bce) !important;
                text-decoration: none;
            }
            .wp-block-masterstudy-button:is(:hover, :active, :focus) * {
                text-decoration: none;
            }
            .wp-block-masterstudy-button:is(:hover, :active, :focus) .wp-block-masterstudy-icon {
                color: var(--wp-block-masterstudy-button--hoverColor, #385bce);
            }
            .wp-block-masterstudy-button.icon-left {
                flex-direction: row-reverse;
            }
            .wp-block-masterstudy-button.icon-left .wp-block-masterstudy-icon {
                margin-right: 5px;
            }
            .wp-block-masterstudy-button.icon-right .wp-block-masterstudy-icon {
                margin-left: 5px;
            }
            .wp-block-masterstudy-button .wp-block-masterstudy-icon {
                color: var(--wp-block-masterstudy-button--color, var(--masterstudy-color--white));
            }
            .wp-block-masterstudy-button .wp-block-masterstudy-icon,
            .wp-block-masterstudy-button .wp-block-masterstudy-icon svg {
                height: var(--wp-block-masterstudy-icon--height, 1rem) !important;
                width: var(--wp-block-masterstudy-icon--width, 1rem) !important;
            }
        </style>
        <link rel="stylesheet" id="masterstudy-testimonials-style-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/assets/gutenberg/blocks/testimonials/style-indexc5da.css?ver=0.1.0" type="text/css" media="all" />
        <style id="masterstudy-iconbox-style-inline-css" type="text/css">
            .wp-block-masterstudy-iconbox {
                align-items: center;
                border-radius: 10px;
                display: flex;
                gap: 10px;
                margin-bottom: 20px;
                padding: 15px 20px;
            }
            @media only screen and (max-width: 600px) {
                .wp-block-masterstudy-iconbox {
                    flex-direction: column;
                    text-align: center;
                }
            }
            .wp-block-masterstudy-iconbox p {
                margin: 0;
                padding: 0;
            }
            .wp-block-masterstudy-iconbox h1 {
                margin: 0 0 5px;
                padding: 0;
            }
            .wp-block-masterstudy-iconbox__title {
                display: inline-block;
                margin: 0 0 5px !important;
                padding: 0 !important;
            }
            .wp-block-masterstudy-iconbox__title > a {
                color: var(--wp-block-masterstudy-iconbox--titleColor) !important;
                font-size: var(--wp-block-masterstudy-iconbox--titleFontSize) !important;
                font-weight: var(--wp-block-masterstudy-iconbox--titleFontWeight) !important;
            }
            .wp-block-masterstudy-iconbox__description {
                margin: 0 !important;
                padding: 0 !important;
            }
            .wp-block-masterstudy-iconbox__description > a {
                color: var(--wp-block-masterstudy-iconbox--descColor) !important;
                font-size: var(--wp-block-masterstudy-iconbox--descFontSize) !important;
                font-weight: var(--wp-block-masterstudy-iconbox--descFontWeight) !important;
            }
            .wp-block-masterstudy-iconbox.alignwide {
                max-width: var(--wp--style--global--wide-size, 930px);
            }
            .wp-block-masterstudy-iconbox.alignfull {
                margin-left: calc(var(--wp--style--root--padding-left) * -1);
                margin-right: calc(var(--wp--style--root--padding-right) * -1);
                max-width: 100%;
            }
            .wp-block-masterstudy-iconbox:where(:not(.alignleft):not(.alignright):not(.alignfull)) {
                margin-left: auto !important;
                margin-right: auto !important;
                max-width: var(--wp--style--global--content-size, 1140px);
            }
        </style>
        <link rel="stylesheet" id="masterstudy-adaptive-box-style-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/assets/gutenberg/blocks/adaptive-box/style-indexc5da.css?ver=0.1.0" type="text/css" media="all" />
        <style id="masterstudy-advanced-text-style-inline-css" type="text/css">
            .wp-block-masterstudy-advanced-text {
                box-sizing: border-box;
                text-wrap: wrap;
                overflow: hidden;
                white-space: normal;
            }
            @media screen and (max-width: 575.98px) {
                .wp-block-masterstudy-advanced-text {
                    margin: var(--wp-block-masterstudy-advanced-text-mobile--margin, 0) !important;
                    max-width: var(--wp-block-masterstudy-advanced-text-mobile--width, auto);
                    padding: var(--wp-block-masterstudy-advanced-text-mobile--padding, 0) !important;
                    text-align: var(--wp-block-masterstudy-advanced-text-mobile--textAlign, left) !important;
                }
                .wp-block-masterstudy-advanced-text__title {
                    color: inherit;
                    font-size: var(--wp-block-masterstudy-advanced-text-mobile--titleFontSize, 2rem) !important;
                    line-height: 1;
                    margin: var(--wp-block-masterstudy-advanced-text-mobile--titleMargin, 20px auto) !important;
                    padding: var(--wp-block-masterstudy-advanced-text-mobile--titlePadding, 0) !important;
                    white-space: normal;
                }
                .wp-block-masterstudy-advanced-text__text {
                    font-size: var(--wp-block-masterstudy-advanced-text-mobile--textFontSize, 1rem) !important;
                    margin: var(--wp-block-masterstudy-advanced-text-mobile--textMargin, 15px auto) !important;
                    padding: var(--wp-block-masterstudy-advanced-text-mobile--textPadding, 0) !important;
                }
            }
            @media screen and (min-width: 576px) and (max-width: 991.98px) {
                .wp-block-masterstudy-advanced-text {
                    margin: var(--wp-block-masterstudy-advanced-text-tablet--margin, 0) !important;
                    max-width: var(--wp-block-masterstudy-advanced-text-tablet--width, auto);
                    padding: var(--wp-block-masterstudy-advanced-text-tablet--padding, 0) !important;
                    text-align: var(--wp-block-masterstudy-advanced-text-tablet--textAlign, left) !important;
                }
                .wp-block-masterstudy-advanced-text__title {
                    color: inherit;
                    font-size: var(--wp-block-masterstudy-advanced-text-tablet--titleFontSize, 2rem) !important;
                    line-height: 1;
                    margin: var(--wp-block-masterstudy-advanced-text-tablet--titleMargin, 20px auto) !important;
                    padding: var(--wp-block-masterstudy-advanced-text-tablet--titlePadding, 0) !important;
                }
                .wp-block-masterstudy-advanced-text__text {
                    font-size: var(--wp-block-masterstudy-advanced-text-tablet--textFontSize, 1rem) !important;
                    margin: var(--wp-block-masterstudy-advanced-text-tablet--textMargin, 15px auto) !important;
                    padding: var(--wp-block-masterstudy-advanced-text-tablet--textPadding, 0) !important;
                }
            }
            @media screen and (min-width: 992px) {
                .wp-block-masterstudy-advanced-text {
                    margin: var(--wp-block-masterstudy-advanced-text-desktop--margin, 0) !important;
                    max-width: var(--wp-block-masterstudy-advanced-text-desktop--width, auto);
                    padding: var(--wp-block-masterstudy-advanced-text-desktop--padding, 0) !important;
                    text-align: var(--wp-block-masterstudy-advanced-text-desktop--textAlign, left) !important;
                    text-wrap: wrap !important;
                }
                .wp-block-masterstudy-advanced-text__title {
                    color: inherit;
                    font-size: var(--wp-block-masterstudy-advanced-text-desktop--titleFontSize, 2rem) !important;
                    line-height: 1;
                    margin: var(--wp-block-masterstudy-advanced-text-desktop--titleMargin, 20px auto) !important;
                    padding: var(--wp-block-masterstudy-advanced-text-desktop--titlePadding, 0) !important;
                }
                .wp-block-masterstudy-advanced-text__text {
                    font-size: var(--wp-block-masterstudy-advanced-text-desktop--textFontSize, 1rem) !important;
                    margin: var(--wp-block-masterstudy-advanced-text-desktop--textMargin, 15px auto) !important;
                    padding: var(--wp-block-masterstudy-advanced-text-desktop--textPadding, 0) !important;
                }
            }
            .wp-block-masterstudy-advanced-text.alignwide {
                max-width: var(--wp--style--global--wide-size, 930px);
            }
            .wp-block-masterstudy-advanced-text.alignfull {
                margin-left: calc(var(--wp--style--root--padding-left) * -1);
                margin-right: calc(var(--wp--style--root--padding-right) * -1);
                max-width: 100%;
            }
            .wp-block-masterstudy-advanced-text:where(:not(.alignleft):not(.alignright):not(.alignfull)) {
                margin-left: auto !important;
                margin-right: auto !important;
                max-width: var(--wp--style--global--content-size, 1140px);
            }
        </style>
        <link rel="stylesheet" id="contact-form-7-css" href="wp-content/plugins/contact-form-7/includes/css/styles7404.css?ver=5.9.3" type="text/css" media="all" />
        <style id="contact-form-7-inline-css" type="text/css">
            .wpcf7 .wpcf7-recaptcha iframe {
                margin-bottom: 0;
            }
            .wpcf7 .wpcf7-recaptcha[data-align="center"] > div {
                margin: 0 auto;
            }
            .wpcf7 .wpcf7-recaptcha[data-align="right"] > div {
                margin: 0 0 0 auto;
            }
        </style>
        <link rel="stylesheet" id="cookie-law-info-css" href="wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-publicdeae.css?ver=3.2.1" type="text/css" media="all" />
        <link rel="stylesheet" id="cookie-law-info-gdpr-css" href="wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-gdprdeae.css?ver=3.2.1" type="text/css" media="all" />
        <link rel="stylesheet" id="fonts-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/css/variables/fonts3d36.css?ver=3.3.1" type="text/css" media="all" />
        <link rel="stylesheet" id="linear-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/linearicons/linear3d36.css?ver=3.3.1" type="text/css" media="all" />
        <link rel="stylesheet" id="linear-icons-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/_core/libraries/nuxy/metaboxes/assets/css/linear-icons3d36.css?ver=3.3.1" type="text/css" media="all" />
        <link rel="stylesheet" id="font-awesome-min-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/vendors/font-awesome.min3d36.css?ver=3.3.1" type="text/css" media="all" />
        <link rel="stylesheet" id="ms-font-icomoon-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/vendors/icomoon.fonts3d36.css?ver=3.3.1" type="text/css" media="all" />
        <link rel="stylesheet" id="stm_lms_icons-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/icons/style3d36.css?ver=3.3.1" type="text/css" media="all" />
        <link rel="stylesheet" id="video.js-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/vendors/video-js.min3d36.css?ver=3.3.1" type="text/css" media="all" />
        <link rel="stylesheet" id="masterstudy-lms-learning-management-system-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/css/stm_lms596f.css?ver=1714751625" type="text/css" media="all" />
        <link rel="stylesheet" id="stm-lms-noconflict/main-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/css/parts/noconflict/main3d36.css?ver=3.3.1" type="text/css" media="all" />
        <link rel="stylesheet" id="masterstudy-search-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/css/components/search3d36.css?ver=3.3.1" type="text/css" media="all" />
        <link rel="stylesheet" id="masterstudy-loader-css" href="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/css/components/loader3d36.css?ver=3.3.1" type="text/css" media="all" />
        <link rel="stylesheet" id="stm_lazyload_init-css" href="wp-content/plugins/stm-post-type/theme/assets/lazyload8f99.css?ver=6.5" type="text/css" media="all" />
        <link rel="stylesheet" id="dashicons-css" href="wp-includes/css/dashicons.min8f99.css?ver=6.5" type="text/css" media="all" />
        <link rel="stylesheet" id="theme-style-css" href="wp-content/themes/md3-child/stylec66d.css?ver=12" type="text/css" media="all" />
        <link rel="stylesheet" id="font-icomoon-css" href="wp-content/themes/md3/assets/css/icomoon.fonts6aec.css?ver=3.0" type="text/css" media="all" />
        <link rel="stylesheet" id="font-icomoon-rtl-css" href="wp-content/themes/md3/assets/css/rtl_demo/style6aec.css?ver=3.0" type="text/css" media="all" />
        <link rel="stylesheet" id="select2-css" href="wp-content/themes/md3/assets/css/select2.min6aec.css?ver=3.0" type="text/css" media="all" />
        <link rel="stylesheet" id="fancybox-css" href="wp-content/themes/md3/assets/vendors/jquery.fancybox.min6aec.css?ver=3.0" type="text/css" media="all" />
        <link rel="stylesheet" id="animate-css" href="wp-content/themes/md3/assets/css/animate6aec.css?ver=3.0" type="text/css" media="all" />
        <link rel="stylesheet" id="stm_theme_styles-css" href="wp-content/themes/md3/assets/css/styles6aec.css?ver=3.0" type="text/css" media="all" />
        <link rel="stylesheet" id="stm-stm_layout_styles-language_center-css" href="wp-content/themes/md3/assets/css/vc_modules/stm_layout_styles/language_center6aec.css?ver=3.0" type="text/css" media="all" />
        <link rel="stylesheet" id="stm_theme_styles_animation-css" href="wp-content/themes/md3/assets/css/animation6aec.css?ver=3.0" type="text/css" media="all" />
        <link rel="stylesheet" id="stm-headers-header_default-css" href="wp-content/themes/md3/assets/css/vc_modules/headers/header_default6aec.css?ver=3.0" type="text/css" media="all" />
        <link rel="stylesheet" id="stm-headers_transparent-header_default_transparent-css" href="wp-content/themes/md3/assets/css/vc_modules/headers_transparent/header_default_transparent6aec.css?ver=3.0" type="text/css" media="all" />
        <link rel="stylesheet" id="stm_theme_style-css" href="wp-content/themes/md3-child/style6aec.css?ver=3.0" type="text/css" media="all" />
        <link rel="stylesheet" id="stm_theme_custom_styles-css" href="wp-content/uploads/stm_lms_styles/custom_styles6aec.css?ver=3.0" type="text/css" media="all" />
        <link rel="stylesheet" id="language_center-css" href="wp-content/themes/md3/assets/layout_icons/language_center/style6aec.css?ver=3.0" type="text/css" media="all" />
        <link rel="stylesheet" id="wpb-pcf-sweetalert2-css" href="wp-content/plugins/wpb-popup-for-contact-form-7/assets/css/sweetalert2.min5243.css?ver=5.4.5" type="text/css" media="all" />
        <link rel="stylesheet" id="wpb-pcf-styles-css" href="wp-content/plugins/wpb-popup-for-contact-form-7/assets/css/frontend5243.css?ver=5.4.5" type="text/css" media="all" />
        <style id="wpb-pcf-styles-inline-css" type="text/css">
            .wpb-pcf-btn-default,
            .wpb-pcf-form-style-true input[type="submit"],
            .wpb-pcf-form-style-true input[type="button"],
            .wpb-pcf-form-style-true input[type="submit"],
            .wpb-pcf-form-style-true input[type="button"] {
                color: #ffffff;
                background: #17a2b8;
            }
            .wpb-pcf-btn-default:hover,
            .wpb-pcf-btn-default:focus,
            .wpb-pcf-form-style-true input[type="submit"]:hover,
            .wpb-pcf-form-style-true input[type="submit"]:focus,
            .wpb-pcf-form-style-true input[type="button"]:hover,
            .wpb-pcf-form-style-true input[type="button"]:focus,
            .wpb-pcf-form-style-true input[type="submit"]:hover,
            .wpb-pcf-form-style-true input[type="button"]:hover,
            .wpb-pcf-form-style-true input[type="submit"]:focus,
            .wpb-pcf-form-style-true input[type="button"]:focus {
                color: #ffffff;
                background: #138496;
            }
        </style>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" id="bb-css-css" href="wp-content/plugins/vc_carousel_anything/bestbugcore/assets/css/stylef9d7.css?ver=1.4.4.1" type="text/css" media="all" />
        <link rel="stylesheet" id="slick-css" href="wp-content/plugins/vc_carousel_anything/assets/libs/slick/slick8f99.css?ver=6.5" type="text/css" media="all" />
        <link rel="stylesheet" id="bb-vcuc-css" href="wp-content/plugins/vc_carousel_anything/assets/css/style8f99.css?ver=6.5" type="text/css" media="all" />
        <link rel="stylesheet" id="js_composer_front-css" href="wp-content/plugins/js_composer/assets/css/js_composer.mine1b2.css?ver=6.9.0" type="text/css" media="all" />
        <link
            rel="stylesheet"
            id="redux-google-fonts-stm_option-css"
            href="https://fonts.googleapis.com/css?family=Montserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CRaleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic&amp;subset=latin&amp;ver=1639819984"
            type="text/css"
            media="all"
        />
        <script type="text/javascript" src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
        <script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
        <script type="text/javascript" id="cookie-law-info-js-extra">
            /* <![CDATA[ */
            var Cli_Data = {
                nn_cookie_ids: ["_gat_UA-96606226-1", "_ga_L8TLV23H3N", "_gid", "_ga", "stdcid_53b517454d5afa4948ae5258_close", "stdcid_53b517454d5afa4948ae5258", "stdvid"],
                cookielist: [],
                non_necessary_cookies: { studizz: ["stdcid_53b517454d5afa4948ae5258_close", "stdcid_53b517454d5afa4948ae5258", "stdvid"], analytics: ["_gat_UA-96606226-1", "_ga_L8TLV23H3N", "_gid", "_ga"] },
                ccpaEnabled: "",
                ccpaRegionBased: "",
                ccpaBarEnabled: "1",
                strictlyEnabled: ["necessary", "obligatoire"],
                ccpaType: "gdpr",
                js_blocking: "1",
                custom_integration: "",
                triggerDomRefresh: "",
                secure_cookies: "",
            };
            var cli_cookiebar_settings = {
                animate_speed_hide: "500",
                animate_speed_show: "500",
                background: "#FFF",
                border: "#b1a6a6c2",
                border_on: "",
                button_1_button_colour: "#adcd62",
                button_1_button_hover: "#8aa44e",
                button_1_link_colour: "#ffffff",
                button_1_as_button: "1",
                button_1_new_win: "",
                button_2_button_colour: "#333",
                button_2_button_hover: "#292929",
                button_2_link_colour: "#4d88cc",
                button_2_as_button: "",
                button_2_hidebar: "",
                button_3_button_colour: "#5f625e",
                button_3_button_hover: "#4c4e4b",
                button_3_link_colour: "#110f11",
                button_3_as_button: "1",
                button_3_new_win: "",
                button_4_button_colour: "#5f625e",
                button_4_button_hover: "#4c4e4b",
                button_4_link_colour: "#110f11",
                button_4_as_button: "1",
                button_7_button_colour: "#adcd62",
                button_7_button_hover: "#8aa44e",
                button_7_link_colour: "#ffffff",
                button_7_as_button: "1",
                button_7_new_win: "",
                font_family: "inherit",
                header_fix: "",
                notify_animate_hide: "1",
                notify_animate_show: "",
                notify_div_id: "#cookie-law-info-bar",
                notify_position_horizontal: "left",
                notify_position_vertical: "bottom",
                scroll_close: "",
                scroll_close_reload: "",
                accept_close_reload: "1",
                reject_close_reload: "1",
                showagain_tab: "1",
                showagain_background: "#fff",
                showagain_border: "#000",
                showagain_div_id: "#cookie-law-info-again",
                showagain_x_position: "20px",
                text: "#110f11",
                show_once_yn: "",
                show_once: "10000",
                logging_on: "",
                as_popup: "",
                popup_overlay: "1",
                bar_heading_text: "",
                cookie_bar_as: "banner",
                popup_showagain_position: "bottom-right",
                widget_position: "left",
            };
            var log_object = { ajax_url: "https:\/\/www.ingenieurs2000.com\/wp-admin\/admin-ajax.php" };
            /* ]]> */
        </script>
        <script type="text/javascript" src="wp-content/plugins/cookie-law-info/legacy/public/js/cookie-law-info-publicdeae.js?ver=3.2.1" id="cookie-law-info-js"></script>
        <script type="text/javascript" src="wp-content/plugins/masterstudy-lms-learning-management-system/_core/libraries/nuxy/metaboxes/assets/js/vue.min3d36.js?ver=3.3.1" id="vue.js-js"></script>
        <script type="text/javascript" src="wp-content/plugins/masterstudy-lms-learning-management-system/_core/libraries/nuxy/metaboxes/assets/js/vue-resource.min3d36.js?ver=3.3.1" id="vue-resource.js-js"></script>
        <script type="text/javascript" src="wp-content/plugins/masterstudy-lms-learning-management-system/_core/libraries/nuxy/metaboxes/assets/js/vue2-datepicker.min3d36.js?ver=3.3.1" id="vue2-datepicker-js"></script>
        <script type="text/javascript" id="stm-lms-lms-js-extra">
            /* <![CDATA[ */
            var stm_lms_vars = { symbol: "$", position: "left", currency_thousands: ",", wp_rest_nonce: "fb64f6494e" };
            /* ]]> */
        </script>
        <script type="text/javascript" src="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/js/lms3d36.js?ver=3.3.1" id="stm-lms-lms-js"></script>
        <script type="text/javascript" src="wp-content/plugins/masterstudy-lms-learning-management-system/_core/assets/js/noconflict/main3d36.js?ver=3.3.1" id="stm-lms-noconflict/main-js"></script>
        <script type="text/javascript" src="wp-content/plugins/stm-post-type/theme/assets/lazysizes.min8f99.js?ver=6.5" id="lazysizes.js-js"></script>
        <script type="text/javascript" src="wp-content/plugins/stm-post-type/theme/assets/stm_lms_lazyload8f99.js?ver=6.5" id="stm_lms_lazysizes-js"></script>
        <script type="text/javascript" src="wp-content/themes/md3-child/scripts8f56.js?ver=504311445582" id="custom-script-js"></script>
        <link rel="https://api.w.org/" href="wp-json/index.html" />
        <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/3163.json" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
        <meta name="generator" content="WordPress 6.5" />
        <link rel="shortlink" href="index.html" />
        <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embedfa62.json?url=https%3A%2F%2Fwww.ingenieurs2000.com%2F" />
        <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed0314?url=https%3A%2F%2Fwww.ingenieurs2000.com%2F&amp;format=xml" />
        <script>
            var stm_lms_pro_nonces = {
                stm_lms_pro_install_base: "9bdcd25152",
                stm_lms_pro_search_courses: "de7be74712",
                stm_lms_pro_udemy_import_courses: "93e4ebfcb8",
                stm_lms_pro_udemy_publish_course: "dd80573629",
                stm_lms_pro_udemy_import_curriculum: "b2a790ac71",
                stm_lms_pro_save_addons: "c75efa54e2",
                stm_lms_create_announcement: "324f644277",
                stm_lms_pro_upload_image: "572f19a4a6",
                stm_lms_pro_get_image_data: "720a68dc81",
                stm_lms_pro_save_quiz: "48f826d06b",
                stm_lms_pro_save_lesson: "f6fd9b2d2b",
                stm_lms_pro_save_front_course: "3a74b0d272",
                stm_lms_get_course_info: "ff892d7fd4",
                stm_lms_get_course_students: "1d92ec0a12",
                stm_lms_change_post_status: "453f4b2600",
                stm_lms_media_library_get_files: "e680ef8ef3",
                stm_lms_media_library_get_file_by_id: "fe83b36a70",
                stm_lms_media_library_delete_file: "dce40020c2",
                stm_lms_media_library_search_file: "3ecc9d6f77",
            };
        </script>
        <script type="text/javascript">
            var stm_lms_ajaxurl = "wp-admin/admin-ajax.html";
            var stm_lms_resturl = "wp-json/stm-lms/v1.json";
            var ms_lms_resturl = "wp-json/masterstudy-lms/v2.json";
            var ms_lms_nonce = "fb64f6494e";
            var stm_ajax_add_pear_hb = "288dce1277";
        </script>
        <style>
            .vue_is_disabled {
                display: none;
            }
            #wp-admin-bar-lms-settings img {
                max-width: 16px;
                vertical-align: sub;
            }
        </style>
        <script>
            var stm_lms_nonces = {
                stm_install_starter_theme: "04e6106865",
                load_modal: "455a45109a",
                load_content: "28661140d7",
                start_quiz: "11f87ef219",
                user_answers: "d82529bb17",
                get_order_info: "499daa8c7e",
                user_orders: "c0663b240b",
                stm_lms_get_instructor_courses: "5ea4875a14",
                stm_lms_add_comment: "6896c4d843",
                stm_lms_get_comments: "cf3a48a6da",
                stm_lms_login: "97502c0973",
                stm_lms_register: "377bb35445",
                stm_lms_become_instructor: "c1e94aeae2",
                stm_lms_enterprise: "f1f2e7c457",
                stm_lms_get_user_courses: "dc50a260a0",
                stm_lms_get_user_quizzes: "d3dc9f9e5b",
                stm_lms_wishlist: "0843174895",
                stm_lms_save_user_info: "125235b644",
                stm_lms_lost_password: "1e63d49c97",
                stm_lms_change_avatar: "afd5d634d5",
                stm_lms_delete_avatar: "6c10dd8826",
                stm_lms_complete_lesson: "401cd8cee2",
                stm_lms_use_membership: "d69c1eac5c",
                stm_lms_change_featured: "3acaf0eeab",
                stm_lms_delete_course_subscription: "21fa9adb24",
                stm_lms_get_reviews: "80c1877344",
                stm_lms_add_review: "bae48a3e57",
                stm_lms_add_to_cart: "b2d44febf1",
                stm_lms_delete_from_cart: "c42e896ab2",
                stm_lms_purchase: "f749fef9f9",
                stm_lms_send_message: "07f0d2e894",
                stm_lms_get_user_conversations: "307aa8f879",
                stm_lms_get_user_messages: "e8aae2f0c8",
                stm_curriculum: "c6d0c12617",
                stm_manage_posts: "a6df5f32a6",
                stm_curriculum_create_item: "677e4da479",
                stm_curriculum_get_item: "906ce9ae85",
                stm_save_questions: "1ac503c2da",
                stm_lms_terms: "c26e2f6bf5",
                stm_lms_questions: "ca6ccda125",
                stm_lms_create_term: "520aeefa81",
                stm_save_title: "aa09236cd3",
                wpcfto_save_settings: "7f6548c2cf",
                stm_lms_tables_update: "e6223411f2",
                stm_lms_get_enterprise_groups: "24cfa323d1",
                stm_lms_get_enterprise_group: "5d62a93bf4",
                stm_lms_add_enterprise_group: "253f6ba539",
                stm_lms_delete_enterprise_group: "c85c90d881",
                stm_lms_add_to_cart_enterprise: "e727819c90",
                stm_lms_get_user_ent_courses: "556cb2f06c",
                stm_lms_delete_user_ent_courses: "fbb6d1e1af",
                stm_lms_add_user_ent_courses: "9e44f4328f",
                stm_lms_change_ent_group_admin: "a9e59c2144",
                stm_lms_delete_user_from_group: "703de85f3a",
                stm_lms_import_groups: "d8dd228b64",
                stm_lms_upload_file_assignment: "df51de95e2",
                stm_lms_delete_assignment_file: "68da9ae6a6",
                stm_lms_save_draft_content: "5f028f1b52",
                stm_lms_accept_draft_assignment: "2ba5fd7315",
                stm_lms_get_assignment_data: "a8ae9a2a72",
                stm_lms_get_instructor_assingments: "3298921e12",
                stm_lms_get_user_assingments: "e10ede076b",
                stm_lms_edit_user_answer: "a39df4ef42",
                stm_lms_get_user_points_history: "55dc7cb5f4",
                stm_lms_buy_for_points: "8a94afd151",
                stm_lms_get_point_users: "7b9525a04e",
                stm_lms_get_user_points_history_admin: "82b3080e5e",
                stm_lms_change_points: "765c766f54",
                stm_lms_delete_points: "f17c1d1796",
                stm_lms_get_user_bundles: "f96c47e904",
                stm_lms_change_bundle_status: "f76ff847c6",
                stm_lms_delete_bundle: "d8a64a1105",
                stm_lms_get_co_courses: "799d43947b",
                stm_lms_check_certificate_code: "ccceddec12",
                stm_lms_get_google_classroom_courses: "578039f944",
                stm_lms_get_google_classroom_course: "d4c6ed7a6c",
                stm_lms_get_google_classroom_publish_course: "08b69cc06b",
                stm_lms_get_g_c_get_archive_page: "e57d8aeb39",
                install_zoom_addon: "99a883460d",
                stm_lms_get_course_cookie_redirect: "265672b5fc",
                stm_get_certificates: "23d978a905",
                stm_get_certificate_fields: "a8802e4ff3",
                stm_save_certificate: "d8aad9598e",
                stm_generate_certificates_preview: "df3bc66a5d",
                stm_save_default_certificate: "48bbbc58ee",
                stm_delete_default_certificate: "53aad000eb",
                stm_save_certificate_category: "5ad5981a2d",
                stm_delete_certificate_category: "cfa0498cdb",
                stm_get_certificate_categories: "3de719cb23",
                stm_get_certificate: "5a5a217873",
                stm_delete_certificate: "ddcb01d0ed",
                stm_lms_get_users_submissions: "a1e54bc96d",
                stm_lms_update_user_status: "d025749fbe",
                stm_lms_hide_become_instructor_notice: "00cb49143d",
                stm_lms_ban_user: "5bd1b02796",
                stm_lms_save_forms: "a52d3e310c",
                stm_lms_get_forms: "a868870096",
                stm_lms_upload_form_file: "592193e82b",
                stm_lms_dashboard_get_course_students: "d19eba3454",
                stm_lms_dashboard_delete_user_from_course: "fd82384c09",
                stm_lms_dashboard_add_user_to_course: "c0fd017708",
                stm_lms_add_to_cart_guest: "2cd27c99a0",
                stm_lms_fast_login: "fea582c14a",
                stm_lms_fast_register: "6cabefca88",
                stm_lms_change_lms_author: "c9f06e8efd",
                stm_lms_add_student_manually: "cbca9c446b",
                stm_lms_change_course_status: "780823b92d",
                stm_lms_total_progress: "75264788dc",
                stm_lms_add_h5p_result: "c93d7e8df5",
                stm_lms_toggle_buying: "0e5894c51e",
                stm_lms_logout: "92a82ad608",
                stm_lms_restore_password: "63d01326ec",
                stm_lms_hide_announcement: "be0070da1f",
                stm_lms_get_curriculum_v2: "59ac5edbfa",
                stm_lms_dashboard_get_student_progress: "f36ab9fffa",
                stm_lms_dashboard_set_student_item_progress: "633da113cf",
                stm_lms_dashboard_reset_student_progress: "01d1982013",
                stm_lms_dashboard_get_courses_list: "bd446489e6",
                stm_lms_dashboard_get_student_assignments: "ea6b9dae40",
                stm_lms_dashboard_get_student_quizzes: "3faa5137fe",
                stm_lms_dashboard_get_student_quiz: "9b608d555b",
                stm_lms_wizard_save_settings: "878531cfa7",
                stm_lms_wizard_save_business_type: "b064e4aa8a",
                stm_lms_get_enrolled_assingments: "301611a4ce",
                "stm-lms-starter-theme-install": "8ae0d4c6e3",
            };
        </script>
        <style>
            :root {
                --accent-100: rgba(34, 122, 255, 1);
                --accent-70: rgba(34, 122, 255, 0.7);
                --accent-50: rgba(34, 122, 255, 0.5);
                --accent-30: rgba(34, 122, 255, 0.3);
                --accent-10: rgba(34, 122, 255, 0.1);
                --accent-5: rgba(34, 122, 255, 0.05);
                --accent-hover: rgba(34, 122, 255, 0.85);
                --warning-100: rgba(255, 168, 0, 1);
                --warning-70: rgba(255, 168, 0, 0.7);
                --warning-50: rgba(255, 168, 0, 0.5);
                --warning-30: rgba(255, 168, 0, 0.3);
                --warning-10: rgba(255, 168, 0, 0.1);
                --warning-5: rgba(255, 168, 0, 0.05);
                --warning-hover: rgba(255, 168, 0, 0.85);
                --danger-100: rgba(255, 57, 69, 1);
                --danger-70: rgba(255, 57, 69, 0.7);
                --danger-50: rgba(255, 57, 69, 0.5);
                --danger-30: rgba(255, 57, 69, 0.3);
                --danger-10: rgba(255, 57, 69, 0.1);
                --danger-5: rgba(255, 57, 69, 0.05);
                --danger-hover: rgba(255, 57, 69, 0.85);
                --success-100: rgba(97, 204, 47, 1);
                --success-70: rgba(97, 204, 47, 0.7);
                --success-50: rgba(97, 204, 47, 0.5);
                --success-30: rgba(97, 204, 47, 0.3);
                --success-10: rgba(97, 204, 47, 0.1);
                --success-5: rgba(97, 204, 47, 0.05);
                --success-hover: rgba(97, 204, 47, 0.85);
            }
        </style>
        <!-- site-navigation-element Schema optimized by Schema Pro -->
        <script type="application/ld+json">
            {
                "@context": "https:\/\/schema.org",
                "@graph": [
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Nos formations", "url": "" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Col1", "url": "#" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Nos Bac+2", "url": "https:\/\/www.ingenieurs2000.com\/bac-2\/" },
                    {
                        "@context": "https:\/\/schema.org",
                        "@type": "SiteNavigationElement",
                        "id": "site-navigation",
                        "name": "DEUST  Informatique d\u2019Organisation et Syst\u00e8mes d\u2019Information",
                        "url": "https:\/\/www.ingenieurs2000.com\/bac-2\/deust-informatique-dorganisation-et-systemes-dinformation-iosi\/"
                    },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Nos Bac+3", "url": "https:\/\/www.ingenieurs2000.com\/bac-3\/" },
                    {
                        "@context": "https:\/\/schema.org",
                        "@type": "SiteNavigationElement",
                        "id": "site-navigation",
                        "name": "Bachelor Universitaire de Technologie \u2013 Informatique",
                        "url": "https:\/\/www.ingenieurs2000.com\/bac-3\/but-informatique\/"
                    },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Nos Bac+5", "url": "https:\/\/www.ingenieurs2000.com\/bac-5\/" },
                    {
                        "@context": "https:\/\/schema.org",
                        "@type": "SiteNavigationElement",
                        "id": "site-navigation",
                        "name": "Expert en num\u00e9risation des syst\u00e8mes et processus de production",
                        "url": "https:\/\/www.ingenieurs2000.com\/bac-5\/expert-en-numerisation-des-systemes-et-processus-de-production\/"
                    },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Col2", "url": "#" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Nos Formations d\u2019Ing\u00e9nieur", "url": "https:\/\/www.ingenieurs2000.com\/formations-ingenieur\/" },
                    {
                        "@context": "https:\/\/schema.org",
                        "@type": "SiteNavigationElement",
                        "id": "site-navigation",
                        "name": "Ing\u00e9nieur G\u00e9nie \u00c9nerg\u00e9tique de la Construction durable",
                        "url": "https:\/\/www.ingenieurs2000.com\/formations-ingenieur\/genie-energetique-construction-durable\/"
                    },
                    {
                        "@context": "https:\/\/schema.org",
                        "@type": "SiteNavigationElement",
                        "id": "site-navigation",
                        "name": "Ing\u00e9nieur M\u00e9catronique \u2013 Robotique",
                        "url": "https:\/\/www.ingenieurs2000.com\/formations-ingenieur\/mecatronique-robotique\/"
                    },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Ing\u00e9nieur Mat\u00e9riaux", "url": "https:\/\/www.ingenieurs2000.com\/formations-ingenieur\/materiaux\/" },
                    {
                        "@context": "https:\/\/schema.org",
                        "@type": "SiteNavigationElement",
                        "id": "site-navigation",
                        "name": "Ing\u00e9nieur A\u00e9ronautique et Espace",
                        "url": "https:\/\/www.ingenieurs2000.com\/formations-ingenieur\/aeronautique-espace\/"
                    },
                    {
                        "@context": "https:\/\/schema.org",
                        "@type": "SiteNavigationElement",
                        "id": "site-navigation",
                        "name": "Ing\u00e9nieur G\u00e9nie \u00c9lectrique",
                        "url": "https:\/\/www.ingenieurs2000.com\/formations-ingenieur\/genie-electrique-eprm-idee\/"
                    },
                    {
                        "@context": "https:\/\/schema.org",
                        "@type": "SiteNavigationElement",
                        "id": "site-navigation",
                        "name": "Ing\u00e9nieur Instrumentation, M\u00e9trologie, Qualit\u00e9",
                        "url": "https:\/\/www.ingenieurs2000.com\/formations-ingenieur\/ingenieur-instrumentation-metrologie-qualite\/"
                    },
                    {
                        "@context": "https:\/\/schema.org",
                        "@type": "SiteNavigationElement",
                        "id": "site-navigation",
                        "name": "Ing\u00e9nieur Production Maintenance Industrielle et Num\u00e9rique",
                        "url": "https:\/\/www.ingenieurs2000.com\/formations-ingenieur\/ingenieur-production-maintenance-industrielle-numerique\/"
                    },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Ing\u00e9nieurs 2000", "url": "" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Qui Sommes-nous ?", "url": "https:\/\/www.ingenieurs2000.com\/ingenieurs2000\/" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Opco Partenaires", "url": "https:\/\/www.ingenieurs2000.com\/opco\/" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Conseils de Formation Professionnels", "url": "https:\/\/www.ingenieurs2000.com\/entreprise\/" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Entreprises Partenaires", "url": "https:\/\/www.ingenieurs2000.com\/partenaires\/" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "\u00c9coles Partenaires", "url": "https:\/\/www.ingenieurs2000.com\/ecole-ingenieur-partenariat\/" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Partenariats sp\u00e9cifiques", "url": "https:\/\/www.ingenieurs2000.com\/partenariats-specifiques\/" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Arvez SAS, filiale d'Ing\u00e9nieurs 2000", "url": "https:\/\/www.ingenieurs2000.com\/arvez-2\/" },
                    {
                        "@context": "https:\/\/schema.org",
                        "@type": "SiteNavigationElement",
                        "id": "site-navigation",
                        "name": "Formation Devenir Tuteur d'entreprise",
                        "url": "https:\/\/www.ingenieurs2000.com\/devenir-tuteur-en-entreprise\/"
                    },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Contacts", "url": "https:\/\/www.ingenieurs2000.com\/contact-plans-acces\/" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Admission", "url": "https:\/\/www.ingenieurs2000.com\/admissions\/" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Apprentis", "url": "" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "L'Alternance : mode d'emploi", "url": "https:\/\/www.ingenieurs2000.com\/apprentissage\/" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Mobilit\u00e9 Internationale", "url": "https:\/\/www.ingenieurs2000.com\/mobilite-internationale-apprentis\/" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Handicap", "url": "https:\/\/www.ingenieurs2000.com\/handicap\/" },
                    {
                        "@context": "https:\/\/schema.org",
                        "@type": "SiteNavigationElement",
                        "id": "site-navigation",
                        "name": "Carri\u00e8re &#038; Insertion professionnelle",
                        "url": "https:\/\/www.ingenieurs2000.com\/linsertion-professionnelle\/"
                    },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Vie associative", "url": "https:\/\/www.ingenieurs2000.com\/vie-associative\/" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Alumni", "url": "https:\/\/www.ingenieurs2000.com\/ingenieur-alumni\/" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Entreprise", "url": "" },
                    {
                        "@context": "https:\/\/schema.org",
                        "@type": "SiteNavigationElement",
                        "id": "site-navigation",
                        "name": "Pr\u00e9sentation",
                        "url": "https:\/\/www.ingenieurs2000.com\/presentation-du-service-des-relations-entreprises\/"
                    },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "D\u00e9posez une offre en alternance", "url": "https:\/\/www.ingenieurs2000.com\/offre-apprentissage\/" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Entreprises partenaires", "url": "https:\/\/www.ingenieurs2000.com\/partenaires\/" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Participez aux Conseils de formation professionnels", "url": "https:\/\/www.ingenieurs2000.com\/entreprise\/" },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Financement de la formation", "url": "https:\/\/www.ingenieurs2000.com\/financement-formation\/" },
                    {
                        "@context": "https:\/\/schema.org",
                        "@type": "SiteNavigationElement",
                        "id": "site-navigation",
                        "name": "Le contrat d'alternance",
                        "url": "https:\/\/www.ingenieurs2000.com\/le-contrat-dapprentissage-pour-les-employeurs\/"
                    },
                    { "@context": "https:\/\/schema.org", "@type": "SiteNavigationElement", "id": "site-navigation", "name": "Devenez partenaire", "url": "https:\/\/www.ingenieurs2000.com\/devenez-partenaires\/" }
                ]
            }
        </script>
        <!-- / site-navigation-element Schema optimized by Schema Pro -->
        <script type="text/javascript">
            var stm_wpcfto_ajaxurl = "wp-admin/admin-ajax.html";
        </script>

        <style>
            .vue_is_disabled {
                display: none;
            }
        </style>
        <script>
            var stm_wpcfto_nonces = { wpcfto_save_settings: "7f6548c2cf", get_image_url: "e5a8619edf", wpcfto_upload_file: "c47325cb8e", wpcfto_search_posts: "fd614846c3" };
        </script>
        <script>
            var ajaxurl = "wp-admin/admin-ajax.html";
            var stm_install_plugin = "8a38c66276";
            var stm_buddypress_groups = "fe31979cec";
        </script>
        <link rel="shortcut icon" type="image/x-icon" href="cef/Logo_CEFPREPAS.j.png

        <!-- This Google structured data (Rich Snippet) auto generated by RadiusTheme Review Schema plugin version 2.2.1 -->

        <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
        <meta name="generator" content="Powered by Slider Revolution 6.5.5 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
        <style id="wpsp-style-frontend"></style>
        <script type="text/javascript">
            function setREVStartSize(e) {
                //window.requestAnimationFrame(function() {
                window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
                window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
                try {
                    var pw = document.getElementById(e.c).parentNode.offsetWidth,
                        newh;
                    pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                    e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                    e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                    e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                    e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                    e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                    e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                    e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                    if (e.layout === "fullscreen" || e.l === "fullscreen") newh = Math.max(e.mh, window.RSIH);
                    else {
                        e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                        for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                        e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                        e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                        for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                        var nl = new Array(e.rl.length),
                            ix = 0,
                            sl;
                        e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                        e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                        e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                        e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                        for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                        sl = nl[0];
                        for (var i in nl)
                            if (sl > nl[i] && nl[i] > 0) {
                                sl = nl[i];
                                ix = i;
                            }
                        var m = pw > e.gw[ix] + e.tabw + e.thumbw ? 1 : (pw - (e.tabw + e.thumbw)) / e.gw[ix];
                        newh = e.gh[ix] * m + (e.tabh + e.thumbh);
                    }
                    var el = document.getElementById(e.c);
                    if (el !== null && el) el.style.height = newh + "px";
                    el = document.getElementById(e.c + "_wrapper");
                    if (el !== null && el) {
                        el.style.height = newh + "px";
                        el.style.display = "block";
                    }
                } catch (e) {
                    console.log("Failure at Presize of Slider:" + e);
                }
                //});
            }
        </script>
        <style type="text/css" id="wp-custom-css">
            @media (min-width: 768px) {
                #cookie-law-info-bar {
                    display: grid;
                    align-items: center;
                    height: 30vh;
                }
            }

            .evenement_list .evenement_row .plugin_style {
                flex: inherit !important;
            }
            .post_types_big_carousel .img_col .img_wrapper:after {
                background-color: rgba(26, 57, 62, 0);
            }
            .post_types_big_carousel .img_col .img_wrapper img {
                object-fit: contain;
            }
            .sub_pages_shortcode .square .square_content h2 {
                font-size: 24px !important;
            }
            .youtubevideo {
                position: relative;
                padding-bottom: 56.25%; /* 16:9 */
                height: 0;
            }
            .youtubevideo iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .page-template-arvez-php #media_image-3x {
                display: none;
            }
            .single-post ul li a {
                font-size: 16px;
            }

            @media (max-width: 767px) {
                .footer_top_sidebar {
                    justify-content: center;
                    align-items: center;
                }
                .footer_top_sidebar #media_image-6 {
                    display: flex !important;
                    order: 1;
                }
                .footer_top_sidebar #media_image-5 {
                    display: flex !important;
                    order: 3;
                }
                .footer_top_sidebar #media_image-9 {
                    display: flex !important;
                    order: 2;
                }
            }

            @media (min-width: 768px) {
                .footer_bottom_sidebar #custom_html-2 .media_image-1 img:first-child {
                    margin-bottom: 20px;
                    padding: 0 10%;
                }
                .footer_bottom_sidebar #media_image-3 img {
                    padding: 0 10%;
                }
            }

            .fa-twitter:before {
                content: "\e61b" !important;
            }
        </style>
        <style type="text/css" title="dynamic-css" class="options-output">
            .logo-unit .logo {
                font-family: Montserrat;
                color: #333;
                font-size: 23px;
            }
            .header_top_bar,
            .header_top_bar a,
            .header_2_top_bar .header_2_top_bar__inner ul.header-menu li a {
                font-family: Raleway;
                font-weight: 700;
                font-style: normal;
                color: #5f625e;
                font-size: 14px;
            }
            #header .header_top_bar a:hover {
                color: #adcd62;
            }
            body.skin_custom_color .stm_archive_product_inner_grid_content .stm-courses li.product.course-col-list .product-image .onsale,
            body.skin_custom_color .related.products .stm-courses li.product.course-col-list .product-image .onsale,
            body.skin_custom_color .stm_archive_product_inner_grid_content .stm-courses li.product .product__inner .woocommerce-LoopProduct-link .onsale,
            body.skin_custom_color .related.products .stm-courses li.product .product__inner .woocommerce-LoopProduct-link .onsale,
            body.skin_custom_color .post_list_main_section_wrapper .post_list_meta_unit .sticky_post,
            body.skin_custom_color .overflowed_content .wpb_column .icon_box,
            body.skin_custom_color .stm_countdown_bg,
            body.skin_custom_color #searchform-mobile .search-wrapper .search-submit,
            body.skin_custom_color .header-menu-mobile .header-menu > li .arrow.active,
            body.skin_custom_color .header-menu-mobile .header-menu > li.opened > a,
            body.skin_custom_color mark,
            body.skin_custom_color .woocommerce .cart-totals_wrap .shipping-calculator-button:hover,
            body.skin_custom_color .detailed_rating .detail_rating_unit tr td.bar .full_bar .bar_filler,
            body.skin_custom_color .product_status.new,
            body.skin_custom_color .stm_woo_helpbar .woocommerce-product-search input[type="submit"],
            body.skin_custom_color .stm_archive_product_inner_unit .stm_archive_product_inner_unit_centered .stm_featured_product_price .price.price_free,
            body.skin_custom_color .sidebar-area .widget:after,
            body.skin_custom_color .sidebar-area .socials_widget_wrapper .widget_socials li .back a,
            body.skin_custom_color .socials_widget_wrapper .widget_socials li .back a,
            body.skin_custom_color .widget_categories ul li a:hover:after,
            body.skin_custom_color .event_date_info_table .event_btn .btn-default,
            body.skin_custom_color .course_table tr td.stm_badge .badge_unit.quiz,
            body.skin_custom_color .page-links span:hover,
            body.skin_custom_color .page-links span:after,
            body.skin_custom_color .page-links > span:after,
            body.skin_custom_color .page-links > span,
            body.skin_custom_color .stm_post_unit:after,
            body.skin_custom_color .blog_layout_grid .post_list_content_unit:after,
            body.skin_custom_color ul.page-numbers > li a.page-numbers:after,
            body.skin_custom_color ul.page-numbers > li span.page-numbers:after,
            body.skin_custom_color ul.page-numbers > li a.page-numbers:hover,
            body.skin_custom_color ul.page-numbers > li span.page-numbers:hover,
            body.skin_custom_color ul.page-numbers > li a.page-numbers.current:after,
            body.skin_custom_color ul.page-numbers > li span.page-numbers.current:after,
            body.skin_custom_color ul.page-numbers > li a.page-numbers.current,
            body.skin_custom_color ul.page-numbers > li span.page-numbers.current,
            body.skin_custom_color .triangled_colored_separator,
            body.skin_custom_color .magic_line,
            body.skin_custom_color .navbar-toggle .icon-bar,
            body.skin_custom_color .navbar-toggle:hover .icon-bar,
            body.skin_custom_color #searchform .search-submit,
            body.skin_custom_color .header_main_menu_wrapper .header-menu > li > ul.sub-menu:before,
            body.skin_custom_color .search-toggler:after,
            body.skin_custom_color .modal .popup_title,
            body.skin_custom_color .sticky_post,
            body.skin_custom_color .btn-carousel-control:after,
            .primary_bg_color,
            .mbc,
            .stm_lms_courses_carousel_wrapper .owl-dots .owl-dot.active,
            .stm_lms_courses_carousel__term.active,
            body.course_hub .header_default.header_2,
            .triangled_colored_separator:before,
            .triangled_colored_separator:after,
            body.skin_custom_color.udemy .btn-default,
            .single_instructor .stm_lms_courses .stm_lms_load_more_courses,
            .single_instructor .stm_lms_courses .stm_lms_load_more_courses:hover,
            .stm_lms_course_sticky_panel .stm_lms_course_sticky_panel__button .btn,
            .stm_lms_course_sticky_panel .stm_lms_course_sticky_panel__button .btn:hover,
            body.skin_custom_color.language_center .btn-default,
            .header-login-button.sign-up a,
            #header .header_6 .stm_lms_log_in,
            body.cooking .stm_lms_courses_carousel__buttons .stm_lms_courses_carousel__button:hover,
            body.cooking .stm_theme_wpb_video_wrapper .stm_video_preview:after,
            body.cooking .btn.btn-default,
            body.cooking .button,
            body.cooking .form-submit .submit,
            body.cooking .post-password-form input[type="submit"],
            body.cooking .btn.btn-default:hover,
            body.cooking .button:hover,
            body.cooking .form-submit .submit:hover,
            body.cooking .post-password-form input[type="submit"]:hover,
            body.cooking div.multiseparator:after,
            body.cooking .view_type_switcher a.view_grid.active_grid,
            body.cooking .view_type_switcher a.view_list.active_list,
            body.cooking .view_type_switcher a:hover,
            body.cooking.woocommerce .sidebar-area .widget .widget_title:after,
            body.cooking.woocommerce .sidebar-area .widget.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-handle,
            body.cooking.woocommerce .sidebar-area .widget.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-range,
            body.cooking .stm_lms_courses_list_view .stm_lms_courses__grid .stm_lms_courses__single--image > a:after,
            body.cooking .testimonials_main_wrapper.simple_carousel_wrapper .btn-carousel-control:hover,
            body.cooking .testimonials_main_wrapper.simple_carousel_wrapper .btn-carousel-control:focus,
            body.cooking .short_separator,
            body.cooking .widget_tag_cloud .tagcloud a:hover,
            body.cooking .blog_layout_grid .sticky .post_list_meta_unit,
            body.cooking .stm_lms_instructor_courses__single--featured .feature_it,
            .stm_archive_product_inner_grid_content .stm-courses li.product .product__inner .button:hover,
            body.tech .stm_lms_courses_carousel__buttons .stm_lms_courses_carousel__button:hover,
            body.tech .stm_theme_wpb_video_wrapper .stm_video_preview:after,
            body.tech .btn.btn-default,
            body.tech .button,
            body.tech .form-submit .submit,
            body.tech .post-password-form input[type="submit"],
            body.tech .btn.btn-default:hover,
            body.tech .button:hover,
            body.tech .form-submit .submit:hover,
            body.tech .post-password-form input[type="submit"]:hover,
            body.tech div.multiseparator:after,
            body.tech .view_type_switcher a.view_grid.active_grid,
            body.tech .view_type_switcher a.view_list.active_list,
            body.tech .view_type_switcher a:hover,
            body.tech.woocommerce .sidebar-area .widget .widget_title:after,
            body.tech.woocommerce .sidebar-area .widget.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-handle,
            body.tech.woocommerce .sidebar-area .widget.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-range,
            body.tech .stm_lms_courses_list_view .stm_lms_courses__grid .stm_lms_courses__single--image > a:after,
            body.tech .testimonials_main_wrapper.simple_carousel_wrapper .btn-carousel-control:hover,
            body.tech .testimonials_main_wrapper.simple_carousel_wrapper .btn-carousel-control:focus,
            body.tech .short_separator,
            body.tech .stm_lms_wishlist_button .lnr:after,
            body.tech .widget_tag_cloud .tagcloud a:hover,
            body.tech .blog_layout_grid .sticky .post_list_meta_unit,
            body.tech .stm_lms_instructor_courses__single--featured .feature_it,
            body.tech .select2-container--default .select2-results__option--highlighted[aria-selected],
            body.tech .select2-container--default .select2-results__option--highlighted[data-selected] {
                background-color: #adcd62;
            }
            .icon_box.stm_icon_box_hover_none {
                border-left-color: #adcd62;
            }
            body.skin_custom_color ul.page-numbers > li a.page-numbers:hover,
            body.skin_custom_color ul.page-numbers > li a.page-numbers.current,
            body.skin_custom_color ul.page-numbers > li span.page-numbers.current,
            body.skin_custom_color .custom-border textarea:active,
            body.skin_custom_color .custom-border input[type="text"]:active,
            body.skin_custom_color .custom-border input[type="email"]:active,
            body.skin_custom_color .custom-border input[type="number"]:active,
            body.skin_custom_color .custom-border input[type="password"]:active,
            body.skin_custom_color .custom-border input[type="tel"]:active,
            body.skin_custom_color .custom-border .form-control:active,
            body.skin_custom_color .custom-border textarea:focus,
            body.skin_custom_color .custom-border input[type="text"]:focus,
            body.skin_custom_color .custom-border input[type="email"]:focus,
            body.skin_custom_color .custom-border input[type="number"]:focus,
            body.skin_custom_color .custom-border input[type="password"]:focus,
            body.skin_custom_color .custom-border input[type="tel"]:focus,
            body.skin_custom_color .custom-border .form-control:focus,
            body.skin_custom_color .icon-btn:hover .icon_in_btn,
            body.skin_custom_color .icon-btn:hover,
            body.skin_custom_color .average_rating_unit,
            body.skin_custom_color blockquote,
            body.skin_custom_color .tp-caption .icon-btn:hover .icon_in_btn,
            body.skin_custom_color .tp-caption .icon-btn:hover,
            body.skin_custom_color .stm_theme_wpb_video_wrapper .stm_video_preview:after,
            body.skin_custom_color .btn-carousel-control,
            body.skin_custom_color .post_list_main_section_wrapper .post_list_meta_unit .post_list_comment_num,
            body.skin_custom_color .post_list_main_section_wrapper .post_list_meta_unit,
            body.skin_custom_color .search-toggler:hover,
            body.skin_custom_color .search-toggler,
            .stm_lms_courses_carousel_wrapper .owl-dots .owl-dot.active,
            .triangled_colored_separator .triangle:before,
            body.cooking .stm_lms_courses_carousel__buttons .stm_lms_courses_carousel__button,
            body.cooking .btn.btn-default,
            body.cooking .button,
            body.cooking .form-submit .submit,
            body.cooking .post-password-form input[type="submit"],
            body.cooking.woocommerce .sidebar-area .widget.widget_product_categories ul li a:after,
            body.cooking .select2-container--default .select2-selection--single .select2-selection__arrow b:after,
            body.cooking.woocommerce .sidebar-area .widget .widget_title:after,
            body.cooking .blog_layout_grid .plugin_style .post_list_inner_content_unit .post_list_meta_unit,
            body.cooking .blog_layout_grid .plugin_style .post_list_inner_content_unit .post_list_meta_unit .post_list_comment_num,
            body.cooking .widget_tag_cloud .tagcloud a:hover,
            body.tech .stm_lms_courses_carousel__buttons .stm_lms_courses_carousel__button,
            body.tech .btn.btn-default,
            body.tech .button,
            body.tech .form-submit .submit,
            body.tech .post-password-form input[type="submit"],
            body.tech.woocommerce .sidebar-area .widget.widget_product_categories ul li a:after,
            body.tech .select2-container--default .select2-selection--single .select2-selection__arrow b:after,
            body.tech.woocommerce .sidebar-area .widget .widget_title:after,
            body.tech .blog_layout_grid .plugin_style .post_list_inner_content_unit .post_list_meta_unit,
            body.tech .blog_layout_grid .plugin_style .post_list_inner_content_unit .post_list_meta_unit .post_list_comment_num,
            body.tech .widget_tag_cloud .tagcloud a:hover,
            body.tech .stm_lms_points_history__head .left a,
            body.tech .simple_carousel_wrapper_style_6 .navs #carousel-custom-dots li.active:before {
                border-color: #adcd62;
            }
            body.skin_custom_color .icon_box .icon i,
            body.skin_custom_color .icon-btn:hover .icon_in_btn,
            body.skin_custom_color .icon-btn:hover .link-title,
            body.skin_custom_color .stats_counter .h1,
            body.skin_custom_color .event_date_info .event_date_info_unit .event_labels,
            body.skin_custom_color .event-col .event_archive_item .event_location i,
            body.skin_custom_color .event-col .event_archive_item .event_start i,
            body.skin_custom_color .gallery_terms_list li.active a,
            body.skin_custom_color .tp-caption .icon-btn:hover .icon_in_btn,
            body.skin_custom_color .teacher_single_product_page > a:hover .title,
            body.skin_custom_color .sidebar-area .widget ul li a:hover:after,
            body.skin_custom_color div.pp_woocommerce .pp_gallery ul li a:hover,
            body.skin_custom_color div.pp_woocommerce .pp_gallery ul li.selected a,
            body.skin_custom_color .single_product_after_title .meta-unit i,
            body.skin_custom_color .single_product_after_title .meta-unit .value a:hover,
            body.skin_custom_color .woocommerce-breadcrumb a:hover,
            body.skin_custom_color #footer_copyright .copyright_text a:hover,
            body.skin_custom_color .widget_stm_recent_posts .widget_media .cats_w a:hover,
            body.skin_custom_color .widget_pages ul.style_2 li a:hover,
            body.skin_custom_color .sidebar-area .widget_categories ul li a:hover,
            body.skin_custom_color .sidebar-area .widget ul li a:hover,
            body.skin_custom_color .widget_categories ul li a:hover,
            body.skin_custom_color .stm_product_list_widget li a:hover .title,
            body.skin_custom_color .widget_contacts ul li .text a:hover,
            body.skin_custom_color .sidebar-area .widget_pages ul.style_1 li a:focus .h6,
            body.skin_custom_color .sidebar-area .widget_nav_menu ul.style_1 li a:focus .h6,
            body.skin_custom_color .sidebar-area .widget_pages ul.style_1 li a:focus,
            body.skin_custom_color .sidebar-area .widget_nav_menu ul.style_1 li a:focus,
            body.skin_custom_color .sidebar-area .widget_pages ul.style_1 li a:active .h6,
            body.skin_custom_color .sidebar-area .widget_nav_menu ul.style_1 li a:active .h6,
            body.skin_custom_color .sidebar-area .widget_pages ul.style_1 li a:active,
            body.skin_custom_color .sidebar-area .widget_nav_menu ul.style_1 li a:active,
            body.skin_custom_color .sidebar-area .widget_pages ul.style_1 li a:hover .h6,
            body.skin_custom_color .sidebar-area .widget_nav_menu ul.style_1 li a:hover .h6,
            body.skin_custom_color .sidebar-area .widget_pages ul.style_1 li a:hover,
            body.skin_custom_color .sidebar-area .widget_nav_menu ul.style_1 li a:hover,
            body.skin_custom_color .widget_pages ul.style_1 li a:focus .h6,
            body.skin_custom_color .widget_nav_menu ul.style_1 li a:focus .h6,
            body.skin_custom_color .widget_pages ul.style_1 li a:focus,
            body.skin_custom_color .widget_nav_menu ul.style_1 li a:focus,
            body.skin_custom_color .widget_pages ul.style_1 li a:active .h6,
            body.skin_custom_color .widget_nav_menu ul.style_1 li a:active .h6,
            body.skin_custom_color .widget_pages ul.style_1 li a:active,
            body.skin_custom_color .widget_nav_menu ul.style_1 li a:active,
            body.skin_custom_color .widget_pages ul.style_1 li a:hover .h6,
            body.skin_custom_color .widget_nav_menu ul.style_1 li a:hover .h6,
            body.skin_custom_color .widget_pages ul.style_1 li a:hover,
            body.skin_custom_color .widget_nav_menu ul.style_1 li a:hover,
            body.skin_custom_color .see_more a:after,
            body.skin_custom_color .see_more a,
            body.skin_custom_color .transparent_header_off .header_main_menu_wrapper ul > li > ul.sub-menu > li a:hover,
            body.skin_custom_color .stm_breadcrumbs_unit .navxtBreads > span a:hover,
            body.skin_custom_color .btn-carousel-control,
            body.skin_custom_color .post_list_main_section_wrapper .post_list_meta_unit .post_list_comment_num,
            body.skin_custom_color .post_list_main_section_wrapper .post_list_meta_unit .date-m,
            body.skin_custom_color .post_list_main_section_wrapper .post_list_meta_unit .date-d,
            body.skin_custom_color .stats_counter h1,
            body.skin_custom_color .yellow,
            body.skin_custom_color ol li a:hover,
            body.skin_custom_color ul li a:hover,
            body.skin_custom_color .search-toggler,
            .primary_color,
            .mtc_h:hover,
            body.classic_lms .header_top_bar .header_top_bar_socs ul li a:hover,
            body.classic_lms .header_top_bar a:hover,
            #footer .widget_stm_lms_popular_courses ul li a:hover .meta .h5.title,
            body.classic_lms .stm_lms_wishlist_button a:hover i,
            .classic_lms .post_list_main_section_wrapper .post_list_item_title:hover,
            .stm_lms_courses__single.style_2 .stm_lms_courses__single--title h5:hover,
            body.cooking .stm_lms_courses_carousel__buttons .stm_lms_courses_carousel__button,
            body.cooking #footer .widget_contacts ul li .icon,
            body.cooking #footer .stm_product_list_widget.widget_woo_stm_style_2 li a:hover .meta .title,
            body.cooking .courses_filters__switcher i:not(.active),
            body.cooking .blog_layout_grid .plugin_style .post_list_inner_content_unit .post_list_meta_unit .date-d,
            body.cooking .blog_layout_grid .post_list_meta_unit .date-m,
            body.cooking .blog_layout_grid .plugin_style .post_list_inner_content_unit .post_list_meta_unit .post_list_comment_num,
            body.cooking .stm_post_info .stm_post_details .post_meta li i,
            body.cooking .comment-form .logged-in-as a,
            body.cooking .post_list_content_unit .post_list_item_title:hover,
            body.cooking .post_list_content_unit .post_list_item_title:focus,
            body.cooking .widget_search .search-form > label:after,
            body.cooking .blog_layout_grid .post_list_cats a,
            body.cooking .blog_layout_grid .post_list_item_tags a,
            body.cooking .blog_layout_grid .plugin_style .post_list_inner_content_unit .post_list_meta_unit .date-d,
            body.cooking .blog_layout_grid .plugin_style .post_list_inner_content_unit .post_list_meta_unit .date-m-plugin,
            body.cooking .blog_layout_grid .plugin_style .post_list_inner_content_unit .post_list_meta_unit .post_list_comment_num,
            body.cooking #stm_lms_faq .panel.panel-default .panel-heading .panel-title a:hover,
            body.cooking .stm_post_info .stm_post_details .comments_num .post_comments:hover,
            body.cooking .stm_lms_courses_list_view .stm_lms_courses__grid .stm_lms_courses__single--info_title a:hover h4,
            body.cooking .comments-area .commentmetadata i,
            body.cooking .stm_lms_gradebook__filter .by_views_sorter.by-views,
            body.cooking .stm_post_info .stm_post_details .comments_num .post_comments i,
            body.tech .stm_lms_courses_carousel__buttons .stm_lms_courses_carousel__button,
            body.tech #footer .widget_contacts ul li .icon,
            body.tech #footer .stm_product_list_widget.widget_woo_stm_style_2 li a:hover .meta .title,
            body.tech .courses_filters__switcher i:not(.active),
            body.tech .blog_layout_grid .plugin_style .post_list_inner_content_unit .post_list_meta_unit .date-d,
            body.tech .blog_layout_grid .post_list_meta_unit .date-m,
            body.tech .blog_layout_grid .plugin_style .post_list_inner_content_unit .post_list_meta_unit .post_list_comment_num,
            body.tech .stm_post_info .stm_post_details .post_meta li i,
            body.tech .comment-form .logged-in-as a,
            body.tech .post_list_content_unit .post_list_item_title:hover,
            body.tech .post_list_content_unit .post_list_item_title:focus,
            body.tech .widget_search .search-form > label:after,
            body.tech .blog_layout_grid .post_list_cats a,
            body.tech .blog_layout_grid .post_list_item_tags a,
            body.tech .footer_wrapper .widget_contacts ul li .text a,
            body.tech .blog_layout_grid .plugin_style .post_list_inner_content_unit .post_list_meta_unit .date-d,
            body.tech .blog_layout_grid .plugin_style .post_list_inner_content_unit .post_list_meta_unit .date-m-plugin,
            body.tech .blog_layout_grid .plugin_style .post_list_inner_content_unit .post_list_meta_unit .post_list_comment_num,
            body.tech #stm_lms_faq .panel.panel-default .panel-heading .panel-title a:hover,
            body.tech .stm_post_info .stm_post_details .comments_num .post_comments:hover,
            body.tech .stm_lms_courses_list_view .stm_lms_courses__grid .stm_lms_courses__single--info_title a:hover h4,
            body.tech .comments-area .commentmetadata i,
            body.tech .stm_lms_gradebook__filter .by_views_sorter.by-views,
            body.tech .stm_post_info .stm_post_details .comments_num .post_comments i,
            body.tech .stm_lms_courses_carousel__top .h4:hover,
            body.tech.skin_custom_color #footer a:hover,
            body.tech .socials_widget_wrapper__text a,
            .testimonials_main_title_6 i {
                color: #adcd62;
            }
            body.skin_custom_color .triangled_colored_separator .triangle,
            body.skin_custom_color .magic_line:after,
            body.cooking .stm_lms_gradebook__filter .by_views_sorter.by-views,
            body.tech .stm_lms_gradebook__filter .by_views_sorter.by-views {
                border-bottom-color: #adcd62;
            }
            body.rtl-demo .stm_testimonials_wrapper_style_2 .stm_lms_testimonials_single__content:after {
                border-left-color: #053f81;
            }
            body.skin_custom_color .blog_layout_grid .post_list_meta_unit .sticky_post,
            body.skin_custom_color .blog_layout_list .post_list_meta_unit .sticky_post,
            body.skin_custom_color .product_status.special,
            body.skin_custom_color .view_type_switcher a:hover,
            body.skin_custom_color .view_type_switcher a.view_list.active_list,
            body.skin_custom_color .view_type_switcher a.view_grid.active_grid,
            body.skin_custom_color .stm_archive_product_inner_unit .stm_archive_product_inner_unit_centered .stm_featured_product_price .price,
            body.skin_custom_color .sidebar-area .widget_text .btn,
            body.skin_custom_color .stm_product_list_widget.widget_woo_stm_style_2 li a .meta .stm_featured_product_price .price,
            body.skin_custom_color .widget_tag_cloud .tagcloud a:hover,
            body.skin_custom_color .sidebar-area .widget ul li a:after,
            body.skin_custom_color .sidebar-area .socials_widget_wrapper .widget_socials li a,
            body.skin_custom_color .socials_widget_wrapper .widget_socials li a,
            body.skin_custom_color .gallery_single_view .gallery_img a:after,
            body.skin_custom_color .course_table tr td.stm_badge .badge_unit,
            body.skin_custom_color .widget_mailchimp .stm_mailchimp_unit .button,
            body.skin_custom_color .textwidget .btn:active,
            body.skin_custom_color .textwidget .btn:focus,
            body.skin_custom_color .form-submit .submit:active,
            body.skin_custom_color .form-submit .submit:focus,
            body.skin_custom_color .button:focus,
            body.skin_custom_color .button:active,
            body.skin_custom_color .btn-default:active,
            body.skin_custom_color .btn-default:focus,
            body.skin_custom_color .button:hover,
            body.skin_custom_color .textwidget .btn:hover,
            body.skin_custom_color .form-submit .submit,
            body.skin_custom_color .button,
            body.skin_custom_color .btn-default,
            .btn.btn-default:hover,
            .button:hover,
            .textwidget .btn:hover,
            body.skin_custom_color .short_separator,
            body.skin_custom_color div.multiseparator:after,
            body.skin_custom_color .widget_pages ul.style_2 li a:hover:after,
            body.skin_custom_color.single-product .product .woocommerce-tabs .wc-tabs li.active a:before,
            body.skin_custom_color.woocommerce .sidebar-area .widget .widget_title:after,
            body.skin_custom_color.woocommerce .sidebar-area .widget.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-handle,
            body.skin_custom_color.woocommerce .sidebar-area .widget.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-range,
            .sbc,
            .sbc_h:hover,
            .wpb-js-composer .vc_general.vc_tta.vc_tta-tabs.vc_tta-style-classic li.vc_tta-tab:not(.vc_active) > a,
            .wpb-js-composer .vc_general.vc_tta.vc_tta-tabs.vc_tta-style-classic li.vc_tta-tab:not(.vc_active) > a:hover,
            #header.transparent_header .header_2 .stm_lms_account_dropdown .dropdown button,
            .stm_lms_courses_categories.style_3 .stm_lms_courses_category > a:hover,
            .stm_lms_udemy_course .nav.nav-tabs > li a,
            body.classic_lms .classic_style .nav.nav-tabs > li.active a,
            .header_bottom:after,
            .sbc:hover,
            body.rtl-demo .stm_testimonials_wrapper_style_2 .stm_lms_testimonials_single__content {
                background-color: #053f81;
            }
            body.skin_custom_color.woocommerce .sidebar-area .widget.widget_layered_nav ul li a:after,
            body.skin_custom_color.woocommerce .sidebar-area .widget.widget_product_categories ul li a:after,
            body.skin_custom_color .wpb_tabs .form-control:focus,
            body.skin_custom_color .wpb_tabs .form-control:active,
            body.skin_custom_color .woocommerce .cart-totals_wrap .shipping-calculator-button,
            body.skin_custom_color .sidebar-area .widget_text .btn,
            body.skin_custom_color .widget_tag_cloud .tagcloud a:hover,
            body.skin_custom_color .icon_box.dark a:hover,
            body.skin_custom_color .simple-carousel-bullets a.selected,
            body.skin_custom_color .stm_sign_up_form .form-control:active,
            body.skin_custom_color .stm_sign_up_form .form-control:focus,
            body.skin_custom_color .form-submit .submit,
            body.skin_custom_color .button,
            body.skin_custom_color .btn-default,
            .sbrc,
            .sbrc_h:hover,
            .vc_general.vc_tta.vc_tta-tabs,
            body.skin_custom_color .blog_layout_grid .post_list_meta_unit,
            body.skin_custom_color .blog_layout_grid .post_list_meta_unit .post_list_comment_num,
            body.skin_custom_color .blog_layout_list .post_list_meta_unit .post_list_comment_num,
            body.skin_custom_color .blog_layout_list .post_list_meta_unit,
            body.tech .stm_lms_points_history__head .left a:hover,
            #header.transparent_header .header_2 .stm_lms_account_dropdown .dropdown button {
                border-color: #053f81;
            }
            .header_2_top_bar__inner .top_bar_right_part .header_top_bar_socs ul li a:hover,
            .secondary_color,
            body.skin_custom_color.single-product .product .woocommerce-tabs .wc-tabs li.active a,
            body.skin_custom_color.single-product .product .woocommerce-tabs .wc-tabs li a:hover,
            body.skin_custom_color .widget_pages ul.style_2 li a:hover .h6,
            body.skin_custom_color .icon_box .icon_text > h3 > span,
            body.skin_custom_color .stm_woo_archive_view_type_list .stm_featured_product_stock i,
            body.skin_custom_color .stm_woo_archive_view_type_list .expert_unit_link:hover .expert,
            body.skin_custom_color .stm_archive_product_inner_unit .stm_archive_product_inner_unit_centered .stm_featured_product_body a .title:hover,
            body.skin_custom_color .stm_product_list_widget.widget_woo_stm_style_2 li a:hover .title,
            body.skin_custom_color .blog_layout_grid .post_list_meta_unit .post_list_comment_num,
            body.skin_custom_color .blog_layout_grid .post_list_meta_unit .date-m,
            body.skin_custom_color .blog_layout_grid .post_list_meta_unit .date-d,
            body.skin_custom_color .blog_layout_list .post_list_meta_unit .post_list_comment_num,
            body.skin_custom_color .blog_layout_list .post_list_meta_unit .date-m,
            body.skin_custom_color .blog_layout_list .post_list_meta_unit .date-d,
            body.skin_custom_color .widget_stm_recent_posts .widget_media a:hover .h6,
            body.skin_custom_color .widget_product_search .woocommerce-product-search:after,
            body.skin_custom_color .widget_search .search-form > label:after,
            body.skin_custom_color .sidebar-area .widget ul li a,
            body.skin_custom_color .sidebar-area .widget_categories ul li a,
            body.skin_custom_color .widget_contacts ul li .text a,
            body.skin_custom_color .event-col .event_archive_item > a:hover .title,
            body.skin_custom_color .stm_contact_row a:hover,
            body.skin_custom_color .comments-area .commentmetadata i,
            body.skin_custom_color .stm_post_info .stm_post_details .comments_num .post_comments:hover,
            body.skin_custom_color .stm_post_info .stm_post_details .comments_num .post_comments i,
            body.skin_custom_color .stm_post_info .stm_post_details .post_meta li a:hover span,
            body.skin_custom_color .stm_post_info .stm_post_details .post_meta li i,
            body.skin_custom_color .blog_layout_list .post_list_item_tags .post_list_divider,
            body.skin_custom_color .blog_layout_list .post_list_item_tags a,
            body.skin_custom_color .blog_layout_list .post_list_cats .post_list_divider,
            body.skin_custom_color .blog_layout_list .post_list_cats a,
            body.skin_custom_color .blog_layout_list .post_list_item_title a:hover,
            body.skin_custom_color .blog_layout_grid .post_list_item_tags .post_list_divider,
            body.skin_custom_color .blog_layout_grid .post_list_item_tags a,
            body.skin_custom_color .blog_layout_grid .post_list_cats .post_list_divider,
            body.skin_custom_color .blog_layout_grid .post_list_cats a,
            body.skin_custom_color .blog_layout_grid .post_list_item_title:focus,
            body.skin_custom_color .blog_layout_grid .post_list_item_title:active,
            body.skin_custom_color .blog_layout_grid .post_list_item_title:hover,
            body.skin_custom_color .stm_featured_products_unit .stm_featured_product_single_unit .stm_featured_product_single_unit_centered .stm_featured_product_body a .title:hover,
            body.skin_custom_color .icon_box.dark a:hover,
            body.skin_custom_color .post_list_main_section_wrapper .post_list_item_tags .post_list_divider,
            body.skin_custom_color .post_list_main_section_wrapper .post_list_item_tags a,
            body.skin_custom_color .post_list_main_section_wrapper .post_list_cats .post_list_divider,
            body.skin_custom_color .post_list_main_section_wrapper .post_list_cats a,
            body.skin_custom_color .post_list_main_section_wrapper .post_list_item_title:active,
            body.skin_custom_color .post_list_main_section_wrapper .post_list_item_title:focus,
            body.skin_custom_color .post_list_main_section_wrapper .post_list_item_title:hover,
            body.skin_custom_color a:hover,
            .secondary_color,
            #header.transparent_header .header_2 .header_top .stm_lms_categories .heading_font,
            #header.transparent_header .header_2 .header_top .stm_lms_categories i,
            .classic_lms .post_list_main_section_wrapper .post_list_cats a,
            .classic_lms .post_list_main_section_wrapper .post_list_item_tags a,
            body.skin_custom_color .single_product_after_title .meta-unit.teacher:hover .value,
            .stm_lms_course_sticky_panel__teacher:before,
            .stm_lms_courses__single__inner .stm_lms_courses__single--info_title a:hover h4 {
                color: #053f81;
            }
            a {
                color: #74adde;
            }
            body,
            .normal_font,
            .h6.normal_font,
            body.rtl.rtl-demo .stm_testimonials_wrapper_style_2 .stm_lms_testimonials_single__excerpt p,
            .stm_product_list_widget.widget_woo_stm_style_2 li a .meta .title {
                font-family: Raleway;
                color: #54595f;
                font-size: 16px;
            }
            .btn,
            .header-login-button.sign-up a {
                line-height: 14px;
                font-size: 14px;
            }
            .header-menu {
                font-weight: 700;
                color: #fff;
            }
            h1,
            .h1,
            h2,
            .h2,
            h3,
            .h3,
            h4,
            .h4,
            h5,
            .h5,
            h6,
            .h6,
            .nav-tabs > li > a,
            .member-name,
            .section-title,
            .user-name,
            .heading_font,
            .item-title,
            .acomment-meta,
            [type="reset"],
            .bp-subnavs,
            .activity-header,
            table,
            .widget_categories ul li a,
            .sidebar-area .widget ul li a,
            .select2-selection__rendered,
            blockquote,
            .select2-chosen,
            .vc_tta-tabs.vc_tta-tabs-position-top .vc_tta-tabs-container .vc_tta-tabs-list li.vc_tta-tab a,
            .vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tabs-container .vc_tta-tabs-list li.vc_tta-tab a,
            body.distance-learning .btn,
            body.distance-learning .vc_btn3 {
                font-family: Raleway;
                color: #333333;
            }
            h1,
            .h1 {
                line-height: 52px;
                font-weight: 700;
                font-size: 48px;
            }
            h2,
            .h2 {
                line-height: 50px;
                font-weight: 700;
                font-size: 45px;
            }
            h3,
            .h3 {
                line-height: 29px;
                font-weight: 400;
                font-size: 24px;
            }
            h4,
            .h4,
            blockquote {
                line-height: 24px;
                font-weight: 700;
                font-size: 20px;
            }
            h5,
            .h5,
            .select2-selection__rendered {
                line-height: 20px;
                font-weight: 700;
                font-size: 16px;
            }
            h6,
            .h6,
            .widget_pages ul li a,
            .widget_nav_menu ul li a,
            .footer_menu li a,
            .widget_categories ul li a,
            .sidebar-area .widget ul li a {
                line-height: 12px;
                font-weight: 400;
                font-size: 12px;
            }
            #footer_top {
                background-color: #ffffff;
            }
            #footer_bottom {
                background-color: #ffffff;
            }
            #footer_bottom .widget_title h3 {
                font-weight: 700;
                color: #333333;
                font-size: 22px;
            }
            #footer_bottom,
            .widget_contacts ul li .text,
            .footer_widgets_wrapper .widget ul li a,
            .widget_nav_menu ul.style_1 li a .h6,
            .widget_pages ul.style_2 li a .h6,
            #footer .stm_product_list_widget.widget_woo_stm_style_2 li a .meta .title,
            .widget_pages ul.style_1 li a .h6 {
                color: #7f7f81;
            }
            .widget_pages ul.style_2 li a:after {
                background-color: #7f7f81;
            }
            #footer_copyright {
                background-color: transparent;
            }
            #footer_copyright .copyright_text,
            #footer_copyright .copyright_text a {
                color: #515151;
            }
            #footer_copyright {
                border-color: transparent;
            }
        </style>
        <style type="text/css" data-type="vc_custom-css">
            .black_filter:before {
                content: "";
                display: block;
                background: rgba(20, 20, 20, 0.5);
                width: 1000000px;
                height: 100%;
                position: absolute;
                z-index: 1;
                left: -500000px;
            }
            h1.masterstudy-custom-title {
                margin-right: -20px;
            }
            .vc_custom_1637321484564 .owl-stage .owl-item .vc_general.vc_btn3.vc_btn3-size-lg.vc_btn3-shape-rounded.vc_btn3-style-modern.vc_btn3-color-grey {
                text-transform: uppercase;
            }
        </style>
        <style type="text/css" data-type="vc_shortcodes-custom-css">
            .vc_custom_1703079300337 {
                margin-bottom: 0px !important;
            }
            .vc_custom_1637163654079 {
                padding-bottom: 65px !important;
            }
            .vc_custom_1637851045279 {
                padding-top: 65px !important;
                padding-bottom: 65px !important;
                background-color: #f9f5ff !important;
            }
            .vc_custom_1637597282400 {
                margin-bottom: 0px !important;
            }
            .vc_custom_1637252496155 {
                margin-top: 80px !important;
                background-image: url(wp-content/uploads/2021/11/Demande_Information369c.jpg?id=5108) !important;
                border-radius: 4px !important;
            }
            .vc_custom_1637250439021 {
                margin-bottom: 70px !important;
            }
            .vc_custom_1637336596315 {
                padding-top: 95px !important;
                padding-bottom: 95px !important;
                background-color: #f5f9ff !important;
            }
            .vc_custom_1639396326459 {
                margin-bottom: 55px !important;
            }
            .vc_custom_1637321484564 {
                padding-top: 0px !important;
                padding-right: 0px !important;
                padding-bottom: 0px !important;
                padding-left: 0px !important;
            }
        </style>
        <noscript>
            <style>
                .wpb_animate_when_almost_visible {
                    opacity: 1;
                }
            </style>
        </noscript>
        <link
            rel="stylesheet"
            href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <script type="text/javascript" src="wp-content/plugins/wpcf7-recaptcha/assets/js/wpcf7-recaptcha-controls62ea.js?ver=1.2" id="wpcf7-recaptcha-controls-js"></script>
        

        <!-- Google Tag Manager -->
        <script>
            function getCookie(name) {
                var re = new RegExp(name + "=([^;]+)");
                var value = re.exec(document.cookie);
                return value != null ? unescape(value[1]) : "no";
            }
            function eraseCookie(name) {
                document.cookie = name + "=; Max-Age=0";
            }

            /* French CNIL Cookie Compliance ************************************************************/

            // Analitics
            if (getCookie("cookielawinfo-checkbox-analytics") == "yes") {
                /* tag manager block */
                console.log("analitics");
                (function (w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s),
                        dl = l != "dataLayer" ? "&l=" + l : "";
                    j.async = true;
                    j.src = "../www.googletagmanager.com/gtm5445.html?id=" + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, "script", "dataLayer", "GTM-5CTMZVR");
            }

            // Functional
            if (getCookie("cookielawinfo-checkbox-studizz") == "yes") {
                //Studizz chat - handle in strudizz.js script.
            }

            /* Fench CNIL Cookie Compliance ************************************************************/
        </script>
        <!-- End Google Tag Manager -->
    </head>
    <body class="home page-template-default page page-id-3163 stm_lms_button wp-schema-pro-2.7.2 skin_custom_color language_center stm_preloader_ wpb-js-composer js-comp-ver-6.9.0 vc_responsive" ontouchstart="">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5CTMZVR" height="0" width="0" style="display: none; visibility: hidden;"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div id="wrapper">
            <div id="header" class="<?php if($escaped_url == $index) {echo'transparent_header';}else{echo'transparent_header_off';}?> sticky_header" data-color="">
                <div class="header_top_bar hidden_mobile" style="background-color: #ffffff;">
                    <div class="container">
                        <div class="clearfix">
                            <!-- Header top bar Socials -->
                            <div class="pull-left">
                                <div class="header_top_bar_socs">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="https://www.instagram.com/cefprepas/" target="_blank"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/cefprepas1" target="_blank"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://web.facebook.com/CEFPREPAS" target="_blank"><i class="fab fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/@cefprepas8345" target="_blank"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="pull-right top-right">
                                <div class="search-toggler-unit">
                                    <div class="search-top-bar" data-toggle="modal" data-target="#searchModal">
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
                                <a class="btn-grey download-icon" target="_blank" href="./cef/Brochure CEFPREPAS.pdf" title="TÉLÉCHARGEZ LA BROCHURE">TÉLÉCHARGEZ LA BROCHURE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sticky_header_holder"></div>

                <div class="header_default header_default">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="logo-unit">
                                    <a href="index.php">
                                        <?PHP
                                         if($escaped_url == $index){
                                            echo'
                                            <img
                                            class="img-responsive logo_transparent_static  hidden"
                                            src="cef/Logo_CEFPREPAS_white.png"
                                            alt="CEFPREPAS.cm" style="height: 100px;"
                                            />
                                            ';

                                         }
                                        ?>
                                        
                                        <img
                                            class="img-responsive logo_colored_fixed visible"
                                            src="cef/Logo_CEFPREPAS.j.png"
                                            srcset="https://www.ingenieurs2000.com/wp-content/uploads/2021/12/ingenieurs2000_lg.png 2x"
                                            alt="Ingenieurs2000.com" style="height: 100px;"
                                        />
                                    </a>
                                </div>

                                <div class="hidden_desktop mobile_header_menu">
                                    <div class="search-toggler-unit">
                                        <div class="search-top-bar" data-toggle="modal" data-target="#searchModal">
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

                                    <!-- Navbar toggle MOBILE -->
                                    <button type="button" class="navbar-toggle collapsed hidden-lg hidden-md" data-toggle="collapse" data-target="#header_menu_toggler">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </div>
                            <!-- md-3 -->

                            <!-- MObile menu -->
                            <div class="col-xs-12 col-sm-12 visible-xs visible-sm">
                                <div class="collapse navbar-collapse header-menu-mobile" id="header_menu_toggler">
                                    <ul class="header-menu clearfix">
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18968"><a href="index.php">Accueil</a></li>

                                        
                                        <li id="menu-item-18288" class="non-click menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18288">
                                            <a>CEFPREPAS</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-19219" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19219">
                                                    <a href="#">Col1</a>
                                                    <ul class="sub-menu">
                                                        <!-- <li id="menu-item-5499" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5499"><a href="ingenieurs2000/index.html">Qui Sommes-nous ?</a></li> -->
                                                        <li id="menu-item-5595" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5595"><a href="promoteur.php">Mot du promoteur</a></li>
                                                        <li id="menu-item-18657" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18657"><a href="atout.php">Atout,Valeur,Mission</a></li>
                                                        <li id="menu-item-5445" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5445"><a href="etudiant.php">Vie d'etudiant</a></li>
                                                        <li id="menu-item-5593" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5593"><a href="stage_et_emplois.php">Emploit et stage</a></li>

                                                    </ul>
                                                </li>
                                                <li id="menu-item-19223" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19223">
                                                    <a href="#">Col2</a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-5594" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5594"><a href="inscription.php">Incription en ligne</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-18276" class="non-click menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18276">
                                            <a>Nos Formation</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-19224" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19224">
                                                    <a href="#">Col2</a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-5054" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5054">
                                                            <a href="fomation.php">Nos Filières</a>
                                                            <ul class="sub-menu">

                                                                <?php
                                                                    $sql="SELECT * FROM `filieres`";
                                                                    $query = mysqli_query($link,$sql);
                                                                    $nblignes=mysqli_num_rows($query);	
                                                                    if($nblignes>0){
                                                                        $i=1;
                                                                        while($data = mysqli_fetch_array($query)){	
                                                                            $i++;	
                                                                           echo'<li id="menu-item-18967" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18967">
                                                                                    <a href="filiere.php?id='.$data['id'].'">'.$data['TITLE'].'</a>
                                                                                </li>';
                                                                        }
                                                                    }
                                                                ?>


                                                                
                                                                <li id="menu-item-18358" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18358">
																	<a href="fomation.php">Voir tout</a>
                                                                </li>
                                                                <!-- <li id="menu-item-18359" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18359">
																<a href="pisciculture.php">Agriculture</a>
                                                                </li>
                                                                <li id="menu-item-18965" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18965">
																<a href="pisciculture.php">Elevage de lapin</a>
                                                                </li>
                                                                <li id="menu-item-18966" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18966">
																<a href="pisciculture.php">La ctulture des champignon </a>
                                                                </li> -->
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-18246" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18246"><a href="about.php">A Propos De Nous</a></li>
										<li id="menu-item-18246" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18246"><a href="actu.php">News</a></li>
                                        <li id="menu-item-18246" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18246"><a href="contact.php">Contacts</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5593"><a href="galerie.php">Galerie Photo</a></li>

                                    </ul>
                                </div>
                            </div>

                            <!-- Desktop menu -->
                            <div class="col-md-9 col-sm-9 col-sm-offset-0 hidden-xs hidden-sm">
                                <div class="stm_menu_toggler" data-text="Menu"></div>
                                <div class="header_main_menu_wrapper md3-menu clearfix" style="margin-top: 5px;">
                                    <div class="pull-right hidden-xs right_buttons"></div>

                                    <div class="collapse navbar-collapse pull-right">
                                        <ul class="header-menu clearfix">
											<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18968"><a href="./index.php">Accueil</a></li>
										    <li class="non-click menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18288">
                                                <a>CEFPREPAS</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19219">
                                                        <a href="#">Col1 </a>
                                                        <ul class="sub-menu">
															
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18657"><a href="./promoteur.php">Mot du promoteur</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5445"><a href="./atout.php">Atout-Valeur-Mission</a></li>
															<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6186"><a href="./etudiant.php">Vie d'apprenant</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5593"><a href="./stage_et_emplois.php">Emploi et stage</a></li>
														</ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19223">
                                                        <a href="#">Col2</a>
                                                        <ul class="sub-menu">
                                                            <!-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5594"><a href="./inscription.php">Incription en ligne</a></li> -->
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5593"><a href="./galerie.php">Galerie Photo</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5593"><a href="./document.php">Document</a></li>
											                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18968"><a href="about.php">A Propos De Nous</a></li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="non-click menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18276">
                                                <a>Nos Formations</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19224">
                                                        <a href="#">Col1</a>
                                                        <ul class="sub-menu">
                                                            
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5054">
                                                                <a href="formation.php">Nos Filières</a>
                                                                <ul class="sub-menu">
                                                                    <?php
                                                                        $sql="SELECT * FROM `filieres`";
                                                                        $query = mysqli_query($link,$sql);
                                                                        $nblignes=mysqli_num_rows($query);	
                                                                        if($nblignes>0){
                                                                            $i=1;
                                                                            while($i<5 && $data = mysqli_fetch_array($query)){	
                                                                                $i++;	
                                                                            echo'<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18967">
                                                                                        <a href="filiere.php?id='.$data['id'].'">'.$data['TITLE'].'</a>
                                                                                    </li>';
                                                                        }
                                                                    }
                                                                    ?>
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18358">
                                                                        <a href="formation.php">Tout Voir</a>
                                                                    </li>
                                                                    
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19223">
                                                        <a href="#">Col2</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5594">
                                                                <a href="pg_formation.php">Programme De Formation</a>
                                                            </li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5594">
                                                                <a href="diplome.php">Nos Diplomes</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                                
                                            </li>
											<!-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18968"><a href="about.php">A Propos De Nous</a></li> -->
                                             
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18968"><a href="actu.php">Actualites</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18246"><a href="contact.php">Contacts</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5594"><a href="./inscription.php">Incription En Ligne</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- md-8 desk menu -->
                        </div>
                        <!-- row -->
                    </div>
                    <!-- container -->
                </div>
            </div>