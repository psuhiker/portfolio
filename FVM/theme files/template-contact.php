<?php /* 
Template Name: Contact Us
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<body class="secondary contact">

	<?php include (TEMPLATEPATH . '/header.php' ); ?>
	
	<?php include (TEMPLATEPATH . '/loops/contact.php' ); ?>
	
	<?php get_footer(); ?>
	
	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

</body>