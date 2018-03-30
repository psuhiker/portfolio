<script type="text/javascript">
	var dropdown = document.getElementById("cat");
	function onCatChange() {
		if ( dropdown.options[dropdown.selectedIndex].value != 0 ) {
			location.href = "<?php echo esc_url( home_url( '/' ) ); ?>/tags/"+dropdown.options[dropdown.selectedIndex].value;
			// Send to dataLayer to trigger GTM tag.
			dataLayer.push({
				event: 'FilterSelect',
				'Filter': dropdown.options[dropdown.selectedIndex].text
			});
		}
	}
	dropdown.onchange = onCatChange;
</script>