<?php
//session_start();
include 'database_connection.php';

$fname=$_POST['firstname'];
$institute=$_POST['institute'];
$uname=$_POST['username'];
$pass=$_POST['password'];
$email=$_POST['email'];
echo "firstname",$fname;
$sql="INSERT INTO login
       (name, institute, user_id, password, email)
       VALUES ( '$fname', '$institute','$uname' ,'$pass', '$email')";

if(!mysql_query($sql))
{
	die("cannot enter data");
}
else
{
	echo "<br>data has been inserted<br>";
	//$_session['username']=$uname;
					header('Location: index.php');	
}
?>

