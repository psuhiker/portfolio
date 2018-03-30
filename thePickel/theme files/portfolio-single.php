<body class="secondary portfolio">
	
	<section id="portfolio-item">
	
    	<div class="title" style="background-image: url(<?php the_field('marquee_background'); ?>);">
			
			<div class="vertical-align">
				<div class="content">
					
					<div class="center-align">
						<h1 class="headline"><?php the_title(); ?></h1>
					</div>
				
				</div>
			</div>
			
		</div>
    	
    	<?php if( have_rows('sections') ): while ( have_rows('sections') ) : the_row(); ?>
    	
    	    <?php if( get_row_layout() == 'copy' ): ?>
    	    
    	        <?php if( get_sub_field('content_layout') == 'intro' ) { ?>
    	        
    	            <div class="intro fade bg--green color--white text-shadow--heavy">
    	                <div class="container">
						
							<div class="row">
								<div class="col m10 offset-m1 xl8 offset-xl2">
									
									<?php the_sub_field('copy'); ?>
									
								</div>
    	                    </div>
    	                
    	                </div>
    	            </div>
    	        
    	        <?php } elseif( get_sub_field('content_layout') == 'one' ) { ?>
    	        
    	            <div class="copy fade">
    	                <div class="container">
						
							<div class="row">
								<div class="col m10 offset-m1">
									
									<?php the_sub_field('copy'); ?>
									
	    	                    </div>
							</div>
    	                
    	                </div>
    	            </div>
    	        
    	        <?php } elseif( get_sub_field('content_layout') == 'two' ) { ?>
    	        
    	            <div class="copy fade bg--blue color--white text-shadow">
    	                <div class="container">
    	                
							<div class="row">
							
	    	                    <div class="col m6">
									<div class="vertical-align">
										<div class="content">
											<?php the_sub_field('copy_left'); ?>
										</div>
									</div>
	    	                    </div>
								
	    	                    <div class="col m6">
	    	                    	<div class="vertical-align">
	    	                    		<div class="content">
											<?php the_sub_field('copy_right'); ?>
	    	                        	</div>
	    	                        </div>
	    	                    </div>
    	                    
							</div>
    	                
    	                </div>
    	            </div>
    	        
    	        <?php } ?>
    	    
    	    <?php elseif( get_row_layout() == 'images' ): ?>
    	        
    	        <div class="images row no-margin--bottom">
    	        
    	            <?php $count = count( get_sub_field('image') ); ?>
    	        
    	            <?php if( have_rows('image') ): while ( have_rows('image') ) : the_row(); ?>
    	                
    	                <?php if ( $count == 1 ) { ?>
    	                
    	                    <div class="image--full fade<?php if( get_sub_field('make_image_parallax') ) { ?> parallax<?php } ?>">
								
								<?php if( get_sub_field('make_image_parallax') ) { ?>
									<div class="image" style="background-image: url(<?php the_sub_field('image'); ?>);" data-bottom="color: #000;" data-center="color: #000;"></div>
								<?php } ?>
								
								<div class="padding">
    	                        
									<img src="<?php the_sub_field('image'); ?>" alt="" />
									<div class="caption">
									    <?php if( get_sub_field('caption') ) { ?>
									        <span><?php the_sub_field('caption'); ?></span>
									    <?php } ?>
									</div>
								
								</div>
								
    	                    </div>
    	                
    	                <?php } elseif ( $count == 2 ) { ?>
						
							<div class="image--bordered fade">
    	                
	    	                    <div class="col s12 m6 image" style="background-image: url(<?php the_sub_field('image'); ?>);">
	    	                        <div class="caption">
	    	                            <?php if( get_sub_field('caption') ) { ?>
	    	                                <span><?php the_sub_field('caption'); ?></span>
	    	                            <?php } ?>
	    	                        </div>
	    	                    </div>
							
							</div>
    	                
    	                <?php } elseif ( $count == 3 ) { ?>
						
							<div class="image--triplebordered fade">
								<div class="col s12 m4 image" style="background-image: url(<?php the_sub_field('image'); ?>);">
								    <div class="caption">
								        <?php if( get_sub_field('caption') ) { ?>
								            <span><?php the_sub_field('caption'); ?></span>
								        <?php } ?>
								    </div>
								</div>
							</div>
    	                
    	                <?php } ?>
    	                
    	            <?php endwhile; else : endif; ?>
    	            <div class="clearfix"></div>
    	            
    	        </div>
    	    
    	    <?php endif; ?>
    	    
    	<?php endwhile; else : endif; ?>
    	
    </section>
	
	<?php include (TEMPLATEPATH . '/includes/contact.php' ); ?>
    	
	<?php get_footer(); ?>
	
	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
	
	<script>
		var $animation_elements = $('.fade');
		var $window = $(window);
		
		function check_if_in_view() {
		  var window_height = $window.height();
		  var window_top_position = $window.scrollTop();
		  var window_bottom_position = (window_top_position + window_height);
		
		  $.each($animation_elements, function() {
		    var $element = $(this);
		    var element_height = $element.outerHeight();
		    var element_top_position = $element.offset().top;
		    var element_bottom_position = (element_top_position + element_height);
		
		    // Check to see if this current container is within viewport
		    if ((element_bottom_position >= window_top_position) &&
		      (element_top_position <= window_bottom_position)) {
		      $element.addClass('visible');
		    } 
		    
		    // Can remove the class as well to reset:
		    // else {
		    //   $element.removeClass('visible');
		    // }
		    
		  });
		}
		
		$window.on('scroll resize', check_if_in_view);
		$window.trigger('scroll');
	</script>
	
</body>