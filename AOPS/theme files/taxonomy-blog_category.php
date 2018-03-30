<?php include (TEMPLATEPATH . '/meta.php' ); ?>
</head>

<body class="secondary blog-categories <?php  global $post; $post_slug=$post->post_name; echo $post_slug;  ?> <?php if($post->post_parent) { $post_data = get_post($post->post_parent); echo $post_data->post_name; } ?>">

	<?php get_header(); ?>
	<div class="grid_12 marquee">
	    <div class="container">
	         <div class="image" style="background-image: url(<?php the_field('marquee_image'); ?>)">
	             <div class="border">&nbsp;</div>
	             <div class="title"><?php echo get_queried_object()->name; ?> Posts</div>
	         </div>
	         <div class="grid_12 copy">
	             <div class="padding">
                     <div class="grid_4">
                     	<h1><?php echo get_queried_object()->name; ?> Posts</h1>
                     </div>
					<div class="grid_8"><?php include (TEMPLATEPATH . '/search-articles-form.php' ); ?></div>
	             </div>
	         </div>
	     
	     </div>
	</div>
	<div class="clearfix"></div>
	<div class="gray-bg">
		<div class="container">
			 <div class="padding">
			 	<div class="grid_12">
			 		<div class="padding">
			 			<?php include (TEMPLATEPATH . '/includes/blog-breadcrumb.php' ); ?>
			 		</div>
			 	</div>
			 	<?php if (have_posts()) : ?>
			 	   <?php while (have_posts()) : the_post(); ?>
		 					<?php 
		 	                	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '', 'single-post-thumbnail' );
		 	                	$featured = get_field('featured');
		 					 ?>
						<?php if (has_post_thumbnail()) { ?>
							<div class="post-wrapper grid_12">
								<div class="post-block blog-table clearfix flex">
									<div class="grid_8 blog-copy">
										<div class="table-block">
											<h2 class="b-font feature-title"><a href="<?php echo get_permalink(); ?>" data-label="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></h2>
											<div class="grid_12 lh-center">
					 							<div class="blog-social left">
					 								<?php include (TEMPLATEPATH . '/include-blog-social.php' ); ?>
					 							</div>
				 								<div id="heart-wrapper" class="left" data-blogtitle="<?php the_title(); ?>"><?php if(function_exists('wp_ulike')) wp_ulike('get'); ?></div>
				 								<div class="g-font left">
				 									<div class="clock"></div>
				 									<div class="posted-time"><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?>
				 									</div>
				 								</div>
					 						</div>
				 							<div class="grid_12">
				 								<p><?php the_excerpt(); ?></p>
				 							</div>
				 							<div class="grid_12 vp-25">
					 							<div class="left">
					 								<a href="<?php echo get_permalink(); ?>" class="button red small left">Read More</a>
					 							</div>
				 								<?php 
			 									$taxonomy_string = get_post_taxonomies($post_id)[1];
												$post_taxonomy = get_taxonomy($taxonomy_string);
												$taxonomy_slug = $post_taxonomy->rewrite['slug'];
												$terms = get_the_terms($post->ID, $taxonomy_string);
			 									if(!empty($terms)) { ?>
					 								<div class="left">
						 								<div class="terms-wrapper">
						 									<?php $term_counter = 0; foreach($terms as $term) { ?>
					 											<?php $term_counter++; ?>
													<?php if ($term_counter < 3) { ?>
														<span class=""><a class="w-font blog-category b-bg" href="<?php echo get_site_url() . "/" . $taxonomy_slug . "/" . $term->slug; ?>"><?php echo $term->name; ?></a></span>
													<?php } else { break; } ?>
												<?php } ?>
						 								</div>
					 								</div>
				 								<?php } ?>
				 							</div>
										</div>
									</div>
									<div class="grid_4 feature-image" style="background-image: url(<?php echo $image[0]; ?>)"></div>
								</div>
							</div>
						<?php } else { ?>
						<div class="post-wrapper grid_12">
							<div class="post-block clearfix flex">
								<div class="grid_12 blog-copy">
									<h2 class="b-font feature-title"><a href="<?php echo get_permalink(); ?>" data-label="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></h2>
									<div class="grid_12 lh-center">
			 							<div class="blog-social left">
			 								<?php include (TEMPLATEPATH . '/include-blog-social.php' ); ?>
			 							</div>
		 								<div id="heart-wrapper" class="left no-image" data-blogtitle="<?php the_title(); ?>"><?php if(function_exists('wp_ulike')) wp_ulike('get'); ?></div>
		 								<div class="g-font left">
		 									<div class="clock"></div>
		 									<div class="posted-time"><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?>
		 									</div>
		 								</div>
		 									<?php 
		 									$taxonomy_string = get_post_taxonomies($post_id)[1];
										$post_taxonomy = get_taxonomy($taxonomy_string);
										$taxonomy_slug = $post_taxonomy->rewrite['slug'];
										$terms = get_the_terms($post->ID, $taxonomy_string);
		 									if(!empty($terms)) { ?>
			 								<div class="left">
				 								<div class="terms-wrapper">
			 										<?php $term_counter = 0; foreach($terms as $term) { ?>
			 											<?php $term_counter++; ?>
														<?php if ($term_counter < 3) { ?>
															<span class=""><a class="w-font blog-category b-bg" href="<?php echo get_site_url() . "/" . $taxonomy_slug . "/" . $term->slug; ?>"><?php echo $term->name; ?></a></span>
														<?php } else { break; } ?>
													<?php } ?>
				 								</div>
			 								</div>
		 								<?php } ?>
			 						</div>
		 							<div class="grid_12 vp-25">
		 								<div class="grid_9">
		 									<p class="para--ntm"><?php the_excerpt(); ?></p>
		 								</div>
			 							<div class="grid_3 text-center lh-50">
			 								<a href="<?php echo get_permalink(); ?>" class="button red small">Read More</a>
			 							</div>
		 							</div>
								</div>
							</div>
						</div>
						<?php } ?>
			 	    <?php endwhile; ?>
			 	    	<div class="grid_12 vp-25">
			 	    		<?php include (TEMPLATEPATH . '/include-pagination.php' ); ?>
			 	    	</div>
			 		<?php else : ?>
			 	
			 				<h1 class="center">Not Found</h1>
			 		<p class="center">Sorry, but this page cannot be found.</p>
			 	   
			 	<?php endif; ?>
		
			 </div>
		     </div>
	</div>
		
	<?php get_footer(); ?>
	
<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
	    
</body>