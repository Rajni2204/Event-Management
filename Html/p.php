<?php
$con=mysqli_connect("localhost","root","","events");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  $id=$_POST['id'];
  
  $myquery="SELECT username,email,phone FROM user1 WHERE id='$id'";
  
  $fetched=mysqli_query($myquery);
  
  while($rowvalue=mysqli_fetch_array($fetched))
  {
      $username=$rowvalue['username'];
      $email=$rowvalue['email'];
      $phone=$rowvalue['phone'];
  }
  mysql_close($con);
?>