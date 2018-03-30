<?php if( get_field('introductory_copy') ) { ?>

	<section class="intro">
	    <div class="container">
	        <div class="row row-eq-height">
	            <div class="col-md-7">
	                <?php the_field('introductory_copy'); ?>
	            </div>
	            <div class="col-md-5 bg">
	            </div>
	        </div>
	    </div>
	</section>

<?php } ?>