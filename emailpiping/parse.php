#!/usr/bin/php -q

<?php
    $email = file_get_contents('php://stdin');
	
	preg_match_all("/(.*):\s(.*)\n/i", $email, $matches);
	
	$sender		= $matches[2][3];
	
	$from		= $matches[2][7];
	
	$subject	= $matches[2][8];
	
	$message	= $matches[2][15];
	
	$reply		= "
	Here's your information!\n\n
	
	Sender: $sender\n
	From: $from\n
	Subject: $subject\n\n
	Message:\n$message	";
	
	mail($from, 'From my email pipe', $reply, 'From:noreply@pumpndump.in');
?>