<section class="text <?php if( get_sub_field('section_text_background_color') == 'pearl-white' ) { ?>bg--pearl-white<?php } ?>">

    <div class="container">
        
        <?php if( get_sub_field('section_text_section_header') ) { ?>
            <div class="col-xs-12">
                <h2 class="headline--underline">
                	<?php the_sub_field('section_text_section_header'); ?>
                </h2>
            </div>
        <?php } ?>
        
        <?php $panel_count = count( get_sub_field('section_text_block') ); ?>
        <?php if( have_rows('section_text_block') ): ?>
            <?php while ( have_rows('section_text_block') ) : the_row(); ?>
            
                <div class="block text <?php if ( $panel_count == 1 ) { ?>col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2<?php } elseif ( $panel_count == 2 ) { ?>col-sm-6<?php } elseif ( $panel_count == 3 ) { ?>col-md-4<?php } elseif ( $panel_count == 4 ) { ?>col-sm-6 col-md-3<?php } ?>">
                
                    <?php if( get_sub_field('section_text_block_headline') ) { ?>
                        <h3><?php the_sub_field('section_text_block_headline'); ?></h3>
                    <?php } ?>
                    
                    <?php the_sub_field('section_text_block_copy'); ?>
                
                </div>
        
            <?php endwhile; else : ?>
        <?php endif; ?>
    
    </div>
    <div class="clearfix"></div>

</section>