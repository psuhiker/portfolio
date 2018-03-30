<div class="header divider"></div>

<section class="marquee slim bg--primary dark">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 lg-padding--vertical">
                
                <?php if ( is_user_logged_in() ) { ?>
                	<h2 class="subheading"><span class="text-nowrap">Member Portal »</span> <span class="text-nowrap"><?php the_title(); ?></span></h2>
                <?php } else { ?>
                	<h2 class="subheading"><?php the_title(); ?></h2>
                <?php } ?>
                
                <?php if ( is_user_logged_in() ) { ?>
                
	                <?php if ( is_page('34') ) { ?>
	                
		                <div class="col-sm-6 no-padding--horizontal default-margin--top">
			                <form id="filterForm" onsubmit="return false;">
			                	<input id="filter" type="text" name="keyword" class="input-text" placeholder="Search Bylaws...">
			                	<div class="reset" style="display: none;">
			                	    <a id="resetBtn"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
			                	</div>
			                </form>
		                </div>
	                
	                <?php } elseif ( is_page('250') ) { ?>
	                
	                    <div class="col-sm-6 no-padding--horizontal default-margin--top">
	                        <form id="filterForm" onsubmit="return false;">
	                        	<input id="filter" type="text" class="input-text" placeholder="Search Members...">
	                        	<div class="reset" style="display: none;">
	                        	    <a id="resetBtn"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
	                        	</div>
	                        </form>
	                    </div>
	                
	                <?php } ?>
	                
	            <?php } ?>
                
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>

<div class="header divider"></div>