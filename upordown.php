<?php
function upordown($url) {
	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_NOBODY, TRUE);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

	curl_exec($ch);
	$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

	return ($status_code == 200 ? TRUE : FALSE);
}

if (isset($_POST['url']) && !empty($_POST['url'])) {
	$url = trim($_POST['url']);
	//$url = filter_var($url, FILTER_VALIDATE_URL);
	$data = array();
	//var_dump(filter_var($url, FILTER_VALIDATE_URL,FILTER_FLAG_HOST_REQUIRED ));
	if (filter_var($url, FILTER_VALIDATE_URL) == TRUE) {
		$flag = upordown($url);
		if ($flag) {
			$msg = '<div class="alert alert-success">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Success!</strong> The site <a href="' . $url . '">  ' . $url  .'  </a> looks up from here.
					  </div><hr />';
		} else {
			$msg = '<div class="alert alert-error">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Sorry!</strong> The <a href="' . $url . '">  ' . $url  .'  </a> looks down from here too.
						</div><hr />';
		}
	} else {
		$msg = '<div class="alert">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>Warning!</strong> Please check the url and try again.
					</div><hr />';
	}

}
?>

<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="description" content="check if website is down or up">
        <meta name="viewport" content="width=device-width">
		<meta name="robot" content="index,follow">
		<title>Check if website is up or down</title>

		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<style>
			body {
				padding: 5em;
				float: none;
			}

			div.container {
				text-align: center;
			}

		</style>

	</head>

	<body>

		<div class="container">

			<?php
	if (isset($msg)) {
		echo $msg;
	}
			?>

			<form action="" method="post" class="form-inline">

				<label> Is </label>
				<input type="url" name="url" placeholder="http://example.com" class="input-xlarge" />
				<label> Up or Down ?</label>

				<button type="submit" class="btn btn-primary">
					Check
				</button>

			</form>
		</div>

		<script src="js/jquery.min.js" async="async"></script>
		<script src="js/bootstrap.min.js" async="async"></script>
		<!-- Google Analytics: -->
       <script async="async">
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-39574724-1', 'pumpndump.in');
		  ga('send', 'pageview');

		</script>
		<!-- Piwik -->
		<script type="text/javascript" async="async">
		  var _paq = _paq || [];
		  _paq.push(["trackPageView"]);
		  _paq.push(["enableLinkTracking"]);
		
		  (function() {
		    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://pumpndump.in/piwik/";
		    _paq.push(["setTrackerUrl", u+"piwik.php"]);
		    _paq.push(["setSiteId", "1"]);
		    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
		    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
		  })();
		</script>
		<!-- End Piwik Code -->
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<iframe data-aa='13355' src='//ad.a-ads.com/13355?size=120x60' scrolling='no' style='width:120px; height:60px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
				</div>
				<div class="col-md-4">
					<a href='https://coinbase.com/?r=52a1dc1bb626439fe30000c2&utm_campaign=user-referral&src=badge' alt='Create A Bitcoin Wallet On Coinbase'><img src='https://coinbase.com/assets/badges/badge1.png' width='128' height='128' /></a>					
				</div>
				<div class="col-md-4">
					<a href='http://a-ads.com?partner=13355'>Advertise with Anonymous Ads</a>
				</div>
			</div>
		</div>
	</body>

</html>