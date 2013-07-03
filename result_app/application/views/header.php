<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <?php echo link_tag('css/bootstrap.min.css'); ?>
    <?php echo link_tag('css/bootstrap-responsive.min.css'); ?>
   
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      footer {
      	text-align: center
      }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-39574724-1', 'pumpndump.in');
	  ga('send', 'pageview');

	</script>
	<!-- Piwik -->
	<script type="text/javascript">
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
    <script src="<?php echo base_url('js/jquery.js') ?>"></script>
  </head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="http://www.pumpndump.in">pumpndump.in</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo base_url('welcome'); ?>">Home</a></li>
              <li><a href="<?php echo base_url('welcome/about') ?>">About</a></li>
              <li><a href="<?php echo base_url('welcome/contact'); ?>">Contact</a></li>
              <li><a href="<?php echo base_url('welcome/timeline'); ?>">Timeline</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>