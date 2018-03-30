<?php /* 
Template Name: Tuition
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
</head>

<body class="secondary leadership <?php  global $post; $post_slug=$post->post_name; echo $post_slug;  ?> <?php if($post->post_parent) { $post_data = get_post($post->post_parent); echo $post_data->post_name; } ?>">

	<?php get_header(); ?>
		
	<?php get_template_part( 'loop-tabs' ); ?>
	
	<!-- Start of School Listing -->
	
	<div class="container school list" style="display: none;">
		
		<div class="container school list">
	        <div class="padding">
	        
	            <h3>All High Schools</h3>
	            
	            <ol>
	             	<?php query_posts(array( 'showposts', 'posts_per_page'=> '-1', 'post_type'=> 'wpsl_stores', 'school'=> 'high-school', 'orderby'=> 'title', 'order'=> 'asc' )); while (have_posts()) { the_post(); ?>
	             		<li><a class="wpsl-header" href="<?php the_permalink(); ?>" data-reveal-id="myModal<?php the_id(); ?>" data-reveal-ajax="true"><?php the_title(); ?></a></li>
	           		<?php } ?><?php wp_reset_query(); ?>
	            </ol>
	        
	        </div>
	    </div>
	</div>
	
	<?php query_posts(array( 'showposts', 'posts_per_page'=> '-1', 'post_type'=> 'wpsl_stores')); while (have_posts()) { the_post(); ?>
	    <div id="myModal<?php the_id(); ?>" class="reveal-modal school modal" data-reveal></div>
	    <?php //$save_id = get_the_id(); ?>
	<?php } ?><?php wp_reset_query(); ?>
	
	
	
	<!-- End of School Listing -->
	
	<?php get_footer(); ?>

    <?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
    
    <!-- Automatically Activates Modal -->

    <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
    
    <?php if (false !== strpos($url,'?open=' )) { ?>
    
        <script>
            {
            	var query = window.location.search.substring(1);
                var tempQuery = query.replace(/%20/g," ");
                var vars = tempQuery.split("&");
                for (var i=0;i<vars.length;i++) {
                    var pair = vars[i].split("=");
                    if(pair[0] == variable){
                        return pair[1];
                    }
                }
                return(false);
            }
        </script>
        
        <?php 
            $schoolID = $_GET['open'];
        ?>
    
        <script>
        	$(document).ready(function(){
        	    $('#myModal<?php echo $schoolID; ?>').foundation('reveal', 'open', '?p=<?php echo $schoolID; ?>');
        	});
        </script>
    
    <?php } ?>
    
    <!-- End Automatically Activates Modal -->
    
</body>