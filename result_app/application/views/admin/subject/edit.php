	<h2><?php echo isset($id) ? 'Add a new Course' : 'Edit Course ' . $subject -> semester; ?></h2>
	<?php echo validation_errors()?>
	<?php echo form_open("", 'class="form-horizontal"')?>
		
			<div class="control-group">
				<label class="control-label" for="b_id">Branch ID</label>
				<div class="controls">
					<?php echo form_input('b_id', set_value('b_id', $subject->b_id)); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="semester">Semester</label>
				<div class="controls">
					<?php echo form_input('semester', set_value('semester', $subject->semester)); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="subject1">Subject 1</label>
				<div class="controls">
					<?php echo form_input('subject1', set_value('subject1', $subject->subject1)); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="subject2">Subject 2</label>
				<div class="controls">
					<?php echo form_input('subject2', set_value('subject2', $subject->subject2)); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="subject3">Subject 3</label>
				<div class="controls">
					<?php echo form_input('subject3', set_value('subject3', $subject->subject3)); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="subject4">Subject 4</label>
				<div class="controls">
					<?php echo form_input('subject4', set_value('subject4', $subject->subject4)); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="subject5">Subject 5</label>
				<div class="controls">
					<?php echo form_input('subject5', set_value('subject5', $subject->subject5)); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="lab1">Lab 1</label>
				<div class="controls">
					<?php echo form_input('lab1', set_value('lab1', $subject->lab1)); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="lab2">Lab 2</label>
				<div class="controls">
					<?php echo form_input('lab2', set_value('lab2', $subject->lab2)); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="lab3">Lab 3</label>
				<div class="controls">
					<?php echo form_input('lab3', set_value('lab3', $subject->lab3)); ?>
				</div>
			</div>
			<?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?>
			
	<?php echo form_close(); ?>