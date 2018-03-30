<body class="secondary processing">

    <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
    <?php $query = $_SERVER['QUERY_STRING']; ?>

    <?php if ( is_page('411') ) { // New Account Creation ?>
    
    	<?php if (false !== strpos($url,'?update' )) { ?>
    	
    	    <?php include (TEMPLATEPATH . '/includes/script-query.php' ); ?>
    	    
    	    <?php
    	        $queryParts = parse_url($url);
    	        parse_str($queryParts['query'], $query);
    	    ?>
    	    
    	    <?php 
    	        // Parses The Query
    	        $queryParts = parse_url($url);
    	        parse_str($queryParts['query'], $query);
    	        // Gets User Info
    	    	global $current_user; get_currentuserinfo(); 
    	    	$member_id = get_current_user_id();
    	    	// Sets Date Variables
    	    	$updateActivationDate = date('Ymd');
    	    	$updateExpireDate = date('Y') . '1231';
    	    	$updateCompany = $query['company'];
    	    	$updateLinkedIn = $query['linkedin'];
    	    	$updateTwitter = $query['twitter'];
    	    	$updatePhone = $query['phone'];
    	    	$updateAddressOne = $query['address_one'];
    	    	$updateAddressTwo = $query['address_two'];
    	    	$updateCity = $query['city'];
    	    	$updateState = $query['state'];
    	    	$updateZip = $query['zip'];
    	    	$applicantID = $query['applicantID'];
    	    	// Updates Profile
    	    	update_user_meta( $member_id, 'member_company', $updateCompany );
    	    	update_user_meta( $member_id, 'member_linkedin', $updateLinkedIn );
    	    	update_user_meta( $member_id, 'member_twitter', $updateTwitter );
    	    	update_user_meta( $member_id, 'member_phone', $updatePhone );
    	    	update_user_meta( $member_id, 'member_address_one', $updateAddressOne );
    	    	update_user_meta( $member_id, 'member_address_two', $updateAddressTwo );
    	    	update_user_meta( $member_id, 'member_city', $updateCity );
    	    	update_user_meta( $member_id, 'member_state', $updateState );
    	    	update_user_meta( $member_id, 'member_zip', $updateZip );
    	    	update_user_meta( $member_id, 'member_registered', $updateActivationDate );
    	    	update_user_meta( $member_id, 'member_renewal', $updateExpireDate );
    	    	// Moves Pending Status to activePending
    	    	update_post_meta( $applicantID, 'status', 'approved' );
    	    ?>
    	
	    	<div class="inner">
	    	
	    		<p>Creating Account</p>
	    		<p><img src="<?php bloginfo('template_directory'); ?>/images/loading.gif" width="100"></p>
	    		<meta http-equiv="refresh" content="0;URL='<?php echo site_url(); ?>/membership/account/confirmation/'" />
	    	
	    	</div>
    	
    	<?php } else { ?>
    	
    		<meta http-equiv="refresh" content="0;URL='<?php echo site_url(); ?>'" />
    	
    	<?php } ?>
	
	<?php } elseif ( is_page('474') ) { // Membership Renewal ?>
	    
	    <?php if (false !== strpos($url,'?update' )) { ?>
	    	
	    	<div class="inner">
	    	
	    		<p>Processing Account</p>
	    		<p><img src="<?php bloginfo('template_directory'); ?>/images/loading.gif" width="100"></p>
	    		
	    		<?php 
	    			global $current_user; get_currentuserinfo(); 
	    			$member_id = get_current_user_id();
	    			//$expireDate = date('Y' . '1231', strtotime('+1 year'));
	    			$expireDate = date('Y' . '1231');
	    			update_user_meta( $member_id, 'member_renewal', $expireDate );
	    		?>
	    		
	    		<meta http-equiv="refresh" content="0;URL='<?php echo site_url(); ?>/member-portal/my-profile/?renew'" />
	    	
	    	</div>
	    
	    <?php } else { ?>
	    
	    	<meta http-equiv="refresh" content="0;URL='<?php echo site_url(); ?>'" />
	    
	    <?php } ?>
	    
	<?php } elseif ( is_page('497') ) { // Event Registration ?>
	
	    <?php if (false !== strpos($url,'membership=checked' )) { // Logged Out, Include Membership ?>
	    
	        <div class="inner">
	    
    	        <p>Processing Application</p>
    	        <p><img src="<?php bloginfo('template_directory'); ?>/images/loading.gif" width="100"></p>
    	        
    	        <div class="hidden">
    	        	<?php 
    	        	    // displays the form to update fields submitted in the renewal process
    	        	    ninja_forms_display_form('15'); 
    	        	?>
    	        </div>
    	        
    	        <script>
    	            $(window).on("load", function() {
    	                jQuery(document).on( 'nfFormReady', function( e, layoutView ) {
    	        	        document.getElementById('nf-field-150').click();
    	                });
    	        	});
    	        </script>
	        
	        </div>
	        
	    <?php } elseif (false !== strpos($url,'renew=true' )) { ?>
	    
	    	<?php 
	    		global $current_user; get_currentuserinfo(); 
	    		$member_id = get_current_user_id();
	    		$expireDate = date('Y') . '1231';
	    		update_user_meta( $member_id, 'member_renewal', $expireDate );
	    	?>
	    	
	    	<div class="inner">
	    	
	    	    <p>Processing Application</p>
	    	    <p><img src="<?php bloginfo('template_directory'); ?>/images/loading.gif" width="100"></p>
	    	    <meta http-equiv="refresh" content="0;URL='<?php echo site_url(); ?>/event/payment/?<?php echo $query; ?>'" />
	    	    
	    	</div>
	        
	    <?php } elseif (false !== strpos($url,'update=yes' )) { ?>
	    
	        UPDATES PROFILE OF EVENT REGISTERED
	    
	    <?php } else { // Logged Out or In, Does Not Include Membership ?>
    	    
    	    <meta http-equiv="refresh" content="0;URL='<?php echo site_url(); ?>/event/payment/?<?php echo $query; ?>'" />
	    
	    <?php } ?>
	
	<?php } elseif ( is_page('paypal') ) { // PayPal Event Registrants ?>
	
	    <div class="inner">
	    
	    	<p>Processing Account</p>
	    	<p><img src="<?php bloginfo('template_directory'); ?>/images/loading.gif" width="100"></p>
	    	
	    	<div class="hidden">
	    		<?php 
	    		    // displays the form to update fields submitted in the renewal process
	    		    ninja_forms_display_form('22'); 
	    		?>
	    		<a href="#" onclick="getElementById('nf-field-231').click(); myAjax();" class="btn btn-default no-margin--right" id="submitButton">Submit</a>
	    	</div>
	    	
	    	<script>
	    	    $(window).on("load", function() {
	    	    	document.getElementById('submitButton').click();
	    	        jQuery(document).on( 'nfFormReady', function( e, layoutView ) {
	    		        //document.getElementById('nf-field-225').click();
	    		        //document.getElementById('nf-field-231').click();
	    		        document.getElementById('submitButton').click();
	    	        });
	    		});
	    	</script>
	    
	    </div>
	    
	<?php } ?>
	
	<?php wp_footer(); ?>

</body>