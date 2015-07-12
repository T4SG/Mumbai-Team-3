

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
$school_id=$_POST['school_id'];
$report=$_POST['report'];
$school_name=$_POST['school_name'];
$school_address=$_POST['school_address'];
$region=$_POST['region'];
$country=$_POST['country'];
$number_of_girls=$_POST['number_of_girls'];
$number_of_boys=$_POST['number_of_boys'];
$number_of_teachers=$_POST['number_of_teachers'];

$literacy_rate=$_POST['literacy_rate'];
$computer_literacy=$_POST['computer_literacy'];
$average_attendance=$_POST['average_attendance'];

$books=$_POST['books'];
$computers=$_POST['computers'];
$smartphones=$_POST['smartphones'];
$students=$_POST['students'];
$literacy_rate_before=$_POST['literacy_rate_before'];
$primary=$_POST['primary'];
$secondary=$_POST['secondary'];
$dropouts=$_POST['dropouts'];
$area=$_POST['area'];

$sql = "INSERT INTO school".
       "(school_id,school_name,address,date_of_entry,region,country,no_of_girls,no_of_boys,no_of_teachers,literacy_rate,computer_literacy,attendance,no_of_books,no_of_computers,no_of_smartphones,past_no_of_students,past_literacy_rate,primary_total,secondary_total,dropouts,area) ".
       "VALUES ('$school_id','$school_name','$school_address','$report','$region','$country','$number_of_girls','$number_of_boys','$number_of_teachers','$litercay_rate','$computer_literacy','$average_attendance','$books','$computers','$smartphones','$students','$literacy_rate_before','$primary','$secondary','$dropouts','$area')";

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

