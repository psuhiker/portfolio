<!-- Section: Text & Copy Left Aligned -->

    <?php if(get_sub_field('section_text_left_background' )) { ?>
        <div class="grid_12 section text left image" style="background-image: url(<?php the_sub_field('section_text_left_background') ?>);">
    <?php } else { ?>
        <div class="grid_12 section text left nopadding">
    <?php } ?>
    
        <div class="container">
            <div class="padding">
            
                <div class="grid_6 float none">
                
                    <?php if(get_sub_field('section_text_left_headline' )) { ?>
                        <h3><?php the_sub_field('section_text_left_headline') ?></h3>
                    <?php } ?>
                    
                    <?php if(get_sub_field('section_text_left_copy' )) { ?>
                        <?php the_sub_field('section_text_left_copy') ?>
                    <?php } ?>
                    
                    <?php if(get_sub_field('section_text_left_link' )) { ?>
                        <div class="link">
                            <a href="<?php the_sub_field('section_text_left_link') ?>" class="button blue large"><?php if(get_sub_field('section_text_left_link_text')) { echo get_sub_field('section_text_left_link_text'); } else { ?> Learn More <?php } ?></a>
                        </div>
                    <?php } ?>
                    
                    <?php if(get_sub_field('section_text_left_link_custom' )) { ?>
                        <div class="link">
                            <a href="<?php the_sub_field('section_text_left_link_custom') ?>" class="button blue large" target="_blank"><?php if(get_sub_field('section_text_left_link_text')) { echo get_sub_field('section_text_left_link_text'); } else { ?> Learn More <?php } ?></a>
                        </div>
                    <?php } ?>
                
                </div>
            
            </div>
        </div>
    
    </div>