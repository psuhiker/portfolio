<?php /* 
Template Name: Find a School
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
</head>

<body class="secondary leadership <?php  global $post; $post_slug=$post->post_name; echo $post_slug;  ?> <?php if($post->post_parent) { $post_data = get_post($post->post_parent); echo $post_data->post_name; } ?>">

	<?php get_header(); ?>
		
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	
	    <div class="grid_12 marquee">
	       <div class="marquee-height">
		    	<div class="blue-bg">
		    		<div class="image" style="background-image: url(<?php the_field('marquee_image'); ?>)">
		    			<div class="title">
		    				
		    			</div>
		    		</div>
		    		<div class="container">
			            <div class="grid_5 copy marquee-copy">
				            <div class="padding">
				                <div class="copy-slider loaded">
				                    <h1><?php the_field('the_subtitle'); ?></h1>
				                    <div class="content">
				                        <?php the_content(); ?>
				                    </div>
					            </div> 
				            </div>
			        	</div>
			    	</div>
		    	</div>
		    </div>
	    </div>

	    <?php query_posts(array( 'showposts', 'posts_per_page'=> '-1', 'post_type'=> 'wpsl_stores' )); while (have_posts()) { the_post(); ?>
	        <div id="myModal<?php the_id(); ?>" class="reveal-modal school modal" data-reveal></div>
	    <?php } ?><?php wp_reset_query(); ?>
	    
	    <div style="display:  none;">
	        <!-- Controls Category Filtering -->
    	    <script language="javascript">
    	    function displayCondition() {
    	        /*condition = new Array("", "<style>.show {display: none;} <?php query_posts(array( 'showposts', 'posts_per_page'=> '-1', 'post_type'=> 'wpsl_stores', 'school' => 'early-childhood-education' )); while (have_posts()) { the_post(); ?>.show.school<?php the_id(); ?> {display: block;}<?php } ?><?php wp_reset_query(); ?></style>", "<style>.show {display: none;} <?php query_posts(array( 'showposts', 'posts_per_page'=> '-1', 'post_type'=> 'wpsl_stores', 'school' => 'elementary-school' )); while (have_posts()) { the_post(); ?>.show.school<?php the_id(); ?> {display: block;}<?php } ?><?php wp_reset_query(); ?></style>", "<style>.show {display: none;} <?php query_posts(array( 'showposts', 'posts_per_page'=> '-1', 'post_type'=> 'wpsl_stores', 'school' => 'high-school' )); while (have_posts()) { the_post(); ?>.show.school<?php the_id(); ?> {display: block;}<?php } ?><?php wp_reset_query(); ?></style>", "<style>.show {display: none;} <?php query_posts(array( 'showposts', 'posts_per_page'=> '-1', 'post_type'=> 'wpsl_stores', 'school' => 'special-education' )); while (have_posts()) { the_post(); ?>.show.school<?php the_id(); ?> {display: block;}<?php } ?><?php wp_reset_query(); ?></style>");
    	        var getsel = document.getElementById('select_1').value;
    	        document.getElementById("divId").innerHTML = condition[getsel];
    	        var haveSchools = false;
    	        jQuery('#wpsl-stores .show').each(function(){
    	        	if($(this).css('display') != 'none') {
    	        		haveSchools = true;	
    	        	}
    	        });
    	        if(haveSchools == true) {
    	        	jQuery('#wpsl-stores .no-schools').css('display','none');
    	        } else {
    	        	jQuery('#wpsl-stores .no-schools').css('display','block');
    	        	
    	        }*/
    	    }
    	    </script>
    	    <div id="divId" name="divName" ></div>
	    </div>
	    
	<?php endwhile; ?>
	<?php else : ?>
	
		<h1 class="center">Not Found</h1>
	 	<p class="center">Sorry, but this page cannot be found.</p>
	
	<?php endif; ?>
	
	<div class="map">
	    <?php echo do_shortcode('[wpsl]');?>
	</div>
	
	<?php query_posts(array( 'showposts', 'posts_per_page'=> '-1', 'post_type'=> 'wpsl_stores', 'school'=> 'special-education' )); while (have_posts()) { the_post(); ?>
	    <div id="myModal<?php the_id(); ?>" class="reveal-modal school modal" data-reveal></div>
	<?php } ?><?php wp_reset_query(); ?>
	
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	    
	    <?php while(the_flexible_field("sections")): ?>
	    
	        <?php if(get_row_layout() == "section_text"): ?>
	        
	            <?php include (TEMPLATEPATH . '/section-text.php' ); ?>
	                         
	        <?php endif; ?>
	        
	        <?php if(get_row_layout() == "section_text_left"): ?>
	        
	            <?php include (TEMPLATEPATH . '/section-text-left.php' ); ?>
	                         
	        <?php endif; ?>
	        
	        <?php if(get_row_layout() == "section_double"): ?>
	        
	            <?php include (TEMPLATEPATH . '/section-double.php' ); ?>
	            
	        <?php endif; ?>
	        
	        <?php if(get_row_layout() == "section_double_border"): ?>
	        
	            <?php include (TEMPLATEPATH . '/section-double-border.php' ); ?>
	            
	        <?php endif; ?>
	        
	        <?php if(get_row_layout() == "section_triple"): ?>
	        
	            <?php include (TEMPLATEPATH . '/section-triple.php' ); ?>
	            
	        <?php endif; ?>
	        
	    <?php endwhile; ?>
	    <?php wp_reset_query(); ?>
	    
	<?php endwhile; ?>
	<?php else : ?>
	
		<h1 class="center">Not Found</h1>
	 	<p class="center">Sorry, but this page cannot be found.</p>
	
	<?php endif; ?>
	
	<?php get_footer(); ?>

<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

<script>
    $(document).foundation();
    $(document).ready(function() {
        $('.search-schools').click(function(){
            $('.results').addClass('active');
            $('.wpsl-gmap-canvas').addClass('active');
		});
		$('.close').click(function(){
			$('.results').removeClass('active');
			$('.wpsl-gmap-canvas').removeClass('active');
		});
	});
</script>
    
</body>