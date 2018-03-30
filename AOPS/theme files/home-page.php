<body class="home">

	<?php get_header(); ?>
	
	<?php get_template_part( 'loop-marquee' ); ?>
	
	
	<?php get_template_part( 'include-home-page' ); ?>

	<div class="clear">&nbsp;</div>
	<div class="divider">
	    <div class="container">
	        <div class="padding">
	    
    	        <div class="title">
    	            <p>What's New</p>
    	        </div>
    	        
    	        <div class="social">
    	            <ul>
    	                <?php if (!empty(get_theme_mod( 'socialmedia_facebook' ))) { ?><li><a href="<?php echo get_theme_mod( 'socialmedia_facebook' ); ?>" target="_blank" class="Facebook"></a></li><?php } ?>
    	                <?php if (!empty(get_theme_mod( 'socialmedia_twitter' ))) { ?><li><a href="<?php echo get_theme_mod( 'socialmedia_twitter' ); ?>" target="_blank" class="Twitter"></a></li><?php } ?>
    	                <?php if (!empty(get_theme_mod( 'socialmedia_instagram' ))) { ?><li><a href="<?php echo get_theme_mod( 'socialmedia_instagram' ); ?>" target="_blank" class="Instagram"></a></li><?php } ?>
    	                <?php if (!empty(get_theme_mod( 'socialmedia_rss' ))) { ?><li><a href="<?php echo get_theme_mod( 'socialmedia_rss' ); ?>" target="_blank" class="RSS"></a></li><?php } ?>
    	            </ul>
    	        </div>
    	        
    	        <div class="clear">&nbsp;</div>
	
	        </div>
	    </div>
	</div>

	<div class="blog-block grid_12" style="background-image: url(http://257.oce.venus.fvm.sc/wp-content/uploads/2015/05/grey-bg.jpg);">
		<div class="container">
			<?php if( have_rows('blog_posts') ): ?>
				<div class="blog-wrapper posts-row flex">
					<?php $blog_counter = 1; ?>
					<?php while ( have_rows('blog_posts') ) : the_row(); ?>
					<?php 
						$blog_post_object = get_sub_field('blog_post_object');
						if ($blog_post_object) {
							$post = $blog_post_object;
							setup_postdata($post);
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '', 'single-post-thumbnail' ); 
					?>
				        <?php if (has_post_thumbnail()) { ?>
						    <?php if ($blog_counter % 4 == 0) { ?></div><div class="clear"></div><div class="posts-row" data-equalizer><?php } ?>
							<div class="post-block post-wrapper grid_3 post-4">
								<div class="grid_12 post-wrapper-image" style="background-image: url(<?php echo $image[0]; ?>);">
								</div>
								<div class="grid_12 blog-copy">
									<h3 class="blog-title text-center"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>
								</div>
								<div class="read-more-non text-center grid_12 btn-wrapper">
									<a href="<?php echo get_permalink(); ?>" class="button red small" data-label="<?php echo the_title(); ?>">Read More</a>
								</div>
							</div>
							<?php $blog_counter++; ?>
						<?php } else { ?>
						    <?php if ($blog_counter % 4 == 0) { ?></div><div class="clear"></div><div class="posts-row" data-equalizer><?php } ?>
							<div class="post-block post-wrapper grid_3 post-4" data-equalizer-watch>
								<div class="grid_12 b-bg">
									<div class="blog-copy">
										<h3 class="blog-title--w"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>
										<div class="w-font"><?php the_excerpt(); ?></div>
									</div>
								</div>
								<div class="text-center grid_12 btn-wrapper">
									<a href="<?php echo get_permalink(); ?>" class="button red small">Read More</a>
								</div>
							</div>
							<?php $blog_counter++; ?>
						<?php } ?>
						<?php } ?>
					<?php $blog_counter++; ?>
					<?php wp_reset_postdata(); ?>
				    <?php endwhile; ?>
				</div>
			
			<?php endif; ?>

			<div class="news grid_12">
	            
                <?php query_posts('showposts=3'); ?>
                <?php $post_counter = 1; ?>
                <?php if ( have_posts() ) : ?>
                	<h3 class="ob-font section-heading">News</h3>
                	<div class="news-block flex">
		                <?php while ( have_posts() ) : the_post(); ?>
		                	<div class="grid_4 news-wrapper  w-bg <?php if ($post_counter == 1) { echo 'post-left'; } elseif($post_counter == 2 ) { echo 'post-center'; } else { echo 'post-right'; } ?>">
	                			<h3 class="blog-title--gray b-font"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	                			<p class="b-font"><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
		                   		<div>
		                   			<a href="<?php the_permalink(); ?>" class="r-font home-read-more">Read More</a>
		                   		</div>
		                	</div>
		                <?php $post_counter++; ?>
		                <?php endwhile; ?>
	                </div>
                <?php endif; ?>
	            
			</div>

			<div class="events">
				<div class="grid_12">
					<h3 class="ob-font section-heading">Events</h3>
				</div>
				<?php
				$events = tribe_get_events( array(
				    'posts_per_page' => 3,
				    'start_date' => date('Y-m-d'),
				) );
				foreach ( $events as $post ) {
				    setup_postdata( $post ); ?>
					<?php $term = get_the_terms($post->ID, 'tribe_events_cat')[0]; ?>
					<?php $title = get_the_title(); ?>
						<div class="grid_4">
							<div class="news-wrapper">
								<h3><a class="event-title" href="<?php echo get_site_url() . '/events/category/' . $term->slug . '/#' . $title; ?>"><?php the_title(); ?></a></h3>
								<span><?php echo tribe_get_start_date($post->ID, false, 'l, F jS'); ?></span>
								
							</div>
						</div>
				<?php } wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
	
	
	<div class="links">
	    <div class="container">
	    
	        <?php while(the_flexible_field('link', 2)): ?>
	            <?php if(get_row_layout() == "add_a_link"): ?>
	               <div class="grid_2 link">
	                   <div class="padding">
	                       <a class="external-links" href="<?php the_sub_field('links_add_a_link_url'); ?>" target="_blank">
    	                       <div class="image" style="background-image: url(<?php the_sub_field('links_add_a_link_logo'); ?>);">
    	                           &nbsp;
    	                       </div>
    	                       <div class="title"><?php the_sub_field('links_add_a_link_title'); ?></div>
	                       </a>
	                   </div>
	               </div>
	                
	            <?php endif; ?>
	        <?php endwhile; ?>
	        
	        <div class="clear">&nbsp;</div>
	
	    </div>
	</div>
		
	<?php get_footer(); ?>
	
<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
	    
</body>