<ul class="breadcrumb">
	<li><a href="<?php echo site_url(); ?>/exploreaops/">Explore AOPS</a></li>
	<?php if(is_tax()) { ?>
	    <li><?php echo get_queried_object()->name; ?></li>
	<?php } ?>
	<?php if(is_search()) { ?>
	    <li><?php echo "$s"; ?></li>
	<?php } ?>
	<?php if(is_single()) { ?>
	    <li>Article</li>
	<?php } ?>
</ul>
