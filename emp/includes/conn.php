<?php
	$conn = new mysqli('localhost', 'root', '', 'u692837713_apsystem');
	//$conn = new mysqli('localhost', 'u692837713_apsys', 'letmein123', 'u692837713_apsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>