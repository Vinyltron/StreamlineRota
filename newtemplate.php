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

		$("#addsunday").click(function() {
			var num = 4;
			var insertion1 = "<select id='Xsunstart' form='newtemplateform'><?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?> </select>"; 
			var insertion2 = "<select id='Xsunfin' form='newtemplateform'><?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?> </select>";
			var insertion3 = "<select id='Xsunloc' form='newtemplateform'><?php foreach($locations as $location){ print '<option value=\"$location\">' . $location . '</option>\n'; }?></select>";
			var insertion4 = "<button>Remove Shift</button><br/>";
			document.getElementById('sundaywrap').innerHTML += insertion1;
			document.getElementById('sundaywrap').innerHTML += insertion2;
			document.getElementById('sundaywrap').innerHTML += insertion3;
			document.getElementById('sundaywrap').innerHTML += insertion4;
			num++;
			console.log("Sunday clicked");
   
  		});

  		$("#addmonday").click(function() {
			var num = 4;
			var insertion1 = "<select id='Xsunstart' form='newtemplateform'><?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?> </select>"; 
			var insertion2 = "<select id='Xsunfin' form='newtemplateform'><?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?> </select>";
			var insertion3 = "<select id='Xsunloc' form='newtemplateform'><?php foreach($locations as $location){ print '<option value=\"$location\">' . $location . '</option>\n'; }?></select>";
			var insertion4 = "<button>Remove Shift</button><br/>";
			document.getElementById('mondaywrap').innerHTML += insertion1;
			document.getElementById('mondaywrap').innerHTML += insertion2;
			document.getElementById('mondaywrap').innerHTML += insertion3;
			document.getElementById('mondaywrap').innerHTML += insertion4;
			num++;
			console.log("Monday clicked");
   
  		});	

   		$("#addtuesday").click(function() {
			var num = 4;
			var insertion1 = "<select id='Xsunstart' form='newtemplateform'><?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?> </select>"; 
			var insertion2 = "<select id='Xsunfin' form='newtemplateform'><?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?> </select>";
			var insertion3 = "<select id='Xsunloc' form='newtemplateform'><?php foreach($locations as $location){ print '<option value=\"$location\">' . $location . '</option>\n'; }?></select>";
			var insertion4 = "<button>Remove Shift</button><br/>";
			document.getElementById('tuesdaywrap').innerHTML += insertion1;
			document.getElementById('tuesdaywrap').innerHTML += insertion2;
			document.getElementById('tuesdaywrap').innerHTML += insertion3;
			document.getElementById('tuesdaywrap').innerHTML += insertion4;
			num++;
			console.log("Tuesday clicked");
   
  		});	

   		$("#addwednesday").click(function() {
			var num = 4;
			var insertion1 = "<select id='Xsunstart' form='newtemplateform'><?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?> </select>"; 
			var insertion2 = "<select id='Xsunfin' form='newtemplateform'><?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?> </select>";
			var insertion3 = "<select id='Xsunloc' form='newtemplateform'><?php foreach($locations as $location){ print '<option value=\"$location\">' . $location . '</option>\n'; }?></select>";
			var insertion4 = "<button>Remove Shift</button><br/>";
			document.getElementById('wednesdaywrap').innerHTML += insertion1;
			document.getElementById('wednesdaywrap').innerHTML += insertion2;
			document.getElementById('wednesdaywrap').innerHTML += insertion3;
			document.getElementById('wednesdaywrap').innerHTML += insertion4;
			num++;
			console.log("Wednesday clicked");
   
  		});

		$("#addthursday").click(function() {
			var num = 4;
			var insertion1 = "<select id='Xsunstart' form='newtemplateform'><?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?> </select>"; 
			var insertion2 = "<select id='Xsunfin' form='newtemplateform'><?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?> </select>";
			var insertion3 = "<select id='Xsunloc' form='newtemplateform'><?php foreach($locations as $location){ print '<option value=\"$location\">' . $location . '</option>\n'; }?></select>";
			var insertion4 = "<button>Remove Shift</button><br/>";
			document.getElementById('thursdaywrap').innerHTML += insertion1;
			document.getElementById('thursdaywrap').innerHTML += insertion2;
			document.getElementById('thursdaywrap').innerHTML += insertion3;
			document.getElementById('thursdaywrap').innerHTML += insertion4;
			num++;
			console.log("Thursday clicked");
		});

		$("#addfriday").click(function() {
			var num = 4;
			var insertion1 = "<select id='Xsunstart' form='newtemplateform'><?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?> </select>"; 
			var insertion2 = "<select id='Xsunfin' form='newtemplateform'><?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?> </select>";
			var insertion3 = "<select id='Xsunloc' form='newtemplateform'><?php foreach($locations as $location){ print '<option value=\"$location\">' . $location . '</option>\n'; }?></select>";
			var insertion4 = "<button>Remove Shift</button><br/>";
			document.getElementById('fridaywrap').innerHTML += insertion1;
			document.getElementById('fridaywrap').innerHTML += insertion2;
			document.getElementById('fridaywrap').innerHTML += insertion3;
			document.getElementById('fridaywrap').innerHTML += insertion4;
			num++;
			console.log("Friday clicked");
		});

		$("#addsaturday").click(function() {
			var num = 4;
			var insertion1 = "<select id='Xsunstart' form='newtemplateform'><?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?> </select>"; 
			var insertion2 = "<select id='Xsunfin' form='newtemplateform'><?php for($i = 0; $i < 24; print '<option value=\"$i\">' . date("h.iA", strtotime($i . ":00:00")) . '</option>\n', $i++);?> </select>";
			var insertion3 = "<select id='Xsunloc' form='newtemplateform'><?php foreach($locations as $location){ print '<option value=\"$location\">' . $location . '</option>\n'; }?></select>";
			var insertion4 = "<button>Remove Shift</button><br/>";
			document.getElementById('saturdaywrap').innerHTML += insertion1;
			document.getElementById('saturdaywrap').innerHTML += insertion2;
			document.getElementById('saturdaywrap').innerHTML += insertion3;
			document.getElementById('saturdaywrap').innerHTML += insertion4;
			num++;
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
				<select id='1sunstart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='1sunfin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='1sunloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>

				<select id='2sunstart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='2sunfin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='2sunloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>
			</div>
			<button id='addsunday'>Add another shift</button>
		</div>


		<!-- MONDAY'S SHIFT PICKER -->
		<div class="daywrap" id="monday">
			<h2>Pick Monday's Shifts</h2>
			<div id="mondaywrap">
				<select id='1monstart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='1monfin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='1monloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>

				<select id='2monstart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='2monfin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='2monloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>

				<select id='3monstart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='3monfin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='3monloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>
			</div>
			<button id='addmonday'>Add another shift</button>
		</div>

		
		<!-- TUESDAY'S SHIFT PICKER -->
		<div class="daywrap" id="tuesday">
			<h2>Pick Tuesday's Shifts</h2>
			<div id="tuesdaywrap">
				<select id='1tuestart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='1tuefin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='1tueloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>

				<select id='2tuestart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='2tuefin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='2tueloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>

				<select id='3tuestart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='3tuefin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='3tueloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>
			</div>
			<button id="addtuesday">Add another shift</button>
		</div>

		
		<!-- WEDNESDAY'S SHIFT PICKER -->
		<div class="daywrap" id="wednesday">
			<h2>Pick Wednesday's Shifts</h2>
			<div id="wednesdaywrap">
				<select id='1wedstart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='1wedfin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='1wedloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>

				<select id='2wedstart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='2wedfin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='2wedloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>

				<select id='3wedstart' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='3wedfin' form="newtemplateform">
				<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
				</select>
				<select id='3wedloc'>
				<?php foreach($locations as $location){ print "<option value=\"$location\">" . $location . "</option>\n"; }?>
				</select><button>Remove Shift</button><br/>
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