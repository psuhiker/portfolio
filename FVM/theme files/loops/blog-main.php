<?php include (TEMPLATEPATH . '/includes/intro.php' ); ?>

<?php $count = 1; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php 
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
        $url = $thumb['0'];
        $authorID = get_the_author_meta('users_page_id');
        if( get_field('override_blog_author') ) {
            // Author
            $author = get_field('override_blog_author_byline') . ' - ';
            $authorName = get_field('override_blog_author_byline');
        } elseif ( $authorID == 1 ) {
            // Author
            // None
        } else {
            // Author
            $author = 'By ' . get_the_author($post->ID) . ' - ';
            $authorName = get_the_author($post->ID);
        }
    ?>
    
    <?php include (TEMPLATEPATH . '/includes/margin-adjustment-array.php' ); ?>
    
    <div class="col-sm-3 block--full <?php echo $layoutAdjustment; ?>">

        <?php include (TEMPLATEPATH . '/includes/block-blog.php' ); ?>
    
    </div>
    <?php $count++; ?>
    
<?php endwhile; ?>

	<?php else : ?>

<?php endif; ?>

<div class="hidden-xs hidden-md hidden-lg">
	<div class="clearfix"></div>
</div>

<?php include ( TEMPLATEPATH . '/includes/social.php' ); ?>

<div class="col-md-6 block--quarter">
	<div class="outer bg--dark-grey">
		<div class="inner">
					
			<?php 
			    $next_links = get_next_posts_link( 'Next', $query->max_num_pages );
			    $prev_links = get_previous_posts_link( 'Previous', $query->max_num_pages ); 
			?>
			
			<?php if ($prev_links) { ?>
			
			    <div class="col-sm-6">
				
				    <div class="content--top cta--arrow--reverse xl-margin--bottom">
				    	<?php previous_posts_link( 'Previous', $query->max_num_pages ); ?>
				    </div>
				    
				</div>
				
			<?php } ?>
			
    		<?php if ($next_links) { ?>
    		
    		    <div class="col-sm-6<?php if ($prev_links) { ?><?php } else { ?> col-sm-offset-6<?php } ?>">
    			
    			    <div class="content--top text-right cta--arrow xl-margin--bottom">
    			    	<?php next_posts_link( 'Next', $query->max_num_pages ); ?>
    			    </div>
    			    
    			</div>
    			
    		<?php } ?>
					
		</div>
	</div>
</div>