<?php 

// Adds Custom Post Types

add_action( 'init', 'create_post_type' );
    function create_post_type() {
    
    // Adds for News
    	
    register_post_type( 'work',
        array(
            'labels' => array(
                'name' => __( 'Portfolio Item' ),
                'singular_name' => __( 'Portfolio Item' ),
                'add_new' => __( '+ Add New Portfolio Item' ),
                'add_new_item' => __( 'Add New Portfolio Item' ),
                'edit_item' => __( 'Edit Portfolio Item' ),
                'new_item' => __( 'New Portfolio Item' ),
                'view_item' => __( 'View Portfolio Item' ),
                'search_items' => __( 'Search Portfolio Items' ),
                'not_found' => __( 'No Portfolio Items Found' ),
                'not_found_in_trash' => __( 'No Portfolio Items Found' ),
                'all_items' => __( 'All Portfolio Items' ),
                ),
            'public' => true,
    		'comments' => true,
            'has_archive' => true,
    		'rewrite' => array('slug' => 'work', 'with_front' => false),
    		'supports' => array('title', 'editor', 'thumbnail'),
    		'menu_icon' => 'dashicons-format-gallery',
    		'menu_position' => 20
            )
        );
    
}
    

// Adds Custom Taxonomies

function add_custom_taxonomies() {
	
	// Add New Categories
	
	register_taxonomy('work_categories', 'work', array(
		'hierarchical' => true,
		'labels' => array(
			'name' => _x( 'Categories', 'taxonomy general name' )
		),
		'rewrite' => array(
			'slug' => 'type', 
			'with_front' => false, 
			'hierarchical' => true 
		),
	));
	
}
add_action( 'init', 'add_custom_taxonomies', 0 );