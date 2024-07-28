

<?php
include('./condb.php');

?>



<div class="vc_row wpb_row vc_row-fluid vc_custom_1637250439021">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="testimonials_main_wrapper simple_carousel_wrapper">
                    <h2 class="testimonials_main_title text-center">Témoignages des etudiants</h2>
                    <div class="stm_testimonials_wrapper_style_4" data-slides="2">
                        <!-- <div class="stm_testimonials_single_wrapper">
                            <div class="stm_testimonials_single">
                                <div class="testimonial_header">
                                    <div class="testimonials_image">
                                        <img decoding="async" src="wp-content/uploads/2022/10/image-12-100x100.png" title="Justine" />
                                    </div>
                                    <div class="testimonials_info">
                                        <h2 class="testimonials_main_title text-left">Jul</h2>
                                        <h5>Pisciculture</h5>
                                    </div>
                                </div>
                                <div class="testimonials_excerpt">
                                    "J’ai opté pour la formation Génie Energétique de la Construction durable car elle regroupe également les matières que j’ai pu aborder pendant mon cursus en DUT : elle est donc
                                    dans la continuité de mes études. Enfin, j’ai souhaité développer de solides compétences professionnelles grâce à l’alternance. Selon moi, l’alternance est la voie idéale pour
                                    mettre à profit mes connaissances acquises à l’Ecole tout en bénéficiant d’une expérience significative en entreprise. C’est un moyen efficace pour se former à son futur métier et
                                    intégrer rapidement le marché du travail !"
                                </div>
                            </div>
                        </div> -->



                        <?php
                            $sql = "SELECT * FROM `temoignages`";
                            $query = mysqli_query($link,$sql);
                            $nblignes=mysqli_num_rows($query);	
                            if($nblignes>0){
                            $i=1;
                            while($data = mysqli_fetch_array($query)){		
                                $i++;	
                                $LIEN_IMAGE="./admin/public/images_temoin/".$data["IMAGE"];					
                                if(trim($data["IMAGE"]) == "" ){
                                    $LIEN_IMAGE =  "assets/img/aucun.jpg";
                                }
                                echo' <div class="stm_testimonials_single_wrapper" style="overflow: auto;width: 580px;">
                                            <div class="stm_testimonials_single">
                                                <div class="testimonial_header">
                                                    <div class="testimonials_image">
                                                        <img decoding="async" src="'.$LIEN_IMAGE.'" title="'.$data["NAME"].'" />
                                                    </div>
                                                    <div class="testimonials_info">
                                                        <h2 class="testimonials_main_title text-left">'.$data["NAME"].'</h2>
                                                        <h5>
                                                            '.$data["FILIERE"].'
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="testimonials_excerpt">
                                                    " '.$data["TEMOIGNAGE"].' "
                                                </div>
                                            </div>
                                        </div>
                                    ';
                            }
                            }
                        
                        ?>
                        
                        <div class="stm_testimonials_single_wrapper">
                            <div class="stm_testimonials_single">
                                <div class="testimonial_header">
                                    <div class="testimonials_image">
                                        <img decoding="async" src="wp-content/uploads/2022/10/image-11-100x100.png" title="Marie-Ngoïe" />
                                    </div>
                                    <div class="testimonials_info">
                                        <h2 class="testimonials_main_title text-left">Marie</h2>
                                        <h5>
                                            Agriculture
                                        </h5>
                                    </div>
                                </div>
                                <div class="testimonials_excerpt">
                                    " J’ai choisi la formation Mécatronique-Robotique en apprentissage car j’étais convaincue que c’était la meilleure voie pour apprendre un métier. J’aimais aussi l’idée de pouvoir
                                    apprendre chaque matière qui compose cette formation : la mécanique, l’informatique, l’électronique et l’automatique. De plus, la mécatronique et la robotique sont présentes dans
                                    tous les domaines de l’industrie et constituent les défis technologiques de demain. La formation a beaucoup d’atouts : elle permet d’intégrer aussi bien des PME que de grandes
                                    entreprises, de développer une réelle polyvalence et de s’adapter plus facilement à différents postes. "
                                </div>
                            </div>
                        </div>
                        <!-- <div class="stm_testimonials_single_wrapper">
                            <div class="stm_testimonials_single">
                                <div class="testimonial_header">
                                    <div class="testimonials_image">
                                        <img decoding="async" src="wp-content/uploads/2015/07/alexis-cohen_Ingenieurs2000-100x100.jpg" title="Alexis" />
                                    </div>
                                    <div class="testimonials_info">
                                        <h2 class="testimonials_main_title text-left">Alexis</h2>
                                        <h5>Pisciculture</h5>
                                    </div>
                                </div>
                                <div class="testimonials_excerpt">
                                    «J’ai validé un DUT Génie Mécanique et Productique proposé par Ingénieurs 2000 en partenariat avec Le Cnam. J’ai choisi l’alternance pour le côté concret grâce notamment à ma
                                    formation DUT qui m’a permis de mieux cerner ce que je voulais faire plus tard. A l'issue de mon DUT, j'ai poursuivi sur un diplôme d’ingénieur en Aéronautique et Espace en
                                    alternance chez AKKA I&amp;S. J'ai pu ainsi acquérir une expérience professionnelle de cinq ans.»
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>