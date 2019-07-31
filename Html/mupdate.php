<?php
// Start the session
session_start();
$id = $_SESSION["id"] //Session variable id retrieved
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

        <a class="active" href="mdetails.html">&nbsp; My Profile</a>
        <a href="book11.html"></i>&nbsp;Book An Event</a>
        <a href="mbookh.html">&nbsp;Cancel An Event</a>
        <a href="mfeedback.html">&nbsp;My History</a>
    </div>
    </div>
    </div>

    <ul class="nav navbar-nav navbar-right ml-auto">
        <li class="nav-item dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="images\adminim.png" class="avatar" alt="Avatar"> My Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></li>
            </ul>
        </li>
        <li class="nav-item"><a href="#" class="nav-link notifications"><i class="fa fa-bell-o"></i><span class="badge"></span></a></li>
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
    <fieldset>
        <form action="update.php" method="POST">
            <table align="center">
<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "events";
$conn = new mysqli($host, $user, $password, $dbname);
$id = $_SESSION["id"];
//$row = mysqli_fetch_array($query);
?>
                <h2 style="text-align: center">My Details</h2>
                <?php
                 $sql = "SELECT email, phone, password FROM users1 WHERE id=$id";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                     while ($row = $result->fetch_assoc()) {
                ?>


                <tr>
                    <td> Email-id</td>
                    <td><input type="text" name="email" value="<?php echo $row['email']; ?>" style="width: 150%"></td>

                </tr>
                <tr>
                    <td> Mobile No</td>
                    <td><input type="text" name="phone" value="<?php echo $row['phone']; ?>"style="width: 150%"></td>
                </tr>
                     <?php
                     }
                    } else {
                        echo "Unregistered user. Sign Up first.";
                    }
                    ?>
                <tr>
                    <td><button class="button0" name="update" type="submit">Update</button>
                        <button class="button1" type="submit">Cancel</button></td>
                </tr>

            </table>
        </form>
    </fieldset>

    


</body>

</html>