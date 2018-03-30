<?php 

// Adds Custom Post Types

add_action( 'init', 'create_post_type' );

    function create_post_type() {
    
        // Adds for Employment Listings
        register_post_type( 'job',
            array(
                'labels' => array(
                    'name' => __( 'Employment Postings' ),
                    'singular_name' => __( 'Employment Posting' )
                ),
            'public' => true,
            'menu_icon' => 'dashicons-media-spreadsheet',
            'has_archive' => true
            )
        );
        
        // Adds for Bios
        register_post_type( 'bio',
            array(
                'labels' => array(
                    'name' => __( 'Bios' ),
                    'singular_name' => __( 'Bio' )
                ),
            'public' => true,
            'menu_icon' => 'dashicons-id-alt',
            'has_archive' => false
            )
        );
        
        // Adds for Theme Information
//        register_post_type( 'theme',
//            array(
//                'labels' => array(
//                    'name' => __( 'Template Settings' ),
//                    'singular_name' => __( 'Template Settings' )
//                ),
//            'public' => true,
//            'has_archive' => false,
//            'menu_icon' => 'dashicons-testimonial',
//            'show_ui' => true // <-- Custom Edit Screen
//            )
//        );
		
		// Adds for Family Stories
		register_post_type( 'family_stories',
            array(
                'labels' => array(
                    'name' => __( 'Family Stories' ),
                    'singular_name' => __( 'Family Stories' )
                ),
            'public' => true,
            'taxonomies' => array( 'category' ),
            'menu_icon' => 'dashicons-testimonial',
            'has_archive' => false
            )
        );
		
		// Adds for Blog Posts
		register_post_type( 'article',
            array(
                'labels' => array(
                    'name' => __( 'Blog Posts' ),
                    'singular_name' => __( 'Blog Post' )
                ),
            'supports' => array( 'title', 'excerpt', 'editor', 'thumbnail' ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'exploreaops' ),
            'taxonomies' => array('post_tag'),
            )
        );
        
    }
    
// Add new Taxonomies
	
	function add_custom_taxonomies() {
	
	    // School Locator
		
		register_taxonomy('school', 'wpsl_stores', array(
			'hierarchical' => true,
			'labels' => array(
				'name' => _x( 'Category', 'taxonomy general name' ),
				'singular_name' => _x( 'School Type', 'taxonomy singular name' ),
				'all_items' => __( 'All School Types' ),
				'edit_item' => __( 'Edit School Type' ),
				'update_item' => __( 'Update School Type' ),
				'add_new_item' => __( 'Add New School Type' ),
				'new_item_name' => __( 'New School Name' ),
				'menu_name' => __( 'School Types' ),
			),
			'rewrite' => array(
				'slug' => 'level', 
				'with_front' => false, 
				'hierarchical' => true,
				'has_archive' => true
			),
		));
		
		    // Hides Author Column from CMS Page for Schools
		    
		    function my_columns_filter( $columns ) {
		        unset($columns['author']);
		        unset($columns['date']);
		        return $columns;
		    }
		    add_filter( 'manage_edit-wpsl_stores_columns', 'my_columns_filter', 10, 1 );
		
		// Employment Listings
		
		register_taxonomy('employment', 'job', array(
			'hierarchical' => true,
			'show_admin_column' => true,
			'labels' => array(
				'name' => _x( 'Job Categories', 'taxonomy general name' ),
				'singular_name' => _x( 'Job Category', 'taxonomy singular name' ),
				'all_items' => __( 'All Job Categories' ),
				'edit_item' => __( 'Edit Category' ),
				'update_item' => __( 'Update Category' ),
				'add_new_item' => __( 'Add New Category' ),
				'new_item_name' => __( 'New Category Name' ),
				'menu_name' => __( 'Job Categories' ),
			),
			'rewrite' => array(
				'slug' => 'level', 
				'with_front' => false, 
				'hierarchical' => true,
				'has_archive' => true
			),
		));
		
		// Blog Post Categories
		
		register_taxonomy('blog_category', 'article', array(
			'hierarchical' => true,
			'show_admin_column' => true,
			'labels' => array(
				'name' => _x( 'Blog Categories', 'taxonomy general name' ),
				'singular_name' => _x( 'Blog Category', 'taxonomy singular name' ),
				'all_items' => __( 'All Blog Categories' ),
				'edit_item' => __( 'Edit Category' ),
				'update_item' => __( 'Update Category' ),
				'add_new_item' => __( 'Add New Category' ),
				'new_item_name' => __( 'New Category Name' ),
				'menu_name' => __( 'Blog Categories' ),
			),
			'rewrite' => array(
				'slug' => 'blog-categories', 
				'with_front' => false, 
				'hierarchical' => true,
				'has_archive' => true
			),
		));
		
	}
	add_action( 'init', 'add_custom_taxonomies', 0 );