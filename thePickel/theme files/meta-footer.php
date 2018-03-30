<!-- Modal Window -->
<script>
   $(document).ready(function() {
		$('.pwdModalClose').click(function(){
			$('.pwdModal').removeClass('in');
		});
	});
</script>

<!-- JQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Skrollr -->
<script src="<?php bloginfo('template_directory'); ?>/js/skrollr.min.js"></script>
<script>
	if( /Android|webOS|iPhone|iPod|iPad|BlackBerry/i.test(navigator.userAgent)) {
	} else {
	 document.write('<script type="text/javascript" src="_<?php bloginfo('template_directory'); ?>/js/_main.js"><\/script>');
	}
</script>
<!--<script src="<?php bloginfo('template_directory'); ?>/js/_main.js"></script>-->

<!-- InvertScroll -->
<script type="text/javascript" src="x<?php bloginfo('template_directory'); ?>/js/jquery.jInvertScroll.js"></script>
<script type="text/javascript">
	(function($) {
	    $.jInvertScroll(['.scroll'],
	        {
	        //height: 6000,
	        onScroll: function(percent) {
				// Do something
	        }
	    });
	}(jQuery));
</script>

<!-- Enables Portfolio Fixed -->
<script>
	var bottom = $('#portfolio').offset().top;
	$(window).scroll(function(){    
	    if ($(this).scrollTop() > bottom){ 
	        $('#portfolio').addClass('fixed'); 
	    }
	    else{
	        $('#portfolio').removeClass('fixed');
	    }
	});
</script>

<!-- Expanding Form Fields -->
<script>
	$('input[type="text"]').keypress(function(e) {
	    if (e.which !== 0 && e.charCode !== 0) {
	        var c = String.fromCharCode(e.keyCode|e.charCode);
	        $span = $(this).siblings('span').first();
	        $span.text($(this).val() + c) ;
	        $inputSize = $span.width() ; 
	        $(this).css("width", $inputSize);
	    }
	}) ;
</script>

<!-- Sync Inputs -->
<script>
    // Syncs Textareas
    var a = document.getElementById("formName");
    a.oninput = function(e) {
        jQuery( '.inputName' ).val( a.value ).trigger( 'change' );
    }
	var company = document.getElementById("formCompany");
	company.oninput = function(e) {
	    jQuery( '.inputCompany' ).val( company.value ).trigger( 'change' );
	}
	var project = document.getElementById("formProject");
	project.oninput = function(e) {
	    jQuery( '.inputProject' ).val( project.value ).trigger( 'change' );
	}
	var email = document.getElementById("formEmail");
	email.oninput = function(e) {
	    jQuery( '.inputEmail' ).val( email.value ).trigger( 'change' );
	}
	var description = document.getElementById("formDescription");
	description.oninput = function(e) {
	    jQuery( '.inputDescription' ).val( description.value ).trigger( 'change' );
	}
</script>

<?php wp_footer(); ?>