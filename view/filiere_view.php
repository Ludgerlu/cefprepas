
<?php include('controller/filiereController.php')?>

<div id="main">
    <div class="entry-header clearfix" style="background-image: url(cef/event-v1-bg.png); background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="entry-title-left">
                <div class="entry-title">
                    <h1><?=$data["TITLE"]?></h1>
                </div>
            </div>
            <div class="entry-title-right"></div>
        </div>
    </div>
    <!-- Breads -->
    <div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default">
        <div class="stm_breadcrumbs_unit">
            <div class="container">
                <div class="navxtBreads">
                    <!-- Breadcrumb NavXT 7.3.0 -->
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="Go to CEFPREPAS.com." href="index.php" class="home"><span property="name">Accueil</span></a><meta property="position" content="1" />
                    </span>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" href="formation.php" class="post post-page"><span property="name">Nos filiere</span></a>
                        <meta property="position" content="2" />
                    </span>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name" class="post post-page current-item"><?=$data["TITLE"]?></span><meta property="url" content="index.html" /><meta property="position" content="3" />
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="post_type_exist clearfix">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1638552454942 vc_column-gap-30">
                <div class="wpb_column vc_column_container vc_col-sm-11">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element">
                                <div class="wpb_wrapper" data-side_block="no">
                                    <h1><?=$data["TITLE"]?></h1>
                                </div>
                            </div>
                            <div class="wpb_text_column wpb_content_element">
                                <div class="wpb_wrapper" data-side_block="no"></div>
                            </div>
                            <div class="wpb_text_column wpb_content_element">
                                <div class="wpb_wrapper" data-side_block="no">
                                    <div class="post_thumbnail" style="margin-bottom: 20px;">
                                        <img
                                            src= "<?=$LIEN_IMAGE?>"
                                            class="img-responsive wp-post-image"
                                            style="width: 470px;height: 470px;"
                                        />
                                    </div>
                                    <p style="text-align: justify;">
                                        Sub-Formation:
                                        <ul>
                                        <?php
                                            foreach ($descriptions as $description) {
                                                echo "<li>$description</li>";
                                            }
                                        ?>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid auto_width_columns white-link vc_custom_1639416850231 vc_row-has-fill vc_row-o-equal-height vc_row-flex">
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element">
                                <div class="wpb_wrapper" data-side_block="no">
                                    <p>
                                        <strong><b>Prochain Rentree </b>:<br /> </strong><?=$date?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element">
                                <div class="wpb_wrapper" data-side_block="no">
                                    <p>
                                        <strong>
                                            <b>Taux de réussite :<br /> </b>
                                        </strong>
                                        <?=$data["REUSSITE"]?> %
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element">
                                <div class="wpb_wrapper" data-side_block="no">
                                    <p>
                                        <strong><b>Volume horaire </b>:<br /> </strong><?=$data["HORAIRE"]?> Heures
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
            <h5>Diplômes obtenus au CEFPREPAS </h5>
            <ul>
                <li>
                    CQP : Certificat de Qualification Professionnelle:
                        <ul>
                            <li>Le Certificat de Qualification Professionnelle (CQP) permet de faire reconnaître les compétences et savoir-faire nécessaires à l’exercice du métier. </li>
                            <li>L’examen du CQP est organisé par le Ministère en charge de la Formation Professionnelle (MINEFOP) qui délivre le diplôme.</li>
                        </ul>
                </li>
                <li>
                    DQP  : Certificat de Qualification Professionnelle:
                        <ul>
                            <li>Le DQP est un diplôme qui atteste de la qualification d'une personne à tenir un emploi clairement identifié dans une activité spécifique. Il est délivré par le MINEFOP pour leur compétence en matière d'emploi et de qualification professionnelle.</li>

                        </ul>
                </li>
                
            </ul>
            
            <p style="text-align: justify;">
                <strong>Des questions ? </strong> 
                <!-- Button trigger modal -->
                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalLong" style="background: none;padding: 0px;">
                    <p style="text-align: justify;"><a href="#">Apropos des frais?</a></p>
                </button>
            </p>
            
            <p style="text-align: justify;">Contactez le Service des Admissions</p>
            <p style="text-align: justify;">
                Par <a href="./contact.php">message</a><br />
                Par mail : <a href="mailto:cefprepas@outlook.com">cefprepas@outlook.com</a><br />
                Tél : +237 695 566 666 / +237 677 444 071
            </p>
        </div>

        <div class="clearfix"></div>
    </div>
</div>