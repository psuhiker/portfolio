<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php include (TEMPLATEPATH . '/includes/intro.php' ); ?>
    
    <?php $counter = 1; ?>
    
    <?php while(the_flexible_field('home_page_sections')): ?>
    
        <?php if ($counter == 1) { ?>
            <div class="col-sm-6 block--full">
        <?php } elseif ($counter == 2) { ?>
            <div class="col-sm-6 block--full block--margin-top--quarter">
        <?php } elseif ($counter == 3) { ?>
            <div class="col-sm-6 block--half">
        <?php } elseif ($counter == 4) { ?>
            <div class="col-sm-6 col-md-3 block--full">
        <?php } elseif ($counter == 5) { ?>
            <div class="col-sm-6 col-md-3 block--full sm--block--margin-top--three-quarters">
        <?php } elseif ($counter == 6) { ?>
            <div class="col-sm-6 block--quarter block--margin-top--quarter sm--block--margin-top--none">
        <?php } elseif ($counter == 7) { ?>
            <div class="col-sm-6 block--half sm--block--margin-top--quarter">
        <?php } elseif ($counter == 8) { ?>
            <div class="col-sm-6 block--full">
        <?php } elseif ($counter == 9) { ?>
            <div class="col-sm-6 col-md-3 block--full block--margin-top--half sm--block--margin-top--three-quarters">
        <?php } elseif ($counter == 10) { ?>
            <div class="col-sm-6 col-md-3 block--full block--margin-top--half block--margin-left--half sm--block--margin-top--quarter sm--block--margin-left--full">
        <?php } elseif ($counter == 11) { ?>
            <div class="col-sm-6 block--full sm--block--margin-top--three-quarters">
        <?php } elseif ($counter == 10) { ?>
            <div class="col-sm-6 block--half">
        <?php } elseif ($counter == 11) { ?>
            <div class="col-sm-6 block--half">
        <?php } elseif ($counter == 12) { ?>
            <div class="col-sm-6 block--half sm--block--full">
        <?php } elseif ($counter == 13) { ?>
            <div class="col-sm-6 col-md-3 block--full sm--block--three-quarters sm--block--margin-top--three-quarters">
        <?php } ?>
    
            <?php include ( TEMPLATEPATH . '/includes/block.php' ); ?>
            <?php $counter++; ?>
        
            <div class="clearfix"></div>
        </div>
    
    <?php endwhile; ?>
    
    <?php include (TEMPLATEPATH . '/includes/social.php' ); ?>

<?php endwhile; ?>

	<?php else : ?>

<?php endif; ?>