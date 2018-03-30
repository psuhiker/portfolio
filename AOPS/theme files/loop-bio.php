<div class="container">
    <div class="padding copy">

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <div class="grid_5 bio-info">
                <div class="padding">
                	<img class="border" src="<?php the_field('bio_image'); ?>">
                    <h1><?php the_title(); ?><small><?php the_field('bio_title'); ?></small></h1>
                    <ul class="contact-info">
	                    <?php if (get_field('bio_email')): ?>
	                		<li>email: <?php the_field('bio_email')?></li>
	                    <?php endif; ?>
	                    
	                    <?php if (get_field('bio_phone')): ?>
	                		<li>phone: <?php the_field('bio_phone')?></li>
	                    <?php endif; ?>
	                    	
	                    <?php if (get_field('bio_cell')): ?>
	                		<!--li>cell: <?php the_field('bio_cell')?></li-->
	                    <?php endif; ?>
                    </ul>
                </div>
            </div>
            
            <div class="grid_7 bio-content">
                <?php
					the_field('bio_bio');
                ?>
            </div>
    
        <?php endwhile; ?>
        <?php else : ?>
        
        	<h1 class="center">Not Found</h1>
         	<p class="center">Sorry, but this page cannot be found.</p>
        
        <?php endif; ?>
        
    </div>
</div>
