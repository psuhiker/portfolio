<?php while ( have_posts() ) : the_post(); get_template_part( 'content', 'page' ); ?>

    <?php include (TEMPLATEPATH . '/includes/marquee.php' ); ?>
    
    <section class="default">
        <div class="container">
            <div class="col-md-8">
                <h1 class="lg-margin--bottom"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    
<?php endwhile; ?>
