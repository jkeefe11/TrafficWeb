<?php

require_once("../mysql_connect.php");

$Lights = array();

$query = "SELECT * FROM LightStates WHERE PatternName = 'FootballTraffic'";
$result = mysqli_query($dbc, $query);
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $Lights[] = $row;
    }
}

$Data = json_encode($Lights);
?>


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
		<li class="expand"><h2>Eastern Intersection </h2><i class="fa fa-chevron-down" aria-hidden="true"></i>
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
		<i class="fa arrow fa-angle-double-right fa-2x" aria-hidden="true"></i>
	</div>
</div>

<div class="mainSection">   
	<h1>Football Traffic Pattern</h1>
	
<div class="additionalPatterns"></div>
</div>

<input class="finalSubmit" type="submit" value="Make Sequence Live"></input>

<script>
var jsonPHP = '<?php echo $Data; ?>';
var jsonData = $.parseJSON(jsonPHP);
//alert(jsonData[0].Editor);
var x = 0;
$.each(jsonData, function(index) {
	var lightA, lightB, lightC, lightD;
	lightA = this.mLightPattern.charAt(0);
	if (lightA == "R") { lightA = "Red";
	} else if (lightA == "Y") { lightA = "Yellow";
	} else { lightA = "Green";
	}
	lightB = this.mLightPattern.charAt(1);
	if (lightB == "R") { lightB = "Red";
	} else if (lightB == "Y") { lightB = "Yellow";
	} else { lightB = "Green";
	}
	lightC = this.mLightPattern.charAt(2);
	if (lightC == "R") { lightC = "Red";
	} else if (lightC == "Y") { lightC = "Yellow";
	} else { lightC = "Green";
	}
	lightD = this.mLightPattern.charAt(3);
	if (lightD == "R") { lightD = "Red";
	} else if (lightD == "Y") { lightD = "Yellow";
	} else { lightD = "Green";
	}

	//$('.additionalPatterns').append('<p>Light A:</p><p> '+(this).lightA+'</p>');
	$('.additionalPatterns').append('<div class="sequence"><p>Pattern '+(index+1)+': <p>Light A:</p><p> '+lightA+' </p> <p>Light B:</p><p> '+lightB+' </p> <p>Light C:</p><p> '+lightC+' </p> <p>Light D:</p><p> '+lightD+' </p> <p>Duration: '+ (this).mDuration + ' seconds</p></div><br/>');
});

</script>
</body>
</html>