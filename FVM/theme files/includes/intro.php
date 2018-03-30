<?php 
    // Author Page
    if (is_author() ) {
        // Post ID
        $id = $post->post_author;
        $author = get_the_author_meta('users_page_id');
        // Title
        $title = 'Posts by<br> ' . get_the_title($author);
        // Subtitle
        $subtitle = get_field('employee_title', $author );
    // Thank You Page - Landing Pages
    } else if (is_single(submission) ) {
        // Post ID
        $id = get_the_id($post->ID);
        // Title
        $title = get_field('the_subtitle', $id);
        // Subtitle
        $subtitle = get_field('lp_subtitle_caption', $id);
    // Thank You Page - Contact
    } else if (is_page(submission) ) {
        // Post ID
        $id = get_the_id($post->ID);
        // Title
        $title = get_field('the_subtitle', $id);
        // Subtitle
        $subtitle = get_post_field('post_content', $id);
    // Blog Home
    } else if ( is_home() ) { 
        // Post ID
        $id = 2677;
        // Title
        $title = get_field('the_subtitle', $id);
        // Subtitle
        $subtitle = get_post_field('post_content', $id);
    // Blog Archive
    } elseif ( is_archive() ) { 
        // Post ID
        $id = 2677;
        // Title
        $title = single_cat_title("", false);
        // Subtitle
        $subtitle = get_post_field('post_content', $id);
    // Case Study Category
    } elseif(is_tax('case_study_categories')) {
        // Post ID
        $id = 13;
        // Title
        $title = get_field('the_subtitle', $id);
        // Subtitle
        $subtitle = get_post_field('post_content', $id);
    // Jobs Main Page
    } else if (is_post_type_archive(jobs)) {
        // Post ID
        // None
        // Title
        $title = 'Work at FVM';
        // Subtitle
        $subtitle = 'If you want to build industry-defining brands with a dedicated team of creatives and strategists, you\'re in the right place. Choose an open position below to get started.';
    // Single Job Post
    } else if (is_singular(jobs) ) {
        // Post ID
        $id = get_the_id($post->ID);
        // Title
        $title = get_the_title($post->ID);
        // Subtitle
        // None
    // Single Bio
    } else if (is_singular(bio) ) {
        // Post ID
        $id = get_the_id($post->ID);
        // Title
        $title = get_the_title($post->ID);
        // Subtitle
        $subtitle = get_field('employee_title', $id) . '<br><span class="font-size--sm plain">' . get_field('employee_phone_number', $id) . ' | ' . get_field('employee_email_address', $id) . '</span>';
    // Single Case Study
    } else if (is_singular(case_study) ) {
        // Post ID
        $id = get_the_id($post->ID);
        // Title
        $title = get_field('case_study_title', $id);
        // Subtitle
        $subtitle = get_field('case_study_subtitle');
    // Single Landing Page
    } else if (is_singular(lp) ) {
        // Post ID
        $id = get_the_id($post->ID);
        // Title
        $title = get_the_title($post->ID);
        // Subtitle
        // None
    // Single Blog Post
    } else if (is_single() ) {
        // Post ID
        $id = get_the_id($post->ID);
        // Title
        $title = get_the_title($post->ID);
        // Subtitle
        $authorID = get_the_author_meta('users_page_id');
        if( get_field('override_blog_author') ) {
            $subtitle = get_field('override_blog_author_byline') . ' | ' . get_the_time('F j, Y');
        } elseif ( $authorID == 1 ) {
            $subtitle = get_the_time('F j, Y');
        } else {
            $subtitle = 'By ' . get_the_author($post->ID) . ' | ' . get_the_time('F j, Y');
        }
    // People Page
    } else if (is_page('people') ) {
        // Post ID
        $id = get_the_id($post->ID);
        // Title
        $title = get_field('the_subtitle', $id);
        // Subtitle
        $subtitle = get_post_field('post_content', $id);
    // Contact Page
    } else if (is_page('contact') ) {
        // Post ID
        $id = get_the_id($post->ID);
        // Title
        $title = get_field('the_subtitle', $id);
        // Subtitle
        $subtitle = get_post_field('post_content', $id);
    // Work Page
    } else if (is_page('work') ) {
        // Post ID
        $id = get_the_id($post->ID);
        // Title
        $title = get_field('the_subtitle', $id);
        // Subtitle
        $subtitle = get_post_field('post_content', $id);
    // About Page
    } else if (is_page('about') ) {
        // Post ID
        $id = get_the_id($post->ID);
        // Title
        $title = get_field('the_subtitle', $id);
        // Subtitle
        $subtitle = get_post_field('post_content', $id);
    // All Others
    } else {
        // Post ID
        $id = get_the_id($post->ID);
        // Title
        $title = get_field('the_subtitle');
        // Subtitle
        // $subtitle = get_the_content();
    } 
?>

<div id="intro" class="col-sm-6 block--three-quarters">
    <div class="outer">
        <div class="inner">

            <div class="content">
            	
            	<h1 class="headline"><?php echo $title; ?></h1>
            	<div class="subtitle">
            	    <?php echo $subtitle; ?>
            	</div>
            	
            	<?php if ( is_home() ) { ?>
            	
                	Home <?php include ( TEMPLATEPATH . '/includes/blog-category-select.php' ); ?>
                	
                <?php } elseif ( is_single('submission') ) { ?>
                <?php } elseif ( is_singular('case_study') ) { ?>
                <?php } elseif ( is_singular('lp') ) { ?>
                <?php } elseif ( is_singular('bio') ) { ?>
                	
                <?php } elseif ( is_single() ) { ?>
                
                    Single <?php include ( TEMPLATEPATH . '/includes/blog-category-select.php' ); ?>
                
                <?php } elseif ( is_category() ) { ?>
                
                    Category <?php include ( TEMPLATEPATH . '/includes/blog-category-select.php' ); ?>
                
                <?php } ?>

            </div>

        </div>
    </div>
</div>