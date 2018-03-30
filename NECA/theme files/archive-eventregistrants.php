<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<body class="secondary event registrants">

	<?php include (TEMPLATEPATH . '/header.php' ); ?>
	
	<?php if ( is_user_logged_in() ) { ?>
	
	    <?php if ( ! is_admin() ) { ?>
	
	        <?php include (TEMPLATEPATH . '/loops/event-registrants.php' ); ?>
	        
	    <?php } else { ?>
	    
	        <div class="container-fluid">
	        		
	        	<p>You do not have permission to view this information. You are being redirected.</p>
	        	
	        </div>
	    
	        <meta http-equiv="refresh" content="0;URL='<?php echo site_url(); ?>'" />
	    
	    <?php } ?>
	    
	<?php } else { ?>
	
	    <section class="default bg--tertiary-2">
	        <div class="container xl-padding--vertical">
	    
	            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
	        	    <?php include (TEMPLATEPATH . '/includes/login.php' ); ?>
	        	</div>
	    	
	    	</div>
		</section>
	
	<?php } ?>
	
	<?php get_footer(); ?>
	
	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

</body>