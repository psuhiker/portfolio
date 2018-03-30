<?php include (TEMPLATEPATH . '/includes/intro.php' ); ?>

<div class="col-md-6 block--full sm--block--three-quarters">
	<div class="outer min-height" style="background-image: url(<?php the_field('contact_feature_image'); ?>);">
		<div class="inner"></div>
	</div>
</div>

<div class="col-md-6 block--margin-top--quarter sm--block--margin-top--none">
	<div class="outer bg--white">
		<div class="inner">
			
			<div class="form--light xxl-padding--vertical">
    			
    			<div class="col-xs-12  xl-margin--bottom">
    				<p class="label font-size--default">Who are we talking to?</p>
    			</div>
    			
    			<div class="col-xs-12 col-sm-6 form-group xl-margin--bottom" id="wrapperFirstName">
    				<label>First Name</label>
    				<input type="text" id="fieldFirstName" class="checkValue required">
    				<div class="errorMessage">
    					Please Enter Your First Name
    				</div>
    			</div>
    			
    			<div class="col-xs-12 col-sm-6 form-group xl-margin--bottom" id="wrapperLastName">
    				<label>Last Name</label>
    				<input type="text" id="fieldLastName" class="checkValue required">
    				<div class="errorMessage">
    					Please Enter Your Last Name
    				</div>
    			</div>
    			
    			<div class="col-xs-12 form-group xl-margin--bottom" id="wrapperCompany">
    				<label>Company / Organization</label>
    				<input type="text" id="fieldCompany" class="checkValue required">
    				<div class="errorMessage">
    					Please Enter Your Company
    				</div>
    			</div>
    			
    			<div class="col-xs-12 col-sm-6 form-group xl-margin--bottom">
    				<label>Phone</label>
    				<input type="text" id="fieldPhone" class="checkValue">
    			</div>
    			
    			<div class="col-xs-12 col-sm-6 form-group xl-margin--bottom" id="wrapperEmail">
    				<label>Email</label>
    				<input type="text" id="fieldEmail" class="checkValue required">
    				<div class="errorMessage">
    					Please Enter a Valid Email
    				</div>
    			</div>
    			
    			<div class="col-xs-12 xl-margin--vertical">
    				<p class="label font-size--default">How can we help?</p>
    			</div>
    			
    			<div class="col-xs-12 form-group xl-margin--bottom">
    				<label>Message</label>
    				<textarea id="fieldMessage" class="checkValue"></textarea>
    			</div>
    			
    			<div class="col-xs-12 form-group xl-margin--bottom">
    				<input type="submit" id="fieldSubmitInvalid" value="Submit" onclick="return empty();">
    				<input type="submit" class="hidden" id="fieldSubmitValid" value="Submit" onclick="getElementById('e2ma_signup_submit_button').click();">
    			</div>
    			
    			<!-- Floating Labels -->
    			<script>
    				$(document).ready(function( $ ) {
    					$(function () {
    					  var showClass = 'show';
    					  // On focus show the label.
    					  $('.checkValue').focus( function () {
    					  	// Select label preceding the input.
    					    var label = $(this).prev('label');
    				      	label.addClass(showClass);
    					  });
    					  // On focusout, check if the input it empty. If it is, hide the label.
    					  $('.checkValue').on('checkval', function () {
    					    var label = $(this).prev('label');
    					    if(this.value === '') {
    					      label.removeClass(showClass);
    					    }
    					  }).focusout( function () {
    					    $(this).trigger('checkval');
    					  });
    					});
    				});
    			</script>
    			
    			<!-- Sync Inputs -->
    			<script>
    			    var varFirstName = document.getElementById("fieldFirstName");
    			    varFirstName.oninput = function(e) {
    			        jQuery( '#id_member_field_first_name' ).val( varFirstName.value ).trigger( 'change' );
    			    }
    				var varLastName = document.getElementById("fieldLastName");
    				varLastName.oninput = function(e) {
    				    jQuery( '#id_member_field_last_name' ).val( varLastName.value ).trigger( 'change' );
    				}
    				var varCompany = document.getElementById("fieldCompany");
    				varCompany.oninput = function(e) {
    				    jQuery( '#id_member_field_company' ).val( varCompany.value ).trigger( 'change' );
    				}
    				var varPhone = document.getElementById("fieldPhone");
    				varPhone.oninput = function(e) {
    				    jQuery( '#id_member_field_phone' ).val( varPhone.value ).trigger( 'change' );
    				}
    				var varEmail = document.getElementById("fieldEmail");
    				varEmail.oninput = function(e) {
    				    jQuery( '#id_email' ).val( varEmail.value ).trigger( 'change' );
    				}
    				var varMessage = document.getElementById("fieldMessage");
    				varMessage.oninput = function(e) {
    				    jQuery( '#id_member_field_message' ).val( varMessage.value ).trigger( 'change' );
    				}
    			</script>
    			
    			<!-- Validate Form -->
    			<script>
    			    function empty() {
    			        var validateFirstName;
    			        validateFirstName = document.getElementById("fieldFirstName").value;
    			        if (validateFirstName == "") {
    			            $('#wrapperFirstName').addClass('error');
    			        };
    			        var validateLastName;
    			        validateLastName = document.getElementById("fieldLastName").value;
    			        if (validateLastName == "") {
    			            $('#wrapperLastName').addClass('error');
    			        };
    			        var validateCompany;
    			        validateCompany = document.getElementById("fieldCompany").value;
    			        if (validateCompany == "") {
    			            $('#wrapperCompany').addClass('error');
    			        };
    			        var validateEmail;
    			        validateEmail = document.getElementById("fieldEmail").value;
    			        if (validateEmail == "") {
    			            $('#wrapperEmail').addClass('error');
    			        };
    			    }
    			</script>
    			
    			<!-- Activates Button if Valid -->
    			<script>
    			    (function() {
    			        $('input.required').keyup(function() {
    			            var empty = false;
    			            $('input.required').each(function() {
    			                if ($(this).val() == '') {
    			                    empty = true;
    			                }
    			            });
    			            if (empty) {
    			                $('#fieldSubmitInvalid').removeClass('hidden');
    			                $('#fieldSubmitValid').addClass('hidden');
    			            } else {
    			                $('#fieldSubmitInvalid').addClass('hidden');
    			                $('#fieldSubmitValid').removeClass('hidden');
    			            }
    			        });
    			    })()
    			</script>
    			
    			<div class="hidden">
    				<link href="https://static-cdn.e2ma.net/signups/css/signup-refresh.med.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="https://signup.e2ma.net/tts_signup/1850170/09141ce217883826420013efa3c463eb/1777513/"></script><div id="load_check" class="signup_form_message" >This form needs Javascript to display, which your browser doesn't support. <a href="https://signup.e2ma.net/signup/1850170/1777513/"> Sign up here</a> instead </div><script type="text/javascript">signupFormObj.drawForm();</script>
    			</div>
    			
    			<div class="clearfix"></div>
    			
			</div>
			
		</div>
	</div>
