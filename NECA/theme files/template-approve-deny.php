<body class="secondary processing">
    <div class="inner">
    
    	<?php include (TEMPLATEPATH . '/includes/script-query.php' ); ?>
    
        <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
        
        <?php 
            $display_firstName = $_GET['firstName'];
            $display_lastName = $_GET['lastName'];
            $display_company = $_GET['company'];
            $display_email = $_GET['email'];
            $display_phone = $_GET['phone'];
            $display_address_one = $_GET['address_one'];
            $display_address_two = $_GET['address_two'];
            $display_city = $_GET['city'];
            $display_state = $_GET['state'];
            $display_zip = $_GET['zip'];
            $display_applicantID = $_GET['applicantID'];
        ?>
        
        <?php if (false !== strpos($url,'?status=approved' )) { ?>
        
        	<div class="col-md-8 col-lg-7 col-lg-offset-1 lg-margin--top">
        	
	            <div class="frame--email xl-margin--bottom">
	            
	                <div class="col-sm-6">
	                    <div class="input">
	                        <span class="label">To:</span>
	                        <?php echo $display_email; ?>
	                    </div>
	                </div>
	                
	                <div class="col-sm-6">
	                    <div class="input">
	                        <span class="label">From:</span>
	                        membership@necainc.com
	                    </div>
	                </div>
	                
	                <div class="col-sm-12">
	                    <div class="input">
	                        <span class="label">Subject:</span>
	                        Your Membership to the Northeastern Chemical Association Has Been Approved
	                    </div>
	                </div>
	                
	                <div class="col-sm-12">
	                    <div class="input">
	                        Dear <?php echo $display_firstName; ?> <?php echo $display_lastName; ?>,
	                    </div>
	                </div>
	                
	                <div class="col-sm-12 sm-margin--top">
	                
	                    <p class="fine-print">You can edit the message below:</p>
	                    
	                    <textarea id="messageApproved" class="input-textarea">We are pleased to inform you that your membership application to the Northeastern Chemical Association has been approved.</textarea>
	                    
	                </div>
	                
	                <div class="col-sm-12">
	                    <div class="input">
	                        <p>In order to complete your application, you will need to create an account:</p>
	                        <p class="no-margin--bottom link">
	                            <a href="<?php echo site_url(); ?>/membership/account/create/?trackingid=<?php echo $str; ?>&firstName=<?php echo $display_firstName; ?>&lastName=<?php echo $display_lastName; ?>&email=<?php echo $display_email; ?>&company=<?php echo $display_company; ?>&phone=<?php echo $display_phone; ?>&address_one=<?php echo $display_address_one; ?>&address_two=<?php echo $display_address_two; ?>&city=<?php echo $display_city; ?>&state=<?php echo $display_state; ?>&zip=<?php echo $display_zip; ?>&applicantID=<?php echo $display_applicantID; ?>">
	                                <?php echo site_url(); ?>/membership/account/create/?trackingid=<?php echo $str; ?>&firstName=<?php echo $display_firstName; ?>&lastName=<?php echo $display_lastName; ?>&email=<?php echo $display_email; ?>&company=<?php echo $display_company; ?>&phone=<?php echo $display_phone; ?>&address_one=<?php echo $display_address_one; ?>&address_two=<?php echo $display_address_two; ?>&city=<?php echo $display_city; ?>&state=<?php echo $display_state; ?>&zip=<?php echo $display_zip; ?>&applicantID=<?php echo $display_applicantID; ?>
	                            </a>
	                        </p>
	                    </div>
	                </div>
	                
	                <div class="col-sm-12">
	                    <div class="input">
	                        Sincerely,<br>
	                        Ron Cormier, Membership Committee
	                    </div>
	                </div>
	                
	                <div class="clearfix"></div>
	            
	            </div>
	            
            </div>
            
            <div class="col-md-4 col-lg-3 xl-margin--top">
            
	            <h4 class="default-margin--bottom">Member Approval</h4>
	            <p class="no-margin--bottom"><?php echo $display_firstName; ?> <?php echo $display_lastName; ?>, <?php echo $display_company; ?></p>
	            <p class="xl-margin--top"><a href="#" onclick="getElementById('nf-field-185').click(); myAjax();" class="btn btn-default no-margin--right" id="submitButton">Send Email</a></p>
	            <p class="lg-margin--top"><a href="<?php echo site_url(); ?>/member-portal/administration/#pending" class="no-underline--reverse"><i class="fa fa-angle-left" aria-hidden="true"></i> <span class="text-nowrap">Cancel & Return</span> <span class="text-nowrap">to Admin Portal</span></a></p>
	            
	            <div class="hidden">
	                <?php ninja_forms_display_form(19); ?>
	            </div>
	            
	            <script>
	                // Syncs Textareas
	                var a = document.getElementById("messageApproved");
	                a.oninput = function(e) {
	                    jQuery( '#nf-field-192' ).val( a.value ).trigger( 'change' );
	                }
	            </script>
	            
	        </div>
            
        <?php } elseif (false !== strpos($url,'?status=denied' )) { ?>
        
        	<div class="col-md-8 col-lg-7 col-lg-offset-1 lg-margin--top">
            
	            <div class="frame--email">
	            
	                <div class="col-sm-6">
	                    <div class="input">
	                        <span class="label">To:</span>
	                        <?php echo $display_email; ?>
	                    </div>
	                </div>
	                
	                <div class="col-sm-6">
	                    <div class="input">
	                        <span class="label">From:</span>
	                        membership@necainc.com
	                    </div>
	                </div>
	                
	                <div class="col-sm-12">
	                    <div class="input">
	                        <span class="label">Subject:</span>
	                        Your Membership to the Northeastern Chemical Association Has Been Denied
	                    </div>
	                </div>
	                
	                <div class="col-sm-12">
	                    <div class="input">
	                        Dear <?php echo $display_firstName; ?> <?php echo $display_lastName; ?>,
	                    </div>
	                </div>
	                
	                <div class="col-sm-12 sm-margin--top">
	                
	                    <p class="fine-print">You can edit the message below:</p>
	                    
	                    <textarea id="messageDenied" class="input-textarea" onchange="changeTest(this.form)">We regret to inform you that your application to the Northeastern Chemical Association has been denied. We feel that your professional credentials do not match the criteria we are looking for.&#10;&#10;We will be refunding the membership dues that you submitted when you applied.&#10;&#10;If you have any questions regarding this decision, please contact membership@necainc.com.</textarea>
	                    
	                </div>
	                
	                <div class="col-sm-12">
	                    <div class="input">
	                        Sincerely,<br>
	                        Ron Cormier, Membership Committee
	                    </div>
	                </div>
	                
	                <div class="clearfix"></div>
	            
	            </div>
	            
	        </div>
	        
	        <div class="col-md-4 col-lg-3 xl-margin--top">
	        
	            <h4 class="default-margin--bottom">Application Rejection</h4>
	            <p class="no-margin--bottom"><?php echo $display_firstName; ?> <?php echo $display_lastName; ?>, <?php echo $display_company; ?></p>
	            <p class="xl-margin--top"><a href="#" onclick="getElementById('nf-field-193').click();" class="btn btn-danger no-margin--right">Send Email</a></p>
	            <p class="lg-margin--top"><a href="<?php echo site_url(); ?>/member-portal/administration/#pending" class="no-underline--reverse"><i class="fa fa-angle-left" aria-hidden="true"></i> <span class="text-nowrap">Cancel & Return</span> <span class="text-nowrap">to Admin Portal</span></a></p>
	            
	            <div class="hidden">
	                <?php ninja_forms_display_form(20); ?>
	            </div>
	            
	            <script>
	                // Syncs Textareas
	                var b = document.getElementById("messageDenied");
	                b.oninput = function(e) {
	                    jQuery( '#nf-field-200' ).val( b.value ).trigger( 'change' );
	                }
	            </script>
	            
	        </div>
        
        <?php } else { ?>
        
            <meta http-equiv="refresh" content="0;URL='<?php echo site_url(); ?>/member-portal/administration/#pending'" />
        
        <?php } ?>
        
        <?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
        
        <?php wp_footer(); ?>

    </div>
</body>