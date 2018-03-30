<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="grid_12 marquee">
        <div class="container">
            <div class="grid_12">
                <div class="padding">
                    <h1 class="subtitle">Careers</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="clearfix"></div>

    <div class="gray-bg">
        <div class="container">
        	<div class="padding">
        	    
        	    <div class="grid_12">
        	        <div class="padding">
        	        	<?php include (TEMPLATEPATH . '/includes/job-breadcrumb.php' ); ?>
        	        </div>
        	    </div>
    
                <div class="post-wrapper grid_12">
                	<div class="post-block">
                	
                	    <div class="padding">
                	
                	        <div class="job-title">
                	        	<h1 class="text-center blog-post-title"><?php the_title(); ?></h1>
                	        	<?php
                	                $post_object = get_field('employment_school');
                	                $type = get_post_type;
                	                if( $post_object ): $post = $post_object;
                	            	setup_postdata( $post ); 
                	            ?>
                	                <p class="text-center">
                	                    <a href="<?php the_permalink(); ?>" data-reveal-id="myModal<?php the_id(); ?>" data-reveal-ajax="true">
                	                    	<?php the_title(); ?>
                	                    </a>
                	                </p>
                	                <?php
                	                    $school_meta = get_post_meta($post->ID);
                	                    $school_address = $school_meta['wpsl_address'][0];
                	                    $school_city = $school_meta['wpsl_city'][0];
                	                    $school_state = $school_meta['wpsl_state'][0];
                	                    $school_zip = $school_meta['wpsl_zip'][0];
                	                ?>
                	                <p class="text-center">
                	                	<?php echo $school_address; ?><br>
                	                	<?php echo $school_city; ?>, <?php echo $school_state; ?> <?php echo $school_zip; ?>
                	                </p>
                	                <div id="myModal<?php the_id(); ?>" class="reveal-modal school modal" data-reveal></div>
                	            <?php endif; ?>
                	            <?php wp_reset_postdata(); ?>
                	        </div>
                	        
                	        <div class="grid_8 job-posting">
                	        	<div class="padding">
                	        	
                	        	    <ul class="details">
                	        	    	<?php if(get_field('employment_position_type')) { ?>
                	        	    	    <?php 
                	        	    	        $employmentType = get_field_object('employment_position_type');
                	        	    	        $employmentTypeValue = $employmentType['value'];
                	        	    	        $employmentTypeLabel = $employmentType['choices'][ $employmentTypeValue ];
                	        	    	    ?>
                	        	    	    <li>
                	        	    	        <strong>Position Type:</strong>
                	        	    	        <?php echo $employmentTypeLabel; ?>
                	        	    	    </li>
                	        	    	<?php } ?>
                	        	    	<?php if(get_field('employment_position_length')) { ?>
                    	        	    	<?php 
                    	        	    	    $employmentLength = get_field_object('employment_position_length');
                    	        	    	    $employmentLengthValue = $employmentLength['value'];
                    	        	    	    $employmentLengthLabel = $employmentLength['choices'][ $employmentLengthValue ];
                    	        	    	?>
                	        	    	    <li>
                	        	    	        <strong>Position Length:</strong>
                	        	    	        <?php echo $employmentLengthLabel; ?>
                	        	    	    </li>
                	        	    	<?php } ?>
                	        	    	<?php if(get_field('employment_contact_person')) { ?>
                	        	    	    <li>
                	        	    	        <strong>Contact Person:</strong>
                	        	    	        <?php the_field('employment_contact_person'); ?><?php if(get_field('employment_contact_email')) { ?>,<?php } ?>
                	        	    	        <?php if(get_field('employment_contact_email')) { ?>
                	        	    	            <a href="mailto:<?php the_field('employment_contact_email'); ?>">
                	        	    	            	<?php the_field('employment_contact_email'); ?>
                	        	    	            </a>
                	        	    	        <?php } ?>
                	        	    	    </li>
                	        	    	<?php } ?>
                	        	    </ul>
                	        	
                	        	    <?php if(get_field('employment_job_description')) { ?>
                	        	        <h2>Job Description</h2>
                	        	        <?php the_field('employment_job_description'); ?>
                	        	    <?php } else { ?>
                	        	        <?php the_content(); ?>
                	        	    <?php } ?>
                	        	    
                	        	    <?php if(get_field('employment_duties_and_responsibilities')) { ?>
                	        	        <h2>Duties and Responsibilities</h2>
                	        	        <?php the_field('employment_duties_and_responsibilities'); ?>
                	        	    <?php } ?>
                	        	    
                	        	    <?php if(get_field('employment_requirements')) { ?>
                	        	        <h2>Requirements</h2>
                	        	        <?php the_field('employment_requirements'); ?>
                	        	    <?php } ?>
                	        	    
                	        	    <?php if(get_field('employment_salary')) { ?>
                	        	        <h2>Salary</h2>
                	        	        <?php the_field('employment_salary'); ?>
                	        	    <?php } ?>
                	        	    
                	        	    <?php if(get_field('employment_additional_information')) { ?>
                	        	        <h2>Additional Information</h2>
                	        	        <?php the_field('employment_additional_information'); ?>
                	        	    <?php } ?>
                	        	    
                	        	    <p class="date">
                	        	    	<em>Posted on <?php the_date(); ?></em>
                	        	    </p>
                	        	
                	        	</div>
                	        </div>
                	        
                	        <div class="grid_4 supporting-materials">
                	        	<div class="padding">
                	        
                        	        <?php if( get_field('employment_position_level') == 'elementary' ) { ?>
                        	        
                        	            <?php if(get_field('elementary_application_pack', 44)) { ?>
                        	        		
                        	        		<div class="gray-bg">
                        	        		
                        	        		    <h3 class="text-center">Resources & Application Pack</h3>
                        	        		    <p class="text-center">
                        	        		    	<a href="<?php the_field('elementary_application_pack', 44) ?>" class="button red small">Download</a>
                        	        		    </p>
                        	        		
                        	        		</div>
                    	        
                            	        <?php } ?>
                            	        
                            	    <?php } elseif( get_field('employment_position_level') == 'special_education' ) { ?>
                    	    
                    	                <?php if(get_field('special_education_application_pack', 44)) { ?>
                        	        		
                        	        		<div class="gray-bg">
                        	        		
                        	        		    <h3 class="text-center">Resources & Application Pack</h3>
                        	        		    <p class="text-center">
                        	        		    	<a href="<?php the_field('special_education_application_pack', 44) ?>" class="button red small">Download</a>
                        	        		    </p>
                        	        		
                        	        		</div>
                        	        
                                	    <?php } ?>
                            	    
                            	    <?php } ?>
                            	    
                            	    <?php 
                            	     
                            	    $custom_taxterms = wp_get_object_terms( 
                            	        $post->ID, 
                            	        'employment', 
                            	        array(
                            	            'fields' => 'ids',
                            	            'exclude' => array(16,25)
                            	        ) 
                            	    );
                            	    $args = array(
                            	        'post_type' => 'job',
                            	        'post_status' => 'publish',
                            	        'posts_per_page' => 3,
                            	        'orderby' => 'date',
                            	        'tax_query' => array(
                            	            array(
                            	                'taxonomy' => 'employment',
                            	                'field' => 'id',
                            	                'terms' => $custom_taxterms
                            	            )
                            	        ),
                            	        'post__not_in' => array (
                            	            $post->ID
                            	        ),
                            	    );
                            	    $related_items = new WP_Query( $args );
                            	    if ($related_items->have_posts()) : ?>
                            	        <div class="related-jobs">
                            	        	<p class="text-center"><strong>Related Positions</strong></p>
                            	        	<ul>
                            	        		<?php while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
                            	        		    <li>
                            	        		        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            	        		    </li>
                            	        		<?php endwhile; ?>
                            	        	</ul>
                            	        </div>
                            	    <?php endif; wp_reset_postdata(); ?>
                            	    
                            	</div>
                            </div>
                	
                	    </div>
                	
                	</div>
                </div>
    
        	</div>
        </div>
    </div>
    
    <div class="grid_12 gray-bg">
    	<div class="container">
    		<?php include (TEMPLATEPATH . '/includes/learn-more.php' ); ?>
    	</div>
    </div>

<?php endwhile; ?>
<?php else : ?>

	<h1 class="center">Not Found</h1>
 	<p class="center">Sorry, but this page cannot be found.</p>

<?php endif; ?>