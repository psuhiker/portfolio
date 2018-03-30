<?php /* 
Template Name: Leadership
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
</head>

<body class="secondary leadership <?php  global $post; $post_slug=$post->post_name; echo $post_slug;  ?> <?php if($post->post_parent) { $post_data = get_post($post->post_parent); echo $post_data->post_name; } ?>">

	<?php get_header(); ?>
		
	<?php get_template_part( 'loop-marquee' ); ?>
	
	<div class="grid_12 bios">
	    <div class="padding">
	        <div class="container">
	
	            <?php $counter = 1; ?>
            	<?php while(the_flexible_field("leadership_bios")): ?>
            	    <?php if(get_row_layout() == "add_leadership_bio"): ?>
            	    
            	    	<?php
            	    	    $post_object = get_sub_field('add_leadership_bio_bio');
            	    	    $type = 'get_post_type';
            	    	    if( $post_object ): 
            	    	        $post = $post_object;
            	    	    	setup_postdata( $post ); 
            	    	?>
            	    	
            	        	<div class="grid_3">
            	        	    <div class="padding">
            	        	        <div class="profile">
            	        	        	<a href="<?php the_permalink(); ?>">
	                	        	        <div class="overlay"><h3>Read Bio</h3></div>
	                	        	        	<img src="<?php the_field('bio_image') ?>" alt="<?php the_title(); ?>" />
	                	        	        <p class="name"><?php the_title(); ?></p>
	                	        	        <p class="title"><?php the_field('bio_title'); ?></p>
                	        	       </a>
                	        	    </div>
            	        	    </div>
            	        	</div>
            	        	
            	        	<?php if ($counter % 4 == 0) {echo '<div class="clear">&nbsp;</div>';} ?>
            	    	
            	    	<?php endif; ?>
            	    	<?php wp_reset_postdata(); ?>
            	    
            	    <?php endif; ?>
            	    
            	    <?php $counter ++; ?>
            	<?php endwhile; ?>
	
	        </div>
	    </div>
	</div>
	
	<?php get_footer(); ?>

<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
    
</body>
