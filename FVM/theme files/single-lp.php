<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<body class="secondary landing-page single">

	<?php include (TEMPLATEPATH . '/header.php' ); ?>
	
	<?php if ( is_single( 'submission' ) ) { ?>
	
	    <?php include (TEMPLATEPATH . '/loops/submission.php' ); ?>
	    
	<?php } else { ?>
	
	    <?php include (TEMPLATEPATH . '/loops/lp.php' ); ?>
	    
	<?php } ?>
	
	<?php get_footer(); ?>
	
	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

</body>