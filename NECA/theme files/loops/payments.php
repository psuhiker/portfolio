<div class="header divider"></div>

<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
<?php if (false !== strpos($url,'price' )) { ?>

    <?php $background= get_field('marquee_image', 10); ?>
    
    <?php 
        if ( is_page('335') ) { // New Membership Payment 
            $background= get_field('marquee_image', 10);
        } elseif ( is_page('472') ) { // Membership Renewal Payment
            $background= get_field('marquee_image', 10);
        } elseif ( is_page('345') ) { // Donation Payment 
            $background= get_field('marquee_image', 14);
        } elseif ( is_page('493') ) { // Event Payment 
            $background= get_field('marquee_image', 8);
        } else { // Fallback
            $background= get_field('marquee_image', 10);
        }
    ?>
    
    <section class="payment">
    	<div class="inner">
    		<div class="background" style="background-image: url(<?php echo $background; ?>);"></div>
    	    <div class="row">
    	    
    	    	<div class="col-md-6 col-md-offset-1 text-left">
    	    	
    	    	    <?php include (TEMPLATEPATH . '/includes/payment-details.php' ); ?>
    	    	    
    	    	</div>
    	    		    
    	    	<div class="col-md-4">
    	    	
    	    	    <p class="lg-margin--top font-size--sm text-left lg-margin--bottom">By clicking the button below, you verified your information and agree to pay the stated amount.</p>
    	    		    		
    	    		<div id="paypal-button"></div>
    	    		    		
    	    		<?php include (TEMPLATEPATH . '/includes/paypal.php' ); ?>
    	    		    	
    	    	</div>
    	    		    	
    	    </div>
    	</div>
    </section>
    
<?php } else { ?>

    <section class="payment">
    	<div class="inner">
    		<div class="background" style="background-image: url(<?php the_field('marquee_image', 10) ?>);"></div>
    	    <div class="row">
    	    
    	        <p>We're sorry, but the link you have entered is not valid.</p>
    	    
    	    </div>
    	</div>
    </section>

<?php } ?>