
<?php

include('./condb.php');
$LIEN_IMAGE =  "aucun.jpg";
?>



	
	
<div class="container" id="main">
    <div class="portfolio-menu mt-2 mb-4">
        <ul>
            <li class="btn btn-outline-dark active" data-filter="*">Tout</li>
            <li class="btn btn-outline-dark" data-filter=".gts">Actualités</li>
            <li class="btn btn-outline-dark" data-filter=".lap">Etudiant</li>
            <li class="btn btn-outline-dark text" data-filter=".selfie">Autre</li>
        </ul>
    </div>
    <div class="portfolio-item row">
        <?include('controller/galerieController.php')?>
        <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
            <a href="cef/actu2.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
            <img class="img-fluid img-galerie" src="cef/actu2.jpg" alt="">
            </a>
        </div>
        <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
            <a href="cef/actu3.jpg" class="fancylight popup-btn" data-fancybox-group="light">
            <img class="img-fluid img-galerie" src="cef/actu3.jpg" alt="">
            </a>
        </div>
        <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
            <a href="cef/actu4.jpg" class="fancylight popup-btn" data-fancybox-group="light">
            <img class="img-fluid img-galerie" src="cef/actu4.jpg" alt="">
            </a>
        </div>
        <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
            <a href="cef/IMG-20230428-WA0033.jpg" class="fancylight popup-btn" data-fancybox-group="light">
            <img class="img-fluid img-galerie" src="cef/IMG-20230428-WA0033.jpg" alt="">
            </a>
        </div>
    </div>
</div>



<script> 
$('.portfolio-menu ul li').click(function(){
    $('.portfolio-menu ul li').removeClass('active');
    $(this).addClass('active');
    
    var selector = $(this).attr('data-filter');
    $('.portfolio-item').isotope({
        filter:selector
    });
    return  false;
});
$(document).ready(function() {
    var popup_btn = $('.popup-btn');
    popup_btn.magnificPopup({
        type : 'image',
        gallery : {
            enabled : true
        }
    });
});
</script>