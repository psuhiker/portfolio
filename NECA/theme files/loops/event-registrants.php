<div class="header divider"></div>

<section class="marquee slim bg--primary dark">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 lg-padding--vertical">
                
                <h2 class="subheading">
                    Event Registrants Database
                </h2>
                
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>

<div class="header divider"></div>

<div class="container-fluid lg-margin--top default-margin--bottom">
	
	<table class="table font-size--sm default-margin--top" id="eventRegistrants">
	
	    <thead>
	    	<tr>
    	    	<td class="text-nowrap">
    	    		Event
    	    	</td>
	    		<td class="text-nowrap">
	    			Date
	    		</td>
	    		<td class="text-nowrap">
	    			First Name
	    		</td>
	    		<td class="text-nowrap">
	    			Last Name
	    		</td>
	    		<td class="text-nowrap">
	    			Company
	    		</td>
	    		<td class="text-nowrap">
	    			Email
	    		</td>
	    		<td class="text-nowrap">
	    			Phone
	    		</td>
	    		<!--<td class="text-nowrap">
	    			PayPal Transaction ID
	    		</td>
	    		<td class="text-nowrap">
	    			Name on Credit Card
	    		</td>-->
	    		<td class="text-nowrap">
	    			Paid
	    		</td>
	    		<td class="text-nowrap">
	    			Tickets
	    		</td>
	    		<td class="text-nowrap">
	    			Membership
	    		</td>
	    		<td class="text-nowrap">
	    			Notes
	    		</td>
	    	</tr>
	    </thead>
	    
	    <tbody>
	    
	        <?php 
	            $posts = get_posts(array(
	        		'post_type'	=> 'eventregistrants',
	        		'posts_per_page' => -1
	        	));
	        	if( $posts ) {
	        		foreach( $posts as $post ) {
	        			setup_postdata( $post ); ?>
	        			
	        		<tr>
	        			<td data-label="Event" class="text-nowrap">
	        				<a href="<?php ?><?php echo site_url(); ?>/event/confirmation/?template=invoice&tickets=1&firstName=<?php the_field('first_name'); ?>&lastName=<?php the_field('last_name'); ?>&email=<?php the_field('email_address'); ?>&company=<?php the_field('company'); ?>&event=<?php the_field('event'); ?>&price=<?php the_field('amount_paid'); ?>&phone=<?php the_field('phone'); ?>&transactionid=<?php the_field('paypal_transaction_id'); ?>&creditcardname=<?php the_field('name_on_credit_card'); ?>" target="_blank">
	        					<?php the_field('event'); ?>
	        				</a>
	        			</td>
	        			<td data-label="Date Registered" class="text-nowrap">
	        				<?php the_field('registration_date'); ?>
	        			</td>
	        			<td data-label="First Name" class="text-nowrap">
	        				<?php the_field('first_name'); ?>
	        			</td>
	        			<td data-label="Last Name" class="text-nowrap">
	        				<?php the_field('last_name'); ?>
	        			</td>
	        			<td data-label="Company" class="text-nowrap">
	        				<?php the_field('company'); ?>
	        			</td>
	        			<td data-label="Email Address" class="text-nowrap">
	        				<?php the_field('email_address'); ?>
	        			</td>
	        			<td data-label="Phone Number" class="text-nowrap">
	        				<?php the_field('phone'); ?>
	        			</td>
	        			<!--<td data-label="PayPal Transaction ID" class="text-nowrap">
	        				<?php the_field('paypal_transaction_id'); ?>
	        			</td>
	        			<td data-label="Name on Credit Card" class="text-nowrap">
	        				<?php the_field('name_on_credit_card'); ?>
	        			</td>-->
	        			<td data-label="Amount Paid" class="text-nowrap">
	        				$<?php the_field('amount_paid'); ?>
	        			</td>
	        			<td data-label="Tickets Purchased" class="text-nowrap">
	        				<?php the_field('tickets_purchased'); ?>
	        			</td>
	        			<td data-label="Membership Included" class="text-nowrap">
	        				<?php if( get_field('membership_included') ) { ?>
	        					Yes
	        				<?php } ?>
	        			</td>
	        			<td data-label="Notes" class="text-nowrap">
	        				<?php the_field('notes'); ?>
	        			</td>
	        		</tr>
	            
	        <?php } wp_reset_postdata(); } ?>
	    
	    </tbody>
	
	</table>
	
	<script>
	    $(document).ready(function() {
	        $('#eventRegistrants').DataTable({
	        	   "order": [[ 1, "desc" ]],
	               "pageLength": 100,
	               dom: 'Bfrtip',
	               bAutoWidth: false,
	               buttons: [
	                   'csv', 'excel'
	               ]
	           });
	        $('div.dataTables_filter input').addClass('input-text');
	        $('div.dataTables_filter input').removeClass('input-sm');
	        $('.dt-button').addClass('btn btn-primary btn-sm');
	        $('.dt-buttons').addClass('float--left default-margin--bottom');
	    } );
	</script>
	
</div>
