<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>

<?php if (false !== strpos($url,'trackingid')) { ?>

    <?php // Do Nothing ?>

<?php } else { ?>

    <style><!--
        section.form {
            display: none;
        }
    --></style>
    
    <section class="form" style="display: block;">
        <div class="container">
            <div class="row">
            
            	<div class="col-md-8">
            	
            	    <p class="font-size--md">We're sorry, this option is no longer available. If you need assistance, please <a href="/contact-us/">contact us</a>.</p>
            	
            	</div>
    
            </div>
        </div>
    </section>

<?php } ?>