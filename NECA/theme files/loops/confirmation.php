<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>

<?php include (TEMPLATEPATH . '/includes/marquee.php' ); ?>

<section class="default">
    <div class="container">
        <div class="row">
            
            <div class="col-md-8 col-md-offset-2">
            
            	<?php if (false !== strpos($url,'?event' )) { ?>
                
                	<?php the_field('confirmation_event_registration'); ?>
                	
                <?php } elseif (false !== strpos($url,'?membership' )) { ?>
                
                	<?php the_field('confirmation_membership_application'); ?>
                
                <?php } elseif (false !== strpos($url,'?donate' )) { ?>
                
                	<?php the_field('confirmation_donation'); ?>
                
                <?php } else { ?>
                
                	<meta http-equiv="refresh" content="0; url=<?php echo site_url(); ?>">
                
                <?php } ?>
                
            </div>
            
        </div>
    </div>
</section>