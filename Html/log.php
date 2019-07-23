<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"events");
if(!$conn)
{
  die('could not connect my sql:'.mysql_error());
}
$id=$_GET['id'];
mysqli_query($conn,"select username ,email,phone from 'user1' where id='$id'" );
header('location:p.php');
?>