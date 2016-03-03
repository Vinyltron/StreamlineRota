	$( document ).ready(function() {

		// capture any clicks on the .shiftwrapper buttons that are in the main body of the dom
		$("body").on("click", ".removeshift", function() {
			$(this).closest(".shiftwrapper").remove();
		});

		// appends HTML from the shifttemplate div to the sibling before the button div
		// Thanks to Merlin Govier
		function addShift(evt) {
			var day = evt.target.previousElementSibling;
		  	var d = document.createElement("div");
		  	d.innerHTML = shifttemplate.innerHTML;
		  	day.appendChild(d);
		}
		
		var buttons = document.getElementsByClassName("add_shift");

		for (var i = 0; i < buttons.length; i++) {
		  buttons[i].addEventListener("click", addShift);
		}

			  				
	});