

	<h2>View comments</h2>
	
	<?php if($this->session->flashdata('error')): ?>
		<div class="alert alert-info"><?php echo $this->session->flashdata('error'); ?></div>
	<?php endif; ?>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Batch</th>
				<th>Created At</th>
				<th>Comment</th>
				<th>Name</th>
				<th>Email</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($comments)): foreach($comments as $comment): ?>
			<tr>
				
				<td><?php echo $comment->batch; ?></td>
				<td><?php echo $comment->created ?></td>
				<td><?php echo $comment->comment ?></td>
				<td><?php echo $comment->name ?></td>
				<td><?php echo $comment->email ?></td>
				<td><?php echo anchor("admin/comment/edit/{$comment->id}", '<i class="icon-edit"></i>'); ?></td>
				<td><?php echo anchor("admin/comment/delete/{$comment->id}", '<i class="icon-trash"></i>'); ?></td>
				
			</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td>We Could not find any comments</td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>