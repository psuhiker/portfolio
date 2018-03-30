<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php include (TEMPLATEPATH . '/includes/intro.php' ); ?>
    
    <div class="col-md-6 block--three-quarters min-height">
    	<div class="outer min-height" style="background-image: url('<?php the_field('lp_intro_image'); ?>');">
    		<div class="inner"></div>
    	</div>
    </div>
    
    <div class="clearfix"></div>
    
    <div class="row-eq-height">
    
        <div class="col-sm-12 col-md-6">
        	
        	<div class="col-xs-12 xxl-padding--vertical">
        	
            	<?php while(the_flexible_field('lp_content_field')): ?>
            	
            	    <?php if(get_row_layout() == 'lp_content_field_add_a_field_default_content') { ?>
            	    
            	        <?php the_sub_field('lp_content_field_add_a_field_default_content_content'); ?>
            	    
            	    <?php } ?>
            	    
            	<?php endwhile; ?>
        	
        	</div>
        	
        </div>
        
        <div class="hidden-md hidden-lg">
        	<div class="clearfix"></div>
        </div>
        
        <div class="col-sm-12 col-md-6 bg--medium-grey no-padding--horizontal">
        
            <div class="bg--black color--medium-grey">
            	
            	<div class="xxl-padding--vertical lg-padding--horizontal">
        
                    <?php if(get_field('form_section_heading')) { ?>
                        <div class="col-xs-12">
                        	<h2 class="color--light-grey"><?php the_field('form_section_heading'); ?></h2>
                        </div>
                        <div class="clearfix"></div>
                    <?php } ?>
                    
                    <?php if(get_field('form_section_subheading')) { ?>
                        <div class="col-xs-12">
                        	<p class="color--light-grey"><?php the_field('form_section_subheading'); ?></p>
                        </div>
                        <div class="clearfix"></div>
                    <?php } ?>
                    
                    <div class="form--dark xxl-margin--top">
                        
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
                        
                        <div class="col-xs-12 form-group xl-margin--bottom">
                        	<label>Message</label>
                        	<textarea id="fieldMessage" class="checkValue"></textarea>
                        </div>
                        
                        <div class="col-xs-12 form-group xl-margin--bottom">
                        	<input type="submit" id="fieldSubmitInvalid" value="Submit" onclick="return empty();">
                        	<input type="submit" class="hidden" id="fieldSubmitValid" value="Submit" onclick="getElementById('e2ma_signup_submit_button').click();">
                        </div>
                        
                        <div class="clearfix"></div>
                        
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
                        
                        <!-- Sets Campaign Page Value -->
                        <?php
                            $slug = get_post_field( 'post_name', get_post() );
                        ?>
                        <script>
                            window.onload = function(){
                              document.getElementById("id_member_field_campaign").value = "<?php echo $slug; ?>";
                            }
                        </script>
                        
                        <div class="hidden">
                        	<link href="https://static-cdn.e2ma.net/signups/css/signup-refresh.med.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="https://signup.e2ma.net/tts_signup/1837470/09141ce217883826420013efa3c463eb/1777513/"></script><div id="load_check" class="signup_form_message" >This form needs Javascript to display, which your browser doesn't support. <a href="https://signup.e2ma.net/signup/1837470/1777513/"> Sign up here</a> instead </div><script type="text/javascript">signupFormObj.drawForm();</script>
                        </div>
                        
                        <div class="clearfix"></div>
                        
                    </div>
                
            	</div>
            	<div class="clearfix"></div>
            
            </div>
            
            <?php if (get_field('grey_callout')) { ?>
            
            	<div class="xxl-padding--all color--white font-family--secondary">
            		<?php the_field('grey_callout'); ?>
            	</div>
            	
            <?php } ?>
        
        </div>
        
    </div>
    
    <?php if( have_rows('lp_supporting_content') ): ?>
    
        <div class="row">
            
            <?php while ( have_rows('lp_supporting_content') ) : the_row(); ?>
        	
        	    <div class="block--full col-sm-6 col-md-3">
            	    <?php include ( TEMPLATEPATH . '/includes/block.php' ); ?>
            	</div>
        	
        	<?php endwhile; ?>
        	
        </div>
        
    <?php endif; ?>
    
    
<?php endwhile; ?>

	<?php else : ?>

