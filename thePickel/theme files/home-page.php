<body class="home">

	<section id="intro">
		
		<div class="border" data-center="border-color: #fff" data-bottom="border-color: transparent"></div>

		<div class="title">
		    <h1>Pickel Web<br> Design</h1>
		</div>
		
		<div class="logo">
		    <img src="<?php bloginfo('template_directory'); ?>/images/logo-intro.png" />
		</div>
		
		<div class="coverup">
		</div>
	
	</section>
	
	<section id="mission">
		
		<div class="vertical-align">
			<div class="content center-align _row">
				<div class="flow-text copy col s10 offset-s1 m8 offset-m2 l6 offset-l3" data-bottom="margin-top: 100vh; opacity: 0" data-center="opacity: 1; margin-top: 50vh" data-top="margin-top: 0vh"><?php the_field('about_section_copy'); ?></div>
			</div>
		</div>
		
		<div class="bg">
		
			<div class="icon hamburger one" data-bottom="margin-top: 20vh" data-top="margin-top: -20vh"></div>
			<div class="icon hamburger two" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon hamburger three" data-bottom="margin-top: 15vh" data-top="margin-top: 0vh"></div>
			<div class="icon hamburger four" data-bottom="margin-top: 25vh" data-top="margin-top: 0vh"></div>
			<div class="icon hamburger five" data-bottom="margin-top: 40vh" data-top="margin-top: 0vh"></div>
			<div class="icon hamburger six" data-bottom="margin-top: 75vh" data-top="margin-top: 20vh"></div>
			<div class="icon hamburger seven" data-bottom="margin-top: 35vh" data-top="margin-top: 0vh"></div>
			<div class="icon hamburger eight"></div>
			<div class="icon hamburger nine" data-bottom="margin-top: 35vh" data-top="margin-top: 0vh"></div>
			<!--<div class="icon hamburger ten"></div>-->
			
			<div class="icon fries one" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon fries two" data-bottom="margin-top: 30vh" data-top="margin-top: 10vh"></div>
			<div class="icon fries three" data-bottom="margin-top: 35vh" data-top="margin-top: 5vh"></div>
			<div class="icon fries four" data-bottom="margin-top: 15vh" data-top="margin-top: -5vh"></div>
			<div class="icon fries five" data-bottom="margin-top: 0vh" data-top="margin-top: -5vh"></div>
			<div class="icon fries six" data-bottom="margin-top: 0vh" data-top="margin-top: -15vh"></div>
			
			<div class="icon pickle one" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle two" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle three" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle four" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle five" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle six" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle seven" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle eight" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle nine" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle ten" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle eleven" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle twelve" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle thirteen" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle fourteen" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle fifteen" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle sixteen" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle seventeen" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle eighteen" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle nineteen" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
			<div class="icon pickle twenty" data-bottom="margin-top: 10vh" data-top="margin-top: 0vh"></div>
		
		</div>
		
	</section>
	
	<section id="portfolio">
		
		<div class="col s12 center-align">
			
			<h1>Our Work</h1>
			
		</div>
		
		<?php if( have_rows('portfolio_section_portfolio_items') ): ?>
		
		    <?php 
		        //$portfolioCount = count(get_field('portfolio_section_portfolio_items'));
		        //$portfolioWidth = ($portfolioCount * 100) + 22.5;
		        //$servicesHeight = ($portfolioCount * 100) + 22.5;
		        //$i = 1;
		    ?>
		    <div class="portfolioItems scroll">
		    			
		    	<?php while ( have_rows('portfolio_section_portfolio_items') ) : the_row(); ?>
		    	
		    	    <?php $post_object = get_sub_field('portfolio_section_portfolio_items_item'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
		    	    
		    	        <div class="block">
		    	        	<div class="inner">
		    	            	
		    	            	<h2 class="title">
		    	            	    <?php the_title(); ?>
		    	            	</h2>
		    	            	
		    	            	<div class="featuredImage" style="background-image: url(<?php the_field('marquee_background'); ?>);">
									<a href="<?php the_permalink(); ?>">
										<div class="vertical-align center-align">
											<div class="content">
												<span class="link">View Portfolio</span>
												<div class="description">
													<p><?php the_field('website_description'); ?></p>
												</div>
											</div>
										</div>
										<?php if($i == $portfolioCount) { ?>
											<div id="portfolioLast"></div>
										<?php } ?>
									</a>
								</div>
		    	            	
		    	            </div>
		    	        </div>
		    	    
		    	    <?php wp_reset_postdata(); ?>
		    	    <?php endif; ?>
					<?php $i++; ?>
		    	    
		    	<?php endwhile; ?>
				
				<!--<div class="block">
					<div class="inner">
						
					</div>
				</div>
				
				<div class="block">
					<div class="inner">
						
					</div>
				</div>
				
				<div class="block">
					<div class="inner">
						
					</div>
				</div>
				
				<div class="block">
					<div class="inner">
						
					</div>
				</div>-->
		    			
		    </div>
		    
		    <style>
		    	.xportfolioItems {
		    		z-index: 1;
		    		width: <?php echo $portfolioWidth; ?>vw;
		    	}
				#xservicesHeader {
					margin-top: <?php echo $servicesHeight; ?>vw;
				}
		    </style>
		
		<?php endif; ?>
		
	</section>
	
	<section id="servicesHeader">
		
		<div class="col s12 center-align">
			
			<h1>Services</h1>
			
		</div>
		
	</section>
	
	<section id="services">
		
		<div class="vertical-align">
			<div class="content">
		
				<?php if( have_rows('about_section_solutions') ): ?>
				
				    <div class="solutions row">
				    
				        <?php while ( have_rows('about_section_solutions') ) : the_row(); ?>
				        
				            <div class="col m6 l4 xl3">
				                <p data-bottom="transform: scale(0)" data-center="transform: scale(1)"><?php the_sub_field('about_section_solutions_solution'); ?></p>
				            </div>
				        
				        <?php endwhile; else : ?>
				    
				    </div>
				    
				<?php endif; ?>
		
			</div>
		</div>
		
	</section>
	
	<?php include (TEMPLATEPATH . '/includes/contact.php' ); ?>
	
	<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
	<?php if (false !== strpos($url,'?submitted')) { ?>
	
	    <div class="pwdModal in">
	    	<div class="wrapper">
	    		<div class="col-md-8 col-md-offset-2">
	    			<h1 class="headline">Great! You're in Touch!</h1>
	    			<p class="content">We'll get back to you shortly. In the meantime, feel free to look around.</p>
	    			<p><a class="pwdModalClose">Close</a></p>
	    		</div>
	    	</div>
	    </div>
	
	<?php } ?>
		
	<?php get_footer(); ?>
	
	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

</body>