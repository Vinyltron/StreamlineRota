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

	<body>
		<!--head-->
		<img src="header.png" class="htemplate">
		<!--/head-->


		<!-- User selects a rota name which is inserted into fyp.rota_template as rota_name -->
		<form id="nametemplate">Name the template: <input type="text" name="rotaname"></form>


		<!-- This is where the database will output all unique rotas into a dropdown -->
		<div>
			<select id="duplicaterota">
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
		<div class="daywrap">
			<h2>Pick Sunday's Shifts</h2>

			<select id='1sunstart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='1sunfin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='1sunloc'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>


			<select id='2sunstart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='2sunfin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>

			<select id='3sunstart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='3sunfin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>	

			<button onClick()="">Add another shift</button>
		</div>


		<!-- MONDAY'S SHIFT PICKER -->
		<div class="daywrap">
			<h2>Pick Monday's Shifts</h2>

			<select id='1monstart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='1monfin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>


			<select id='2monstart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='2monfin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>

			<select id='3monstart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='3monfin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>	

			<button>Add another shift</button>
		</div>

		
		<!-- TUESDAY'S SHIFT PICKER -->
		<div class="daywrap">
			<h2>Pick Tuesday's Shifts</h2>

			<select id='1tuestart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='1tuefin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>


			<select id='2tuestart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='2tuefin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>

			<select id='3tuestart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='3tuefin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>	

			<button>Add another shift</button>
		</div>

		
		<!-- WEDNESDAY'S SHIFT PICKER -->
		<div class="daywrap">
			<h2>Pick Wednesday's Shifts</h2>

			<select id='1wedstart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='1wedfin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>


			<select id='2wedstart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='2wedfin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>

			<select id='3wedstart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='3wedfin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>	

			<button>Add another shift</button>
		</div>


		<!-- THURSDAY'S SHIFT PICKER -->
		<div class="daywrap">
			<h2>Pick Thursday's Shifts</h2>

			<select id='1thurstart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='1thurfin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>


			<select id='2thurstart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='2thurfin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>

			<select id='3thurstart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='3thurfin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>	

			<button>Add another shift</button>
		</div>


		<!-- FRIDAY'S SHIFT PICKER -->
		<div class="daywrap">
			<h2>Pick Friday's Shifts</h2>

			<select id='1fristart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='1frifin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>


			<select id='2fristart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='2frifin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>

			<select id='3fristart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='3frifin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>	

			<button>Add another shift</button>
		</div>


		<!-- SATURDAY'S SHIFT PICKER -->
		<div class="daywrap">
			<h2>Pick Saturday's Shifts</h2>

			<select id='1satstart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='1satfin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>


			<select id='2satstart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='2satfin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>

			<select id='3satstart'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select>
			<select id='3satfin'>
			<?php for($i = 0; $i < 24; print "<option value=\"$i\">" . date("h.iA", strtotime($i . ":00:00")) . "</option>\n", $i++);?>
			</select><button>Remove Shift</button><br/>	

			<button>Add another shift</button>
		</div>

	</body>
</html>