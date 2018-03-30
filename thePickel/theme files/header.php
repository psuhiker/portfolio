<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVTSGM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php if ( is_front_page() ) { ?>

	<!-- Gets Browser Height -->
	<script>
		var myWidth = 0, myHeight = 0;
		    if( typeof( window.innerWidth ) == 'number' ) {
		        myWidth = window.innerWidth; myHeight = window.innerHeight;
		    } else if( document.documentElement && ( document.documentElement.clientWidth ||document.documentElement.clientHeight ) ) {
		        myWidth = document.documentElement.clientWidth; myHeight = document.documentElement.clientHeight;
		    } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
		        myWidth = document.body.clientWidth; myHeight = document.body.clientHeight;
		    }
	</script>

    <header id="header">
    
        <div class="container">
        
            <div class="logo">
            
                <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo-square-white.png" alt="<?php bloginfo('name'); ?>" /></a>
                
            </div>
            
            <div class="section">
                <div class="about">About</div>
                <div class="portfolio">Portfolio</div>
                <div class="contact">Talk to Us</div>
            </div>
            
            <div id="title">
                <div class="name">
                    P<span>ickel </span>W<span>eb </span>D<span>esign</span>
                </div>
            </div>
        
        </div>
    
    </header>

<?php } else { ?>

    <header id="header">
    
        <div class="container">
        
            <div class="logo">
            
                <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo-outline.png" alt="<?php bloginfo('name'); ?>" /></a>
                
            </div>
            
            <div class="section">
            
                <div class="portfolio"><?php the_title(); ?></div>
                <div class="contact">Talk to Us</div>
                
            </div>
            
            <div id="title">
                <div class="name">
                    P<span>ickel </span>W<span>eb </span>D<span>esign</span>
                </div>
            </div>
        
        </div>
    
    </header>

<?php } ?>