</div>

<div class="col-md-6 block--half">
	<div class="outer" style="background-image: url(<?php the_field('philly_location_image'); ?>);">
		<div class="inner">
			
			<div class="content--bottom">
			    <span class="bg--white default-padding--vertical lg-padding--horizontal font-family--secondary">
			    	<?php the_field('philly_location_text'); ?>
			    </span>
			</div>
			
		</div>
	</div>
</div>

<div class="col-md-6 block--half" style="background-image: url(<?php the_field('portland_location_image'); ?>);">
	<div class="outer">
		<div class="inner">
			
			<div class="content--bottom">
				<span class="bg--white default-padding--vertical lg-padding--horizontal font-family--secondary">
					<?php the_field('portland_location_text'); ?>
				</span>
			</div>
			
		</div>
	</div>
</div>

<div class="clearfix"></div>

<?php include (TEMPLATEPATH . '/includes/social.php' ); ?>

<div class="col-md-3 block--full">
	<div class="outer min-height" style="background-image: url(<?php the_field('contact_accent_image'); ?>);">
		<div class="inner"></div>
	</div>
</div>

<div class="col-md-6 block--half">
	<div class="outer bg--black color--white">
		<div class="inner">
			
			<div class="vertical-align">
			    <div class="content">
			    
			        <p class="headline--white">
			            <strong>
			            	<?php the_field('contact_jobs_title'); ?>
			            </strong>
			        </p>
			
        			<?php query_posts( 'post_type=jobs&orderby=title&order=ASC&meta_key=active&meta_value=a:1:{i:0;s:3:"yes";}' ); ?>
        		
        		        <?php if ( have_posts() ) : ?>
        		        
        		            <p class="lg-margin--bottom"><?php the_field('contact_jobs_copy'); ?></p>
        		            
        		            <ul class="list-unstyled font-family--secondary">
        		            	
        		            	<?php while ( have_posts() ) : the_post(); ?>
        		            	
        		            	    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        		            	    
        		            	<?php endwhile; ?>
        			                    
        		            </ul>
        		            
        		        <?php else: ?>
        		        
        		            <p><?php the_field('contact_no_jobs_copy'); ?></p>
        		            
        		        <?php endif; ?>
        		    <?php wp_reset_query(); ?>
		    
			    </div>
			</div>
			
		</div>
	</div>
</div>
