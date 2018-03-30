<?php /*
Template Name: Employment
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
</head>

<body class="secondary leadership <?php  global $post; $post_slug=$post->post_name; echo $post_slug;  ?> <?php if($post->post_parent) { $post_data = get_post($post->post_parent); echo $post_data->post_name; } ?>">

	<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<div class="grid_12 marquee--blue" style="background-image: url(<?php the_field('marquee_image'); ?>)">
				<div class="container">
					<div class="copy">
						<div class="padding">
							<div class="copy-slider">
							<h1><?php the_field('the_subtitle'); ?></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="grid_12 marquee-content">
				<div class="container">
					<div class="grid_8 content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

			<div class="grid_12 gray-bg">
				<div class="container">
					<div class="padding grades">
						<div class="grades__block grid_4">
							<h2 class="grades__heading">Secondary</h2>
							<p class="grades__desc">At an <a href="<?php echo site_url('/high-schools'); ?>">AOPS high school</a>, you'll help us raise students of conviction and character. We work to give young adults the tools they need to become leaders, caretakers, and role models.</p>
							<div class="grades__btn-wrap">
								<h3 class="grades__subheading">Open Positions</h3>
								<a href="https://usr52.dayforcehcm.com/CandidatePortal/en-US/oceaop" class="button red small" target="_blank">Administrators</a>
								<a href="https://usr52.dayforcehcm.com/CandidatePortal/en-US/oceaop" class="button red small" target="_blank">Teachers</a>
								<a href="http://aopathletics.org/sports/2016/8/18/employmentAOP.aspx" class="button red small" target="_blank">Athletics Staff</a>
								<a href="https://usr52.dayforcehcm.com/CandidatePortal/en-US/oceaop" class="button red small" target="_blank">Support Staff</a>
							</div>
						</div>
						<div class="grades__block grid_4">
							<h2 class="grades__heading">Elementary</h2>
							<p class="grades__desc">Build children's academic, social, and spiritual foundations at one of 119 <a href="<?php echo site_url('/elementary-schools'); ?>">AOPS elementary schools</a>. Join us in developing their faith in God, their families, and their own incredible potential.</p>
							<div class="grades__btn-wrap">
								<h3 class="grades__subheading">Open Positions</h3>
								<a href="<?php echo get_site_url(null, "/job?term_1=Administrators&s=&employment_position_level=elementary") ?>" class="button red small">Administrators</a>
								<a href="<?php echo get_site_url(null, "/job?term_4=teachers&s=&employment_position_level=elementary") ?>" class="button red small">Teachers</a>
								<!--<a href="<?php echo get_site_url(null, "/job?term_2=athletics-staff&s=&employment_position_level=elementary") ?>" class="button red small">Athletics Staff</a>-->
								<a href="<?php echo get_site_url(null, "/job?term_3=support-staff&s=&employment_position_level=elementary") ?>" class="button red small">Support Staff</a>
							</div>
						</div>
						<div class="grades__block grid_4">
							<h2 class="grades__heading">Special Education</h2>
							<p class="grades__desc">At our <a href="<?php echo site_url('/special-education'); ?>">special education schools</a>, we celebrate the joy of learning through specialized instruction. Help empower students to not only navigate the modern world, but also make it a better place.</p>
							<div class="grades__btn-wrap">
								<h3 class="grades__subheading">Open Positions</h3>
								<a href="<?php echo get_site_url(null, "/job?term_1=Administrators&s=&employment_position_level=special_education") ?>" class="button red small">Administrators</a>
								<a href="<?php echo get_site_url(null, "/job?term_4=teachers&s=&employment_position_level=special_education") ?>" class="button red small">Teachers</a>
								<a href="<?php echo get_site_url(null, "/job?term_3=support-staff&s=&employment_position_level=special_education") ?>" class="button red small">Support Staff</a>
							</div>
						</div>
					</div>
					<div class="padding learn-more">
						<div class="grid_12">
							<?php include (TEMPLATEPATH . '/includes/learn-more.php' ); ?>
						</div>
					</div>
				</div>
			</div>

		<?php endwhile; ?>
	<?php else : ?>

		<h1 class="center">Not Found</h1>
		<p class="center">Sorry, but this page cannot be found.</p>

	<?php endif; ?>
	<?php get_footer(); ?>

<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

</body>
