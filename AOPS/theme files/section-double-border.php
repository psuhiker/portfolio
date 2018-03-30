<!-- Section: Double Border -->

    <div class="grid_12 section double border">
    
        <div class="container">
            
            <div class="grid_6 left">
            
                <?php if(get_sub_field('section_double_border_left_block_image' )) { ?>
                    <div class="image" style="background-image: url(<?php the_sub_field('section_double_border_left_block_image') ?>);">&nbsp;</div>
                    <div class="clear">&nbsp;</div>
                <?php } ?>
                
                <div class="grid_12">
                    <div class="padding copy">
            
                        <?php if(get_sub_field('section_double_border_left_block_title' )) { ?>
                            <h3><?php the_sub_field('section_double_border_left_block_title') ?></h3>
                        <?php } ?>
                            
                        <?php if(get_sub_field('section_double_border_left_block_copy' )) { ?>
                            <?php the_sub_field('section_double_border_left_block_copy') ?>
                        <?php } ?>
                            
                        <?php if(get_sub_field('section_double_border_left_block_link' )) { ?>
                            <div class="link">
                                <a href="<?php the_sub_field('section_double_border_left_block_link') ?>" class="button red small"><?php if(get_sub_field('section_double_border_left_block_link_text')) { echo get_sub_field('section_double_border_left_block_link_text'); } else { ?> Learn More <?php } ?></a>
                            </div>
                        <?php } ?>
                        
                        <?php if(get_sub_field('section_double_border_left_block_link_custom' )) { ?>
                            <div class="link">
                                <a href="<?php the_sub_field('section_double_border_left_block_link_custom') ?>" class="button red small" target="_blank"><?php if(get_sub_field('section_double_border_left_block_link_text')) { echo get_sub_field('section_double_border_left_block_link_text'); } else { ?> Learn More <?php } ?></a>
                            </div>
                        <?php } ?>
                    
                    </div>
                </div>
                
            </div>
            
            <div class="grid_6 right">
            
                <?php if(get_sub_field('section_double_border_right_block_image' )) { ?>
                    <div class="image" style="background-image: url(<?php the_sub_field('section_double_border_right_block_image') ?>);">&nbsp;</div>
                    <div class="clear">&nbsp;</div>
                <?php } ?>
                
                <div class="grid_12">
                    <div class="padding copy">
            
                        <?php if(get_sub_field('section_double_border_right_block_title' )) { ?>
                            <h3><?php the_sub_field('section_double_border_right_block_title') ?></h3>
                        <?php } ?>
                            
                        <?php if(get_sub_field('section_double_border_right_block_copy' )) { ?>
                            <?php the_sub_field('section_double_border_right_block_copy') ?>
                        <?php } ?>
                            
                        <?php if(get_sub_field('section_double_border_right_block_link' )) { ?>
                            <div class="link">
                                <a href="<?php the_sub_field('section_double_border_right_block_link') ?>" class="button red small"><?php if(get_sub_field('section_double_border_right_block_link_text')) { echo get_sub_field('section_double_border_right_block_link_text'); } else { ?> Learn More <?php } ?></a>
                            </div>
                        <?php } ?>
                        
                        <?php if(get_sub_field('section_double_border_right_block_link_custom' )) { ?>
                            <div class="link">
                                <a href="<?php the_sub_field('section_double_border_right_block_link_custom') ?>" class="button red small" target="_blank"><?php if(get_sub_field('section_double_border_right_block_link_text')) { echo get_sub_field('section_double_border_right_block_link_text'); } else { ?> Learn More <?php } ?></a>
                            </div>
                        <?php } ?>
                    
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>