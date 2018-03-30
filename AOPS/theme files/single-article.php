<?php 
	$social_share_title = get_field('social_share_title');
	$social_share_image = get_field('social_share_image');
	?>
	<?php if (!empty($social_share_image)) { ?>
		<meta property="og:image" content="<?php echo $social_share_image['url']; ?>"/>
	<?php } ?>
<?php include (TEMPLATEPATH . '/meta.php' ); ?>
 
</head>

<body class="blog-single blog-articles secondary <?php  global $post; $post_slug=$post->post_name; echo $post_slug;  ?> <?php if($post->post_parent) { $post_data = get_post($post->post_parent); echo $post_data->post_name; } ?>">

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
	 				<?php include (TEMPLATEPATH . '/includes/blog-breadcrumb.php' ); ?><br><br>
	 				<div class="w-bg">
	 			 		<?php if (have_posts()) : ?>
	 			        <?php while (have_posts()) : the_post(); ?>
	 			        	<?php $main_post_id = $post->ID; ?>
	 						<div id="heading-wrap-main">
	 							<h1 class="text-center blog-post-title"><?php the_title(); ?></h1>
	 							<div class="grid_12 vp-25">
	 									<div class="flex justify-center">
	 										<div class="left">
	 											<div class="g-font right"><div class="clock"></div><div class="posted-time"><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></div></div><div class="<?php echo (get_field('featured') == true ? "featured-heart" : NULL);  ?> right"><?php if(function_exists('wp_ulike')) wp_ulike('get'); ?></div>
	 										</div>
	 										<div <?php echo (get_field('featured') == true ? "id='featured-social'" : NULL);  ?> class="blog-social left">
	 											<?php include (TEMPLATEPATH . '/include-blog-social.php' ); ?>
	 										</div>
	 									</div>
	 									<?php 
	 									$taxonomy_string = get_post_taxonomies($post_id)[1];
	 									$post_taxonomy = get_taxonomy($taxonomy_string);
	 									$taxonomy_slug = $post_taxonomy->rewrite['slug'];
	 									$terms = get_the_terms($post->ID, $taxonomy_string);
	 									if(!empty($terms)) { ?>
	 									<div class="clear"></div>
	 										<div class="flex justify-center">
	 											<div class="blog-category-wrapper">
	 												<p>
	 													<?php $term_counter = 0; foreach($terms as $term) { ?>
	 			 											<?php $term_counter++; ?>
	 														<?php if ($term_counter < 3) { ?>
	 															<span class=""><a class="w-font blog-category b-bg" href="<?php echo get_site_url() . "/" . $taxonomy_slug . "/" . $term->slug; ?>"><?php echo $term->name; ?></a></span>
	 														<?php } else { break; } ?>
	 													<?php } ?>
	 												</p>
	 											</div>
	 										</div>
	 									<?php } ?>
	 							</div>
	 						</div>
	 						<div id="sidebar" class="grid_4">
	 							<div class="sidebar">
	 								<div id="heading-wrap-side">
	 				 						<h1 class="text-center blog-post-title"><?php the_title(); ?></h1>
	 				 						<div class="grid_12 vp-25">
	 											<div class="flex justify-center">
	 												<div class="left">
	 													<div class="g-font right"><div class="clock"></div><div class="posted-time"><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></div></div><div id="heart-wrapper" class="right" data-blogtitle="<?php the_title(); ?>"><?php if(function_exists('wp_ulike')) wp_ulike('get'); ?></div>
	 												</div>
	 												<div class="blog-social left">
	 													<?php include (TEMPLATEPATH . '/include-blog-social.php' ); ?>
	 												</div>
	 											</div>
	 											<?php 
	 											$taxonomy_string = get_post_taxonomies($post_id)[1];
	 											$post_taxonomy = get_taxonomy($taxonomy_string);
	 											$taxonomy_slug = $post_taxonomy->rewrite['slug'];
	 											$terms = get_the_terms($post->ID, $taxonomy_string);
	 											if(!empty($terms)) { ?>
	 											<div class="clear"></div>
	 												<div class="flex justify-center">
	 													<div class="blog-category-wrapper">
	 														<p>
	 															<?php $term_counter = 0; foreach($terms as $term) { ?>
	 					 											<?php $term_counter++; ?>
	 																<?php if ($term_counter < 3) { ?>
	 																	<span class=""><a class="w-font blog-category b-bg" href="<?php echo get_site_url() . "/" . $taxonomy_slug . "/" . $term->slug; ?>"><?php echo $term->name; ?></a></span>
	 																<?php } else { break; } ?>
	 															<?php } ?>
	 														</p>
	 													</div>
	 												</div>
	 											<?php } ?>
	 				 						</div>
	 				 					</div>
	 								<div class="grid_12 text-center">
	 			 							<?php if (!empty(get_field('author_image'))) { ?>
	 			 								<img src="<?php echo get_field('author_image')['url']; ?>" class="avatar">
	 			 							<?php } ?>
	 										<?php if (get_field('guest_post') == 1 ) { ?>
	 			 								<?php if (!empty(get_field('guest_name'))) { ?>
	 			 									<h2><span class="author-name"><?php echo get_field('guest_name'); ?></span></h2>
	 			 								<?php } ?>
	 			 								<h4><span><?php if (!empty(get_field('guest_title'))) { the_field('guest_title') ?><?php } ?>
	 			 									<?php if (!empty(get_field('guest_title')) && !empty(get_field('guest_email'))) { ?> | <?php } ?>
	 			 									<?php if (!empty(get_field('guest_email'))) { the_field('guest_email') ?><?php } ?></span></h4>
	 									<?php } else { ?>
	 										<?php 
	 											$author_name = get_field('author_object')->post_title;
	 											$author_object = get_post_meta(get_field('author_object')->ID);
	 											$author_image = $author_object['bio_image'][0];
	 											$author_email = $author_object['bio_email'][0];
	 											$author_title = $author_object['bio_title'][0];
	 										 ?>
	 			 								<?php if (!empty($author_name)): ?>
	 			 									<h2><span class="author-name"><?php echo $author_name; ?></span></h2>
	 			 								<?php endif; ?>
	 			 								<h4><span><?php if (!empty($author_title)) { echo $author_title; ?><?php } ?>
	 			 									<?php if (!empty($author_title) && !empty($author_email)) { ?> | <?php } ?>
	 			 									<?php if (!empty($author_email)) { echo $author_email; ?><?php } ?></span></h4>
	 									<?php } ?>
	 								</div>
	 								<div class="grid_12 related-posts">
	 									<?php 
	 										$categories = get_the_terms($post->ID, $taxonomy_string);
	 										$terms = array();
	 										foreach ($categories as $category) {
	 											array_push($terms, $category->slug);
	 										}
	 									?>
	 									<?php 
	 										 	$args = array( 
	 										        'post_type' => 'article',
	 										        'posts_per_page' => 3,
	 										        'tax_query' => array(
	 										            array(
	 										                'taxonomy' => 'blog_category',
	 										                'field' => 'slug',
	 										                'terms' => $terms,
	 										            ),
	 										        ),
	 		
	 									    	); 
	 									   		$loop = new WP_Query($args);
	 									 	?>
	 									 	 <?php if ( $loop->have_posts() ) : ?>
	 			 								<h4 class="text-center b-font sidebar-feed-heading">Related Posts</h4>
	 											<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	 												<?php if ($post->ID != $main_post_id): ?>
	 													<?php 
	 														$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '', 'single-post-thumbnail' );
	 													 ?>
	 													<?php if (!empty(get_post_thumbnail_id( $post->ID ))) { ?>
	 														<div class="grid_12">
	 															<div class="sidebar-feed">
	 																<div class="sidebar-image" style="background-image: url(<?php echo $image[0]; ?>)"></div>
	 																<h4 class="related-post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
	 															</div>
	 														</div>
	 													<?php } else { ?>
	 														<div class="grid_12">
	 															<div class="sidebar-feed">
	 																<h4 class="related-post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
	 																<p class="no-margin"><i><?php echo get_the_excerpt(); ?></i></p>
	 															</div>
	 														</div>
	 													<?php } ?>
	 												<?php endif; ?>
	 											<?php endwhile; ?>
	 		
	 										<?php endif; wp_reset_postdata(); ?>
	 		
	 								</div>
	 							</div>
	 						</div>
	 						<div id="article-copy" class="grid_8">
	 			 					<div class="clear"></div>
	 			 					<div class="blog-copy">
	 			 					<?php if( have_rows('image_gallery') ): ?>
	 			 						<?php $counter = 0; ?>
	 				        			<div class="gallery">
	 				        				<div class="gallery-container">
	 				        					<div class="images">
	 								            	<?php while ( have_rows('image_gallery') ) : the_row(); ?>
	 													<?php 
	 														$counter++;
	 														$image = get_sub_field('image');
	 														$image_url = $image['url'];
	 														$image_caption = $image['caption'];
	 													?>
	 													<?php if ($counter < 6) { ?>
	 													 	<a class="fancybox" rel="gallery" data-fancybox="gallery" href="<?php echo $image_url; ?>" data-caption="<?php echo $image_caption; ?>"><div class="gallery-image" style="background-image: url(<?php echo $image_url; ?>)"></div></a>
	 													<?php } elseif ($counter == 6) { ?>
	 												 		<a class="fancybox" rel="gallery" data-fancybox="gallery" href="<?php echo $image_url; ?>" data-caption="<?php echo $image_caption; ?>"><div class="gallery-image" style="background-image: url(<?php echo $image_url; ?>)">
	 													 		<?php if (count(get_field_object('image_gallery')['value']) > 6): ?>
	 														 		<div class="img-filter"></div>
	 														 		<?php 
	 													 				$count = (count(get_field_object('image_gallery')['value'])) - 6;
	 													 			?>
	 													 			<div class="image-count">
	 													 				<p class="count text-center">+ <?php echo $count; ?></p>
	 													 				<p class="more-photos">MORE PHOTOS</p>
	 													 			</div>
	 												 			<?php endif; ?>
	 											 			</div></a>
	 													<?php } else { ?>
	 														<a class="fancybox" rel="gallery" data-fancybox="gallery" href="<?php echo $image_url; ?>" data-caption="<?php echo $image_caption; ?>"></a>
	 													<?php } ?>
	 												<?php endwhile; ?>
	 											</div>
	 										</div>
	 									</div>
	 								<?php endif; ?>
	 			 						<?php if (is_single('10903')) { // Augmented Reality Blog ?>
	 			 						    <?php include (TEMPLATEPATH . '/includes/ar-blog-post.php' ); ?>
	 			 						<?php } else { ?>
	 			 						    <?php the_content(); ?>
	 			 						<?php } ?>
	 			 						<?php $tags = get_the_tags(); ?>
	 			 						<?php if(!empty($tags)) { ?>
	 				 						<div class="tags">
	 											<p class="left"> 
	 												<span><strong>Tags: </strong></span>
	 												<?php foreach ($tags as $tag => $tag) { 
	 													$tag = $tags[$tag];
	 													$tag_slug = $tag->slug;
	 													$tag_name = $tag->name; 
	 													?>
	 													<a class="blog-tag" href="<?php echo get_site_url() . '/tag/' . strtolower($tag_slug); ?>"><?php echo $tag_name; ?></a>
	 												<?php } ?>
	 											</p>
	 				 						</div>
	 									<?php } ?>
	 			 					</div>
	 			 					<script>
	 			 						jQuery(document).ready(function(){
	 			 							jQuery('.related-posts').clone().appendTo('.mobile-related-posts');
	 			 						});
	 			 					</script>
	 			 					<div class="mobile-related-posts">
	 			 						
	 			 					</div>
	 	       			</div>
	 			        <?php endwhile; ?>
	 			 		    <?php else : ?>
	 			 		    	<h1 class="center">Not Found</h1>
	 			 		     	<p class="center">Sorry, but this page cannot be found.</p>
	 			 		<?php endif; ?>
	 			 	</div>
	 	 		</div>
	 	</div>
	 </div>
		
	<?php get_footer(); ?>
	
<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
	    
</body>

