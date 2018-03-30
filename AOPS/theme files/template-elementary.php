<?php /* 
Template Name: Elementary Schools
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
</head>

<body class="secondary school <?php  global $post; $post_slug=$post->post_name; echo $post_slug;  ?> <?php if($post->post_parent) { $post_data = get_post($post->post_parent); echo $post_data->post_name; } ?>">

	<?php get_header(); ?>
		
	<?php get_template_part( 'loop-marquee' ); ?>
	
	<!-- Start of School Listing -->
	
	<div class="clear">&nbsp;</div>
	
	<div class="container school list">
	    <ul class="accordion" data-accordion="">
	        <li class="accordion-navigation">
	            <a href="#panel1a" aria-expanded="false">All Elementary Schools</a>
	            <div id="panel1a" class="content">
	                <ol>
	                    <?php query_posts(array( 'showposts', 'posts_per_page'=> '-1', 'post_type'=> 'wpsl_stores', 'school'=> 'elementary-school', 'orderby'=> 'title', 'order'=> 'asc' )); while (have_posts()) { the_post(); ?>
	                        <li><a class="wpsl-header" href="<?php the_permalink(); ?>" data-reveal-id="myModal<?php the_id(); ?>" data-reveal-ajax="true"><?php the_title(); ?></a></li>
	                    <?php } ?><?php wp_reset_query(); ?>
	                </ol>
	            </div>
	        </li>
	    </ul>
	</div>
	
	<?php query_posts(array( 'showposts', 'posts_per_page'=> '-1', 'post_type'=> 'wpsl_stores', 'school'=> 'elementary-school' )); while (have_posts()) { the_post(); ?>
	    <div id="myModal<?php the_id(); ?>" class="reveal-modal school modal" data-reveal></div>
	<?php } ?><?php wp_reset_query(); ?>
	
	<!-- End of School Listing -->
	
	<?php get_footer(); ?>

<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
    
</body>