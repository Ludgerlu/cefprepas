


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
                                    <div class="vc_carousel-slideline-inner">

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
                                    


                                        <div class="vc_item">
                                            <div class="vc_inner">
                                                <a href="#"><img
                                                    loading="lazy"
                                                    decoding="async"
                                                    width="549"
                                                    height="131"
                                                    src="wp-content/uploads/2021/11/ISTY-549x131.jpg"
                                                    class="attachment-full"
                                                    alt="Accueil"
                                                    title="ISTY"
                                                    srcset="
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2021/11/ISTY-549x131.jpg 549w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2021/11/ISTY-300x72.jpg  300w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2021/11/ISTY.jpg         553w
                                                    "
                                                    sizes="(max-width: 549px) 100vw, 549px"
                                                /></a>
                                            </div>
                                        </div>
                                        <div class="vc_item">
                                            <div class="vc_inner">
                                                <img
                                                    loading="lazy"
                                                    decoding="async"
                                                    width="1828"
                                                    height="590"
                                                    src="wp-content/uploads/2021/11/CENTRE_MICHEL_SERRES-1828x590.png"
                                                    class="attachment-full"
                                                    alt="Accueil"
                                                    title="CENTRE_MICHEL_SERRES"
                                                    srcset="
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2021/11/CENTRE_MICHEL_SERRES-1828x590.png 1828w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2021/11/CENTRE_MICHEL_SERRES-600x194.png   600w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2021/11/CENTRE_MICHEL_SERRES-300x97.png    300w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2021/11/CENTRE_MICHEL_SERRES-1024x331.png 1024w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2021/11/CENTRE_MICHEL_SERRES-768x248.png   768w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2021/11/CENTRE_MICHEL_SERRES-1536x496.png 1536w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2021/11/CENTRE_MICHEL_SERRES.png          1831w
                                                    "
                                                    sizes="(max-width: 1828px) 100vw, 1828px"
                                                />
                                            </div>
                                        </div>
                                        <div class="vc_item">
                                            <div class="vc_inner">
                                                <img
                                                    loading="lazy"
                                                    decoding="async"
                                                    width="661"
                                                    height="198"
                                                    src="wp-content/uploads/2021/11/ARTS_ET_METIERS-661x198.png"
                                                    class="attachment-full"
                                                    alt="Accueil"
                                                    title="ARTS_ET_METIERS"
                                                    srcset="
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2021/11/ARTS_ET_METIERS-661x198.png 661w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2021/11/ARTS_ET_METIERS-600x180.png 600w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2021/11/ARTS_ET_METIERS-300x90.png  300w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2021/11/ARTS_ET_METIERS.png         664w
                                                    "
                                                    sizes="(max-width: 661px) 100vw, 661px"
                                                />
                                            </div>
                                        </div>
                                        <div class="vc_item">
                                            <div class="vc_inner">
                                                <img
                                                    loading="lazy"
                                                    decoding="async"
                                                    width="903"
                                                    height="183"
                                                    src="wp-content/uploads/2022/03/IUT-PARIS-RIVES-DE-SEINE-3-903x183.png"
                                                    class="attachment-full"
                                                    alt="Accueil"
                                                    title="IUT PARIS RIVES DE SEINE"
                                                    srcset="
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2022/03/IUT-PARIS-RIVES-DE-SEINE-3-903x183.png 903w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2022/03/IUT-PARIS-RIVES-DE-SEINE-3-300x61.png  300w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2022/03/IUT-PARIS-RIVES-DE-SEINE-3-768x156.png 768w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2022/03/IUT-PARIS-RIVES-DE-SEINE-3.png         908w
                                                    "
                                                    sizes="(max-width: 903px) 100vw, 903px"
                                                />
                                            </div>
                                        </div>
                                        <div class="vc_item">
                                            <div class="vc_inner">
                                                <img loading="lazy" decoding="async" width="191" height="135" src="wp-content/uploads/2023/09/image002.jpg" class="attachment-full" alt="Accueil" title="ESTP Logo" />
                                            </div>
                                        </div>
                                        <div class="vc_item">
                                            <div class="vc_inner">
                                                <img
                                                    loading="lazy"
                                                    decoding="async"
                                                    width="1714"
                                                    height="499"
                                                    src="wp-content/uploads/2023/12/leCnam_Eicnam_e%e2%95%a0ucole-inge%e2%95%a0u_CMJN-2-2-1-1714x499.png"
                                                    class="attachment-full"
                                                    alt="Accueil"
                                                    title="leCnam_Eicnam_e╠ücole-inge╠ü_CMJN (2) (2)"
                                                    srcset="
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2023/12/leCnam_Eicnam_e╠ucole-inge╠u_CMJN-2-2-1-1714x499.png 1714w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2023/12/leCnam_Eicnam_e╠ucole-inge╠u_CMJN-2-2-1-300x87.png    300w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2023/12/leCnam_Eicnam_e╠ucole-inge╠u_CMJN-2-2-1-1024x298.png 1024w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2023/12/leCnam_Eicnam_e╠ucole-inge╠u_CMJN-2-2-1-768x224.png   768w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2023/12/leCnam_Eicnam_e╠ucole-inge╠u_CMJN-2-2-1-1536x447.png 1536w,
                                                        https://www.ingenieurs2000.com/wp-content/uploads/2023/12/leCnam_Eicnam_e╠ucole-inge╠u_CMJN-2-2-1.png          1717w
                                                    "
                                                    sizes="(max-width: 1714px) 100vw, 1714px"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="vc_left vc_carousel-control" href="#vc_images-carousel-1-1714751626" data-slide="prev"><span class="icon-prev"></span></a>
                            <a class="vc_right vc_carousel-control" href="#vc_images-carousel-1-1714751626" data-slide="next"><span class="icon-next"></span></a>
                        </div>
                    </div>
                </div>
                <script>
                    if (jQuery(window).width() < 700) {
                        jQuery("#vc_images-carousel-1-1714751626").attr("data-per-view", "1");
                    }
                </script>
            </div>
        </div>
    </div>
</div>