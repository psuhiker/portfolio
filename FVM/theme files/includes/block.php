<?php 
    get_post_type( $post );
    
    // Post Type: Case Study
    if ( 'case_study' == get_post_type() ) {
        // Post ID
        $id = get_the_id($post->ID);
        // Background Image
        if(get_field('case_study_featured_image_alt')) {
            $background_image = get_field('case_study_featured_image_alt');
        } else {
            $background_image = get_field('case_study_featured_image');
        }
        // Title
        $title = get_the_title();
        // Hover Title
        if(get_field('seo_title_tag')) {
            $hoverTitle = get_field('seo_title_tag');
        } else {
            $hoverTitle = get_field('case_study_title');
        }
        // Hover Description
        if(get_field('seo_title_tag')) {
            $hoverDescription = get_field('seo_description');
        } else {
            $hoverDescription = get_field('case_study_summary');
        }
        // Label
        //$label = 'Case Study';
        // Categories
        $categories = get_the_terms($post->ID, 'case_study_categories');
        // Top Label
        $topLabel = $label;
        // Top Content
        $topContent = get_the_title();
        // Bottom Label
        $bottomLabel = 'Industry';
        // Bottom Content
        $bottomContent = get_field('case_study_date');
        // Link
        $link = get_the_permalink($post->ID);
    
    // Section: Case Study
    } elseif(get_row_layout() == "add_a_section_case_study") { 
        $post_object = get_sub_field('add_a_section_case_study_case_study'); 
            if( $post_object ): $post = $post_object; setup_postdata( $post );
                // Post ID
                $id = get_the_id($post->ID);
                // Background Image
                $background_image = get_field('case_study_featured_image');
                // Title
                $title = get_the_title();
                // Hover Title
                if(get_field('seo_title_tag')) {
                    $hoverTitle = get_field('seo_title_tag');
                } else {
                    $hoverTitle = get_field('case_study_title');
                }
                // Hover Description
                if(get_field('seo_title_tag')) {
                    $hoverDescription = get_field('seo_description');
                } else {
                    $hoverDescription = get_field('case_study_summary');
                }
                // Label
                $published_date = get_the_date('Y-m-d G:i:s');
                    $published_date = new DateTime($published_date);
                    $today = new DateTime();
                    $interval = $published_date->diff($today);
                    if ($interval->days < 32) {
                        $label = 'New Work';
                    } else {
                        $label = 'Case Study';
                    }
                // Top Label
                $topLabel = $label;
                // Top Content
                $topContent = get_the_title();
                // Bottom Label
                $bottomLabel = 'Industry';
                // Bottom Content
                $bottomContent = get_field('case_study_date');
                // Link
                $link = get_the_permalink($post->ID);
            wp_reset_postdata();
            endif;
            
    // Section: Blog Post
    } elseif(get_row_layout() == "add_a_section_blog_post") {
        $post_object = get_sub_field('add_a_section_blog_post_blog_post');
            if( $post_object ): $post = $post_object; setup_postdata( $post );    
                // Post ID
                $id = get_the_id($post->ID);
                // Background Image
                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); 
                    $background_image = $thumb['0']; 
                // Title
                $title = get_the_title();
                // Hover Title
                if(get_field('seo_title_tag')) {
                    $hoverTitle = get_field('seo_title_tag');
                } else {
                    $hoverTitle = get_the_title();
                }
                // Hover Description
                if(get_field('seo_title_tag')) {
                    $hoverDescription = get_field('seo_description');
                } else {
                    $hoverDescription = get_the_excerpt();
                }
                // Label
                $label = 'Blog';
                // Top Label
                $topLabel = 'Author';
                // Top Content
                $topContent = get_the_author();
                // Bottom Label
                $bottomLabel = 'Date';
                // Bottom Content
                $bottomContent = get_the_time('F j, Y');
                // Link
                $link = get_the_permalink($post->ID);
            wp_reset_postdata();
            endif;
            
    // Section: Video
    } elseif(get_row_layout() == "add_a_section_video") {
        // Future Enhancement
    
    // Landing Page: Blog
    } elseif(get_row_layout() == "lp_supporting_content_blog") {
        $post_object = get_sub_field('lp_supporting_content_blog_post');
            if( $post_object ): $post = $post_object; setup_postdata( $post );    
                // Post ID
                $id = get_the_id($post->ID);
                // Background Image
                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); 
                    $background_image = $thumb['0']; 
                // Title
                $title = get_the_title();
                // Hover Title
                if(get_field('seo_title_tag')) {
                    $hoverTitle = get_field('seo_title_tag');
                } else {
                    $hoverTitle = get_the_title();
                }
                // Hover Description
                if(get_field('seo_title_tag')) {
                    $hoverDescription = get_field('seo_description');
                } else {
                    $hoverDescription = get_the_excerpt();
                }
                // Label
                $label = 'Blog';
                // Top Label
                $topLabel = 'Author';
                // Top Content
                $topContent = get_the_author();
                // Bottom Label
                $bottomLabel = 'Date';
                // Bottom Content
                $bottomContent = get_the_time('F j, Y');
                // Link
                $link = get_the_permalink($post->ID);
            wp_reset_postdata();
            endif;
            
    // Landing Page: Case Study
    } elseif(get_row_layout() == "lp_supporting_case_study") {
        $post_object = get_sub_field('case_study_object');
            if( $post_object ): $post = $post_object; setup_postdata( $post );    
                // Post ID
                $id = get_the_id($post->ID);
                // Background Image
                    $background = get_sub_field('lp_supporting_content_image');
                    $background_image = $background['url'];
                // Title
                $title = get_field('case_study_title');
                // Hover Title
                if(get_field('seo_title_tag')) {
                    $hoverTitle = get_field('seo_title_tag');
                } else {
                    $hoverTitle = get_the_title();
                }
                // Hover Description
                if(get_field('seo_title_tag')) {
                    $hoverDescription = get_field('seo_description');
                } else {
                    $hoverDescription = get_the_excerpt();
                }
                // Label
                $label = 'Case Study';
                // Top Label
                // $topLabel = 'Author';
                // Top Content
                // $topContent = get_the_author();
                // Bottom Label
                // $bottomLabel = 'Date';
                // Bottom Content
                // $bottomContent = get_the_time('F j, Y');
                // Link
                $link = get_the_permalink($post->ID);
            wp_reset_postdata();
            endif;
    }
    
