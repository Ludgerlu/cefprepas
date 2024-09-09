


<?php
include('./condb.php');
?>

<div class="vc_row wpb_row vc_row-fluid vc_custom_1637597282400">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="wpb_images_carousel wpb_content_element vc_clearfix vc_custominfiniteloop sponsors_carousel">
                    <div class="wpb_wrapper">
                        <div
                            id="vc_images-carousel-1-1714751626"
                            data-ride="vc_carousel"
                            data-wrap="true"
                            style="width: 100%;"
                            data-interval="5000"
                            data-auto-height="yes"
                            data-mode="horizontal"
                            data-partial="false"
                            data-per-view="4"
                            data-hide-on-end="false"
                            class="vc_slide vc_images_carousel"
                        >
                            <div class="vc_carousel-inner">
                                <div class="vc_carousel-slideline">
                                    <div class="vc_carousel-slideline-inner" id="patner">
                                        </div>
                                </div>
                            </div>
                            <a class="vc_left vc_carousel-control" href="#vc_images-carousel-1-1714751626" data-slide="prev"><span class="icon-prev"></span></a>
                            <a class="vc_right vc_carousel-control" href="#vc_images-carousel-1-1714751626" data-slide="next"><span class="icon-next"></span></a>
                        </div>
                    </div>
                </div>
                
<script>
    function afficher_le_tableau_js(){
        $.ajax({
            url: "controller/PartnerController.php",
            type: "GET",
            success: function(data){
                $("#patner").show();
                $("#patner").html(data);				
            },
            error: function(xhr, status, error) {
            document.getElementById("myPleaseWait_launch_template_btn").click();
            notification_error_ajax_js(xhr, status, error);
            }
        });
    }

    //Appel de la fonction d'affichage

    afficher_le_tableau_js();            
</script>
                <script>
                    if (jQuery(window).width() < 700) {
                        jQuery("#vc_images-carousel-1-1714751626").attr("data-per-view", "1");
                    }
                </script>
            </div>
        </div>
    </div>
</div>