<?php
include('config.php');
session_start();


if(isset($_POST['add'])) {

    $venue = $_POST['venue'];
  
    $address = $_POST['address'];
    $capacity = $_POST['capacity'];
   
    $amount = $_POST['amount'];
  
     
        $query = $connection->prepare("INSERT INTO venue(venue,address,capacity,amount) VALUES (:venue,:address,:capacity,:amount)");
        $query->bindParam("venue", $venue, PDO::PARAM_STR);
        $query->bindParam("address", $address, PDO::PARAM_STR);
        $query->bindParam("capacity", $capacity, PDO::PARAM_STR);
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
