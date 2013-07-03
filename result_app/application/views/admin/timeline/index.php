

	<h2>View Timelines</h2>
	
	<?php if($this->session->flashdata('error')): ?>
		<div class="alert alert-info"><?php echo $this->session->flashdata('error'); ?></div>
	<?php endif; ?>
	<p><i class="icon-plus-sign"></i><?php echo anchor('admin/timeline/edit/', " Add a new timeline") ?></p>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Date</th>
				<th>Description</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($timelines)): foreach($timelines as $timeline): ?>
			<tr>
				
				<td><?php echo $timeline->date; ?></td>
				<td><?php echo $timeline->description; ?></td>
				<td><?php echo anchor("admin/timeline/edit/{$timeline->id}", '<i class="icon-edit"></i>'); ?></td>
				<td><?php echo anchor("admin/timeline/delete/{$timeline->id}", '<i class="icon-trash"></i>'); ?></td>
				
			</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td>We Could not find any timelines</td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>