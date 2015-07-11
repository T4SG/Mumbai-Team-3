<?php

DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD', 'code4good');
DEFINE('DATABASE_HOST', 'ec2-52-69-94-146.ap-northeast-1.compute.amazonaws.com');
DEFINE('DATABASE_NAME', 'impact');
date_default_timezone_set('UTC');

// Make the connection:
$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,
    DATABASE_NAME);
if (!$dbc) {
    trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}

?>