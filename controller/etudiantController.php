<?php 
    if(isset($_GET['id'])){

    }else{
        // Redirection vers une autre page
        header("Location: ./etudiant.php");
    }
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="SELECT * FROM `evenements` WHERE `TYPE`='Vie d\'etudiant' AND `id` = '".$id."'" ;
        $query = mysqli_query($link,$sql);
        $nblignes=mysqli_num_rows($query);	
        if($nblignes>0){

            $data = mysqli_fetch_array($query);
            $date =   date('Y-m-d', strtotime($data["DATE_EVENEMENT"]));
            $LIEN_IMAGE="./admin/public/images_event/".$data["CHEMIN_IMAGE"];					

        }
    }
?>
