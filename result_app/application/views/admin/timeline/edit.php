	<h2><?php echo isset($id) ? 'Add a new Course' : 'Edit Course ' . $timeline -> description; ?></h2>
	<?php echo validation_errors()?>
	<?php echo form_open("", 'class="form-horizontal"')?>
		
			<div class="control-group">
				<label class="control-label" for="date">Date</label>
				<div class="controls">
					<?php echo form_input('date', set_value('date', $timeline->date)); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="description">Description</label>
				<div class="controls">
					<?php echo form_textarea('description', set_value('description', $timeline->description)); ?>
				</div>
			</div>			
			<?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?>
			
	<?php echo form_close(); ?>