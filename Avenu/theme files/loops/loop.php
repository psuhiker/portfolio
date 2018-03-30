<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 

    <section class="default">
    
        <div class="container">
        
            <div class="col-sm-8">

                <h2 class="headline"><?php the_title(); ?></h2>
                <?php the_content(); ?>
                
            </div>
            
        </div>
    
    </section>

<?php endwhile; ?>

	<?php else : ?>

<?php endif; ?>

