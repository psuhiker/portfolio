<?php /* 
Template Name: Employment
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
</head>

<body class="secondary leadership <?php  global $post; $post_slug=$post->post_name; echo $post_slug;  ?> <?php if($post->post_parent) { $post_data = get_post($post->post_parent); echo $post_data->post_name; } ?>">

	<?php get_header(); ?>
	
	<?php include (TEMPLATEPATH . '/search-jobs-form.php' ); ?>
	
	<div class="grid_12">
	    <div class="container">
	        <div class="padding">
	        
	            <h1><?php printf( __( '%s', 'rams' ), '' . single_cat_title( '', false ) . '' ); ?></h1>
	        
	            <table width="100%">
	        
    	            <?php if (have_posts()) : ?>
    	            <?php while (have_posts()) : the_post(); ?>
    	            
    	                <?php $id = get_the_ID(); ?>
    	                <tr>
    	                    <td width="25%">
    	                        <ul class="job details">
    	                            
    	                            <li><?php the_field('employment_position_type'); ?></li>
    	                            
    	                            <li><?php the_field('employment_position_length'); ?></li>
    	                        </ul>
    	                    </td>
    	                    <td>
    	                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
    	                            <?php
    	                                $post_object = get_field('employment_school');
    	                                $type = get_post_type;
    	                                if( $post_object ): 
    	                                    $post = $post_object;
    	                                	setup_postdata( $post ); 
    	                            ?>
    	                                at <?php the_title(); ?>
    	                            <?php endif; ?>
    	                            <?php wp_reset_postdata(); ?>
    	                        </a>
    	                    </td>
    	                </tr>
    	            
    	            <?php endwhile; ?>
    	            <?php else : ?>
    	            
    	            	<h1 class="center">Not Found</h1>
    	             	<p class="center">Sorry, but this page cannot be found.</p>
    	            
    	            <?php endif; ?>
	            
	            </table>
	
	        </div>
	    </div>
	</div>
	
	<?php get_footer(); ?>

<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
    
</body>