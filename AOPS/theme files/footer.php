<div class="clear">&nbsp;</div>

<div id="footer">

    <div class="container">
    
        <div class="grid_7">
            <div class="padding">
                <p class="address"><?php echo get_theme_mod( 'address' ); ?></p>
                <p class="phone"><a class="footer" href="tel:<?php echo get_theme_mod( 'phone_number' ); ?>"><?php echo get_theme_mod( 'phone_number' ); ?></a></p>
                
                <p>&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo( 'name' ); ?>.<br>All Rights Reserved.</p>
        
            </div>
        </div>
        
        <div class="grid_5 right">
            <div class="padding">
            
                <div class="social footer">
                    <ul>
                        <?php if (!empty(get_theme_mod( 'socialmedia_facebook' ))) { ?><li><a href="<?php echo get_theme_mod( 'socialmedia_facebook' ); ?>" target="_blank" class="Facebook"></a></li><?php } ?>
                        <?php if (!empty(get_theme_mod( 'socialmedia_twitter' ))) { ?><li><a href="<?php echo get_theme_mod( 'socialmedia_twitter' ); ?>" target="_blank" class="Twitter"></a></li><?php } ?>
                        <?php if (!empty(get_theme_mod( 'socialmedia_instagram' ))) { ?><li><a href="<?php echo get_theme_mod( 'socialmedia_instagram' ); ?>" target="_blank" class="Instagram"></a></li><?php } ?>
                        <?php if (!empty(get_theme_mod( 'socialmedia_rss' ))) { ?><li><a href="<?php echo get_theme_mod( 'socialmedia_rss' ); ?>" target="_blank" class="RSS"></a></li><?php } ?>
                    </ul>
                </div>
                
                <?php wp_nav_menu( array( 'container_class' => 'footer-menu', 'theme_location' => 'footer' ) ); ?>
            
            </div>
        </div>
    
    </div>
    
    <div class="clear">&nbsp;</div>

</div>

