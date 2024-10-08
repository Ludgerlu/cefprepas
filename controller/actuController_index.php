
<?php
    $sql="SELECT * FROM `evenements`";
    $query = mysqli_query($link,$sql);
    $nblignes=mysqli_num_rows($query);	
    if($nblignes>0){
        $i=1;
        while($i<5 && $data = mysqli_fetch_array($query)){	
            $i++;	
            $LIEN_IMAGE="./admin/public/images_event/".$data["CHEMIN_IMAGE"];
            $date =   date('d-m-Y', strtotime($data['DATE_EVENEMENT']));					
            if(trim($data["CHEMIN_IMAGE"]) == "" ){
                $LIEN_IMAGE =  "assets/img/aucun.jpg";
            }
            if($data['TYPE']=='Actualités'){
                $LINK = "actualite.php?id=".$data['id'];
            }else{
                $LINK = "vie_etudiant.php?id=".$data['id'];

            }

            echo'
                <div data-id="56976" class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-flex">
                    <div class="wpb_column vc_column_container vc_col-sm-7 img_col">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper img_wrapper">
                                <img decoding="async" src="'.$LIEN_IMAGE.'" alt="" title="'.$data['TITRE'].'" />
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-5">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper content_wrapper">
                                <h5>'.$data['TYPE'].'</h5>
                                <div class="post_cats_date"><span class="date">'.$date.'</span></div>
                                <h1>'.$data['TITRE'].'</h1>
                                <a
                                    href="'.$LINK.'"
                                    class="vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-grey"
                                >
                                    En Savoir +
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                ';
    }
}
?>
