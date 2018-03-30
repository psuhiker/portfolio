<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<div class="wrap custom-dashboard">

    <div class="col-xs-12">
    	
    	<img src="<?php bloginfo('template_directory'); ?>/images/logo-orange.png" width="100" height="100" style="margin-top: 25px; margin-bottom: 10px;">
    	
    	<?php 
    	    $args = array(
    	        'post_type' => 'page',
    	        'orderby' => 'title',
    	        'order' => 'asc',
    	        'post_status' => 'publish',
    	        'posts_per_page' => -1,
    	        'post__not_in' => array(3196, 5688),
    	        'post_parent' => 0
    	    );
    	    query_posts( $args ); 
    	?>
    	    <?php if ( have_posts() ) : ?>
    	        <h2>Quick Page Links</h2>
    	        <ul class="list-inline">
    	        	<?php while ( have_posts() ) : the_post(); ?>
    	        	    <li>
    	        	    	<a href="post.php?post=<?php the_id(); ?>&action=edit"><strong><?php the_title(); ?></strong></a>
    	        	    	
    	        	    	<?php
    	        	    	    $id = get_the_id($post->ID);
    	        	    	    $args = array(
    	        	    	        'post_type'      => 'page',
    	        	    	        'posts_per_page' => -1,
    	        	    	        'post_parent'    => $id,
    	        	    	        'order'          => 'ASC',
    	        	    	        'orderby'        => 'menu_order'
    	        	    	    );
    	        	    	    $parent = new WP_Query( $args );
    	        	    	?>
    	        	    	
    	        	    	<?php if ( $parent->have_posts() ) : ?>
    	        	    	
    	        	    	    <span class="children">(<?php while ( $parent->have_posts() ) : $parent->the_post(); ?><a href="post.php?post=<?php the_id(); ?>&action=edit" title="<?php the_title(); ?>"><?php the_title(); ?></a><?php endwhile; ?>)</span>
    	        	    	
    	        	    	<?php endif; wp_reset_postdata(); ?>
    	        	    	
    	        	    	
    	        	    </li>
    	        	<?php endwhile; ?>
    	        </ul>
    	    <?php else: endif; ?>
    	<?php wp_reset_query(); ?>
    	
    </div>
    
    <div class="col-md-4">
    		
    	<?php query_posts( 'post_type=post&orderby=date&order=DESC&posts_per_page=5&post_status=publish' ); ?>
    	    <?php if ( have_posts() ) : ?>
    	        <h2>Recent Blog Posts</h2>
    	        <table class="table">
    	        	<?php while ( have_posts() ) : the_post(); ?>
    	        	    <tr>
    	        	        <td>
    	        	        	<?php the_title(); ?><br>
    	        	        	<span>
    	        	        	    <?php the_author(); ?> | <?php the_time('F j, Y'); ?>
    	        	        	</span>
    	        	        </td>
    	        	    	<td>
    	        	    		<a href="<?php the_permalink(); ?>">
    	        	    			View
    	        	    		</a>
    	        	    	</td>
    	        	    	<td>
    	        	    		<a href="post.php?post=<?php the_id(); ?>&action=edit">
    	        	    			Edit
    	        	    		</a>
    	        	    	</td>
    	        	    </tr>
    	        	<?php endwhile; ?>
    	        </table>
    	    <?php else: endif; ?>
    	<?php wp_reset_query(); ?>
    	
    	<?php query_posts( 'post_type=post&orderby=date&order=DESC&post_status=draft' ); ?>
    	    <?php if ( have_posts() ) : ?>
    	        <h2>Unpublished Blog Posts</h2>
    	        <table class="table">
    	        	<?php while ( have_posts() ) : the_post(); ?>
    	        	    <tr>
    	        	        <td>
    	        	        	<?php the_title(); ?><br>
    	        	        	<span>
    	        	        	    <?php the_author(); ?> | <?php the_time('F j, Y'); ?>
    	        	        	</span>
    	        	        </td>
    	        	    	<td>
    	        	    		<a href="<?php the_permalink(); ?>">
    	        	    			View
    	        	    		</a>
    	        	    	</td>
    	        	    	<td>
    	        	    		<a href="post.php?post=<?php the_id(); ?>&action=edit">
    	        	    			Edit
    	        	    		</a>
    	        	    	</td>
    	        	    </tr>
    	        	<?php endwhile; ?>
    	        </table>
    	    <?php else: endif; ?>
    	<?php wp_reset_query(); ?>
    	
    </div>
    
    <div class="col-md-4">
    		
    	<?php query_posts( 'post_type=case_study&orderby=date&order=DESC&posts_per_page=5' ); ?>
    	    <?php if ( have_posts() ) : ?>
    	        <h2>Recent Case Studies</h2>
    	        <table class="table">
    	        	<?php while ( have_posts() ) : the_post(); ?>
    	        	    <tr>
    	        	        <td>
    	        	        	<?php the_title(); ?>: <?php the_field('case_study_title') ?><br>
    	        	        	<span>
    	        	        		Published on <?php the_time('F j, Y'); ?>
    	        	        	</span>
    	        	        </td>
    	        	    	<td>
    	        	    		<a href="<?php the_permalink(); ?>">
    	        	    			View
    	        	    		</a>
    	        	    	</td>
    	        	    	<td>
    	        	    		<a href="post.php?post=<?php the_id(); ?>&action=edit">
    	        	    			Edit
    	        	    		</a>
    	        	    	</td>
    	        	    </tr>
    	        	<?php endwhile; ?>
    	        </table>
    	    <?php else: endif; ?>
    	<?php wp_reset_query(); ?>
    	
    </div>

    <div class="col-md-4">
    	
    	<?php query_posts( 'post_type=lp&orderby=title&order=ASC&post_status=publish' ); ?>
    	    <?php if ( have_posts() ) : ?>
    	        <h2>Landing Pages</h2>
    	        <table class="table">
    	        	<?php while ( have_posts() ) : the_post(); ?>
    	        	    <tr>
    	        	        <td>
    	        	        	<?php the_title(); ?><br>
    	        	        	<span>
    	        	        		Published on <?php the_time('F j, Y'); ?>
    	        	        	</span>
    	        	        </td>
    	        	    	<td>
    	        	    		<a href="<?php the_permalink(); ?>">
    	        	    			View
    	        	    		</a>
    	        	    	</td>
    	        	    	<td>
    	        	    		<a href="post.php?post=<?php the_id(); ?>&action=edit">
    	        	    			Edit
    	        	    		</a>
    	        	    	</td>
    	        	    </tr>
    	        	<?php endwhile; ?>
    	        </table>
    	    <?php else: endif; ?>
    	<?php wp_reset_query(); ?>
    	
    	<?php query_posts( 'post_type=jobs&orderby=title&order=ASC&post_status=publish&meta_key=active&meta_value=a:1:{i:0;s:3:"yes";}' ); ?>
    	    <h2>Active Job Postings</h2>
    	    <?php if ( have_posts() ) : ?>
    	        <table class="table">
    	        	<?php while ( have_posts() ) : the_post(); ?>
    	        	    <tr>
    	        	        <td>
    	        	        	<?php the_title(); ?><br>
    	        	        	<span>
    	        	        		Last edited <?php the_modified_date('F j, Y'); ?>
    	        	        	</span>
    	        	        </td>
    	        	    	<td>
    	        	    		<a href="<?php the_permalink(); ?>">
    	        	    			View
    	        	    		</a>
    	        	    	</td>
    	        	    	<td>
    	        	    		<a href="post.php?post=<?php the_id(); ?>&action=edit">
    	        	    			Edit
    	        	    		</a>
    	        	    	</td>
    	        	    </tr>
    	        	<?php endwhile; ?>
    	        </table>
    	    <?php else: ?>
    	        <table class="table">
    	        	<tr>
    	        	    <td>
    	        	    	There are no active job postings.
    	        	    </td>
    	        		<td colspan="2">
    	        			<a href="edit.php?post_type=jobs">View Drafts</a>
    	        		</td>
    	        	</tr>
    	        </table>
    	    <?php endif; ?>
    	<?php wp_reset_query(); ?>
    	
    </div>

</div>