<?php
	//Make a database connection
	try {
	$dba = new mysqli("localhost","root","root");
	} catch (\Exception $e) {
		echo $e->getMessage();
	}
	//If the connection is unable to select the database, point the browser to the install file
	if ($dba->select_db('fyp') === false) {
		echo "Database not found error";
	}
	mysqli_close($dba);
	//Initialise main database connection
	$db = new PDO('mysql:host=localhost;dbname=fyp;charset=utf8', 'root', 'root');

?>