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
					
					<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
					<?php if (false !== strpos($url,'?memberapproved' )) { ?>
					    <div class="alert alert-danger" id="approved">
					        <a class="close float--right font-size--default" data-dismiss="alert" aria-label="Close">
					            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					        </a>
					        <h3 class="sm-margin--top">Member approval email submitted</h3>
					    </div>
					    <script>
					        $("#approved").delay(2000).slideUp(200, function() {
					            $(this).alert('close');
					        });
					    </script>
					<?php } ?>
					
					<?php if (false !== strpos($url,'?memberdenied' )) { ?>
					    <div class="alert alert-danger" id="approved">
					        <a class="close float--right font-size--default" data-dismiss="alert" aria-label="Close">
					            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					        </a>
					        <h3 class="sm-margin--top">Member rejection email submitted</h3>
					    </div>
					    <script>
					        $("#approved").delay(2000).slideUp(200, function() {
					            $(this).alert('close');
					        });
					    </script>
					<?php } ?>
					
					<script>
						$(function(){
						  var hash = window.location.hash;
						  hash && $('ul.nav a[href="' + hash + '"]').tab('show');
						});
					</script>
					
					<ul class="nav nav-tabs" role="tablist">
					    <li role="presentation" class="active"><a href="#active" aria-controls="active" role="tab" data-toggle="tab">Active Members</a></li>
					    <li role="presentation"><a href="#lapsed" aria-controls="lapsed" role="tab" data-toggle="tab">Lapsed Members</a></li>
					    <li role="presentation"><a href="#pending" aria-controls="pending" role="tab" data-toggle="tab">Pending Memberships</a></li>
					</ul>
					
					<div class="tab-content">
						
						<div role="tabpanel" class="tab-pane active" id="active">
							<div class="searchableActive">
								
								<h1 class="subheading--no-shadow lg-margin--top">Active NECA Members</h1>
								
								<div class="col-md-6 no-padding--horizontal">
								    <form id="filterForm" onsubmit="return false;">
								    	<input id="filterActive" type="text" class="input-text" placeholder="Search Active Members...">
								    	<div class="resetActive" style="display: none;">
								    	    <a id="resetBtnActive"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
								    	</div>
								    </form>
								</div>
								
								<?php 
								    $postsPending = get_posts(array(
										'post_type'	=> 'pending',
										'posts_per_page' => -1,
										'orderby' => 'title',
										'order' => ASC,
										'meta_query' => array( array(
										    'key' => 'status',
										    'value' => 'activePending' ))
									));
									if( $postsPending ) { ?>
								
								<div class="col-xs-12 alert alert-warning lg-margin--top">
									
									<p class="text-color--black">The following members are active, but have not yet set up their online account.</p>
									
									<table class="table searchableActivePending">
									
										<thead>
											<tr>
												<td class="text-nowrap">
													<br>Name
												</td>
												<td class="text-nowrap">
													<br>Company
												</td>
												<td class="text-nowrap">
													<br>Email
												</td>
											</tr>
										</thead>
									
											<?php foreach( $postsPending as $post ) {
												setup_postdata( $post ); ?>
													
												<tr class="member item">
													<td data-label="Name" class="text-nowrap">
														<?php the_field('last_name'); ?>, <?php the_field('first_name'); ?> 
													</td>
													<td data-label="Company" class="text-nowrap">
														<?php the_field('company'); ?>
													</td>
													<td data-label="Email" class="text-nowrap">
														<a href="mailto:<?php the_field('email_address'); ?>">
														    <?php the_field('email_address'); ?>
														</a>
													</td>
												</tr>
												
											<?php } ?>
									
										</table>
										
									</div>
									
									<div class="clearfix"></div>
											
								<?php wp_reset_postdata(); } ?>
								
								<table class="table searchableActive">
									
									<?php include (TEMPLATEPATH . '/includes/admin-thead.php' ); ?>
									
									<tbody>
									
									    <style><!--
									        .user_11, .user_1 {
									            display: none !important;
									        }
									    --></style>
								
									    <?php 
									    	$blogusers = get_users( [ 'role__in' => [ 'contributor', 'editor', 'administrator' ], 'meta_key' => 'last_name', 'orderby' => 'meta_value' ] );
									    	foreach ( $blogusers as $user ) {
									    	$userid = 'user_'.$user->ID;
									    	$renewaldate = get_field('member_renewal', $userid);
									    	$renewaldate = new DateTime($renewaldate);
									    ?>
									    
									        <?php include (TEMPLATEPATH . '/includes/admin-member.php' ); ?>
									    	
									   	<?php } ?>
								   	
								   	</tbody>
									
								</table>
								
							</div>
						</div>
						
						<div role="tabpanel" class="tab-pane" id="lapsed">
							<div class="searchableLapsed">
							
							    <h1 class="subheading--no-shadow lg-margin--top">NECA Members with Lapsed Membership</h1>
							    
							    <div class="col-md-6 no-padding--horizontal">
							        <form id="filterForm" onsubmit="return false;">
							        	<input id="filterLapsed" type="text" class="input-text" placeholder="Search Lapsed Members...">
							        	<div class="resetLapsed" style="display: none;">
							        	    <a id="resetBtnLapsed"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
							        	</div>
							        </form>
							    </div>
							    
							    <table class="table searchableLapsed">
							    	
							    	<?php include (TEMPLATEPATH . '/includes/admin-thead.php' ); ?>
							    	
							    	<tbody>
							    
									    <?php 
									    	$blogusers = get_users( [ 'role__in' => [ 'contributor', 'editor' ], 'meta_key' => 'last_name', 'orderby' => 'meta_value' ] );
									    	foreach ( $blogusers as $user ) {
									    	$userid = 'user_'.$user->ID;
									    	$renewaldate = get_field('member_renewal', $userid);
									    	$renewaldate = new DateTime($renewaldate);
									    ?>
									    
									    	<?php include (TEMPLATEPATH . '/includes/admin-member.php' ); ?>
									    	
									   	<?php } ?>
								   	
								   	</tbody>
							   	
							   	</table>
							
							</div>
						</div>
						
						<div role="tabpanel" class="tab-pane" id="pending">
						    <div class="searchablePending">
						      
						        <h1 class="subheading--no-shadow lg-margin--top">Pending Applicants</h1>
						          
						        <div class="col-md-6 no-padding--horizontal">
						            <form id="filterForm" onsubmit="return false;">
										<input id="filterPending" type="text" class="input-text" placeholder="Search Pending Applicants...">
						              	<div class="resetPending" style="display: none;">
						              	    <a id="resetBtnPending"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
						              	</div>
						            </form>
						        </div>
						          
						        <?php include (TEMPLATEPATH . '/includes/admin-pending.php' ); ?>
						  
						    </div>
						</div>
						
					</div>
			
				</div>
			
			<?php } ?>
			
			<div class="col-sm-4 col-sm-pull-8 col-md-3 col-md-pull-9">
			
			    <?php include (TEMPLATEPATH . '/includes/menu-portal.php' ); ?>
			        
			</div>
			
		</div>
	</section>

<?php } else { ?>

    <div class="container xl-padding--vertical">

        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    	    <?php include (TEMPLATEPATH . '/includes/login.php' ); ?>
    	</div>
	
	</div>

<?php } ?>