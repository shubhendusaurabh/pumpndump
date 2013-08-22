<?php

	function get_menu(){
		$CI = &get_instance();
		$links = array(
			'dashboard' => 'Dashboard',
			'migration' => 'Migrations',
			'student'	=> 'Student',
			'subject'	=> 'Subject',
			'timeline'	=> 'Timeline',
			'user'		=> 'User',
			'comment'	=> 'Comment'
		);
		
		$str = '';
		$str .= '<div class="navbar navbar-inverse">'.PHP_EOL;
		$str .=	  '<div class="navbar-inner">'.PHP_EOL;
		$str .=	  '<div class="container">'.PHP_EOL;
		$str .=	   ' <a class="brand" href="#">Admin</a>'.PHP_EOL;
		$str .=	    '<ul class="nav">'.PHP_EOL;
		$active = $CI->uri->segment(2);
		foreach ($links as $key => $value) {
			if ($active == $key) {
				$str .=  '<li class="active"><a href="' . $key .'">' . $value . '</a></li>' . PHP_EOL;
			} else {
				$str .=  "<li><a href=\"{$key}\">{$value}</a></li>" . PHP_EOL;
			}
		}
		$str .= '<li>' . anchor('admin/user/logout', "Log Out", 'class="pull-right"') . '</li>' . PHP_EOL ;
		$str .= "</ul>" . PHP_EOL . "</div>" . PHP_EOL . "</div>" . PHP_EOL . "</div>" . PHP_EOL;
		
		return $str;
	}
