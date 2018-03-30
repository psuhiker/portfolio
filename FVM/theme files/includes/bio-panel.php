<div class="bio-content bio-content<?php the_id(); ?>">

    <div class="block--full">
    	<div class="outer min-height" style="background-image: url(<?php the_field('employee_photo_1'); ?>);">
    	    <div class="inner">
    	    	
    	    	<div class="bio-close">
    	    	    <a class="bio-toggle bio-toggle<?php the_id(); ?> off-bio">Close [X]</a>
    	    	</div>
    	    	
    	    	<div class="content--bottom min-height">
    	    	
    	    	    <h2 class="headline--white font-size--xl"><?php the_title(); ?></h2>
    	    	    <p class="subheadline--secondary color--white"><?php the_field('employee_title'); ?></p>
    	    	
    	    	</div>
    	    	
    	    </div>
    	</div>
    </div>
    
    <div class="bg--white bio-summary">
    	
    	<div class="col-xs-12 xxl-padding--all">
    		<?php the_content(); ?>
    	</div>
    	<div class="clearfix"></div>
    	
    </div>

    <div class="bg--light-grey color--black font-size--sm bio-rundown">
    	
    	<div class="col-xs-12 xxl-padding--all">
    		<?php the_field('employee-summary'); ?>
    	</div>
    	<div class="clearfix"></div>
    	
    </div>
    
    <div class="bg--black color--white bio-related">
    	
    	<div class="col-xs-12 xxl-padding--all bio-posts">
    		
    		<?php
    		    $author = get_field('employee_author_id');
    		    $args = array( 'posts_per_page' => 3, 'author' => $author );
    		    $the_query = new WP_Query( $args );
    		    if ( $the_query->have_posts() ) {
    		?>
    		
    		    <p class="subheadline--secondary xl-margin--bottom">Recent Blog Posts</p>
    		    
    		    <?php 
    		        while ( $the_query->have_posts() ) { $the_query->the_post(); 
    		    ?>
    		    
    		        <p class="sm-margin--bottom">
    		            <a href="<?php the_permalink(); ?>">
    		            	<?php the_title(); ?>
    		            </a>
    		        </p>
    		        <p class="date">
    		            <?php the_date(); ?>
    		        </p>
    		        
    		    <?php } ?>
    		        	
    		<?php } wp_reset_postdata(); ?>
    		
    	</div>
    	
    	<div class="col-xs-12 xxl-padding--all bio-contact">
    		
    		<?php the_field('employee_phone_number'); ?> | <a href="mailto:<?php the_field('employee_email_address'); ?>"><?php the_field('employee_email_address'); ?></a>
    		
    	</div>
    	<div class="clearfix"></div>
    	
    </div>

</div>