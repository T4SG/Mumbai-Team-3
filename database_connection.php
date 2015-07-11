<?php

DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD', 'code4good');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'impact');


// Make the connection:
$dbc =mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,
    DATABASE_NAME);
if (!$dbc) {
    echo "<br>connection error<br>";
}
else {
	echo "<br>data has been inserted<br>";
	//$_session['username']=$uname;
				//	header('Location: ../trial2.html');
}

?>