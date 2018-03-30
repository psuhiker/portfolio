<?php /* 
Template Name: Export Careers
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
</head>

<style>
body {
    padding: 0px 20px;
}

table {
    width: 100%;
}
	
</style>

<body>

    <table>
    	
    	<thead>
    		<tr>
    			<td>
    				
    			</td>
    			<td>
    				Title
    			</td>
    			<td style="white-space: nowrap;">
    				Position Type
    			</td>
    			<td style="white-space: nowrap;">
    				Position Length
    			</td>
    			<td>
    				Categories
    			</td>
    			<td>
    				School
    			</td>
    		</tr>
    	</thead>

    <?php 
        $args = array(
            'post_type' => 'job',
            'posts_per_page' => -1,
            'orderby'	=> 'date',
            'order'		=> 'desc',
        );
        $the_query = new WP_Query( $args );
    ?>
    
        <?php $counter = 1; ?>
    
        <?php if( $the_query->have_posts() ): ?>
            <?php while ($the_query->have_posts()) { $the_query->the_post(); ?>
            
                <?php 
                    $id = get_the_id($post->ID);
                ?>
            
                <tr>
                	<td>
                		<?php echo $counter; ?>
                	</td>
                	<td>
                		<?php the_title(); ?>
                	</td>
                	<td>
                		<?php if(get_field('employment_position_type')) { ?>
                		    <?php 
                		        $employmentType = get_field_object('employment_position_type');
                		        $employmentTypeValue = $employmentType['value'];
                		        $employmentTypeLabel = $employmentType['choices'][ $employmentTypeValue ];
                		    ?>
                		    <?php echo $employmentTypeLabel; ?>
                		<?php } ?>
                	</td>
                	<td>
                		<?php if(get_field('employment_position_length')) { ?>
                			<?php 
                			    $employmentLength = get_field_object('employment_position_length');
                			    $employmentLengthValue = $employmentLength['value'];
                			    $employmentLengthLabel = $employmentLength['choices'][ $employmentLengthValue ];
                			?>
                		    <?php echo $employmentLengthLabel; ?>
                		<?php } ?>
                	</td>
                	<td>
                		<?php
                		    $categories = get_the_terms( $post->ID, 'employment' );
                		    foreach( $categories as $category ) {
                		        echo $category->name . ', ';
                		    } 
                		?>
                	</td>
                	<td>
                		<?php
                		    $post_object = get_field('employment_school');
                		    if( $post_object ): $post = $post_object;
                			setup_postdata( $post ); 
                		?>
                		    <?php the_title(); ?>
                		<?php endif; ?>
                	</td>
                </tr>
                
                <?php $counter++; ?>
                
        	<?php } ?>
        <?php endif; ?>
    
    </table>

<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
    
</body>