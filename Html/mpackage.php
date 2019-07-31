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
        <a href="madvenue.html">&nbsp; Manage Venues</a>
        <a href="mnbook.php"></i>&nbsp; Manage Events</a>
        <a class="active" href="mpackage.html">&nbsp; Manage Packages</a>
        <a href="mvbook.html">&nbsp; Manage Booking</a>
    </div>
    </div>
    </div>

    <ul class="nav navbar-nav navbar-right ml-auto">
        <li class="nav-item dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="images\adminim.png" class="avatar" alt="Avatar"> Admin <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></li>
            </ul>
        </li>
        <li class="nav-item"><a href="packagedit.php" class="nav-link notifications"><b>View Facility History</b><span class="badge"></span></a></li>
        <li class="nav-item"><a href="#" class="nav-link messages"><i class="fa fa-envelope-o"></i><span class="badge"></span></a></li>

    </ul>
    </div>

    

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
        <a href="#team" class="w3-bar-item w3-button">Team</a>
        <a href="#work" class="w3-bar-item w3-button">Work</a>
        <a href="#pricing" class="w3-bar-item w3-button">Price</a>
        <a href="#contact" class="w3-bar-item w3-button">Contact</a>
        <a href="#" class="w3-bar-item w3-button">Search</a>
    </div>
    </div>
    <?php
    session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "events";
    $conn = new mysqli($host, $user, $password, $dbname);
    ?>
    <fieldset style="width: 100%; background-color: rgba(122, 120, 116, 0.479); margin-left: 15%">
        <h2>Add Packages</h2>
        <form action="insertpackage.php" method="POST">
            <table>
               

                <tr>

                    <td>Select Packages:
                        <select name='package'>
                            <?php

                            $result = $conn->query("SELECT package from package");


                            while ($row = $result->fetch_assoc()) {

                                unset($package);
                                $package = $row['package'];
                               //$venue = $row['venue']; 
                                echo '<option value="' .$package. '">'. $package.'</option>';
                            }

                            echo "</select>"; ?>
                        </select>
                
                    <td>Enter Amount:</td>
                    <td><input type="text" name="amount" placeholder="Enetr package price" id="fd"></td>
                </tr>
                <tr>
                    <td>
                        <button class="button0" name="add" type="submit" style="font-size:17px">Add <i class="material-icons"></i></button>
                        <button class="button1" type="submit">Cancel</button></td>
                </tr>
            </table>
        </form>
    </fieldset>

    

</body>

</html>