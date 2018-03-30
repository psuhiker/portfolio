<?php if(get_field('fas_pin_drop') > 0): ?>
	<script>
		jQuery(document).ready(function(){
			FasPinDrop.init(
				<?php the_field('fas_pin_drop'); ?>,
				'<?php the_field('fas_pin_icon');  ?>',
				'<?php the_field('fas_pin_icon_shadow'); ?>'
			);
		});
	</script>
<?php endif; ?>
<div id="header">
	
    <div class="container">
    
        <div class="grid_5">
    
            <div class="logo">
                <a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_mod( 'logo' ); ?>"></a>
            </div>
        
        </div>
        
        <div class="grid_7">
        
            <div class="social header">
                <ul>
                    <?php if (!empty(get_theme_mod( 'socialmedia_facebook' ))) { ?><li><a href="<?php echo get_theme_mod( 'socialmedia_facebook' ); ?>" target="_blank" class="Facebook"></a></li><?php } ?>
                    <?php if (!empty(get_theme_mod( 'socialmedia_twitter' ))) { ?><li><a href="<?php echo get_theme_mod( 'socialmedia_twitter' ); ?>" target="_blank" class="Twitter"></a></li><?php } ?>
                    <?php if (!empty(get_theme_mod( 'socialmedia_instagram' ))) { ?><li><a href="<?php echo get_theme_mod( 'socialmedia_instagram' ); ?>" target="_blank" class="Instagram"></a></li><?php } ?>
                    <?php if (!empty(get_theme_mod( 'socialmedia_rss' ))) { ?><li><a href="<?php echo get_theme_mod( 'socialmedia_rss' ); ?>" target="_blank" class="RSS"></a></li><?php } ?>
                </ul>
            </div>
        
        </div>
        
    </div>
    
</div>

<div class="clear">&nbsp;</div>

<div id="navigation">

    <div class="container">
        
        <nav class="top-bar" data-topbar role="navigation" data-options="is_hover: true">
           <ul class="title-area">
           		<li class-"name"></li>
    			<li class="toggle-topbar menu-icon"><a href="#"><span></span></a>
           </ul>
           <section class="top-bar-section">
           	
              <!-- Left Nav Section -->
                  <?php
                      $options = array(
                          'theme_location' => 'main',
                          'container' => false,
                          'depth' => 2,
                          'items_wrap' => '<ul id="%1$s" class="left %2$s">%3$s</ul>',
                          'walker' => new GC_walker_nav_menu()
                      );
                      wp_nav_menu($options); 
                  ?>
              <!-- Right Nav Section -->
                  <?php
                      $options = array(
                          'theme_location' => 'utility',
                          'container' => false,
                          'depth' => 2,
                          'items_wrap' => '<ul id="%1$s" class="right %2$s">%3$s</ul>',
                          'walker' => new GC_walker_nav_menu()
                      );
                      wp_nav_menu($options); 
                  ?>
              </section>
              
        </nav>
        
    </div>
    <div class="clear">&nbsp;</div>
    
</div>