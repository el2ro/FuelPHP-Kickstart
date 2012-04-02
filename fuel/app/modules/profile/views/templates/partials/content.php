<div class="container">
	<div class="row">
		<div class="span12">
			<ul class="nav nav-tabs">
				<li <?php echo (\Kickstart::$current_controller === 'home') ? 'class="active"' : null; ?>><a href="<?php echo \Uri::create('profile/home'); ?>">Account Home</a></li>
				<li <?php echo (\Kickstart::$current_controller === 'password') ? 'class="active"' : null; ?>><a href="<?php echo \Uri::create('profile/password'); ?>">Change Password</a></li>
				<li <?php echo (\Kickstart::$current_controller === 'info') ? 'class="active"' : null; ?>><a href="<?php echo \Uri::create('profile/info'); ?>">Update Profile Info</a></li>
			</ul>
		</div>
	</div>

	<?php echo $content; ?>
</div>