

	<h2>View Students</h2>
	
	<?php if($this->session->flashdata('error')): ?>
		<div class="alert alert-info"><?php echo $this->session->flashdata('error'); ?></div>
	<?php endif; ?>
	<p><i class="icon-plus-sign"></i><?php echo anchor('admin/student/edit/', " Add a new student") ?></p>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Father's Name</th>
				<th>Roll No</th>
				<th>Year of Joining</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($students)): foreach($students as $student): ?>
			<tr>
				
				<td><?php echo $student->name; ?></td>
				<td><?php echo $student->fathername ?></td>
				<td><?php echo $student->rollno ?></td>
				<td><?php echo $student->yearjoin ?></td>
				<td><?php echo anchor("admin/student/edit/{$student->id}", '<i class="icon-edit"></i>'); ?></td>
				<td><?php echo anchor("admin/student/delete/{$student->id}", '<i class="icon-trash"></i>'); ?></td>
				
			</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td>We Could not find any students</td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>