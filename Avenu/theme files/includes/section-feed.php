<section class="feed">

    <div class="container">
    
        <?php if( get_sub_field('section_feed_type') == 'news' ) { ?>
        
            <div class="col-xs-12">
                <h2 class="headline--underline xl-margin--bottom"><?php the_sub_field('section_feed_title'); ?></h2>
            </div>
            
            <div class="row articles">
            
                <div class="col-md-6 no-padding--horizontal">
                
                    <?php query_posts(array('showposts', 'posts_per_page'=> '1', 'category__not_in' => array(10))); while (have_posts()) { the_post(); ?>
                    
                    	<div class="item col-xs-12 default-margin--bottom">
                    	
                    	    <?php if( get_field('news_featured_image') ) { ?>
                    	    
                    	        <div class="featured-image" style="background-image: url(<?php the_field('news_featured_image'); ?>);"></div>
                    	    
                    	    <?php } ?>
                    	    
                    	    <div class="date-bar">
                    	    
                    	        <div class="date">
                    	            <?php the_date(); ?>
                    	        </div>
                    	        
                    	        <div class="category">
                    	            <?php the_category(', '); ?>
                    	        </div>
                    	        
                    	        <div class="clearfix"></div>
                    	    
                    	    </div>
                    	    
                    	    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    	    
                        	    <div class="content">
                        	    
                        	        <h4><?php the_title(); ?></h4>
                        	        
                        	        <div class="excerpt">
                        	            <?php the_excerpt(); ?>
                        	        </div>
                        	    
                        	    </div>
                    	    
                    	    </a>
                    	
                    	</div>
                    	
                    <?php } ?>
                    <?php wp_reset_query(); ?>
                
                </div>
                
                <div class="col-md-6 no-padding--horizontal">
                
                    <?php query_posts(array('showposts', 'posts_per_page'=> '3', 'offset'=> '1', 'category__not_in' => array(10))); while (have_posts()) { the_post(); ?>
                    
                    	<div class="item col-xs-12 default-margin--bottom">
                    	
                    	    <div class="date-bar">
                    	    
                    	        <div class="date">
                    	            <?php the_date(); ?>
                    	        </div>
                    	        
                    	        <div class="category">
                    	            <?php the_category(', '); ?>
                    	        </div>
                    	        
                    	        <div class="clearfix"></div>
                    	    
                    	    </div>
                    	    
                    	    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    	    
                        	    <div class="content">
                        	    
                        	        <h4><?php the_title(); ?></h4>
                        	    
                        	    </div>
                    	    
                    	    </a>
                    	
                    	</div>
                    	
                    <?php } ?>
                    <?php wp_reset_query(); ?>
                
                </div>
            
            </div>
            
            <div class="col-xs-12">
                <p class="float--right"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="btn btn-red">See More</a></p>
                <div class="clearfix"></div>
            </div>
        
        <?php } ?>
        
        <?php if( get_sub_field('section_feed_type') == 'leadership' ) { ?>
        
            <div class="col-xs-12">
                <h2 class="headline--underline xl-margin--bottom"><?php the_sub_field('section_feed_title'); ?></h2>
            </div>
            
            <div class="clearfix"></div>
            
            <div class="row leadership row-eq-height">
            
                <?php query_posts(array('showposts', 'posts_per_page'=> '-1', 'post_type'=> 'leadership', 'orderby' => 'menu_order', 'order' => ASC)); while (have_posts()) { the_post(); ?>
                
                	<div class="item col-sm-6 col-md-4 col-lg-3 lg-margin--bottom">
                	
                	    <a class="openSummary<?php the_id(); ?>" data-tracking="bioName" data-name="<?php the_title(); ?>">
                	
                    	    <div class="bio-image" style="background-image: url(<?php the_field('leadership_image'); ?>);" data-tracking="bioName" data-name="<?php the_title(); ?>"></div>
                    	    
                    	    <div class="bio-summary" data-tracking="bioName" data-name="<?php the_title(); ?>">
                    	
                    	        <p class="name"><?php the_title(); ?></p>
                    	        <p class="title"><?php the_field('leadership_title'); ?></p>
                    	    
                    	    </div>
                	    
                	    </a>
                	
                	</div>
                	
                	<div class="full-summary summary<?php the_id(); ?>">
                	
                	    <div class="image" style="background-image: url(<?php the_field('leadership_image'); ?>);">
                	        <div class="bg"></div>
                	    </div>
                	
                	    <div class="col-md-6 col-md-offset-6 xl-padding--all">
                	    
                	        <p class="name"><?php the_title(); ?></p>
                	        <p class="title"><?php the_field('leadership_title'); ?></p>
                	        
                	        <div class="bio">
                	            <?php the_field('leadership_bio'); ?>
                	        </div>
                	    
                	    </div>
                	    
                	    <a class="close-button closeSummary<?php the_id(); ?>">
                	        <img src="<?php bloginfo('template_directory'); ?>/images/close-button-carolina-blue.png">
                	    </a>
                	
                	</div>
                	
                	<script>
                		$(".openSummary<?php the_id(); ?>").on("click", function() {
                		    $(".summary<?php the_id(); ?>").addClass("active");
                		});
                		$(".closeSummary<?php the_id(); ?>").on("click", function() {
                		    $(".summary<?php the_id(); ?>").removeClass("active");
                		});
                	</script>
                	
                <?php } ?>
                <?php wp_reset_query(); ?>
                
            </div>
        
        <?php } ?>
    
    </div>

</section>