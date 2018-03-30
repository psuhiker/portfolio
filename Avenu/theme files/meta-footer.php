<!-- Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/sass/vendors/bootstrap-sass-master/assets/javascripts/bootstrap.min.js"></script>

<!-- Modal: Load and Set Cookie -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.cookie.js"></script>

<?php 
    if(is_front_page()) {  $currentPage = 'home'; }
    query_posts( 'post_type=modal&orderby=date&order=DESC&posts_per_page=1&meta_key=activate_modal&meta_value=1' ); 
?>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        
            <?php if( get_field('display_options') == 'home' ) { ?>
                <?php if( $currentPage == 'home' ) { ?>
                
                    <?php if( get_field('cookie_options') == 'always' ) { ?>
                        
                        <script type="text/javascript">
                            $(window).on('load',function(){
                                $('#liveModal').modal('show');
                            });
                        </script>
                        
                    <?php } else { $cookieDate = get_field('cookie_options'); ?>
                    
                        <script>
                        	$(document).ready(function() {
                        		if ($.cookie('pop') == null) {
                        			$('#liveModal').modal('show');
                        			$.cookie('pop', 'yes', { expires: <?php echo $cookieDate; ?>, path: '/' });
                        		}
                        	});
                        </script>
                    
                    <?php } ?>
                    
                <?php } ?>
            <?php } else { ?>
            
                <?php if( get_field('cookie_options') == 'always' ) { ?>
                    
                    <script type="text/javascript">
                        $(window).on('load',function(){
                            $('#liveModal').modal('show');
                        });
                    </script>
                    
                <?php } else { $cookieDate = get_field('cookie_options'); ?>
                
                    <script>
                    	$(document).ready(function() {
                    		if ($.cookie('pop') == null) {
                    			$('#liveModal').modal('show');
                    			$.cookie('pop', 'yes', { expires: <?php echo $cookieDate; ?>, path: '/' });
                    		}
                    	});
                    </script>
                
                <?php } ?>
            
            <?php } ?>
        
        <?php endwhile; ?>
    <?php else: ?>
            
    <?php endif; ?>
    
<?php wp_reset_query(); ?>

<!-- Shrinking Header -->
<script>
    $(document).ready(function() {
    	if ($(window).width() > 768) {
    		$(window).scroll(function() {
    			if ($(this).scrollTop() > 10) {
    				$('#header').addClass('sticky');
    			} else {
    				$('#header').removeClass('sticky');
    			};
    
    		});
        }
    });
</script>

<!-- Adds Modal Open Class on Collapsed Nav Click -->
<script>
	$(".navbar-toggle").on("click", function() {
	    $("body").toggleClass("scroll-stop");
	});
</script>

<!-- Equal Height Divs -->
<script>
	$(document).ready(function () {
	
	    "use strict";
	    $('.leadership').each(function () {
	        var highestBox = 0;
	
	        $(this).find('.bio-summary').each(function () {
	            if ($(this).height() > highestBox) {
	                highestBox = $(this).height();
	            }
	        });
	
	        $(this).find('.bio-summary').height(highestBox);
	    });
	
	    $('.image-grid').each(function () {
	        var highestBox = 0;
	
	        $(this).find('.image-label').each(function () {
	            if ($(this).height() > highestBox) {
	                highestBox = $(this).height();
	            }
	        });
	
	        $(this).find('.image-label').height(highestBox);
	        
	    });
	    
	    $('.image-grid').each(function () {
	            var highestBox = 0;
	    
	            $(this).find('.image-wrapper').each(function () {
	                if ($(this).height() > highestBox) {
	                    highestBox = $(this).height();
	                }
	            });
	    
	            $(this).find('.image-wrapper').height(highestBox);
	            
	        });
	    
	    $(window).resize(function() {
	    	
	    	$('.image-wrapper').css('height','inherit');
	    	
	    	$('.image-grid').each(function () {
	            var highestBox = 0;
	    
	            $(this).find('.image-wrapper').each(function () {
	                if ($(this).height() > highestBox) {
	                    highestBox = $(this).height();
	                }
	            });
	    
	            $(this).find('.image-wrapper').height(highestBox);
	            
	        });
	    	
	    });
	    
	    $(window).resize(function() {
	    	
	    	$('.image-label').css('height','inherit');
	    	
	    	$('.image-grid').each(function () {
	            var highestBox = 0;
	    
	            $(this).find('.image-label').each(function () {
	                if ($(this).height() > highestBox) {
	                    highestBox = $(this).height();
	                }
	            });
	    
	            $(this).find('.image-label').height(highestBox);
	            
	        });
	    	
	    });
	
	});
</script>

<!-- Adds Data Tracking to Various Items -->
<script>
    $('.data-tracker-footer a').attr('data-tracking', 'footerNav');
    $('.data-tracker-utility a').attr('data-tracking', 'externalPortal');
</script>

<!-- Adds Data Tracking to Ninja Forms -->
<script>
	jQuery(document).on( 'nfFormReady', function( e, layoutView ) {
	    $('.data-tracker-contact-form').attr('data-tracking', 'contactForm');
	    $('.data-tracker-contact-form-contact-page').attr('data-tracking', 'contactPageForm');
	});
</script>
<!-- Adds LinkedIn Tracking Code -->
	<script type="text/javascript">
	_linkedin_data_partner_id = "267281";
	</script><script type="text/javascript">
	(function(){var s = document.getElementsByTagName("script")[0];
	var b = document.createElement("script");
	b.type = "text/javascript";b.async = true;
	b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
	s.parentNode.insertBefore(b, s);})();
	</script>
	<noscript>
	<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=267281&fmt=gif" />
	</noscript>
