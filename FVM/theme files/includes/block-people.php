<a class="bio bio-toggle<?php the_id(); ?>">

    <div class="outer min-height">
        <div class="inner">
        	
        	<div class="background">
        		<div class="background--one" style="background-image: url(<?php the_field('employee_photo_1'); ?>);"></div>
        		<div class="background--two" style="background-image: url(<?php the_field('employee_photo_2'); ?>);"></div>
        	</div>
    
            <div class="content--bottom min-height">
            				
            	<div class="block--label">
                	<h2 class="subheadline"><?php the_title(); ?></h2>
                	<div class="label">
                		<?php the_field('employee_title'); ?>
                	</div>
            	</div>
            				
            </div>
            
        </div>
    </div>
</a>

<?php include (TEMPLATEPATH . '/includes/bio-panel.php' ); ?>

<!-- Panel Callout -->
<script>
    $(document).ready(function() {
		$('.bio-toggle<?php the_id(); ?>').click(function(){
			$('.bio-content<?php the_id(); ?>').toggleClass('active');
			$('.bio-overlay').toggleClass('active');
			$('body').toggleClass('modal-open');
		});
	});
</script>