<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
</head>

<body class="secondary blog search results">

	<?php get_header(); ?>
	
	<div class="grid_12 marquee">
	    <div class="container">
	         <div class="grid_12 copy">
	             <div class="padding">
	             
	                 <h1>Search Results for '<?php echo "$s"; ?>'</h1>
	             
	             </div>
	         </div>
	     
	     </div>
	</div>
	<div class="clearfix"></div>

	<div class="gray-bg">
		
		<?php include (TEMPLATEPATH . '/search-news-form.php' ); ?>
		
		<div class="grid_12 section search">
		    <div class="container">
				
	        	<?php if (have_posts()) : ?>
	        	<?php while (have_posts()) : the_post(); ?>
	        	
	        	    <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
	                
	                	<div class="post-wrapper grid_12">
	                        <div class="post-block blog-table clearfix flex">
	                            <div class="grid_8 cat-page-wrapper">
	                                <div class="table-block">
	                                    <h3 class="b-font feature-title blog-title"><a href="<?php echo get_permalink(); ?>" data-label="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></h3>
	                                    <span><?php echo get_the_date('l, F jS'); ?></span>
	                                    <div class="grid_12">
	                                        <p><?php the_excerpt(); ?></p>
	                                    </div>
	                                    <div class="grid_12 vp-25">
	                                        <div class="left">
	                                            <a href="<?php echo get_permalink(); ?>" class="button red small left">Read More</a>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large', 'single-post-thumbnail' ); ?>
	                            <div class="grid_4 feature-image" style="background-image: url(<?php echo $image[0]; ?>)"></div>
	                        </div>
	                    </div>
	                <?php } else { ?>
	                    <div class="post-wrapper grid_12">
	                        <div class="post-block clearfix flex">
	                            <div class="grid_12 cat-page-wrapper">
	                                <div class="grid_8">
	                                    <h3 class="b-font feature-title blog-title"><a href="<?php echo get_permalink(); ?>" data-label="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></h3>
	                                    <span><?php echo get_the_date('l, F jS'); ?></span>
	                                </div>
	                                <div class="grid_12">
	                                    <div class="grid_8">
	                                        <p class="para--ntm"><?php the_excerpt(); ?></p>
	                                    </div>
	                                    <div class="grid_4 text-center lh-50">
	                                        <a href="<?php echo get_permalink(); ?>" class="button red small">Read More</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                	
	                	<div class="clear">&nbsp;</div>
	                
	                <?php } ?>
		    
	        	<?php endwhile; ?>
	        	<?php else : ?>
	        	
	        	    <p class="center">There were no articles that matched '<?php echo "$s"; ?>'</p>
	        	
	        	<?php endif; ?>
	        	
	         </div>
	    </div>
    </div>
		
	<?php get_footer(); ?>
	
<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
	    
</body>