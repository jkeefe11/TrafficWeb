<html>
<head>
<title>Create Account</title>
<link rel="stylesheet" text="text/css" href="../CSS/main.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<div class="row">
	<img src="Images/ToledoLogo.png" />
	<ul class="header">
		<li><a href="">
			<input type="submit" value="Create Account"></input></a></li>
		<li><a href="http://localhost:8888/SignIn.php">
			<input type="submit" value="Sign In"></input></a></li>

</div>    
    
<h1>Create Account</h1>
<form action="http://localhost:8888/AccountAdded.php" method="post">
            
		<input type="text" name="User_ID" placeholder="User ID"></input>

		<input type="text" name="Password" placeholder="Password"></input>
  
    <input type="submit" name="submit" value="Send"></input>

</form>

</body>
</html>

