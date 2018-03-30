<?php /* 
Template Name: Main Blog
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
</head>

<body class="secondary blog <?php  global $post; $post_slug=$post->post_name; echo $post_slug;  ?> <?php if($post->post_parent) { $post_data = get_post($post->post_parent); echo $post_data->post_name; } ?>">

	<?php get_header(); ?>

	<div class="grid_12 marquee">
	    <div class="container">
	         
	         <div class="image" style="background-image: url(<?php the_field('marquee_image'); ?>)">
	             <div class="border">&nbsp;</div>
	             <div class="title">Explore AOPS</div>
	         </div>
	         <div class="grid_12 copy">
	             <div class="padding">
	             
	                <h1><?php the_field('the_subtitle', 7); ?></h1>
	             
	             </div>

	         </div>
	     
	     </div>
	</div>

	<?php include (TEMPLATEPATH . '/loop-articles.php' ); ?>
	
	<?php get_footer(); ?>

<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
    
</body>