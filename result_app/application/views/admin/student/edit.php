	<h2><?php echo isset($id) ? 'Add a new Student' : 'Edit Student ' . $student -> name; ?></h2>
	<?php echo validation_errors()?>
	<?php echo form_open("", 'class="form-horizontal"')?>
		
			<div class="control-group">
				<label class="control-label" for="b_id">Branch </label>
				<div class="controls">
					<?php echo form_input('b_id', set_value('b_id', $student->b_id)); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name">Name</label>
				<div class="controls">
					<?php echo form_input('name', set_value('name', $student->name)); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="fathername">Father's Name</label>
				<div class="controls">
					<?php echo form_input('fathername', set_value('fathername', $student->fathername)); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="rollno">Roll No</label>
				<div class="controls">
					<?php echo form_input('rollno', set_value('rollno', $student->rollno)); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="yearjoin">Year of Joining</label>
				<div class="controls">
					<?php echo form_input('yearjoin', set_value('yearjoin', $student->yearjoin)); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="course">Course</label>
				<div class="controls">
					<?php echo form_input('course', set_value('course', $student->course)); ?>
				</div>
			</div>
			
			<?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?>
			
	<?php echo form_close(); ?>