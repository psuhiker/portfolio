<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKVS8C3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header id="header">
    <div class="container">

        <div class="row-eq-height">

            <div class="col-xs-6 col-sm-4 col-md-2 col-lg-3">
                <div class="logo">
                    <a href="<?php echo site_url(); ?>" data-tracking="mainLogo"><img src="<?php echo esc_url( get_theme_mod( 'themesimages_logo' ) ); ?>" data-tracking="mainLogo"></a>
                </div>
                <div class="logo horizontal">
                    <a href="<?php echo site_url(); ?>" data-tracking="mainLogo"><img src="<?php bloginfo('template_directory'); ?>/images/logo-horizontal.jpg" data-tracking="mainLogo"></a>
                </div>
            </div>

            <div class="col-sm-12 col-md-10 col-lg-9 no-padding--horizontal">
                <div class="navigation--utility">
                    <?php
                        wp_nav_menu( array(
                            'menu' => 'utility',
                            'theme_location' => 'utility',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => '',
                            'container_id' => '',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker())
                        );
                    ?>
                </div>
                <div class="clearfix"></div>
                <div class="navigation--primary">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-primary" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <?php
                        wp_nav_menu( array(
                            'menu' => 'primary',
                            'theme_location' => 'primary',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse no-padding--horizontal',
                            'container_id' => 'navbar-collapse-primary',
                            'menu_class' => 'nav navbar-nav flex',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker())
                        );
                    ?>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>

    </div>
</header>

<?php 
    if(is_front_page()) {  $currentPage = 'home'; }
    query_posts( 'post_type=modal&orderby=date&order=DESC&posts_per_page=1&meta_key=activate_modal&meta_value=1' ); 
?>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        
            <?php if( get_field('display_options') == 'home' ) { ?>
                <?php if( $currentPage == 'home' ) { ?>
        
                    <?php include (TEMPLATEPATH . '/includes/modal.php' ); ?>
                    
                <?php } ?>
            <?php } else { ?>
            
                <?php include (TEMPLATEPATH . '/includes/modal.php' ); ?>
            
            <?php } ?>
        
        <?php endwhile; ?>
    <?php else: ?>
            
    <?php endif; ?>
    
<?php wp_reset_query(); ?>