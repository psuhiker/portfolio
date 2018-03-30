<?php $categories = get_categories(); ?>
<div class="sidebar block">
    <div class="categories">
        <h3 class="sidebar__title border-bottom--red">Categories</h3>
        <ul class="ulist">
            <?php 
                wp_list_categories( array(
                    'orderby' => 'name',
                    'title_li' => ''
                ) ); 
            ?>
            
        </ul>
    </div>
</div>


