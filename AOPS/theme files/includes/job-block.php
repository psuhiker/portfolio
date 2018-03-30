<?php
  $id = get_the_ID();
  $school = get_field('employment_school');
  $school_meta = get_post_meta($school->ID);
  $school_city = $school_meta['wpsl_city'][0];
?>
<div class="grid_12 jobs__block searchableItem">
  <h2 class="jobs__position"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <h4 class="jobs__school"><?php echo $school->post_title; ?></h4>
  <h4 class="jobs__location"><?php echo $school_city; ?></h4>
  <a href="<?php the_permalink(); ?>" class="r-font read-more">Read More</a>
</div>
