<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

    <?php include (TEMPLATEPATH . '/include-marquee.php' ); ?>
    
    <?php if ( is_page_template( 'template-full-width.php' ) ) { ?>
        <div class="container section default">
            <div class="grid_12">
                <div class="padding">
            
                    <?php the_content(); ?>
            
                </div>
            </div>
            <div class="clear">&nbsp;</div>
        </div>
    <?php } else { ?>
        <div class="container section default">
            <div class="grid_10">
                <div class="padding">
            
                    <?php the_content(); ?>
            
                </div>
            </div>
            <div class="clear">&nbsp;</div>
        </div>
    <?php } ?>
    
    <?php while(the_flexible_field("sections")): ?>
    
        <?php if(get_row_layout() == "section_text"): ?>
        
            <?php include (TEMPLATEPATH . '/section-text.php' ); ?>
                         
        <?php endif; ?>
        
        <?php if(get_row_layout() == "section_text_left"): ?>
        
            <?php include (TEMPLATEPATH . '/section-text-left.php' ); ?>
                         
        <?php endif; ?>
        
        <?php if(get_row_layout() == "section_double"): ?>
        
            <?php include (TEMPLATEPATH . '/section-double.php' ); ?>
            
        <?php endif; ?>
        
        <?php if(get_row_layout() == "section_double_border"): ?>
        
            <?php include (TEMPLATEPATH . '/section-double-border.php' ); ?>
            
        <?php endif; ?>
        
        <?php if(get_row_layout() == "section_triple"): ?>
        
            <?php include (TEMPLATEPATH . '/section-triple.php' ); ?>
            
        <?php endif; ?>
        
        <?php // if(get_row_layout() == "section_blocks"): ?>
        
            <?php // include (TEMPLATEPATH . '/section-blocks.php' ); ?>
            
        <?php // endif; ?>
        
        <?php if(get_row_layout() == "section_html"): ?>
        
            <?php include (TEMPLATEPATH . '/section-html.php' ); ?>
        
        <?php endif; ?>
        
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
    
    <?php if(have_rows('page_links' )) { ?>
    
        <?php include (TEMPLATEPATH . '/section-page-links.php' ); ?>
            
    <?php } ?>
    
    
<?php endwhile; ?>
<?php else : ?>

	<h1 class="center">Not Found</h1>
 	<p class="center">Sorry, but this page cannot be found.</p>

<?php endif; ?>