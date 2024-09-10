
<div id="main">
    <div class="entry-header clearfix" tyle="background-image: url(cef/event-v1-bg.png); background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="entry-title-left">
                <div class="entry-title">
                    <h1>Document CEFPREAPAS</h1>
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
                        <a property="item" typeof="WebPage" href="index.php" class="home"><span property="name">Accueil</span></a><meta property="position" content="1" />
                    </span>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name" class="post post-page current-item">Document CEFPREAPAS</span><meta property="url" content="index.php" /><meta property="position" content="2" />
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="post_type_exist clearfix ">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="sub_pages_shortcode" style="padding: 0 15px;">
                                <h3 style="font-weight: 600 !important; margin-bottom: 40px; margin-left: -15px;">Document CEFPREAPAS</h3>
                                <div id="parent-4989" class="vc_row wpb_row vc_row-fluid vc_column-gap-20">
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
                                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                                        <div class="square">
                                                            <!-- Button trigger modal -->
                                                            <a href="'.$LIEN_IMAGE.'" class="square_content" target="blank" style="font-size: 14px; text-decoration: underline;" download="'.$data["LIBELLE"].'">
                                                                <h2>'.$data["LIBELLE"].'</h2>
                                                                <div class="voir_plus">Telechager</div>
                                                            </a>
                                                        </div>
                                                    </div>
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
            </div>
        </div>
    </div>

</div>
