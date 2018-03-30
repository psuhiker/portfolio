<?php if ( ! is_admin() ) { ?>

	<div class="well well-sm">

		<p><strong>Administrator Options</strong></p>
		
		<?php
		    wp_nav_menu( array(
		        'menu' => 'admin',
		        'theme_location' => 'admin',
		        'depth' => 2,
		        'container' => '',
		        'container_class' => '',
		        'container_id' => '',
		        'menu_class' => 'list-unstyled no-margin--bottom',
		        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
		        'walker' => new WP_Bootstrap_Navwalker())
		    );
		?>
	
	</div>
	
	<div class="clearfix"></div>
	
<?php } ?>

<?php
    wp_nav_menu( array(
        'menu' => 'member',
        'theme_location' => 'member',
        'depth' => 2,
        'container' => 'div',
        'container_class' => '',
        'container_id' => '',
        'menu_class' => 'nav nav-pills nav-stacked',
        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
        'walker' => new WP_Bootstrap_Navwalker())
    );
?>

<div class="clearfix"></div>