<?php

require_once('inc/wp-modifications.php');
require_once('inc/post-types.php');
require_once('inc/theme-options.php');


// Adds Sidebars

function magazino_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'sidebar' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );

}
add_action( 'widgets_init', 'magazino_widgets_init' );


// Adds Support for Menus

add_theme_support( 'menus' );

register_nav_menus( array(  
    'primary' => __( 'Primary Navigation' ), 
    'footer' => __( 'Footer Navigation' ), 
) );

	
// Adds Style to Admin

add_action('admin_head', 'my_custom_logo');

function my_custom_logo() {
echo '
    <link href="'.get_bloginfo('template_directory').'/css/admin.css" type="text/css" rel="stylesheet">
<meta name="viewport" content="width=1100, initial-scale=0.5">
';
}


// Changes Login Logo

function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('template_directory').'/images/login-logo.png) !important; width: 300px !important; height: 83px !important; background-size: 100% !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');


?>