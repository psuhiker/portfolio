<?php 

add_action( 'init', 'create_post_type' );
    function create_post_type() {
    
    // Adds for Portfolio Items
    	
//    register_post_type( 'portfolio',
//        array(
//            'labels' => array(
//                'name' => __( 'Portfolio Items' ),
//                'singular_name' => __( 'Portfolio Item' ),
//                'add_new' => __( '+ Add New Portfolio Item' ),
//                'add_new_item' => __( 'Add New Portfolio Item' ),
//                'edit_item' => __( 'Edit Portfolio Item' ),
//                'new_item' => __( 'New Portfolio Item' ),
//                'view_item' => __( 'View Portfolio Item' ),
//                'search_items' => __( 'Search Portfolio Items' ),
//                'not_found' => __( 'No Items Found' ),
//                'not_found_in_trash' => __( 'No Items Found' ),
//                'all_items' => __( 'All Portfolio Items' ),
//                ),
//            'public' => true,
//    		'comments' => true,
//            'has_archive' => true,
//    		'rewrite' => array('slug' => 'portfolio', 'with_front' => false),
//    		'supports' => array('title', 'thumbnail'),
//    		'menu_icon' => 'dashicons-images-alt2',
//    		'menu_position' => 20
//            )
//        );
        
    }