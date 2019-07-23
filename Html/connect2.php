<?php

/* database configuration */

$servername = 'localhost';
$username = 'USERNAME';
$password = 'PASSWORD';
$db = 'DATABASE NAME';

$conn = mysqli_connect($servername,$username,$password,$db) ;

if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>