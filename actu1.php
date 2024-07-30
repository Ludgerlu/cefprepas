<?php 
    include("share/header.php");
    include('./condb.php');
    $id=$_GET['id'];
    $sql="SELECT * FROM `evenements` WHERE `TYPE`='Actualités' AND `id` = $id" ;
    $query = mysqli_query($link,$sql);
    $nblignes=mysqli_num_rows($query);	
    if($nblignes>0){
        $data = mysqli_fetch_array($query);
    }	
?>









            <div id="main">
				<div class="entry-header clearfix">
                    <div class="container">
                        <div class="entry-title-left">
                            <div class="entry-title">
                                <h1>Actualités</h1>
                            </div>
                        </div>
                        <div class="entry-title-right"></div>
                    </div>
                </div>
                <div class="stm_single_post">
                   <!--  <div class="entry-header clearfix">
                        <div class="container">
                            <div class="entry-title-left">
                                <div class="entry-title">
                                    <h2 class="h1" ></h2>
                                </div>
                            </div>
                            <div class="entry-title-right"></div>
                        </div>
                    </div>
 -->
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
                                        <a property="item" typeof="WebPage" title="Go to Actualités." href="actu.php" class="post-root post post-post"><span property="name">Actualités</span></a><meta property="position" content="2" />
                                    </span>
                                    &gt;
                                    <span property="itemListElement" typeof="ListItem">
                                        <span property="name" class="post post-post current-item">Primiere peche du poissons</span><meta property="url" content="index.html" />
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
                                                    <h1 class="h2 post_title">Primiere peche du poissons</h1>
                                                    <div class="stm_post_details clearfix">
                                                        <ul class="clearfix post_meta">
                                                            <li class="post_date h6"><i class="far fa-clock"></i><span>10-12-23</span></li>
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
                                                    src="cef/pis2.jpg"
                                                    class="img-responsive wp-post-image"
                                                    style="width: 470px;height: 470px;"
                                                />
                                            </div>

                                            <p style="text-align: justify;">La deuxième session pour s&#8217;incrire à nos formations en alternance débute ce lundi 14 mars jusqu&#8217;au 10 avril inclus !</p>
                                            <p style="text-align: justify;">
                                                CEFPREPAS vous offre la possibilité de vous ouvrir à de belles perspectives professionnelles et d&#8217;évoluer dans un environnement à la fois stimulant et challengeant. Grâce à
                                                l&#8217;alternance, vous bénéficiez d&#8217;une expérience solide en entreprise pour être opérationnels sur le marché de l&#8217;emploi à l&#8217;issue de votre  formation.
                                            </p>
                                            <!-- <p style="text-align: justify;">
                                                Les formations Ingénieurs 2000 allant du bac+2 au bac+5 en partenariat avec
                                                <a href="../../ecole-ingenieur-partenariat/index.html">des Ecoles de haut-niveau reconnues pour leur savoir-faire pédagogique et leur enseignement d’excellence</a> sont proposées en alternance
                                                (<a href="../../apprentissage/index.html"><strong>en contrat d&#8217;apprentissage</strong> ou <strong>en contrat de professionnalisation</strong></a>),
                                                <a href="../../handicap/index.html">accessibles aux personnes en situation d&#8217;handicap</a>.
                                            </p> -->
                                            <!-- <p>
                                                <a href="../../bac-2/index.html"><strong>Nos bac+2</strong> </a>:
                                            </p>
                                            <ul>
                                                <li>DEUST Production Industrielle : Parcours Conception et Industrialisation</li>
                                                <li>DEUST Production Industrielle : Parcours Electronique Energie Electrique Automatique</li>
                                                <li>DEUST Production Industrielle : Parcours Physique Appliquée &amp; Capteurs Industriels</li>
                                                <li>DEUST Informatique d’Organisation et Systèmes d’Information</li>
                                            </ul>
                                            <p>
                                                <a href="../../bac-3/index.html"><strong>Nos bac +3</strong></a> :
                                            </p>
                                            <ul>
                                                <li>Bachelor Universitaire de Technologie – Informatique</li>
                                                <li>Licence Professionnelle Métiers de l’Informatique</li>
                                            </ul>
                                            <p>
                                                <a href="../../formations-ingenieur/index.html"><strong>Nos formations d&#8217;ingénieurs</strong></a> (niveau bac+5 accréditées par la CTI) :
                                            </p>
                                            <ul>
                                                <li>Ingénieur Génie Industriel</li>
                                                <li>Ingénieur Génie Énergétique</li>
                                                <li>Ingénieur Génie Énergétique et de la Construction durable</li>
                                                <li>Ingénieur Mécatronique – Robotique</li>
                                                <li>Ingénieur Matériaux</li>
                                                <li>Ingénieur Aéronautique et Espace</li>
                                                <li>Ingénieur Génie Électrique – EPRM</li>
                                                <li>Ingénieur Instrumentation, Métrologie, Qualité</li>
                                            </ul>
                                            <p>
                                                <a href="../../bac-5/index.html"><strong>Nos bac +5</strong></a> :
                                            </p>
                                            <ul>
                                                <li>Master 2 Prospective, Innovation, Disruption</li>
                                            </ul> -->
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
	
		<?php include("share/footer.php")?>
