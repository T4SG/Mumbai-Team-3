

<?php
/*
if(!isset($_SESSION)) 
{ 
	session_start(); 
} */

//$servername = "ec2-54-88-189-121.compute-1.amazonaws.com";
//$servername = "ec2-52-69-94-146.ap-northeast-1.compute.amazonaws.com";
$servername="localhost";
$username = "root";
$password = 'code4good';
$dbname='impact';

// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);
// Check connection
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$fname=$_POST['firstname'];
$institute=$_POST['institute'];
$uname=$_POST['username'];
$pass=$_POST['password'];
$email=$_POST['email'];

$sql = "INSERT INTO login ".
       "(name,institute, user_id,password,email) ".
       "VALUES ('$fname','$institute','$uname','$pass','$email')";

mysql_select_db('impact');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);

/*

echo "firstname";
$sql = "INSERT INTO `login` (`name`,`institute`, `user_id`,`password`,`email`)
       VALUES ( "","", "XYZ2", "","")";      

if(!mysql_query($sql,$conn))
{
	die("cannot enter data");
}
else
{
	echo "<br>data has been inserted<br>";
	//$_session['username']=$uname;
					header('Location: index.php');	
}*/
?>

