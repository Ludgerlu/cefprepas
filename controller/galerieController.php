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
            if(in_array($extension_file_upload, $extension_file)){
            
                echo' <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="'.$LIEN_IMAGE.'" class="fancylight popup-btn" data-fancybox-group="light"> 
                    <img class="img-fluid img-galerie" src="'.$LIEN_IMAGE.'" alt="'.$data["LIBELLE"].'" >
                    </a>
                </div>';
            }
        }
    }

?>
