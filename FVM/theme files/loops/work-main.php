<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php include (TEMPLATEPATH . '/includes/intro.php' ); ?>

    <div class="col-md-6 block--quarter">
    	<div class="outer bg--dark-grey">
    		<div class="inner">
    			
    			<?php 
    				$args = array(
    				    'taxonomy' => 'case_study_categories',
    				    'value_field' => 'slug',
    				    'class' => 'select--transparent',
    				    'show_option_all'    => 'All Categories'
    				);
    			?>
    			
    			<div class="content--bottom">
    				<p class="no-margin--bottom">
    					<span class="color--light-grey font-size--sm font-family--secondary">
    					    Show case studies on: 
    					</span>
    					<?php wp_dropdown_categories( $args ); ?>
    				</p>
    			</div>
    			
    			<?php include ( TEMPLATEPATH . '/includes/script-category-select-work.php' ); ?>
       
    		</div>
    	</div>
    </div>
    
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
    <?php
    	$args = array(
    		'post_type'=> 'case_study',
    		'posts_per_page'=> '10',
    		'paged' => $paged
    	);
    	$query = new WP_Query( $args );
    ?>
    <?php while ( $query->have_posts() ) { $query->the_post(); ?>
    
        <div class="col-sm-6 block--half">
        	
        	<?php include ( TEMPLATEPATH . '/includes/block.php' ); ?>
        	
        </div>
    
    <?php } ?>
    
    <?php wp_reset_query(); ?>
    
    <div class="col-sm-6 col-md-3 block--full">
    	<div class="outer bg--dark-grey">
    		<div class="inner">
    					
    			<?php 
    			    $next_links = get_next_posts_link( 'Next', $query->max_num_pages );
    			    $prev_links = get_previous_posts_link( 'Previous', $query->max_num_pages ); 
    			?>
    			
    			<?php if ($next_links) { ?>
    			
    			    <div class="content--top cta--arrow xl-margin--bottom">
    			    	<?php next_posts_link( 'Next', $query->max_num_pages ); ?>
    			    </div>
    			
    			<?php } ?>
    			
    			<?php if ($prev_links) { ?>
    			
    			    <div class="content--top cta--arrow--reverse xl-margin--bottom">
    			    	<?php previous_posts_link( 'Previous', $query->max_num_pages ); ?>
    			    </div>
    			
    			<?php } ?>
    					
    		</div>
    	</div>
    </div>
    
    <?php include (TEMPLATEPATH . '/includes/get-started.php' ); ?>

<?php endwhile; ?>

	<?php else : ?>

<?php endif; ?>