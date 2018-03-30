<?php include (TEMPLATEPATH . '/includes/marquee-events.php' ); ?>

<div class="clearfix"></div>

<?php if( have_rows('section', 8) ): while ( have_rows('section', 8) ) : the_row(); ?>

    <?php if( get_row_layout() == 'section_three_block_panel' ): ?>
    
        <?php include (TEMPLATEPATH . '/includes/section-panel-block.php' ); ?>
        	
    <?php elseif( get_row_layout() == 'section_text_blocks' ):?>
    
        <?php include (TEMPLATEPATH . '/includes/section-text-blocks.php' ); ?>
    
    <?php elseif( get_row_layout() == 'section_blockquote' ):?>
    
        <?php include (TEMPLATEPATH . '/includes/section-blockquote.php' ); ?>
    
    <?php endif; ?>

<?php endwhile; else : endif; ?>

<?php 
    $today = current_time( 'ymd', $gmt = 0 ); 
    $posts = get_posts(
        array(
            'post_type' => 'events', 
            'meta_query' => array(
                array(
                    'key' => 'event_date', 
                    'compare' => '>=', 
                    'value' => $today, 
                    'type' => 'DATE'
                    )
                ), 
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'posts_per_page' => -1)
        ); 
        if( $posts ) { 
?>

<section class="default no-margin--top">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
            
                <h3 class="default-margin--bottom">Upcoming Events</h3>
                    
                <div class="row">
                
                    <?php foreach( $posts as $post ) {  setup_postdata( $post ); ?>
                    
                        <?php $date = get_field('event_date', false, false); $date = new DateTime($date); ?>
                        
                        <?php if ( get_field('keep_details_page_private') == true ) { ?>
                        
                            <div class="col-xs-12 lg-margin--top">
                        
                                <p class="no-margin--bottom font-size--md"><strong><?php the_title(); ?></strong>, <?php echo $date->format('F j, Y'); ?> | <?php the_field('event_location'); ?></p>
                            
                            </div>
                        	
                        <?php } else { ?>
                        
                            <div class="col-sm-6 col-md-4 lg-margin--vertical">
                        
                                <p class="no-margin--bottom font-size--md"><strong><?php the_title(); ?></strong></p>
                                <p class="no-margin--bottom"><?php echo $date->format('F j, Y'); ?></p>
                                <p><?php the_field('event_location'); ?></p>
                                <p><a href="<?php the_permalink(); ?>" class="btn btn-default btn-sm">View Event Details</a></p>
                            
                            </div>
                        	    
                        <?php } ?>
                    
                    <?php } wp_reset_postdata(); } ?>
                    
                </div>
            
            </div>

        </div>
    </div>
</section>

<section class="board officers">
    <div class="container">
        <div class="row">
        
            <div class="col-xs-12">
                <h3 class="lg-margin--bottom">Past Events</h3>
            </div>
        
        	<?php 
        	    $today = current_time( 'ymd', $gmt = 0 ); 
        	    $posts = get_posts(
        	        array(
        	            'post_type' => 'events', 
        	            'meta_query' => array(
        	                array(
        	                    'key' => 'event_date', 
        	                    'compare' => '<=', 
        	                    'value' => $today, 
        	                    'type' => 'DATE'
        	                    )
        	                ), 
        	            'meta_key' => 'event_date',
        	            'orderby' => 'meta_value_num',
        	            'order' => 'DESC',
        	            'posts_per_page' => -1
        	        )); 
        	        if( $posts ) { 
        	            foreach( $posts as $post ) { 
        	                setup_postdata( $post ); 
        	?>
        	
        		<div class="col-sm-6 col-md-4 col-lg-3 archives lg-margin--bottom">
        		
        			<div class="image" style="background-image: url(<?php the_field('event_featured_image'); ?>);">&nbsp;</div>
        		
        			<h4><?php the_title(); ?></h4>
        			
        			<?php $date = get_field('event_date', false, false); $date = new DateTime($date); ?>
        			<p><?php echo $date->format('F j, Y'); ?></p>
        			
        			<p><a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm">Read More</a></p>
        			
        		</div>
        	
        	<?php } wp_reset_postdata(); } ?>
        
        </div>
    </div>
</section>