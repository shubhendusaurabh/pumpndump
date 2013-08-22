	<h2>Edit Comment </h2>
	<?php echo validation_errors()?>
	<?php echo form_open("", 'class="form-horizontal"')?>
		
			<div class="control-group">
				<label class="control-label" for="name">Name</label>
				<div class="controls">
					<?php echo form_input('name', set_value('name', $comment->name)); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="semester">Email</label>
				<div class="controls">
					<?php echo form_input('email', set_value('email', $comment->email)); ?>
				</div>
			</div>	
			<div class="control-group">
				<label class="control-label" for="semester">Comment</label>
				<div class="controls">
					<?php echo form_input('comment', set_value('comment', $comment->comment)); ?>
				</div>
			</div>			
			<?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?>
			
	<?php echo form_close(); ?>