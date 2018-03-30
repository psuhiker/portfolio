<body class="secondary blog">

	<?php get_header(); ?>
	
	<div class="grid_12 marquee">
	    <div class="container">
	         
	         <div class="image" style="background-image: url(<?php the_field('marquee_image'); ?>)">
	             <div class="border">&nbsp;</div>
	             <div class="title">News and Articles</div>
	         </div>
	         <div class="grid_12 copy">
	             <div class="padding">
	             
	                 <?php if (is_home()) { ?>
	                     <h1><?php the_field('the_subtitle', 7); ?></h1>
	                 <?php } elseif ( is_archive() ) { ?>
	                     <h1>News and Articles for <?php single_cat_title( '', true ); ?></h1>
	                 <?php } else { ?>
	                     <h1><?php single_tag_title(); ?></h1>
	                 <?php } ?>
	             
	             </div>
	         </div>
	     
	     </div>
	</div>
	<div class="clearfix"></div>

	<div class="gray-bg">
		<?php include (TEMPLATEPATH . '/search-news-form.php' ); ?>
				
		<?php get_template_part( 'loop-blog' ); ?>
	</div>
		
	<?php get_footer(); ?>
	
<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
	    
</body>