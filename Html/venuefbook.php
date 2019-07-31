<?php
session_start();
?> 
 
  <?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "events";
  $conn = new mysqli($host, $user, $password, $dbname);
  $venueid=$_GET["venueid"];
  if(isset($_POST["date"]))
  {
  $date=$_POST["date"];
  }
   $sql = "INSERT into booked (venueid,isavailable,date) VALUES ($venueid, '1','$date') where venueid=$venueid";
if ($conn->query($sql) == TRUE) {
    echo "Thanks For venue Booking...";
    header("Location: #");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

   

  

     
?>
      
  
    
