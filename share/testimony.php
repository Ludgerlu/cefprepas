

<?php
include('./condb.php');

?>



<div class="vc_row wpb_row vc_row-fluid vc_custom_1637250439021">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="testimonials_main_wrapper simple_carousel_wrapper">
                    <h2 class="testimonials_main_title text-center">Témoignages des etudiants</h2>
                    <div class="stm_testimonials_wrapper_style_4" data-slides="2">
                        
                        <?php
                            $sql = "SELECT * FROM `temoignages`";
                            $query = mysqli_query($link,$sql);
                            $nblignes=mysqli_num_rows($query);	
                            if($nblignes>0){
                            $i=1;
                            while($data = mysqli_fetch_array($query)){		
                                $i++;	
                                $LIEN_IMAGE="./admin/public/images_temoin/".$data["IMAGE"];					
                                if(trim($data["IMAGE"]) == "" ){
                                    $LIEN_IMAGE =  "assets/img/aucun.jpg";
                                }
                                echo' <div class="stm_testimonials_single_wrapper" style="overflow: auto;width: 580px;">
                                            <div class="stm_testimonials_single">
                                                <div class="testimonial_header">
                                                    <div class="testimonials_image">
                                                        <img decoding="async" src="'.$LIEN_IMAGE.'" title="'.$data["NAME"].'" />
                                                    </div>
                                                    <div class="testimonials_info">
                                                        <h2 class="testimonials_main_title text-left">'.$data["NAME"].'</h2>
                                                        <h5>
                                                            '.$data["FILIERE"].'
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="testimonials_excerpt">
                                                    " '.$data["TEMOIGNAGE"].' "
                                                </div>
                                            </div>
                                        </div>
                                    ';
                            }
                            }
                        
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>