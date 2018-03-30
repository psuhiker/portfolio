<section class="president message">
    <div class="container">
        <div class="row">
        
            <?php if( get_field('about_presidents_image')) { ?>
            
                <div class="col-xs-4 col-xs-offset-4 col-sm-offset-0 col-md-3 lg-margin--bottom">
                    <img src="<?php the_field('about_presidents_image'); ?>" alt="" />
                </div>
                
            <?php } ?>
            
            <div class="col-xs-12 col-sm-8 col-md-9 message">
                <?php the_field('about_presidents_message'); ?>
            </div>
                    	
        </div>
    </div>
</section>

<section class="board officers">
    <div class="container">
        <div class="row">
        
        	<div class="col-xs-12">
        
	            <h3 class="heading">Officer Listing</h3>
	            
	            <?php 
	                $args = array(
	                    'post_type' => 'officers',
	                    'posts_per_page' => -1,
	                    'orderby'	=> 'menu_order',
	                    'order'		=> 'ASC',
	                    'meta_query' => array(
	                        array(
	                            'key' => 'board_is_officer',
	                            'value' => '1',
	                            'compare' => '=='
	                        )
	                    )
	                );
	                $the_query = new WP_Query( $args );
	                $num = count( get_posts( $args ) );
	            ?>
	            
	                <?php if( $the_query->have_posts() ): ?>
	                
	                    <?php if ( $num == 5 ) { ?>
	                        <div class="col-sm-1"></div>
	                    <?php } elseif ( $num == 10 ) { ?>
	                        <div class="col-sm-1"></div>
	                    <?php } ?>
	                
	                    <?php while ($the_query->have_posts()) { $the_query->the_post(); ?>
	                    
	                        <?php if ( $num == 1 ) { ?>
	                            <div class="col-xs-12 officer">
	                        <?php } elseif ( $num == 2 ) { ?>
	                            <div class="col-sm-6 officer">
	                        <?php } elseif ( $num == 3 ) { ?>
	                            <div class="col-sm-4 officer">
	                        <?php } elseif ( $num == 4 ) { ?>
	                            <div class="col-sm-3 officer">
	                        <?php } elseif ( $num == 5 ) { ?>
	                            <div class="col-sm-2 officer">
	                        <?php } elseif ( $num == 6 ) { ?>
	                            <div class="col-sm-4 officer">
	                        <?php } elseif ( $num == 7 ) { ?>
	                            <div class="col-sm-3 officer">
	                        <?php } elseif ( $num == 8 ) { ?>
	                            <div class="col-sm-3 officer">
	                        <?php } elseif ( $num == 9 ) { ?>
	                            <div class="col-sm-3 officer">
	                        <?php } elseif ( $num == 10 ) { ?>
	                            <div class="col-sm-2 officer">
	                        <?php } ?>
	                        
		                        <!--<div class="photo" style="background-image: url(<?php the_field('board_bio_photo'); ?>);">
		                        	<img src="<?php the_field('board_bio_photo'); ?>" alt="<?php the_title(); ?>">
		                        </div>-->
	                	    	
	                	    	<div class="name">
	                	        	<?php the_title(); ?>
	                	        </div>
	                	        
	                	        <div class="title">
	                	        	<?php the_field('board_neca_title'); ?>
	                	        </div>
	                	        
	                	        <div class="company">
	                	        	<?php the_field('board_company'); ?>
	                	        </div>
	                	        
	                	        <?php if( have_rows('board_contact_information') ): ?>
	                	        
		                	        <ul class="social">
		                	        
		                	        	<?php while ( have_rows('board_contact_information') ) : the_row(); ?>
		                	        	
		                	        		<li>
		                	        			<a href="mailto:<?php the_sub_field('board_contact_information_url'); ?>" title="<?php the_title(); ?> on <?php the_sub_field('board_contact_information_type'); ?>" target="_blank">
		                	        				<?php if( get_sub_field('board_contact_information_type') == 'email' ) { ?>
		                	        					<i class="fa fa-envelope" aria-hidden="true"></i>
		                	        				<?php } elseif( get_sub_field('board_contact_information_type') == 'twitter' ) { ?>
		                	        					<i class="fa fa-twitter" aria-hidden="true"></i>
		                	        				<?php } elseif( get_sub_field('board_contact_information_type') == 'linkedin' ) { ?>
		                	        					<i class="fa fa-linkedin" aria-hidden="true"></i>
		                	        				<?php } ?>
		                	        			</a>
		                	        		</li>
		                	        	
		                	        	<?php endwhile; else : ?>
		                	        	    
		                	       	</ul>
	                	        	
	                	        <?php endif; ?>
	                	    
	                	    </div>
	                	    
	                	<?php } ?>
	                	
	                <?php endif; ?>
	            
	            <?php wp_reset_postdata(); ?>
            
            </div>
        
        </div>
    </div>
</section>

