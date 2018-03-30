<?php

require_once('inc/wp-modifications.php');
require_once('inc/post-types.php');
require_once('inc/theme-options.php');
require_once('inc/wp-bootstrap-navwalker.php');
// require_once('inc/wysiwyg.php');


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
    'utility' => __( 'Utility Navigation' ),
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

function wpdocs_theme_name_scripts() {
    wp_register_script( 'jq', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array( ), NULL, false );
    wp_enqueue_script( 'jq' );
    wp_register_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array( ), NULL, false );
    wp_enqueue_script( 'popper' );
    wp_register_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js' , array( 'jq' ), NULL, false );
    wp_enqueue_script( 'bootstrap' );
    wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.custom.js' , array( 'jq' ), NULL, false );
    wp_enqueue_script( 'modernizr' );
    wp_register_script( 'float', get_template_directory_uri() . '/js/float.js' , array( 'jq' ), NULL, false );
    wp_enqueue_script( 'float' );

}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

// Changes Login Logo

function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('template_directory').'/images/login-logo.png) !important; width: 300px !important; height: 83px !important; background-size: 100% !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');

function my_excerpt($text, $raw_excerpt) {
    if( ! $raw_excerpt ) {
        $content = apply_filters( 'the_content', get_the_content() );
        $text = substr( $content, 0, strpos( $content, '</p>' ) + 4 );
    }
    return $text;
}

add_filter( 'wp_trim_excerpt', 'my_excerpt', 10, 2 );

// Adds Class to Previous and Next Post Links

add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1() {
    return 'class="btn btn-red"';
}
function posts_link_attributes_2() {
    return 'class="btn btn-red"';
}

add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');

function post_link_attributes($output) {
    $injection = 'class="btn btn-red"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}

// Custom WYSIWYG Colors

function my_mce4_options($init) {
 
    $custom_colors = '
        "c52f35", "Red",
        "1c3354", "Navy",
        "f0f8f9", "Foggy Blue",
        "a7c6db", "Carolina Blue",
        "f1f1f1", "Pearl White",
        "878c92", "Gray",
        "477e9f", "Steel Blue",
        "fff", "White",
        "000", "Black"
    ';
 
    // build color grid default+custom colors
    $init['textcolor_map'] = '['.$custom_colors.']';
 
    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init['textcolor_rows'] = 1;
 
    return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');

// Excludes PDF Download as a Category from Blog Main Feed

function exclude_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '-10' );
    }
}
add_action( 'pre_get_posts', 'exclude_category' );

?>