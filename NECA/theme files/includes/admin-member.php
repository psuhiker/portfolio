<tr class="member item <?php echo $userid; ?><?php $activeRenewal = date('Y') . '1231'; if ( $renewaldate->format('Ymd') < $activeRenewal ) { ?> hasLapsed<?php } else { ?> isActive<?php } ?>">
	<td data-label="Name" class="text-nowrap">
		<?php echo esc_html($user->last_name); ?>, <?php echo esc_html($user->first_name); ?> 
	</td>
	<td data-label="Company" class="text-nowrap">
		<?php if( get_field('member_company', $userid)) { ?>
			<?php the_field('member_company', $userid); ?>
		<?php } else { ?>
			&nbsp;
		<?php } ?>
	</td>
	<td data-label="Email" class="text-nowrap">
		<a href="mailto:<?php echo esc_html($user->user_email); ?>">
		    <?php echo esc_html($user->user_email); ?>
		</a>
	</td>
	<td data-label="Membership Expiration">
		<?php echo $renewaldate->format('n/j/y'); ?>
	</td>
</tr>