<?php include (TEMPLATEPATH . '/includes/intro.php' ); ?>

<div class="col-md-6 block--three-quarters bg--dark-grey">
    <div class="outer">
    	<div class="inner"></div>
    </div>
</div>

<div class="clearfix"></div>

<div class="container">
	
	<div class="col-md-8 col-md-offset-2 xxl-margin--vertical">
			
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
    		<?php the_content(); ?>
		
		<?php endwhile; ?>
		
			<?php else : ?>
		
		<?php endif; ?>
			
	</div>
</div>
	