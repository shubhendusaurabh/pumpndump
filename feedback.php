<?php

/**
 * Feedback class
 */
class Feedback {

	public $name;
	public $email;
	public $msg;

	public $message;
	public $status;

	function __construct($name, $email, $msg) {
		$this -> name = $name;
		$this -> email = $email;
		$this -> msg = $msg;

		$this -> sanitize();
	}

	public function sanitize() {
		$this -> name = filter_var($this -> name, FILTER_SANITIZE_STRING);
		$this -> email = filter_var($this -> email, FILTER_SANITIZE_EMAIL);
		$this -> msg = filter_var($this -> msg, FILTER_SANITIZE_STRING);
	}

	public function check_empty() {
		if (empty($this -> name)) {
			$this -> message = 'The Name field is empty!';
			$this -> status = FALSE;
		} elseif (empty($this -> msg)) {
			$this -> message = 'The Message field is empty!';
			$this -> status = FALSE;
		} elseif (empty($this -> email)) {
			$this -> message = 'The email field is empty or incorrect!';
			$this -> status = FALSE;
		} else {
			$this -> status = TRUE;
		}

		return $this -> status;

	}

	public function send_mail() {
		if ($this -> status) {
			$content = "Name: {$this->name}\n";
			$content .= "Email Address: {$this->email}\n";
			$content .= "Message: \n\n {$this->msg}";
			// TODO: try catch not working 
			try {
				mail("shubhendu.saurabh@hotmail.com", "New Feedback", $content);
				$this -> message = "Thank You for your feedback";
				$this -> status = TRUE;

			} catch(Exception $error) {
				$this -> message = $error -> getMessage();
				$this -> status = FALSE;
			}
			return $this -> status;
		}

	}

}

if (isset($_POST['send'])) {
	$name = trim($_POST["name"]);
	$email = trim($_POST['email']);
	$msg = trim($_POST['msg']);

	$feedback = new Feedback($name, $email, $msg);
	if ($feedback -> check_empty()) {
		$feedback -> send_mail();
	}
	$status = $feedback -> status;
	$message = $feedback -> message;

}

require_once 'functions.php';

$selected = (basename(__FILE__));

$title = 'Send Message';
require_once 'partials/header.php';
?>
		<div class="splash pure-u-1">
			<hgroup>
				<h1 class="splash-subhead ">Leave Feedback</h1>
			</hgroup>
			
		
			<?php
					if (isset($status)) {
						if ($status) {
							echo "<div class=\"alert alert-success\">" . $message . "</div>";
						} else {
							echo "<div class=\"alert alert-error\">" . $message . "</div>";
						}
		
					}
		
			?>
		<section>
			<form method="post" action="" class="pure-form pure-form-aligned">
				<fieldset>
					<legend>
						Contact Me
					</legend>
					<div class="pure-control-group">
						<label for="name">Name</label>
		
						<input type="text" name="name" id="name" placeholder="Your Name" required="required" value="<?php if(isset($status)) print($feedback->name);  ?>">
		
					</div>
					<div class="pure-control-group">
						<label for="email">Email</label>
		
						<input type="email" name="email" id="email" placeholder="name@host.com" required="required" value="<?php if(isset($status)) print($feedback->email);  ?>"/>
		
					</div>
					<div class="pure-control-group">
						<label for="msg">Message</label>
						<textarea name="msg" id="msg" rows="9" cols="50" placeholder="Your Message"></textarea>												
			
					</div>
					<div class="pure-controls">
						<input type="submit" name="send" value="Send" class="pure-button pure-button-success" />
					</div>
				</fieldset>
			</form>
			</section>
		</div>

<?php include_once 'partials/footer.php'; ?>
