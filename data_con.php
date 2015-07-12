<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 

//$servername = "ec2-54-88-189-121.compute-1.amazonaws.com";
//$servername = "ec2-52-69-94-146.ap-northeast-1.compute.amazonaws.com";
$servername="localhost";
$username = "root";
$password = 'code4good';
$dbname='impact';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

?>
