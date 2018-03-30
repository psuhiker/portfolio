<?php /* 
Template Name: Events
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
</head>

<body class="secondary leadership <?php  global $post; $post_slug=$post->post_name; echo $post_slug;  ?> <?php if($post->post_parent) { $post_data = get_post($post->post_parent); echo $post_data->post_name; } ?>">

	<?php get_header(); ?>
		
	<?php get_template_part( 'loop-events' ); ?>
	
	<?php get_footer(); ?>

<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
    
</body>