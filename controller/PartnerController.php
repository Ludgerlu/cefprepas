<?php
    $sql = "SELECT * FROM `partenaires`";
    $query = mysqli_query($link,$sql);
    $nblignes=mysqli_num_rows($query);	
    if($nblignes>0){
        $i=1;
        while($data = mysqli_fetch_array($query)){		
            $i++;	
            $LIEN_IMAGE="./admin/public/images_partner/".$data["CHEMIN_IMAGE"];					
            if(trim($data["CHEMIN_IMAGE"]) == "" ){
                $LIEN_IMAGE =  "assets/img/aucun.jpg";
            }
            
            echo'
                    <div class="vc_item">
                        <div class="vc_inner">
                            <a href="'.$data["LINK"].'"><img
                                loading="lazy"
                                decoding="async"
                                width="549"
                                height="131"
                                src="'.$LIEN_IMAGE.'"
                                class="attachment-full"
                                alt="'.$data["TITLE"].'"
                                title="'.$data["TITLE"].'"
                                sizes="(max-width: 549px) 100vw, 549px"
                            /></a>
                        </div>
                    </div>';
        }
    }

?>
