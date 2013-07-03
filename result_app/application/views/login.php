<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
	<?php echo link_tag('css/bootstrap.css'); ?>
	<style type="text/css">
		body {
	        padding-top: 40px;
	        padding-bottom: 40px;
	        background-color: #f5f5f5;
      }

        .form-signin {
	        max-width: 300px;
	        padding: 19px 29px 29px;
	        margin: 0 auto 20px;
	        background-color: #fff;
	        border: 1px solid #e5e5e5;
	        -webkit-border-radius: 5px;
	           -moz-border-radius: 5px;
	                border-radius: 5px;
	        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading{
        margin-bottom: 10px;
      }
      .form-sigin input[type="number"]{
      	font-size: 16px;
      	height: auto;
      	margin-bottom: 15px;
      	padding: 7px 9px;
      }
      footer {
      	text-align: center
      }
	</style>
</head>
<body>

<div class="container">
	

	<div class="body">
			<?php echo validation_errors(); ?>
		<?php 
			$attributes = array('class' => 'form-horizontal form-signin');
			echo form_open('results', $attributes); 
		
		?>
		<h2 class="form-heading">Please Enter Your Roll No to Continue</h2>
			
					<input type="number" value="<?php echo set_value('rollno'); ?>" id="rollno" placeholder="10 digit Roll No" name="rollno"/>
					<button type="submit" value="Submit" class="btn btn-primary">Submit</button>
				
		</form>
	</div>
	<script src="<?php echo base_url('js/jquery.js'); ?>"></script>
	<script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
	
</div>
	<footer id="footer">
		<p>&copy; <a href="http://pumpndump.in">pumpndump.in</a> <?php echo date("Y", time()); ?></p>		
	</footer>
</body>
</html>