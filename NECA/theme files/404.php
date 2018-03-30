<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<body class="error">

	<?php include (TEMPLATEPATH . '/header.php' ); ?>
	
	<div class="header divider"></div>
	
	<section class="default">
	    <div class="container">
	        <div class="row">
	            
	            <div class="col-md-8">
	            
	                <h1><?php echo ( get_theme_mod( 'siteinformation_error_title' ) ); ?></h1>
	                <p class="font-size--md"><?php echo ( get_theme_mod( 'siteinformation_error_text' ) ); ?></p>
	            
	            </div>
	        </div>
	    </div>
	</section>
	
	<?php get_footer(); ?>
	
	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

</body>