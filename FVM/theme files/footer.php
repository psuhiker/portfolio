<div class="clearfix"></div>

<footer id="footer">

    <div class="col-sm-6 block--quarter md--block--half" id="locations">
        <div class="outer">
            <div class="inner">

                <div class="content--bottom">
                	
                	<h1 class="headline--secondary default-margin--bottom">
                	    <?php bloginfo('name'); ?>
                	</h1>
                	
                	<div class="col-xs-6 no-padding--left font-size--sm">
                		<p>
                		    <strong>Philadelphia</strong>
                		</p>
                		<p class="no-margin--bottom">
                			630 W Germantown Pike, Suite 400<br>
                		    Plymouth Meeting, PA 19462 
                		    <a href="https://www.google.com/maps/place/630 W Germantown Pike,+Plymouth Meeting,+PA+19462" target="_blank" onClick="_gaq.push(['_trackEvent', 'Contact', 'Click', 'Map Directions on Google',, false]);">
                		        <i class="fa fa-map-marker"></i>
                		    </a>
                		</p>
                	</div>
                	
                	<div class="col-xs-6 no-padding--right font-size--sm">
                		<p>
                		    <strong>Portland</strong>
                		</p>
                		<p class="no-margin--bottom">
                			220 NW 8th Ave<br>
                		    Portland, OR 97209 
                		    <a href="https://www.google.com/maps/place/220 NW 8th Ave,+Portland,+OR+97209" target="_blank" onClick="_gaq.push(['_trackEvent', 'Contact', 'Click', 'Map Directions on Google',, false]);">
                		        <i class="fa fa-map-marker"></i>
                		    </a>
                		</p>
                	</div>
                	
                	<div class="clearfix"></div>
                	
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-6 block--quarter md--block--half" id="copyright">
        <div class="outer">
            <div class="inner">

                <div class="content--bottom">
                	
                	<div class="col-xs-6 no-padding--horizontal font-size--sm color--white">
                	
                    	<p class="no-margin--bottom">
                    	    p: <?php the_field('phone_number', 1); ?><br>
                    	    e: Tom O'Brien - 
                    	        <a href="mailto:<?php the_field('email_address', 1); ?>" onClick="_gaq.push(['_trackEvent', 'Contact', 'Click', 'Contacted via eMail',, false]);">
                    	            <?php the_field('email_address', 1); ?>
                    	        </a>
                    	</p>
                	
                	</div>
                	
                	<div class="col-xs-6 no-padding--horizontal font-size--sm color--white text-right">
                	
                	    <br>
                    	<p class="no-margin--bottom">
                    		&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | All Rights Reserved
                    	</p>
                	
                	</div>
                	
                	<div class="clearfix"></div>
                	
                </div>

            </div>
        </div>
    </div>

    <div class="clearfix"></div>

</footer>

<?php wp_footer(); ?>