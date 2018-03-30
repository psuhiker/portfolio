<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php if( have_rows('section') ): while ( have_rows('section') ) : the_row(); ?>

        <?php if( get_row_layout() == 'section_marquee' ): ?>

            <?php include (TEMPLATEPATH . '/includes/section-marquee.php' ); ?>

        <?php endif; ?>

        <?php if( get_row_layout() == 'section_banner' ): ?>

            <?php include (TEMPLATEPATH . '/includes/section-banner.php' ); ?>

        <?php endif; ?>

        <?php if( get_row_layout() == 'section_text' ): ?>

            <?php include (TEMPLATEPATH . '/includes/section-text.php' ); ?>

        <?php endif; ?>

        <?php if( get_row_layout() == 'section_copy_assets' ): ?>

            <?php include (TEMPLATEPATH . '/includes/section-copy-assets.php' ); ?>

        <?php endif; ?>

        <?php if( get_row_layout() == 'section_assets' ): ?>

            <?php include (TEMPLATEPATH . '/includes/section-assets.php' ); ?>

        <?php endif; ?>
        
        <?php if( get_row_layout() == 'section_image_grid' ): ?>
        
            <?php include (TEMPLATEPATH . '/includes/section-image-grid.php' ); ?>
        
        <?php endif; ?>

        <?php if( get_row_layout() == 'section_feed' ): ?>

            <?php include (TEMPLATEPATH . '/includes/section-feed.php' ); ?>

        <?php endif; ?>
        
        <?php if( get_row_layout() == 'section_spacer' ): ?>
        
            <section class="spacer <?php the_sub_field('section_spacer_style'); ?>"></section>
        
        <?php endif; ?>

    <?php endwhile; ?>

    	<?php else : ?>

    <?php endif; ?>

<?php endwhile; ?>

	<?php else : ?>

<?php endif; ?>
