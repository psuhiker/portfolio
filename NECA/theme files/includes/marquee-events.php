<?php $marquee = get_field('include_marquee', 8); if( $marquee && in_array('yes', $marquee) ) : ?>

    <section class="marquee" style="background-image: url(<?php the_field('marquee_image', 8); ?>);">
        <div class="container">
            <div class="row">
                
                <div class="banner">
                
                	<?php // include (TEMPLATEPATH . '/images/bg-banner.svg' ); ?>
                	
                	<h1><?php echo get_the_title(8); ?></h1>
                		
                </div>
                
                <?php // include (TEMPLATEPATH . '/images/marquee-right-shape.svg' ); ?>
                
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    
<?php else : ?>

    <div class="header divider"></div>
    
<?php endif; ?>