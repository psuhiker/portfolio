<body class="secondary bylaws">

	<?php include (TEMPLATEPATH . '/header.php' ); ?>
	
	<?php include (TEMPLATEPATH . '/includes/marquee-portal.php' ); ?>
	
	<section class="default">
	    <div class="container">
	
            <?php if ( is_user_logged_in() ) { ?>
        
        	    <div class="col-sm-4 col-md-3">
        	    
        	        <?php include (TEMPLATEPATH . '/includes/menu-portal.php' ); ?>
        	            
        	    </div>
        	    
        	    <div class="col-sm-8 col-md-9">
        
                    <?php include (TEMPLATEPATH . '/loops/bylaws.php' ); ?>
                    
                </div>
                
            <?php } else { ?>
            
        	    <div class="col-sm-12">
        	    
        	        <?php include (TEMPLATEPATH . '/loops/bylaws.php' ); ?>
        	    
        	    </div>
            
            <?php } ?>
    
        </div>
    </section>
	
	<?php get_footer(); ?>
	
	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

</body>