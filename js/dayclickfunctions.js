	$( document ).ready(function() {

		// capture any clicks on the .shiftwrapper buttons that are in the main body of the dom
		$("body").on("click", ".removeshift", function() {
			$(this).closest(".shiftwrapper").remove();
		});

		//Add shifts when add shift button is clicked
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