<!-- This is the Modal Code -->

<div class="modal fade" tabindex="-1" role="dialog" id="liveModal">
    <div class="modal-dialog" role="document">
    	<div class="modal-content">
    		<div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    			    <img src="<?php bloginfo('template_directory'); ?>/images/close-button-carolina-blue.png">
    			</button>
    			<h4 class="modal-title"><?php the_title(); ?></h4>
    		</div>
    		<div class="modal-body">
    			<?php the_field('modal_content'); ?>
    			<div class="clearfix"></div>
    		</div>
    		<?php if( get_field('modal_url') ) { ?>
        		<div class="modal-footer">
        			<a href="<?php the_field('modal_url'); ?>" class="btn btn-red">
        				<?php the_field('modal_cta_text'); ?>
        			</a>
        		</div>
        	<?php } ?>
    	</div>
    </div>
</div>
