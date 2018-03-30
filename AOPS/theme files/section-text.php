<!-- Section: Text & Copy -->

    <?php if(get_sub_field('section_text_background' )) { ?>
        <div class="grid_12 section text image <?php the_sub_field("section_text_add_class"); ?>" style="background-image: url(<?php the_sub_field('section_text_background') ?>);">
    <?php } else { ?>
        <div class="grid_12 section text nopadding <?php the_sub_field("section_text_add_class"); ?>">
    <?php } ?>
    
        <div class="container">
            <div class="padding">
            
                <div class="grid_8 float none">
                
                    <?php if(get_sub_field('section_text_headline' )) { ?>
                        <h3><?php the_sub_field('section_text_headline') ?></h3>
                    <?php } ?>
                    
                    <?php if(get_sub_field('section_text_copy' )) { ?>
                        <?php the_sub_field('section_text_copy') ?>
                    <?php } ?>
                    
                    <?php if(get_sub_field('section_text_link' )) { ?>
                        <div class="link">
                            <a href="<?php the_sub_field('section_text_link') ?>" class="button blue large"><?php if(get_sub_field('section_text_link_text')) { echo get_sub_field('section_text_link_text'); } else { ?> Learn More <?php } ?></a>
                        </div>
                    <?php } ?>
                    
                    <?php if(get_sub_field('section_text_link_custom' )) { ?>
                        <div class="link">
                            <a href="<?php the_sub_field('section_text_link_custom') ?>" class="button blue large" target="_blank"><?php if(get_sub_field('section_text_link_text')) { echo get_sub_field('section_text_link_text'); } else { ?> Learn More <?php } ?></a>
                        </div>
                    <?php } ?>
                    
                    <div class="clear"></div>
                
                </div>
            
            </div>
        </div>
    
    </div>