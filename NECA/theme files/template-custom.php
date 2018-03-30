<?php /* 
Template Name: Custom Page
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>

<body class="secondary custom <?php if (false !== strpos($url,'template=invoice' )) { ?>template invoice<?php } ?>">

	<?php include (TEMPLATEPATH . '/header.php' ); ?>
	
	<?php include (TEMPLATEPATH . '/loops/custom.php' ); ?>
	
	<?php get_footer(); ?>
	
	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

</body>