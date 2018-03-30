<form role="search" method="get" id="articles-form" class="search-form articles-form" action="<?php echo home_url( '/' ); ?>" onsubmit="formSubmit()">
    <div class="grid_10">
	    <input id="search-field" type="text" class="search-field" placeholder="<?php echo esc_attr_x( 'search for post', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	     <input type="submit" class="search-submit articles-search" value=""/>
	</div>
	<input type="hidden" name="post_type" value="article" />
</form>
<script>
	function formSubmit(){
		var field_value = document.getElementById("search-field");
		dataLayer.push({ 
			'event': 'formSubmission',
			'field_value': field_value.value
		});
	}
</script>