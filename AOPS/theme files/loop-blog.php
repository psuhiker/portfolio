<div class="container">
    <div class="padding copy <?php if ( is_single() ) { echo 'w-bg single-wrap'; } ?>">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <?php if ( is_home() ) { ?>
                <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
                
                    <div class="post-wrapper grid_12">
                        <div class="post-block blog-table clearfix flex">
                            <div class="grid_8 cat-page-wrapper">
                                <div class="table-block">
                                    <h3 class="b-font feature-title blog-title"><a href="<?php echo get_permalink(); ?>" data-label="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></h3>
                                    <span><?php echo get_the_date('l, F jS'); ?></span>
                                    <div class="grid_12">
                                        <p><?php the_excerpt(); ?></p>
                                        <?php if(is_category('news')) { ?>
                                            <?php 
                                                $categories = get_the_category();
                                                if(!empty($categories)) { ?>
                                                    <div>
                                                        <p>
                                                            <?php $category_counter = 0; foreach($categories as $category) { ?>
                                                                <?php $category_counter++; ?>
                                                                <?php if ($category_counter < 3) { ?>
                                                                    <span class=""><a class="w-font blog-category b-bg" href="<?php echo get_site_url() . "/category/" . $category->slug; ?>"><?php echo $category->name; ?></a></span>
                                                                <?php } else { break; } ?>
                                                            <?php } ?>
                                                        </p>
                                                    </div>
                                                <?php } ?>
                                        <?php } ?>
                                    </div>
                                    <div class="grid_12 vp-25">
                                        <div class="left">
                                            <a href="<?php echo get_permalink(); ?>" class="button red small left" data-title="<?php the_title(); ?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large', 'single-post-thumbnail' ); ?>
                            <div class="grid_4 feature-image" style="background-image: url(<?php echo $image[0]; ?>)"></div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="post-wrapper grid_12">
                        <div class="post-block clearfix flex">
                            <div class="grid_12 cat-page-wrapper">
                                <div class="grid_8">
                                    <h3 class="b-font feature-title blog-title"><a href="<?php echo get_permalink(); ?>" data-label="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></h3>
                                    <span><?php echo get_the_date('l, F jS'); ?></span>
                                </div>
                                <div class="grid_12">
                                    <div class="grid_8">
                                        <p class="para--ntm"><?php the_excerpt(); ?></p>
                                        <?php if(is_category('news')) { ?>
                                            <?php 
                                                $categories = get_the_category();
                                                if(!empty($categories)) { ?>
                                                    <div>
                                                        <p>
                                                            <?php $category_counter = 0; foreach($categories as $category) { ?>
                                                                <?php $category_counter++; ?>
                                                                <?php if ($category_counter < 3) { ?>
                                                                    <span class=""><a class="w-font blog-category b-bg" href="<?php echo get_site_url() . "/category/" . $category->slug; ?>"><?php echo $category->name; ?></a></span>
                                                                <?php } else { break; } ?>
                                                            <?php } ?>
                                                        </p>
                                                    </div>
                                                <?php } ?>
                                        <?php } ?>
                                        <div class="grid_4 lh-50">
                                            <a href="<?php echo get_permalink(); ?>" class="button red small">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="clear">&nbsp;</div>
                
                <?php } ?>
            
            <?php } elseif ( is_single() ) { ?>

                <div class="w-bg">
                    <div class="vp-25">
                        <div id="heading-wrap-main">
                            <h1 class="text-center blog-post-title"><?php the_title(); ?></h1>
                            <div class="text-center"><?php echo get_the_date('l, F jS'); ?></div>
                        </div>
                    </div>
                    
                    <div id="article-copy" class="grid_8">
                        <div class="clear"></div>
                        <div class="blog-copy--news">
                            <?php if( have_rows('image_gallery') ): ?>
                                <?php $counter = 0; ?>
                                <div class="gallery">
                                    <div class="gallery-container">
                                        <div class="images">
                                            <?php while ( have_rows('image_gallery') ) : the_row(); ?>
                                                <?php 
                                                    $counter++;
                                                    $image = get_sub_field('image');
                                                    $image_url = $image['url'];
                                                    $image_caption = $image['caption'];
                                                ?>
                                                <?php if ($counter < 6) { ?>
                                                    <a class="fancybox" rel="gallery" data-fancybox="gallery" href="<?php echo $image_url; ?>" data-caption="<?php echo $image_caption; ?>"><div class="gallery-image" style="background-image: url(<?php echo $image_url; ?>)"></div></a>
                                                <?php } elseif ($counter == 6) { ?>
                                                    <a class="fancybox" rel="gallery" data-fancybox="gallery" href="<?php echo $image_url; ?>" data-caption="<?php echo $image_caption; ?>"><div class="gallery-image" style="background-image: url(<?php echo $image_url; ?>)">
                                                        <?php if (count(get_field_object('image_gallery')['value']) > 6): ?>
                                                            <div class="img-filter"></div>
                                                            <?php 
                                                                $count = (count(get_field_object('image_gallery')['value'])) - 6;
                                                            ?>
                                                            <div class="image-count">
                                                                <p class="count text-center">+ <?php echo $count; ?></p>
                                                                <p class="more-photos">MORE PHOTOS</p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div></a>
                                                <?php } else { ?>
                                                    <a class="fancybox" rel="gallery" data-fancybox="gallery" href="<?php echo $image_url; ?>" data-caption="<?php echo $image_caption; ?>"></a>
                                                <?php } ?>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php the_content(); ?>
                        </div>
                        <script>
                            jQuery(document).ready(function(){
                                jQuery('.related-posts').clone().appendTo('.mobile-related-posts');
                            });
                        </script>
                        <div class="mobile-related-posts">
                            
                        </div>
                    </div>
                    
                    <div id="sidebar" class="grid_4">
                        <div class="sidebar">
                            <div id="heading-wrap-side">
                                    <h1 class="text-center blog-post-title"><?php the_title(); ?></h1>
                                    <div class="grid_12 vp-25">
                                        <div class="flex justify-center">
                                            <div class="left">
                                                <div class="g-font right"><div class="clock"></div><div class="posted-time"><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></div></div><div id="heart-wrapper" class="right" data-blogtitle="<?php the_title(); ?>"><?php if(function_exists('wp_ulike')) wp_ulike('get'); ?></div>
                                            </div>
                                            <div class="blog-social left">
                                                <?php include (TEMPLATEPATH . '/include-blog-social.php' ); ?>
                                            </div>
                                        </div>
                                        <?php 
                                        $taxonomy_string = get_post_taxonomies($post_id)[1];
                                        $post_taxonomy = get_taxonomy($taxonomy_string);
                                        $taxonomy_slug = $post_taxonomy->rewrite['slug'];
                                        $terms = get_the_terms($post->ID, $taxonomy_string);
                                        if(!empty($terms)) { ?>
                                        <div class="clear"></div>
                                            <div class="flex justify-center">
                                                <div class="blog-category-wrapper">
                                                    <p>
                                                        <?php $term_counter = 0; foreach($terms as $term) { ?>
                                                            <?php $term_counter++; ?>
                                                            <?php if ($term_counter < 3) { ?>
                                                                <span class=""><a class="w-font blog-category b-bg" href="<?php echo get_site_url() . "/" . $taxonomy_slug . "/" . $term->slug; ?>"><?php echo $term->name; ?></a></span>
                                                            <?php } else { break; } ?>
                                                        <?php } ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <div class="grid_12 related-posts">
                                <?php 
                                    $categories = get_the_terms($post->ID, $taxonomy_string);
                                    $terms = array();
                                    foreach ($categories as $category) {
                                        array_push($terms, $category->slug);
                                    }
                                ?>
                                <?php 
                                        $args = array( 
                                            'post_type' => 'post',
                                            'posts_per_page' => 3,
                                            'category_name' => $terms,
                                        ); 
                                        $loop = new WP_Query($args);
                                    ?>
                                     <?php if ( $loop->have_posts() ) : ?>
                                        <h4 class="text-center b-font sidebar-feed-heading">Related Posts</h4>
                                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                            <?php if ($post->ID != $main_post_id): ?>
                                                <?php 
                                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '', 'single-post-thumbnail' );
                                                 ?>
                                                <?php if (!empty(get_post_thumbnail_id( $post->ID ))) { ?>
                                                    <div class="grid_12">
                                                        <div class="sidebar-feed">
                                                            <div class="sidebar-image" style="background-image: url(<?php echo $image[0]; ?>)"></div>
                                                            <h4 class="related-post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                        </div>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="grid_12">
                                                        <div class="sidebar-feed">
                                                            <h4 class="related-post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                            <p class="no-margin"><i><?php echo get_the_excerpt(); ?></i></p>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
    
                                    <?php endif; wp_reset_postdata(); ?>
    
                            </div>
                        </div>
                    </div>
                </div>
                
            <?php } elseif ( is_archive() ) { ?>
            
                    
                <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
                
                    <div class="post-wrapper grid_12">
                        <div class="post-block blog-table clearfix flex">
                            <div class="grid_8 cat-page-wrapper">
                                <div class="table-block">
                                    <h3 class="b-font feature-title blog-title"><a href="<?php echo get_permalink(); ?>" data-label="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></h3>
                                    <span><?php echo get_the_date('l, F jS'); ?></span>
                                    <div class="grid_12">
                                        <p><?php the_excerpt(); ?></p>
                                        <?php if(is_category('news')) { ?>
                                            <?php 
                                                $categories = get_the_category();
                                                if(!empty($categories)) { ?>
                                                    <div>
                                                        <p>
                                                            <?php $category_counter = 0; foreach($categories as $category) { ?>
                                                                <?php $category_counter++; ?>
                                                                <?php if ($category_counter < 3) { ?>
                                                                    <span class=""><a class="w-font blog-category b-bg" href="<?php echo get_site_url() . "/category/" . $category->slug; ?>"><?php echo $category->name; ?></a></span>
                                                                <?php } else { break; } ?>
                                                            <?php } ?>
                                                        </p>
                                                    </div>
                                                <?php } ?>
                                        <?php } ?>
                                    </div>
                                    <div class="grid_12 vp-25">
                                        <div class="left">
                                            <a href="<?php echo get_permalink(); ?>" class="button red small left" data-title="<?php the_title(); ?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large', 'single-post-thumbnail' ); ?>
                            <div class="grid_4 feature-image" style="background-image: url(<?php echo $image[0]; ?>)"></div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="post-wrapper grid_12">
                        <div class="post-block clearfix flex">
                            <div class="grid_12 cat-page-wrapper">
                                <div class="grid_8">
                                    <h3 class="b-font feature-title blog-title"><a href="<?php echo get_permalink(); ?>" data-label="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></h3>
                                    <span><?php echo get_the_date('l, F jS'); ?></span>
                                </div>
                                <div class="grid_12">
                                    <div class="grid_8">
                                        <p class="para--ntm"><?php the_excerpt(); ?></p>
                                        <?php if(is_category('news')) { ?>
                                            <?php 
                                                $categories = get_the_category();
                                                if(!empty($categories)) { ?>
                                                    <div>
                                                        <p>
                                                            <?php $category_counter = 0; foreach($categories as $category) { ?>
                                                                <?php $category_counter++; ?>
                                                                <?php if ($category_counter < 3) { ?>
                                                                    <span class=""><a class="w-font blog-category b-bg" href="<?php echo get_site_url() . "/category/" . $category->slug; ?>"><?php echo $category->name; ?></a></span>
                                                                <?php } else { break; } ?>
                                                            <?php } ?>
                                                        </p>
                                                    </div>
                                                <?php } ?>
                                        <?php } ?>
                                        <div class="grid_4 lh-50">
                                            <a href="<?php echo get_permalink(); ?>" class="button red small" data-label="<?php echo the_title(); ?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="clear">&nbsp;</div>
                
                <?php } ?>
                
            
            <?php } ?>
    
        <?php endwhile; ?>
        <?php else : ?>
        
            <h1 class="center">Not Found</h1>
            <p class="center">Sorry, but this page cannot be found.</p>
        
        <?php endif; ?>
        
        <?php include (TEMPLATEPATH . '/include-pagination.php' ); ?>
        
    </div>
</div>