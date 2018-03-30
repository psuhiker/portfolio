<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<?php if ( is_front_page() ) { ?>

    <?php include (TEMPLATEPATH . '/home-page.php' ); ?>
    
<?php } elseif ( is_page('15') ) { ?>

    <?php include (TEMPLATEPATH . '/portfolio-main.php' ); ?>
    
<?php global $wp_query; $currentPage = get_page($wp_query->get_queried_object_id()); ?>
<?php } elseif ( is_page($currentPage['portfolio']) ) { ?>

    <?php include (TEMPLATEPATH . '/portfolio-single.php' ); ?>

<?php } else { ?>

    <?php include (TEMPLATEPATH . '/default-page.php' ); ?>

<?php } ?>

</html>