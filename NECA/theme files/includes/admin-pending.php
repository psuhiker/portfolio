<table class="table searchablePending">

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
    		<td class="text-nowrap">
    			Date<br> Applied
    		</td>
    		<td>
    			
    		</td>
    	</tr>
    </thead>
    
    <tbody>
    
        <?php 
            $postsPending = get_posts(array(
        		'post_type'	=> 'pending',
        		'posts_per_page' => -1,
        		'orderby' => 'title',
        		'order' => ASC,
        		'meta_query' => array( array(
        		    'key' => 'status',
        		    'value' => 'pending' ))
        	));
        	if( $postsPending ) {
        		foreach( $postsPending as $post ) {
        			setup_postdata( $post ); ?>
        			
        		<tr class="item<?php $activeRenewal = date('Y') . '1231'; if ( $renewaldate->format('Ymd') < $activeRenewal ) { ?> hasLapsed<?php } else { ?> isActive<?php } ?>">
        			<td data-label="Name" class="text-nowrap">
        				<?php the_field('last_name'); ?>, <?php the_field('first_name'); ?>
        			</td>
        			<td data-label="Company" class="text-nowrap">
        				<?php the_field('company'); ?>
        			</td>
        			<td data-label="Email" class="text-nowrap">
        				<?php the_field('email_address'); ?>
        			</td>
        			<td data-label="Date Applied" class="text-nowrap">
        				<?php the_time('n/j/y'); ?>
        			</td>
        			<td>
        				<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#pendingModal<?php the_id(); ?>">View</a>
        			</td>
        		</tr>
        		
        		<div id="pendingModal<?php the_id(); ?>" class="modal fade" role="dialog">
        		    <div class="modal-dialog modal-lg">
        		        <div class="modal-content">
        		            <div class="modal-header">
        		                <button type="button" class="close" data-dismiss="modal">&times;</button>
        		                <h4 class="modal-title">Member Application: <?php the_field('first_name'); ?> <?php the_field('last_name'); ?></h4>
        		            </div>
        		            <div class="modal-body">
        		                <div class="col-md-6">
            		                <dl class="row">
            		                    <dt class="col-sm-3">
            		                        Name:
            		                    </dt>
            		                    <dd class="col-sm-9">
            		                        <?php the_field('first_name'); ?> <?php the_field('last_name'); ?>
            		                    </dd>
            		                    <dt class="col-sm-3">
            		                        Email:
            		                    </dt>
            		                    <dd class="col-sm-9">
            		                        <?php the_field('email_address'); ?>
            		                    </dd>
            		                    <dt class="col-sm-3">
            		                        Phone:
            		                    </dt>
            		                    <dd class="col-sm-9">
            		                        <?php the_field('phone'); ?>
            		                    </dd>
            		                </dl>
        		                </div>
        		                <div class="col-md-6">
        		                    <dl class="row">
        		                        <dt class="col-sm-3">
        		                            Company:
        		                        </dt>
        		                        <dd class="col-sm-9">
        		                            <?php the_field('company'); ?>
        		                        </dd>
        		                        <dt class="col-sm-3">
        		                            Address:
        		                        </dt>
        		                        <dd class="col-sm-9">
        		                            <?php the_field('address_one'); ?><br>
        		                            <?php if( get_field('address_two')) { ?>
        		                                <?php the_field('address_two'); ?><br>
        		                            <?php } ?>
        		                            <?php the_field('city'); ?>, <?php the_field('state'); ?> <?php the_field('zip'); ?>
        		                        </dd>
        		                    </dl>
        		                </div>
        		                <div class="clearfix"></div>
        		            </div>
        		            <div class="modal-footer text-center">
        		                <div class="btn-group btn-group-sm" role="group">
        		                    <a type="button" class="btn btn-default default-margin--bottom" href="<?php echo site_url(); ?>/membership/membership-approve-deny/?status=approved?status=approve&firstName=<?php the_field('first_name'); ?>&lastName=<?php the_field('last_name'); ?>&company=<?php the_field('company'); ?>&email=<?php the_field('email_address'); ?>&phone=<?php the_field('phone'); ?>&address_one=<?php the_field('address_one'); ?>&address_two=<?php the_field('address_two'); ?>&city=<?php the_field('city'); ?>&state=<?php the_field('state'); ?>&zip=<?php the_field('zip'); ?>&applicantID=<?php the_id(); ?>"><i class="fa fa-check sm-margin--right" aria-hidden="true"></i> Approve <?php the_field('first_name'); ?></a>
        		                    <a type="button" class="btn btn-danger default-margin--bottom" href="<?php echo site_url(); ?>/membership/membership-approve-deny/?status=denied&firstName=<?php the_field('first_name'); ?>&lastName=<?php the_field('last_name'); ?>&company=<?php the_field('company'); ?>&email=<?php the_field('email_address'); ?>&phone=<?php the_field('phone'); ?>&address_one=<?php the_field('address_one'); ?>&address_two=<?php the_field('address_two'); ?>&city=<?php the_field('city'); ?>&state=<?php the_field('state'); ?>&zip=<?php the_field('zip'); ?>&applicantID=<?php the_id(); ?>"><i class="fa fa-close sm-margin--right" aria-hidden="true"></i> Deny Membership</a>
        		                </div>
        		                <p class="text-center">
        		                    <a href="#" data-dismiss="modal">Close this Window</a>
        		                </p>
        		                <div class="hidden">
        		                
        		                </div>
        		            </div>
        		        </div>
        		    </div>
        		</div>
            
        <?php } wp_reset_postdata(); } ?>
    
    </tbody>

</table>