				<?php foreach($comments as $comment): ?>
					<div class="media well">
						<div class="media-body">
							<h4 class="media-heading"><strong><?php echo $comment->name ?></strong> said</h4>
							<p class="muted">at <time datetime="<?php echo strftime($comment->created); ?>" pubdate><?php echo strftime($comment->created); ?></time></p>
							<p><?php echo $comment->comment; ?></p>
						</div>
					</div>
				<?php endforeach; ?>
				<h3>Post New Comment</h3>
				<?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>
				<?php echo form_open(); ?>
				<table class="table">
					<tr>
						<td>Name:</td>
						<td><?php echo form_input('name', set_value('name', $new_comment->name)); ?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?php echo form_input('email', set_value('email', $new_comment->email)); ?></td>
					</tr>
					<tr>
						<td>Comment:</td>
						<td><?php echo form_textarea('comment', set_value('body', $new_comment->comment)); ?></td>
					</tr>
					<tr>
						<td><?php echo $cap['image']; ?></td>
						<td><?php echo form_input('captcha'); ?></td>
					</tr>
					<tr>
						<td></td>
						<td><?php echo form_submit('submit', 'Post', 'class="btn btn-primary"'); ?></td>
					</tr>
				</table>
				<?php echo form_close(); ?>