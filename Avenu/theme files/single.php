<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<body class="secondary blog single">

	<?php include (TEMPLATEPATH . '/header.php' ); ?>

	<div class="container xl-padding--vertical">
		<div class="col-sm-8">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<?php
    				$news_featured_image = get_field('news_featured_image');
    				$categories = get_the_category();
				?>
				 
				<div class="post xl-padding--bottom">
					
					<?php if( get_field('news_featured_image') ) { ?>
					    <div class="featured-image">
					    	<img src="<?php echo $news_featured_image; ?>" alt="">
					    </div>
					<?php } ?>
					
					<div class="col-xs-12 no-padding--horizontal default-padding--vertical">
						<span class="post__date"><?php the_date(); ?><?php echo (!empty($categories)) ? ' | </span> <span class="post__category">' . $categories[0]->name . '</span>' : '</span>'; ?>
						</span>
					</div>
					
					<h2 class="post__title"><?php the_title() ?></h2>
					
					<div class="post__content">
						<?php the_content(); ?>
					</div>
					
					<?php if( get_field('document') ) { ?>
					
					    <a href="<?php the_field('document'); ?>" class="btn btn-red" target="_blank" data-tracking="resourceView">
					    	Download
					    </a>
					
					<?php } ?>
					
					<div class="post__author lg-padding--top">
						<p><?php the_author(); ?></p>
					</div>
					
				</div>
				
				<div class="post__pagination">
				    
				    <div class="alignleft">
				        <?php previous_post_link( '%link', 'Previous', TRUE, '13' ); ?>
				    </div>
				    
				    <div class="alignright">
				        <?php next_post_link( '%link', 'Next', TRUE, '13' ); ?>
				    </div>
				
				</div>

			<?php endwhile; ?>

				<?php else : ?>

			<?php endif; ?>

		</div>
		<?php get_sidebar(); ?>
	</div>

	<?php get_footer(); ?>

	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

</body>
