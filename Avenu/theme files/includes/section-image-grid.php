<section class="image-grid <?php if( get_sub_field('section_image_grid_background_color') == 'pearl-white' ) { ?>bg--pearl-white<?php } ?>">
    
    <div class="container">
        <div class="row images">
            
            <?php if( have_rows('section_image_grid_items') ): ?>
            
                <?php while ( have_rows('section_image_grid_items') ) : the_row(); ?>
                
                    <div class="block image vertical-align">
                    	<div class="wrapper">
                        	<div class="contentx">
                        	
                            	<?php if( get_sub_field('section_image_grid_item_url') ) { ?>
                            	
                            	    <a href="<?php the_sub_field('section_image_grid_item_url'); ?>" target="_blank">
                            	
                            	<?php } ?>
                            	
                            	    <div class="image-wrapper vertical-align">
                            	    	<div class="wrapper">
                            	    		<div class="content">
                            	    			<img src="<?php the_sub_field('section_image_grid_item_image'); ?>">
                            	    		</div>
                            	    	</div>
                            	    </div>
                            	    
                            	    <?php if( get_sub_field('section_image_grid_item_label') ) { ?>
                            	        <p class="image-label">
                            	        	<?php the_sub_field('section_image_grid_item_label'); ?>
                            	        </p>
                            	    <?php } ?>
                            	
                            	<?php if( get_sub_field('section_image_grid_item_url') ) { ?>
                            	
                            	    </a>
                            	
                            	<?php } ?>
                    	
                    	    </div>
                    	</div>
                    </div>
            
                <?php endwhile; else : ?>
            <?php endif; ?>
    
        </div>
    </div>
    <div class="clearfix"></div>

</section>