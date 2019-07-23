<?php include('config.php');?>
<?php

    // index.php
    session_start();
    
    $username = $_SESSION['username'];
    $password = $_SESSION["password"];
    $sql = "SELECT username, email, phone  FROM users1 WHERE username = '".$_SESSION['username']."'";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
 <!-- Save username and profile picture-->   
<!-- <link rel="stylesheet" type="text/css" href="css/welcome_php.css">-->


<div class="container">
    <div class="row">
        <div class="col-md-7 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center> <h4 >User Profile</h4></center>

               </div>
                   
                       
  
              
<div class="col-sm-5 col-xs-6 tital " >Name</div><div class="col-sm-7 col-xs-6 "><?php echo $row ['username']; ?></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>


<div class="col-sm-5 col-xs-6 tital " >email</div><div class="col-sm-7"><?php echo $row ['email']; ?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>


<div class="col-sm-5 col-xs-6 tital " >phone</div><div class="col-sm-7"><?php echo $row ['phone']; ?></div>
<div class="clearfix"></div>
<div class="bot-border"></div>


<center><a href="update_userinfo.php" class="btn" role="button">Update</a></center>


<?php
        }
        }
        ?>



 