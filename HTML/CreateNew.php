<html>
<head>
<title>Create Pattern</title>
<link rel="stylesheet" text="text/css" href="../CSS/main.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="../JS/Submit.js"></script>
<script src="../JS/main.js"></script>
</head>
<body>
<div class="row">
	<img src="Images/ToledoLogo.png" />
	<ul class="header">
		<li><a href="http://localhost:8888/SignIn.php">
			<input type="submit" value="Sign In"></input></a></li>

</div>    
    
<div class="menu">
	<ul>
		<li class="expand"><h2>Eastern Intersection</h2><i class="fa fa-chevron-down" aria-hidden="true"></i>
			<ul>
				<li><a href="http://localhost:8888/HTML/Normal.php"><h3>Normal Traffic</h3></a></li>
				<li><a href="http://localhost:8888/HTML/Heavy.php"><h3>Heavy Traffic</h3></a></li>
				<li><a href="http://localhost:8888/HTML/Accident.php"><h3>Accident Traffic</h3></a></li>
				<li><a href="http://localhost:8888/HTML/Football.php"><h3>Football Traffic</h3></a></li>
				<li><a href="http://localhost:8888/HTML/CreateNew.php"><h3>Create New</h3></a></li>
			</ul>
		<li><h2>Middle Intersection</h2>
		<li><h2>Western Intersection</h2>
	</ul>
</div>
<div class="menuSlider">
	<div class="slide">
		<i class="fa fa-angle-double-right fa-2x" aria-hidden="true"></i>
	</div>
</div>

<div class="mainSection">   
	<h1>Create New Traffic Pattern</h1>
	<form class="EastIntersectionForm1">
		<input class="PatternName" type="text" placeholder="Name of Pattern"></input><br/>
		<p>Light A</p>
		<select class="LightA1">
			<option value="R">Red</option>
			<option value="Y">Yellow</option>
			<option value="G">Green</option>
		</select>
		<p>Light B</p>
		<select class="LightB1">
			<option value="R">Red</option>
			<option value="Y">Yellow</option>
			<option value="G">Green</option>
		</select>
		<p>Light C</p>
		<select class="LightC1">
			<option value="R">Red</option>
			<option value="Y">Yellow</option>
			<option value="G">Green</option>
		</select>
		<p>Light D</p>
		<select class="LightD1">
			<option value="R">Red</option>
			<option value="Y">Yellow</option>
			<option value="G">Green</option>
		</select>

		<input class="Duration1" type="text" placeholder="Duration in seconds"></input>

  
    <input id="NewPatternSubmit1" type="submit" name="submit" value="Evaluate and Submit"></input>
</form>
</div>
<div class="additionalPatterns"></div>

<!--<div class="showPatterns">
	<script>
	var PatternList = [];
	$.get('http://localhost:8888/Submissions/GetPatterns.php', function(data) {
		//alert(data);
		$(".showPatterns").append(data);
		OutputBuilder(data);
	});
	function OutputBuilder(data) {
		data.forEach(function(Pattern) {
    		PatternList.push(Pattern);
		});
	}
	</script>
</div>-->

<input class="finalSubmit" type="submit" value="Submit Sequence"></input>
</body>
</html>