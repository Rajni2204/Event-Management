<!DOCTYPE html>
<html>

<head>


    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css\adprofile.css">
    <script src="js\datejs.js"></script>
    <script src="js\search.js"></script>
    <script src="js\searchval.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css\mainstyle.css">
    <link rel="stylesheet" href="css\adsidecss.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.common-material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.mobile.min.css" />

    <script src="https://kendo.cdn.telerik.com/2019.2.619/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2019.2.619/js/kendo.all.min.js"></script>



</head>

<body>
<?php

//Establish a connection with the DB
$host = "localhost";
$user = "root";
$password = "";
$dbname = "events";
$conn = new mysqli($host, $user, $password, $dbname);
?>
    <div class="sidebar">

        <a href="mdetails.html"><!--<i
                        class='fas fa-landmark'></i>-->&nbsp; My Profile</a>
        <a class="active" href="book11.php"><!--<i
                        class='fas fa-edit'>--></i>&nbsp;Book An Event</a>
        <a href="mbookh.html"><!--<i
                        class='fas fa-eye'></i>-->&nbsp;Cancel An Event</a>
        <a href="mfeedback.html">&nbsp;My History</a>
    </div>


    <ul class="nav navbar-nav navbar-right ml-auto">
        <li class="nav-item dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="images\adminim.png" class="avatar" alt="Avatar"> My Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="logout.php" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></li>
            </ul>
        </li>
        <li class="nav-item"><a href="#" class="nav-link notifications"><i class="fa fa-bell-o"></i><span class="badge"></span></a></li>
        <li class="nav-item"><a href="#" class="nav-link messages"><i class="fa fa-envelope-o"></i><span class="badge"></span></a></li>

    </ul>
        <fieldset>
            <div id="example">


                <form name="myForm" action="searchvenue.php" method="post" onsubmit="validateForm()">
                    <h3>Book An Event</h3>

                    <div class="row">
                        <div class="column">
                            <h4><label for="event">Choose event Type:</label></h4>
                            <select name='preffered'>
                            <?php

                            $result = $conn->query("SELECT preffered from preffered");


                            while ($row = $result->fetch_assoc()) {

                                unset($preffered);
                                $preffered = $row['preffered'];
                               //$venue = $row['venue']; 
                                echo '<option value="' .$preffered. '">'. $preffered.'</option>';
                            }

                            echo "</select>";

                            ?>
                        </select>     </div>
                        <div class="column ">
                            <h4><label for="city ">Choose City:</label></h4>
                            <select name='city'>
                            <?php

                            $result = $conn->query("SELECT city from city");


                            while ($row = $result->fetch_assoc()) {

                                unset($city);
                                $city = $row['city'];
                               //$venue = $row['venue']; 
                                echo '<option value="' .$city. '">'.$city.'</option>';
                            }

                            echo "</select>";

                            ?>
                        </select>  
                                       </div>

                        <br>
                        <div class="column ">


                            <button class="button0 " name="submit " type="submit">Search</button>
                            <button class="button1 " type="submit ">Cancel</button>
                        </div>
                </form>


                </div>




        </fieldset>
    
</body>

</html>