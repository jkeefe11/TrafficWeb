$(document).ready(function() {
	var x = 1;

	$("#NewPatternSubmit"+x).click(function(e) {
		e.preventDefault();
		var LightA = $(".LightA"+x).val();
		var LightB = $(".LightB"+x).val();
		var LightC = $(".LightC"+x).val();
		var LightD = $(".LightD"+x).val();
		var Duration = $(".Duration"+x).val();
		var Lights = LightA+LightB+LightC+LightD;
		var LogicOkay = 0;
		if (LightA == LightC && LightB == LightD && LightA != LightB && LightC != LightD) {
			LogicOkay = 1;
		} else {
			alert("Light States need changed");
			LogicOkay = 0;
		}
		
		if (LogicOkay == 1) {
			$.post("http://localhost:8888/Submissions/NewPatternSubmit.php", {
				mDuration: Duration,
				mLightSequence: Lights
			});
			
			//$('.EastIntersectionForm0')[0].reset(); // To reset form fields
			

		} else {
		// Returns successful data submission message when the entered information is stored in database.
			alert("Insertion Failed Some Fields are Blank....!!");
			return;	
		}
		x++;
		$('.mainSection').append('<form class="EastIntersectionForm'+x+'"><p>Light A</p><select class="LightA'+x+'"><option value="R">Red</option><option value="Y">Yellow</option><option value="G">Green</option></select><p>Light B</p><select class="LightB'+x+'"><option value="R">Red</option><option value="Y">Yellow</option><option value="G">Green</option></select><p>Light C</p><select class="LightC'+x+'"><option value="R">Red</option><option value="Y">Yellow</option><option value="G">Green</option></select><p>Light D</p><select class="LightD'+x+'"><option value="R">Red</option><option value="Y">Yellow</option><option value="G">Green</option></select><input class="Duration'+x+'" type="text" placeholder="Duration in seconds"></input></form>');	
	});

	function checkLights(LightA, LightB, LightC, LightD) {
		if (LightA == LightC && LightB == LightD && LightA != LightB && LightC != LightD) {
			LogicOkay = 1;
		} else {
			alert("Light States are not okay");
			LogicOkay = 0;
		}
	}
	
	$('.finalSubmit').click(function() {
		alert("This traffic pattern will go live momentarily");
	});
});