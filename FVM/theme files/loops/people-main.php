<?php include (TEMPLATEPATH . '/includes/intro.php' ); ?>

<?php $count = 1; ?>

<?php 
    query_posts(
        array(
            'showposts', 
            'posts_per_page'=> '30', 
            'post_type'=> 'bio', 
            'orderby'=> 'title', 
            'order'=> 'asc'
        )
    ); 
    while (have_posts()) { the_post(); 
?>

    <?php include (TEMPLATEPATH . '/includes/margin-adjustment-array.php' ); ?>
    
    <div class="col-xs-12 col-sm-3 block--full <?php echo $layoutAdjustment; ?> min-height">

        <?php include (TEMPLATEPATH . '/includes/block-people.php' ); ?>
    
    </div>
    <?php $count++; ?>
    
<?php } ?><?php wp_reset_query(); ?>

<div class="clearfix"></div>

<div class="col-sm-12 col-md-6 block--quarter block--margin-top--quarter<?php the_field('contact_jobs_copy'); ?>" id="social">
    <div class="outer bg--black color--white">
        <div class="inner no-padding--horizontal">
        			
        	<div class="vertical-align">
        		<div class="content">
        			
        			<div class="col-xs-12">
        				
        				<?php query_posts( 'post_type=jobs&orderby=title&order=ASC&meta_key=active&meta_value=a:1:{i:0;s:3:"yes";}' ); ?>
        				
        				    <?php if ( have_posts() ) : ?>
        				    
        				        <h3 class="subheadline--white default-margin--bottom">Want to Work for FVM?</h3>
        				        <p>
        				        	We are currently hiring for the following positions:
        				        	<ul class="list-inline list-comma">
            				        	<?php while ( have_posts() ) : the_post(); ?>
            				        	    <li>
            				        	        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            				        	    </li>
            				        	<?php endwhile; ?>
        				        	</ul>
        				        </p>
        				
        				    <?php else: endif; ?>
        				    
        				<?php wp_reset_query(); ?>
        				    
        			</div>
        			
        		</div>
        	</div>
        	
        </div>
    </div>
</div>

<div class="bio-overlay"></div>