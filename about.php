<?php
require_once 'functions.php';

$selected = (basename(__FILE__));

$title = 'My Works';
require_once 'partials/header.php';
?>
<div class="splash pure-u-1">

	<article>
		<h2 class="splash-subhead">About Me</h2>
		<p>
		  Hello World!
		</p>
		<p>
			I use this website to showcase my projects.
		</p>
		<p>
			Feel free to <a href="contact.php">contact me</a> for any query.
		</p>
	</article>
	<br />
	<br />
	<br />
</div>

<?php 
include_once 'partials/footer.php'
?>
