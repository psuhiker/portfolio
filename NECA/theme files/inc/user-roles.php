<?php 

// Changes Wordpress User Role Names

function change_role_name() {
    global $wp_roles;

    if ( ! isset( $wp_roles ) )
        $wp_roles = new WP_Roles();

    // Changed Role Names
    
    $wp_roles->roles['subscriber']['name'] = 'Guest Registrant';
    $wp_roles->role_names['subscriber'] = 'Guest Registrant'; 
    
    $wp_roles->roles['contributor']['name'] = 'Member';
    $wp_roles->role_names['contributor'] = 'Member'; 
    
    $wp_roles->roles['editor']['name'] = 'Board / Committee Member';
    $wp_roles->role_names['editor'] = 'Board / Committee Member'; 
            
}

add_action('init', 'change_role_name');

// Removes Wordpress Roles

if( get_role('author') ){
      remove_role( 'author' );
}