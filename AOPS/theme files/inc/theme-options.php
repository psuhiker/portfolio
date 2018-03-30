<?php 
	function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here

		$wp_customize->add_setting( 'logo' );
       
       $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
           'label'    => __( 'Logo', 'themesimages' ),
           'section'  => 'title_tagline',
           'settings' => 'logo',
       ) ) );
   
       // Adds Phone Number to 'Site Identity'
   	
       $wp_customize->add_setting( 'phone_number' );
       
       $wp_customize->add_control( new  WP_Customize_Control( $wp_customize, 'phone_number', array(
           'label'    => __( 'Phone Number', 'phone_number' ),
           'section'  => 'title_tagline',
           'settings' => 'phone_number',
       ) ) );

       // Adds Company Address to 'Site Identity'
   
       $wp_customize->add_setting( 'address' );
       
       $wp_customize->add_control( new  WP_Customize_Control( $wp_customize, 'address', array(
           'label'    => __( 'Address', 'company_address' ),
           'section'  => 'title_tagline',
           'settings' => 'address',
           'type'     => 'textarea'
       ) ) );
   
   // Adds Theme Images Section
   
   $wp_customize->add_section( 'socialmedia_section' , array(
       'title'       => __( 'Social Media', 'socialmedia' ),
       'priority'    => 30,
       'description' => 'Customize your website\'s Social Media links.',
   ) );
       
       // Adds Facebook Link
       
       $wp_customize->add_setting( 'socialmedia_facebook' );
       
       $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'socialmedia_facebook', array(
           'label'    => __( 'Facebook', 'socialmedia' ),
           'section'  => 'socialmedia_section',
           'settings' => 'socialmedia_facebook',
       ) ) );
       
       // Adds Twitter Link
       
       $wp_customize->add_setting( 'socialmedia_twitter' );
       
       $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'socialmedia_twitter', array(
           'label'    => __( 'Twitter', 'socialmedia' ),
           'section'  => 'socialmedia_section',
           'settings' => 'socialmedia_twitter',
       ) ) );
       
       // Adds Instagram Link
       
       $wp_customize->add_setting( 'socialmedia_instagram' );
       
       $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'socialmedia_instagram', array(
           'label'    => __( 'Instagram', 'socialmedia' ),
           'section'  => 'socialmedia_section',
           'settings' => 'socialmedia_instagram',
       ) ) );
       
       // Adds RSS Link
       
       $wp_customize->add_setting( 'socialmedia_rss' );
       
       $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'socialmedia_rss', array(
           'label'    => __( 'RSS', 'socialmedia' ),
           'section'  => 'socialmedia_section',
           'settings' => 'socialmedia_rss',
       ) ) );
   
}
add_action( 'customize_register', 'mytheme_customize_register' );
 ?>