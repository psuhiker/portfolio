<?php include (TEMPLATEPATH . '/includes/intro.php' ); ?>

<?php if(is_archive()) { ?>

    <div class="col-md-6 block--three-quarters">
    	<div class="outer" style="background-image: url(http://localhost:8888/thinkfvm/wp-content/uploads/aaron-alex.jpg);">
    		<div class="inner">
    			
    			<?php if( get_sub_field('add_a_section_section_title_headline') ): ?>
    			
    			    <div class="vertical-align">
    			    	<div class="content">
    			    		
    			    		<?php the_sub_field('add_a_section_section_title_headline'); ?>
    			    		
    			    	</div>
    			    </div>
    			
    			<?php endif; ?>
       
    		</div>
    	</div>
    </div>

<?php } ?>

<div class="container">
	
	<div class="col-md-8 col-md-offset-2 xxl-margin--vertical">
	
	    <?php query_posts( 'post_type=jobs&orderby=title&order=ASC&meta_key=active&meta_value=a:1:{i:0;s:3:"yes";}' ); ?>
	    
	        <?php if (have_posts()) : ?>
	            <?php while (have_posts()) : the_post(); ?>
	            
	                <div class="xxl-padding--bottom">
	            
    	                <h2 class="subheadline lg-margin--bottom">
    	                    <?php the_title(); ?>
    	                </h2>
    	                
    	                <div class="lg-margin--bottom">
    	                	<?php the_excerpt(); ?>
    	                </div>
    	                
    	                <p class="cta--arrow">
    	                	<a href="<?php the_permalink(); ?>">
    	                		Read Full Job Description
    	                    </a>
    	                </p>
	                
	                </div>
	            
	            <?php endwhile; ?>
	        
	        	<?php else : ?>
	        	
    	        	<h2 class="headline">Open Positions:</h2>
    	        	
    	        	<p class="jobs-paragraph">
    	        	    <?php the_field('contact_no_jobs_copy', 19); ?>
    	        	</p>
	        
	        <?php endif; ?>
	
	</div>
	
</div>
