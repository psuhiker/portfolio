<?php

    $current_user = wp_get_current_user();
    
    $member_id = get_current_user_id();
    $member_status = get_field('member_status', 'user_' . $member_id);
    $member_company = get_field('member_company', 'user_' . $member_id);
    $member_linkedin = get_field('member_linkedin', 'user_' . $member_id);
    $member_twitter = get_field('member_twitter', 'user_' . $member_id);
    $member_phone = get_field('member_phone', 'user_' . $member_id);
    $member_address_one = get_field('member_address_one', 'user_' . $member_id);
    $member_address_two = get_field('member_address_two', 'user_' . $member_id);
    $member_city = get_field('member_city', 'user_' . $member_id);
    $member_state = get_field('member_state', 'user_' . $member_id);
    $member_zip = get_field('member_zip', 'user_' . $member_id);
    $member_affiliation = get_field('member_affiliation', 'user_' . $member_id);
    
?>

<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
<?php if (false !== strpos($url,'?success' )) { ?>
    <div class="alert alert-danger" id="success">
        <a class="close float--right font-size--default" data-dismiss="alert" aria-label="Close">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </a>
        <h3 class="sm-margin--top">Your profile has been updated</h3>
    </div>
    <script>
        $("#success").delay(4000).slideUp(200, function() {
            $(this).alert('close');
        });
    </script>
<?php } ?>

<?php if (false !== strpos($url,'?renew' )) { ?>
    <div class="alert alert-danger" id="success">
        <a class="close float--right font-size--default" data-dismiss="alert" aria-label="Close">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </a>
        <h3 class="sm-margin--top">Your membership has been successfully renewed</h3>
    </div>
    <script>
        $("#success").delay(4000).slideUp(200, function() {
            $(this).alert('close');
        });
    </script>
<?php } ?>

<?php 
    $args = array(
        'post_type' => 'member_announcements',
        'offset' => 1,
        'orderby'	=> 'date',
        'order'		=> 'ASC',
    );
    $the_query = new WP_Query( $args );
?>

    <?php if( $the_query->have_posts() ): ?>
        <?php while ($the_query->have_posts()) { $the_query->the_post(); ?>
        
            <div class="alert alert-success">
                <a class="close float--right font-size--default" data-dismiss="alert" aria-label="Close">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </a>
                <h3 class="sm-margin--top"><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
            
    	<?php } ?>
    <?php endif; ?>

<?php wp_reset_postdata(); ?>

<div class="well">

    <div class="float--right default-margin--top text-nowrap lg-margin--bottom">
        <a href="#editProfile" class="btn btn-primary btn-sm" data-toggle="collapse" aria-expanded="false" aria-controls="editProfile" data-parent="#myProfile">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="hidden-xs sm-margin--left"> Edit My Profile</span>
        </a>
        <a href="#editPassword" class="btn btn-primary btn-sm" data-toggle="collapse" aria-expanded="false" aria-controls="editPassword" data-parent="#myProfile">
            <span class="glyphicon glyphicon-lock" aria-hidden="true"></span><span class="hidden-xs sm-margin--left"> Change Password
        </a>
    </div>

    <h2 class="sm-margin--top"><?php echo $current_user->user_firstname; ?> <?php echo $current_user->user_lastname; ?></h2>
    
    <div class="clearfix"></div>
    
    <div class="row">
    
        <div class="col-md-6">
    
            <p class="no-margin--bottom"><strong>Company</strong></p>
            <p><?php echo $member_company; ?></p>
            
            <p class="no-margin--bottom"><strong>Email</strong></p>
            <p><a href="mailto:<?php echo $current_user->user_email; ?>"><?php echo $current_user->user_email; ?></a></p>
            
            <?php if( get_field('member_address_one', 'user_' . $member_id) ) { ?>
            
                <p class="no-margin--bottom"><strong>Address</strong></p>
                <p class="no-margin--bottom"><?php echo $member_address_one; ?></p>
                
                <?php if( get_field('member_address_two', 'user_' . $member_id) ) { ?>
                	<p class="no-margin--bottom"><?php echo $member_address_two; ?></p>
                <?php } ?>
                
                <p>
	                <?php if( get_field('member_city', 'user_' . $member_id) ) { ?>
	                	<?php echo $member_city; ?>, 
	                <?php } ?>
	                <?php if( get_field('member_state', 'user_' . $member_id) ) { ?>
	                	<?php echo $member_state; ?>
	                <?php } ?>
	                <?php if( get_field('member_zip', 'user_' . $member_id) ) { ?>
	                	<?php echo $member_zip; ?>
	                <?php } ?>
                </p>
                
            <?php } ?>
            
        </div>
        
        <div class="col-md-6">
        
	        <?php if( get_field('member_phone', 'user_' . $member_id) ) { ?>
	            <p class="no-margin--bottom"><strong>Phone</strong></p>
	            <p>
	                <?php echo $member_phone; ?>
	            </p>
	        <?php } ?>
            
            <?php if( get_field('member_linkedin', 'user_' . $member_id) ) { ?>
            
                <p class="no-margin--bottom"><strong>LinkedIn</strong></p>
                <p>
                    <a href="https://www.linkedin.com/in/<?php echo $member_linkedin; ?>" target="_blank">
                        <span class="hidden-xs">
                            https://www.linkedin.com/in/<?php echo $member_linkedin; ?>
                        </span>
                        <span class="hidden-sm hidden-md hidden-lg">
                            View on LinkedIn
                        </span>
                    </a>
                </p>
                
            <?php } ?>
            
            <?php if( get_field('member_twitter', 'user_' . $member_id) ) { ?>
            
                <p class="no-margin--bottom"><strong>Twitter</strong></p>
                <p>
                    <a href="https://twitter.com/<?php echo $member_twitter; ?>" target="_blank">
                        <span class="hidden-xs">
                            https://twitter.com/<?php echo $member_twitter; ?>
                        </span>
                        <span class="hidden-sm hidden-md hidden-lg">
                            View on Twitter
                        </span>
                    </a>
                </p>
                
            <?php } ?>
			
			<?php if( get_field('member_affiliation', 'user_' . $member_id) ) { ?>
			
			    <p class="no-margin--bottom"><strong>University / Alumni Affiliation</strong></p>
			    <p>
			        <?php echo $member_affiliation; ?>
			    </p>
			    
			<?php } ?>
        
        </div>
    
    </div>
    
    <div id="myProfile">
    
        <div class="panel">
            <div class="row default-margin--top collapse" id="editProfile">
            
                <div class="col-xs-12">
                    <h3>Edit My Profile</h3>
                </div>
                
                <?php ninja_forms_display_form( 5 ); ?>
            
            </div>
        </div>
        
        <div class="panel">
            <div class="row default-margin--top collapse" id="editPassword">
            
                <div class="col-xs-12">
                    <h3>Change Password</h3>
                </div>
                
                <?php ninja_forms_display_form( 6 ); ?>
            
            </div>
        </div>
        
    </div>

