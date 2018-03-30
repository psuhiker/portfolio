<form id="filterForm" onsubmit="return false;">
	<p><label for="keyword">Filter by Keyword</label></p>
	<!--<input class="job-form__search" name="s" type="text" placeholder="ex. Assistant, Director">-->
	<input id="filter" type="text" name="s" class="job-form__search" placeholder="ex. Assistant, Director">
	<div class="reset" style="display: none;">
	    <a id="resetBtn"><img src="<?php bloginfo('template_directory'); ?>/images/close_blue.png" width="20" height="20"></a>
	</div>
</form>
<div class="grey-divider"></div>

<?php
    $post_type = 'job';
    $taxonomy =  get_object_taxonomies($post_type)[0];
    $terms =  get_terms( array(
        'taxonomy' => $taxonomy,
        'hide_empty' => false
      ) );
?>

<form class="job-form" method="get" action="<?php echo site_url('/job'); ?>">

    <div class="grid_12 positionRelative">
    
        <label for="position_type" class="expandLabel">Position Type</label>
        
    </div>
    
    <div class="grid_6">
    
        <?php $counter=0; ?>
        <?php foreach($terms as $term)  { ?>
          <?php $counter++; ?>
            <div class="form-block">
              <input class="job-form__check" name="term_<?php echo $counter; ?>" type="checkbox" value="<?php echo $term->slug; ?>" onclick="getElementById('applyFilters').click(); myAjax();"><span class="check-span"><?php echo $term->name; ?></span></input>
              <span class="aops-check"></span>
            </div>
        <?php } ?>
        
    </div>
    
    <div class="grid_6">
    	
    	<div class="form-block">
    		<input class="job-form__check" type="checkbox" name="employment_position_length" value="permanent" onclick="getElementById('applyFilters').click(); myAjax();"><span class="check-span">Permanent</span></input>
    		<span class="aops-check"></span>
    	</div>
    	
    	<div class="form-block">
    		<input class="job-form__check" type="checkbox" name="employment_position_length" value="temporary" onclick="getElementById('applyFilters').click(); myAjax();"><span class="check-span">Temporary</span></input>
    		<span class="aops-check"></span>
    	</div>
    	<div class="form-block">
    		<input class="job-form__check" type="checkbox" name="employment_position_type" value="full_time" onclick="getElementById('applyFilters').click(); myAjax();"><span class="check-span">Full Time</span></input>
    		<span class="aops-check"></span>
    	</div>
    	<div class="form-block">
    		<input class="job-form__check" type="checkbox" name="employment_position_type" value="part_time" onclick="getElementById('applyFilters').click(); myAjax();"><span class="check-span">Part Time</span></input>
    		<span class="aops-check"></span>
    	</div>
    	<div>&nbsp;</div>
    </div>
    
    <div class="grid_12">
    	<label for="keyword" class="expandLabel">Position Level</label>
    	<div class="form-block">
    		<input class="job-form__check" type="checkbox" name="employment_position_level" value="elementary" onclick="getElementById('applyFilters').click(); myAjax();"><span class="check-span">Elementary</span></input>
    		<span class="aops-check"></span>
        </div>
        <div class="form-block">
            <input class="job-form__check" type="checkbox" name="employment_position_level" value="special_education" onclick="getElementById('applyFilters').click(); myAjax();"><span class="check-span">Special Education</span></input>
            <span class="aops-check"></span>
        </div>
        
        <div class="jobsExternalLinks">
        
            <p><a href="http://www.google.com" target="_blank">View Secondary Positions &raquo;</a></p>
            <p style="margin-bottom: 0px;"><a href="http://www.google.com" target="_blank">View Secondary Athletics Positions &raquo;</a></p>
        
        </div>
      
    </div>

     <!--//--><div style="display:  none;">
  
  <div>&nbsp;</div>
  <label for="keyword">Keyword</label>
  <input class="job-form__search" name="s" type="text" placeholder="ex. Assistant, Director">
  <div class="grey-divider"></div>

  <?php
      $args = array(
          'post_type' => 'wpsl_stores',
          'posts_per_page' => -1,
      );
      $loop = new WP_Query($args);
  ?>
  <?php if ( $loop->have_posts() ) : ?>

    <label for="keyword">School</label>
      <select class="job-form__select" name="employment_school">
      <option selected disabled>Choose one...</option>

    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <option name="employment_school" value="<?php echo $post->ID; ?>"><?php echo $post->post_title; ?></option>

    <?php endwhile; ?>

      </select>

  <?php endif; wp_reset_postdata(); ?>
  <div class="grey-divider"></div>
  
  </div>
  <!--//-->
  
  
  <div class="clear"></div>
  
  <div class="form-block" style="margin-top: 20px; text-align: right; display: none;">
    <input class="job-form__submit" type="submit" value="Update Filters" id="applyFilters">
  </div>
</form>

<div class="grey-divider"></div>

<?php
      $args = array(
          'post_type' => 'wpsl_stores',
          'posts_per_page' => -1,
      );
      $loop = new WP_Query($args);
  ?>
  <?php if ( $loop->have_posts() ) : ?>

      <select class="job-form__select" name="employment_school" id="cat">
      <option selected disabled>View Positions by School</option>

    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <option name="employment_school" value="?s=&employment_school=<?php echo $post->ID; ?>"><?php echo $post->post_title; ?></option>

    <?php endwhile; ?>

      </select>

  <?php endif; wp_reset_postdata(); ?>
  
  <script type="text/javascript">
      var dropdown = document.getElementById("cat");
      function onCatChange() {
      	if ( dropdown.options[dropdown.selectedIndex].value != 0 ) {
      		location.href = "<?php echo esc_url( home_url( '/' ) ); ?>/job/"+dropdown.options[dropdown.selectedIndex].value;
              // Send to dataLayer to trigger GTM tag.
              dataLayer.push({
                  event: 'FilterSelect',
                      'Filter': dropdown.options[dropdown.selectedIndex].text
              });
      	}
      }
      dropdown.onchange = onCatChange;
  </script>
  
  <script>
      $(window).on("load", function() {
      	document.getElementById('submitButton').click();
  	});
  </script>