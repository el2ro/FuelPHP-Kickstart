<div class="row">
	<div class="span12">
		<div class="page-header">
			<h1>Change Your Password</h1>
		</div>

		<!-- sysmessage if any. !-->
		<?php echo \Message::render(); ?>

		<form name="form-register" id="form-register" method="post" class="form-horizontal" action="">

			<div class="control-group <?php if (!empty($errors['old_password'])) echo 'error'; ?>">
				<label class="control-label" for="old_password">Current Password</label>

				<div class="controls">
					<input type="password" class="input-xlarge" id="old_password" name="old_password">
					<p class="help-block"><?php echo empty($errors['old_password']) ? 'What is your current password?' : $errors['old_password']; ?></p>
				</div>
			</div>

			<div class="control-group <?php if (!empty($errors['new_password'])) echo 'error'; ?>">
				<label class="control-label" for="new_password">New Password</label>

				<div class="controls">
					<input type="password" class="input-xlarge" id="new_password" name="new_password">
					<p class="help-block"><?php echo empty($errors['new_password']) ? 'Min 8 characters, no spaces, must contain upper and lowercase.' : $errors['new_password']; ?></p>
				</div>
			</div>

			<div class="control-group <?php if (!empty($errors['retype_password'])) echo 'error'; ?>">
				<label class="control-label" for="retype_password">Retype New Password</label>

				<div class="controls">
					<input type="password" class="input-xlarge" id="retype_password" name="retype_password">
					<p class="help-block"><?php echo empty($errors['retype_password']) ? 'Retype the password you entered above.' : $errors['retype_password']; ?></p>
				</div>
			</div>

			<div class="form-actions">
				<button type="submit" class="btn btn-large btn-primary">Save Changes</button>
			</div>
		</form>
	</div>
</div>