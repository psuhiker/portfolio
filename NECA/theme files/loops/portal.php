<?php include (TEMPLATEPATH . '/includes/marquee-portal.php' ); ?>

<?php if ( is_user_logged_in() ) { ?>

	<section class="default">
    	<div class="container">
        
        	<?php 
        	    $member_id = get_current_user_id();
        	    $memberStatusDate = get_field('member_renewal', 'user_' . $member_id);
        	    $memberStatusDate = new DateTime($memberStatusDate);
        	    $expireDate = date('Y') . '1231'; 
        	    $member_phone = get_field('member_phone', 'user_' . $member_id);
        	    $member_company = get_field('member_company', 'user_' . $member_id);
        	    if ( $memberStatusDate->format('Ymd') < $expireDate ) {
        	?>
        
                <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                
                    <p class="font-size--md lg-margin--bottom"><?php echo ( get_theme_mod( 'siteinformation_membership_inactive_text' ) ); ?></p>
                    <p><a href="<?php echo site_url(); ?>/membership/renew/?display_name=<?php echo $current_user->user_firstname; ?> <?php echo $current_user->user_lastname; ?>&display_email=<?php echo $current_user->user_email; ?>&display_company=<?php echo $member_company; ?>&display_phone=<?php echo $member_phone; ?>&display_price=100.00" target="_blank" class="btn btn-default">Pay Membership Dues</a></p>
                
                </div>
                <div class="clearfix"></div>
        
	        <?php } else { ?>
	        
	            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
	                
	                <?php if ( is_page('18') ) { ?>
	                
	                    <?php include (TEMPLATEPATH . '/loops/portal-announcements.php' ); ?>
	                    
	                <?php } elseif ( is_page('51') ) { ?>
	                
	                    <?php include (TEMPLATEPATH . '/loops/portal-profile.php' ); ?>
	                    
	                <?php } elseif ( is_page('250') ) { ?>
	                
	                    <?php include (TEMPLATEPATH . '/loops/portal-directory.php' ); ?>
	                    
	                <?php } ?>
	            
	            </div>
	        
	        <?php } ?>
	        
	        <div class="col-sm-4 col-sm-pull-8 col-md-3 col-md-pull-9">
	            	
	            <?php include (TEMPLATEPATH . '/includes/menu-portal.php' ); ?>
	            	        
	        </div>
        
    	</div>
    </section>
    
    <!--<div class="invoice-container">
    	<div class="default-margin--top">
    		<div class="col-xs-12 text-right">
    			<a href="">
    				<span class="glyphicon glyphicon-print" aria-hidden="true"></span>
    			</a>
    		</div>
    		<div class="col-xs-3">
    			<img src="http://localhost:8888/neca/wp-content/uploads/2017/09/header.jpg">
    		</div>
    		<div class="col-xs-12 font-size--sm default-margin--top">
    			<p class="no-margin--bottom"><?php bloginfo('name'); ?></p>
    			<?php if (!empty(get_theme_mod( 'siteinformation_address' ))) { ?>
    				<p class="no-margin--bottom"><?php echo ( get_theme_mod( 'siteinformation_address' ) ); ?></p>
    			<?php } ?>
    			<p class="default-margin--top no-margin--bottom"><?php echo $current_user->user_firstname; ?> <?php echo $current_user->user_lastname; ?></p>
    			<p class="no-margin--bottom"><?php echo $member_company; ?></p>
    		</div>
    	</div>
    </div>
    <div class="invoice-bg"></div>-->

<?php } else { ?>

    <section class="default bg--tertiary-2">
        <div class="container xl-padding--vertical">
    
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        	    <?php include (TEMPLATEPATH . '/includes/login.php' ); ?>
        	</div>
    	
    	</div>
	</section>

<?php } ?>