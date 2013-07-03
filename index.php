<?php
require_once 'functions.php';

	$selected = (basename(__FILE__));

	$title = 'Welcome to pumpndump.in'; 
	require_once 'partials/header.php';
?>
		
			<div class="splash pure-u-1">
				<div class="pure-g-r">
					<div class="pure-u-1-2">
						<div class="l-box splash-image">
							<img src="http://lorempixel.com/640/480/nature" alt="Random Image" width="640px" alt="480px">
						</div>
					</div>

					<div class="pure-u-1-2">
						<div class="l-box splash-text">
							<h1 class="splash-head"> Hello, World! </h1>

							<h2 class="splash-subhead"> This is my home on the web. </h2>

							<h3 class="splash-subhead">
							<p>
								This site is a work in progress.
							</p>
							<p>
								Here I showcase my work. Feel free to say Hi!.
							</p></h3>

							<p>
								<a href="http://pumpndump.in/works.php" class="pure-button primary-button">See My Works</a>
							</p>
						</div>
					</div>
				</div>
			</div>
<?php
require_once 'partials/footer.php';
?>