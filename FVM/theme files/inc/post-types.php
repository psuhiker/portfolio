<?php 

// Adds Custom Post Types
add_action( 'init', 'create_post_type' );
    function create_post_type() {

        // Adds for Case Study Post Type
        register_post_type( 'case_study',
            array(
                'labels' => array(
                    'name' => __( 'Case Studies' ),
                    'singular_name' => __( 'Case Study' )
                ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array( 'slug' => 'portfolio','with_front' => FALSE),
            'capability_type' => 'page',
            'hierarchical' => true,
            'menu_icon' => 'dashicons-welcome-widgets-menus',
            )

        );
        
        // Adds for Bios Post Type
                register_post_type( 'bio',
                    array(
                        'labels' => array(
                            'name' => __( 'Employee Bios' ),
                            'singular_name' => __( 'Bio' )
                        ),
                    'public' => true,
                    'has_archive' => false,
                    'rewrite' => array( 'slug' => 'bios','with_front' => FALSE),
                    'capability_type' => 'page',
                    'hierarchical' => true,
                    'menu_icon' => 'dashicons-id-alt',
                    )
        
                );
        
        // Adds for Jobs Post Type
                register_post_type( 'jobs',
                    array(
                        'labels' => array(
                            'name' => __( 'Job Postings' ),
                            'singular_name' => __( 'jobs' )
                        ),
                    'public' => true,
                    'has_archive' => true,
                    'capability_type' => 'page',
                    'rewrite' => array( 'slug' => 'jobs','with_front' => FALSE),
                    'hierarchical' => true,
                    'menu_icon' => 'dashicons-format-status',
                    )
        
                );
                
        // Adds for Landing Pages
                register_post_type( 'lp',
                    array(
                        'labels' => array(
                            'name' => __( 'Landing Pages' ),
                            'singular_name' => __( 'Landing Page' )
                        ),
                    'public' => true,
                    'has_archive' => false,
                    'capability_type' => 'page',
                    'rewrite' => array( 'slug' => 'campaigns','with_front' => FALSE),
                    'hierarchical' => true,
                    'menu_icon' => 'dashicons-images-alt',
                    )
        
                );

        // Adds for RFP Post Type
//        register_post_type( 'rfp_post',
//            array(
//                'labels' => array(
//                    'name' => __( 'Marketing Pages' ),
//                    'singular_name' => __( 'Marketing Pages' )
//                ),
//            'public' => true,
//            'has_archive' => true,
//            'rewrite' => array( 'slug' => 'rfp','with_front' => FALSE),
//            'capability_type' => 'page',
//            'hierarchical' => true,
//            'menu_icon' => 'dashicons-format-quote',
//            )

//        );

        // Queries RFP Posts
        function query_post_type($query) {
            if(is_category() || is_tag()) {
                $post_type = get_query_var('post_type');
                if($post_type)
                    $post_type = $post_type;
                else
                    $post_type = array('post','portfolio_post');
                $query->set('post_type',$post_type);
                return $query;
            }
        }
        add_filter('pre_get_posts', 'query_post_type');

    }
    
// Add new Taxonomies
	
	function add_custom_taxonomies() {
	
	    // Case Studies
		
		register_taxonomy('case_study_categories', 'case_study', array(
			'hierarchical' => true,
			'labels' => array(
				'name' => _x( 'Category', 'taxonomy general name' ),
				'singular_name' => _x( 'Category', 'taxonomy singular name' ),
				'all_items' => __( 'All Categories' ),
				'edit_item' => __( 'Edit Category' ),
				'update_item' => __( 'Update Category' ),
				'add_new_item' => __( 'Add New Category' ),
				'new_item_name' => __( 'New Category Name' ),
				'menu_name' => __( 'Categories' ),
			),
			'rewrite' => array(
				'slug' => 'tags', 
				'with_front' => false, 
				'hierarchical' => true,
				'has_archive' => true
			),
		));
	
	}
	add_action( 'init', 'add_custom_taxonomies', 0 );
	
// Pull Custom Taxonomies

// get taxonomies terms links
function custom_taxonomies_terms_links(){
  // get post by post id
  $post = get_post( $post->ID );

  // get post type by post
  $post_type = $post->post_type;

  // get post type taxonomies
  $taxonomies = get_object_taxonomies( $post_type, 'objects' );

  $out = array();
  foreach ( $taxonomies as $taxonomy_slug => $taxonomy ){

    // get the terms related to post
    $terms = get_the_terms( $post->ID, $taxonomy_slug );

    if ( !empty( $terms ) ) {
      foreach ( $terms as $term ) {
        $out[] =
          '<span>'
        .    $term->name
        . "</span>";
      }
    }
  }

  return implode('', $out );
}



// Adds Modal Status to Admin Column

add_filter('manage_modal_posts_columns', 'hs_product_table_head');
function hs_modal_table_head( $columns ) {
    $columns['activate_modal']  = 'Modal Status';
    return $columns;

}
add_action( 'manage_modal_posts_custom_column', 'hs_modal_table_content', 10, 2 );

function hs_modal_table_content( $column_name, $post_id ) {
    if( $column_name == 'activate_modal' ) {
        $featured_product = get_post_meta( $post_id, 'activate_modal', true );
        if($featured_product == 1) {
            echo "Yes";
        }
    }
}