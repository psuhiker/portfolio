<div class="searchable">

    <h1 class="xl-margin--bottom">NECA Members</h1>
    
    <table class="table" id="directory">
    	
    	<thead>
    		<tr>
    			<td class="text-nowrap">
    				Name
    			</td>
    			<td class="text-nowrap">
    				Company
    			</td>
    			<td>
    				Contact Info
    			</td>
    			<td>
    				Phone
    			</td>
    		</tr>
    	</thead>
    	
    	<tbody>
    	
    	    <style><!--
    	        .user_11, .user_1 {
    	            display: none !important;
    	        }
    	    --></style>
    
		    <?php 
		    	$blogusers = get_users( [ 'role__in' => [ 'contributor', 'editor', 'administrator' ] ] );
		    	foreach ( $blogusers as $user ) {
		    	$userid = 'user_'.$user->ID;
		    ?>
		    	
		    	<tr class="member item <?php echo $userid; ?>">
		    		<td data-label="Name" class="text-nowrap">
		    			<?php echo esc_html($user->last_name); ?>, <?php echo esc_html($user->first_name); ?>
						<?php if( get_field('member_affiliation', $userid)) { ?>
							<br>
							<span class="fine-print">
								<?php the_field('member_affiliation', $userid); ?>
							</span>
						<?php } ?>
		    		</td>
		    		<td data-label="Company" class="text-nowrap">
		    			<?php if( get_field('member_company', $userid)) { ?>
		    				<?php the_field('member_company', $userid); ?>
		    			<?php } else { ?>
		    				&nbsp;
		    			<?php } ?>
		    		</td>
		    		<td data-label="Contact Information" class="text-nowrap">
		    			<a href="mailto:<?php echo esc_html($user->user_email); ?>" class="sm-margin--right">
		    				<i class="fa fa-envelope" aria-hidden="true"></i>
		    			</a>
		    			<span class="hidden"><?php echo esc_html($user->user_email); ?></span>
		    			<?php if( get_field('member_linkedin', $userid)) { ?>
		    				<a href="https://www.linkedin.com/in/<?php the_field('member_linkedin', $userid); ?>" target="_blank" class="sm-margin--right">
		    					<i class="fa fa-linkedin" aria-hidden="true"></i>
		    				</a>
		    				<span class="hidden"><?php the_field('member_linkedin', $userid); ?></span>
		    			<?php } ?>
		    			<?php if( get_field('member_twitter', $userid)) { ?>
		    				<a href="https://twitter.com/<?php the_field('member_twitter', $userid); ?>" target="_blank" class="sm-margin--right">
		    					<i class="fa fa-twitter" aria-hidden="true"></i>
		    				</a>
		    				<span class="hidden"><?php the_field('member_twitter', $userid); ?></span>
		    			<?php } ?>
		    		</td>
		    		<td data-label="Phone">
		    			<?php if( get_field('member_phone', $userid)) { ?>
		    				<span class="text-nowrap"><?php the_field('member_phone', $userid); ?></span>
		    			<?php } else { ?>
		    				&nbsp;
		    			<?php } ?>
		    		</td>
		    	</tr>
		    	
		   	<?php } ?>
	   	
	   	</tbody>
   	
   	</table>
   	
   	<script>
   	    $(document).ready(function() {
   	        $('#directory').DataTable({
   	        	   "order": [[ 0, "asc" ]],
   	               "pageLength": 100,
   	               dom: 'Bfrtip',
   	               bAutoWidth: false,
   	               buttons: [],
   				   "columnDefs": [{"targets": [2,3],"orderable": false}]
   	           });
   	        $('div.dataTables_filter input').addClass('input-text');
   	        $('div.dataTables_filter input').removeClass('input-sm');
   	        $('.dt-button').addClass('btn btn-primary btn-sm');
   	        $('.dt-buttons').addClass('float--left default-margin--bottom');
   	    } );
   	</script>

</div>