<section class="board directors">
    <div class="container">
        <div class="row">
        
        	<div class="col-xs-12">
        
	            <h3 class="heading">Board of Directors</h3>
	        
	            <ul class="listing">
	        
	                <?php 
	                    $args = array(
	                        'post_type' => 'officers',
	                        'posts_per_page' => -1,
	                        'orderby'	=> 'title',
	                        'order'		=> 'ASC',
	                        'meta_query' => array(
	                            array(
	                                'key' => 'board_is_officer',
	                                'value' => '0',
	                                'compare' => '=='
	                            )
	                        )
	                    );
	                    $the_query = new WP_Query( $args );
	                ?>
	                
	                    <?php if( $the_query->have_posts() ): ?>
	                        <?php while ($the_query->have_posts()) { $the_query->the_post(); ?>
	                        
	                            <li class="hidden-xs">
	                                
	                                <?php if( have_rows("board_contact_information") ): ?>
	                                    <span data-toggle="popover" data-placement="left" data-html="true" data-content="<?php while ( have_rows('board_contact_information') ) : the_row(); ?>
	                                    	<?php if( get_sub_field('board_contact_information_type') == 'email' ) { ?>
	                                    		<a href='mailto:<?php the_sub_field('board_contact_information_url'); ?>' title='<?php the_title(); ?> on <?php the_sub_field('board_contact_information_type'); ?>'>
	                                    			<i class='fa fa-envelope sm-margin--horizontal' aria-hidden='true'></i>
	                                    		</a>
	                                    	<?php } elseif( get_sub_field('board_contact_information_type') == 'twitter' ) { ?>
	                                    		<a href='<?php the_sub_field('board_contact_information_url'); ?>' title='<?php the_title(); ?> on <?php the_sub_field('board_contact_information_type'); ?>' target='_blank'>
	                                    			<i class='fa fa-twitter sm-margin--horizontal' aria-hidden='true'></i>
	                                    		</a>
	                                    	<?php } elseif( get_sub_field('board_contact_information_type') == 'linkedin' ) { ?>
	                                    		<a href='<?php the_sub_field('board_contact_information_url'); ?>' title='<?php the_title(); ?> on <?php the_sub_field('board_contact_information_type'); ?>' target='_blank'>
	                                    			<i class='fa fa-linkedin sm-margin--horizontal' aria-hidden='true'></i>
	                                    		</a>
	                                    	<?php } ?>
	                                    	</a>
	                                    <?php endwhile; ?>">
	                                <?php else : endif; ?>
	                                
	                                    <div class="name">
	                                	    <?php the_title(); ?>
	                                	</div>
	                                	
	                                	<div class="company">
	                                		<?php the_field('board_company'); ?>
	                                	</div>
	                                	
	                                <?php if( have_rows("board_contact_information") ): ?>
	                                    </span>
	                                <?php endif; ?>
	                                
	                            </li>
	                            
	                            <li class="hidden-sm hidden-md hidden-lg">
	                                
	                                <?php if( have_rows("board_contact_information") ): ?>
	                                    <span data-toggle="popover" data-placement="bottom" data-html="true" data-content="<?php while ( have_rows('board_contact_information') ) : the_row(); ?><a href='<?php the_sub_field('board_contact_information_url'); ?>' title='<?php the_title(); ?> on <?php the_sub_field('board_contact_information_type'); ?>' target='_blank'><?php if( get_sub_field('board_contact_information_type') == 'email' ) { ?><i class='fa fa-envelope sm-margin--horizontal' aria-hidden='true'></i><?php } elseif( get_sub_field('board_contact_information_type') == 'twitter' ) { ?><i class='fa fa-twitter sm-margin--horizontal' aria-hidden='true'></i><?php } elseif( get_sub_field('board_contact_information_type') == 'linkedin' ) { ?><i class='fa fa-linkedin sm-margin--horizontal' aria-hidden='true'></i><?php } ?></a><?php endwhile; ?>">
	                                <?php else : endif; ?>
	                                
	                                    <div class="name">
	                                	    <?php the_title(); ?>
	                                	</div>
	                                	
	                                	<div class="company">
	                                		<?php the_field('board_company'); ?>
	                                	</div>
	                                	
	                                <?php if( have_rows("board_contact_information") ): ?>
	                                    </span>
	                                <?php endif; ?>
	                                
	                            </li>
	                            
	                    	<?php } ?>
	                    <?php endif; ?>
	                
	                <?php wp_reset_postdata(); ?>
	            
	            </ul>
            
            </div>
        
        </div>
    </div>
</section>

<section class="board committees">
    <div class="container">
        <div class="row">
        
        	<div class="col-xs-12">
        	
	            <h3 class="heading">Committees</h3>
	            
	            <div class="column-wrapper">
	            	<?php the_field('about_committees'); ?>
	            </div>
            
            </div>
        
        </div>
    </div>
</section>