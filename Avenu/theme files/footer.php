<footer id="footer">
    <div class="container">
            
        <div class="footer-form xl-padding--top col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0 col-lg-5">
        	<div class="lg-margin--bottom"><span class="footer__title">Request Information</span></div>
        	<?php ninja_forms()->display(1); ?>
        </div>
        
        <div class="xl-padding--top col-sm-6 col-md-4 col-lg-3">
            <div class="lg-margin--bottom"><span class="footer__title">Quick Links</span></div>
            <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
            <div class="clearfix"></div>
        </div>
        
        <div class="xl-padding--vertical col-md-4 col-sm-6 copyright text-color--pearl-white">
            
            <div class="lg-margin--bottom">
                <span class="footer__title">Contact Avenu</span>
            </div>
            
            <ul class="list-group--none">
                <li class="lg-margin--bottom">2411 Dulles Corner Park</br>Suite 800<br> Herndon, VA 20171
                </li>
                <li class="lg-margin--bottom">
                	<a href="mailto:succeed@avenuinisights.com">succeed@avenuinisights.com</a>
                </li>
                <li class="lg-margin--bottom">&copy; <?php echo date('Y'); ?> All Rights Reserved</li>
            </ul>
            
            <div class="clearfix"></div>
            
            <div class="social">
                <ul class="list-group">
                    <li class="social__item"><a href="https://business.facebook.com/avenuinsights/" title="Facebook" target="_blank" data-main-nav-fb="mainNavFb" data-tracking="socialProfile">
                        <span class="fa-stack text-color--red" aria-label="Facebook">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-facebook fa-stack-1x"></i>
                        </span></a>
                    </li>
                    <li class="social__item"><a href="https://twitter.com/avenuinsights" title="Twitter" target="_blank" data-main-nav-twitter="mainNavTwitter" data-tracking="socialProfile">
                        <span class="fa fa-stack text-color--red" aria-label="Twitter">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-twitter fa-stack-1x"></i>
                        </span></a>
                    </li>
                    <li class="social__item"><a href="https://www.linkedin.com/company/11085966/" title="LinkedIn" target="_blank" data-main-nav-linkedin="mainNavLinkedin" data-tracking="socialProfile">
                        <span class="fa fa-stack text-color--red" aria-label="Linkedin">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-linkedin fa-stack-1x"></i>
                        </span></a>
                    </li>
                </ul>
            </div>
        	
        </div>
        
    </div>
</footer>

<?php wp_footer(); ?>
