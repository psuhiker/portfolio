<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


<?php

// Get the School's ID
$school_id = get_the_id();

// Get the Database Fields
$the_title = get_the_title();
$school_address = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = '$school_id' AND meta_key = 'wpsl_address'");
$school_address2 = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = '$school_id' AND meta_key = 'wpsl_address2'");
$school_city = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = '$school_id' AND meta_key = 'wpsl_city'");
$school_state = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = '$school_id' AND meta_key = 'wpsl_state'");
$school_zip = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = '$school_id' AND meta_key = 'wpsl_zip'");
$school_phone = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = '$school_id' AND meta_key = 'wpsl_phone'");
$school_fax = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = '$school_id' AND meta_key = 'wpsl_fax'");
$school_url = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = '$school_id' AND meta_key = 'wpsl_url'");
$school_email = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = '$school_id' AND meta_key = 'wpsl_email'");
$school_president = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = '$school_id' AND meta_key = 'wpsl_president'");
$school_principal = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = '$school_id' AND meta_key = 'wpsl_principal'");
$school_vice_principal = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = '$school_id' AND meta_key = 'wpsl_vice_principal'");
$school_admissions_director = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = '$school_id' AND meta_key = 'wpsl_admissions_director'");
$school_cares = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = '$school_id' AND meta_key = 'wpsl_cares'");
$school_prek = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = '$school_id' AND meta_key = 'wpsl_prek'");
$school_lat = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = '$school_id' AND meta_key = 'wpsl_lat'");
$school_lng = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = '$school_id' AND meta_key = 'wpsl_lng'");

?>

<div class="close">
    <a class="close-reveal-modal" aria-label="Close"><i class="fa fa-times"></i></a>
</div>

<div class="grid_12">
    <h2><?php the_title(); ?></h2>
</div>

<div class="grid_6">
    <div class="address">
        <p><?php echo $school_address ?><br>
        <?php echo $school_city ?> <?php echo $school_state ?>, <?php echo $school_zip ?><br>
        <a href="https://www.google.com/maps/place/<?php echo $school_address ?>,+<?php echo $school_city ?>,+<?php echo $school_state ?>+<?php echo $school_zip ?>" target="_blank">Get Directions</a></p>
    </div>
    <div class="phone">
        <p> 
        <ul>
            <?php
                if($school_phone!="") {
                    echo "<li>P: <a class=\"wpsl-phone\" href=\"tel:$school_phone\">$school_phone</a></li>";
                }
            ?>
            <?php
                if($school_fax!="") {
                    echo "<li>F: <span class=\"wpsl-fax\">$school_fax</span></li>";
                }
            ?>
        </ul>
    </div>
    <div class="admin">
        <p>
            <?php
                if($school_president!="") {
                    echo "President: <strong>{$school_president}</strong><br>";
                    }
                if($school_principal!="") {
                    echo "Principal: <strong>{$school_principal}</strong><br>";
                    }
                //if($school_vice_principal!="") {
                //    echo "Vice Principal: <strong>{$school_vice_principal}</strong><br>";
                //    }
                if($school_admissions_director!="") {
                    echo "Admissions Director: <strong>{$school_admissions_director}</strong><br>";
                    }
            ?>
        </p>
        <?php 
            if($school_email!="") {
                echo "<p><a class=\"wpsl-email\" href=\"mailto:$school_email\">$school_email</a></p>";
            }
        ?>
    </div>
    <?php 
        if($school_url!="") {
            echo "<a href=\"$school_url\" class=\"button red medium\" target=\"_blank\" onClick=\"ga(\'send\', \'event\', \'Visit School Website\', \'Click\', \'$the_title\');\">Visit School Website</a>";
        }
    ?>
    
</div>
<div class="grid_6">
    <table>
    	<tbody>
    	    <?php 
    	        if($school_cares=="1") {
    	            echo "<tr><td>Before/After School (CARES):</td><td><img src=\"/wp-content/themes/aops/images/program-yes.png\" class=\"yes\"></td></tr>";
        	    } else {
        	        echo "<tr><td>Before/After School (CARES):</td><td><img src=\"/wp-content/themes/aops/images/program-no.png\" class=\"no\"></td></tr>";
        	    }
        	?>
        	<?php 
        	    if($school_prek=="1") {
        	        echo "<tr><td>Pre-K:</td><td><img src=\"/wp-content/themes/aops/images/program-yes.png\" class=\"yes\"></td></tr>";
        	    } else {
        	        echo "<tr><td>Pre-K:</td><td><img src=\"/wp-content/themes/aops/images/program-no.png\" class=\"no\"></td></tr>";
        	    }
        	?>
    	</tbody>
    </table>
    <!--<?php echo "<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3054.302892972444!2d$school_lng!3d$school_lat!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDAyJzQ2LjgiTiA3NcKwMjEnMTMuNiJX!5e0!3m2!1sen!2sus!4v1439305810132\" width=\"100%\" height=\"200\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>" ?>-->
    <?php
        $encode_location = urlencode($the_title . ' ' . $school_address . ' ' . $school_city . ' ' . $school_state); 
    	echo "<iframe src=\"https://www.google.com/maps/embed/v1/place?q=$encode_location&key=AIzaSyDlxqZ7o48RVipI2jSu9hFQ4PLN2xh2bwU\" width=\"100%\" height=\"200\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>";
    ?>
</div>

<?php endwhile; ?>
<?php else : ?>

	<h1 class="center">Not Found</h1>
 	<p class="center">Sorry, but this page cannot be found.</p>

<?php endif; ?>


