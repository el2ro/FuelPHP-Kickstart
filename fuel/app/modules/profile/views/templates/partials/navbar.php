<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="#"><?php echo Lang::get('kickstart.site.name'); ?></a>

			<p class="navbar-text pull-right">Welcome back <?php echo Kickstart::user()->get('metadata.first_name'); ?>, <a href="<?php echo \Uri::create('auth/logout'); ?>">Logout</a></p>
		</div>
	</div>
</div>