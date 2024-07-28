<?php 
    include("share/header.php");
    include('./condb.php');
    
    	
?>









            <div id="main">
				<div class="entry-header clearfix">
                    <div class="container">
                        <div class="entry-title-left">
                            <div class="entry-title">
                                <h1>Document</h1>
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
                                        <a property="item" typeof="WebPage" title="Go to Ingenieurs2000.com." href="index.php" class="home"><span property="name">Accueil</span></a><meta property="position" content="1" />
                                    </span>
                                    &gt;
                                    <span property="itemListElement" typeof="ListItem">
                                        <a property="item" typeof="WebPage" title="Go to Actualités." href="#" class="post-root post post-post"><span property="name">Document</span></a><meta property="position" content="2" />
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
                                                    <h1 class="h2 post_title">Documents à télécharger</h1>
                                                   
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
                                        <?php
	                                        $extension_file  = array("jpg", "gif", "png", "jpeg", "JPG", "GIF","PNG", "JPEG");
                                            $sql = "SELECT * FROM `attachments`";
                                            $query = mysqli_query($link,$sql);
                                            $nblignes=mysqli_num_rows($query);	
                                            if($nblignes>0){
                                            $i=1;
                                            while($data = mysqli_fetch_array($query)){		
                                                $i++;	
                                                $LIEN_IMAGE="./admin/public/images_attache/".$data["CHEMIN_IMAGE"];					
                                                if(trim($data["CHEMIN_IMAGE"]) == "" ){
                                                    $LIEN_IMAGE =  "assets/img/aucun.jpg";
                                                }
                                                $extension_file_upload = pathinfo($data['CHEMIN_IMAGE'], PATHINFO_EXTENSION);
										        if(!in_array($extension_file_upload, $extension_file)){
                                                    echo'
                                                        <a href="'.$LIEN_IMAGE.'" target="blank" style="font-size: 14px; text-decoration: underline;" download="'.$data["LIBELLE"].'"> <i class="fa fa-download" aria-hidden="true"></i> '.$data["LIBELLE"].'</a> <br>
                                                    ';
                                                }
                                            }
                                            }
                                        
                                        ?>
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
