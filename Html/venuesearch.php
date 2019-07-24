<?php


// Start the session
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "events";
$conn = new mysqli($host, $user, $password, $dbname);
?>
<!DOCTYPE html>
<html>

<head>
    <title> Retrive data</title>
  
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.common-material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.mobile.min.css" />

<script src="https://kendo.cdn.telerik.com/2019.2.619/js/jquery.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2019.2.619/js/kendo.all.min.js"></script>

<body>
    
<h1>My Details</h1>
                    <?php
                    if(isset($_POST["preffered"]))
                    {
                        $preffered=$_POST["preffered"];
                    }
                    if(isset($_POST["city"]))
                    {
                        $city=$_POST["city"];
                    }
                    $sql = "SELECT venue.venue FROM venue LEFT JOIN city ON venue.venueid=city.venueid WHERE venue.preffered='$preffered' AND city.city='$city' AND (SELECT venueid FROM booked WHERE isavailable = 0)";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>Venue Name:</td><td>";
                            echo $row["venue"];
                           
                        }
                    } else {
                        echo "Unregistered user. Sign Up first.";
                    }
                    ?>
              
   
   
  
</body>
</html>