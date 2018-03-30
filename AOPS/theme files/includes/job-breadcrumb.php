<ul class="breadcrumb">
	<li><a href="<?php echo site_url(); ?>/careers/">Careers</a></li>
	<li>
	    <?php if(is_search()) { ?>
	        <a href="<?php echo site_url(); ?>/job/">
	    <?php } elseif(is_archive()) { ?>
	    <?php } else { ?>
	        <a href="<?php echo site_url(); ?>/job/">
	    <?php } ?>
	        Available Positions
	    <?php if(is_search()) { ?>
	        </a>
	    <?php } elseif(is_archive()) { ?>
	    <?php } else { ?>
	        </a>
	    <?php } ?>
	</li>
	<?php if(is_search()) { ?>
	    <li><?php echo term_replace_func($search_query); ?></li>
	<?php } ?>
	<?php if(is_single()) { ?>
	    <li>Job Description</li>
	<?php } ?>
</ul>
