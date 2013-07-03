<?php

	
	$navs = array(
		'home' 		=> 'index.php',
		'blog'		=> '/blog/',
		'works'		=> 'works.php',
		'about'		=> 'about.php',
		'contact'	=> 'contact.php',
		'games'		=> 'http://games.pumpndump.in'
	);
	
	function navbar($selected = ''){
		
		$output = '';
		global $navs;
		foreach ($navs as $key => $value) {
			if ( $result = strcasecmp($selected, $value) == 0) {
				$output .= "<li class=\"pure-menu-selected\">";
			} else {
				$output .= "<li>";
			}
			$output .= "<a href=\"" . $value . "\">" . ucfirst($key) . "</a></li>";
		}
		return $output;
	}
	
	function robot($page = ""){
		if ($page == 'feedback.php' || $page == 'contact.php') {
			return "nofollow";
		} else {
			return "index,follow";
		}
	}
