<div class="pagination">

    <?php $args = array(
        'prev_text' => __('« Previous Page'),
    	'next_text' => __('Next Page »')
    ); ?>

    <?php echo paginate_links( $args ); ?>
    
</div>