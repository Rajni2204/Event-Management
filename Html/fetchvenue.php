
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
        <a class="active" href="madvenue.html"><!--<i
            class='fas fa-landmark'></i>-->&nbsp; Manage Venues</a>
        <a href="mnbook.html"><!--<i
            class='fas fa-edit'>--></i>&nbsp; Manage Events</a>
        <a href="mpackage.html"><!--<i
            class='fas fa-eye'></i>-->&nbsp; Manage Packages</a>
        <a href="mvbook.html"><!--<i
                class='fas fa-eye'></i>-->&nbsp; Manage Booking</a>
    </div>
    </div>
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
    </div>

    <!--<div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <div class="w3-bar w3-theme-d2 w3-left-align">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
                <a href="malogout.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Logout</a>
            </div>
        </div>-->


    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
        <a href="#team" class="w3-bar-item w3-button">Team</a>
        <a href="#work" class="w3-bar-item w3-button">Work</a>
        <a href="#pricing" class="w3-bar-item w3-button">Price</a>
        <a href="#contact" class="w3-bar-item w3-button">Contact</a>
        <a href="#" class="w3-bar-item w3-button">Search</a>
    </div>
    </div>
    <body>
    <div class="container">
        
    <?php
        //Establish a connection with the DB
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "events";
        $conn = new mysqli($host, $user, $password, $dbname);
        ?>
        <!-- Have to collect this data from Teacher Database -->
        <fieldset>
       
                <h1>Venue Details</h1>
                <?php
                $sql = "SELECT * FROM venue";
                $result = $conn->query($sql);
                ?>
                <table style="margign-left:30%;" width="400"; border="2" cellpadding="2" cellspacing='1'  id="mytable">
        <tr bgcolor="#2ECCFA">
                        <td>Venue Name</td>
                        <td>Address</td>
                        <td>Capacity Of people</td>
                        <td>Venue Rent</td>
                        
                        
                        
        </tr>
                        
                        <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                      ?>
                      <tr> 
                          <td><?php echo $row["venue"] ?></td>
                          <td><?php echo $row["address"] ?></td>
                          <td><?php echo $row["capacity"] ?></td>
                          <td><?php echo $row["amount"] ?></td>
                        
                        
                    </tr>
                    <?php
                        
                    }
                } else {
                    echo "error.";
                }
                ?>
          
         
                </table>
          
                <td>

<button class="button0 " name="add" type="submit " onclick="window.location.href='madvenue.php'" style="font-size:17px ">Add More venue <i class="material-icons "></i></button>
          </td>
        </fieldset>
           </div>
    
    </body>
        <!-- Modal -->
       


</html>