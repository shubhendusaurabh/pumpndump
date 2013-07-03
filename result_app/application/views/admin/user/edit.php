	<h2><?php echo isset($user->id) ? 'Edit User ' . $user->name : 'Add a new User '; ?></h2>
	<?php echo form_open("", 'class="form-horizontal"')?>
		
			<div class="control-group">
				<?php echo form_error('name'); ?>
				<label class="control-label" for="name">Name</label>
				<div class="controls">
					<?php echo form_input('name', set_value('name', $user->name)); ?>
				</div>
			</div>
			<div class="control-group">
				<?php echo form_error('email'); ?>
				<label class="control-label" for="email">Email</label>
				<div class="controls">
					<?php echo form_input('email', set_value('email', $user->email)); ?>
				</div>
			</div>
			<div class="control-group">
				<?php echo form_error('password'); ?>
				<label class="control-label" for="password">Password</label>
				<div class="controls">
					<?php echo form_password('password'); ?>
				</div>
			</div>
			<div class="control-group">
				<?php echo form_error('password_confirm'); ?>
				<label class="control-label" for="password_confirm">Confirm Password</label>
				<div class="controls">
					<?php echo form_password('password_confirm'); ?>
				</div>
			</div>
			<?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?>
			
	<?php echo form_close(); ?>