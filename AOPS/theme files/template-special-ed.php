<?php /* 
Template Name: Special Education Schools
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
</head>

<body class="secondary school <?php  global $post; $post_slug=$post->post_name; echo $post_slug;  ?> <?php if($post->post_parent) { $post_data = get_post($post->post_parent); echo $post_data->post_name; } ?>">

	<?php get_header(); ?>
		
	<?php get_template_part( 'loop-marquee' ); ?>
	
	<!-- Start of School Listing -->
	
	<div class="clear">&nbsp;</div>
	
	<?php query_posts(array( 'showposts', 'posts_per_page'=> '-1', 'post_type'=> 'wpsl_stores', 'school'=> 'special-education' )); while (have_posts()) { the_post(); ?>
	
	    <div id="myModal<?php the_id(); ?>" class="reveal-modal school modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog"><!-- class="dropdowns"-->
	        
	        <div class="grid_12">
	    
	            <?php include (TEMPLATEPATH . '/include-school.php' ); ?>
	            
	         </div>
	        
	    </div>
	
	<?php } ?><?php wp_reset_query(); ?>
	
	<!-- End of School Listing -->
	
	<?php get_footer(); ?>

<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
    
</body>