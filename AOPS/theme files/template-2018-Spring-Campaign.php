<?php /* 
Template Name: 2018 Spring Campaign
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<link href="<?php bloginfo('template_directory'); ?>/css/2018-spring-campaign.css" rel="stylesheet">
</head>

<body class="secondary spring-campaign">

	<?php get_header(); ?>
	
	<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
	
	<?php if (false !== strpos($url,'submission=confirmed' )) { ?>
	
	    <section id="form" class="active">
	    	<div class="container section default">
	    	    
	    	    <div class="grid_12 copy">
	    	        <div class="padding">
	    	        					
	    	        	<h2>Thank you for starting something amazing for your child! </h2>
	    	        	
	    	        	<div class="grid_8">
	    	        	    <p>You will receive more information and direction from your chosen high school administrator. Please look for an email in the next few days.</p> 
	    	        	    <p>In the meantime, feel free to <a href="/exploreAOPS/" data-tracking="postFormFill"><strong>explore the opportunities at AOPS schools</strong></a>.</p>
	    	        	    <p>
	    	        	        <strong>
	    	        	        	Know someone who might be interested? 
	    	        	        	<a href="mailto:?subject=Start%20your%20child's%20future%20on%20March%2014%20at%207th%20Grade%20Visitation%20Day&body=I%20thought%20you%20might%20like%20this:%0d%0a%0d%0ahttp://www.aopcatholicschools.org/visit2018/%0d%0a%0d%0aHow%20will%20AOPS%20launch%20your%20child’s%20future?%20Students%20can%20find%20out%20in%20person%20at%20our%207th%20Grade%20Visitation%20Day%20on%20March%2014.%0d%0a%0d%0aOur%20annual%20event%20lets%207th%20graders%20experience%20a%20real%20day%20in%20the%20life%20of%20an%20AOPS%20high%20school%20student.%20All%2017%20high%20schools%20open%20their%20doors%20to%20students%20so%20that%20guests%20can%20tour%20the%20campuses,%20get%20answers%20to%20their%20questions,%20and%20explore%20everything%20AOPS%20high%20schools%20have%20to%20offer." data-tracking="postFormFill">
	    	        	        		Share this event with a friend.
	    	        	        	</a>
	    	        	        </strong>
	    	        	    </p> 
	    	        	</div>
	    	        					
	    	        </div>
	    	    </div>
	    	    <div class="clear"></div>
	    		
	    	</div>
	    </section>
	
	<?php } ?>
	
	<section id="marquee" class="grid_12 marquee" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/2018-spring-campaign-marquee.jpg)">
		<div class="container">
			<div class="grid_5 copy marquee-copy">
				<div class="padding">
		            <div class="copy-slider loaded">
		            	<div class="banners">
		            		<div class="banner--one">
		            			<h1>Start your child's future on <span class="text-nowrap">March 14</span> at 7th Grade Visitation Day</h1>
		            		</div>
		            		<div class="banner--two">
		            			<p>MARCH 14, 2018 | ALL AOPS HIGH SCHOOLS</p>
		            		</div>
		            	</div>
		            	<div class="grid_10 copy">
		            		<p>At 7th Grade Visitation day, your child will get a day-long preview of life at an Archdiocesan high school. Your child will meet students, staff, and faculty who are ready to answer all of his or her questions!</p>
		            	</div>
		            	<div class="clear"></div>
		            	<div class="ctas">
		            		<p>
		            		    <?php if (false !== strpos($url,'submission=confirmed' )) { ?>
		            		    <?php } else { ?>
    		            		    <a class="button white small activateForm" data-tracking="signUpDropdown" href="#formAnchor">
    		            		        Sign Up Now
    		            		    </a>
    		            		<?php } ?>
		            		    <a class="button white small hideForm active hidden">
		            		        Sign Up Now
		            		    </a>
		            		    <a href="<?php echo site_url(); ?>/find-a-school/" class="button white small" data-tracking="findSchool">
		            		        Find a School
		            		    </a>
		            		</p>
		            	</div>
		            </div> 
		        </div>
		    </div>
		</div>
	</section>
	
	<?php if (false !== strpos($url,'submission=confirmed' )) { ?>
	<?php } else { ?>
	
	<div class="clear"></div>
	
		<a name="formAnchor"></a>
	
    	<section id="form">
    		<div class="container section default">
    		    
    		    <div class="grid_12 copy">
    		        <div class="padding">
		            
		                <h2>Sign Up Now</h2>
		        	        
		        	    <link href="https://static-cdn.e2ma.net/signups/css/signup-refresh.med.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="https://signup.e2ma.net/tts_signup/1867418/721f5289656546b698a36571b2d86c4b/1779400/"></script><div id="load_check" class="signup_form_message" >This form needs Javascript to display, which your browser doesn't support. <a href="https://signup.e2ma.net/signup/1867418/1779400/"> Sign up here</a> instead </div><script type="text/javascript">signupFormObj.drawForm();</script>
		        	    <div class="clear"></div>
		        	    
		        	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		        	    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		        	    
		        	    <script>
		        	    	$(document).ready(function( $ ) {
		        	    		$(function () {
		        	    		  var showClass = 'show';
		        	    		  // On focus show the label.
		        	    		  $('input').focus( function () {
		        	    		  	// Select label preceding the input.
		        	    		    var label = $(this).parents(2);
		        	    	      	label.addClass(showClass);
		        	    		  });
		        	    		  // On focusout, check if the input it empty. If it is, hide the label.
		        	    		  $('input').on('checkval', function () {
		        	    		    var label = $(this).parents(2);
		        	    		    if(this.value === '') {
		        	    		      label.removeClass(showClass);
		        	    		    }
		        	    		  }).focusout( function () {
		        	    		    $(this).trigger('checkval');
		        	    		  });
		        	    		  $('select').focus( function () {
		        	    		  	// Select label preceding the input.
		        	    		    var label = $(this).parents(2);
		        	    		  	label.addClass(showClass);
		        	    		  });
		        	    		  // On focusout, check if the input it empty. If it is, hide the label.
		        	    		  $('select').on('checkval', function () {
		        	    		    var label = $(this).parents(2);
		        	    		    if(this.value === '') {
		        	    		      label.removeClass(showClass);
		        	    		    }
		        	    		  }).focusout( function () {
		        	    		    $(this).trigger('checkval');
		        	    		  });
		        	    		});
		        	    	});
		        	    </script>
		        	
    		        </div>
    		    </div>
    		    <div class="clear"></div>
    		    
    		</div>
    	</section>
	
	<?php } ?>
	
	<section id="start">
		<div class="container section default">
		    
		    <div class="grid_6 copy">
		        <div class="padding">
		        					
		        	<h2>What will 7th Grade Visitation Day start for your child?</h2>
		        	<p>A storied career in engineering. A full ride on an athletic scholarship. A lifelong dedication to community service. AOPS students and alumni have accomplished incredible things for themselves and for others.</p>
		        	<p>7th Grade Visitation Day is the perfect opportunity to discover if an Archdiocesan high school is right for your family. Your child will have the chance to talk to current AOPS students about how Catholic high school set their academic and personal growth into motion!</p>
                </div>
		    </div>
		    
		    <div class="grid_6 blocks">
		        <div class="padding">
		        	
		        	<div class="block">
		        		
		        		<div class="image" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/2018-spring-campaign-blog-1.jpg);"></div>
		        		
		        		<div class="image-copy">
    		        		<h3>
    		        			<a href="<?php echo site_url(); ?>/exploreaops/together-in-tech/" data-tracking="exploreAops">Programming Power</a>
    		        		</h3>
    		        		<p>When students joined the new robotics team at Bishop McDevitt High School, they didn't realize they'd be going all the way to the finals.</p>
		        		</div>
		        		
		        	</div>
		        	
		        	<div class="block">
		        		
		        		<h3>
		        			<a href="<?php echo site_url(); ?>/exploreaops/the-wins-you-dont-hear-about/" data-tracking="exploreAops">Training to Lead</a>
		        		</h3>
		        		<p>They tried out for AOPS athletics to excel on the field. Now these students are teaming up to lead and serve their communities.</p>
		        		
		        	</div>
		        	
		        	<div class="block">
		        		
		        		<h3>
		        			<a href="<?php echo site_url(); ?>/exploreaops/the-alumni-experience-finding-direction-in-faith/" data-tracking="exploreAops">Building on Faith</a>
		        		</h3>
		        		<p>Declan Cole discovered community service at Archbishop Wood. Today he's on a path to bring others to closer to their faith.</p>
		        		
		        	</div>
		        	
		        </div>
		    </div>
		    
		    <div class="clear"></div>
		</div>
	</section>
	
	<section id="fair">
		<div class="container section default">
		    
		    <div class="grid_12 copy">
		        
		        <div class="image"></div>
		        
		        <div class="text">
		        	<div class="padding">
    		        				
    		        	<h2>
    		        		Can't attend?<br>
    		        	    Meet us at an AOPS High School Fair!
    		        	</h2>
    		        	<p>If your child can't make it to 7th Grade Visitation Day, or you want to learn about AOPS high schools as a parent or guardian, AOPS High School Fairs are for you. These local evening events give families a chance to meet students, faculty, and administrators from multiple AOPS schools at once.</p>
    		        	<p>Choose a location below for event details and a list of which schools are participating. You'll also have the option of following each event page for updates and reminders as your High School Fair gets closer.</p>
    		        	
    		        </div>
		        </div>
		        
		        <div class="clear"></div>
		    </div>
		    <div class="grid_4 date text-center">
		        <div class="padding">
		        	
		        	<p>
		        	    <img src="<?php bloginfo('template_directory'); ?>/images/2018-spring-campaign-date-march-6.png" alt="" />
		        	</p>
		        	
		        	<p>
		        	    <a href="https://www.facebook.com/events/1199658673470804/" data-tracking="highSchoolFairs" target="_blank">
		        	    	North Philadelphia
		        	    </a>
		        	</p>
		        	<p>
		        	    <a href="https://www.facebook.com/events/920558244788423/" data-tracking="highSchoolFairs" target="_blank">
		        	    	South Philadelphia
		        	    </a>
		        	</p>
		        	<p>
		        	    <a href="https://www.facebook.com/events/2102628220023751/" data-tracking="highSchoolFairs" target="_blank">
		        	    	Delaware County
		        	    </a>
		        	</p>
		        	
		        </div>
		    </div>
		    <div class="grid_4 date text-center">
		        <div class="padding">
		        	
		        	<p>
		        	    <img src="<?php bloginfo('template_directory'); ?>/images/2018-spring-campaign-date-march-7.png" alt="" />
		        	</p>
		        	<p>
		        	    <a href="https://www.facebook.com/events/184593298977205/" data-tracking="highSchoolFairs" target="_blank">
		        	    	Chester County
		        	    </a>
		        	</p>
		        	<p>
		        	    Montgomery County
		        	</p>
		        	
		        </div>
		    </div>
		    <div class="grid_4 date text-center">
		        <div class="padding">
		        	
		        	<p>
		        	    <img src="<?php bloginfo('template_directory'); ?>/images/2018-spring-campaign-date-march-8.png" alt="" />
		        	</p>
		        	<p>
		        	    <a href="https://www.facebook.com/events/210896522792479/" data-tracking="highSchoolFairs" target="_blank">
		        	    	Bucks County
		        	    </a>
		        	</p>
		        	
		        </div>
		    </div>
		    <div class="clear"></div>
		</div>
	</section>
		
	<section id="explore">
		<div class="bg-coverup"></div>
		<div class="container section default">
		    <div class="grid_6">
		        <div class="padding">
		        	
		        	<h2>See how far AOPS students have gone</h2>
		        	<p>For every student that attends an AOPS event or enrolls in an AOPS high school, there's an amazing story of achievement, growth, and faith. Find out where their stories started, and how they impacted the people and communities they encountered!</p>
		            <p>
		                <a href="<?php echo site_url(); ?>/exploreaops/" class="button red small" data-tracking="exploreAops">
		                    Explore AOPS
		                </a>
		            </p>
		        	
		        </div>
		    </div>
		    <div class="clear"></div>
		</div>
	</section>
	
	<?php get_footer(); ?>

<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

<script>
	$(".activateForm").on("click", function() {
	    $("#form").addClass("active");
	    $(".activateForm").addClass("hidden");
	    $(".hideForm").removeClass("hidden");
	});
	$(".hideForm").on("click", function() {
	    $("#form").removeClass("active");
	    $(".activateForm").removeClass("hidden");
	    $(".hideForm").addClass("hidden");
	});
</script>

<script>
	
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
  
</script>
    
</body>