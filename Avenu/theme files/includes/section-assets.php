<section class="assets">

    <div class="container">
    
        <?php if( get_sub_field('section_assets_headline') ) { ?>
        
            <div class="col-xs-12 text-center">
    
                <h2 class="headline--underline">
                    <?php the_sub_field('section_assets_headline'); ?>
                </h2>
            
            </div>
        
        <?php } ?>
    
        <div class="col-xs-12 row assets">
        
            <?php if( have_rows('section_assets_asset') ): ?>
                <?php while ( have_rows('section_assets_asset') ) : the_row(); ?>
        
                    <?php if( get_sub_field('section_assets_asset_type') == 'page' ) { ?>
                    
                        <div class="col-sm-6">
                    
                            <?php if( get_sub_field('section_assets_asset_image') ) { ?>
                            
                                <div class="col-xs-4">
                            
                                    <div class="block" style="background-image: url(<?php the_sub_field('section_assets_asset_image'); ?>);">
                                        <div class="inner"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                
                                </div>
                            
                            <?php } ?>
                        
                            <div class="<?php if( get_sub_field('section_assets_asset_image') ) { ?>col-xs-8<?php } else { ?>col-xs-12<?php } ?> asset xl-margin--bottom <?php if( get_sub_field('section_assets_asset_image') ) { } else { ?>text-center<?php } ?>">
                            
                                <?php $post_object = get_sub_field('section_assets_asset_page'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                                
                                    <h3>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_sub_field('section_assets_asset_title'); ?>
                                        </a>
                                    </h3>
                                    
                                    <?php if( get_sub_field('section_assets_asset_copy') ) { ?>
                                        <div class="lg-margin--bottom">
                                            <?php the_sub_field('section_assets_asset_copy'); ?>
                                        </div>
                                    <?php } ?>
                                    
                                    <p><a href="<?php the_permalink(); ?>" class="btn btn-red"><?php the_sub_field('section_assets_asset_link_text'); ?></a></p>
                                  
                                <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            
                            </div>
                            
                            <div class="clearfix"></div>
                        
                        </div>
                    
                    <?php } ?>
                    
                    <?php if( get_sub_field('section_assets_asset_type') == 'download' ) { ?>
                    
                        <div class="col-sm-6">
                        
                            <?php if( get_sub_field('section_assets_asset_image') ) { ?>
                                
                                <div class="col-xs-4">
                                
                                    <div class="block" style="background-image: url(<?php the_sub_field('section_assets_asset_image'); ?>);">
                                        <div class="inner"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    
                                </div>
                                
                            <?php } ?>
                            
                            <div class="<?php if( get_sub_field('section_assets_asset_image') ) { ?>col-xs-8<?php } else { ?>col-xs-12<?php } ?> asset xl-margin--bottom <?php if( get_sub_field('section_assets_asset_image') ) { } else { ?>text-center<?php } ?>">
                                
                                <?php $post_object = get_sub_field('section_assets_asset_file'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                                    
                                    <h3>
                                        <a href="<?php the_field('download_file'); ?>" target="_blank">
                                            <?php the_sub_field('section_assets_asset_title'); ?>
                                        </a>
                                    </h3>
                                        
                                    <?php if( get_sub_field('section_assets_asset_copy') ) { ?>
                                        <div class="lg-margin--bottom">
                                            <?php the_sub_field('section_assets_asset_copy'); ?>
                                        </div>
                                    <?php } ?>
                                        
                                    <p><a href="<?php the_field('download_file'); ?>" class="btn btn-red" target="_blank"><?php the_sub_field('section_assets_asset_link_text'); ?></a></p>
                                      
                                <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                                
                            </div>
                                
                            <div class="clearfix"></div>
                            
                        </div>
                    
                    <?php } ?>
                    
                    <?php if( get_sub_field('section_assets_asset_type') == 'external' ) { ?>
                    
                        <div class="col-sm-6">
                        
                            <?php if( get_sub_field('section_assets_asset_image') ) { ?>
                                
                                <div class="col-xs-4">
                                
                                    <div class="block" style="background-image: url(<?php the_sub_field('section_assets_asset_image'); ?>);">
                                        <div class="inner"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    
                                </div>
                                
                            <?php } ?>
                            
                            <div class="<?php if( get_sub_field('section_assets_asset_image') ) { ?>col-xs-8<?php } else { ?>col-xs-12<?php } ?> asset xl-margin--bottom <?php if( get_sub_field('section_assets_asset_image') ) { } else { ?>text-center<?php } ?>">
                                
                                <h3>
                                    <a href="<?php the_sub_field('section_assets_asset_url'); ?>" target="_blank" data-tracking="externalLink">
                                        <?php the_sub_field('section_assets_asset_title'); ?>
                                    </a>
                                </h3>
                                    
                                <?php if( get_sub_field('section_assets_asset_copy') ) { ?>
                                    <div class="lg-margin--bottom">
                                        <?php the_sub_field('section_assets_asset_copy'); ?>
                                    </div>
                                <?php } ?>
                                    
                                <p><a href="<?php the_sub_field('section_assets_asset_url'); ?>" class="btn btn-red" target="_blank" data-tracking="externalLink"><?php the_sub_field('section_assets_asset_link_text'); ?></a></p>
                                
                            </div>
                                
                            <div class="clearfix"></div>
                            
                        </div>
                    
                    <?php } ?>
                    
                    <?php if( get_sub_field('section_assets_asset_type') == 'none' ) { ?>
                    
                        <div class="col-sm-6">
                    
                            <?php if( get_sub_field('section_assets_asset_image') ) { ?>
                            
                                <div class="col-xs-4">
                            
                                    <div class="block" style="background-image: url(<?php the_sub_field('section_assets_asset_image'); ?>);">
                                        <div class="inner"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                
                                </div>
                            
                            <?php } ?>
                        
                            <div class="<?php if( get_sub_field('section_assets_asset_image') ) { ?>col-xs-8<?php } else { ?>col-xs-12<?php } ?> asset xl-margin--bottom <?php if( get_sub_field('section_assets_asset_image') ) { } else { ?>text-center<?php } ?>">
                            
                                <h3>
                                    <?php the_sub_field('section_assets_asset_title'); ?>
                                </h3>
                                
                                <?php if( get_sub_field('section_assets_asset_copy') ) { ?>
                                    <div class="lg-margin--bottom">
                                        <?php the_sub_field('section_assets_asset_copy'); ?>
                                    </div>
                                <?php } ?>
                            
                            </div>
                            
                            <div class="clearfix"></div>
                        
                        </div>
                    
                    <?php } ?>
            
                <?php endwhile; else : ?>
            <?php endif; ?>
        
        </div>
    
    </div>

</section>