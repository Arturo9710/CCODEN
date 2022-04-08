<?php
	$conn = new mysqli('localhost', 'root', '', 'ccoden_base');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>