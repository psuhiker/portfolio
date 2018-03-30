<?php /* 
Template Name: Custom Page
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<body class="secondary custom <?php echo basename(get_permalink()); ?>">

	<?php include (TEMPLATEPATH . '/header.php' ); ?>
	
	<?php include (TEMPLATEPATH . '/loops/custom.php' ); ?>
	
	<?php get_footer(); ?>
	
	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

</body>