?>

<a href="<?php echo $link; ?>">

    <div class="outer min-height" style="background-image: url(<?php echo $background_image; ?>)">
        <div class="inner">
    
            <div class="content--bottom min-height">
            	
            	<?php 
            	    if( get_sub_field('add_a_section_case_study_color') == 'dark' ) {
            	        $labelClass = 'block--label--dark';
            	    } elseif( get_sub_field('add_a_section_blog_post_color') == 'dark' ) {
            	        $labelClass = 'block--label--dark';
            	    } elseif( get_sub_field('add_a_section_video_color') == 'dark' ) {
            	        $labelClass = 'block--label--dark';
            	    } elseif( get_sub_field('add_a_section_page_link_color') == 'dark' ) {
            	        $labelClass = 'block--label--dark';
            	    } elseif( get_sub_field('text_color') == 'font--bl' ) {
            	        $labelClass = 'block--label--dark';
            	    } else {
            	        $labelClass = 'block--label';
            	    }
            	?>
            	
            	<div class="<?php echo $labelClass; ?>">
                	<div class="label">
                		<?php if (isset($label)) { echo $label; ?>:<?php } ?>
                	</div>
                	<h2 class="subheadline"><?php echo $title; ?></h2>
            	</div>
            	
            	<?php if (isset($categories)) { ?>
            	    <ul class="list-inline">
            	    	<?php $category_counter = 0; foreach($categories as $category) { $category_counter++; ?>
            	    	    <li>
            	    	        <?php echo $category->name; ?><?php echo ($category_counter != 3 && count($categories) > $category_counter) ? ', ' : ''; ?>
            	    	    </li>
            	    	<?php } ?>
            	    </ul>
            	<?php } ?>
    
            </div>
            
            <div class="hover">
            	<div class="wrapper">
            	
            	    <div class="content--top">
            	    	<?php if (isset($topLabel)) { ?>
                	    	<div class="label">
                	    		<?php echo $topLabel; ?>:
                	    	</div>
                	    <?php } ?>
            	    	<p><?php echo $topContent ?></p>
            	    </div>
            	
                	<div class="vertical-align">
                	    <div class="content">
                	    	<h3 class="subheadline">
                    	    	<?php echo $hoverTitle; ?>
                	    	</h3>
                	    	<p>
                	    	    <?php echo $hoverDescription; ?>
                	    	</p>
                	    </div>
                	</div>
                	
                	<div class="content--bottom">
                	    <?php if (isset($bottomLabel)) { ?>
                    	    <div class="label">
                    	        <?php echo $bottomLabel; ?>:
                    	    </div>
                    	<?php } ?>
                	    <p>
                	    	<?php echo $bottomContent; ?>
                	    </p>
                	</div>
            	
            	</div>
            </div>
    
        </div>
    </div>

</a>