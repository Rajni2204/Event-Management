<?php
include('config.php');
session_start();


if(isset($_POST['add'])) {

    $date = $_POST['date'];
    $city = $_POST['venue'];
    $city = $_POST['city'];
    $event = $_POST['event'];
    
        $query = $connection->prepare("INSERT INTO venue(venue,date,city,event) VALUES (:venue,:date,:city,:event)");
        $query->bindParam("date", $date, PDO::PARAM_STR);
        $query->bindParam("venue", $venue, PDO::PARAM_STR);
        $query->bindParam("city", $city, PDO::PARAM_STR);
        $query->bindParam("event", $event, PDO::PARAM_STR);
       
        $result = $query->execute();
        if ($result) {
            echo '<p class="success">venue is added successfully!</p>';
           //header("location:login.html"); 
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
        
    }


?>