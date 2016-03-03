<!--Some stuff that needs to go in a separate file-->
<?php 

include '/php/dbcon.php';


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
		<script type="text/javascript" src="js/dayclickfunction.js"></script>
	</head>

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

		<!--Button to save template to DB-->
		<button class="save" action="">Save</button>
		
		<div class="clear"></div>


		<!--Construct the page-->
		<?php 
		// $daynum = count($days);
		foreach ($days as $day){
			echo '<div class="daywrap" id="' . $day . '">';
			echo '<h2>Pick ' . ucfirst($day) . '&rsquo;s Shifts</h2>';
			echo '<button type ="button" class="add_shift">Add another shift</button>';
			echo '</div>';
		}
		?>

		<!--Clear the floats-->
		<div class="clear"></div>

		<!--Template for shift dropdowns-->
		<div id="shifttemplate" style="display:none">
			<div class='shiftwrapper'>
				<select data-col-id='start' form='newtemplateform'>
					<?php 
						for($hours=0; $hours<24; $hours++) // the interval for hours is '1'
	    					for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
	        					echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
	                       						.str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';?>
				</select>
				<select data-col-id='finish' form='newtemplateform'>";
				<?php 
					for($hours=0; $hours<24; $hours++) // the interval for hours is '1'
						for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
	    					echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
	                   						.str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';?>
				</select>
				<select data-col-id='loc' form='newtemplateform'>
				<?php foreach($locations as $location){ print '<option value=\"$location\">' . $location . '</option>\n'; }?>
				</select>
				<button class='removeshift'>Remove Shift</button><br/>
			</div>
		</div>


	</body>
</html>