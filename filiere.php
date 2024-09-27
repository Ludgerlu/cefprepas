<?php
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$index = "https://cefprepas.com//index.php";
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
        <title>CEFPREPAS</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" type="image/x-icon" href="cef/Logo_CEFPREPAS.j.png">
        <meta name="description" content="Le Centre de Formation Professionnelle en Elevage, Pisciculture et Agriculture (CEFPREPAS), agréé par le MINEFOP, vous propose des formations pratiques et rapides" />
        <link rel="canonical" href="index.php" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="CEFPREPAS" />
        <meta property="og:url" content="index.php" />
        <meta property="og:site_name" content="CEFPREPAR.com" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
        <?php 
            include('share/style_css.php');
            include('share/link_css.php');
            include('share/script_js.php');
        ?>
    </head>
    <body class="home page-template-default page page-id-3163 stm_lms_button wp-schema-pro-2.7.2 skin_custom_color language_center stm_preloader_ wpb-js-composer js-comp-ver-6.9.0 vc_responsive" ontouchstart="">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5CTMZVR" height="0" width="0" style="display: none; visibility: hidden;"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div id="wrapper">
            <?php include('share/navbar.php')?>
            <?php include('view/filiere_view.php')?>
        </div>   
        
        
         <!-- Modal -->
         <div class="modal fade" id="exampleModalLong" tabindex="99" role="dialog" aria-labelledby="exampleModalLong">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body heading_font">
                        <h2>Frais </h2>
                        <ul>
                            <li>Frais d’Inscription + Équipements de protection individuelle (EPI) + Outils de travail : 50.000 FCFA</li>
                            <li>Frais de Scolarité pour 06 mois: 400.000 FCFA</li>
                            <li>Frais d’Internat : 20 000 FCFA/mois </li>
                        </ul>                    
                    </div>
                </div>
            </div>
        </div>  

        <?php
            include('share/foot_ter.php');
            include('share/script_footer.php');
            include('share/style_footer.php');
        ?>
    </body>
</html>


       
        
