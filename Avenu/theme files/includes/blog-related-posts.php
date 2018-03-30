<?php
    $orig_post = $post;
    global $post;
    $tags = wp_get_post_tags($post->ID);
        if ($tags) {
            echo '<div class="sidebar block"><div class="related"><h3 class="sidebar__title border-bottom--red lg-margin--bottom">Related Posts</h3>';
            $tag_ids = array();
            foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                $args=array(
                    'tag__in' => $tag_ids,
                    'post__not_in' => array($post->ID),
                    'posts_per_page'=>5, // Number of related posts to display.
                    'caller_get_posts'=>1
                );
                $my_query = new wp_query( $args );
            while( $my_query->have_posts() ) {
                $my_query->the_post();
?>
            
    <div class="item">
        <div class="post__date font-size--sm text-color--black">
        	<?php the_date(); ?>
        	<?php echo (!empty($categories)) ? ' | </span> <span class="post__category">' . $categories[0]->name . '</span>' : '</span>'; ?>
        </div>
        		
        <div class="text-color--steel-blue default-margin--bottom">
        	<?php the_title(); ?>
        </div>
        		
        <p>
        	<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="btn btn-red btn-sm">View Post</a>
        </p>
    </div>

<?php 
    } 
    echo '</div></div>';
    }
    $post = $orig_post;
    wp_reset_query();
?>