<?php 

// Adds Custom Post Types

add_action( 'init', 'create_post_type' );
    function create_post_type() {
    
    // Adds for Leadership
    	
    register_post_type( 'leadership',
        array(
            'labels' => array(
                'name' => __( 'Leadership' ),
                'singular_name' => __( 'Leadership' ),
                'add_new' => __( '+ Add New Person' ),
                'add_new_item' => __( 'Add New Person' ),
                'edit_item' => __( 'Edit Person' ),
                'new_item' => __( 'New Person' ),
                'view_item' => __( 'View People' ),
                'search_items' => __( 'Search People' ),
                'not_found' => __( 'No Persons Found' ),
                'not_found_in_trash' => __( 'No Persons Found' ),
                'all_items' => __( 'All Leadership' ),
                ),
            'public' => true,
    		'comments' => true,
            'has_archive' => false,
    		'rewrite' => array('slug' => 'leadership', 'with_front' => false),
    		'supports' => array('title', 'editor', 'page-attributes'),
    		'menu_icon' => 'dashicons-id-alt',
    		'menu_position' => 20
            )
        );
        
    // Adds for Partners
    	
    register_post_type( 'partners',
        array(
            'labels' => array(
                'name' => __( 'Partners' ),
                'singular_name' => __( 'Partners' ),
                'add_new' => __( '+ Add New Partner' ),
                'add_new_item' => __( 'Add New Partner' ),
                'edit_item' => __( 'Edit Partner' ),
                'new_item' => __( 'New Partner' ),
                'view_item' => __( 'View Partners' ),
                'search_items' => __( 'Search Partners' ),
                'not_found' => __( 'No Partners Found' ),
                'not_found_in_trash' => __( 'No Partners Found' ),
                'all_items' => __( 'All Partners' ),
                ),
            'public' => true,
    		'comments' => true,
            'has_archive' => false,
    		'rewrite' => array('slug' => 'partners', 'with_front' => false),
    		'supports' => array('title', 'editor'),
    		'menu_icon' => 'dashicons-forms',
    		'menu_position' => 20,
    		'taxonomies' => array('post_tag'),
            )
        );
        
    // Adds for Downloads
    	
    register_post_type( 'downloads',
        array(
            'labels' => array(
                'name' => __( 'Downloads' ),
                'singular_name' => __( 'Download' ),
                'add_new' => __( '+ Add New Download' ),
                'add_new_item' => __( 'Add New Download' ),
                'edit_item' => __( 'Edit Download' ),
                'new_item' => __( 'New Download' ),
                'view_item' => __( 'View Downloads' ),
                'search_items' => __( 'Search Downloads' ),
                'not_found' => __( 'No Downloads Found' ),
                'not_found_in_trash' => __( 'No Downloads Found' ),
                'all_items' => __( 'All Downloads' ),
                ),
            'public' => true,
    		'comments' => true,
            'has_archive' => false,
    		'rewrite' => array('slug' => 'downloads', 'with_front' => false),
    		'supports' => array('title', 'editor'),
    		'menu_icon' => 'dashicons-media-text',
    		'menu_position' => 20
            )
        );
        
    // Adds for Pop Up Window
    	
    register_post_type( 'modal',
        array(
            'labels' => array(
                'name' => __( 'Modals' ),
                'singular_name' => __( 'Modal' ),
                'add_new' => __( '+ Add New Modal' ),
                'add_new_item' => __( 'Add New Modal' ),
                'edit_item' => __( 'Edit Modal' ),
                'new_item' => __( 'New Modal' ),
                'view_item' => __( 'View Modals' ),
                'search_items' => __( 'Search Modals' ),
                'not_found' => __( 'No Modals Found' ),
                'not_found_in_trash' => __( 'No Modals Found' ),
                'all_items' => __( 'All Modals' ),
                ),
            'public' => true,
    		'comments' => false,
            'has_archive' => false,
    		'rewrite' => array('slug' => 'modal', 'with_front' => false),
    		'supports' => array('title', 'editor'),
    		'menu_icon' => 'dashicons-format-video',
    		'menu_position' => 20
            )
        );
    
}