<?php include (TEMPLATEPATH . '/includes/intro.php' ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php
    	$services_marquee_image = get_field("services_marquee_image");
    ?>

    <div class="col-md-6 block--quarter min-height sm--block--three-quarters">
        <div class="outer min-height" style="background-image: url(<?php echo $services_marquee_image['url']; ?>)">
            <div class="inner"></div>
        </div>
    </div>
    
    <div class="col-md-6 block--half sm--block--none">
        <div class="outer bg--black color--grey">
            <div class="inner">
            					
            	<div class="content--bottom">
            		<?php the_content(); ?>    
            		<div class="clearfix"></div>         		
            	</div>
            					
            </div>
    	</div>      	
    </div>
    
    <?php if( have_rows('services') ): ?>
    
        <?php $counter = 1; ?>
        <div class="row">
    
            <?php while ( have_rows('services') ) : the_row(); ?>
            
                <div class="col-sm-6 col-md-6 col-md-offset-0 col-lg-3 block--full sm--block--none md--block--none lg-margin--bottom<?php if ($counter == 1) { ?> col-lg-offset-3<?php } ?>">
                    <div class="outer">
                        <div class="inner">
                        					
                        	<div class="content--top">
                        					
                        		<div class="col-xs-12">
                        					
                                    <p class="cta--arrow">
                                    	<a href="<?php the_sub_field('service_page_link'); ?>">
                                    		<?php the_sub_field('service_title'); ?>
                                    	</a>
                                    </p>
                                    		    
                                    <?php the_sub_field('service_content'); ?>
                                	
                        		</div>
                        	
                        	</div>
                        		
                        </div>
                	</div>  
                	<div class="clearfix"></div>      
                </div>
                <?php if ($counter % 2 == 0) { ?>
                    <div class="hidden-xs hidden-lg">
                    	<div class="clearfix"></div>
                    </div>
                <?php } ?>
                <?php $counter++; ?>
            
            <?php endwhile; ?>
            <div class="clearfix"></div>
        
        </div>
    
    <?php endif; ?>
    
    <?php if( have_rows('lp_supporting_content') ): ?>
    	<?php while ( have_rows('lp_supporting_content') ) : the_row(); ?>
    	
    	    <div class="block--full col-sm-6 col-md-3">
    	        <?php include ( TEMPLATEPATH . '/includes/block.php' ); ?>
    	    </div>
    	
    	<?php endwhile; ?>
    <?php endif; ?>
    
    <?php include (TEMPLATEPATH . '/includes/get-started.php' ); ?>

<?php endwhile; ?>

	<?php else : ?>

<?php endif; ?>