<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
<div class="donation-levels">

    <div class="col-xs-12">
        <h3>Donation Level</h3>
    </div>
    
    <div class="col-xs-12">

        <div class="btn-group" role="group">
            <a role="button" class="btn btn-success<?php if (false !== strpos($url,'?level=50.00' )) { ?> active<?php } ?>" href="<?php the_permalink(); ?>/?level=50.00">Bronze <span class="badge">$50</span></a>
            <a role="button" class="btn btn-success<?php if (false !== strpos($url,'?level=250.00' )) { ?> active<?php } ?>" href="<?php the_permalink(); ?>/?level=250.00">Silver <span class="badge">$250</span></a>
            <a role="button" class="btn btn-success<?php if (false !== strpos($url,'?level=500.00' )) { ?> active<?php } ?>" href="<?php the_permalink(); ?>/?level=500.00">Gold <span class="badge">$500</span></a>
            <a role="button" class="btn btn-success<?php if (false !== strpos($url,'?level=50.00' )) { ?><?php } elseif (false !== strpos($url,'?level=250.00' )) { ?><?php } elseif (false !== strpos($url,'?level=500.00' )) { ?><?php } else { ?> active<?php } ?>" href="<?php the_permalink(); ?>">Other Amount</a>
        </div>
    
    </div>
    
    <?php if (false !== strpos($url,'?level=50.00' )) { ?>
        
        <style><!--
        
            .donation-amount {
                display: none;
            }
        
        --></style>
    
    <?php } elseif (false !== strpos($url,'?level=250.00' )) { ?>
        
        <style><!--
        
            .donation-amount {
                display: none;
            }
        
        --></style>
    
    <?php } elseif (false !== strpos($url,'?level=500.00' )) { ?>
        
        <style><!--
        
            .donation-amount {
                display: none;
            }
        
        --></style>
    
    <?php } else { ?>
    
        <style><!--
        
            .donation-amount {
                margin-top: 20px;
            }
        
        --></style>
        
    <?php } ?>
    
</div>