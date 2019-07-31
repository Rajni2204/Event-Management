<?php
include('config.php');
session_start();




    $package = $_POST['package'];
  
   
    $amount = $_POST['amount'];
     
        $query = $connection->prepare("INSERT INTO package(package,amount) VALUES (:package,:amount)");
        $query->bindParam("package", $package, PDO::PARAM_STR);
       
        $query->bindParam("amount", $amount, PDO::PARAM_STR);
       
        $result = $query->execute();
        if ($result) {
            echo '<p class="success">Facility is added successfully!</p>';
           //header("location:login.html"); 
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
        
    

  ?>
