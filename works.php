<?php 
require_once 'functions.php';

	$selected = (basename(__FILE__));

	$title = 'My Works'; 
require_once 'partials/header.php';

	
 ?>
			<div class="splash pure-u-1">
				<div class="pure-g-r">
					<section class="pure-u-1">
						<h2 class="splash-subhead">
							HBTI Result Visualization
						</h2>
						<article class="content">
							<p>A very basic visualisation of my results I built to practise CodeIgniter and data visualization with flot.js.</p>
							<a class="pure-button pure-button-primary" href="./result_app/">Check Out</a>
						</article>
					</section>
				</div>
				<div class="pure-g-r">
					<section class="pure-u-1">
						<h2 class="splash-subhead">
							Up or Down
						</h2>
						<article class="content">
							<p>A simple utility to check whether a website is up or down implemented via curl.</p>
							<a class="pure-button pure-button-primary" href="http://pumpndump.in/upordown.php">Check Out</a>
						</article>
					</section>
				</div>
				<div class="pure-g-r">
					<section class="pure-u-1">
						<h2 class="splash-subhead">
							Data Visualisation
						</h2>
						<article class="content">
							<p>Some simple data visualizations of data from http://data.gov.in</p>
							<a class="pure-button pure-button-primary" href="http://pumpndump.in/data">Check Out</a>
						</article>
					</section>
				</div>
				<div class="pure-g-r">
					<section class="pure-u-1">
						<h2 class="splash-subhead">
							Folder Movie Data
						</h2>
						<article class="content">
							<p>A simple web app to show ratings of movies in a folder using <a href="http://www.omdbapi.com/">OMDB API</a></p>
							<a class="pure-button pure-button-primary" href="http://pumpndump.in/fmd/">Check Out</a>
						</article>
					</section>
				</div>
			</div>
<?php include_once 'partials/footer.php' ?>