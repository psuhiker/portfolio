<?php

require_once('inc/custom-posts.php');
require_once('inc/wp-modifications.php');
require_once('inc/theme-options.php');

// Adds Support for Menus

add_theme_support( 'menus' );

register_nav_menus( array(
    'main' => __( 'Main Menu' ),
    'utility' => __( 'Utility Menu' ),
    'footer' => __( 'Footer Navigation' )
) );

// Adds Style to Admin
function my_custom_logo() {
    echo '<link href="'.get_bloginfo('template_directory').'/css/admin.css" type="text/css" rel="stylesheet">';
}
add_action('admin_head', 'my_custom_logo');

function catalog_head() {
    $user_id = get_current_user_id();
    if ($user_id == 33) {
        echo '<style><!-- /* No Styles Added Yet */ --></style>';
    } else {
        echo '';
    }
}
add_action('admin_head', 'catalog_head');


// Changes the Login Logo

function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);
            padding-bottom: 0px;
            background-size:  250px;
            overflow: visible;
            width:  100%;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


// Adds Custom HTML to Theme Post Type Edit Page

function myplugin_add_meta_box() {

	$screens = array( 'theme' );

	foreach ( $screens as $screen ) {

		add_meta_box(
			'myplugin_sectionid',
			__( 'My Post Section Title', 'myplugin_textdomain' ),
			'myplugin_meta_box_callback',
			$screen
		);
	}
}
add_action( 'add_meta_boxes', 'myplugin_add_meta_box' );

// Changes Dashboard Footer
function wp_admin_dashboard_custom_footer_text( $default_text ) {
    return '&copy ' . date('Y') . ' Archdiocese of Philadelphia';
}
add_filter( 'admin_footer_text', 'wp_admin_dashboard_custom_footer_text' );

 // Adds Settings Page for Custom Fields
 function my_acf_options_page_settings( $settings ) {
	$settings['title'] = 'Global';
	$settings['pages'] = array('Header', 'Sidebar', 'Footer');

	return $settings;
}
add_filter('acf/options_page/settings', 'my_acf_options_page_settings');

/**
 * Prints the box content.
 *
 * @param WP_Post $post The object for the current post/page.
 */
function myplugin_meta_box_callback( $post ) {

	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'myplugin_save_meta_box_data', 'myplugin_meta_box_nonce' );

	/*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$value = get_post_meta( $post->ID, '_my_meta_value_key', true );

//	echo '<label for="myplugin_new_field">';
//	_e( 'Description for this field', 'myplugin_textdomain' );
//	echo '</label> ';
//	echo '<input type="text" id="myplugin_new_field" name="myplugin_new_field" value="' . esc_attr( $value ) . '" size="25" />';

    echo '<style><!-- #myplugin_sectionid, h2, #titlediv, #edit-slug-box, .misc-pub-post-status, .misc-pub-visibility, #preview-action, .handlediv, h3.ui-sortable-handle, #minor-publishing, .misc-pub-curtime, #delete-action, #screen-options-link-wrap { display: none; } #major-publishing-actions { border: none; background: #f1f1f1; } .postbox { border: none; -webkit-box-shadow: none; box-shadow: none; } --></style>';

}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function myplugin_save_meta_box_data( $post_id ) {

	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['myplugin_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['myplugin_meta_box_nonce'], 'myplugin_save_meta_box_data' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}

	} else {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	/* OK, it's safe for us to save the data now. */

	// Make sure that it is set.
	if ( ! isset( $_POST['myplugin_new_field'] ) ) {
		return;
	}

	// Sanitize user input.
	$my_data = sanitize_text_field( $_POST['myplugin_new_field'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, '_my_meta_value_key', $my_data );
}
add_action( 'save_post', 'myplugin_save_meta_box_data' );


// Ads First Image as Featured Image

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  $new_img_tag = "";

  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image with 0 width
  $new_img_tag = "<img src='./images/bargainsfrenzy.com.gif' class='alignleft' />";
  }

  else{
    echo $new_img_tag = "<img src='./thumb.php?gd=2&src=".$first_img."&maxw=120' class='alignleft' />";
  }

  return $new_img_tag;
}

// For Category Drop Down

class my_Walker_CategoryDropdown extends Walker_CategoryDropdown {

	function start_el(&$output, $category, $depth = 0, $args = Array(), $id = 0) {
		$pad = str_repeat(' ', $depth * 3);

		$cat_name = apply_filters('list_cats', $category->name, $category);
		$output .= "\t<option class=\"level-$depth\" value=\"".$category->slug."\"";
		if ( $category->term_id == $args['selected'] )
			$output .= ' selected="selected"';
		$output .= '>';
		$output .= $pad.$cat_name;
		if ( $args['show_count'] )
			$output .= '  ('. $category->count .')';
		if ( $args['show_last_update'] ) {
			$format = 'Y-m-d';
			$output .= '  ' . gmdate($format, $category->last_update_timestamp);
		}
		$output .= "</option>\n";
	}
}


// For News Search Results Template

function template_chooser($template)
{
  global $wp_query;
  $post_type = get_query_var('post_type');
  if( $wp_query->is_search && $post_type == 'post' )
  {
    return locate_template('post-search.php');  //  redirect to archive-search.php
  }
  elseif( $wp_query->is_search && $post_type == 'job' )
  {
    return locate_template('jobs-search.php');  //  redirect to archive-search.php
  }
  elseif( $wp_query->is_search && $post_type == 'article' )
  {
    return locate_template('article-search.php');  //  redirect to archive-search.php
  }
  return $template;
}
add_filter('template_include', 'template_chooser');



// Integrates Foundation's Menu

class GC_walker_nav_menu extends Walker_Nav_Menu {

