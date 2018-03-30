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
	
	<h2 class="post__title"><a class="text-color--steel-blue" href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h2>
	
	<div class="post__content">
		<p><?php echo get_the_excerpt(); ?></p>
		<p><a href="<?php the_permalink(); ?>" class="btn btn-red">Read More</a></p>
	</div>
	
</div>