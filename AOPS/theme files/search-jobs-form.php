<div class="search bar grid_12">
    <div class="container">

    	<div class="grid_4">
    	    <div class="padding">
    	    
        	    <form method="get" action="/">
        	    
        	        <?php $args = array(
        	            'show_option_all'    => 'Choose one...',
        	    		'taxonomy'           => 'employment',
        	    		'walker' => new my_Walker_CategoryDropdown
        	    	);
        	    	
        	    	wp_dropdown_categories( $args ); ?>
        	    		<script type="text/javascript"><!--
        	    		    var dropdown = document.getElementById("cat");
        	    		    function onCatChange() {
        	    				if ( dropdown.options[dropdown.selectedIndex].value != '0' ) {
        	    					location.href = "<?php echo get_option('home');
        	    		?>/level/"+dropdown.options[dropdown.selectedIndex].value;
        	    				}
        	    		    }
        	    		    dropdown.onchange = onCatChange;
        	    		--></script> 
        	    
        	    </form>
    	    
    	    </div>
    	</div>
    	
    	<div class="grid_8">
    	    <div class="padding">
    	    
    	        <?php include (TEMPLATEPATH . '/search-jobs.php' ); ?>
    	        
    	    </div>
    	</div>
    
    </div>
</div>