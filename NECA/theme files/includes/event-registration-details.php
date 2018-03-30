<?php include (TEMPLATEPATH . '/includes/script-query.php' ); ?>

<?php 
	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	$display_event = $_GET['event'];
	$display_name = $_GET['firstName'];
	$display_lastname = $_GET['lastName'];
	$display_company = $_GET['company'];
	$display_email = $_GET['email'];
	$display_phone = $_GET['phone'];
	$display_tickets = $_GET['tickets'];
	$display_transactionid = $_GET['transactionid'];
	$display_creditcardname = $_GET['creditcardname'];
?>

	<?php if (false !== strpos($url,'membership=checked' )) {
	
		$tickets_price = ($_GET['price'] - 100) * ($_GET['tickets']); 
		$price = $tickets_price + 100;
		$display_price = number_format($price, 2, '.', ',');
	
	} elseif (false !== strpos($url,'renew=true' )) {
	
		$tickets_price = ($_GET['price'] - 100) * ($_GET['tickets']);
		$price = $tickets_price + 100;
		$display_price = number_format($price, 2, '.', ',');
	
	} else {
	
		$tickets_price = ($_GET['price']);
		$price = ($_GET['price']);
		$display_price = number_format($price, 2, '.', ',');
	
	} ?>

<section class="default bg--tertiary-2">
    <div class="container">
        <div class="row">
        
            <div class="paypal">
        
                <div class="col-xs-6 col-sm-4">
                	
                	<div class="xl-padding--vertical">
                		<img src="<?php echo esc_url( get_theme_mod( 'themesimages_logo' ) ); ?>">
                	</div>
                	
                	<div class="xl-padding--horizontal">
                		<p><?php echo ( get_theme_mod( 'siteinformation_address' ) ); ?></p>
                	</div>
                	
                </div>
                
                <div class="clearfix"></div>
            
            </div>
        
        	<div class="col-md-8">
        	    
        	    <div class="col-xs-12 no-padding--horizontal lg-margin--top">
        	    	<p class="font-size--lg font-family--headline">
        	    		<strong>
        	    			<span class="paypal">Event Name:</span> <?php echo $display_event; ?>
        	    		</strong>
        	    	</p>
        	    	<p class="no-margin--bottom font-size--md">
        	    	    <strong>
        	    	        <?php echo $display_name; ?> <?php echo $display_lastname; ?>, <?php echo $display_company; ?>
        	    	    </strong>
        	    	</p>
        	    	
        	    	<p class="no-margin--bottom">
        	    	    <?php echo $display_email; ?>
        	    	</p>
        	    	
        	    	<p>
        	    	    <?php echo $display_phone; ?>
        	    	</p>
        	    	<p class="lg-margin--top font-size--md">
        	    		<strong>
        	    			Purchase Summary
        	    		</strong>
        	    	</p>
        	    	<dl class="row">
        	    		<dt class="col-xs-3 col-sm-2">
        	    			$<?php echo $tickets_price; ?>
        	    		</dt>
        	    		<dd class="col-xs-9 col-sm-10">
        	    			<?php echo $display_tickets; ?> ticket(s) purchased
        	    		</dd>
        	    		
        	    		<?php if (false !== strpos($url,'membership=checked' )) { ?>
	        	    		<dt class="col-xs-3 col-sm-2">
	        	    			$100
	        	    		</dt>
	        	    		<dd class="col-xs-9 col-sm-10">
	        	    			NECA Membership
	        	    		</dd>
	        	    	<?php } elseif (false !== strpos($url,'renew=true' )) { ?>
	        	    		<dt class="col-xs-3 col-sm-2">
	        	    			$100
	        	    		</dt>
	        	    		<dd class="col-xs-9 col-sm-10">
	        	    			NECA Membership Renewal
	        	    		</dd>
	        	    	<?php } ?>
	        	    		
        	    		<dt class="col-xs-12">
        	    			<hr>
        	    		</dt>
        	    		<dt class="col-xs-3 col-sm-2">
        	    			$<?php echo $display_price; ?>
        	    		</dt>
        	    		<dd class="col-xs-9 col-sm-10">
        	    			Total Payment
        	    		</dd>
        	    	</dl>
        	    	
        	    	<div class="paypal">
        	    		
        	    		<p class="lg-margin--top font-size--md">
        	    			<strong>
        	    				Transaction Details
        	    			</strong>
        	    		</p>
        	    		<dl class="row">
        	    			<dt class="col-xs-5">
        	    				Transaction ID: 
        	    			</dt>
        	    			<dd class="col-xs-7">
        	    				<?php echo $display_transactionid; ?>
        	    			</dd>
        	    			<dt class="col-xs-5">
        	    				Name on Card: 
        	    			</dt>
        	    			<dd class="col-xs-7">
        	    				<?php echo $display_creditcardname; ?>
        	    			</dd>
        	    		</dl>
        	    		
        	    	</div>
        	    
        	    	<?php
        	    	    
        	    	    $current_user = wp_get_current_user();
        	    		$member_id = get_current_user_id();
        	    		$field_key = "member_events_registered";
        	    		$existing_registered = get_field('member_events_registered', 'user_' . $member_id);
        	    		$display_date_registered = date('n/j/y');
        	    		
        	    		update_user_meta( $member_id, $field_key, $existing_registered . '<tr><td data-label="Event"><p class="no-margin--bottom">' . $display_event . '</p></td><td data-label="Date Registered">' . $display_date_registered . '</td><td data-label="Purchase Details">' . $display_tickets . ' tickets</td><td data-label="Amount Paid">$' . $tickets_price . '</td></tr>' );
        	    	
        	    	?>
        	    	
        	    </div>
        	
        	</div>
        
        </div>
    </div>
</section>