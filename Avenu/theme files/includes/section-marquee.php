<section class="marquee <?php if( get_sub_field('section_marquee_style') == 'red' ) { ?>red<?php } elseif( get_sub_field('section_marquee_style') == 'white' ) { ?>white<?php } ?> <?php if( get_sub_field('section_marquee_background_image') ) { ?><?php } else { ?>full<?php } ?>">

    <div class="bg" style="background-image: url(<?php the_sub_field('section_marquee_background_image'); ?>);"></div>

    <div class="container">
    
        <?php if( get_sub_field('section_marquee_style') == 'red' ) { ?>
        
            <div class="col-md-10 col-lg-9">
            
                <h1 class="lg-margin--bottom"><?php the_sub_field('section_marquee_headline'); ?></h1>
                <?php the_sub_field('section_marquee_copy'); ?>
                
                <?php if( get_sub_field('section_marquee_include_cta') ) { ?>
                
                    <?php $post_object = get_sub_field('section_marquee_page'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                
                        <p class="lg-margin--top"><a href="<?php the_permalink(); ?>" class="btn btn-white" data-tracking="mainMarquee"><?php the_sub_field('section_marquee_cta_text'); ?></a></p>
                    
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                
                <?php } ?>
            
            </div>
        
        <?php } ?>
        
        <?php if( get_sub_field('section_marquee_style') == 'white' ) { ?>
        
            <div class="<?php if( get_sub_field('section_marquee_background_image') ) { ?>col-sm-8 col-md-6<?php } else { ?>col-sm-10 col-md-8<?php } ?>">
            
                <h1 class="lg-margin--bottom"><?php the_sub_field('section_marquee_headline'); ?></h1>
                <?php the_sub_field('section_marquee_copy'); ?>
                
                <?php if( get_sub_field('section_marquee_include_cta') ) { ?>
                
                    <?php $post_object = get_sub_field('section_marquee_page'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                
                        <p class="lg-margin--top"><a href="<?php the_permalink(); ?>" class="btn btn-red" data-tracking="mainMarquee"><?php the_sub_field('section_marquee_cta_text'); ?></a></p>
                    
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                
                <?php } ?>
            
            </div>
        
        <?php } ?>
    
    </div>
    
    <?php if( get_sub_field('section_marquee_style') == 'white' ) { ?>
        <?php if( get_sub_field('section_marquee_include_video') ) { ?>
    	
        	<?php 
        	    $videoid = rand(10000, 99999);
        	?>
        	
        	<div class="video" id="video<?php echo $videoid; ?>">
        	    	
        	    <a class="video-toggle video-toggle<?php echo $videoid; ?> play-video<?php echo $videoid; ?>" data-tracking="videoView">
        	    	<img src="<?php bloginfo('template_directory'); ?>/images/spacer.png">
        	    </a>
        	    	
        	</div>
        	
        	<div class="video__embed video__embed<?php echo $videoid; ?>">
        	
        	    <div class="video embedded-video<?php echo $videoid; ?>">
        	    	
        	    	<iframe src="<?php the_sub_field('section_marquee_video_url'); ?>" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        	    	
        	    </div>
        	    
        	    <div class="video-toggle close-button">
        	        <a class="video-toggle video-toggle<?php echo $videoid; ?> stop-video<?php echo $videoid; ?>">
        	        	<img src="<?php bloginfo('template_directory'); ?>/images/close-button-navy.png">
        	        </a>
        	    </div>
        	
        	</div>
        	
        	<!-- Toggles Video -->
        	<script>
        		$(".video-toggle<?php echo $videoid; ?>").on("click", function() {
        		    $(".video__embed<?php echo $videoid; ?>").toggleClass("active");
        		});
        	</script>
        	
        	<!-- Auto Plays Videos on Click -->
        	<script>
        	    $(document).ready(function() {
        	      $('.play-video<?php echo $videoid; ?>').on('click', function(ev) {
        	     
        	        $(".embedded-video<?php echo $videoid; ?> iframe")[0].src += "?autoplay=1";
        	        ev.preventDefault();
        	     
        	      });
        	    });
        	</script>
        	
        	<!-- Stops Video on Close -->
        	<script>
        	    $(function(){
        	        $('.stop-video<?php echo $videoid; ?>').click(function(){  
        	            
        	            $(".embedded-video<?php echo $videoid; ?> iframe").attr("src", $(".embedded-video<?php echo $videoid; ?> iframe").attr("src").replace("?autoplay=1", ""));
        	            
        	        });
        	    });
        	</script>
        	
        <?php } ?>
    <?php } ?>

</section>