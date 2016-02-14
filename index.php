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
?>
<!--//////////////////////////////////////////////////-->



<!doctype HTML>
<html>

	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/table.css">
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	</head>

	<body>

		<script type="text/javascript">
		// 	$(".mainbutton").click(function(){
		// 		$(this).css("background-color","#532F9D");
		// 		});
		// 	$(".mainbutton").hover(function(){}
		// 		$(this).addClass("buttonhover");});
		// </script>
		<!--head-->
		<img src="header.png" class="htemplate">
		<!--/head-->
		<!-- Create New Template -->
		<a href="newtemplate.php"><div class="mainbutton" id="templatebutton">New Template</div></a>
		<!-- Create new Rota -->
		<a href="rota.php"><div class="mainbutton" id="rotabutton">New Rota</div></a>
	</body>
</html>