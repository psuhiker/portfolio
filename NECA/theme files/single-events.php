<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<body class="secondary events single">

	<?php include (TEMPLATEPATH . '/header.php' ); ?>
	
	<?php 
		$today = current_time( 'Ymd', $gmt = 0 );
		$yesterday = strtotime('-1 day', $today);
		$tomorrow = strtotime('+1 day', $today);
		$eventdate = get_field('event_date', false, false);
	?>
	
	<?php if ($eventdate < $today) { ?>
		
		<?php include (TEMPLATEPATH . '/loops/events-single-archived.php' ); ?>
		
	<?php } else { ?>
		
		<?php include (TEMPLATEPATH . '/loops/events-single-upcoming.php' ); ?>
		
	<?php } ?>
	
	<?php get_footer(); ?>
	
	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
	
	<!-- Photo Gallery -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-montage/jquery.montage.min.js"></script>
	<script type="text/javascript">
		$(function() {
			var $container 	= $('#am-container'),
				$imgs		= $container.find('img').hide(),
				totalImgs	= $imgs.length,
				cnt			= 0;
			$imgs.each(function(i) {
				var $img	= $(this);
				$('<img/>').load(function() {
					++cnt;
					if( cnt === totalImgs ) {
						$imgs.show();
						$container.montage({
							fillLastRow	: true,
							alternateHeight	: true,
							alternateHeightRange : {
								min	: 200,
								max	: 400
							},
							margin : 4
						});
					}
				}).attr('src',$img.attr('src'));
			});	
		});
	</script>

</body>