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
    
    <?php 
        $count = count( get_field('services') ); 
        if ($count == 3) {
            $layoutClass = 'col-sm-12 col-md-4';
        } else if ($count == 4) {
            $layoutClass = 'col-sm-12 col-md-6';
        }
    ?>
    
    <?php if( have_rows('services') ): ?>
    
        <div class="row">
        	
        	<div class="col-md-3 block--full sm--block--none">
        	    <div class="outer">
        	        <div class="inner">
        	        	
        	        	<div class="content--top">
        	        		<h2 class="subheading text-right">
        	        			B2B <?php the_title(); ?> Services
        	        		</h2>
        	        	</div>
        	        	
        	        	<div class="content--bottom cta--arrow">
        	        		<p>
        	        		    <a href="<?php echo site_url(); ?>/tags/<?php the_title(); ?>/">
        	        		        All <?php the_title(); ?> Work
        	        		    </a>
        	        		</p>
        	        		<p>
        	        		    <a href="<?php echo site_url(); ?>/tag/<?php the_title(); ?>/">
        	        		        <?php the_title(); ?> Blogs
        	        		    </a>
        	        		</p>
        	        	</div>
        	        	
        	        </div>
        	    </div>
        	</div>
        	
        	<div class="col-sm-9 xl-padding--vertical">
        		
        		<div class="row-eq-height">
    
                    <?php while ( have_rows('services') ) : the_row(); ?>
                    
                        <div class="<?php echo $layoutClass; ?> xl-padding--vertical">
                            
                            <p class="subheadline--secondary">
                                <?php the_sub_field('service_title'); ?>
                            </p>
                            		    
                            <?php the_sub_field('service_content'); ?>   
                            
                        </div>
                        <?php $counter++; ?>
                    
                    <?php endwhile; ?>
                
        		</div>
            
        	</div>
        
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