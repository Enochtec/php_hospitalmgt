<?php
$dbuser="root";
$dbpass="";
$host="localhost";
$db="hmisphp";
$mysqli=new mysqli($host,$dbuser, $dbpass, $db);
echo "Host: $host, User: $dbuser, Password: $dbpass, Database: $db";
// if (function_exists('mysqli_connect')) {
//     echo "mysqli is enabled!";
// } else {
//     echo "mysqli is not enabled";
// }
?>
