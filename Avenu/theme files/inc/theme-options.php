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
   
   // Adds Theme Images Section
   
   $wp_customize->add_section( 'themesimages_section' , array(
       'title'       => __( 'Theme Images', 'themesimages' ),
       'priority'    => 30,
       'description' => 'Customize your website\'s theme images.',
   ) );
       
       // Adds Background #1
       
       $wp_customize->add_setting( 'themesimages_defaulttitlebg' );
       
       $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themesimages_backgroundone', array(
           'label'    => __( 'Default Title Background', 'themesimages' ),
           'section'  => 'themesimages_section',
           'settings' => 'themesimages_defaulttitlebg',
           'description' => 'This background appears in default title marquees.',
       ) ) );
       
   // Error Page
     
     $wp_customize->add_section( 'error_section' , array(
         'title'       => __( 'Error Page', 'errorsection' ),
         'priority'    => 30,
         'description' => 'Customize your website\'s 404 page.',
     ) );
         
         // Adds Error Text
         
         $wp_customize->add_setting( 'error_text' );
         
         $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'error_section', array(
             'label'    => __( 'Error Page Text', 'errorsection' ),
             'type'	  => 'textarea',
             'section'  => 'error_section',
             'settings' => 'error_text',
             'description' => 'This is the text that appears on the 404 page.',
         ) ) );
       
   
   
   
}
add_action( 'customize_register', 'mytheme_customize_register' );