<?php endif; ?>

    <!-- EMMA -->
    <script type="text/javascript">
    
    	document.getElementById("gform_3").addEventListener("submit", function(evt) {
			//evt.preventDefault();
			setTimeout(AoProcessForm(this), 0);
		}, true);
    	
    	function AoProcessForm(formelement) {
			for (AoI = 0; AoI < aoArr.length; AoI++) {
			  if ( aoArr[AoI].aid && aoArr[AoI].fid && aoArr[AoI].did && aoArr[AoI].server && ( aoArr[AoI].formId || aoArr[AoI].formName )) {
			    var d = document,
			    thisFormId = formelement.id || '',
			    thisFormName = formelement.name || '',
			    bi = function(i) {
			      return d.getElementById(i)
			    },
			    bn = function(i) {
			      return d.getElementsByName(i)[0]
			    },
			    names = [],
			    values = [],
			    params = {},
			    w = window,
			    targetIdOrName = aoArr[AoI].formName ? bn(aoArr[AoI].formName) : bi(aoArr[AoI].formId),
			    len = targetIdOrName.elements.length,
			    isLoaded = false,
			    ud = 'undefined',
			    st = function(f, i) {
			      w.setTimeout(f, i)
			    },
			    ce = function(t) {
			      return d.createElement(t)
			    },
			    gid = function(p) {
			      var j, i = 0,
			      n = Math.random,
			      r = [],
			      c = '0123456789abcdef'.split('');
			      for (; i < 16; i++) r[i] = c[(0 | n() * 16) & 0xf];
			      j = p + r.join('');
			      return bi(j) == null ? j : gid(p);
			    },
			    addInput = function( form, name, value )
			    {
			      var el = ce('input');
			      el.name = name;
			      el.value = value;
			      form.appendChild( el );
			    },
			    idifr = gid('aoCapT');
			
			    if (aoArr[AoI].formName == thisFormName || aoArr[AoI].formId == thisFormId) {
			      var dTarget = ce('div');
			      dTarget.style.display = 'none';
			      d.body.appendChild(dTarget);
			      dTarget.innerHTML = '<iframe name="' + idifr + '" id="' + idifr + '"><\/iframe>'; // generate iframe
			
			      var dForm = ce('form'), idform = gid('aoCapD');
			      dForm.id = idform;
			      dForm.style.display = "none";
			      dForm.method = 'POST';
			      dForm.enctype = 'multipart/form-data';
			      dForm.acceptCharset = 'UTF-8';
			      dForm.target = idifr; // form targets iframe
			      dForm.action = (aoCAP.protocol || w.location.protocol) + '//' + aoCAP.server + '/acton/forms/userSubmit.jsp';
			      d.body.appendChild(dForm); // generate form 
			
			      for (i = 0; i < len; i++) {
			        var el = targetIdOrName.elements[i];
			        var name = typeof(el.name) != ud ? el.name : null;
			        var value = typeof(el.value) != ud ? el.value : null;
			        tagName = el.nodeName.toLowerCase();
			        if (tagName == 'input' && (el.type == 'radio' || el.type == 'checkbox') && !el.checked) {
			          name = null;
			        } else if (tagName == 'select' && el.selectedIndex && el.selectedIndex != -1 && el.options[el.selectedIndex] && el.options[el.selectedIndex].value) 
			        {
			          value = el.options[el.selectedIndex].value
			        };
			        if (name != null && name != '') {
			          names.push(name);
			          values.push(el.value);
			          console.log("Element name: " + el.name + " / Element value: " + el.value);
			          params[name] = el.value;
			        };
			        addInput( dForm, el.name, el.value );
			      }
			
			      aoCAP.pid = 0;
			      aoCAP.cuid = aoCAP.cuid || '';
			      aoCAP.srcid = aoCAP.srcid || '';
			      aoCAP.camp = aoCAP.camp || '';
			      addInput( dForm, 'ao_a', aoArr[AoI].aid );
			      addInput( dForm, 'ao_f', aoArr[AoI].fid );
			      addInput( dForm, 'ao_d', aoArr[AoI].fid+":"+aoArr[AoI].did );
			      addInput( dForm, 'ao_p', 0 );
			      addInput( dForm, 'ao_jstzo', new Date().getTimezoneOffset() );
			      addInput( dForm, 'ao_form_neg_cap', '' );
			      addInput( dForm, 'ao_refurl', d.referrer );
			      addInput( dForm, 'ao_cuid', aoCAP.cuid );
			      addInput( dForm, 'ao_srcid', aoCAP.srcid );
			      addInput( dForm, 'ao_camp', aoCAP.camp );
			      bi(idform).submit();
			
			      var dTargetFrame = bi( idifr );
			        dTargetFrame.onload = function() { 
			        isLoaded = true; 
			      }; 
			      var waitForSubmit = function()
			      {
			        this.count = "";
			        if ( ! ( isLoaded || dTargetFrame.readyState == "complete" ) ) {
			          st( waitForSubmit, 200 );
			          this.count ++;
			        } else if (this.count > 7) {
			          return true;
			          console.log("skipping dForm");
			        }
			      else {
			        d.body.removeChild( dForm );
			        d.body.removeChild( dTarget );
			      }
			    };
			
			    st( waitForSubmit, 100 );
			
			    }
			  } else {
			    console.log('aoCAP property missing');
			    } 
			  }
			};
		var aoProtocol = location.protocol;
		if ( aoProtocol.indexOf('http') < 0 ) aoProtocol = 'http:';
			var aoCAP = {
			aid: '9936',
			fid: '0001',
			did: 'd-0001',
			server: 'thinkfvm.actonsoftware.com',
			formId: 'gform_3',
			protocol: aoProtocol
		};
		var aoArr = aoArr || []; aoArr.push(aoCAP);

	</script>