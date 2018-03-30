<?php /* 
Template Name: Family-Stories
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
</head>
<body class="secondary catholic-schools-week<?php  global $post; $post_slug=$post->post_name; echo $post_slug;  ?> <?php if($post->post_parent) { $post_data = get_post($post->post_parent); echo $post_data->post_name; } ?>">
	<?php get_header(); ?>
	<?php get_template_part( 'loop-marquee' ); ?>
	<div class="grid_12 family-stories">
		<style>
			.story-nav {
				float: right;
				margin: 20px 0px 20px 10px;
			}
			
		</style>
	    <div class="padding">
	        <div class="container">
	        	<div>
	        		
		        	<a href="#" class="button red small story-nav next-story">Next Story</a>
		        	<a href="#" class="button red small story-nav previous-story">Previous Story</a>
		        	<a style="padding: 6px 30px" href="/lead-by-example" class="story-nav button blue large">Submit Your Story</a>
	        	</div>
	        	<div class="clear"></div>
	            <?php
	            	$args = array(
						'post_type'			=> 'family_stories',
						'orderby'			=> 'rand',
						'posts_per_page' 	=> '-1',
					);
			$cat_id = get_cat_ID("Family Stories");
			$page_id = get_the_ID();
			$categories = get_categories(array("child_of" => $cat_id));
			$cat = get_page_uri($page_id);
			foreach($categories as $category) {
				if($category->slug == $cat) {
					$args['category_name'] = $category->slug;
					break;
				}
			}
					$query = new WP_Query($args);
					if($query->have_posts()) {
						$i = 0;
						while ($query->have_posts()) : $query->the_post(); ?>
							<?php $i++; ?>
							<div id="story_<?php print $i; ?>" class="story_panel">
								<h1><?php the_title(); ?><br><small><?php the_field('family_stories_school_name'); ?></small></h1>
								<p><?php the_content(); ?></p>
							</div>
						<?php endwhile;
					}
	            ?>
	        </div>
	    </div>
	</div>
	<script>
		jQuery('document').ready(function(){
			var counter = 1;
			var totalStories = <?php echo $i; ?>;
			jQuery('.story_panel').css('display', 'none').css('min-height', '800px');
			jQuery('#story_1').css('display', 'block');
			
			jQuery('.story-nav.next-story, .story-nav.previous-story').click(function(){
				if(jQuery(this).hasClass('next-story')) {
					if(counter == totalStories) {
						counter = 1;
					} else {
						counter++;
					}
				} else {
					if(counter == 1) {
						counter = totalStories;
					} else {
						counter--;
					}
				}
				jQuery('.story_panel').css('display', 'none');
				jQuery('#story_' + counter).css('display', 'block');
				return false; 
			});
		});
	</script>
	<?php get_footer(); ?>
<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
</body>
