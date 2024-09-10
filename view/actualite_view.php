<div id="main">
    <div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default">
        <div class="stm_breadcrumbs_unit">
            <div class="container">
                <div class="navxtBreads">
                    <!-- Breadcrumb NavXT 7.3.0 -->
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="Go to CEFPREPAS.cmr." href="../index.php" class="home"><span property="name">Accueil</span></a><meta property="position" content="1" />
                    </span>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name" class="post-root post post-post current-item">Actualités</span><meta property="url" content="index.php" /><meta property="position" content="2" />
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container blog_main_layout_grid">
        <div class="blog_layout_grid sidebar_position_none">
            <div class="row" id="actualites">
                </div>
        </div>
        <!-- blog_layout -->
        <div class="sidebar-area sidebar-area-none"></div>
    </div>
</div>


<script>
    function afficher_le_tableau_js(){
        $.ajax({
            url: "controller/ActuController.php",
            type: "GET",
            success: function(data){
                $("#actualites").show();
                $("#actualites").html(data);				
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