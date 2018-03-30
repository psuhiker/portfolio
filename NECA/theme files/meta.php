<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --><head id="<?php echo get_option('home'); ?>" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>

	<!-- Meta Data -->
	<?php if ( is_home() ) { ?>
		<!-- Home Page -->
	    <title><?php if(get_field('seo_title_tag' )) { echo get_field('seo_title_tag' ); } else { bloginfo('name'); } ?></title>
	    <meta name="description" content="<?php if(get_field('seo_description')) { echo get_field('seo_description'); } else { bloginfo('description'); } ?>">
	    <meta name="keywords" content="<?php the_field('seo_keywords'); ?>">
	<?php } else if ( is_archive() ) { ?>
		<!-- Blog Archive Page -->
	    <title><?php if(get_field('seo_title_tag' )) { echo get_field('seo_title_tag' ); } else { bloginfo('name'); } ?> | <?php single_cat_title() ?></title>
	    <meta name="description" content="<?php if(get_field('seo_description')) { echo get_field('seo_description'); } else { bloginfo('description'); } ?>">
	    <meta name="keywords" content="<?php single_cat_title() ?>, <?php bloginfo('name'); ?>">
	<?php } else if ( is_single() ) { ?>
		<!-- Blog Posts -->
	    <title><?php if(get_field('seo_title_tag')) { echo get_field('seo_title_tag'); } else { if( get_field('public_title') ) { the_field('public_title'); } else { the_title(); } } ?></title>
	    <meta name="description" content="<?php if(get_field('seo_description')) { echo get_field('seo_description'); } else { setup_postdata( $post ); $excerpt = get_the_excerpt(); 
	    // echo get_the_excerpt(); 
	    } ?>">
	    <meta name="keywords" content="<?php if(get_field('seo_keywords')) { echo get_field('seo_keywords'); } else { $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo $tag->name . ', '; } }; } ?>">
	<?php } else { ?>
		<!-- All Other Items -- Uses SEO Content in CMS -->
	    <title><?php if(get_field('seo_title_tag' )) { echo get_field('seo_title_tag' ); } else { bloginfo('name'); } ?></title>
	    <meta name="description" content="<?php if(get_field('seo_description')) { echo get_field('seo_description'); } else { bloginfo('description'); } ?>">
	    <meta name="keywords" content="<?php the_field('seo_keywords'); ?>">
	<?php } ?>
    
    <!-- iPhone & iPad Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        
    <?php wp_head(); ?>
	
	<!-- Main Style Sheets -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/jquery-montage/style.css" />
    <link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/datatables.min.css" type="text/css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" rel="stylesheet">
    	
    <!-- Framework JavaScript -->
    <!--<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
    
    <!-- Facebook -->
    <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
	
	<!-- Logged In / Out Styles -->
	<?php if ( is_user_logged_in() ) { ?>
		<style><!--
			.if-logged-in {
				display: block !important;
			}
			.if-logged-out {
				display: none !important;
			}
		--></style>
	<?php } else { ?>
		<style><!--
			.if-logged-in {
				display: none !important;
			}
			.if-logged-out {
				display: block !important;
			}
		--></style>
	<?php } ?>
    
</head>