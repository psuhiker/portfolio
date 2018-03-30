<?php /* 
Template Name: Home Page
*/ ?>

<?php // if ( is_user_logged_in() ) { ?>

	<?php include (TEMPLATEPATH . '/meta.php' ); ?>
	</head>
	
		<?php if ( is_front_page() ) { ?>
	
			<?php include (TEMPLATEPATH . '/home-page.php' ); ?>
	
		<?php } elseif ( is_home() ) { ?>
	
			<?php include (TEMPLATEPATH . '/blog.php' ); ?>
	
		<?php } elseif ( is_archive() ) { ?>
	
			<?php include (TEMPLATEPATH . '/blog.php' ); ?>
	
		<?php } else { ?>
	
			<?php include (TEMPLATEPATH . '/default-page.php' ); ?>
	
		<?php } ?>
	
	</html>

<?php // } else { ?>

	<!--<body class="splash">
	
	    <style>
	        body.splash {
	            background-image: url(/splash.png);
	            background-repeat: no-repeat;
	            background-position: center center;
	            background-size:  500px auto;
	            width:  100%;
	            height: 100%;
	            position: fixed;
	        }
	    </style>
	
	    &nbsp;
	
	</body>-->

<?php // } ?>