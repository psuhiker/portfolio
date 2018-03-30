<?php include (TEMPLATEPATH . '/includes/job-query.php' ); ?>
<?php include (TEMPLATEPATH . '/meta.php' ); ?>
</head>

<body class="secondary search results jobs">

	<?php get_header(); ?>

	<div class="grid_12 marquee">
	    <div class="container">

	         <div class="grid_12 copy">
	             <div class="padding">

	                 <h1>Careers</h1>

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
					<div class="padding">
						<?php include (TEMPLATEPATH . '/includes/job-breadcrumb.php' ); ?><br><br>
						<h1><?php // echo term_replace_func($search_query); ?>Available Positions</h1>
						<div class="">
							<?php include (TEMPLATEPATH . '/includes/filter-tags.php' ); ?>
						</div>
							<?php if ($search->have_posts()) : ?>
								<?php while ($search->have_posts()) : $search->the_post(); ?>

									<?php include (TEMPLATEPATH . '/includes/job-block.php' ); ?>

								<?php endwhile; ?>
							<?php else : ?>

									<p>There were no open positions that matched your search.</p>

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
