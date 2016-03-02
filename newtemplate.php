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
	echo "Database not found error";
}
mysqli_close($dba);
//Initialise main database connection
$db = new PDO('mysql:host=localhost;dbname=fyp;charset=utf8', 'root', '');

//Define buildings array
$locations = array("Library","Portland","Park","Richmond","IT Center","Guildhall","Langstone");
//Define days array
$days = array("sunday","monday","tuesday","wednesday","thursday","friday","saturday");

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

	<script>
	$( document ).ready(function() {

		// capture any clicks on the .shiftwrapper buttons that are in the main body of the dom
		$("body").on("click", ".removeshift", function() {
			$(this).closest(".shiftwrapper").remove();
		});

		$("#addsunday").click(function() {
			var htmlstring = "<div class='shiftwrapper'>";
			htmlstring += "<select data-col-id='start' form='newtemplateform'>";
			htmlstring += "<?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?>";
			htmlstring += "</select>"; 
			htmlstring += "<select data-col-id='finish' form='newtemplateform'>";
			htmlstring += "<?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?>";
			htmlstring += "</select>";
			htmlstring += "<select data-col-id='loc' form='newtemplateform'>";
			htmlstring += "<?php foreach($locations as $location){ print '<option value=\"$location\">' . $location . '</option>\n'; }?>";
			htmlstring += "</select>";
			htmlstring += "<button class='removeshift'>Remove Shift</button><br/>";
			htmlstring += "</div>";
			document.getElementById('sundaywrap').innerHTML += htmlstring;
			console.log("Sunday clicked");
   
  		});

  		$("#addmonday").click(function() {
			var htmlstring = "<div class='shiftwrapper'>";
			htmlstring += "<select data-col-id='start' form='newtemplateform'>";
			htmlstring += "<?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?>";
			htmlstring += "</select>"; 
			htmlstring += "<select data-col-id='finish' form='newtemplateform'>";
			htmlstring += "<?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?>";
			htmlstring += "</select>";
			htmlstring += "<select data-col-id='loc' form='newtemplateform'>";
			htmlstring += "<?php foreach($locations as $location){ print '<option value=\"$location\">' . $location . '</option>\n'; }?>";
			htmlstring += "</select>";
			htmlstring += "<button class='removeshift'>Remove Shift</button><br/>";
			htmlstring += "</div>";
			document.getElementById('mondaywrap').innerHTML += htmlstring;
			console.log("Monday clicked");
   
  		});	

   		$("#addtuesday").click(function() {
			var htmlstring = "<div class='shiftwrapper'>";
			htmlstring += "<select data-col-id='start' form='newtemplateform'>";
			htmlstring += "<?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?>";
			htmlstring += "</select>"; 
			htmlstring += "<select data-col-id='finish' form='newtemplateform'>";
			htmlstring += "<?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?>";
			htmlstring += "</select>";
			htmlstring += "<select data-col-id='loc' form='newtemplateform'>";
			htmlstring += "<?php foreach($locations as $location){ print '<option value=\"$location\">' . $location . '</option>\n'; }?>";
			htmlstring += "</select>";
			htmlstring += "<button class='removeshift'>Remove Shift</button><br/>";
			htmlstring += "</div>";
			document.getElementById('tuesdaywrap').innerHTML += htmlstring;
			console.log("Tuesday clicked");
   
  		});	

   		$("#addwednesday").click(function() {
			var htmlstring = "<div class='shiftwrapper'>";
			htmlstring += "<select data-col-id='start' form='newtemplateform'>";
			htmlstring += "<?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?>";
			htmlstring += "</select>"; 
			htmlstring += "<select data-col-id='finish' form='newtemplateform'>";
			htmlstring += "<?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?>";
			htmlstring += "</select>";
			htmlstring += "<select data-col-id='loc' form='newtemplateform'>";
			htmlstring += "<?php foreach($locations as $location){ print '<option value=\"$location\">' . $location . '</option>\n'; }?>";
			htmlstring += "</select>";
			htmlstring += "<button class='removeshift'>Remove Shift</button><br/>";
			htmlstring += "</div>";
			document.getElementById('wednesdaywrap').innerHTML += htmlstring;
			console.log("Monday clicked");
   
  		});

		$("#addthursday").click(function() {
			var htmlstring = "<div class='shiftwrapper'>";
			htmlstring += "<select data-col-id='start' form='newtemplateform'>";
			htmlstring += "<?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?>";
			htmlstring += "</select>"; 
			htmlstring += "<select data-col-id='finish' form='newtemplateform'>";
			htmlstring += "<?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?>";
			htmlstring += "</select>";
			htmlstring += "<select data-col-id='loc' form='newtemplateform'>";
			htmlstring += "<?php foreach($locations as $location){ print '<option value=\"$location\">' . $location . '</option>\n'; }?>";
			htmlstring += "</select>";
			htmlstring += "<button class='removeshift'>Remove Shift</button><br/>";
			htmlstring += "</div>";
			document.getElementById('thursdaywrap').innerHTML += htmlstring;
			console.log("Thursday clicked");
		});

		$("#addfriday").click(function() {
			var htmlstring = "<div class='shiftwrapper'>";
			htmlstring += "<select data-col-id='start' form='newtemplateform'>";
			htmlstring += "<?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?>";
			htmlstring += "</select>"; 
			htmlstring += "<select data-col-id='finish' form='newtemplateform'>";
			htmlstring += "<?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?>";
			htmlstring += "</select>";
			htmlstring += "<select data-col-id='loc' form='newtemplateform'>";
			htmlstring += "<?php foreach($locations as $location){ print '<option value=\"$location\">' . $location . '</option>\n'; }?>";
			htmlstring += "</select>";
			htmlstring += "<button class='removeshift'>Remove Shift</button><br/>";
			htmlstring += "</div>";
			document.getElementById('fridaywrap').innerHTML += htmlstring;
			console.log("Friday clicked");
		});

		$("#addsaturday").click(function() {
			var htmlstring = "<div class='shiftwrapper'>";
			htmlstring += "<select data-col-id='start' form='newtemplateform'>";
			htmlstring += "<?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?>";
			htmlstring += "</select>"; 
			htmlstring += "<select data-col-id='finish' form='newtemplateform'>";
			htmlstring += "<?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?>";
			htmlstring += "</select>";
			htmlstring += "<select data-col-id='loc' form='newtemplateform'>";
			htmlstring += "<?php foreach($locations as $location){ print '<option value=\"$location\">' . $location . '</option>\n'; }?>";
			htmlstring += "</select>";
			htmlstring += "<button class='removeshift'>Remove Shift</button><br/>";
			htmlstring += "</div>";
			document.getElementById('saturdaywrap').innerHTML += htmlstring;
			console.log("Saturday clicked");
		});		 			  				
	});
	</script>


	<body>
		<!--head-->
		<img src="header.png" class="htemplate">
		<!--/head-->


		<!-- User selects a rota name which is inserted into fyp.rota_template as rota_name -->
		<form action="newrotatemplate.php" method="post" id="newtemplateform">Name the template: <input type="text" name="rotaname"></form>


		<!-- This is where the database will output all unique rotas into a dropdown -->
		<div><label for="duplicaterota">Clone existing template:</label>
			<select id="duplicaterota" form="newtemplateform">
			<!-- Select all unique rotas from DB and output them to options -->
			<?php
			// SQL Statement	 
				$query = "SELECT DISTINCT rota_name FROM fyp.rota_templates";
				$stmt = $db->prepare($query);
				$stmt->execute();
				
			//Output to Options
				if($stmt->errorCode() ==0) {
					while(($row = $stmt->fetch()) !=false) {
						echo '<option id="' . $row['rota_name'] . '">' . $row['rota_name'] . '</option>';
					}
				} 
					else {
			//If no rotas are available use default option
						echo '<option selected="selected">No Existing Rotas</option>';
					} 
			?>
			</select>
		</div>
				<button class="save">Save</button>
		
		<div class="clear"></div>

		<?php 
		// $daynum = count($days);
		foreach ($days as $day){
			echo '<div class="daywrap" id="' . $day . '">';
			echo '<h2>Pick ' . ucfirst($day) . '&rsquo;s Shifts</h2>';
			echo '<div id="' . $day . 'wrap">';
			echo '<div class="shiftwrapper">';
			echo '<select data-col-id="start" form="newtemplateform">';
			for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);
			echo '</select>';
			echo '<select data-col-id="finish" form="newtemplateform">';
			for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);
			echo '</select>';
			echo '<select data-col-id="loc" form="newtemplateform">';
			foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; };
			echo '</select>';
			echo '<button class="removeshift">Remove Shift</button>';
			echo '<br/>';
			echo '</div>';
			echo '</div>';
			echo '<button id="add' . $day . '">Add another shift</button>';
			echo '</div>';
		}
		?>

		<div class="clear"></div>



	</body>
</html>