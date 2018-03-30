<section class="banner">
	
	<div class="content col-md-6 no-padding--horizontal">
		
		<div class="xxl-padding--vertical">
			
			<h1 class="headline lg-margin--right"><?php the_sub_field('banner_headline'); ?></h1>
			
			<div class="copy lg-margin--right">
				
				<?php the_sub_field('banner_copy'); ?>
				
				<?php if (get_sub_field('banner_include_cta')) { ?>
				
				    <?php 
				         $post_object = get_sub_field('banner_cta');
				         if( $post_object ): 
				             $post = $post_object;
				             setup_postdata( $post );
				             $postUrl = get_the_permalink($post->ID);
				             wp_reset_postdata();
				         endif; 
				     ?>
				
				    <a href="<?php echo $postUrl; ?>" class="link--bars">
				     	<span><?php the_sub_field('banner_cta_text'); ?></span>
				    </a>
				    
				 <?php } ?>
				 
			</div>
			
		</div>
		
	</div>
	
	<div class="image col-md-6 no-padding--horizontal">
		<img src="<?php the_sub_field('banner_supporting_image'); ?>">
	</div>
	
	<div class="clearfix"></div>
	
	<?php if( have_rows('banner_supporting_content') ): ?>
	
	    <?php while ( have_rows('banner_supporting_content') ) : the_row(); ?>
	 	
	 	    <div class="col-md-6 supportingContent xxl-padding--vertical">
	 	    	
	 	    	<?php if (get_sub_field('banner_supporting_content_headline')) { ?>
		 	    	<h2 class="subheadline xl-margin--bottom">
		 	    	    <?php the_sub_field('banner_supporting_content_headline'); ?>
		 	    	</h2>
		 	    <?php } ?>
	 	    	
	 	    	<?php if (get_sub_field('banner_supporting_content_copy')) { ?>
	 	    	    <?php the_sub_field('banner_supporting_content_copy'); ?>
	 	    	<?php } ?>
	 	    	
	 	    	<?php if (get_sub_field('banner_supporting_content_cta')) { ?>
	 	    	
	 	    	    <?php 
	 	    	        $post_object = get_sub_field('banner_supporting_content_cta');
	 	    	        if( $post_object ): 
	 	    	            $post = $post_object;
	 	    	            setup_postdata( $post );
	 	    	            $postUrl = get_the_permalink($post->ID);
	 	    	            wp_reset_postdata();
	 	    	        endif; 
	 	    	    ?>
	 	    	
	 	    	    <a href="<?php echo $postUrl; ?>" class="link--bars">
	 	    	    	<span><?php the_sub_field('banner_supporting_content_cta_text'); ?></span>
	 	    	    </a>
	 	    
	 	        <?php } ?>
	 	    	
	 	    </div>
	
	    <?php endwhile; ?>
	    
	    <div class="clearfix"></div>
	
	<?php else : endif; ?>
	
</section>