<div class="container tabs section">
	
	<ul class="tabs" data-tab>
	    <li class="tab-title active"><a href="#panel1">Need Based Assistance <span>for all K-12 students</span></a></li>
        <li class="tab-title"><a href="#panel2">Merit Based Scholarships <span>for high school students</span></a></li>
	</ul>
	
	<div class="tabs-content">
	
        <div class="content active" id="panel1">
	        
	        <ul class="accordion" data-accordion>
	        	<?php
	        		$alphaArr = range('a', 'z');
					$i = 0;
				?>
	        	<?php while ( have_rows('scholarship_tabs')) : the_row(); ?>
	        	<?php if(get_sub_field('scholarship_type') == "Need Based"): ?>
	            <li class="accordion-navigation <?php echo ($i == 0 ? 'active':''); ?>">
	                <a href="#panel1<?php echo $alphaArr[$i]; ?>"><?php the_sub_field('scholarship_title'); ?></a>
	                <div id="panel1<?php echo $alphaArr[$i]; ?>" class="content <?php echo ($i == 0 ? 'active':''); ?>">
	                	<?php the_sub_field('scholarship_content'); ?>
	                	<?php if(get_sub_field('scholarship_application_resource') != ''): ?>
	                	<p>
	                	<?php
	                			$resources = explode(';', get_sub_field('scholarship_application_resource'));
								foreach ($resources as $resource):
									$tempArr    = explode(',', $resource);
									$label 		= trim($tempArr[0]);
									$url 		= trim($tempArr[1]);
	                		?>
	                		
	                			<a class="button red large" href="<?php echo $url;?>" target="_blank">
	                				
	                				<?php echo $label; ?>
	                			</a>
	                			<span style="display:none;"><?php the_sub_field('scholarship_title'); ?></span>
	                			<span style="display:none;">External Link Clicks - Needs-Based</span>
	                	<?php endforeach; ?>
	                	</p>
	                	<?php endif; ?>
	                </div>
	            </li>
	            <?php $i++;?>
	            <?php endif; ?>
	            <?php endwhile; ?>
	        </ul>
	        
        </div>
        
        <div class="content" id="panel2">
        
	        <div class="intro">
	            <p>High school students with exceptional academic performance and personal character are invited to apply to these scholarship programs.</p>
	        </div>
	        
	        <ul class="accordion" data-accordion>
	        	<?php
					$i = 0;
				?>
	        	<?php while ( have_rows('scholarship_tabs')) : the_row(); ?>
	        	<?php if(get_sub_field('scholarship_type') == "Merit Based"): ?>
	            <li class="accordion-navigation <?php echo ($i == 0 ? 'active':''); ?>">
	                <a href="#panel2<?php echo $alphaArr[$i]; ?>"><?php the_sub_field('scholarship_title'); ?></a>
	                <div id="panel2<?php echo $alphaArr[$i]; ?>" class="content <?php echo ($i == 0 ? 'active':''); ?>">
	                	<?php the_sub_field('scholarship_content'); ?>
	                	<?php if(get_sub_field('scholarship_application_resource') != ''): ?>
	                		<p>
	                		<?php
	                			$resources = explode(';', get_sub_field('scholarship_application_resource'));
								foreach ($resources as $resource):
									$tempArr    = explode(',', $resource);
									$label 		= trim($tempArr[0]);
									$url 		= trim($tempArr[1]);
	                		?>
	                		
	                			<a class="button red large" href="<?php echo $url;?>" target="_blank">
	                				
	                				<?php echo $label; ?>
	                			</a>
	                			<span style="display:none;"><?php the_sub_field('scholarship_title'); ?></span>
	                			<span style="display:none;">External Link Clicks - Merit-Based</span>
	                	<?php endforeach; ?>
	                	</p>
	                	<?php endif; ?>
	                </div>
	            </li>
	            <?php $i++;?>
	            <?php endif; ?>
	            <?php endwhile; ?>
	        </ul>
	        
        </div>
        
	</div>
	
</div>