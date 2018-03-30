<?php include (TEMPLATEPATH . '/meta.php' ); ?>
</head>

<body class="secondary blog-articles <?php  global $post; $post_slug=$post->post_name; echo $post_slug;  ?> <?php if($post->post_parent) { $post_data = get_post($post->post_parent); echo $post_data->post_name; } ?>">

	<?php get_header(); ?>
	<div class="grid_12 marquee">
	    <div class="container">
	         <div class="image" style="background-image: url(<?php the_field('marquee_image'); ?>)">
	             <div class="border">&nbsp;</div>
	             <div class="title">Explore AOPS</div>
	         </div>
	         <div class="grid_12 copy">
	             <div class="padding">
                    <div class="grid_4">
                     	<h1>Explore AOPS</h1>
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
		
			 	<?php 
			 	$args = array( 
			        'post_type' => 'article',
			        'posts_per_page' => 1,
			        'meta_key' => 'featured',
			        'meta_value' => true
		
		    	); 
		   		$loop = new WP_Query($args);
			 	?>
			 	 <?php if ( $loop->have_posts() ) : ?>
		
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php if (has_post_thumbnail()) { ?>
							<?php 
		 	                	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '', 'single-post-thumbnail' );
		 	                	$featured_id = $post->ID;
						 ?>
							<div class="post-wrapper grid_12">
								<div class="featured post-block clearfix flex">
			 	            		<div class="grid_5 feature-image" style="background-image: url(<?php echo $image[0]; ?>)">
			 	            		</div>
				 					<div class="grid_7 blog-copy">
				 						<h2 class="b-font feature-title"><a href="<?php echo get_permalink(); ?>" data-label="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></h2>
				 						<p><?php echo the_excerpt(); ?></p>
				 						<div class="grid_12">
				 							<div class="left">
				 								<div class="read-more-featured">
				 									<a href="<?php echo get_permalink(); ?>" class="button red small" data-label="<?php echo the_title(); ?>">Read More</a>
				 								</div>
		 									<?php 
		 									$taxonomy_string = get_post_taxonomies($post_id)[1];
											$post_taxonomy = get_taxonomy($taxonomy_string);
											$taxonomy_slug = $post_taxonomy->rewrite['slug'];
											$terms = get_the_terms($post->ID, $taxonomy_string);
		 									if(!empty($terms)) { ?>
					 								<div class="cat-wrapper">
				 										<?php $term_counter = 0; foreach($terms as $term) { ?>
				 											<?php $term_counter++; ?>
															<?php if ($term_counter < 3) { ?>
																<span class=""><a class="w-font blog-category b-bg" href="<?php echo get_site_url() . "/" . $taxonomy_slug . "/" . $term->slug; ?>"><?php echo $term->name; ?></a></span>
															<?php } else { break; } ?>
														<?php } ?>
					 								</div>
			 								<?php } ?>
			 								</div>
				 							<div class="social-wrap">
				 								<div id="featured-social" class="blog-social">
				 									<?php include (TEMPLATEPATH . '/include-blog-social.php' ); ?>
				 								</div>
				 								<div class="g-font">
				 									<div id="heart-wrapper" class="left lh-center featured-heart" data-blogtitle="<?php the_title(); ?>"><?php if(function_exists('wp_ulike')) wp_ulike('get'); ?></div>
				 									<div class="left">
				 										<div class="clock"></div>
				 										<div class="posted-time"><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></div>
				 									</div>
				 								</div>
				 							</div>
				 							
				 						</div>
				 					</div>
			 	            	</div>
							</div>
						<?php } else { ?>
							<div class="post-wrapper grid_12">
								<div class="post-block clearfix flex">
									<div class="grid_12 blog-copy">
										<h2 class="b-font feature-title"><a href="<?php echo get_permalink(); ?>" data-label="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></h2>
										<div class="grid_12 lh-center">
				 							<div id="featured-social" class="blog-social left">
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
				 								<div>
					 								<p>
				 										<?php $term_counter = 0; foreach($terms as $term) { ?>
				 											<?php $term_counter++; ?>
															<?php if ($term_counter < 3) { ?>
																<span class=""><a class="w-font blog-category b-bg" href="<?php echo get_site_url() . "/" . $taxonomy_slug . "/" . $term->slug; ?>"><?php echo $term->name; ?></a></span>
															<?php } else { break; } ?>
														<?php } ?>
					 								</p>
				 								</div>
			 								<?php } ?>
				 						</div>
			 							<div class="grid_12 vp-25">
			 								<div class="grid_9">
			 									<p class="para--ntm"><?php the_excerpt(); ?></p>
			 								</div>
				 							<div class="read-more-featured grid_3 text-center lh-50">
				 								<a href="<?php echo get_permalink(); ?>" class="button red small" data-label="<?php echo the_title(); ?>">Read More</a>
				 							</div>
			 							</div>
									</div>
								</div>
							</div>
						<?php } ?>
					<?php endwhile; ?>
		
				<?php endif; wp_reset_query(); ?>
				
				<?php $counter = 0; ?>
		            <div class="posts-row grid_12 flex">
			 	<?php if (have_posts()) : ?>
			 	   <?php while (have_posts()) : the_post(); ?>
			 	   		<?php if ($post->ID != $featured_id): ?>
		 					<?php 
		 	                	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '', 'single-post-thumbnail' );
		 	                	$featured = get_field('featured');
		 					 ?>
							<?php if ($featured && has_post_thumbnail()) { ?>
								<div class="post-wrapper grid_6 post-2 flex">
									<div class="post-block blog-table clearfix flex">
										<div class="grid_8 blog-copy">
											<div class="table-block">
												<h3 class="blog-title"><a href="<?php echo get_permalink(); ?>" data-label="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></h3>
												<p><?php echo the_excerpt(); ?></p>
												<div class="grid_12">
						 							<div class="read-more-featured">
						 								<a href="<?php echo get_permalink(); ?>" class="button red small left" data-label="<?php echo the_title(); ?>">Read More</a>
						 							</div>
						 							<div class="blog-social left">
						 								<?php include (TEMPLATEPATH . '/include-blog-social.php' ); ?>
						 							</div>
						 						</div>
					 							<div class="grid_12">
					 								<?php 
					 									$taxonomy_string = get_post_taxonomies($post_id)[1];
														$post_taxonomy = get_taxonomy($taxonomy_string);
														$taxonomy_slug = $post_taxonomy->rewrite['slug'];
														$terms = get_the_terms($post->ID, $taxonomy_string);
					 									if(!empty($terms)) { ?>
							 								<div>
								 								<p>
							 									<?php $term_counter = 0; foreach($terms as $term) { ?>
								 									<?php $term_counter++; ?>
																	<?php if ($term_counter < 3) { ?>
																		<span class=""><a class="w-font blog-category b-bg" href="<?php echo get_site_url() . "/" . $taxonomy_slug . "/" . $term->slug; ?>"><?php echo $term->name; ?></a></span>
																	<?php } else { break; } ?>
																	<?php } ?>
								 								</p>
							 								</div>
						 								<?php } ?>
					 							</div>
											</div>
										</div>
										<div class="grid_4 feature-image" style="background-image: url(<?php echo $image[0]; ?>)"></div>
									</div>
								</div>
								<?php $counter++; ?>
								<?php $counter++; ?>
							<?php } elseif (has_post_thumbnail()){ ?>
								<div class="post-wrapper grid_3 post-4 flex">
									<div class="post-block">
										<div class="grid_12 post-wrapper-image" style="background-image: url(<?php echo $image[0]; ?>);">
										</div>
										<div class="grid_12 blog-copy">
											<h3 class="blog-title text-center"><a href="<?php echo get_permalink(); ?>" data-label="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></h3>
										</div>
										<div class="read-more-non text-center grid_12 btn-wrapper">
											<a href="<?php echo get_permalink(); ?>" class="button red small" data-label="<?php echo the_title(); ?>">Read More</a>
										</div>
									</div>
								</div>
								<?php $counter++; ?>
							<?php } else { ?>
		    						<div class="post-wrapper grid_3 post-4 flex">
		    							<div class="post-block">
		    								<div class="grid_12 b-bg">
		    									<div class="blog-copy">
		    										<h3 class="blog-title--w"><a href="<?php echo get_permalink(); ?>" data-label="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></h3>
		    										<div class="w-font"><?php the_excerpt(); ?></div>
		    									</div>
		    								</div>
		    								<div class="text-center grid_12 btn-wrapper">
		    									<a href="<?php echo get_permalink(); ?>" class="button red small">Read More</a>
		    								</div>
		    							</div>
		    						</div>
		    						<?php $counter++; ?>
							<?php } ?>
						<?php endif; ?>
			 	   <?php endwhile; ?>
			 	   </div>
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
     
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
	<?php get_footer(); ?>
	
<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
	    
</body>