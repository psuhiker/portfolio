<?php get_post_type( $post ) ?>
<?php if(! ( is_page_template( array('template-minimalist.php') ) ) ) { ?>
	<div class="grid_12 marquee">
	
	    <?php if(get_field('marquee_image' )) { ?>

	    	<?php if ( is_page_template( array('template-affordability.php', 'template-default-marquee.php', 'template-elementary.php', 'template-early-childhood.php', 'template-secondary.php', 'template-special-ed.php') ) ) { ?>
	    	<div class="marquee-height">
	    	<div class="blue-bg">
	    	<?php } ?>
	        <div class="image" style="background-image: url(<?php the_field('marquee_image'); ?>)">
	        
	        <?php if(get_field('marquee_caption' )) { ?>
	            
	            <div class="caption">
	                <?php the_field('marquee_caption'); ?>
	            </div>
	            
	        <?php } ?>
	        
	    <?php } else { ?>
	    
	        <div class="image">
	    
	    <?php } ?>
	        
		        <div class="title">
		        
		            <?php if ($post->post_type == "tribe_events") { ?>
		            
		                <?php printf( __( '%s', 'rams' ), '' . single_cat_title( '', false ) . '' ); ?>
		                
		            <?php } elseif ( is_post_type_archive('tribe_events') ) { ?>
		            
		                <?php printf( __( '%s', 'rams' ), '' . single_cat_title( '', false ) . '' ); ?>
		            
		            <?php } else { ?>
		        
		                <?php the_field('the_subtitle'); ?>
		        		
		            <?php } ?>
		            
		        </div>
	    	</div>
	    <?php if ( is_page_template( array('template-affordability.php', 'template-default-marquee.php', 'template-elementary.php', 'template-early-childhood.php', 'template-secondary.php', 'template-special-ed.php') ) ) { ?>
		        </div>
		        </div>
		    <?php } ?>
	    <div class="container">
	    
	        <?php if(get_field('marquee_image' )) { ?>
	        
	            <div class="grid_5 copy marquee-copy">
	        
	        <?php } else { ?>
	        
	            <div class="grid_7 copy">
	        
	        <?php } ?>
	            
	            <div class="padding">
	                <div class="copy-slider">
		                <?php if ( is_page_template( array('template-curriculum.php', 'template-tuition.php') ) ) { ?>
		                 
		                    <h1><?php the_field('the_subtitle'); ?></h1>
		                    
		                <?php } else if ( is_front_page() ) { ?>
		                
		                    <h1><?php the_field('the_subtitle'); ?></h1>
		                    
		                    <div class="content">
		                        <?php the_content(); ?>
		                    </div>
		                    
		                <?php } elseif ( is_page_template( array('template-affordability.php', 'template-leadership.php', 'template-default-marquee.php', 'template-elementary.php', 'template-early-childhood.php', 'template-secondary.php', 'template-special-ed.php') ) ) { ?>
		                
		                    <h1 class="subtitle"><?php the_field('the_subtitle'); ?></h1>
		                     
		                <?php } elseif ($post->post_type == "tribe_events") { ?>
		                 
		                    <h1><?php printf( __( '%s', 'rams' ), '' . single_cat_title( '', false ) . '' ); ?></h1>
		                        
		                <?php } elseif ( is_post_type_archive('tribe_events') ) { ?>
		                 
		                    <h1><?php printf( __( '%s', 'rams' ), '' . single_cat_title( '', false ) . '' ); ?></h1>
		                     
		                <?php } else { ?>
		                
		                    <h1><?php the_field('the_subtitle'); ?></h1>
		                 
		                <?php } ?>
	            	</div> 
	            </div>
	        	</div>
	     
	    	</div>
		</div>
	<?php if ( is_page_template( array('template-affordability.php', 'template-leadership.php', 'template-default-marquee.php', 'template-elementary.php', 'template-early-childhood.php', 'template-secondary.php', 'template-special-ed.php') ) ) { ?>
	<div class="grid_12 marquee-content">
		<div class="container">
			<div class="grid_8 content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
<?php } ?>
<?php } ?>