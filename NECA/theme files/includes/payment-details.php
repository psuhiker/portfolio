<?php include (TEMPLATEPATH . '/includes/script-query.php' ); ?>

<?php if ( is_page('335') ) { // New Membership Payment ?>

    <?php 
        $display_title = 'New Membership Dues';
        $display_price = $_GET['display_price'];
        $display_expires = 'Expires: 12/31/' . date('Y');
        $display_name = $_GET['display_name'];
        $display_company = $_GET['display_company'];
        $display_email = $_GET['display_email'];
        $display_phone = $_GET['display_phone'];
        $redirect_url = site_url() . '/membership/application/confirmation/';
        $display_description = 'New Membership Dues';
    ?>

<?php } elseif ( is_page('472') ) { // Membership Renewal Payment ?>

    <?php 
        $display_title = 'Membership Renewal';
        $display_price = $_GET['display_price'];
        $display_expires = 'Expires: 12/31/' . date('Y', strtotime('+1 year'));
        $display_name = $_GET['display_name'];
        $display_company = $_GET['display_company'];
        $display_email = $_GET['display_email'];
        $display_phone = $_GET['display_phone'];
        $redirect_url = site_url() . '/membership/renew/processing/?update';
        $display_description = 'Membership Renewal';
    ?>

<?php } elseif ( is_page('345') ) { // Donation Payment ?>

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
        $redirect_url = site_url() . '/donate/confirmation/?display_name=' . $display_name . '&display_email=' . $display_email . '&display_phone=' . $display_phone . '&display_company=' . $display_company . '&display_address=' . $display_address . '&display_city=' . $display_city . '&display_state=' . $display_state . '&display_zip=' . $display_zip . '&display_price=' . $display_price . '';
        $display_description = 'Corporate/Indvidual Donation';
    ?>

<?php } elseif ( is_page('493') ) { // Event Payment ?>

    <?php 
        $display_title = 'Event Registration: <span class=\'text-nowrap\'>' . $_GET['event'] . '<span>';
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
    
    <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
    <?php if (false !== strpos($url,'membership=checked' )) { ?>
        <?php 
            $price = ($_GET['price'] * $_GET['tickets']) + 100;
            $display_price = number_format($price, 2, '.', ',');
            $display_address_one = $_GET['address_one'];
            $display_address_two = $_GET['address_two'];
            $display_city = $_GET['city'];
            $display_state = $_GET['state'];
            $display_zip = $_GET['zip'];
            //$redirect_url = site_url() . '/event/confirmation/?membership=checked&tickets=' . $display_tickets . '&firstName=' . $display_name . '&lastName=' . $display_lastname . '&email=' . $display_email . '&company=' . $display_company . '&event=' . $display_event . '&price=' . $display_price . '&phone=' . $display_phone . '&address_one=' . $display_address_one . '&address_two=' . $display_address_two . '&city=' . $display_city . '&state=' . $display_state . '&zip=' . $display_zip . '';
            $redirect_url = site_url() . '/event/payment/paypal/?membership=checked&tickets=' . $display_tickets . '&firstname=' . $display_name . '&lastname=' . $display_lastname . '&email=' . $display_email . '&company=' . $display_company . '&event=' . $display_event . '&paid=' . $display_price . '&phone=' . $display_phone . '&address_one=' . $display_address_one . '&address_two=' . $display_address_two . '&city=' . $display_city . '&state=' . $display_state . '&zip=' . $display_zip . '&transactionid=' . $display_transactionid . '&creditcardname=' . $display_atransactionid . '';
            $display_description = $_GET['event'] . ' Event Registration - ' . $display_tickets . ' ticket(s) & New Membership Dues';
        ?>
    <?php } elseif (false !== strpos($url,'renew=true' )) { ?>
    	<?php 
    	    $price = ($_GET['price'] * $_GET['tickets']) + 100;
    	    $display_price = number_format($price, 2, '.', ',');
    	    //$redirect_url = site_url() . '/event/confirmation/?renew=true&tickets=' . $display_tickets . '&firstName=' . $display_name . '&lastName=' . $display_lastname . '&email=' . $display_email . '&company=' . $display_company . '&event=' . $display_event . '&price=' . $display_price . '&phone=' . $display_phone . ''; 
    	    $redirect_url = site_url() . '/event/payment/paypal/?renew=true&tickets=' . $display_tickets . '&firstname=' . $display_name . '&lastname=' . $display_lastname . '&email=' . $display_email . '&company=' . $display_company . '&event=' . $display_event . '&paid=' . $display_price . '&phone=' . $display_phone . '&transactionid=' . $display_transactionid . '&creditcardname=' . $display_atransactionid . ''; 
    	    $display_description = $_GET['event'] . ' Event Registration - ' . $display_tickets . ' ticket(s)  & Membership Renewal';
    	?>
    <?php } elseif (false !== strpos($url,'newmember=true' )) { ?>
    	<?php 
    	    $price = ($_GET['price'] * $_GET['tickets']) + 100;
    	    $display_price = number_format($price, 2, '.', ',');
    	    //$redirect_url = site_url() . '/event/confirmation/?renew=true&tickets=' . $display_tickets . '&firstName=' . $display_name . '&lastName=' . $display_lastname . '&email=' . $display_email . '&company=' . $display_company . '&event=' . $display_event . '&price=' . $display_price . '&phone=' . $display_phone . ''; 
    	    $redirect_url = site_url() . '/event/payment/paypal/?renew=true&tickets=' . $display_tickets . '&firstname=' . $display_name . '&lastname=' . $display_lastname . '&email=' . $display_email . '&company=' . $display_company . '&event=' . $display_event . '&paid=' . $display_price . '&phone=' . $display_phone . '&transactionid=' . $display_transactionid . '&creditcardname=' . $display_atransactionid . ''; 
    	    $display_description = $_GET['event'] . ' Event Registration - ' . $display_tickets . ' ticket(s)  & New Membership Dues';
    	?>
    <?php } else { ?>
        <?php 
            $price = ($_GET['price'] * $_GET['tickets']);
            $display_price = number_format($price, 2, '.', ',');
            //$redirect_url = site_url() . '/event/confirmation/?tickets=' . $display_tickets . '&firstName=' . $display_name . '&lastName=' . $display_lastname . '&email=' . $display_email . '&company=' . $display_company . '&event=' . $display_event . '&price=' . $display_price . '&phone=' . $display_phone . ''; 
            $redirect_url = site_url() . '/event/payment/paypal/?tickets=' . $display_tickets . '&firstname=' . $display_name . '&lastname=' . $display_lastname . '&email=' . $display_email . '&company=' . $display_company . '&event=' . $display_event . '&paid=' . $display_price . '&phone=' . $display_phone . '&transactionid=' . $display_transactionid . '&creditcardname=' . $display_atransactionid . ''; 
            $display_description = $_GET['event'] . ' Event Registration - ' . $display_tickets . ' ticket(s) ';
        ?>
    <?php } ?>

<?php } ?>

