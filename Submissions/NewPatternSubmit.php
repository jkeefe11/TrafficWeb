<?php
session_start();
require_once('../mysql_connect.php');

$mDuration = $_POST['mDuration'];
$mLightSequence = $_POST['mLightSequence'];
$mIntersectionName = "Eastern Intersection";
$Editor = "Police";

$query = "INSERT INTO LightStates (mDuration, mLightPattern, mIntersectionName, Editor) VALUES (?,?,?,?)";       
$stmt = mysqli_prepare($dbc, $query);       
mysqli_stmt_bind_param($stmt, "isss", $mDuration, $mLightSequence, $mIntersectionName, $Editor);        
mysqli_stmt_execute($stmt);
$affected_rows = mysqli_stmt_affected_rows($stmt);        
    if($affected_rows == 1){            
        mysqli_stmt_close($stmt);           
    }  else {           
        //echo 'Error Occurred<br />';
        //echo mysqli_error();            
        mysqli_stmt_close($stmt);            
    }

$query2 = "SELECT * FROM LightStates";
$result = mysqli_query($dbc, $query2);
$Lights = array();
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $Lights[] = $row;
    }
}

$json_data = json_encode($Lights);
file_put_contents('LightStates.json', $json_data);

mysqli_close($dbc);
?>