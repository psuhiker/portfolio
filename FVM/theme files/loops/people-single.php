<?php include (TEMPLATEPATH . '/includes/intro.php' ); ?>

<div class="col-md-6 block--three-quarters">
	<div class="outer min-height" style="background-image: url(<?php the_field('employee_photo_1'); ?>);">
		<div class="inner"></div>
	</div>
</div>

<div class="clearfix"></div>

<div class="bg--white">
    <div class="container">
    	
    	<div class="col-md-8 col-md-offset-2 xxl-margin--vertical">
    			
    		<div class="xxl-margin--bottom">
    			
        		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        			
            		<?php the_content(); ?>
        		
        		<?php endwhile; ?>
        		
        			<?php else : ?>
        		
        		<?php endif; ?>
    		
    		</div>
    		
    		<div class="xxl-margin--bottom">
    		
        		<h2 class="subheadline lg-margin--bottom">
        		    About
        		    <?php 
        		        $text=get_the_title(); 
        		        $text=explode(' ',$text);
        		        echo $text[0];  
        		    ?>
        		</h2>
        		
        		<?php the_field('employee-summary'); ?>
        		
    		</div>
    		
    		<?php
    		    $author = get_field('employee_author_id');
    		    $args = array( 'posts_per_page' => 3, 'author' => $author );
    		    $the_query = new WP_Query( $args );
    		    if ( $the_query->have_posts() ) {
    		?>
    		
    		    <p class="subheadline lg-margin--bottom">Recent Blog Posts</p>
    		    
    		    <ul>
    		    
        		    <?php 
        		        while ( $the_query->have_posts() ) { $the_query->the_post(); 
        		    ?>
        		        
        		        <li class="default-margin--bottom">
            		        <span class="sm-margin--bottom">
            		            <a href="<?php the_permalink(); ?>" class="link--black link--underline">
            		            	<?php the_title(); ?>
            		            </a><br>
            		        </span>
            		        <span class="font-family--secondary font-size--sm">
            		            <?php the_date(); ?>
            		        </span>
        		        </li>
        		        
        		    <?php } ?>
    		    
    		    </ul>
    		        	
    		<?php } wp_reset_postdata(); ?>
    			
    	</div>
    	
    </div>
</div>