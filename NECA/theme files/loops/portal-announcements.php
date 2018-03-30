<?php 
    $args = array(
        'post_type' => 'member_announcements',
        'posts_per_page' => 1,
        'orderby'	=> 'date',
        'order'		=> 'ASC',
    );
    $the_query = new WP_Query( $args );
?>

    <?php if( $the_query->have_posts() ): ?>
        <?php while ($the_query->have_posts()) { $the_query->the_post(); ?>
        
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
            
    	<?php } ?>
    <?php endif; ?>

<?php wp_reset_postdata(); ?>

<?php 
    $args = array(
        'post_type' => 'member_announcements',
        'offset' => 1,
        'orderby'	=> 'date',
        'order'		=> 'ASC',
    );
    $the_query = new WP_Query( $args );
?>

    <?php if( $the_query->have_posts() ): ?>
        <?php while ($the_query->have_posts()) { $the_query->the_post(); ?>
        
            <div class="alert alert-success">
                <h3 class="sm-margin--top"><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
            
    	<?php } ?>
    <?php endif; ?>

<?php wp_reset_postdata(); ?>