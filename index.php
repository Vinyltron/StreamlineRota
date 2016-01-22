<!--Some stuff that needs to go in a separate file-->
<?php
//Make a database connection
try {
$dba = new mysqli("localhost","root","");
} catch (\Exception $e) {
	echo $e->getMessage();
}
//If the connection is unable to select the database, point the browser to the install file
if ($dba->select_db('fyp') === false) {
	echo "Database not found error";;
}
mysqli_close($dba);
//Initialise main database connection
$db = new PDO('mysql:host=localhost;dbname=fyp;charset=utf8', 'root', '');

session_start();

?>
<!--//////////////////////////////////////////////////-->



<!doctype HTML>
<html>

	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
	</head>

	<body>
		<!--head-->
		<img src="header.png" class="htemplate">
		<!--/head-->

		<p>Here is the body of stuffs</p>
		<!--table-->
		<table style="width: 50%">
			<tr>
				<td>boo</td>
				<td>bee</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
			</tr>
			<tr>
				<td>3</td>
				<td>4</td>
			</tr>
			<tr>
				<td>5</td>
				<td>6</td>
			</tr>			
			</table>
		<!--/table-->
		<?php

		//List most recent items. LIMIT decides how many items to show
		$sql = "SELECT DISTINCT username FROM fyp.availability LIMIT 50";
		//create an executable sql statement
		$stmt = $db->prepare($sql);
		//execute the statement
		$stmt->execute();

		//if there is no error, while there are rows to fetch, print out the item in that row
		if($stmt->errorCode() ==0) {
			while(($row = $stmt->fetch()) !=false) {
				$string = '</br>username:' . $row['username'] . '</br>';
				echo '<div>';
				echo $string;
				echo '</div>';
			}
		} else {
			$errors = $stmt->errorInfo();
			//prints out the error message held in position [2] of the array generated by errorInfo
			echo($errors[2]);
			echo 'Error retrieving usernames';
		}
	?>
<!-- 		<img src="footer.png" class="ftemplate"> -->
	</body>
</html>	