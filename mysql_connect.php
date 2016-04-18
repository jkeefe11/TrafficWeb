<?php
 
// Defined as constants so that they can't be changed
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'Jjkkll11!');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'test');
DEFINE ('DB_PORT', '3306');
DEFINE ('DB_SOCKET', '/tmp/mysql.sock');
 
// $dbc will contain a resource link to the database
// @ keeps the error from showing in the browser
 
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT, DB_SOCKET)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
?>
