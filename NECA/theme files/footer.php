<footer id="footer">
    <div class="container">
        
        <div class="row">
        
	        <div class="col-md-6 menu">
	            <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
	            <div class="clearfix"></div>
	        </div>
	        
	        <div class="col-md-6 copyright text-right">
	        	<p class="font-size--md"><strong><?php bloginfo('name'); ?></strong></p>
	            <p class="default-padding--top no-margin--bottom">&copy; <?php echo date('Y'); ?> All Rights Reserved</p>
	            <?php if (!empty(get_theme_mod( 'siteinformation_address' ))) { ?>
	            	<p><?php echo ( get_theme_mod( 'siteinformation_address' ) ); ?></p>
	            <?php } ?>
	            <div class="clearfix"></div>
	        </div>
        
        </div>
    
    </div>
</footer>

<?php wp_footer(); ?>