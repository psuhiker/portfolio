<section class="text">
	
	<div class="container">
	
	    <?php 
	        $count = count(get_sub_field('text_text_blocks')); 
	        if ($count == 1) {
	            $layout = 'oneColumn';
	        } elseif ($count == 2) {
	            $layout = 'twoColumn';
	        } elseif ($count == 3) {
	            $layout = 'threeColumn';
	        } else {
	            $layout = 'fourColumn';
	        }
	    ?>
		
		<?php if( have_rows('text_text_blocks') ): ?>
		
		    <div class="<?php echo $layout; ?>">
		
    		    <?php while ( have_rows('text_text_blocks') ) : the_row(); ?>
    		    
    		        <div class="content">
    		        	<?php the_sub_field('text_text_blocks_block'); ?>
    		        </div>
    		
    		    <?php endwhile; ?>
		    
		    </div>
		    
		    <div class="clearfix"></div>
		
		<?php else : endif; ?>
		
	</div>
	
</section>
