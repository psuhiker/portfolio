<div class="search bar grid_12">
    <div class="container">

    	<div class="grid_4">
    	    <div class="padding">
    	    
        	    <form method="get" action="/">
        	    
        	        <?php $args = array(
        	            'show_option_all'    => 'Choose one...',
        	    		'taxonomy'           => 'tribe_events_cat',
        	    		'walker' => new my_Walker_CategoryDropdown
        	    	);
        	    	
        	    	wp_dropdown_categories( $args ); ?>
        	    		<script type="text/javascript"><!--
        	    		    var dropdown = document.getElementById("cat");
        	    		    function onCatChange() {
        	    				if ( dropdown.options[dropdown.selectedIndex].value != '0' ) {
        	    					location.href = "<?php echo get_option('home');
        	    		?>/events/category/"+dropdown.options[dropdown.selectedIndex].value;
        	    				}
        	    		    }
        	    		    dropdown.onchange = onCatChange;
        	    		--></script> 
        	    
        	    </form>
    	    
    	    </div>
    	</div>
    	
    	<div class="grid_8">
    	    <div class="padding">
    	    
    	        <?php include (TEMPLATEPATH . '/search-events.php' ); ?>
    	        
    	    </div>
    	</div>
    	
    	<?php if (is_tax( 'tribe_events_cat', 'elementary' )) { ?>
    	    <a href="http://www.aopcatholicschools.org/wp-content/uploads/2017/06/2017-2018-AOPS-Elementary-Calendar.pdf" target="_blank" class="red button medium right">Download Elementary Calendar (PDF)</a>
    	<?php } ?>
    	
    	<?php if (is_tax( 'tribe_events_cat', 'secondary' )) { ?>
    	    <a href="http://www.aopcatholicschools.org/wp-content/uploads/2017/06/2017-2018-AOPS-Secondary-Calendar.pdf" target="_blank" class="red button medium right">Download Secondary Calendar (PDF)</a>
    	<?php } ?>
    
    </div>
</div>