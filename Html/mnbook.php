<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css\adprofile.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css\mainstyle.css">
    <link rel="stylesheet" href="css\adsidecss.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <!-- Collection of nav links, forms, and other content for toggling -->


    <div class="sidebar">
        <a href="madvenue.php">
           &nbsp; Manage Venues</a>
        <a class="active" href="mnbook.php">
           </i>&nbsp; Manage Eventss</a>
        <a href="mpackage.html">
            &nbsp; Manage Packages</a>
        <a href="mvbook.html">
           >&nbsp; Manage Booking</a>
    </div>
   


    <ul class="nav navbar-nav navbar-right ml-auto">
        <li class="nav-item dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="images\adminim.png" class="avatar" alt="Avatar"> Admin <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="logout1.php" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></li>
            </ul>
        </li>
        <li class="nav-item"><a href="eventsedit.php" class="nav-link notifications">&nbsp; Events History<span class="badge"></span></a></li>
        <li class="nav-item"><a href="#" class="nav-link messages"><i class="fa fa-envelope-o"></i><span class="badge"></span></a></li>

    </ul>
  
    
    <body>
    <?php

    //Establish a connection with the DB
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "events";
    $conn = new mysqli($host, $user, $password, $dbname);
    ?>
    
    <form action="vpadd.php" method="POST">
        <fieldset>
            <table align="center">
                        <h1>Add Events</h1>
                <tr>
                    <td>Event Type
                        <select name="preffered">
                            <?php
                            
                            $result1 = $conn->query("SELECT preffered from preffered");


                            while ($row = $result1->fetch_assoc()) {

                                unset($preffered);
                                $preffered = $row['preffered'];
                               //$venue = $row['venue']; 
                                echo '<option value="' . $preffered. '">'. $preffered.'</option>';
                            }

                            echo "</select>";

                            ?>
                        </select></td>
                        
                </tr>
                <tr>
                    <td>Venue
                        <select name='venueid'>
                            <?php

                            $result = $conn->query("SELECT venueid,venue from venue");


                            while ($row = $result->fetch_assoc()) {

                                unset($venueid);
                                $venueid = $row['venueid'];
                               $venue = $row['venue']; 
                                echo '<option value="' . $venueid. '">'. $venue.'</option>';
                            }

                            echo "</select>";

                            ?>
                        </select></td>
                </tr>

                <td>
                    <button class="button0" type="submit" name="add" style="font-size:17px">Add </a></button>
                    <button class="button1" type="submit">Cancel</button></td>
                </tr>
                </form>
              
            </table>
        </fieldset>
                       
   

</body>

</html>