<a href="<?php the_permalink(); ?>">

    <div class="outer min-height" style="background-image: url(<?php echo $url ?>)">
        <div class="inner">
    
            <div class="content--bottom min-height">
            				
            	<div class="block--label">
                	<h2 class="subheadline"><?php the_title(); ?></h2>
                	<div class="label">
                		<?php if (isset($author)) { ?>
                		    <?php echo $author; ?> 
                		<?php } ?>
                		<span class="text-nowrap">
                			<?php the_time('F j, Y'); ?>
                		</span>
                	</div>
            	</div>
            				
            </div>
            
            <div class="hover">
            	<div class="wrapper">
            	
            	    <div class="content--top hidden-sm hidden-md">
            	    	<?php if (isset($authorName)) { ?>
                	    	<div class="label">
                	    		Author:
                	    	</div>
                	    	<p><?php echo $authorName; ?></p>
                	    <?php } ?>
            	    </div>
            	
                	<div class="vertical-align">
                	    <div class="content">
                	    	<p>
                	    	    <?php the_excerpt(); ?>
                	    	</p>
                	    </div>
                	</div>
                	
                	<div class="content--bottom hidden-sm hidden-md">
                	    <div class="label">
                    	    Date:
                    	</div>
                	    <p>
                	    	<?php the_time('F j, Y'); ?>
                	    </p>
                	</div>
            	
            	</div>
            </div>
            
        </div>
    </div>
</a>