</div>

<div class="col-xs-12">

    <h2>Membership Status</h2>
    
    <div class="float--right">
        <a href="<?php echo site_url(); ?>/membership/renew/?display_name=<?php echo $current_user->user_firstname; ?> <?php echo $current_user->user_lastname; ?>&display_email=<?php echo $current_user->user_email; ?>&display_company=<?php echo $member_company; ?>&display_phone=<?php echo $member_phone; ?>&display_price=100.00" class="btn btn-default btn-sm no-margin--right">
            Renew Now
        </a>
    </div>
    
    <?php 
        $renewaldate = get_field('member_renewal', 'user_' . $member_id);
        $renewaldate = new DateTime($renewaldate);
    ?>
    
    <p>Your membership is active through <?php echo $renewaldate->format('n/j/y'); ?></p>
    
    <div class="clearfix"></div>
    
</div>

<div class="clearfix"></div>

<div class="col-xs-12 lg-margin--top">
    
    <!--<?php 
        echo '<pre>';
            print_r( get_field('member_events_registered', 'user_' . $member_id)  );
        echo '</pre>';
    ?>-->
    
    <?php // if( have_rows('_member_events_registered', 'user_' . $member_id) ): ?>
    
    <?php if( get_field('member_events_registered', 'user_' . $member_id) ) { ?>
    
    	<h2>My Events</h2>
    	<p>You have registered for the following events:</p>
    	
    	<table class="table">
    	
    	    <thead>
    	        <tr>
    	            <td>
    	                Event
    	            </td>
    	            <td>
    	                Registered
    	            </td>
    	            <td>
    	                Purchase Details
    	            </td>
    	            <td>
    	            	Paid
    	            </td>
    	            <!--<td>
    	            	
    	            </td>-->
    	        </tr>
    	    </thead>
    	    <tbody>
    	    
    	        <?php the_field('member_events_registered', 'user_' . $member_id); ?>
    	    
    	    	<!--<?php while ( have_rows('member_events_registered', 'user_' . $member_id) ) : the_row(); ?>
        
        			<tr>
        			    <td data-label="Event">
        			    	<p class="no-margin--bottom">
        			    		<?php the_sub_field('member_events_registered_event_id'); ?>
        			    	</p>
        			    </td>
        			    <td data-label="Date Registered">
        			        12/14/17
        			    </td>
        			    <td data-label="Purchase Details">
        			    	<ul>
        			    		<li>2 @ $250</li>
        			    		<li>$100 Member Renewal</li>
        			    	</ul>
        			    </td>
        			    <td data-label="Amount Paid">
        			    	$600
        			    </td>
        			    <!-/-<td>
        			    	<a href="">
        			    		View Invoice
        			    	</a>
        			    </td>-/->
        			</tr>
        
    			<?php endwhile; ?>-->
    			
    		</tbody>
    	</table>
    <?php //else : endif;?>
    
    <?php } ?>

</div>