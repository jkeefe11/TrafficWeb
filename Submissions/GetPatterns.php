<?php
session_start();
require_once('../mysql_connect.php');

$query = "SELECT * FROM LightStates";
$result = mysqli_query($dbc, $query);
$Lights = array();
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $Lights[] = $row;
    }
}
$jsonData = json_encode($Lights);
echo $jsonData;
mysqli_close($dbc);
?>