<?php 
    if(isset($_GET['id'])){

    }else{
        // Redirection vers une autre page
        header("Location: ./fomation.php");
    }
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="SELECT * FROM `filieres` WHERE `id` = $id" ;
        $query = mysqli_query($link,$sql);
        $nblignes=mysqli_num_rows($query);	
        if($nblignes>0){

            $data = mysqli_fetch_array($query);
            $date =   date('D d F Y', strtotime($data["RENTREE"]));
            $LIEN_IMAGE="./admin/public/images_filiere/".$data["CHEMIN_IMAGE"];	
            $descriptions = explode(",", $data["DESCRIPTION"]);
                    
        }
    }
?>