<?php include (TEMPLATEPATH . '/includes/intro.php' ); ?>

<?php $count = 1; ?>

<?php while(the_flexible_field("about_page_sections")): ?>

    <?php 
        if ($count == 1) {
            $layoutClass = 'col-md-6 block--quarter sm--block--three-quarters';
        } else if ($count == 2) {
            $layoutClass = 'col-md-6 block--half sm--block--none';
        } else if ($count == 3) {
            $layoutClass = 'col-sm-6 col-md-3 block--full';
        } else if ($count == 4) {
            $layoutClass = 'col-md-3 block--full';
        } else if ($count == 5) {
            $layoutClass = 'col-md-6 block--half sm--block--none';
        } else if ($count == 6) {
            $layoutClass = 'col-md-6 block--half sm--block--none md--block--full';
        } else if ($count == 7) {
            $layoutClass = 'col-md-6 block--full';
        } else if ($count == 8) {
            $layoutClass = 'col-sm-6 col-md-3 block--double block--margin-top--half bg--white sm--block--full sm--block--margin-top--none md--block--margin-top--none md--block--margin-top--none md--block--full';
        } else if ($count == 9) {
            $layoutClass = 'col-sm-6 col-md-3 block--double block--margin-top--half sm--block--full sm--block--margin-top--none bg--image--top md--block--margin-top--none md--block--full';
        }
    ?>

    <?php if(get_row_layout() == "add_a_section_section_title"): ?>
    
        <div class="<?php echo $layoutClass; ?>">
        	<div class="outer min-height" style="background-image: url(<?php the_sub_field('add_a_section_section_title_background_image'); ?>)">
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
        <?php $count++ ?>
                    
    <?php endif; ?>
    
    <?php if(get_row_layout() == "add_a_section_small_text_block"): ?>
    
        <div class="<?php echo $layoutClass; ?>">
        	<div class="outer bg--black color--light-grey">
        		<div class="inner">
        					
        			<div class="content--bottom">
        					
            			<h3>
            			    <?php the_sub_field('add_a_section_small_text_block_headline'); ?>
            			</h3>
            			<?php the_sub_field('add_a_section_small_text_block_copy'); ?>
        			
        			</div>
        					
        		</div>
        	</div>
        </div>
        <?php $count++ ?>
    
    <?php endif; ?>
    
    <?php if(get_row_layout() == "add_a_section_page_link"): ?>
    
        <div class="<?php echo $layoutClass; ?>">
        	<div class="outer">
        		<div class="inner">
        					
        			<div class="content--bottom">
        					
        				<?php if(get_sub_field('page_link_title')) { ?>
        					<h3><?php the_sub_field('page_link_title'); ?></h3>
        				<?php } ?>
        				<?php if( have_rows('page_link_repeater') ): ?>
        					<ul class="list-unstyled cta--arrow no-margin--bottom">
        						<?php while( have_rows('page_link_repeater') ): the_row(); ?>
        							<li class="default-margin--top">
        							    <a href="<?php the_sub_field('page_link_page_link'); ?>">
        							    	<?php the_sub_field('page_link_link_text'); ?>
        							    </a>
        							</li>
        						<?php endwhile; ?>
        					</ul>
        				<?php endif; ?>
        					
        			</div>
        					
        		</div>
        	</div>
        </div>
        <?php $count++ ?>
    
    <?php endif; ?>
    
    <?php if(get_row_layout() == "add_a_section_text_copy"): ?>
    
        <?php 
            if( get_sub_field('add_a_section_small_text_block_background_color') == 'bg--white color black' ) {
                $colorClass = '';
            } elseif( get_sub_field('add_a_section_small_text_block_background_color') == 'bg--black color white' ) {
                $colorClass = 'bg--black color--white';
            } elseif( get_sub_field('add_a_section_small_text_block_background_color') == 'bg--orange color black' ) {
                $colorClass = 'bg--orange color--white';
            } elseif( get_sub_field('add_a_section_small_text_block_background_color') == 'bg--brown color white' ) {
                $colorClass = 'bg--brown color--white';
            } elseif( get_sub_field('add_a_section_small_text_block_background_color') == 'bg--cream color black' ) {
                $colorClass = 'bg--cream color--black';
            } elseif( get_sub_field('add_a_section_small_text_block_background_color') == 'bg--dark-grey color white' ) {
                $colorClass = 'bg--dark-grey color--white';
            } elseif( get_sub_field('add_a_section_small_text_block_background_color') == 'bg--medium-grey color white' ) {
                $colorClass = 'bg--medium-grey color--white';
            } else {
                $colorClass = '';
            }
        ?>
    
        <div class="<?php echo $layoutClass; ?>">
        	<div class="outer <?php echo $colorClass; ?>">
        		<div class="inner">
        					
        			<div class="hidden-md hidden-lg">
        					
        				<div class="col-xs-12 xl-padding--vertical">
        						
        					<?php if( get_sub_field('add_a_section_text_copy_title') ) { ?>
        					    <h2 class="lg-margin--bottom"><?php the_sub_field('add_a_section_text_copy_title'); ?></h2>
        					<?php } ?>
        					<?php the_sub_field('add_a_section_text_copy_copy'); ?>
        					
        					<?php if(get_sub_field('text_copy_include_link')) { ?>
        					    <p class="cta--arrow no-margin--bottom xl-padding--top">
        					        <a href="<?php the_sub_field('text_copy_cta_link') ?>">
        					            <?php the_sub_field('text_copy_cta_link_text') ?>
        					        </a>
        					    </p>
        					<?php } ?>
        				
        				</div>
        				<div class="clearfix"></div>
        					
        			</div>
        			
        			<div class="hidden-xs hidden-sm">
        					
        				<div class="content--top">
        						
        					<?php if( get_sub_field('add_a_section_text_copy_title') ) { ?>
        					    <h2 class="lg-margin--bottom"><?php the_sub_field('add_a_section_text_copy_title'); ?></h2>
        					<?php } ?>
        					<?php the_sub_field('add_a_section_text_copy_copy'); ?>
        					
        					<?php if(get_sub_field('text_copy_include_link')) { ?>
        					    <?php if ($count == 6) { ?><?php } else { ?>
        					        <p class="cta--arrow">
        					            <a href="<?php the_sub_field('text_copy_cta_link') ?>">
        					                <?php the_sub_field('text_copy_cta_link_text') ?>
        					            </a>
        					        </p>
        					    <?php } ?>
        					<?php } ?>
        				
        				</div>
        				
        				<?php if(get_sub_field('text_copy_include_link')) { ?>
        				    <?php if ($count == 6) { ?>
        				        <div class="content--bottom">
        							<p class="cta--arrow no-margin--bottom">
        							    <a href="<?php the_sub_field('text_copy_cta_link') ?>">
        							        <?php the_sub_field('text_copy_cta_link_text') ?>
        							    </a>
        							</p>
        				        </div>
        				    <?php } ?>
        				<?php } ?>
        					
        			</div>
        					
        		</div>
        	</div>
        </div>
        <?php $count++ ?>
    
    <?php endif; ?>
    
    <?php if(get_row_layout() == "about_client_list"): ?>
    
        <div class="<?php echo $layoutClass; ?>">
        	<div class="outer min-height <?php the_sub_field('add_a_section_large_text_block_background_color'); ?>">
        		<div class="inner">
        			
        			<?php if( get_sub_field('add_a_section_large_text_block_headline') ) { ?>
        				<h3 class="subheadline--black xl-margin--horizontal xl-margin--top sm-padding--top"><?php the_sub_field('add_a_section_large_text_block_headline'); ?></h3>
        			<?php } ?>
        			
        			<div class="vertical-align">
        			    <div class="content">
        			
                			<div class="client-list">
                    			
                    			<?php the_sub_field('add_a_section_large_text_block_copy'); ?>
                    			
                    			<?php if( have_rows('top_row_clients') ): ?>
                    				<ul>
                    					<?php while( have_rows('top_row_clients') ): the_row(); ?>
                    						<?php $image = get_sub_field('client_image'); ?>
                    						<li style="background-image: url(<?php echo $image['url']; ?>);"></li>
                    					<?php endwhile; ?>
                    				</ul>
                    			<?php endif; ?>
                    			<?php if( have_rows('client_repeater') ): ?>
                    				<ul>
                    					<?php while( have_rows('client_repeater') ): the_row(); ?>
                    						<?php $image = get_sub_field('client_image'); ?>
                    						<li style="background-image: url(<?php echo $image['url']; ?>);"></li>
                    					<?php endwhile; ?>
                    				</ul>
                    			<?php endif; ?>
                			
                			</div>
        			
        			    </div>
        			</div>
           
        		</div>
        	</div>
        </div>
        <?php $count++ ?>
    
    <?php endif; ?>
    
    <?php if(get_row_layout() == "add_a_section_image"): ?>
    
        <div class="<?php echo $layoutClass; ?>">
        	<div class="outer min-height" style="background-image:  url(<?php the_sub_field('add_a_section_image_image'); ?>);">
        		<div class="inner">
        					
        			<div class="content">
        					
            			<h3>
            			    <?php the_sub_field('add_a_section_small_text_block_headline'); ?>
            			</h3>
            			<?php the_sub_field('add_a_section_small_text_block_copy'); ?>
        			
        			</div>
        					
        		</div>
        	</div>
        </div>
        <?php $count++ ?>
    
    <?php endif; ?>

<?php endwhile; ?>

<?php include (TEMPLATEPATH . '/includes/get-started.php' ); ?>

<?php include (TEMPLATEPATH . '/includes/social.php' ); ?>