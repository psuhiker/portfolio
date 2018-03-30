<section class="copy-assets <?php if( get_sub_field('section_copy_assets_style') == 'red' ) { ?>red<?php } elseif( get_sub_field('section_copy_assets_style') == 'white' ) { ?>white<?php } ?> <?php if( have_rows('section_copy_assets_asset') ): while( have_rows('section_copy_assets_asset') ): the_row(); endwhile; else: echo 'full'; endif; ?>">

    <div class="container">
    
        <?php if( get_sub_field('section_copy_assets_style') == 'red' ) { ?>
        
            <div class="<?php if( have_rows('section_copy_assets_asset') ): while( have_rows('section_copy_assets_asset') ): the_row(); echo ' col-md-6'; endwhile; else: echo 'col-md-8'; endif; ?> text-color--white">
            
                <h2 class="headline--underline"><?php the_sub_field('section_copy_assets_headline'); ?></h2>
                <?php the_sub_field('section_copy_assets_copy'); ?>
                
                <?php if( get_sub_field('section_copy_assets_include_cta') ) { ?>
                
                    <?php $post_object = get_sub_field('section_copy_assets_page'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                
                        <p class="lg-margin--top"><a href="<?php the_permalink(); ?>" class="btn btn-white"><?php the_sub_field('section_copy_assets_cta_text'); ?></a></p>
                    
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                
                <?php } ?>
            
            </div>
            
            <div class="col-md-6 row assets">
            
                <?php if( have_rows('section_copy_assets_asset') ): ?>
                    <?php while ( have_rows('section_copy_assets_asset') ) : the_row(); ?>
                    
                        <?php if( get_sub_field('section_copy_assets_asset_type') == 'page' ) { ?>
                        
                            <div class="col-xs-4">
                            
                                <?php if( get_sub_field('section_copy_assets_asset_image') ) { ?>
                                
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="block" style="background-image: url(<?php the_sub_field('section_copy_assets_asset_image'); ?>);">
                                            <div class="inner"></div>
                                        </div>
                                    </a>
                                
                                <?php } ?>
                            
                            </div>
                            
                            <div class="col-xs-12 col-sm-8 asset">
                            
                                <?php $post_object = get_sub_field('section_copy_assets_asset_page'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                                
                                    <h3><?php the_sub_field('section_copy_assets_asset_title'); ?></h3>
                                    
                                    <?php if( get_sub_field('section_copy_assets_asset_copy') ) { ?>
                                        <div class="lg-margin--bottom">
                                            <?php the_sub_field('section_copy_assets_asset_copy'); ?>
                                        </div>
                                    <?php } ?>
                                    
                                    <p><a href="<?php the_permalink(); ?>" class="btn btn-red"><?php the_sub_field('section_copy_assets_asset_link_text'); ?></a></p>
                                    
                                <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                                
                            </div>
                            
                            <div class="clearfix"></div>
                        
                        <?php } ?>
                        
                        <?php if( get_sub_field('section_copy_assets_asset_type') == 'download' ) { ?>
                        
                            <div class="col-xs-4">
                            
                                <?php if( get_sub_field('section_copy_assets_asset_image') ) { ?>
                                
                                    <?php $post_object = get_sub_field('section_copy_assets_asset_file'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                                        <?php $fileurl = get_field('download_file'); ?>
                                    <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                
                                    <a href="<?php echo $fileurl; ?>" data-tracking="resourceView" target="_blank">
                                        <div class="block" style="background-image: url(<?php the_sub_field('section_copy_assets_asset_image'); ?>);" data-tracking="resourceView" data-url="<?php echo $fileurl; ?>">
                                            <div class="inner"></div>
                                        </div>
                                    </a>
                                
                                <?php } ?>
                            
                            </div>
                            
                            <div class="col-xs-12 col-sm-8 asset">
                            
                                <?php $post_object = get_sub_field('section_copy_assets_asset_file'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                                
                                    <h3><?php the_sub_field('section_copy_assets_asset_title'); ?></h3>
                                    
                                    <?php if( get_sub_field('section_copy_assets_asset_copy') ) { ?>
                                        <div class="lg-margin--bottom">
                                            <?php the_sub_field('section_copy_assets_asset_copy'); ?>
                                        </div>
                                    <?php } ?>
                                    
                                    <p><a href="<?php the_field('download_file'); ?>" class="btn btn-red" target="_blank" data-tracking="resourceView" data-url="<?php the_field('download_file'); ?>"><?php the_sub_field('section_copy_assets_asset_link_text'); ?></a></p>
                                    
                                <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                                
                            </div>
                            
                            <div class="clearfix"></div>
                        
                        <?php } ?>
                        
                        <?php if( get_sub_field('section_copy_assets_asset_type') == 'external' ) { ?>
                        
                            <div class="col-xs-4">
                            
                                <?php if( get_sub_field('section_copy_assets_asset_image') ) { ?>
                                
                                    <a href="<?php the_sub_field('section_copy_assets_asset_url'); ?>" data-tracking="externalLink" target="_blank">
                                        <div class="block" style="background-image: url(<?php the_sub_field('section_copy_assets_asset_image'); ?>);" data-tracking="externalLink">
                                            <div class="inner"></div>
                                        </div>
                                    </a>
                                
                                <?php } ?>
                            
                            </div>
                            
                            <div class="col-xs-12 col-sm-8 asset">
                            
                                <h3><?php the_sub_field('section_copy_assets_asset_title'); ?></h3>
                                
                                <?php if( get_sub_field('section_copy_assets_asset_copy') ) { ?>
                                    <div class="lg-margin--bottom">
                                        <?php the_sub_field('section_copy_assets_asset_copy'); ?>
                                    </div>
                                <?php } ?>
                                
                                <p><a href="<?php the_sub_field('section_copy_assets_asset_url'); ?>" class="btn btn-red" target="_blank" data-tracking="externalLink"><?php the_sub_field('section_copy_assets_asset_link_text'); ?></a></p>
                                
                            </div>
                            
                            <div class="clearfix"></div>
                        
                        <?php } ?>
                    
                    <?php endwhile; else : ?>
                <?php endif; ?>
            
            </div>
        
        <?php } ?>
        
        <?php if( get_sub_field('section_copy_assets_style') == 'white' ) { ?>
        
            <div class="<?php if( have_rows('section_copy_assets_asset') ): while( have_rows('section_copy_assets_asset') ): the_row(); echo ' col-md-6'; endwhile; else: echo 'col-md-8'; endif; ?>">
            
                <h2 class="headline lg-margin--bottom"><?php the_sub_field('section_copy_assets_headline'); ?></h2>
                <?php the_sub_field('section_copy_assets_copy'); ?>
                
                <?php if( get_sub_field('section_copy_assets_include_cta') ) { ?>
                
                    <?php $post_object = get_sub_field('section_copy_assets_page'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                
                        <p class="lg-margin--top"><a href="<?php the_permalink(); ?>" class="btn btn-red"><?php the_sub_field('section_copy_assets_cta_text'); ?></a></p>
                    
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                
                <?php } ?>
            
            </div>
            
            <div class="col-md-6 row assets">
            
                <?php if( have_rows('section_copy_assets_asset') ): ?>
                    <?php while ( have_rows('section_copy_assets_asset') ) : the_row(); ?>
            
                        <?php if( get_sub_field('section_copy_assets_asset_type') == 'page' ) { ?>
                        
                            <div class="col-xs-4 col-xs-offset-1 asset text-center">
                            
                                <?php $post_object = get_sub_field('section_copy_assets_asset_page'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                                
                                    <?php if( get_sub_field('section_copy_assets_asset_image') ) { ?>
                                    
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="block" style="background-image: url(<?php the_sub_field('section_copy_assets_asset_image'); ?>);">
                                                <div class="inner"></div>
                                            </div>
                                        </a>
                                        <div class="clearfix"></div>
                                    
                                    <?php } ?>
                                
                                    <h3>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_sub_field('section_copy_assets_asset_title'); ?>
                                        </a>
                                    </h3>
                                    
                                <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            
                            </div>
                            <div class="col-xs-1"></div>
                        
                        <?php } ?>
                        
                        <?php if( get_sub_field('section_copy_assets_asset_type') == 'download' ) { ?>
                        
                            <div class="col-xs-4 col-xs-offset-1 asset text-center">
                            
                                <?php $post_object = get_sub_field('section_copy_assets_asset_file'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                                
                                    <?php if( get_sub_field('section_copy_assets_asset_image') ) { ?>
                                    
                                        <a href="<?php the_field('download_file'); ?>" data-tracking="resourceView" target="_blank">
                                            <div class="block" style="background-image: url(<?php the_sub_field('section_copy_assets_asset_image'); ?>);" data-tracking="resourceView">
                                                <div class="inner"></div>
                                            </div>
                                        </a>
                                        <div class="clearfix"></div>
                                    
                                    <?php } ?>
                                
                                    <h3>
                                        <a href="<?php the_field('download_file'); ?>" target="_blank" data-tracking="resourceView">
                                            <?php the_sub_field('section_copy_assets_asset_title'); ?>
                                        </a>
                                    </h3>
                                    
                                <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            
                            </div>
                            <div class="col-xs-1"></div>
                        
                        <?php } ?>
                        
                        <?php if( get_sub_field('section_copy_assets_asset_type') == 'external' ) { ?>
                        
                            <div class="col-xs-4 col-xs-offset-1 asset text-center">
                            
                                <?php if( get_sub_field('section_copy_assets_asset_image') ) { ?>
                                
                                    <a href="<?php the_sub_field('section_copy_assets_asset_url'); ?>" data-tracking="externalLink" target="_blank">
                                        <div class="block" style="background-image: url(<?php the_sub_field('section_copy_assets_asset_image'); ?>);" data-tracking="externalLink">
                                            <div class="inner"></div>
                                        </div>
                                    </a>
                                    <div class="clearfix"></div>
                                
                                <?php } ?>
                            
                                <h3>
                                    <a href="<?php the_sub_field('section_copy_assets_asset_url'); ?>" target="_blank" data-tracking="externalLink">
                                        <?php the_sub_field('section_copy_assets_asset_title'); ?>
                                    </a>
                                </h3>
                            
                            </div>
                            <div class="col-xs-1"></div>
                        
                        <?php } ?>
                
                    <?php endwhile; else : ?>
                <?php endif; ?>
            
            </div>
        
        <?php } ?>
    
    </div>

</section>