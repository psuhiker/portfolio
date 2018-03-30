<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php 
        $author_id = get_the_author_meta('users_page_id');
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
        $url = $thumb['0'];
    ?>

    <?php include (TEMPLATEPATH . '/includes/intro.php' ); ?>
    
    <div class="col-md-6 block--quarter sm--block--three-quarters">
        <div class="outer bg--light-grey color--white">
        	<div class="inner">
        		
        		<div class="vertical-align">
        		    <div class="content">
        		
        		        <div class="col-md-6">
        		            <div class="previous-post">
        		            
        		                <?php previous_post_link('<p class="label--uppercase">Previous: </p><p>%link</p>'); ?>
        		            
        		            </div>
        		        </div>
        		        
        		        <div class="col-md-6">
        		            <div class="next-post">
        		            
        		                <?php next_post_link('<p class="label--uppercase">Next: </p><p>%link</p>'); ?>
        		            
        		            </div>
        		        </div>
        		
        		    </div>
        		</div>
        		
        	</div>
        </div>
    </div>
    
    <div class="col-sm-6 col-md-3 block--full">
        <div class="outer bg--dark-grey color--white">
        	<div class="inner">
        		
        		<div class="vertical-align">
        		    <div class="content default-padding--vertical">
        		
        		        <div class="col-xs-12">
        		        
            		        <p class="label--uppercase no-margin--bottom">The Author</p>
            		        <?php if ( $author_id == 1 ) { ?>
            		            <?php the_field('override_blog_author_byline'); ?>
            		            <script>
            		            	$("body").children().each(function () {
            		            	    $(this).html( $(this).html().replace(/By/g,"") );
            		            	});
            		            </script>
            		        <?php } else { ?>
            		            <p class="no-margin--bottom">
            		            	<?php the_author_meta('display_name'); ?>
            		            </p>
            		            <p class="font-size--sm">
            		                <?php the_field('employee_title', $author_id ); ?>
            		            </p>
            		            <p class="font-size--sm">
            		            	<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="link--underline">More by <?php the_author_meta('first_name'); ?></a>
            		            	| 
            		            	<a href="#" class="bio-toggle link--underline">Bio</a>
            		            </p>
            		            
            		        <?php } ?>
            		        
        		        </div>
        		        
        		        <div class="col-xs-12 default-margin--top" id="share">
            		        
            		        <p class="label--uppercase no-margin--bottom">Share This</p>
            		        
            		        <ul class="sm-margin--top">
            		        	<li>
            		        		<a href="http://twitter.com/share?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" target="_blank" title="Share on Twitter"onclick="javascript:window.open(this.href,
            		                           '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;_gaq.push(['_trackEvent', 'Blog Interactions', 'Share on Social Media', 'Twitter']);">
            		        			<img src="<?php bloginfo('template_directory'); ?>/images/share-icon-twitter.svg">
            		        		</a>
            		        	</li>
            		        	<li>
            		        		<a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>" title="Share on Facebook" onClick="javascript:window.open(this.href,
            		                           '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;_gaq.push(['_trackEvent', 'Blog Interactions', 'Share on Social Media', 'Facebook']);">
            		        		    <img src="<?php bloginfo('template_directory'); ?>/images/share-icon-facebook.svg">
            		        		</a>
            		        	</li>
            		        	<li>
            		        		<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" title="Share on Google+" onClick="javascript:window.open(this.href,
            		                           '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;_gaq.push(['_trackEvent', 'Blog Interactions', 'Share on Social Media', 'Google+']);">
            		        		    <img src="<?php bloginfo('template_directory'); ?>/images/share-icon-google.svg">
            		        		</a>
            		        	</li>
            		        	<li>
            		        		<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php echo get_the_excerpt(); ?>&source=http://www.thinkfvm.com" onClick="javascript:window.open(this.href,
            		                           '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;_gaq.push(['_trackEvent', 'Blog Interactions', 'Share on Social Media', 'LinkedIn']);">
            		        		    <img src="<?php bloginfo('template_directory'); ?>/images/share-icon-linkedin.svg">
            		        		</a>
            		        	</li>
            		        	<li>
            		        	    <a href="mailto:?subject=@FVM:%20<?php the_title(); ?>&body=I%20thought%20you%20might%20like%20this%20article%20I%20found:%0d%0a%0d%0a<?php the_permalink(); ?>%0d%0a%0d%0a<?php echo get_the_excerpt(); ?>" onClick="_gaq.push(['_trackEvent', 'Blog Interactions', 'Share on Social Media', 'Email']);">
            		        	        <img src="<?php bloginfo('template_directory'); ?>/images/share-icon-email.svg">
            		        	    </a>
            		        	</li>
            		        </ul>
        		        
        		        </div>
        		
        		    </div>
        		</div>
        		
        	</div>
        </div>
    </div>
    
    <?php if ( $author_id == 1 ) { ?><?php } else { ?>
    
        <!-- Panel Callout -->
        <script>
            $(document).ready(function() {
        		$('.bio-toggle, .bio-content').click(function(event){
        			event.stopPropagation();
        			$('.bio-content').toggleClass('active');
        			$('.bio-overlay').toggleClass('active');
        			$('body').toggleClass('modal-open');
        		});
        	});
        </script>
        
        <?php 
            query_posts(
                array(
                    'showposts', 
                    'posts_per_page'=> '1', 
                    'post_type'=> 'bio', 
                    'orderby'=> 'title', 
                    'order'=> 'asc',
                    'p' => $author_id
                )
            ); 
            while (have_posts()) { the_post(); 
        ?>
        
            <div class="people">
            	<?php include (TEMPLATEPATH . '/includes/bio-panel.php' ); ?>
            	<div class="bio-overlay"></div>
            </div>
        
        <?php } ?><?php wp_reset_query(); ?>
    
    <?php } ?>
    
    <div class="col-sm-6 col-md-3 block--full">
        <div class="outer min-height" style="background-image: url(<?php if ( $author_id == 1 ) { ?><?php echo $url; ?><?php } else { ?><?php the_field('employee_photo_1', $author_id); ?><?php } ?>);">
        	<div class="inner"></div>
        </div>
    </div>
    
    <div class="clearfix"></div>
    
    <?php $layout = get_field('blog_layout_options'); ?>
    <?php if( get_field('blog_layout_options') == 'custom' ) { ?>
    
        <div class="xxl-margin--vertical">
    
            <?php if( have_rows('blog_custom_block') ): while ( have_rows('blog_custom_block') ) : the_row(); ?>
        
                <?php if( get_row_layout() == 'blog_custom_block_text_block' ) { ?>
                
                    <div class="<?php if( get_sub_field('blog_custom_block_text_block_theme') == 'dark' ) { ?>xxl-padding--vertical bg--dark-grey color--white<?php } ?>">
                
                        <div class="container">
                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                            	<?php the_sub_field('blog_custom_block_text_block_content'); ?>
                            </div>
                        </div>
                    
                    </div>
                    
                <?php } ?>
                
                <?php if( get_row_layout() == 'blog_custom_block_title_block' ) { ?>
                
                    <div class="blog--title-block <?php if( get_sub_field('blog_custom_block_title_block_theme') == 'dark' ) { ?>no-margin--bottom xxl-padding--top bg--dark-grey color--white<?php } ?>" style="background-image: url(<?php the_sub_field('blog_custom_block_title_block_background_image'); ?>);">
                    
                        <div class="overlay"></div>
                        
                        <div class="content">
                        
                            <div class="container">
                                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                            	
                            	    <h2 class="headline--secondary">
                            	        <?php the_sub_field('blog_custom_block_title_block_title'); ?>
                            	    </h2>
                                	
                            	</div>
                            </div>
                            
                        </div>
                    
                    </div>
                    
                <?php } ?>
                
                <?php if( get_row_layout() == 'blog_custom_block_bordered_block' ) { ?>
                
                    <div class="xxl-padding--vertical <?php if( get_sub_field('blog_custom_block_bordered_block_theme') == 'dark' ) { ?>bg--dark-grey color--white<?php } ?>">
                    
                        <div class="container">
                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 bg--orange color--white font-family--secondary font-size--sm">
                            	
                            	<div class="xl-padding--all">
                                    
                                    <div class="xxl-margin--bottom default-margin--top">
                                        <img src="<?php the_sub_field('blog_custom_block_bordered_block_image'); ?>" class="image--full">
                                    </div>
                                    
                                    <?php the_sub_field('blog_custom_block_bordered_block_content'); ?>
                            		
                            	</div>
                            	
                            </div>
                        </div>
                        
                    </div>
                    
                <?php } ?>
        
            <?php endwhile; else : endif; ?>
            
        </div>
    	
    <?php } else { ?>
    
        <div class="container xxl-margin--vertical">
        
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 blog-post">
        
                <?php the_content(); ?>
                
                <div class="clearfix"></div>
                
                <p class="title">
                    Topics: <?php the_tags('', ', '); ?>
                </p>
                
            </div>
            
        </div>
    
    <?php } ?>
    
<?php endwhile; ?>

	<?php else : ?>

<?php endif; ?>