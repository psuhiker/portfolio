<?php

require_once('inc/wp-modifications.php');
require_once('inc/post-types.php');
require_once('inc/theme-options.php');
require_once('inc/user-roles.php');
require_once('inc/wp-bootstrap-navwalker.php');


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
    'member' => __( 'Member Navigation' ), 
    'admin' => __( 'Member Administration' ), 
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


// Adds Logout Validation

add_action('check_admin_referer', 'logout_without_confirm', 10, 2);
function logout_without_confirm($action, $result)
{
    /**
     * Allow logout without confirmation
     */
    if ($action == "log-out" && !isset($_GET['_wpnonce'])) {
        $redirect_to = isset($_REQUEST['redirect_to']) ? $_REQUEST['redirect_to'] : '';
        $location = str_replace('&amp;', '&', wp_logout_url($redirect_to));;
        header("Location: $location");
        die;
    }
}

?>