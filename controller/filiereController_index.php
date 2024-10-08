<?php
    $sql="SELECT * FROM `filieres`";
    $query = mysqli_query($link,$sql);
    $nblignes=mysqli_num_rows($query);	
    if($nblignes>0){
        $i=1;
        while($i<5 && $data = mysqli_fetch_array($query)){	
            $i++;
            $LIEN_IMAGE="./admin/public/images_filiere/".$data["CHEMIN_IMAGE"];					
            if(trim($data["CHEMIN_IMAGE"]) == "" ){
                $LIEN_IMAGE =  "assets/img/aucun.jpg";
            }	
            echo'<div class="vc_grid-item vc_clearfix col-lg-3">
                    <div class="vc_grid-item-mini vc_clearfix">
                        <div class="vc_gitem-animated-block">
                            <div class="vc_gitem-zone vc_gitem-zone-a formation-cta-home vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('.$LIEN_IMAGE.') !important;">
                                <a href="filiere.php?id='.$data['id'].'" title= "'.$data['TITLE'].'" class="vc_gitem-link vc-zone-link" ></a>
                                <img decoding="async" src="'.$LIEN_IMAGE.'" class="vc_gitem-zone-img" alt="'.$data['TITLE'].'">
                                <div class="vc_gitem-zone-mini">
                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-bottom">
                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                            <div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_title" >
                                                <h4 style="text-align: left" >
                                                    <a href="filiere.php?id='.$data['id'].'" class="vc_gitem-link" title="'.$data['TITLE'].'">'.$data['TITLE'].'</a>
                                                </h4>
                                            </div>
                                        <div field_619527d66f67e class="vc_gitem-acf field_619527d66f67e"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_clearfix"></div>
            </div>';
        }
    }
    ?>
