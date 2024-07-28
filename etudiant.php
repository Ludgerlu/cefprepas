<?php include("share/header.php")?>
            <div id="main">
                <!-- Title -->

                <!-- Breads -->
                <div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default">
                    <div class="stm_breadcrumbs_unit">
                        <div class="container">
                            <div class="navxtBreads">
                                <!-- Breadcrumb NavXT 7.3.0 -->
                                <span property="itemListElement" typeof="ListItem">
                                    <a property="item" typeof="WebPage" href="index.php" class="home"><span property="name">Accueil</span></a><meta property="position" content="1" />
                                </span>
                                &gt;
                                <span property="itemListElement" typeof="ListItem">
                                    <span property="name" class="post-root post post-post current-item">Vie d'etudaint</span><meta property="url" content="index.html" /><meta property="position" content="2" />
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container blog_main_layout_grid">
                    <div class="blog_layout_grid sidebar_position_none">
                        <div class="row">




                        <?php
                            $sql="SELECT * FROM `evenements` WHERE `TYPE`='vie d\'etudiant'";
                            $query = mysqli_query($link,$sql);
                            $nblignes=mysqli_num_rows($query);	
                            if($nblignes>0){
                                $i=1;
                                while($data = mysqli_fetch_array($query)){		
                                    $i++;	
                                    $date =   date('d F Y', strtotime($data["DATE_EVENEMENT"]));
                                    $LIEN_IMAGE="./admin/public/images_event/".$data["CHEMIN_IMAGE"];					
                                    if(trim($data["CHEMIN_IMAGE"]) == "" ){
                                        $LIEN_IMAGE =  "assets/img/aucun.jpg";
                                    } 
                                    echo'<div class="col-md-3 col-sm-6 col-xs-12 plugin_style">
                                            <div class="post_list_content_unit">
                                                <div>
                                                    <div class="post_list_featured_image">
                                                        <a href="vie_etudiant.php?id='.$data["id"].'" title="'.$data["TITRE"].'">
                                                            <img
                                                                style="width: 269px;height: 210px;"
                                                                src="'.$LIEN_IMAGE.'"
                                                                class="img-responsive wp-post-image"
                                                                alt="'.$data["TITRE"].'"
                                                                decoding="async"
                                                                
                                                                sizes="(max-width: 270px) 100vw, 270px"
                                                            />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a
                                                        href="vie_etudiant.php?id='.$data["id"].'"
                                                        title="'.$data["TITRE"].'"
                                                        class="post_list_item_title blog_post_list_item_title_generic_style h3"
                                                    >
                                                    '.$data["TITRE"].'
                                                    </a>
            
                                                    <div class="post_list_info">
                                                        <!-- Post cats -->
            
                                                        <div class="date-d-costum blog_post_list_item_info_generic_style">'.$date.'</div>
                                                    </div>
                                                </div>
                                                <!-- post_list_inner_content_unit -->
                                            </div>
                                            <!-- post_list_content_unit -->
                                        </div>'; 
                                }                      
                            }
                        ?>
                            
                        </div>

                       <!--  <ul class="page-numbers">
                            <li><span aria-current="page" class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="page/2/index.html">2</a></li>
                            <li><a class="page-numbers" href="page/3/index.html">3</a></li>
                            <li><span class="page-numbers dots">…</span></li>
                            <li><a class="page-numbers" href="page/8/index.html">8</a></li>
                            <li>
                                <a class="next page-numbers" href="page/2/index.html"><span class="pagi_label">Suivant</span><i class="fa fa-chevron-right"></i></a>
                            </li>
                        </ul> -->
                    </div>
                    <!-- blog_layout -->
                    <div class="sidebar-area sidebar-area-none"></div>
                </div>
            </div>
        </div>
        <?php include("share/footer.php")?>
