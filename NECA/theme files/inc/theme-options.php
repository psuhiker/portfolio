<?php 

// Adds CSS to Customizer Page

function my_customizer_styles() { ?>
    <style>
    
       li#accordion-panel-widgets {
       	display: none !important;
       }
            
    </style>
    <?php

}
add_action( 'customize_controls_print_styles', 'my_customizer_styles', 999 );

// Removes Static Front Page

add_action('customize_register', 'themename_customize_register');
function themename_customize_register($wp_customize) {
  $wp_customize->remove_section( 'static_front_page' );
}


function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here
   
       // Adds Theme Logo to 'Site Identity'
   
       $wp_customize->add_setting( 'themesimages_logo' );
       
       $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themesimages_logo', array(
           'label'    => __( 'Logo', 'themesimages' ),
           'section'  => 'title_tagline',
           'settings' => 'themesimages_logo',
       ) ) );
       
   // Adds Association Information Section
   
   $wp_customize->add_section( 'siteinformation_section' , array(
       'title'       => __( 'Custom Content', 'siteinformation' ),
       'priority'    => 30,
       'description' => 'This section is what controls all site-wide content or association details.',
   ) );
   
   		// Adds Association Address
   		
   		$wp_customize->add_setting( 'siteinformation_address' );
   		
   		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'siteinformation_address', array(
   		    'label'    => __( 'Address', 'siteinformation' ),
   		    'section'  => 'siteinformation_section',
   		    'settings' => 'siteinformation_address',
   		) ) );
   		
   		// Adds Membership Inactive Text
   		
   		$wp_customize->add_setting( 'siteinformation_membership_inactive_text' );
   		
   		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'siteinformation_membership_inactive_text', array(
   		    'label'    => __( 'Inactive Membership Message', 'siteinformation' ),
   		    'type'	  => 'textarea',
   		    'section'  => 'siteinformation_section',
   		    'settings' => 'siteinformation_membership_inactive_text',
   		    'description' => 'This message displays if a member who has a lapsed membership logs into the website.',
   		) ) );
   		
   		// Adds Error Title
   		
   		$wp_customize->add_setting( 'siteinformation_error_title' );
   		
   		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'siteinformation_error_title', array(
   		    'label'    => __( 'Error Page Title', 'siteinformation' ),
   		    'section'  => 'siteinformation_section',
   		    'settings' => 'siteinformation_error_title',
   		    'description' => 'This is the title that appears on the 404 page.',
   		) ) );
   		
   		// Adds Error Text
   		
   		$wp_customize->add_setting( 'siteinformation_error_text' );
   		
   		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'siteinformation_error_text', array(
   		    'label'    => __( 'Error Page Text', 'siteinformation' ),
   		    'type'	  => 'textarea',
   		    'section'  => 'siteinformation_section',
   		    'settings' => 'siteinformation_error_text',
   		    'description' => 'This is the text that appears on the 404 page.',
   		) ) );
   
       
   // Error Page
     
     $wp_customize->add_section( 'error_section' , array(
         'title'       => __( 'Error Page', 'errorsection' ),
         'priority'    => 30,
         'description' => 'Customize your website\'s 404 page.',
     ) );
         
         // Adds Error Title
         
         $wp_customize->add_setting( 'error_title' );
         
         $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'error_title', array(
             'label'    => __( 'Error Page Title', 'errorsection' ),
             'section'  => 'error_section',
             'settings' => 'error_title',
             'description' => 'This is the title that appears on the 404 page.',
         ) ) );
         
         // Adds Error Text
         
         $wp_customize->add_setting( 'error_text' );
         
         $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'error_text', array(
             'label'    => __( 'Error Page Text', 'errorsection' ),
             'type'	  => 'textarea',
             'section'  => 'error_section',
             'settings' => 'error_text',
             'description' => 'This is the text that appears on the 404 page.',
         ) ) );
       
}
add_action( 'customize_register', 'mytheme_customize_register' );