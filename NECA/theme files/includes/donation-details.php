<?php include (TEMPLATEPATH . '/includes/script-query.php' ); ?>

<?php 
    $display_title = 'Corporate Donation';
    $display_price = $_GET['display_price'];
    $display_name = $_GET['display_name'];
    $display_company = $_GET['display_company'];
    $display_email = $_GET['display_email'];
    $display_phone = $_GET['display_phone'];
    $display_address = $_GET['display_address'];
    $display_city = $_GET['display_city'];
    $display_state = $_GET['display_state'];
    $display_zip = $_GET['display_zip'];
    $redirect_url = site_url() . '';
?>

<section class="default bg--tertiary-2">
    <div class="container">
        <div class="row">
        
        	<div class="col-md-8">
        	
        	    <h1><?php echo $display_title; ?></h1>
        	    
        	    <div class="col-xs-12 no-padding--horizontal lg-margin--top">
        	    	<p class="font-size--md font-family--headline">
        	    		<strong>
        	    			Donation Amount: $<?php echo $display_price; ?>
        	    		</strong>
        	    	</p>
        	    	<p class="no-margin--bottom font-size--md">
        	    	    <strong>
        	    	        <?php echo $display_name; ?>, <?php echo $display_company; ?>
        	    	    </strong>
        	    	</p>
        	    	
        	    	<p class="no-margin--bottom">
        	    	    <?php echo $display_address; ?>
        	    	</p>
        	    	
        	    	<p>
        	    	    <?php echo $display_city; ?>, <?php echo $display_state; ?> <?php echo $display_zip; ?>
        	    	</p>
        	    	
        	    	<p class="no-margin--bottom">
        	    	    <?php echo $display_email; ?>
        	    	</p>
        	    	
        	    	<p>
        	    	    <?php echo $display_phone; ?>
        	    	</p>
        	    </div>
        	
        	</div>
        
        </div>
    </div>
</section>