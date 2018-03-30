<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<body class="secondary processing">

	<div class="inner">
	
		<?php 
			$applicantID = get_the_id();
			$approvedID = '?approved-' . get_the_id(); 
			$deniedID = '?denied-' . get_the_id();
		?>
	
		<p>Processing</p>
		<p><img src="<?php bloginfo('template_directory'); ?>/images/loading.gif" width="100"></p>

    	<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
    	<?php if (false !== strpos($url, $approvedID )) { ?>
    
    		<?php update_post_meta( $applicantID, 'status', 'activePending' ); ?>
    		<meta http-equiv="refresh" content="0;URL='<?php echo site_url(); ?>/member-portal/administration/?memberapproved'" />
    		
    	<?php } elseif (false !== strpos($url, $deniedID )) { ?>
    	
    		<?php update_post_meta( $applicantID, 'status', 'rejected' ); ?>
    		<meta http-equiv="refresh" content="0;URL='<?php echo site_url(); ?>/member-portal/administration/?memberdenied'" />
    		
    	<?php } else { ?>
    	
    		<meta http-equiv="refresh" content="0;URL='<?php echo site_url(); ?>/member-portal/administration/#pending'" />
    	
    	<?php } ?>
    	
    </div>	
	
	<?php wp_footer(); ?>

</body>