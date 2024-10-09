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
            <?php include('view/programmeFormation_view.php')?>
        </div>          



        
        <div class="modal fade" id="FCIModalLong" tabindex="99" role="dialog" aria-labelledby="FCIModalLong">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body heading_font">
                        <h3>Formation Complète et Intégrée </h3>
                        <ul>
                            <li>
                                <h5>Public cible  :</h5> jeunes chercheurs d'emploi qui souhaitent acquérir de nouvelles connaissances et développer leurs compétences dans le secteur agropastoral, afin de s’insérer dans le monde socioprofessionnel.
                            </li>
                            <li>
                                <h5>Durée de la formation : </h5>	
                                <ul>
                                    <li>six (06) mois avec développement personnel</li>
                                </ul>
                                                                                                                                
                            </li>
                            <li>
                                <h5>Sessions de formation :</h5> Quatre rentrées par an:
                                    
                                    <ol type="1">
                                        <li>début Janvier,</li>
                                        <li>début Avril,</li>
                                        <li>début Juillet et</li>
                                        <li>début Octobre </li>(lundi à vendredi)

                                    </ol>
                            </li>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="FCCModalLong" tabindex="99" role="dialog" aria-labelledby="FCCModalLong">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body heading_font">
                        <h3>Formations Continues à la Carte  </h3>
                        <ul>
                            <li>
                                <h5>Public cible  :</h5>Professionnels, salariés ou chercheurs d'emploi, qui souhaitent acquérir de nouvelles connaissances et développer leurs compétences dans le secteur agropastoral, afin de dynamiser leur carrière professionnelle.
                            </li>
                            <li>
                                <h5>Durée de la formation : </h5>	
                                <ul>
                                    2 à 3 jours par semaine pendant 1 à 3 mois, en fonction de la discipline ou de la spéculation
                                </ul>
                                                                                                                                
                            </li>
                            <li>
                                <h5>Sessions de formation :</h5> régulièrement organisées pour les différentes disciplines
                                disponibles au CEFPREPAS, à la demande des apprenants
                            </li>
                            <li>
                                <h5>
                                Programmation : 
                                </h5>Programmes adaptés à la disponibilité des apprenants (flexibilité dans la programmation)
                            </li>
                            <li>
                                <h5>
                                Cours en matinée ou en soirée : 
                                </h5>En fonction du choix des apprenants.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
        <div class="modal fade" id="FAModalLong" tabindex="99" role="dialog" aria-labelledby="FAModalLong">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body heading_font">
                        <h3>Formations Accélérées  </h3>
                        <ul>
                            <li>
                                <h5>Public cible  :</h5> Professionnels, salariés ou chercheurs d'emploi, qui souhaitent acquérir de nouvelles connaissances et développer leurs compétences dans le secteur agropastoral
                            </li>
                            <li>
                                <h5>Durée de la formation : </h5>	
                                <ul>
                                1 à 3 jours, en fonction de la discipline ou de la spéculation
                                </ul>
                                                                                                                                
                            </li>
                            <li>
                                <h5>Sessions de formation :</h5> Quatre rentrées par an:
                                    
                                    régulièrement organisées les week-ends (vendredi, samedi
        ou dimanche), pour les différentes disciplines disponibles au CEFPREAPAS

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="FSSCModalLong" tabindex="99" role="dialog" aria-labelledby="FSSCModalLong">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body heading_font">
                        <h3>Formations Spéciales sur Commande</h3>
                        <ul>
                            <li>
                                <h5>Public cible  :</h5> Coopératives, GIC, ONG, organisations promotrices des projets dans le secteur agropastoral, ouvriers et employés des entreprises ou projets agropastoraux et acteurs du développement agropastoral et rural, qui souhaitent acquérir des connaissances et développer les compétences dans le secteur agropastoral.
                            </li>
                            <li>
                                <h5>Durée de la formation : </h5>	
                                <ul>
                                    arrêté en fonction de la commande 
                                </ul>
                                                                                                                                
                            </li>
                            <li>
                                <h5>Contenu de la formation  :</h5> adaptée à la commande, pour une ou plusieurs disciplines dispensées au CEFPREPAS. Programme de formation élaboré selon le cahier des charges arrêté par les parties.
                                    
                                    
                            </li>
                            <li>
                                <h5>Lieu de la formation : </h5> sur le site du CEFPREPAS ou délocalisées, en fonction de la commande     
                                    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="FLModalLong" tabindex="99" role="dialog" aria-labelledby="FLModalLong">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body heading_font">
                        <h3>Formations en Ligne</h3>Modules de formation en ligne en cours de développement pour toutes les
                        spéculations disponibles au CEFPREPAS.

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

