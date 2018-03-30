<?php include (TEMPLATEPATH . '/includes/marquee.php' ); ?>

<section class="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-md-offset-5">
                <?php the_field('introductory_copy'); ?>
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>

<?php if( have_rows('section') ): while ( have_rows('section') ) : the_row(); ?>

    <?php if( get_row_layout() == 'section_three_block_panel' ): ?>
    
        <?php include (TEMPLATEPATH . '/includes/section-panel-block.php' ); ?>
        	
    <?php elseif( get_row_layout() == 'section_text_blocks' ): ?>
    
        <?php include (TEMPLATEPATH . '/includes/section-text-blocks.php' ); ?>
    
    <?php endif; ?>

<?php endwhile; else : endif; ?>