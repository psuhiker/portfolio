<section class="banner <?php if( get_sub_field('section_banner_style') == 'navy' ) { ?>navy<?php } elseif( get_sub_field('section_banner_style') == 'red' ) { ?>red<?php } ?>">

    <div class="bg" style="background-image: url(<?php the_sub_field('section_banner_background_image'); ?>);"></div>

    <div class="container">
    
        <div class="col-md-6 col-md-offset-6">
        
            <?php if( get_sub_field('section_banner_headline') ) { ?>
                <h2 class="lg-margin--bottom">
                    <?php the_sub_field('section_banner_headline'); ?>
                </h2>
            <?php } ?>
            
            <?php the_sub_field('section_banner_copy'); ?>
            
            <?php if( get_sub_field('section_banner_include_cta') ) { ?>
            
                <?php $post_object = get_sub_field('section_banner_page'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                
                    <?php if( get_sub_field('section_banner_style') == 'navy' ) { ?>
            
                        <p class="lg-margin--top"><a href="<?php the_permalink(); ?>" class="btn btn-red"><?php the_sub_field('section_banner_cta_text'); ?></a></p>
                        
                    <?php } ?>
                        
                    <?php if( get_sub_field('section_banner_style') == 'red' ) { ?>
                    
                        <p class="lg-margin--top"><a href="<?php the_permalink(); ?>" class="btn btn-white"><?php the_sub_field('section_banner_cta_text'); ?></a></p>
                    
                    <?php } ?>
                
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            
            <?php } ?>
        
        </div>
    
    </div>

</section>