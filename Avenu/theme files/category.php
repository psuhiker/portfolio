<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<body class="secondary blog category">

	<?php include (TEMPLATEPATH . '/header.php' ); ?>

	<div class="container xl-padding--vertical">
		<div class="col-sm-8 blog-feed category">
			
			<div class="post__category lg-margin--bottom">
			    <?php single_cat_title(); ?>
			</div>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			    <?php if( get_field('document') ) { ?>
			    
			        <?php if( $post->post_content != "" ) { ?>
			                
			            <?php include (TEMPLATEPATH . '/includes/blog-display-main.php' ); ?>
			            
			        <?php } else { ?>
			            
			            <div class="post xl-padding--bottom">
			            
			                <h3 class="post__title text-transform--none">
			                    <a class="text-color--steel-blue" href="<?php the_field('document'); ?>" target="_blank" data-tracking="resourceView">
			                        <?php the_title() ?>
			                    </a>
			                </h3>
			            
			            </div>
			            
			        <?php } ?>
			    
			    <?php } else { ?>
			
					<?php include (TEMPLATEPATH . '/includes/blog-display-main.php' ); ?>
				
				<?php } ?>

			<?php endwhile; ?>
			
			    <div class="post__pagination">
			        
			        <div class="alignleft">
			            <?php previous_posts_link( 'Previous' ); ?>
			        </div>
			        
			        <div class="alignright">
			            <?php next_posts_link( 'Next' ); ?>
			        </div>
			    
			    </div>

				<?php else : ?>

			<?php endif; ?>

		</div>
		<?php get_sidebar(); ?>
	</div>

	<?php get_footer(); ?>

	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

</body>
