<?php 
    include("share/header.php");
    if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM `evenements` WHERE `TYPE`='Vie d\'etudiant' AND `id` = '".$id."'" ;
    $query = mysqli_query($link,$sql);
    $nblignes=mysqli_num_rows($query);	
    if($nblignes>0){

        $data = mysqli_fetch_array($query);
        $date =   date('Y-m-d', strtotime($data["DATE_EVENEMENT"]));
        $LIEN_IMAGE="./admin/public/images_event/".$data["CHEMIN_IMAGE"];					

?>

            <div id="main">
				<div class="entry-header clearfix">
                    <div class="container">
                        <div class="entry-title-left">
                            <div class="entry-title">
                                <h1>Vie d'etudiant</h1>
                            </div>
                        </div>
                        <div class="entry-title-right"></div>
                    </div>
                </div>
                <div class="stm_single_post">
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
                                        <a property="item" typeof="WebPage" title="Go to Actualités." href="etudiant.php" class="post-root post post-post"><span property="name">Vie d'etudiant</span></a><meta property="position" content="2" />
                                    </span>
                                    &gt;
                                    <span property="itemListElement" typeof="ListItem">
                                        <span property="name" class="post post-post current-item"><?=$data['TITRE']?></span>
                                        <meta property="position" content="4" />
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <article id="post-36056" class="post-36056 post type-post status-publish format-standard has-post-thumbnail hentry tag-admissions tag-candidature-en-ligne tag-rentree-2022 tag-session-2">
                        <div class="container article">
                            <div class="row wpb_row row-fluid vc_custom_1638719406702">
                                <div class="wpb_column Xvc_column_container col-sm-8">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="stm_post_unit stm_post_unit_vc">
                                                <div class="stm_post_info">
                                                    <h1 class="h2 post_title"><?=$data['TITRE']?></h1>
                                                    <div class="stm_post_details clearfix">
                                                        <ul class="clearfix post_meta">
                                                            <li class="post_date h6"><i class="far fa-clock"></i><span><?=$date?></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- stm_post_unit -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row wpb_row row-fluid vc_custom_1639250281547 column-gap-30">
                                <div class="wpb_column Xvc_column_container col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="post_thumbnail" style="margin-bottom: 20px;">
                                                <img
                                                    src= "<?=$LIEN_IMAGE?>"
                                                    class="img-responsive wp-post-image"
                                                    style="width: 470px;height: 470px;"
                                                />
                                            </div>

                                            <p style="text-align: justify;"><?=$data['DESCRIPTION']?></p>
                                            <p style="text-align: justify;">
                                                CEFPREPAS vous offre la possibilité de vous ouvrir à de belles perspectives professionnelles et d&#8217;évoluer dans un environnement à la fois stimulant et challengeant. Grâce à
                                                l&#8217;alternance, vous bénéficiez d&#8217;une expérience solide en entreprise pour être opérationnels sur le marché de l&#8217;emploi à l&#8217;issue de votre  formation.
                                            </p>
                                            
                                            <p style="text-align: justify;">Retrouvez toutes les modalités d&#8217;inscriptions en cliquant <a href="../../admissions/index.html">ICI</a></p>
                                            <p style="text-align: justify;"><strong>Des questions ?</strong></p>
                                            <p style="text-align: justify;">Contactez le Service des Admissions</p>
                                            <p style="text-align: justify;">
                                                Par mail : <a href="mailto:cefprepas@outlook.com">cefprepas@outlook.com</a><br />
                                                Tél : +237 695 566 666 / +237 677 444 071
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
	
		<?php }
    }include("share/footer.php")?>
