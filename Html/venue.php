<?php
include('config.php');
session_start();


if(isset($_POST['add'])) {

    $venue = $_POST['venue'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $capacity = $_POST['capacity'];
    $preffered = $_POST['preffered'];
    $amount = $_POST['amount'];
     
        $query = $connection->prepare("INSERT INTO venue(venue,city,address,capacity,preffered,amount) VALUES (:venue,:city,:address,:capacity,:preffered,:amount)");
        $query->bindParam("venue", $venue, PDO::PARAM_STR);
        $query->bindParam("city", $city, PDO::PARAM_STR);
        $query->bindParam("address", $address, PDO::PARAM_STR);
        $query->bindParam("capacity", $capacity, PDO::PARAM_STR);
        $query->bindParam("preffered", $preffered, PDO::PARAM_STR);
        $query->bindParam("amount", $amount, PDO::PARAM_STR);
       
        $result = $query->execute();
        if ($result) {
            echo '<p class="success">venue is added successfully!</p>';
           //header("location:login.html"); 
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
        
    }


?>