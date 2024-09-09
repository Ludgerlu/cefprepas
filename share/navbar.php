




<div id="header" class="<?php if((basename($_SERVER['PHP_SELF']) == 'index.php') || (basename($_SERVER['PHP_SELF']) == '') ) {echo'transparent_header';}else{echo'transparent_header_off';}?> sticky_header" data-color="">
    <div class="header_top_bar hidden_mobile" style="background-color: #ffffff;">
        <div class="container">
            <div class="clearfix">
                <!-- Header top bar Socials -->
                <div class="pull-left">
                    <div class="header_top_bar_socs">
                        <ul class="clearfix">
                            <li>
                                <a href="https://www.instagram.com/cefprepas/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/cefprepas1" target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://web.facebook.com/CEFPREPAS" target="_blank"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@cefprepas8345" target="_blank"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="pull-right top-right">
                    <div class="search-toggler-unit">
                        <div class="search-top-bar" data-toggle="modal" data-target="#searchModal">
                            <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="menu-/-nos-formation" transform="translate(-745.000000, -17.000000)" fill="#5F625E" stroke="#5F625E" stroke-width="0.605">
                                        <path
                                            d="M753.234892,31.7107492 C749.665799,31.7107492 746.76159,28.8063555 746.76159,25.2362407 C746.76159,21.6661258 749.665799,18.7616964 753.234892,18.7616964 C756.803984,18.7616964 759.708193,21.6660901 759.708193,25.2362407 C759.708193,28.8063912 756.803984,31.7107492 753.234892,31.7107492 M764,35.4648166 L758.604719,30.0684942 C759.759849,28.785718 760.469783,27.0944042 760.469783,25.2362049 C760.469748,21.2461984 757.22419,18 753.234892,18 C749.245593,18 746,21.2461984 746,25.2362407 C746,29.2262829 749.245593,32.4724813 753.234892,32.4724813 C755.092744,32.4724813 756.783707,31.7624145 758.06628,30.6070696 L763.458205,36 C763.638875,35.8216531 763.819544,35.6433777 764,35.4648166"
                                            id="Fill-1"
                                        ></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <a class="btn-grey download-icon" target="_blank" href="./cef/Brochure CEFPREPAS.pdf" title="TÉLÉCHARGEZ LA BROCHURE">TÉLÉCHARGEZ LA BROCHURE</a>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky_header_holder"></div>

    <div class="header_default header_default">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="logo-unit">
                        <a href="index.php">
                            <?PHP
                                if(((basename($_SERVER['PHP_SELF']) == 'index.php') || (basename($_SERVER['PHP_SELF']) == '') )){
                                echo'
                                <img
                                class="img-responsive logo_transparent_static  hidden"
                                src="cef/Logo_CEFPREPAS_white.png"
                                alt="CEFPREPAS.cm" style="height: 100px;"
                                />
                                ';

                                }
                            ?>
                            
                            <img
                                class="img-responsive logo_colored_fixed visible"
                                src="cef/Logo_CEFPREPAS.j.png"
                                
                                alt="cefprepas.com" style="height: 100px;"
                            />
                        </a>
                    </div>

                    <div class="hidden_desktop mobile_header_menu">
                        <div class="search-toggler-unit">
                            <div class="search-top-bar" data-toggle="modal" data-target="#searchModal">
                                <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="menu-/-nos-formation" transform="translate(-745.000000, -17.000000)" fill="#5F625E" stroke="#5F625E" stroke-width="0.605">
                                            <path
                                                d="M753.234892,31.7107492 C749.665799,31.7107492 746.76159,28.8063555 746.76159,25.2362407 C746.76159,21.6661258 749.665799,18.7616964 753.234892,18.7616964 C756.803984,18.7616964 759.708193,21.6660901 759.708193,25.2362407 C759.708193,28.8063912 756.803984,31.7107492 753.234892,31.7107492 M764,35.4648166 L758.604719,30.0684942 C759.759849,28.785718 760.469783,27.0944042 760.469783,25.2362049 C760.469748,21.2461984 757.22419,18 753.234892,18 C749.245593,18 746,21.2461984 746,25.2362407 C746,29.2262829 749.245593,32.4724813 753.234892,32.4724813 C755.092744,32.4724813 756.783707,31.7624145 758.06628,30.6070696 L763.458205,36 C763.638875,35.8216531 763.819544,35.6433777 764,35.4648166"
                                                id="Fill-1"
                                            ></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>

                        <!-- Navbar toggle MOBILE -->
                        <button type="button" class="navbar-toggle collapsed hidden-lg hidden-md" data-toggle="collapse" data-target="#header_menu_toggler">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
                <!-- md-3 -->

                <!-- MObile menu -->
                <div class="col-xs-12 col-sm-12 visible-xs visible-sm">
                    <div class="collapse navbar-collapse header-menu-mobile" id="header_menu_toggler">
                        <ul class="header-menu clearfix">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18968"><a href="index.php">Accueil</a></li>

                            
                            <li id="menu-item-18288" class="non-click menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18288">
                                <a>CEFPREPAS</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-19219" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19219">
                                        <a href="#">Col1</a>
                                        <ul class="sub-menu">
                                            
                                            <li id="menu-item-5595" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5595"><a href="promoteur.php">Mot du promoteur</a></li>
                                            <li id="menu-item-18657" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18657"><a href="atout.php">Atout,Valeur,Mission</a></li>
                                            <li id="menu-item-5445" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5445"><a href="etudiant.php">Vie d'etudiant</a></li>
                                            <li id="menu-item-5593" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5593"><a href="stage_et_emplois.php">Emploit et stage</a></li>

                                        </ul>
                                    </li>
                                    <li id="menu-item-19223" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19223">
                                        <a href="#">Col2</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-5594" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5594"><a href="inscription.php">Incription en ligne</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-18276" class="non-click menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18276">
                                <a>Nos Formation</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-19224" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19224">
                                        <a href="#">Col2</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-5054" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5054">
                                                <a href="fomation.php">Nos Filières</a>
                                                <ul class="sub-menu">

                                                    <?php
                                                        $sql="SELECT * FROM `filieres`";
                                                        $query = mysqli_query($link,$sql);
                                                        $nblignes=mysqli_num_rows($query);	
                                                        if($nblignes>0){
                                                            $i=1;
                                                            while($data = mysqli_fetch_array($query)){	
                                                                $i++;	
                                                                echo'<li id="menu-item-18967" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18967">
                                                                        <a href="filiere.php?id='.$data['id'].'">'.$data['TITLE'].'</a>
                                                                    </li>';
                                                            }
                                                        }
                                                    ?>


                                                    
                                                    <li id="menu-item-18358" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18358">
                                                        <a href="fomation.php">Voir tout</a>
                                                    </li>
                                                    <!-- <li id="menu-item-18359" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18359">
                                                    <a href="pisciculture.php">Agriculture</a>
                                                    </li>
                                                    <li id="menu-item-18965" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18965">
                                                    <a href="pisciculture.php">Elevage de lapin</a>
                                                    </li>
                                                    <li id="menu-item-18966" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18966">
                                                    <a href="pisciculture.php">La ctulture des champignon </a>
                                                    </li> -->
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-18246" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18246"><a href="about.php">A Propos De Nous</a></li>
                            <li id="menu-item-18246" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18246"><a href="actu.php">News</a></li>
                            <li id="menu-item-18246" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18246"><a href="contact.php">Contacts</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5593"><a href="galerie.php">Galerie Photo</a></li>

                        </ul>
                    </div>
                </div>

                <!-- Desktop menu -->
                <div class="col-md-9 col-sm-9 col-sm-offset-0 hidden-xs hidden-sm">
                    <div class="stm_menu_toggler" data-text="Menu"></div>
                    <div class="header_main_menu_wrapper md3-menu clearfix" style="margin-top: 5px;">
                        <div class="pull-right hidden-xs right_buttons"></div>

                        <div class="collapse navbar-collapse pull-right">
                            <ul class="header-menu clearfix">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18968"><a href="./index.php">Accueil</a></li>
                                <li class="non-click menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18288">
                                    <a>CEFPREPAS</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19219">
                                            <a href="#">Col1 </a>
                                            <ul class="sub-menu">
                                                
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18657"><a href="./promoteur.php">Mot du promoteur</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5445"><a href="./atout.php">Atout-Valeur-Mission</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6186"><a href="./etudiant.php">Vie d'apprenant</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5593"><a href="./stage_et_emplois.php">Emploi et stage</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19223">
                                            <a href="#">Col2</a>
                                            <ul class="sub-menu">
                                                <!-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5594"><a href="./inscription.php">Incription en ligne</a></li> -->
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5593"><a href="./galerie.php">Galerie Photo</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5593"><a href="./document.php">Document</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18968"><a href="about.php">A Propos De Nous</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="non-click menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18276">
                                    <a>Nos Formations</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19224">
                                            <a href="#">Col1</a>
                                            <ul class="sub-menu">
                                                
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5054">
                                                    <a href="formation.php">Nos Filières</a>
                                                    <ul class="sub-menu">
                                                        <?php
                                                            $sql="SELECT * FROM `filieres`";
                                                            $query = mysqli_query($link,$sql);
                                                            $nblignes=mysqli_num_rows($query);	
                                                            if($nblignes>0){
                                                                $i=1;
                                                                while($i<5 && $data = mysqli_fetch_array($query)){	
                                                                    $i++;	
                                                                echo'<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18967">
                                                                            <a href="filiere.php?id='.$data['id'].'">'.$data['TITLE'].'</a>
                                                                        </li>';
                                                            }
                                                        }
                                                        ?>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18358">
                                                            <a href="formation.php">Tout Voir</a>
                                                        </li>
                                                        
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19223">
                                            <a href="#">Col2</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5594">
                                                    <a href="pg_formation.php">Programme De Formation</a>
                                                </li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5594">
                                                    <a href="diplome.php">Nos Diplomes</a>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                    
                                </li>
                                <!-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18968"><a href="about.php">A Propos De Nous</a></li> -->
                                    
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18968"><a href="actu.php">Actualites</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18246"><a href="contact.php">Contacts</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5594"><a href="./inscription.php">Incription En Ligne</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- md-8 desk menu -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
</div>