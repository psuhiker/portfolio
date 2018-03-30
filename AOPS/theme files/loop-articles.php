<div class="container">
    <div class="padding copy">

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <?php if ( is_home() ) { ?>
            
                <div class="item">
                    <div class="padding">
                    
                        <h1>IS HOME</h1>
                
                    </div>
                </div>
            
            <?php } elseif ( is_single() ) { ?>

                <div class="grid_8">
                    <div class="padding">
                    
                        <h1><?php the_title(); ?></h1>
                        <h1>IS SINGLE</h1>
                        <?php the_content(); ?>
                    
                    </div>
                </div>
                
                <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
                
                    <div class="grid_4">
                        <div class="padding">
                        
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large', 'single-post-thumbnail' ); ?>
                            <img src="<?php echo $image[0]; ?>" class="border">
                    
                        </div>
                    </div>
                
                <?php } ?>
                
            <?php } elseif ( is_archive() ) { ?>
            
                <div class="item">
                    <div class="padding">
                    
                        <h1>IS ARCHIVE</h1>
                
                    </div>
                </div>
            
            <?php } ?>
    
        <?php endwhile; ?>
        <?php else : ?>
        
        	<h1 class="center">Not Found</h1>
         	<p class="center">Sorry, but this page cannot be found.</p>
        
        <?php endif; ?>
        
        <?php include (TEMPLATEPATH . '/include-pagination.php' ); ?>
        
    </div>
</div>