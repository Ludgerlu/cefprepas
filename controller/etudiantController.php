
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
    