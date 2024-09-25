<?php

//main connection file for both admin & front end
$servername = "127.0.0.1"; //server
$username = "root"; //username
$password = ""; //passwords
$dbname = "cloud_kitchen";  //database
$port = "3307";
// Create connection


$db = new mysqli($servername, $username, $password, $dbname, $port); // connecting 
// Check connection
if ($db->connect_error) { // Checking connection to DB	
   die("Connection failed: " . $db->connect_error);
}
?>