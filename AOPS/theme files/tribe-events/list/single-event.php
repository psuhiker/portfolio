<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// Venue microformats
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

?>

<div class="event-wrapper">
    <a name="<?php the_title(); ?>"></a>

    <?php if(get_field('events_add_additional_details_image' )) { ?>
        <div class="grid_8">
    <?php } else { ?>
        <div class="grid_12">
    <?php } ?>
    
            <div class="padding">
                <div class="date">
                    <?php echo tribe_events_event_schedule_details() ?>
                </div>
            
                <h2>
                	<!--<a class="url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title() ?>" rel="bookmark">-->
                		<?php the_title() ?>
                	<!--</a>-->
                </h2>
                
                <?php if(get_field('events_add_additional_details_location' )) { ?>
                    <div class="location">
                        <?php the_field('events_add_additional_details_location'); ?><br>
                        <?php the_field('events_add_additional_details_location_address'); ?>
                            <?php if(get_field('events_add_additional_details_location_city' )) { ?>
                                &nbsp; | &nbsp; <?php the_field('events_add_additional_details_location_city'); ?>, PA <?php the_field('events_add_additional_details_location_zip'); ?>&nbsp; <a href="https://www.google.com/maps/place/<?php the_field('events_add_additional_details_location_address'); ?>,+<?php the_field('events_add_additional_details_location_city'); ?>,+PA+<?php the_field('events_add_additional_details_location_zip'); ?>" target="_blank">[map link]</a>
                            <?php } ?>
                    </div>
                <?php } ?>
                
                <?php if(get_field('events_add_additional_detals_content' )) { ?>
                    <div class="content">
                        <?php the_field('events_add_additional_detals_content'); ?>
                    </div>
                <?php } ?>
                
                <?php if(get_field('events_add_additional_details_registration_link' )) { ?>
                    <div class="link">
                        <a href="<?php the_field('events_add_additional_details_registration_link'); ?>" class="button red medium">Learn More</a>
                    </div>
                <?php } ?>
            
            </div>
            
        </div>
    
    <?php if(get_field('events_add_additional_details_image' )) { ?>
    
        <div class="grid_4 thumbnail" style="background-image: url(<?php the_field('events_add_additional_details_image'); ?>);">
        
            &nbsp;
            
        </div>
    
    <?php } ?>
    
    <div class="clear">&nbsp;</div>

</div>

<?php
do_action( 'tribe_events_after_the_content' );
