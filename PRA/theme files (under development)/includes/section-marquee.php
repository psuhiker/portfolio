<section class="marquee<?php if( get_sub_field('marquee_style') == 'standard' ) { ?> standardMarquee<?php } elseif( get_sub_field('marquee_style') == 'hero' ) { ?> heroMarquee<?php } else { ?> basicMarquee<?php } ?>">
	
	<?php if( get_sub_field('marquee_style') == 'standard' ) { ?>
	
	    <div class="row-eq-height">
	    		
	    	<div class="col-md-3 pattern">
	    		<div class="vertical-align">
	    		    <div class="content">
	    		    	<h1 class="headline color--white">
	    		    		<?php the_sub_field('marquee_headline'); ?>
	    		    	</h1>
	    		    </div>
	    		</div>
	    	</div>
	    	
	    	<div class="col-md-9 image" style="background-image: url(<?php the_sub_field('marquee_supporting_image'); ?>);"></div>
	    		
	    </div>
	
	<?php } elseif( get_sub_field('marquee_style') == 'hero' ) { ?>
	
	    <div class="row-eq-height">
	    		
	    	<div class="col-md-3 pattern">
	    		<h1 class="headlinePlacement">
	    			<?php the_sub_field('marquee_headline_left'); ?>
	    			<span class="hidden-md hidden-lg">
	    				<strong>
	    					<?php the_sub_field('marquee_headline_right'); ?>
	    				</strong>
	    			</span>
	    		</h1>
	    	</div>
	    	
	    	<div class="col-md-9 image" style="background-image: url(<?php the_sub_field('marquee_supporting_image'); ?>);">
	    		<h1 class="headlinePlacement">
	    			<strong>
	    				<?php the_sub_field('marquee_headline_right'); ?>
	    			</strong>
	    		</h1>
	    	</div>
	    		
	    </div>
	
	<?php } else { ?>
	
	    <div class="pattern">
	    	<div class="col-md-8 col-lg-7 no-padding--left">
    	    	<h1 class="headline xxl-margin--bottom">
    	    		<?php the_sub_field('marquee_headline'); ?>
    	    	</h1>
    	    	<div class="copy">
    	    		<?php the_sub_field('marquee_copy'); ?>
    	    	</div>
	    	</div>
	    	<div class="clearfix"></div>
	    </div>
	    
	<?php } ?>
	
</section>
