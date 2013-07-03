<?php
	//var_dump("$marks");
	echo json_encode(array_map( function($key, $value) { return array($key, $value); },
    array_keys($marks),
    array_values($marks)
  ));
?>