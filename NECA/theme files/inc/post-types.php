<?php 

// Adds Custom Post Types

add_action( 'init', 'create_post_type' );
    function create_post_type() {
        
    // Adds for Events
    	
    register_post_type( 'events',
        array(
            'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Events' ),
                'add_new' => __( '+ Add New Event' ),
                'add_new_item' => __( 'Add New Event' ),
                'edit_item' => __( 'Edit Event' ),
                'new_item' => __( 'New Event' ),
                'view_item' => __( 'View Event' ),
                'search_items' => __( 'Search Events' ),
                'not_found' => __( 'No Events Found' ),
                'not_found_in_trash' => __( 'No Events Found' ),
                'all_items' => __( 'All Events' ),
                ),
            'public' => true,
    		'comments' => false,
            'has_archive' => true,
    		'rewrite' => array('slug' => 'events', 'with_front' => false),
    		'supports' => array('title', 'editor', 'thumbnail'),
    		'menu_icon' => 'dashicons-calendar-alt',
    		'menu_position' => 20,
    		'show_in_menu' => false,
            )
        );
        
    register_post_type( 'officers',
        array(
            'labels' => array(
                'name' => __( 'Officers and Board Members' ),
                'singular_name' => __( 'Officers and Board Members' ),
                'add_new' => __( '+ Add New' ),
                'add_new_item' => __( 'Add New' ),
                'edit_item' => __( 'Edit Person' ),
                'new_item' => __( 'New Person' ),
                'view_item' => __( 'View Person' ),
                'search_items' => __( 'Search Persons' ),
                'not_found' => __( 'No Persons Found' ),
                'not_found_in_trash' => __( 'No Persons Found' ),
                'all_items' => __( 'All Officers and Board Members' ),
                ),
            'public' => true,
    		'comments' => false,
            'has_archive' => false,
    		'rewrite' => array('slug' => 'board', 'with_front' => false),
    		'supports' => array('title', 'editor', 'page-attributes'),
    		'menu_icon' => 'dashicons-id-alt',
    		'menu_position' => 20,
            )
        );
        
        // Updates Title Field
        
        function change_default_title( $title ){
            $screen = get_current_screen();
        
            if  ( 'officers' == $screen->post_type ) {
                $title = 'Name';
            }
        
            return $title;
        }
        
        add_filter( 'enter_title_here', 'change_default_title' );
        
    register_post_type( 'member_announcements',
        array(
            'labels' => array(
                'name' => __( 'Member Announcements' ),
                'singular_name' => __( 'Announcements' ),
                'add_new' => __( '+ Add Announcement' ),
                'add_new_item' => __( 'Add Announcement' ),
                'edit_item' => __( 'Edit Announcement' ),
                'new_item' => __( 'New Announcement' ),
                'view_item' => __( 'View Announcement' ),
                'search_items' => __( 'Search Announcements' ),
                'not_found' => __( 'No Announcements Found' ),
                'not_found_in_trash' => __( 'No Announcements Found' ),
                'all_items' => __( 'All Announcements' ),
                ),
            'public' => true,
    		'comments' => false,
            'has_archive' => true,
    		'rewrite' => array('slug' => 'announcements', 'with_front' => false),
    		'supports' => array('title', 'editor'),
    		'menu_icon' => 'dashicons-testimonial',
    		'menu_position' => 20,
            )
        );
        
        
    register_post_type( 'pending',
        array(
            'labels' => array(
                'name' => __( 'Pending Members' ),
                'edit_item' => __( 'Pending Member' ),
                ),
            'public' => true,
    		'comments' => false,
            'has_archive' => false,
    		'rewrite' => array('slug' => 'pending', 'with_front' => false),
    		'menu_icon' => 'dashicons-money',
    		'menu_position' => 40,
            )
        );
        
    register_post_type( 'eventRegistrants',
        array(
            'labels' => array(
                'name' => __( 'Event Registrants' ),
                'edit_item' => __( 'Registrant' ),
                ),
            'public' => true,
    		'comments' => false,
            'has_archive' => true,
    		'rewrite' => array('slug' => 'registrants', 'with_front' => false),
    		'menu_icon' => 'dashicons-media-spreadsheet',
    		'menu_position' => 40,
            )
        );
    
}


// Adds Dates to Events in Admin

function add_acf_columns_events ( $columns ) {
  return array_merge ( $columns, array ( 
    'event_date'   => __ ( 'Date of Event' ) 
  ) );
  unset($columns['date']);
}
add_filter ( 'manage_events_posts_columns', 'add_acf_columns_events' );

function events_custom_column ( $column, $post_id ) {
   switch ( $column ) {
     case 'event_date':
       //echo get_post_meta ( $post_id, 'event_date', true );
       //echo get_field( 'event_date', $post_id );
       $date = get_field('event_date', false, false); $date = new DateTime($date);
       echo $date->format('F j, Y');
       break;
   }
 }
 add_action ( 'manage_events_posts_custom_column', 'events_custom_column', 10, 2 );
 
 
 // Adds Member Status to Users in Admin
 
 function add_acf_columns_users ( $columns ) {
   return array_merge ( $columns, array ( 
     'member_status'   => __ ( 'Member Status' ) 
   ) );
   unset($columns['posts']);
 }
 add_filter ( 'manage_users_columns', 'add_acf_columns_users' );
 
 function users_custom_column ( $column, $user_id ) {
    switch ( $column ) {
      case 'member_status':
        echo get_field( 'member_status', $user_id );
        break;
    }
    return $val;
  }
  add_action ( 'manage_users_custom_column', 'users_custom_column', 10, 2 );
 
 
 
 
 //function events_column_register_sortable( $columns )
 //{
 //	$columns['event_date'] = 'event_date';
 //	return $columns;
 //}
 
 //add_filter("manage_events_sortable_columns", "events_column_register_sortable" );