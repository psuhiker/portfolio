<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1') ) : ?>
<?php endif; ?>

<div class="col-sm-3 col-sm-offset-1 col-xs-offset-0">

    <?php if ( is_home() ) { } else { ?>
    
        <div class="lg-margin--bottom">
            <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="btn btn-red">
                Back to <?php $our_title = get_the_title( get_option('page_for_posts', true) ); echo $our_title; ?>
            </a>
        </div>
    
    <?php } ?>

    <?php include (TEMPLATEPATH . '/includes/blog-categories-list.php' ); ?>
    
    <?php if ( is_single() ) { ?>
        <?php include (TEMPLATEPATH . '/includes/blog-related-posts.php' ); ?>
    <?php } ?>

</div>