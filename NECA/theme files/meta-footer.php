<!-- Replaces %20 with space
<script>
    var replaced = $("body").html().replace(/%20/g,' ');
    $("body").html(replaced);
</script> -->


<!-- Bootstrap -->
<script src="<?php bloginfo('template_directory'); ?>/sass/vendors/bootstrap-sass-master/assets/javascripts/bootstrap.min.js"></script>


<!-- Tooltip -->
<script>
	$(function () {
	    $('[data-toggle="popover"]').popover();
	    //$('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
	});
</script>


<!-- Register Click -->
<script>
	$(".register").on("click", function() {
	    $("#linkSpeakers").removeClass("active");
	    $("#linkAccomodations").removeClass("active");
	    $("#linkRegistration").addClass("active");
	});
</script>

<!-- Bootstrap Add Ons -->
<script src="<?php bloginfo('template_directory'); ?>/js/input-numberTicker.js"></script>

<!-- Equal Height -->
<script src="<?php bloginfo('template_directory'); ?>/js/equal-height.js"></script>

<!-- Reset Button -->
<script>
    $('#resetBtn').click(function(){
        $('#filter').val('');
        var rex = new RegExp($(this).val(), 'i');
        $('.searchable .item').hide();
        $('.reset').hide();
        $('.searchable .item').filter(function () {
            return rex.test($(this).text());
        }).show();
    });
    $('#resetBtnActive').click(function(){
        $('#filterActive').val('');
        var rex = new RegExp($(this).val(), 'i');
        $('.searchableActivePending .item').hide();
        $('.reset').hide();
        $('.searchableActivePending .item').filter(function () {
            return rex.test($(this).text());
        }).show();
    });
    $('#resetBtnActive').click(function(){
        $('#filterActive').val('');
        var rex = new RegExp($(this).val(), 'i');
        $('.searchableActive .item.isActive').hide();
        $('.reset').hide();
        $('.searchableActive .item.isActive').filter(function () {
            return rex.test($(this).text());
        }).show();
    });
    $('#resetBtnPending').click(function(){
        $('#filterPending').val('');
        var rex = new RegExp($(this).val(), 'i');
        $('.searchablePending .item').hide();
        $('.reset').hide();
        $('.searchablePending .item').filter(function () {
            return rex.test($(this).text());
        }).show();
    });
    $('#resetBtnLapsed').click(function(){
        $('#filterLapsed').val('');
        var rex = new RegExp($(this).val(), 'i');
        $('.searchableLapsed .item.hasLapsed').hide();
        $('.reset').hide();
        $('.searchableLapsed .item.hasLapsed').filter(function () {
            return rex.test($(this).text());
        }).show();
    });
</script>

<!-- Table Filtering -->
<script>
    $(document).ready(function () {
        (function ($) {
            $('#filter').keyup(function () {
                var rex = new RegExp($(this).val(), 'i');
                $('.searchable .item').hide();
                $('.reset').show();
                $('.searchable .item').filter(function () {
                    return rex.test($(this).text());
                }).show();
            });
            $('#filterActive').keyup(function () {
                var rex = new RegExp($(this).val(), 'i');
                $('.searchableActive .item.isActive').hide();
                $('.resetActive').show();
                $('.searchableActive .item.isActive').filter(function () {
                    return rex.test($(this).text());
                }).show();
            });
            $('#filterActive').keyup(function () {
                var rex = new RegExp($(this).val(), 'i');
                $('.searchableActivePending .item').hide();
                $('.resetActive').show();
                $('.searchableActivePending .item').filter(function () {
                    return rex.test($(this).text());
                }).show();
            });
            $('#filterPending').keyup(function () {
                var rex = new RegExp($(this).val(), 'i');
                $('.searchablePending .item').hide();
                $('.resetPending').show();
                $('.searchablePending .item').filter(function () {
                    return rex.test($(this).text());
                }).show();
            });
            $('#filterLapsed').keyup(function () {
                var rex = new RegExp($(this).val(), 'i');
                $('.searchableLapsed .item.hasLapsed').hide();
                $('.resetLapsed').show();
                $('.searchableLapsed .item.hasLapsed').filter(function () {
                    return rex.test($(this).text());
                }).show();
            });
        }(jQuery));
    });
</script>


<!-- Floating Labels -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
<script>
    $(document).ready(function( $ ) {
    	$(function () {
    	  var showClass = 'hasValue';
    	  // On focus show the label.
    	  $('input').focus( function () {
    	  	// Select label preceding the input.
    	    var label = $(this).prev('label');
          	label.addClass(showClass);
    	  });
    	  // On focusout, check if the input it empty. If it is, hide the label.
    	  $('input').on('checkval', function () {
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



<!-- Scrolls Registration Click as Well -->
<script>
	$(".register").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#registration").offset().top
	    }, 2000);
	});
</script>


<!-- Forces Clearfix -->
<style><!--
    .clearfix {
    	clear: both !important;
    }
--></style>