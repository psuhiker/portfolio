<?php $marquee = get_field('include_marquee'); if( $marquee && in_array('yes', $marquee) ) : ?>

    <section class="marquee" style="background-image: url(<?php the_field('marquee_image'); ?>);">
        <div class="container">
            <div class="row">
                    
                <?php if ( is_front_page() ) { ?>
                
                	<div class="col-xs-12">
                    
                        <div class="col-sm-5 col-md-4">
                        
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
                                        'orderby'   => 'meta_value',
                                        'order' => 'ASC',
                                        'posts_per_page' => 1)
                                    ); 
                                    if( $posts ) { 
                                        foreach( $posts as $post ) { 
                                            setup_postdata( $post ); 
                            ?>
                            
                                <?php if ( get_field('keep_details_page_private') == true ) { ?>
                                    <div class="event block" style="background-image: url(<?php the_field('marquee_image', 8); ?>);">
                                <?php } else { ?>
                                    <?php if ( get_field('event_featured_image') ) { ?>
                                        <div class="event block" style="background-image: url(<?php the_field('event_featured_image'); ?>);">
                                    <?php } else { ?>
                                        <div class="event block" style="background-image: url(<?php the_field('marquee_image', 8); ?>);">
                                    <?php } ?>
                                <?php } ?>
                                    <?php if ( get_field('keep_details_page_private') == true ) { ?>
                                    <?php } else { ?>
                                        <a href="<?php the_permalink(); ?>">
                                    <?php } ?>
                                        <div class="outer">
                                            <div class="inner">
                                            
                                                <div class="overlay"></div>
                                            
                                                <?php $date = get_field('event_date', false, false); $date = new DateTime($date); ?>
                                                
                                                <div class="date">
                                                    <span class="day">
                                                        <?php echo $date->format('j'); ?>
                                                    </span>
                                                    <span class="month">
                                                        <?php echo $date->format('F'); ?>
                                                    </span>
                                                    <span class="year">
                                                        <?php echo $date->format('Y'); ?>
                                                    </span>
                                                </div>
                                                
                                                <div class="title">
                                                    <?php the_title(); ?>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    <?php if ( get_field('keep_details_page_private') == true ) { ?>
                                    <?php } else { ?>
                                        </a>
                                    <?php } ?>
                                </div>  
                                
                            <?php } wp_reset_postdata(); } ?>
                            
                        </div>
                        
                    </div>
                    
                <?php } else { ?>
                
                	<div class="banner">
                	
                		<?php // include (TEMPLATEPATH . '/images/bg-banner.svg' ); ?>
                		
                		<h1>
                		
                			<?php if( get_field('public_title') ) { ?>
                				<?php the_field('public_title'); ?>
                			<?php } else { ?>
                				<?php the_title(); ?>
                			<?php } ?>
                		
                		</h1>
                			
                	</div>
                	
                	<?php // include (TEMPLATEPATH . '/images/marquee-right-shape.svg' ); ?>
                        
                <?php } ?>
                    
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    
<?php else : ?>

    <div class="header divider"></div>
    
    <div class="bg--secondary xl-padding--bottom">
        <div class="container">
        	<div class="row">
    	    	<div class="col-xs-12">
    	    		<h1 class="xl-margin--top no-margin--bottom text-color--white text-shadow--heavy">
    	    			
    	    			<?php if( get_field('public_title') ) { ?>
    	    				<?php the_field('public_title'); ?>
    	    			<?php } else { ?>
    	    				<?php the_title(); ?>
    	    			<?php } ?>
    	    			
    	    		</h1>
    	    	</div>
    	    </div>
        </div>
    </div>
    
<?php endif; ?>