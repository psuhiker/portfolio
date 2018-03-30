<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<?php if ( is_front_page() ) { ?>

    <?php include (TEMPLATEPATH . '/home-page.php' ); ?>
    
<?php } elseif ( is_home() ) { ?>

    <?php include (TEMPLATEPATH . '/blog.php' ); ?>
    
<?php get_post_type( $post ) ?>
<?php } elseif ( 'events' == get_post_type() ) { ?>
    
    <?php include (TEMPLATEPATH . '/template-events.php' ); ?>
    
<?php } elseif ( is_page( 'membership/application/new-member' ) ) { ?>

    <?php include (TEMPLATEPATH . '/template-payments.php' ); ?>
    
<?php } elseif ( is_page('34') ) { ?>
    
    <?php include (TEMPLATEPATH . '/template-bylaws.php' ); ?>
    
<?php } elseif ( is_page('18') ) { ?>
    
    <?php include (TEMPLATEPATH . '/template-portal.php' ); ?>
        
<?php } elseif ( is_page('51') ) { ?>
        
    <?php include (TEMPLATEPATH . '/template-portal.php' ); ?>
            
<?php } elseif ( is_page('250') ) { ?>
            
    <?php include (TEMPLATEPATH . '/template-portal.php' ); ?>
                    
<?php } elseif ( is_page('448') ) { ?>

	<?php include (TEMPLATEPATH . '/template-portal-admin.php' ); ?>
            
<?php } elseif ( is_page('123') ) { ?>
            
    <?php include (TEMPLATEPATH . '/template-confirmation.php' ); ?>
                
<?php } elseif ( is_page('554') ) { ?>
                
    <?php include (TEMPLATEPATH . '/template-approve-deny.php' ); ?>
                    
<?php } elseif ( is_page(array('event/paypal')) ) { ?>
                    
<?php } elseif ( is_page(array('335', '456', '472', '345', '493')) ) { ?>
                    
	<?php include (TEMPLATEPATH . '/template-payments.php' ); ?>
                
<?php } elseif ( is_page(array('411', '474', '497', 'paypal')) ) { ?>
                
	<?php include (TEMPLATEPATH . '/template-processing.php' ); ?>
    
<?php } elseif ( is_page(array('341')) ) { // Placeholder pages ?>

    <meta http-equiv="refresh" content="0;URL='<?php echo site_url(); ?>'" />

<?php } else { ?>

    <?php include (TEMPLATEPATH . '/default-page.php' ); ?>

<?php } ?>

</html>