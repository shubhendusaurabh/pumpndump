<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
	<?php echo link_tag('css/bootstrap.css'); ?>
	<?php echo link_tag('css/sidenav.css'); ?>
	<style type="text/css">
		body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
      .footer {
      	text-align: center
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
	</style>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-39574724-1', 'pumpndump.in');
	  ga('send', 'pageview');

	</script>	
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?php echo base_url(); ?>">pumpndump.in</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Showing For <a href="#" class="navbar-link"><?php echo $this->session->userdata('name'); ?></a>
            </p>
            <ul class="nav">
              <li class="active"><a href="<?php echo base_url('results'); ?>">Home</a></li>
              <li><a href="<?php echo base_url('welcome/about'); ?>">About</a></li>
              <li><a href="<?php echo base_url('welcome/contact'); ?>">Contact</a></li>
              <li><a href="<?php echo base_url('welcome/timeline'); ?>">Timeline</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	<div class="container-fluid">
	      <div class="row-fluid">
	        <div class="span2">
	          <div class="sidebar-nav">
	            <ul class="nav nav-list sidenav">
	            	<div class="btn-toolbar">
		            	<div class="btn-group">
			            	<button class="btn btn-large">View Tables</button>
			            	<button class="btn btn-large dropdown-toggle" data-toggle="dropdown">
			            		<span class="caret"></span>
			            	</button>
			            	<ul class="dropdown-menu">
			            		<li><?php echo anchor('results/table', '<i class="icon-chevron-right"></i>All Semesters'); ?></li>
			            		<?php
			            			for ($i=1; $i <= $noofsems; $i++) { 
										echo "<li>" . anchor("results/table/{$i}", "<i class=\"icon-chevron-right\"></i>Semester {$i}") . "</li>";
									}
			            		?>			            		
			            	</ul>		            	
			            </div>
			            <br />
			            <div class="btn-group">
			            	<button class="btn btn-large">View Charts</button>
			            	<button class="btn btn-large dropdown-toggle" data-toggle="dropdown">
			            		<span class="caret"></span>
			            	</button>
			            	<ul class="dropdown-menu">
			            		<li><?php echo anchor('results/charts', '<i class="icon-chevron-right"></i>All Semesters'); ?></li>
			            		<?php
			            			$array = $this->uri->uri_to_assoc(1);
									if ($array['results'] == 'charts'){
				            			for ($i=1; $i <= $noofsems; $i++) { 
											echo "<li>" . "<a href=\"#\" class=\"semester\" data-semester=\"{$i}\"><i class=\"icon-chevron-right\"></i>Semester {$i}</a>" . "</li>";
										}
									}
			            		?>	
			            	</ul>		            	
			            </div>
			            <div class="tour"></div>            
		           </div> 
	            </ul>
	          </div><!--/.well -->
	        </div><!--/span-->