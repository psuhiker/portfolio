<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php include (TEMPLATEPATH . '/includes/intro.php' ); ?>

    <div class="col-md-6 block--quarter sm--block--three-quarters">
    	<div class="outer bg--cream">
    		<div class="inner">
    			
    			<div class="vertical-align">
    				<div class="content font-size--sm">
    					<div class="col-md-10 col-md-offset-1">
        					<p class="no-margin--bottom">
        					    <strong>Project:</strong> 
        					    <?php the_field('case_study_project')?><br>
        					    <strong>Industry:</strong> 
        					    <?php the_field('case_study_date')?><br>
        					    <strong>Client:</strong>
        					    <?php the_field('case_study_client')?><br>
        					    <strong>Categories:</strong> 
        					    <?php echo custom_taxonomies_terms_links(); ?>
        					    <?php if(get_field('case_study_url' )) { ?>
        					        <br><strong>Live Site:</strong> <a href="<?php the_field('case_study_url')?>" target="_blank"><?php the_field('case_study_url')?></a>
        					    <?php } ?>
        					</p>
    					</div>
    				</div>
    			</div>
       
    		</div>
    	</div>
    </div>
    
    <div class="col-md-6 block--half">
    	<div class="outer bg--dark-grey color--white">
    		<div class="inner">
    			
    			<div class="vertical-align">
    				<div class="content">
    					<div class="col-md-10 col-md-offset-1">
        					<?php the_field('case_study_summary')?>
    					</div>
    				</div>
    			</div>
       
    		</div>
    	</div>
    </div>
    
    <div class="clearfix"></div>
    
    <?php while(the_flexible_field("case_study_section")): ?>
    
        <?php if(get_row_layout() == "case_study_section_full-width_image"): ?>
        
            <div class="col-xs-12 case-study--image no-padding--horizontal">
            
                <img src="<?php the_sub_field('case_study_section_full-width_image_image')?>">
            
            </div>
            <div class="clearfix"></div>
            
        <?php endif; ?>
        
        <?php if(get_row_layout() == "case_study_section_image-text"): ?>
        
            <div class="row row-eq-height case-study--image-text">
            
                <div class="col-sm-6 no-padding--horizontal">
                	<div class="vertical-align">
                		<div class="content">
                			<img src="<?php the_sub_field('case_study_section_image-text_image')?>">
                		</div>
                	</div>
                </div>
            
                <div class="col-sm-6 no-padding--horizontal<?php if( get_sub_field('case_study_section_image-text_background') == 'grey' ) { ?> bg--grey<?php } ?>">
                	<div class="vertical-align">
                		<div class="content default-padding--horizontal">
                			<div class="col-xs-12">
                				<?php the_sub_field('case_study_section_image-text_text')?>
                			</div>
                		</div>
                	</div>
                </div>
            
            </div>
            
        <?php endif; ?>
        
        <?php if(get_row_layout() == "case_study_section_text-image"): ?>
        
            <div class="row row-eq-height case-study--text-image">
            
                <div class="col-sm-6 no-padding--horizontal<?php if( get_sub_field('case_study_section_text-image_background') == 'grey' ) { ?> bg--grey<?php } ?>">
                	<div class="vertical-align">
                		<div class="content default-padding--horizontal">
                			<div class="col-xs-12">
                				<?php the_sub_field('case_study_section_text-image_text')?>
                			</div>
                		</div>
                	</div>
                </div>
                
                <div class="col-sm-6 no-padding--horizontal">
                	<div class="vertical-align">
                		<div class="content">
                			<img src="<?php the_sub_field('case_study_section_text-image_image')?>">
                		</div>
                	</div>
                </div>
            
            </div>
            
        <?php endif; ?>
        
        <?php if(get_row_layout() == "case_study_section_text"): ?>
        
            <div class="case-study--text<?php if( get_sub_field('case_study_section_text_background') == 'grey' ) { ?> bg--grey<?php } ?>">
        
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                
                    <?php if( get_sub_field('case_study_section_text_style') == 'quote' ) { ?>
                        <blockquote>
                    <?php } ?>
                    
                            <?php the_sub_field('case_study_section_text_text')?>
                            
                    <?php if( get_sub_field('case_study_section_text_style') == 'quote' ) { ?>
                        </blockquote>
                    <?php } ?>
                
                </div>
                <div class="clearfix"></div>
            
            </div>
            
        <?php endif; ?>
        
        <?php if(get_row_layout() == "case_study_section_text_video"): ?>
        
            <div class="row row-eq-height case-study--text-video">
            
                <div class="col-sm-6 no-padding--horizontal">
                	<div class="vertical-align">
                		<div class="content default-padding--horizontal">
                			<div class="col-xs-12">
                				<?php the_sub_field('case_study_section_text_video_text')?>
                			</div>
                		</div>
                	</div>
                </div>
                
                <div class="col-sm-6 no-padding--horizontal">
                	<div class="vertical-align">
                		<div class="content">
                			<iframe src="<?php the_sub_field('case_study_section_text_video_video'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                		</div>
                	</div>
                </div>
            
            </div>
            
        <?php endif; ?>
        
        <?php if(get_row_layout() == "case_study_section_video_text"): ?>
        
            <div class="row row-eq-height case-study--video-text">
            
                <div class="col-sm-6 no-padding--horizontal">
                	<div class="vertical-align">
                		<div class="content">
                			<iframe src="<?php the_sub_field('case_study_section_video_text_video'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                		</div>
                	</div>
                </div>
            
                <div class="col-sm-6 no-padding--horizontal">
                	<div class="vertical-align">
                		<div class="content default-padding--horizontal">
                			<div class="col-xs-12">
                				<?php the_sub_field('case_study_section_video_text_text')?>
                			</div>
                		</div>
                	</div>
                </div>
            
            </div>
            
        <?php endif; ?>
        
        <?php if(get_row_layout() == "case_study_section_video"): ?>
        
            <div class="case-study--video">
            
                <iframe src="<?php the_sub_field('case_study_section_video_video'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            
            </div>
            
        <?php endif; ?>
        
        <?php if(get_row_layout() == "case_study_section_before_after_image"): ?>
        
            <div class="case-study--before-after">
            
                <figure style="background-image: url(<?php the_sub_field('case_study_section_left_image');?>);">
                	<div id="divisor">
                		<div class="before" style="background-image: url(<?php the_sub_field('case_study_section_right_image');?>);"></div>
                	</div>
                </figure>
                <input type="range" min="0" max="100" value="50" id="slider" oninput="moveDivisor()">
                <div class="instructions">
                	Use the bar to slide left and right
                </div>
            
            </div>
            
            <!-- Before & After -->
            <script>
                var divisor = document.getElementById("divisor"),
                slider = document.getElementById("slider");
                function moveDivisor() { 
                	divisor.style.width = slider.value+"%";
                }
            </script>
            
        <?php endif; ?>
        
        <?php if(get_row_layout() == "case_study_section_long_scrolling_image"): ?>
        
            <div class="case-study--long-scroll<?php if( get_sub_field('case_study_section_scrolling_image_background') == 'grey' ) { ?> bg--grey<?php } ?>">
            
                <p class="text-center font-family--secondary">
                	<em>Scroll inside the laptop</em>
                </p>
                
                <div class="mockup">
                
                    <img src="<?php bloginfo('template_directory'); ?>/images/long-scroll-overlay.png" class="long-scroll-overlay">
                
                    <div class="artwork">
                    	<img src="<?php the_sub_field('case_study_section_scrolling_image_image'); ?>">
                    </div>
                
                </div>
            
            </div>
            
        <?php endif; ?>
    
    <?php endwhile; ?>

<?php endwhile; ?>

	<?php else : ?>

<?php endif; ?>