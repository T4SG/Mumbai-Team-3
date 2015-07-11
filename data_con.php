<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 

//$servername = "ec2-54-88-189-121.compute-1.amazonaws.com";
$servername = "ec2-52-69-94-146.ap-northeast-1.compute.amazonaws.com";
$username = "root";
$password = 'code4good';
//$dbname = $_SESSION['db_name'];
$dbname='impact';
//$table= $_SESSION['table_name'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
//mysqli_query($conn,"SET sql_safe_updates=0");

?>
