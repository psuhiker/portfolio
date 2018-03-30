<body class="secondary default">

	<?php include (TEMPLATEPATH . '/header.php' ); ?>
	
	<br><br><br><br>
	
	<section id="portfolio-items">
	
	    <?php if( have_rows('portfolio_section_portfolio_items') ): ?>
	    
	        <?php while ( have_rows('portfolio_section_portfolio_items') ) : the_row(); ?>
	                
	            <?php $post_object = get_sub_field('portfolio_section_portfolio_items_item'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
	            
	                <div class="item">
	                
	                    <div class="image">
	                    	<div class="inner">
	                    		
	                    		<div class="image-file">
	                    		    <div class="background" style="background-image: url(<?php the_field('marquee_background'); ?>);">&nbsp;</div>
	                    		</div>
	                    		
	                    	</div>
	                    </div>
	                    
	                    <div class="title">
	                        <div class="inner">
	                            
	                            <h2 class="headline">
	                                <a href="##">
	                                    <?php the_title(); ?>
	                                    <span>
	                                        <span><?php the_field('website_description'); ?></span>
	                                    </span>
	                                </a>
	                            </h2>
	                            
	                        </div>
	                    </div>
	                    
	                </div>
	                
	                <?php wp_reset_postdata(); ?>
	            <?php endif; ?>
	            
	        <?php endwhile; else : ?>
	        
	    <?php endif; ?>
	    
	</section>
	
	<?php get_footer(); ?>
	
	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

</body>