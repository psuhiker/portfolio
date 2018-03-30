<?php /* 
Template Name: People
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<body class="secondary people">

	<?php include (TEMPLATEPATH . '/header.php' ); ?>
	
	<?php include (TEMPLATEPATH . '/loops/people-main.php' ); ?>
	
	<?php get_footer(); ?>
	
	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

</body>