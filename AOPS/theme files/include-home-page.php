<div class="campaign-block grid_12" style="background-image: url(http://257.oce.venus.fvm.sc/wp-content/uploads/2015/05/grey-bg.jpg);">
	<div class="container">
		<?php if( have_rows('campaign_blocks') ): ?>
			<?php $counter = 1; ?>
		    <?php while ( have_rows('campaign_blocks') ) : the_row(); ?>
		
		        <?php 
		        	$display_image = get_sub_field('display_image');
		        	$campaign_heading = get_sub_field('campaign_heading');
		        	$campaign_copy = get_sub_field('campaign_copy');
		        	$campaign_page_link = get_sub_field('campaign_page_link');
		        	$campaign_link_text = get_sub_field('campaign_link_text');
		         ?>
		
		         <div class="grid_6 w-bg campaign-wrapper <?php echo ($counter == 1 ? 'campaign-left' : 'campaign-right'); ?>">
		         	<div class="grid_4 campaign-image" style="background-image: url(<?php echo $display_image['url']; ?>)"></div>
		         	<div class="grid_8 campaign-copy">
		         		<h3 class="bl-font campaign-heading"><?php echo $campaign_heading; ?></h3>
		         		<p><?php echo $campaign_copy; ?></p>
		         		<div class="campaign-btn">
		         			<a href="<?php echo $campaign_page_link; ?>" class="button red small"><?php echo $campaign_link_text; ?></a>
		         		</div>
		         	</div>
		         </div>
				<?php $counter++; ?>
		    <?php endwhile; ?>
		
		<?php endif; ?>
	</div>
</div>