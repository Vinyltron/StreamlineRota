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
$locations = array("Library","Portland","Park","Richmond","IT Center","Guildhall","Langstone")

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
		

		<div class="clear"></div>

		<!-- SUNDAY'S SHIFT PICKER -->
		<div class="daywrap" id="sunday">
			<h2>Pick Sunday's Shifts</h2>
			<div id="sundaywrap">
				<div class="shiftwrapper">
					<select data-col-id='start' form="newtemplateform">
					<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
					</select>
					<select data-col-id='finish' form="newtemplateform">
					<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
					</select>
					<select data-col-id='loc' form="newtemplateform">
					<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
					</select>
					<button class='removeshift'>Remove Shift</button>
					<br/>
				</div>

				<div class="shiftwrapper">
					<select data-col-id='start' form="newtemplateform">
					<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
					</select>
					<select data-col-id='finish' form="newtemplateform">
					<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
					</select>
					<select data-col-id='loc' form="newtemplateform">
					<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
					</select>
					<button class='removeshift'>Remove Shift</button>
					<br/>
				</div>
			</div>
			<button id='addsunday'>Add another shift</button>
		</div>


		<!-- MONDAY'S SHIFT PICKER -->
		<div class="daywrap" id="monday">
			<h2>Pick Monday's Shifts</h2>
			<div id="mondaywrap">
				<div class="shiftwrapper">
					<select data-col-id='start' form="newtemplateform">
					<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
					</select>
					<select data-col-id='finish' form="newtemplateform">
					<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
					</select>
					<select data-col-id='loc' form="newtemplateform">
					<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
					</select>
					<button class='removeshift'>Remove Shift</button>
					<br/>
				</div>

				<div class="shiftwrapper">
					<select data-col-id='start' form="newtemplateform">
					<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
					</select>
					<select data-col-id='finish' form="newtemplateform">
					<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
					</select>
					<select data-col-id='loc' form="newtemplateform">
					<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
					</select>
					<button class='removeshift'>Remove Shift</button>
					<br/>
				</div>
			</div>
			<button id='addmonday'>Add another shift</button>
		</div>

		
		<!-- TUESDAY'S SHIFT PICKER -->
		<div class="daywrap" id="tuesday">
			<h2>Pick Tuesday's Shifts</h2>
			<div id="tuesdaywrap">
				<div class="shiftwrapper">
					<select data-col-id='start' form="newtemplateform">
					<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
					</select>
					<select data-col-id='finish' form="newtemplateform">
					<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
					</select>
					<select data-col-id='loc' form="newtemplateform">
					<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
					</select>
					<button class='removeshift'>Remove Shift</button>
					<br/>
				</div>

				<div class="shiftwrapper">
					<select data-col-id='start' form="newtemplateform">
					<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
					</select>
					<select data-col-id='finish' form="newtemplateform">
					<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
					</select>
					<select data-col-id='loc' form="newtemplateform">
					<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
					</select>
					<button class='removeshift'>Remove Shift</button>
					<br/>
				</div>
			</div>
			<button id="addtuesday">Add another shift</button>
		</div>

		
		<!-- WEDNESDAY'S SHIFT PICKER -->
		<div class="daywrap" id="wednesday">
			<h2>Pick Wednesday's Shifts</h2>
			<div id="wednesdaywrap">
				<div class="shiftwrapper">
					<select data-col-id='start' form="newtemplateform">
					<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
					</select>
					<select data-col-id='finish' form="newtemplateform">
					<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
					</select>
					<select data-col-id='loc' form="newtemplateform">
					<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
					</select>
					<button class='removeshift'>Remove Shift</button>
					<br/>
				</div>

				<div class="shiftwrapper">
					<select data-col-id='start' form="newtemplateform">
					<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
					</select>
					<select data-col-id='finish' form="newtemplateform">
					<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
					</select>
					<select data-col-id='loc' form="newtemplateform">
					<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
					</select>
					<button class='removeshift'>Remove Shift</button>
					<br/>
				</div>
			</div>
			<button id="addwednesday">Add another shift</button>
		</div>


		<!-- THURSDAY'S SHIFT PICKER -->
		<div class="daywrap" id="thursday">
			<h2>Pick Thursday's Shifts</h2>
			<div id="thursdaywrap">
				<select id='1thurstart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='1thurfin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='1thurloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>

				<select id='2thurstart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='2thurfin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='2thurloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>

				<select id='3thurstart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='3thurfin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='3thurloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>
			</div>
			<button id="addthursday">Add another shift</button>
		</div>


		<!-- FRIDAY'S SHIFT PICKER -->
		<div class="daywrap" id="friday">
			<h2>Pick Friday's Shifts</h2>
			<div id="fridaywrap">
				<select id='1fristart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='1frifin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='1friloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>

				<select id='2fristart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='2frifin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='2friloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>

				<select id='3fristart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='3frifin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='3friloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>
			</div>
			<button id="addfriday">Add another shift</button>
		</div>


		<!-- SATURDAY'S SHIFT PICKER -->
		<div class="daywrap" id="saturday">
			<h2>Pick Saturday's Shifts</h2>
			<div id="saturdaywrap">
				<select id='1satstart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='1satfin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='1satloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>

				<select id='2satstart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='2satfin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='2satloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>

				<select id='3satstart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='3satfin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='3satloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>	
			</div>
			<button id="addsaturday">Add another shift</button>
		</div>

	</body>
</html>