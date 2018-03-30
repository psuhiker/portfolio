<?php $count = count(get_field('page_links')); ?>

    <div class="clear">&nbsp;</div>
        <div class="section links post-object">
            <div class="container">
    
                <?php while(the_flexible_field("page_links")): ?>
        
                    <?php if(get_row_layout() == "add_a_page_link"): ?>
                    <!-- Page Links -->
                    
                        <?php if ($count == '1') { ?>
                            <div class="grid_12">
                        <?php } elseif ($count == '2') { ?>
                            <div class="grid_6">
                        <?php } elseif ($count == '3') { ?>
                            <div class="grid_4">
                        <?php } elseif ($count == '4') { ?>
                            <div class="grid_3">
                        <?php } elseif ($count == '5') { ?>
                            <div class="grid_20">
                        <?php } elseif ($count == '6') { ?>
                            <div class="grid_2">
                        <?php } ?>
                                <div class="padding">
                                
                                    <div class="link">
                                    
                                        <?php if(get_sub_field('add_a_page_link_page_link' )) { ?>
                        
                                            <?php
                                                $post_object = get_sub_field('add_a_page_link_page_link');
                                                $type = get_post_type();
                                                if( $post_object ): 
                                                    $post = $post_object;
                                                	setup_postdata( $post ); 
                                            ?>
                                            
                                                <a href="<?php the_permalink(); ?>"><?php the_sub_field('add_a_page_link_page_title') ?></a>
                                                
                                                
                                                
                                            <?php endif; ?>
                                            <?php wp_reset_postdata(); ?>
                                            
                                        <?php } ?>
                                        
                                        <?php if(get_sub_field('add_a_page_link_page_link_custom' )) { ?>
                                        
                                            <a href="<?php the_sub_field('add_a_page_link_page_link_custom') ?>"><?php the_sub_field('add_a_page_link_page_title') ?></a>
                                        
                                        <?php } ?>
                                
                                    </div>
                                </div>
                                
                                <?php if(get_sub_field('add_a_page_link_subtitle' )) { ?>
                                
                                    <p class="subtitle"><?php the_sub_field('add_a_page_link_subtitle') ?></p>
                                    
                                <?php } ?>
                                
                            </div>
                    
                    <?php endif; ?>
                                
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                
                <div class="clear"></div>
                    
            </div>
        </div>