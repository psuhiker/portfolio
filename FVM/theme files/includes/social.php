<?php 
    if ( is_home() ) {
        $layoutAdjustment = 'col-sm-3 block--margin-top--quarter sm--block--margin-top--half sm--block--margin-left--half';
    } else {
        $layoutAdjustment = 'col-sm-6';
    }
?>

<div class="col-md-3 block--full  <?php echo $layoutAdjustment; ?>" id="social">
    <div class="outer bg--black">
        <div class="inner no-padding--horizontal">
        			
        	<div class="col-xs-3 col-sm-6 no-padding--horizontal">
        	    <a href="https://twitter.com/thinkfvm" target="_blank" onClick="_gaq.push(['_trackEvent', 'External Site Links', 'Social Media Links', 'Twitter']);">
        	        <img src="<?php bloginfo('template_directory'); ?>/images/social-twitter.svg">
        	    </a>
        	</div>
        	<div class="col-xs-3 col-sm-6 no-padding--horizontal">
        	    <a href="https://www.facebook.com/thinkfvm" target="_blank" onClick="_gaq.push(['_trackEvent', 'External Site Links', 'Social Media Links', 'Facebook']);">
        	        <img src="<?php bloginfo('template_directory'); ?>/images/social-facebook.svg">
        	    </a>
        	</div>
        	<div class="col-xs-3 col-sm-6 no-padding--horizontal">
        	    <a href="http://www.youtube.com/user/thinkFVM" target="_blank" onClick="_gaq.push(['_trackEvent', 'External Site Links', 'Social Media Links', 'YouTube']);">
        	        <img src="<?php bloginfo('template_directory'); ?>/images/social-youtube.svg">
        	    </a>
        	</div>
        	<div class="col-xs-3 col-sm-6 no-padding--horizontal">
        	    <a href="https://www.linkedin.com/company/1335885" target="_blank" onClick="_gaq.push(['_trackEvent', 'External Site Links', 'Social Media Links', 'LinkedIn']);">
        	        <img src="<?php bloginfo('template_directory'); ?>/images/social-linkedin.svg">
        	    </a>
        	</div>
        	
        	<div class="clearfix"></div>
        	
        </div>
    </div>
</div>
        