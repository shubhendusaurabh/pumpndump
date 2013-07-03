

	<h2>View Users</h2>
	
	<?php if($this->session->flashdata('error')): ?>
		<div class="alert alert-info"><?php echo $this->session->flashdata('error'); ?></div>
	<?php endif; ?>
	<p><i class="icon-plus-sign"></i><?php echo anchor('admin/user/edit/', " Add a new User") ?></p>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($users)): foreach($users as $user): ?>
			<tr>
				<td><?php echo $user->name; ?></td>
				<td><?php echo $user->email; ?></td>
				<td><?php echo anchor("admin/user/edit/{$user->id}", '<i class="icon-edit"></i>'); ?></td>
				<td><?php echo anchor("admin/user/delete/{$user->id}", '<i class="icon-trash"></i>'); ?></td>
				
			</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="4">We Could not find any users</td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>