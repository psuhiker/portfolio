<!-- Bootstrap -->
<script src="<?php bloginfo('template_directory'); ?>/sass/vendors/bootstrap-sass-master/assets/javascripts/bootstrap.min.js"></script>

<!-- Custom Tracking Tags -->
<?php 
    // Blog Home
    if ( is_home() ) { 
        $id = 2677;
    // All Others
    } else {
        $id = get_the_id($post->ID);
    } 
    the_field('tracking', $id);
?>

<!-- Heatmapping -->
<script type="text/javascript">
    setTimeout(function(){var a=document.createElement("script");
    var b=document.getElementsByTagName("script")[0];
    a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0044/3836.js?"+Math.floor(new Date().getTime()/3600000);
    a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>

<!-- Shrinking Logo -->
<script>
    $(function(){
        $('.logo img').data('size','big');
    });
    $(window).scroll(function(){
        var $logo = $('.logo img');
        if ($(window).scrollTop() > 0) {
            if ($logo.data('size') == 'big') {
                $logo.data('size','small').stop().animate({
                    width:'50%'
                }, 1);
            }
        } else {
            if ($logo.data('size') == 'small') {
                $logo.data('size','big').stop().animate({
                    width:'100%'
                }, 1);
            }
        }
    });
</script>

<!-- Google Code for Remarketing Tag - All Pages 
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 973364493;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<div style="display: none;">
  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
</div>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/973364493/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>-->

<!-- LeadLander Tracking -->
<script type="text/javascript" language="javascript"> 
      var sf14gv = 28177; 
      (function() { 
      var sf14g = document.createElement('script'); sf14g.type = 'text/javascript'; sf14g.async = true; 
      sf14g.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 't.sf14g.com/sf14g.js'; 
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sf14g, s); 
      })(); 
</script>