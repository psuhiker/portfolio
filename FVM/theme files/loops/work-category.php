<?php include (TEMPLATEPATH . '/includes/intro.php' ); ?>

<div class="col-md-6 block--quarter">
    <div class="outer bg--dark-grey">
    	<div class="inner">
    			
    		<?php 
    			$args = array(
    			    'taxonomy' => 'case_study_categories',
    			    'value_field' => 'slug',
    			    'selected' => 0
    			);
    			$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
    			$cats = get_categories($args); 
    		?>
    		
    		<div class="content--bottom">
    			<p class="no-margin--bottom">
    				<span class="color--light-grey font-size--sm font-family--secondary">
    				    Show case studies on: 
    				</span>
    				<select id="cat" name="custom_taxonomy" class="select--transparent">
    					<option value="<?php echo site_url(); ?>/work/">All Categories</option>
    					<?php foreach ($cats as $cat) : $category_url = get_term_link($cat, $cat->taxonomy); ?>
    					    <option value="<?php echo get_term_link($cat, $cat->taxonomy) ?>" <?php if ($url == $category_url) { ?>selected<?php } ?>>
        					    <?php echo $cat->name ?>
    					    </option>
    					<?php endforeach; ?>
    				</select>
    			</p>
    		</div>
    		
    		<?php include ( TEMPLATEPATH . '/includes/script-category-select-work.php' ); ?>
       
    	</div>
    </div>
</div>
    
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
<?php
    $args = array(
    	'post_type'=> 'case_study',
    	'posts_per_page'=> '10',
    	'paged' => $paged
    );
    $query = new WP_Query( $args );
    $count = 0;
?>
<?php if (have_posts()) { ?>
	<?php while (have_posts()) { the_post() ?>
    
        <div class="col-sm-6 block--half">
                	
            <?php include ( TEMPLATEPATH . '/includes/block.php' ); ?>
            <?php $count++; ?>
                	
        </div>
    
    <?php } ?>
    <?php wp_reset_query(); ?>
<?php } ?>

<?php if($count%2==1) { ?>

    <div class="clearfix"></div>
    
    <div class="col-md-6 block--half">
        <div class="outer bg--dark-grey">
        	<div class="inner"></div>
        </div>
    </div>
    
<?php } ?>
    
<?php include (TEMPLATEPATH . '/includes/get-started.php' ); ?>

<?php include (TEMPLATEPATH . '/includes/social.php' ); ?>