<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js <?php if ( is_page_template('people-bio.php') ) { ?>people-bio<?php } ?>" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --><head id="<?php echo get_option('home'); ?>" profile="http://gmpg.org/xfn/11">

    <meta charset="<?php bloginfo('charset'); ?>">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- Meta Data -->
    <?php get_post_type( $post ) ?>
    <?php if ( is_front_page() ) { ?>
    	<!-- Home Page -->
        <title><?php if(get_field('seo_title_tag')) { echo get_field('seo_title_tag'); } else { echo get_field('theme_title', 5665 ); echo " | "; echo get_field('theme_tagline', 5665 );  } ?></title>
        <meta name="description" content="<?php if(get_field('seo_description')) { echo get_field('seo_description'); } else { echo get_field('theme_tagline', 5665 ); } ?>">
        <meta name="keywords" content="<?php the_field('seo_keywords'); ?>">
    <?php } else if ( is_home() ) { ?>
    	<!-- Blog Main Page -->
        <title><?php if(get_field('seo_title_tag', 7 )) { echo get_field('seo_title_tag', 7 ); } else { echo get_field('theme_title', 5665 ); } ?></title>
        <meta name="description" content="<?php if(get_field('seo_description')) { echo get_field('seo_description'); } else { echo get_field('theme_tagline', 5665 ); } ?>">
        <meta name="keywords" content="<?php the_field('seo_keywords'); ?>">
    <!-- Job Postings -->
    <?php get_post_type( $post ) ?>
    <?php } elseif ( 'job' == get_post_type() ) { ?>
        <title><?php the_title(); ?></title>
        <meta name="description" content="<?php if(get_field('seo_description')) { echo get_field('seo_description'); } else { echo get_field('theme_tagline', 5665 ); } ?>">
        <meta name="keywords" content="<?php the_field('seo_keywords'); ?>">
        <!-- Explore AOPS Page -->
    <?php } else if (is_post_type_archive( 'article' )) { ?>
        <title><?php if(get_field('seo_title_tag', 7 )) { echo get_field('seo_title_tag', 7 ); } else { echo get_field('theme_title', 5665 ); } ?> | <?php single_cat_title() ?></title>
        <meta name="description" content="What is Archdiocese of Philadelphia Schools, and what does it mean to be part of our Catholic education? Explore blog posts, photos, and fun facts about real AOPS students, parents, teachers, and schools!">
        <meta name="keywords" content="<?php single_cat_title() ?>, <?php echo get_field('theme_title', 5665 ); ?>">
    <?php } else if ( is_archive() ) { ?>
    	<!-- Blog Archive Page -->
        <title><?php if(get_field('seo_title_tag', 7 )) { echo get_field('seo_title_tag', 7 ); } else { echo get_field('theme_title', 5665 ); } ?> | <?php single_cat_title() ?></title>
        <meta name="description" content="<?php if(get_field('seo_description')) { echo get_field('seo_description'); } else { echo get_field('theme_tagline', 5665 ); } ?>">
        <meta name="keywords" content="<?php single_cat_title() ?>, <?php echo get_field('theme_title', 5665 ); ?>">
    <?php } else if ( is_single() ) { ?>
    	<!-- Blog Posts -->
        <title><?php if(get_field('seo_title_tag' )) { echo get_field('seo_title_tag' ); } else { echo get_field('theme_title', 5665 ); } ?></title>
        <meta name="description" content="<?php if(get_field('seo_description')) { echo get_field('seo_description'); } else { setup_postdata( $post ); $excerpt = get_the_excerpt(); echo get_the_excerpt(); } ?>">
        <meta name="keywords" content="<?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo $tag->name . ', '; } }; ?>">
    <?php } else { ?>
    	<!-- All Other Items -- Uses SEO Content in CMS -->
        <title><?php if(get_field('seo_title_tag')) { echo get_field('seo_title_tag'); } else { echo get_field('the_subtitle' ); echo " | "; echo get_field('theme_title', 5665 ); } ?></title>
        <meta name="description" content="<?php if(get_field('seo_description')) { echo get_field('seo_description'); } else { echo get_field('theme_tagline', 5665 ); } ?>">
        <meta name="keywords" content="<?php the_field('seo_keywords'); ?>">
    <?php } ?>
    
    <!-- Facebook Thumbnail -->
    <?php
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
        $url = $thumb['0'];
        $social_share_title = get_field('social_share_title');
        $social_share_image = get_field('social_share_image');
    ?>
    <?php if (!empty($social_share_title) && $post->post_type == 'article') { ?>
        <meta property="og:title" content="<?php echo $social_share_title; ?>"/>
        <meta name="twitter:title" content="<?php echo $social_share_title; ?>">
        <meta itemprop="name" content="<?php echo $social_share_title; ?>">
    <?php } ?>
    <?php if (!empty($social_share_image) && $post->post_type == 'article') { ?>
        <meta property="og:image" content="<?php echo $social_share_image['href']; ?>"/>
        <meta name="twitter:title" content="<?php echo $social_share_image['href']; ?>">
        <meta itemprop="name" content="<?php echo $social_share_image['href']; ?>">
    <?php } else { ?>
        <meta property="og:image" content="<?=$url?>"/>
    <?php } ?>
    
    <!-- iPhone & iPad Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <!--<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon.png"/>-->
    
    <!-- // favicon // -->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	
	<!-- Main Style Sheet -->
    <link href="<?php bloginfo('template_directory'); ?>/css/normalize.css" type="text/css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/grid.css" type="text/css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/animate.css" type="text/css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/js/comparison/comparison.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/jquery.fancybox.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" media="all">
    
    <!-- JavaScript -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>
    
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
      <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <![endif]-->
    
    <?php if ( is_user_logged_in() ) { ?>
    	<style><!--
			#header { top: 28px; }
		--></style>
    <?php } ?>
    
	<?php wp_head(); ?>
    