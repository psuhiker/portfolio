<section class="text<?php if( get_sub_field('section_text_blocks_bg') == 'light' ) { ?> bg-light<?php } elseif( get_sub_field('section_text_blocks_bg') == 'dark' ) { ?> bg-dark<?php } ?> <?php if( get_sub_field('section_text_blocks_padding') == 'large' ) { ?> padding-large<?php } ?>">
    <div class="container">
        <div class="row">
        
            <?php $panel_count = count( get_sub_field('section_text_blocks_single_block') ); ?>
            <?php if( have_rows('section_text_blocks_single_block') ): while ( have_rows('section_text_blocks_single_block') ) : the_row(); ?>
                
                <div class="block text <?php if ( $panel_count == 1 ) { ?>col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2<?php } elseif ( $panel_count == 2 ) { ?>col-md-6<?php } elseif ( $panel_count == 3 ) { ?>col-md-4<?php } ?>">
                    
                    <div class="title">
                        <h3><?php the_sub_field('section_text_blocks_title'); ?></h3>
                    </div>
                    
                    <div class="copy">
                        <?php the_sub_field('section_text_blocks_copy'); ?>
                        <?php if( get_sub_field('section_text_blocks_link_options') == 'none' ) { ?>
                        	<?php // No Link ?>
                        <?php } else { ?>
	                        <p>
	                            <?php if( get_sub_field('section_text_blocks_link_options') == 'internal' ) { ?>
	                                <?php $post_object = get_sub_field('section_text_blocks_page'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
	                                    <a href="<?php the_permalink(); ?>">
	                                    	<?php the_sub_field('section_text_blocks_link_text'); ?>
	                                    </a>
	                                    <?php wp_reset_postdata(); ?>
	                                <?php endif; ?>
	                            <?php } else { ?>
	                                <a href="<?php the_sub_field('section_text_blocks_custom_url'); ?>">
	                                    <?php the_sub_field('section_text_blocks_link_text'); ?>
	                                </a>
	                            <?php } ?>
	                        </p>
                        <?php } ?>
                    </div>
                        
                </div>
                        
            <?php endwhile; else : endif; ?>
            
        </div>
    </div>
</section>