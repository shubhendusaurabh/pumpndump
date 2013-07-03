<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<title>Admin</title>
		<link href="<?php echo site_url('css/bootstrap.min.css'); ?>" rel="stylesheet" />
	</head>
	<body>
		<?php if ( ! $this->uri->segment(3) == 'login') {
			echo get_menu();
		} ?>
		<div class="container">
			
			<?php $this->load->view($subview); ?>
		</div>
	</body>
</html>
