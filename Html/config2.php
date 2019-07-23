<?php

/* database configuration */

$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'events';

$conn = mysqli_connect($servername,$username,$password,$db) ;

if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>