<h3>Payment Summary</h3>
<p class="subheading subheading--no-shadow"><?php echo $display_title; ?></p>
<hr>

<div class="row">

    <?php if ( is_page('345') ) { // Donation Payment ?>

    	<div class="col-xs-6 no-padding--left details">
    	
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
    	
    <?php } elseif ( is_page('493') ) { // Event Payment ?>
    
        <div class="col-xs-6 no-padding--left details">
        
            <p class="no-margin--bottom font-size--md">
        	    <strong>
        	        <?php echo $display_name; ?> <?php echo $display_lastname; ?>
        	    </strong>
        	</p>
        	
        	<p class="no-margin--bottom font-size--md">
        	    <?php echo $display_company; ?>
        	</p>
        	
        	<p class="no-margin--bottom">
        	    <?php echo $display_email; ?>
        	</p>
        	
        	<p>
        	    <?php echo $display_phone; ?>
        	</p>
        	
        </div>
    	
    <?php } else { ?>
    
        <div class="col-xs-6 no-padding--left details">
        
        	<p class="no-margin--bottom font-size--md">
        	    <strong>
        	        <?php echo $display_name; ?>
        	    </strong>
        	</p>
        	
        	<p class="no-margin--bottom font-size--md">
        	    <?php echo $display_company; ?>
        	</p>
        	
        	<p class="no-margin--bottom">
        	    <?php echo $display_email; ?>
        	</p>
        	
        	<p>
        	    <?php echo $display_phone; ?>
        	</p>
        	
        </div>
    
    <?php } ?>
	
	<div class="col-xs-6">
	
		<p class="font-size--lg text-right">
		    <strong>
		        $<?php echo $display_price; ?>
		    </strong>
		</p>
		
		<?php if ( is_page('493') ) { // Event Payment ?>
		
		    <p class="text-right">
		        Number of Tickets: <?php echo $display_tickets; ?>
		    </p>
		    
		    <?php if (false !== strpos($url,'membership=checked' )) { ?>
		    
		        <p class="text-right">
		            <i class="fa fa-check" aria-hidden="true"></i> Includes Membership Application Fee
		        </p>
		        
		    <?php } elseif (false !== strpos($url,'renew=true' )) { ?>
		    
		    	<p class="text-right">
		    	    <i class="fa fa-check" aria-hidden="true"></i> Includes Membership<br> Renewal Fee
		    	</p>
		    
		    <?php } ?>
		
		<?php } ?>
		
		<p class="text-right">
		    <?php echo $display_expires; ?>
		</p>
		
	</div>
	
</div>