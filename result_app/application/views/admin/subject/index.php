

	<h2>View Subjects</h2>
	
	<?php if($this->session->flashdata('error')): ?>
		<div class="alert alert-info"><?php echo $this->session->flashdata('error'); ?></div>
	<?php endif; ?>
	<p><i class="icon-plus-sign"></i><?php echo anchor('admin/subject/edit/', " Add a new Subject") ?></p>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Semester</th>
				<th>Subjects</th>
				<th>Labs</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($subjects)): foreach($subjects as $subject): ?>
			<tr>
				
				<td><?php echo $subject->semester; ?></td>
				<td>
					<ul class="unstyled">
						<?php for ($i=1; $i < 6; $i++) { 
							$sub = "subject{$i}";
							
							echo "<li>".$subject->$sub."</li>" ;
							
						} ?>
					</ul>
				</td>
				<td>
					<ul class="unstyled">
					<?php for ($i=1; $i < 4; $i++) { 
						$sub = "lab{$i}";
						echo "<li>" . $subject->$sub ."</li>";
					} ?>
					</ul>
				</td>
				<td><?php echo anchor("admin/subject/edit/{$subject->id}", '<i class="icon-edit"></i>'); ?></td>
				<td><?php echo anchor("admin/subject/delete/{$subject->id}", '<i class="icon-trash"></i>'); ?></td>
				
			</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td>We Could not find any subjects</td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>