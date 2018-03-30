<?php /* 
Template Name: Conference
*/ ?>

<!-- Test -->

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<link href="<?php bloginfo('template_directory'); ?>/css/conference.css" type="text/css" rel="stylesheet">
</head>

<body class="<?php  global $post; $post_slug=$post->post_name; echo $post_slug;  ?> <?php if($post->post_parent) { $post_data = get_post($post->post_parent); echo $post_data->post_name; } ?>">

	<?php get_header(); ?>
	
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	
    	<div class="grid_12 marquee">
    	
    	    <div class="image" style="background-image: url(<?php the_field('marquee_image'); ?>)">
    	    
    	        <div class="title"><?php the_field('marquee_caption'); ?></div>
    	        
    	    </div>
    	    
    	    <div class="container">
    	        <div class="grid_5 copy">
    	            <div class="padding">
    	                <div class="copy-slider">
    	                
    	                    <h1><?php the_field('marquee_caption'); ?></h1>
    	                    
    	                    <div class="content">
    	                        <p><?php the_content(); ?></p>
    		                </div>
    		                
    		            </div> 
    		        </div>
    		    </div>
    		</div>
    		
    	</div>
    	
    	<div class="container section intro">
    	<a name="intro"></a>
    	
    	    <?php if( have_rows('conference_logos') ): ?>
    	
    	        <div class="grid_2 image">
    	            <div class="padding">
    	        
    	                <?php while ( have_rows('conference_logos') ) : the_row(); ?>
    	            
    	                    <img src="<?php the_sub_field('conference_logos_logo'); ?>">
    	            
    	                <?php endwhile; ?>
    	                
    	            </div>
    	        </div>
    	                
    	    <?php else : endif; ?>
    	        
    	    <div class="grid_10 copy">
    	        <div class="padding">
    	        
    	            <?php the_field('introduction_copy'); ?>
    	        
    	        </div>
    	    </div>
    	    
    	    <div class="clear">&nbsp;</div>
    	    
    	</div>
    	
    	<div class="grid_12 section text speaker">
    	<a name="speakers"></a>
    	    <div class="container">
    	    
    	        <?php $speaker_count = count( get_field('conference_details_speakers') ); ?>
    	    
    	        <?php if( have_rows('conference_details_speakers') ): while ( have_rows('conference_details_speakers') ) : the_row(); ?>
    	        
        	        <!-- Speaker Container -->
        	        <?php if ( $speaker_count == 1 ) { ?>
        	            <div class="grid_12">
        	        <?php } else if ( $speaker_count == 2 ) { ?>
        	            <div class="grid_6">
        	        <?php } else if ( $speaker_count == 3 ) { ?>
        	            <div class="grid_4">
        	        <?php } else if ( $speaker_count % 2 == 0 ) { ?>
        	            <div class="grid_6">
        	        <?php } else { ?>
        	            <div class="grid_4">
        	        <?php } ?>
        	        <!-- Speaker Container -->
    	        
            	            <div class="grid_4">
            	                <div class="padding">
            	                    
            	                    <p class="image"><img src="<?php the_sub_field('conference_details_speakers_photo'); ?>" width="200"></p>
            	                    
            	                </div>
            	            </div>
            	            
            	            <div class="grid_8">
            	                <div class="padding">
            	                
            	                    <br>
            	                    <h3><?php the_sub_field('conference_details_speakers_salutation'); ?></h3>
            	                    <h4><?php the_sub_field('conference_details_speakers_name'); ?></h4>
            	                    <h4><?php the_sub_field('conference_details_speakers_institution'); ?></h4>
            	                    
            	                </div>
            	            </div>
    	            
    	            <!-- Speaker Container -->
    	                </div>
    	            <!-- Speaker Container -->
    	        
    	        <?php endwhile; else : endif; ?>
    	            
    	        <div class="clear">&nbsp;</div>
    	            
    	    </div>
    	</div>
    	
    	<div class="grid_12 section blue">
    	<a name="details"></a>
    	    <div class="container">
    	        
    	        
    	        <div class="grid_6 left">
    	            <div class="padding">
    	            
    	                <h4>Location</h4>
    	                <p><?php the_field('conference_details_location'); ?></p>
    	                <p><?php the_field('conference_details_address'); ?></p>
    	        
    	            </div>
    	        </div>
    	        
    	        <div class="grid_6 right">
    	            <div class="padding">
    	            
    	                <h4>Dates</h4>
    	                <p><?php the_field('conference_details_dates'); ?></p>
    	        
    	            </div>
    	        </div>
    	    
    	        <div class="clear"></div>
    	        
    	    </div>
    	</div>
    	
    	<div class="grid_12 section text registration">
    	<a name="registration"></a>
    	    <div class="container">
    	    
    	        <div class="grid_12">
    	            <div class="padding">
    	            
    	                <h3>Registration</h3>
    	                        
    	            </div>
    	        </div>
    	    
    	        <div class="grid_6 left">
    	            <div class="padding">
    	        
    	                <h4><?php the_field('conference_details_early_registration_title'); ?></h4>
    	                
    	                <?php if( have_rows('conference_details_early_registration_prices') ): while ( have_rows('conference_details_early_registration_prices') ) : the_row(); ?>
    	                
    	                    <p><span>$<?php the_sub_field('conference_details_early_registration_prices_price'); ?></span> <?php the_sub_field('conference_details_early_registration_prices_label'); ?></p>
    	                
    	                <?php endwhile; else : endif; ?>
    	                 
    	            </div>
    	        </div>
    	        
    	        <div class="grid_6 right">
    	            <div class="padding">
    	        
    	                <h4><?php the_field('conference_details_registration_title'); ?></h4>
    	                
    	                <?php if( have_rows('conference_details_registration_prices') ): while ( have_rows('conference_details_registration_prices') ) : the_row(); ?>
    	                
    	                    <p><span>$<?php the_sub_field('conference_details_registration_prices_price'); ?></span> <?php the_sub_field('conference_details_registration_prices_label'); ?></p>
    	                
    	                <?php endwhile; else : endif; ?>
    	            
    	            </div>
    	        </div>
    	        
    	        <div class="grid_12">
    	            <div class="padding">
    	            
    	                <?php the_field('conference_details_registration_copy'); ?>
    	                
    	                <p class="register-button"><a href="<?php the_field('conference_details_registration_link'); ?>" class="button red large" target="_blank">Register Online</a> <a href="<?php the_field('conference_details_downloadable_registration_form'); ?>" class="text download-register-pdf" target="_blank">Or Download a Printable Registration Form</a></p>
    	                
    	                <?php the_field('conference_details_help_copy'); ?>
    	                
    	                <br><br><br>
    	                        
    	            </div>
    	        </div>
    	            
    	        <div class="clear">&nbsp;</div>
    	            
    	    </div>
    	</div>
    	
    	<div class="container tabs section">
    	<a name="tabs"></a>
    		
    		<ul class="tabs" data-tab="">
    		    <li class="tab-title active"><a href="#panel1" aria-selected="true" tabindex="0">Schedule & Sessions</span></a></li>
    		    <li class="tab-title"><a href="#panel3" aria-selected="false" tabindex="2">Directions</span></a></li>
    		    <li class="tab-title"><a href="#panel4" aria-selected="false" tabindex="3">Lodging</span></a></li>
    		    <li class="tab-title"><a href="#panel5" aria-selected="false" tabindex="4">Sponsors</span></a></li>
    		</ul>
    		
    		<div class="tabs-content">
    		
    	        <div class="content active" id="panel1" aria-hidden="false">
    	        
    	            <p style="text-align: center;"><?php the_field('session_copy'); ?></p>
    	            
    	            <?php $session = 1; ?>
    	            
    	            <?php if( have_rows('schedule_and_sessions') ): while ( have_rows('schedule_and_sessions') ) : the_row(); ?>
    	            
    	                <h3 class="table-title"><?php the_sub_field('schedule_and_sessions_day'); ?></h3>
    	                
    	                <?php if( have_rows('schedule_and_sessions_day_sessions') ): ?>
    	                
    	                    <table class="schedule">
    	                    
    	                        <thead>
    	                            <tr>
    	                               <td>Track Name</td>
    	                               <td>Session No.</td>
    	                               <td>Session Title</td>
    	                               <td>Start Time</td>
    	                               <td>End Time</td>
    	                               <td>Room</td>
    	                            </tr>
    	                        </thead>
    	                        
    	                        <tbody>
    	                        
    	                            <?php while ( have_rows('schedule_and_sessions_day_sessions') ) : the_row(); ?>
    	                            
    	                                <tr<?php if( get_sub_field('schedule_and_sessions_day_sessions_session_background_color') == 'grey' ) { ?> class="grey"<?php } ?><?php if( get_sub_field('schedule_and_sessions_day_sessions_session_background_color') == 'blue' ) { ?> class="blue"<?php } ?>>
    	                                
    	                                    <?php if ( get_sub_field('schedule_and_sessions_day_sessions_track') ) { ?>
    	                                        <td><?php the_sub_field('schedule_and_sessions_day_sessions_track'); ?></td>
    	                                    <?php } else { ?>
    	                                        <td class="no-content">&nbsp;</td>
    	                                    <?php } ?>
    	                                    
    	                                    <?php if ( get_sub_field('schedule_and_sessions_day_sessions_session_no') ) { ?>
    	                                        <td><?php the_sub_field('schedule_and_sessions_day_sessions_session_no'); ?></td>
    	                                    <?php } else { ?>
    	                                        <td class="no-content">&nbsp;</td>
    	                                    <?php } ?>
    	                                    
    	                                    <?php if ( get_sub_field('schedule_and_sessions_day_sessions_session_title') ) { ?>
    	                                        <td>
    	                                            <?php // if ( get_sub_field('schedule_and_sessions_day_sessions_session_abstract') ) { ?>
    	                                                <a href="#" data-reveal-id="modal<?php echo $session ?>">
    	                                            <?php // } ?>
    	                                            <?php the_sub_field('schedule_and_sessions_day_sessions_session_title'); ?>
    	                                            <?php // if ( get_sub_field('schedule_and_sessions_day_sessions_session_abstract') ) { ?>
    	                                                </a>
    	                                            <?php // } ?>
    	                                        </td>
    	                                    <?php } else { ?>
    	                                        <td class="no-content">&nbsp;</td>
    	                                    <?php } ?>
    	                                    
    	                                    <?php if ( get_sub_field('schedule_and_sessions_day_sessions_start_time') ) { ?>
    	                                        <td><?php the_sub_field('schedule_and_sessions_day_sessions_start_time'); ?></td>
    	                                    <?php } else { ?>
    	                                        <td class="no-content">&nbsp;</td>
    	                                    <?php } ?>
    	                                    
    	                                    <?php if ( get_sub_field('schedule_and_sessions_day_sessions_end_time') ) { ?>
    	                                        <td><?php the_sub_field('schedule_and_sessions_day_sessions_end_time'); ?></td>
    	                                    <?php } else { ?>
    	                                        <td class="no-content">&nbsp;</td>
    	                                    <?php } ?>
    	                                    
    	                                    <?php if ( get_sub_field('schedule_and_sessions_day_sessions_room') ) { ?>
    	                                        <td><?php the_sub_field('schedule_and_sessions_day_sessions_room'); ?></td>
    	                                    <?php } else { ?>
    	                                        <td class="no-content">&nbsp;</td>
    	                                    <?php } ?>
    	                                
    	                                </tr>
    	                                
    	                                <?php // if ( get_sub_field('schedule_and_sessions_day_sessions_session_abstract') ) { ?>
        	                                <div id="modal<?php echo $session ?>" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
        	                                    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
        	                                    <h4><?php the_sub_field('schedule_and_sessions_day_sessions_session_title'); ?></h4>
        	                                    <p class="byline"><?php the_sub_field('schedule_and_sessions_day_sessions_speaker'); ?></p>
        	                                    <p class="description"><?php the_sub_field('schedule_and_sessions_day_sessions_session_abstract'); ?></p>
        	                                    <p>
        	                                        <span class="track"><?php the_sub_field('schedule_and_sessions_day_sessions_track'); ?></span> 
        	                                        <span class="time">Session 101 <span class="divider">|</span> 
        	                                        <?php the_sub_field('schedule_and_sessions_day_sessions_start_time'); ?> 
        	                                        <?php if ( get_sub_field('schedule_and_sessions_day_sessions_end_time') ) { ?>
        	                                            - <?php the_sub_field('schedule_and_sessions_day_sessions_end_time'); ?>
        	                                        <?php } ?>
        	                                        <?php if ( get_sub_field('schedule_and_sessions_day_sessions_room') ) { ?>
        	                                            <span class="divider">|</span> Room <?php the_sub_field('schedule_and_sessions_day_sessions_room'); ?></span>
        	                                        <?php } ?>
        	                                    </p>
        	                                </div>
        	                            <?php //} ?>
    	                                
    	                                <?php $session++; ?>
    	                
    	                            <?php endwhile; ?>
    	                    
    	                        </tbody>
    	                        
    	                    </table>
    	                
    	                <?php else : endif; ?>
    	            
    	            <?php endwhile; else : endif; ?>
    		        
    		    </div>
    		    
    		    <div class="content" id="panel3" aria-hidden="true" tabindex="2">
    		    
    		        <div class="grid_8">
    		            <div class="padding">
    		                
    		                <?php the_field('directions_map_code'); ?>
    		        
    		            </div>
    		        </div>
    		        
    		        <div class="grid_4">
    		            <div class="padding">
    		            
    		                <p><strong><?php the_field('conference_details_location'); ?></strong></p>
    		                <p><strong><?php the_field('conference_details_address'); ?></strong></p>
    		        
    		            </div>
    		        </div>
    		        
    		        <div class="grid_12">
    		            <div class="padding">
    		            
    		                <br>
    		                
    		                <?php the_field('directions_copy'); ?>
    		                
    		            </div>
    		        </div>
    		    
    		    </div>
    		    
    		    <div class="content" id="panel4" aria-hidden="true" tabindex="3">
    		    
    		        <?php the_field('lodging_copy'); ?>
    		        
    		        <br>
    		        
    		        <?php the_field('lodging_map_code'); ?>
    		    
    		    </div>
    		    
    		    <div class="content sponsors" id="panel5" aria-hidden="true" tabindex="4">
    		    
    		        <h3 class="table-title"><?php the_field('sponsors_copy'); ?></h3>
    		        
    		        <br><br>
    		        
    		        <?php if( have_rows('sponsor_level') ): while ( have_rows('sponsor_level') ) : the_row(); ?>
    		        
    		            <h4 class="table-title"><?php the_sub_field('sponsor_level_name'); ?></h4>
    		        
    		            <?php if( have_rows('sponsor_level_logos') ): ?>
    		            
    		                <?php while ( have_rows('sponsor_level_logos') ) : the_row(); ?>
    		                
    		                    <?php if ( get_sub_field('sponsor_level_logos_center_logo') ) { ?>
    		                        <div class="grid_3">&nbsp;</div>
    		                    <?php } ?>
    		            
    		                    <div class="grid_6 logo" style="background-image: url(<?php the_sub_field('sponsor_level_logos_logo'); ?>)">&nbsp;</div>
    		                    
    		                    <?php if ( get_sub_field('sponsor_level_logos_center_logo') ) { ?>
    		                        <div class="clear">&nbsp;</div>
    		                    <?php } ?>
    		            
    		                <?php endwhile; ?>
    		                
    		            <?php else : endif; ?>
    		            
    		            <div class="clear gap"></div>
    		        
    		        <?php endwhile; else : endif; ?>
    		    
    		    </div>
    		    
    		</div>
    		
    	</div>
	
	
	<?php endwhile; ?>
	<?php else : ?>
	
		<h1 class="center">Not Found</h1>
	 	<p class="center">Sorry, but this page cannot be found.</p>
	
	<?php endif; ?>
	
	<?php get_footer(); ?>
	
	<script>
    	$(document).ready(function(){
    	    $('[data-toggle="popover"]').popover(); 
    	});
	</script>

<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
    
</body>