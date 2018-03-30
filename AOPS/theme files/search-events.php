<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <div class="grid_10">
	    <input type="text" class="search-field" placeholder="<?php echo esc_attr_x( 'Events', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</div>
	<div class="grid_2">
	    <div class="padding">
	        <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
	    </div>
	</div>
	<input type="hidden" name="post_type" value="tribe_events" />
</form>