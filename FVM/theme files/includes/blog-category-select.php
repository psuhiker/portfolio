<?php 
	$args = array(
	    'value_field' => 'slug',
	    'class' => 'select--transparent',
	    'show_option_all' => 'All Categories'
	);
?>

<p class="no-margin--bottom xl-margin--top">
	<span class="color--white font-size--sm font-family--secondary">
	    Show articles about: 
	</span>
	<?php wp_dropdown_categories( $args ); ?>
</p>

<?php include ( TEMPLATEPATH . '/includes/script-category-select-blog.php' ); ?>