  // add classes to ul sub-menus
  function start_lvl(&$output, $depth = 0, $args = Array()) {
    // depth dependent classes
    $indent = ( $depth > 0 ? str_repeat("\t", $depth) : '' ); // code indent

    // build html
    $output .= "\n" . $indent . '<ul class="dropdown">' . "\n";
  }
}

if (!function_exists('GC_menu_set_dropdown')) :
function GC_menu_set_dropdown($sorted_menu_items, $args) {
  $last_top = 0;
  foreach ($sorted_menu_items as $key => $obj) {
    // it is a top lv item?
    if (0 == $obj->menu_item_parent) {
      // set the key of the parent
      $last_top = $key;
    } else {
      $sorted_menu_items[$last_top]->classes['dropdown'] = 'has-dropdown not-click';
    }
  }

  return $sorted_menu_items;
}
endif;
add_filter('wp_nav_menu_objects', 'GC_menu_set_dropdown', 10, 2);

function register_styles() {
	wp_enqueue_style(
    'articles-blog',
    get_template_directory_uri() . '/css/articles-blog.css'
	);
	wp_enqueue_style(
    'home-page',
    get_template_directory_uri() . '/css/home-page.css'
	);
	wp_enqueue_style(
    'career-page',
    get_template_directory_uri() . '/css/career-page.css'
	);
	wp_enqueue_style(
    'search-filter',
    get_template_directory_uri() . '/css/search-filter.css'
	);
	wp_enqueue_style(
    'job-page',
    get_template_directory_uri() . '/css/job-page.css'
	);
};

add_action( 'wp_enqueue_scripts', 'register_styles' );

function wp_articles_query( $query ){
    if( $query->is_post_type_archive( 'article' )
        && $query->is_main_query() ){
            $query->set( 'posts_per_page', 20 );
    }
}
add_action( 'pre_get_posts', 'wp_articles_query' );

function wp_jobs_query( $query ){
    if( $query->is_post_type_archive( 'job' )
        && $query->is_main_query() ){
            $query->set( 'posts_per_page', 10 );
            $query->set( 'orderby', 'date' );
            $query->set( 'order', 'DESC' );
    }
}
add_action( 'pre_get_posts', 'wp_jobs_query' );

function download_shortcode( $atts, $content = null) {
	 $a = shortcode_atts([
         'name' => 'aops.pdf',
         'url' => 'aops.pdf',
     ], $atts);
	return '<div class="blog-download"><a href="' . esc_html__($a['url']) . '" class="button red small pdf-download" download="'. esc_html__($a['name'], 'aops.pdf') . '" >Download PDF</a></div>';
}
add_shortcode( 'download', 'download_shortcode' );

 function case_insensitive_url() {

   if (preg_match('/[A-Z]/', $_SERVER['REQUEST_URI'])) {

    $_SERVER['REQUEST_URI'] = strtolower($_SERVER['REQUEST_URI']);

    $_SERVER['PATH_INFO']   = strtolower($_SERVER['PATH_INFO']);

   }

  }

  add_action('init', 'case_insensitive_url');

  function add_query_vars_filter( $vars ){
    $vars[] = "term_1";
    $vars[] .= "term_2";
    $vars[] .= "term_3";
    $vars[] .= "term_4";
    $vars[] .= "employment_school";
    $vars[] .= "employment_position_length";
    $vars[] .= "employment_position_type";
    $vars[] .= "employment_position_level";
    return $vars;
  }
  add_filter( 'query_vars', 'add_query_vars_filter' );
  // tax_query_function takes the taxonomy terms from the search query and preps them for the wp_query.
  function tax_query_function($array) {
    $tax_query = [];
    if(!empty($array))
    {
    	$tax_query[] = array(
    			'taxonomy' => 'employment',
    			'field' => 'slug',
    			'terms' => $array,
    		);
    }
    return $tax_query;
  };

  // filter_meta_query preps the key and value pairs from the filter_meta_array function for the wp_query.
  function filter_meta_query($k, $v) {
    return array(
      'key'     => $k,
      'value'   => $v,
      'compare' => 'LIKE',
    );
  };

  // filter_meta_array searches an array and returns a new array with only the key and value of the target keys.
  function filter_array_targets($array, $targets) {

    $new_array = [];
    foreach ($array as $key => $value) {
      if (in_array($key, $targets)) {
        $new_array[$key] = $value;
      };
    };
    return $new_array;
  };

  function friendly_title($string) {
    $separators = ['-', '_'];
    $friendly_value = ucwords(str_replace($separators, ' ', $string));
    return $friendly_value;
  }

  function term_replace_func($array) {
    $term_replace = (isset($array['employment_position_level'])) ? $array['employment_position_level'] . ' ' : '';
    $term_replace = friendly_title($term_replace);
    // $term_replace = str_replace('_', ' ', $term_replace);
    $term_targets = ['term_1','term_2','term_3','term_4',];
    $term_arr = filter_array_targets($array, $term_targets);
    foreach($term_arr as $term) {
      $term .= ($term == end($term_arr) ? '' : ', ');
      $term_replace .= str_replace('-', ' ', $term);
    };
    return ucwords($term_replace);
  };


  // function filter_terms($array) {
  //   $term_1 = (isset($array['term_1'])) ? $array['term_1'] : null;
  //   $term_2 = (isset($array['term_2'])) ? $array['term_2'] : null;
  //   $term_3 = (isset($array['term_3'])) ? $array['term_3'] : null;
  //   $term_4 = (isset($array['term_4'])) ? $array['term_4'] : null;
  //   return array_filter(array($term_1,$term_2,$term_3,$term_4),
  //   function($k) {
  //     return (isset($k));
  //   });
  // }

?>
