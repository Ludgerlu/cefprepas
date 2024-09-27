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
