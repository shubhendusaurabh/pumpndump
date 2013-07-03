
	<h2>View Students</h2>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Roll No</th>
				<th>Year of Joining</th>
				<th>Visited</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($students)): foreach($students as $student): ?>
			<tr>
				
				<td><?php echo $student->name; ?></td>
				<td><?php echo $student->rollno ?></td>
				<td><?php echo $student->year ?></td>				
				<td><?php echo $student->times; ?></td>
				
			</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="4">Sorry NO visitors yet! Try inviting friends.</td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>