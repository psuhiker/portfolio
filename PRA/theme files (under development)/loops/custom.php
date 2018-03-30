<?php if( have_rows('section') ): ?>

    <div class="main">

        <?php while ( have_rows('section') ) : the_row(); ?>
        
            <?php if( get_row_layout() == 'section_marquee' ) { ?>
    
            	<?php include (TEMPLATEPATH . '/includes/section-marquee.php' ); ?>
    
            <?php } ?>
            
            <?php if( get_row_layout() == 'section_text' ) { ?>
            
                <?php include (TEMPLATEPATH . '/includes/section-text.php' ); ?>
            
            <?php } ?>
    
            <?php if( get_row_layout() == 'section_banner' ) { ?>
    
            	<?php include (TEMPLATEPATH . '/includes/section-banner.php' ); ?>
    
            <?php } ?>
    
        <?php endwhile; ?>
    
    </div>

<?php else : endif; ?>