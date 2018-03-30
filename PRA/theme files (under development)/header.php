<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->

<header id="header">
	<div class="container">
	
	    <div class="row-eq-height">
	
    	    <div class="col-xs-3" id="logo">
    	    	<a href="<?php echo site_url(); ?>">
    	    	    <img src="<?php bloginfo('template_directory'); ?>/images/pra-logo-header-no-border.png">
    	    	</a>
    	    </div>
    	    
    	    <div class="col-xs-9">
    	        <div class="vertical-align">
    	        	<div class="content">
    	        	
        	        	<div id="utilityMenu" class="float--right">
        	        		<?php wp_nav_menu( array( 'theme_location' => 'utility' ) ); ?>
        	        	</div>
    	    
                	    <div id="menu">
                	    	<div class="navigation--primary">
                	    	    <div class="navbar-header">
                	    	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-primary" aria-expanded="false">
                	    	            <span class="sr-only">Toggle navigation</span>
                	    	            <span class="icon-bar"></span>
                	    	            <span class="icon-bar"></span>
                	    	            <span class="icon-bar"></span>
                	    	        </button>
                	    	    </div>
                	    	    <?php
                	    	        wp_nav_menu( array(
                	    	            'menu' => 'primary',
                	    	            'theme_location' => 'primary',
                	    	            'depth' => 2,
                	    	            'container' => 'div',
                	    	            'container_class' => 'collapse navbar-collapse no-padding--horizontal',
                	    	            'container_id' => 'navbar-collapse-primary',
                	    	            'menu_class' => 'nav navbar-nav flex',
                	    	            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                	    	            'walker' => new WP_Bootstrap_Navwalker())
                	    	        );
                	    	    ?>
                	    	    <div class="clearfix"></div>
                	    	</div>
                	    </div>
    	    
    	        	</div>
    	        </div>
    	    </div>
	    
	    </div>
	
	</div>
</header>
