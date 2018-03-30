<!-- Section: Blocks -->
    
<div class="section blocks">
	<?php if (get_sub_field('section_blocks_layout') == false) {?>
		<div class="image" style="background-image:url(<?php the_sub_field('section_blocks_image')?>);"></div>
		<div class="copy-parent">
			<div class="copy">
				<?php  the_sub_field('section_blocks_copy');?>
			</div>
		</div>
	<?php } else { ?>
		<div class="copy-parent flipped">
			<div class="copy">
				<?php  the_sub_field('section_blocks_copy');?>
			</div>
		</div>
		<div class="image flipped" style="background-image:url(<?php the_sub_field('section_blocks_image')?>);"></div>
	<?php } ?>
</div>