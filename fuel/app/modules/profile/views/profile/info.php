<div class="row">
	<div class="span12">
		<div class="page-header">
			<h1>Manage Your Profile Information</h1>
		</div>

		<!-- sysmessage if any. !-->
		<?php echo Message::render(); ?>

		<form name="form-register" id="form-register" method="post" class="form-horizontal" action="">

			<div class="control-group <?php if (!empty($errors['metadata.first_name'])) echo 'error'; ?>">
				<label class="control-label" for="first_name">First Name</label>

				<div class="controls">
					<input type="text" class="input-xlarge" id="first_name" name="metadata[first_name]" value="<?php echo \Input::post('metadata.first_name', $user->get('metadata.first_name')); ?>">
					<p class="help-block"><?php echo empty($errors['metadata.first_name']) ? null : $errors['metadata.first_name']; ?></p>
				</div>
			</div>

			<div class="control-group <?php if (!empty($errors['metadata.last_name'])) echo 'error'; ?>">
				<label class="control-label" for="last_name">Last Name</label>

				<div class="controls">
					<input type="text" class="input-xlarge" id="last_name" name="metadata[last_name]" value="<?php echo \Input::post('metadata.last_name', $user->get('metadata.last_name')); ?>">
					<p class="help-block"><?php echo empty($errors['metadata.last_name']) ? null : $errors['metadata.last_name']; ?></p>
				</div>
			</div>

			<div class="control-group <?php if (!empty($errors['email'])) echo 'error'; ?>">
				<label class="control-label" for="email">Email Address</label>

				<div class="controls">
					<input type="email" class="input-xlarge" id="email" name="email" value="<?php echo \Input::post('email', $user->get('email')); ?>">
					<p class="help-block"><?php echo empty($errors['email']) ? null : $errors['email']; ?></p>
				</div>
			</div>

			<div class="form-actions">
				<button type="submit" class="btn btn-large btn-primary">Save Changes</button>
			</div>
		</form>
	</div>
</div>