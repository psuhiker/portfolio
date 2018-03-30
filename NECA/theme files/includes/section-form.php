<section class="form">
    <div class="container">
        <div class="row">
        
        	<div class="col-md-8">
        	
        	    <?php if ( is_page('514') ) { ?>
        	    
        	        <?php include (TEMPLATEPATH . '/includes/menu-donate.php' ); ?>
        	    
        	    <?php } ?>
        	
        	    <?php 
        			$formID = get_sub_field('section_form_form'); 
        			ninja_forms_display_form( $formID ); 
        		?>
        	
        	</div>
        	
        	<div class="col-md-4">
        		&nbsp;
        		<div class="clearfix"></div>
        	</div>
        
        </div>
    </div>
</section>