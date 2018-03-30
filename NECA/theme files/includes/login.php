<div class="col-sm-10 col-sm-offset-1" id="login">

	<form action="<?php echo site_url(); ?>/wp-login.php" method="post" autocomplete="off">
	
		<p class="lg-margin--bottom"><?php the_field('login_message'); ?></p>
		
		<div class="row default-margin--top">
		
		<div class="col-xs-12 float-label">
		    <label for="firstName">Username</label>
			<input class="input-text" type="text" name="log" id="log" tabindex="1" value="" size="20" />
		</div>
		
		<div class="col-xs-12 float-label">
		    <label for="password">Password</label>
			<input class="input-text" type="password" name="pwd" tabindex="110" id="pwd" value="" size="20"  />
		</div>
		
		</div>
		
		<div class="row">
		
		    <div class="col-sm-6">
		        <label id="rememberme">
		            <input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> Remember me
		        </label>
		    </div>
		    
		    <div class="col-sm-6 text-right font-size--xs">
		        <a href="/wp-login.php?action=lostpassword">Lost your password?</a>
		    </div>
		
		</div>
		
		<div class="default-margin--vertical">
		    <input class="btn btn-default" id="submit" type="submit" name="submit" tabindex="120" value="Log In" />
		</div>
		
		<?php $actual_link = $_SERVER['REQUEST_URI']; $URI=' . echo site_url() . '.$Path; ?>
		
		<input type="hidden" name="redirect_to" value="<?php echo $actual_link; ?>" />
	
	</form>

</div>