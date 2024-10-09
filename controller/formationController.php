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
            echo'<div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="square">
                        <a href="filiere.php?id='.$data['id'].'" class="square_content" style="background-image: url('.$LIEN_IMAGE.');">
                            <h2>'.$data["TITLE"].'</h2>
                            <div class="voir_plus">Voir plus</div>
                        </a>
                    </div>
                </div>';
        }
    }
?>
