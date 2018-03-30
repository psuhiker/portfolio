<?php include (TEMPLATEPATH . '/includes/marquee-events.php' ); ?>

<section class="event details no-margin--top">
    <div class="container">
        <div class="row">
        
        	<div class="col-sm-5 col-md-4 col-lg-3">
        		<?php if ( get_field('event_featured_image') ) { ?>
        		    <div class="event block default-margin--bottom" style="background-image: url(<?php the_field('event_featured_image'); ?>);">
        		<?php } else { ?>
        		    <div class="event block default-margin--bottom" style="background-image: url(<?php the_field('marquee_image', 8); ?>);">
        		<?php } ?>
	        	    <div class="outer">
	        	        <div class="inner">
	        	            
	        	            <div class="title">
	        	            
	        	                <?php the_title(); ?>
	        	                
	        	                <?php $date = get_field('event_date', false, false); $date = new DateTime($date); ?>
	        	                <p class="small-date"><?php echo $date->format('F j, Y'); ?></p>
	        	                
	        	            </div>
	        	        
	        	        </div>
	        	    </div>
	        	</div>
        	</div>
        	
        	<div class="col-sm-7 col-md-8 col-lg-7">
        		<div class="event description font-size--md">
        	
	        		<?php if( get_field('event_description') ) { ?>
	        		    <?php the_field('event_description'); ?>
	        		<?php } ?>
        	
        		</div>
        	</div>
        
        </div>
    </div>
</section>

<?php if( have_rows('event_photo_gallery') ): ?>

	<?php $photo = 0; ?>
	<section class="gallery">
		<div class="container">
			<div class="row">
			
				<h3 class="heading text-center">Photo Gallery</h3>
			
				<div class="lg-margin--top">
				
					<div class="am-container" id="am-container">
					
						<?php while ( have_rows('event_photo_gallery') ) : the_row(); ?>
						
							<a href="#photo<?php echo $photo; ?>" data-toggle="modal" data-target="#photo<?php echo $photo; ?>">
								<img src="<?php the_sub_field('event_photo_gallery_photo'); ?>"></img></img>
							</a>
							
							<?php $photo++ ?>
							
						<?php endwhile; ?>
						
					</div>
				
				</div>
			
			</div>
		</div>
	</section>

<?php else : endif; ?>

<?php if( have_rows('event_photo_gallery') ): ?>

	<?php $photoLarge = 0; ?>
	
	<?php while ( have_rows('event_photo_gallery') ) : the_row(); ?>
	
		<div class="modal fade" tabindex="-1" role="dialog" id="photo<?php echo $photoLarge; ?>">
			<div class="modal-dialog modal-lg" role="document">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      		</div>
		      		<div class="modal-body text-center">
		        		<img src="<?php the_sub_field('event_photo_gallery_photo'); ?>">
		      		</div>
		      		<div class="modal-footer">
		      			<p><?php the_sub_field('event_photo_gallery_caption'); ?></p>
		      		</div>
		      	</div>
		    </div>
		</div>
	
		<?php $photoLarge++ ?>
		
	<?php endwhile; ?>

<?php else : endif; ?>