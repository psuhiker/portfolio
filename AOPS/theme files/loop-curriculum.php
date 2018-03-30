<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

    <?php include (TEMPLATEPATH . '/include-marquee.php' ); ?>
    
    <div class="container section default">
        <div class="grid_10">
            <div class="padding">
        
                <?php the_content(); ?>
        
            </div>
        </div>
    </div>
    
    <div class="section zip">
        <div class="container">
    
            <?php while(the_flexible_field("add_attachments")): ?>
            
                <?php if(get_row_layout() == "add_an_attachment"): ?>
                
                    <div class="grid_4">
                        <div class="padding">
                            <a href="<?php the_sub_field('zip_file') ?>" target="_blank" class="button red large" onClick="ga('send', 'event', '<?php the_title(); ?> Download', 'Click', '<?php the_sub_field('zip_title') ?>');"><?php the_sub_field('zip_title') ?></a>
                        </div>
                    </div>
                
                <?php endif; ?>
                
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            
            <div class="clear">&nbsp;</div>
    
        </div>
    </div>
    
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
        
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
    
    
<?php endwhile; ?>
<?php else : ?>

	<h1 class="center">Not Found</h1>
 	<p class="center">Sorry, but this page cannot be found.</p>

<?php endif; ?>