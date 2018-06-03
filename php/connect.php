<?php
	/*  When this file is included, the system connects to the database.
		Settings: 1) For localhost: 'localhost','root','','Career'
				  2) For de-stijlfabriek.nl: 'rdbms.strato.de','U2692450','Bierbank33','DB2692450'
	*/
	// Create connection
	$conn = mysqli_connect('localhost','root','','Career');
	//$conn = mysqli_connect('rdbms.strato.de','U2692450','Bierbank33','DB2692450');
	// Check connection
	if (!$conn) die("Connection failed: " . mysqli_connect_error());
?>
