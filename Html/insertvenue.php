<?php
include('config.php');

// Start the session
session_start();
//Establish a connection with the DB
$host = "localhost";
$user = "root";
$password = "";
$dbname = "events";
$conn = new mysqli($host, $user, $password, $dbname);


if(isset($_POST["venue"]))
{
$venue = $_POST["venue"];
}

$sql = "SELECT venueid FROM venue WHERE venue='$venue'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $_SESSION["venueid"] = $row["venueid"];  //Session variable id set, to be used across all pages
        header("location:bookvenue.php"); 
    }
} else {
    echo "Unregistered.";
}




/*

if(isset($_POST['submit'])) {

    $date = $_POST['date'];
  
    
     
        $query = $connection->prepare("INSERT INTO booked(date) VALUES (:date)");
        $query->bindParam("date", $date, PDO::PARAM_STR);
        
        $result = $query->execute();
        if ($result) {
           // echo '<p class="success">venue is added successfully!</p>';
           //header("location:login.html"); 
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
        
    }*/


?>