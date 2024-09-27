<div id="main">
    <!-- Title -->

    <!-- Breads -->
    <div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default">
        <div class="stm_breadcrumbs_unit">
            <div class="container">
                <div class="navxtBreads">
                    <!-- Breadcrumb NavXT 7.3.0 -->
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" href="index.php" class="home"><span property="name">Accueil</span></a><meta property="position" content="1" />
                    </span>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name" class="post-root post post-post current-item">Vie d'etudaint</span><meta property="url" content="index.html" /><meta property="position" content="2" />
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container blog_main_layout_grid">
        <div class="blog_layout_grid sidebar_position_none">
            <div class="row">
                <?php include('controller/etudiantController.php')?>
            </div>
        </div>
        <!-- blog_layout -->
        <div class="sidebar-area sidebar-area-none"></div>
    </div>
</div>