<section id="contact">

    <div class="title">
        <div class="container waypoint" data-animate-down="contact" data-animate-up="portfolio">
        
            <h2>Talk to Us</h2>
        
        </div>
    </div>
    
    <div class="container form">
        <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
        	
			<p>Hello, I'm <input type="text" placeholder="Your Name" class="name" id="formName"><span style="display:none"></span> from <input type="text" placeholder="Company Name" class="company" id="formCompany"><span style="display:none"></span>. and I need some help with <input type="text" placeholder="Project Title" class="project" id="formProject"><span style="display:none"></span>. You can get a hold of me at <input type="text" placeholder="Email Address" class="email" id="formEmail"><span style="display:none"></span>.</p>
			<label>Please describe your needs</label>
			<textarea class="textarea" id="formDescription"></textarea>
			
			<div class="submit">
			    <button type="submit" name="wpforms[submit]" class="wpforms-submit pwdSubmitButton" id="wpforms-submit-100" value="wpforms-submit"  onclick="getElementById('nf-field-6').click();">Submit <span>My Project</span></button>
			</div>
    
        </div>
    </div>
	
	<div class="hide">
	    <?php ninja_forms_display_form(1); ?>
	</div>
	
	<!--<div class="logo">
		<img src="<?php bloginfo('template_directory'); ?>/images/logo-square-orange.png" />
	</div>-->
    
</section>