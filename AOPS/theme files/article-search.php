<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
</head>

<body class="secondary blog search results result-articles">

	<?php get_header(); ?>
	
	<div class="grid_12 marquee">
	    <div class="container">
	         <div class="grid_12 copy">
	             <div class="padding">
	             
	                 <h1>Search Results for '<?php echo "$s"; ?>'</h1>
	             
	             </div>
	         </div>
	     
	     </div>
	</div>
	<div class="clearfix"></div>
	<div class="gray-bg">
			
			<div class="container">
				<div class="grid_12">
				    <div class="padding">
				    	<br><br><?php include (TEMPLATEPATH . '/includes/blog-breadcrumb.php' ); ?>
				    </div>
				</div>
			</div>
		
			<?php include (TEMPLATEPATH . '/search-articles-form.php' ); ?>
			
			<div class="grid_12 section search" style="padding-top: 0px;">
			    <div class="container">
					
		        	<?php if (have_posts()) : ?>
		        	<?php while (have_posts()) : the_post(); ?>
		        		<?php 
			                	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '', 'single-post-thumbnail' );
			                	$featured = get_field('featured');
							 ?>
						<?php if (has_post_thumbnail()) { ?>
							<div class="post-wrapper grid_12">
								<div class="post-block clearfix flex">
									<div class="grid_8 blog-copy">
										<h2 class="b-font"><?php echo the_title(); ?></h2>
										<div class="grid_12 lh-center">
				 							<div class="blog-social left">
				 								<?php include (TEMPLATEPATH . '/include-blog-social.php' ); ?>
				 							</div>
			 								<div class="left"><?php if(function_exists('wp_ulike')) wp_ulike('get'); ?></div>
			 								<div class="g-font left">
			 									<div class="clock"></div>
			 									<div class="posted-time"><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?>
			 									</div>
			 								</div>
				 						</div>
			 							<div class="grid_12">
			 								<p><?php echo wp_trim_words( get_the_content(), 15, '...' ); ?></p>
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
									<div class="grid_4 feature-image" style="background-image: url(<?php echo $image[0]; ?>)"></div>
								</div>
							</div>
						<?php } else { ?>
						<div class="post-wrapper grid_12">
							<div class="post-block clearfix flex">
								<div class="grid_12 blog-copy">
									<h2 class="b-font"><?php echo the_title(); ?></h2>
									<div class="grid_12 lh-center">
			 							<div class="blog-social left">
			 								<?php include (TEMPLATEPATH . '/include-blog-social.php' ); ?>
			 							</div>
		 								<div class="left no-image"><?php if(function_exists('wp_ulike')) wp_ulike('get'); ?></div>
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
			 										<?php for($i = 0; $i < 2; $i++) { ?>
														<span class=""><a class="w-font blog-category b-bg" href="<?php echo get_site_url() . "/" . $taxonomy_slug . "/" . $terms[$i]->slug; ?>"><?php echo $terms[$i]->name; ?></a></span>
													<?php } ?>
				 								</div>
			 								</div>
		 								<?php } ?>
			 						</div>
		 							<div class="grid_12 vp-25">
		 								<div class="grid_9">
		 									<p class="para--ntm"><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p>
		 								</div>
			 							<div class="grid_3 text-center">
			 								<a href="<?php echo get_permalink(); ?>" class="button red small">Read More</a>
			 							</div>
		 							</div>
								</div>
							</div>
						</div>
						<?php } ?>
			    
		        	<?php endwhile; ?>
		        	<?php else : ?>
		        	
		        	    <p class="center">There were no articles that matched '<?php echo "$s"; ?>'</p>
		        	
		        	<?php endif; ?>
		        	
		         </div>
		    </div>
	</div>
		
	<?php get_footer(); ?>
	
<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
	    
</body>