<?php 

$server = "localhost";
$username = "root";
$password = "";
$dbname = "friendFinder";

$connection = new mysqli($server, $username, $password, $dbname);

if($connection->connect_error){
	die("Failed");
}

?>