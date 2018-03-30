<ul>
	<li><a onclick="socialShare(this)" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>" class="social-share facebook social-margin" target="_blank" data-label="Facebook - <?php echo the_title(); ?>" title="Share on Facebook"></a></li>
	<li><a onclick="socialShare(this)" href="http://twitter.com/share?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" class="social-share twitter social-margin" target="_blank" data-label="Twitter - <?php echo the_title(); ?>" title="Share on Twitter"></a></li>
	<li><a onclick="socialShare(this)" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="social-share google social-margin" target="_blank" data-label="Google - <?php echo the_title(); ?>" title="Share on Google+"></a></li>
	<li><a onclick="socialShare(this)" href="mailto:?subject=AOPS%20Blog:%20<?php the_title(); ?>&body=I%20thought%20you%20might%20like%20this%20article%20I%20found:%0d%0a%0d%0a<?php the_permalink(); ?>%0d%0a%0d%0a<?php echo get_the_excerpt(); ?>" class="social-share email social-margin" data-label="Email - <?php echo the_title(); ?>"></a></li>
</ul>
<script>
	function socialShare(el){
		dataLayer.push({ 
			'event': 'socialShare',
			'platform': $(el).attr('data-label')
		});
	}
</script>