<!DOCTYPE HTML>
<html lang="en">
	<head>

		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="A showcase of my experiments on the web">
		<meta name="author" content="Shubhendu Saurabh">
		<meta name="google-site-verification" content="Wuyc02wk6WZ0aEZ7fOhYhKDjIUjFxWBr00w4dkueDWM" />
		<meta name="robot" content="<?php echo robot($selected); ?>">
		<meta name="copyright" content="Copyright ©; 2013 Shubhendu All Rights Reserved.">

		<title><?php echo $title ?></title>
		<!-- stylesheets go here -->
		<link rel="stylesheet" href="css/pure-min.css" />
		<link rel="stylesheet" href="css/custom.css" />
		<link rel="shortcut icon" href="favicon.ico">
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	</head>

	<body>
		<div class="content pure-g-r">	
			<div class="header pure-u-1">
				<div class="pure-menu pure-menu-open pure-menu-fixed pure-menu-horizontal">
					<a class="pure-menu-heading" href="http://pumpndump.in"><strong>pumpndump.in</strong></a>

					<ul>
						<?php echo navbar($selected); ?>
					</ul>
				</div>
			</div>