<?php
	$db_conn = new PDO('mysql:host=localhost;dbname=pumpn4rc_results','pumpn4rc_results','E-HXP?lr$s&I');
	//$stmt = $db_conn->query('SELECT * FROM tests');
	// while($row = $stmt->fetch()){
		// echo $row['name'] . ' by ' . $row['id'] . "\n";
	// }
	//$sql = 'UPDATE students SET branch = "1" WHERE branch = "Computer Science & Engineering"';
	$sql = 'SELECT * FROM students';
	$query = $db_conn->query('SELECT * FROM students');
	
	while($row = $query->fetch()){
		var_dump($row);
		echo "<hr /> <br />";
		
		
	}
	
?>