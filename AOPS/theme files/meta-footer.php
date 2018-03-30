<!-- Miscellaneous -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>

<!-- Adds Placeholder Support for IE 9 -->
<script type="text/javascript">
    if(navigator.userAgent.indexOf("MSIE") > 0 )
    { $(function()
    {
    var input = document.createElement("input");
    if(('placeholder' in input)==false)
    {
    $('[placeholder]').focus(function()
    {
    var i = $(this); if(i.val() == i.attr('placeholder'))
    {
    i.val('').removeClass('placeholder');
    if(i.hasClass('password'))
    {
    i.removeClass('password'); this.type='password'; } } }).blur(function()
    {
    var i = $(this);
    if(i.val() == '' || i.val() == i.attr('placeholder'))
    {
    if(this.type=='password')
    {
    i.addClass('password'); this.type='text'; }
    i.addClass('placeholder').val(i.attr('placeholder')); } }).blur().parents('form').submit(function()
    {
    $(this).find('[placeholder]').each(function()
    {
    var i = $(this); if(i.val() == i.attr('placeholder')) i.val(''); }) }); } }); }
</script>

<!-- Foundation -->
<script src="<?php bloginfo('template_directory'); ?>/js/foundation/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/foundation/foundation.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/foundation/foundation.reveal.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/foundation/foundation.topbar.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/foundation/foundation.slider.js"></script>

<script>
    $(document).foundation();
</script>

<!-- Polyfill -->
<script src="<?php bloginfo('template_directory'); ?>/js/rem.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.js"></script>
<script>
    jQuery(document).ready(function(){
        $("a.fancybox").fancybox();
    });
</script>

<!-- Comparison -->
<script src="<?php bloginfo('template_directory'); ?>/js/comparison/comparison.js"></script>

<script>

    // Shrinking Header

    // $(document).ready(function() {
    //   if ($(window).width() > 1023) {
    //     $(window).scroll(function() {

    //       if ($(this).scrollTop() > 600) {
    //         $('.sidebar').addClass('sidebar-sticky');
    //         $('#heading-wrap-side').show();
    //       } else {
    //         $('.sidebar').removeClass('sidebar-sticky');
    //         $('#heading-wrap-side').hide();
    //       };

    //     });
    //   }
    // });

</script>

<script>
  $('.wpsl-grade-level .wpsl-dropdown').change(function () {
    if ($(this).children(".selected")[0].innerHTML == "Special Education") {
      var slider = $('#wpsl-radius-label');
      slider.val(60);
      updateRadius();
    }
  });
</script>

<?php if (get_post_type() === 'job') { ?>
  <script>
  (function($) {
    $(document).ready(function(){
      var urlParams = new URLSearchParams(window.location.search);
      urlParams.forEach(function(e){
        var input = $(`input[value='${e}']`)[0];
        $(input).each(function(){ this.checked = true; });
      });
    });
  })(jQuery);
  </script>
<?php } ?>

<!-- Equal Height Divs -->
<script>
	$(document).ready(function () {
	
	    "use strict";
	    $('.grades').each(function () {
	        var highestBox = 0;
	
	        $(this).find('.grades__heading').each(function () {
	            if ($(this).height() > highestBox) {
	                highestBox = $(this).height();
	            }
	        });
	
	        $(this).find('.grades__heading').height(highestBox);
	        
	    });
	    
	    $('.grades').each(function () {
	        var highestBox = 0;
	    
	        $(this).find('.grades__desc').each(function () {
	            if ($(this).height() > highestBox) {
	                    highestBox = $(this).height();
	            }
	        });
	    
	        $(this).find('.grades__desc').height(highestBox);
	            
	    });
	
	});
</script>



<!-- Reset Button -->
<script>
    $('#resetBtn').click(function(){
        $('#filter').val('');
        var rex = new RegExp($(this).val(), 'i');
        $('.searchableItem').hide();
        $('.reset').hide();
        $('.searchableItem').filter(function () {
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
                $('.searchableItem').hide();
                $('.reset').show();
                $('.searchableItem').filter(function () {
                    return rex.test($(this).text());
                }).show();
            });
        }(jQuery));
    });
</script>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PB5FKG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PB5FKG');</script>
<!-- End Google Tag Manager -->

<?php wp_footer(); ?>
