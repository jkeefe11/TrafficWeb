<?php
session_start();

if(isset($_POST['submit'])){
    
    $data_missing = array();
    
    if(empty($_POST['User_ID'])){

        // Adds name to array
        $data_missing[] = 'User ID';

    } else {

        // Trim white space from the name and store the name
        $User_ID = trim($_POST['User_ID']);
        $_SESSION['user'] = $User_ID;

    }

    if(empty($_POST['Password'])){

        // Adds name to array
        $data_missing[] = 'Password';

    } else {

        // Trim white space from the name and store the name
        $Password = trim($_POST['Password']);

    }
    
    if(empty($data_missing)){
        
        require_once('../mysql_connect.php');

        $salt1 = "jkl11";
        $salt2 = "eh757";
        $token = md5("$salt1$Password$salt2");
        
        $query = "INSERT INTO Accounts (User_ID, Password) VALUES (?,?)";
        
        $stmt = mysqli_prepare($dbc, $query);
        
        mysqli_stmt_bind_param($stmt, "ss", $User_ID, $token);
        
        mysqli_stmt_execute($stmt);
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            
            //echo 'Account Created!';
            mysqli_stmt_close($stmt);
            
        }  else {
            
            echo 'Error Occurred<br />';
            echo mysqli_error();
            
            mysqli_stmt_close($stmt);
            
        }
        
    } else {
        
        echo 'You need to enter the following data<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
            
        }
        
    }  
        mysqli_close($dbc);
}


?>
<html>
<head>
<title>Account Verification</title>
<link rel="stylesheet" text="text/css" href="../CSS/main.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<div class="row">
    <h2>Uptik</h2>
    <ul class="header">
        <li><p>Hello, <?php echo $_SESSION['user']; ?></p></li>

</div>

<h1>Enter your Current Cash</h1>

<form action="http://localhost:8888/EnterInfo.php" method="post">
    
<p>Initial Cash
    <input type="text" name="Init_Cash" placeholder="Initial Cash"></input>
</p>
  
    <input type="submit" name="submit" value="Send"></input>

</form>
</body>
</html>