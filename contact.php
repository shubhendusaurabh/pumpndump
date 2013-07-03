<?php
require_once 'functions.php';

$selected = (basename(__FILE__));

$title = 'Contact Me';
require_once 'partials/header.php';
?>
<div class="splash pure-u-1">

	<article>
		<h2 class="splash-head">Contact Me</h2>
		<h3 class="splash-subhead">Have a question? Need some help? </h3>
		<h3 class="splash-subhead">Feel free to contact me, you can do so via the methods listed below or <a href="feedback.php">Write Here</a></h3>
		
		<p>
			I can be reached via following methods &rArr;
		</p>
			<p>
			<span>email: </span><a href="mailto:admin@pumpndump.in">admin@pumpndump.in</a>
			</p>
			<p>
			<span>twitter: </span><a href="https://twitter.com/pumpndump">@pumpndump</a>
			</p>
			<p>
            <span>github: </span><a href="http://github.com/pumpndump">github.com/pumpndump</a>
           	</p>
		
		
	</article>
	<br />
	<br />
	<br />

</div>

<?php 
include_once 'partials/footer.php'
?>