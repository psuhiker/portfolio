<?php /*
Template Name: Employment
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
</head>

<body class="secondary jobs leadership <?php  global $post; $post_slug=$post->post_name; echo $post_slug;  ?> <?php if($post->post_parent) { $post_data = get_post($post->post_parent); echo $post_data->post_name; } ?>">

	<?php get_header(); ?>

	<div class="grid_12 marquee">
		<div class="container">
			<div class="grid_7 copy">
				<div class="padding">
					<div class="copy-slider loaded">
						<h1>Careers</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="grid_12 gray-bg">
		<div class="white-bg-left"></div>
		<div class="container">
			<div class="grid_4 career-filter white-bg">
				<?php include (TEMPLATEPATH . '/includes/job-filter-form.php' ); ?>
			</div>
			<div class="grid_8 gray-bg job-listings">
				<div class="container">
					<div class="padding jobs searchable">
						
						<?php include (TEMPLATEPATH . '/includes/job-breadcrumb.php' ); ?><br><br>

						<h1>Available Positions</h1>

						<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post()  ?>

							<?php include (TEMPLATEPATH . '/includes/job-block.php' ); ?>

						<?php endwhile; ?>
							<div class="grid_12">
								<?php include (TEMPLATEPATH . '/include-pagination.php' ); ?>
							</div>
						<?php else : ?>
						<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="grid_12 medium-gray-bg">
				<div class="container">
					<?php include (TEMPLATEPATH . '/includes/learn-more.php' ); ?>
				</div>
			</div>
	<?php get_footer(); ?>

<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

</body>
