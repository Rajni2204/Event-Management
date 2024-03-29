<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css\mainstyle.css">
<link rel="text/javascript" href="js\mainjs.js">
<link rel="stylesheet" href="css\book1css.css">

<head>



</head>

<body id="myPage">

  
  
</nav>-->
    <!---------------------------------------------------------------------------------------------------------------------->
    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="mhome.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><i class="fa fa-home w3-margin-right"></i>HOME</a>
            <a href="mabout.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ABOUT</a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-button w3-hide-small w3-hover-white" title="Notifications">OUR SERVICES <i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                    <a href="mwedding.html" class="w3-bar-item w3-button">WEDDING</a>
                    <a href="mbday.html" class="w3-bar-item w3-button">BIRTHDAY PARTIES</a>
                    <a href="manniversary.html" class="w3-bar-item w3-button">ANNIVERSARY EVENTS</a>
                    <a href="mfamily.html" class="w3-bar-item w3-button">GETTOGETHER</a>
                </div>
            </div>

            <a href="mbook.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white ">BOOK AN EVENT</a>
            <a href="maccount.html" class="w3-bar-item w3-button w3-teal ">My BOOK</a>

            <a href="mcontact.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">CONTACT</a>
            <a href="madmin.html" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-white"><i class="fa fa-user"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
        </div>


        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
            <a href="#home" class="w3-bar-item w3-button">home</a>
            <a href="#about" class="w3-bar-item w3-button">about</a>
            <a href="#services" class="w3-bar-item w3-button">our services</a>
            <a href="#bookevent" class="w3-bar-item w3-button">book an event</a>
            <a href="#bookvenue" class="w3-bar-item w3-button">book venue</a>
            <a href="#contact" class="w3-bar-item w3-button">Contact</a>
            <a href="#" class="w3-bar-item w3-button">Search</a>
        </div>
    </div>
    <!---------------------------------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------------------------------->

    <div class="w3-row-padding w3-padding-64 w3-theme-l1" id="mabout">
        <div class="login-form">

            <form action="connect1.php" method="post">

                <h2 style="color: black;" class="text-center">Sign in</h2>
                 <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="login" class="btn btn-success btn-block login-btn">Sign in</button>
                </div>
                <div class="clearfix">
                    <label class="pull-left text-success checkbox-inline"><input type="checkbox"> Remember me</label>
                    <a href="#" class="pull-right text-success">Forgot Password?</a>
                </div>

            </form>
            <div class="hint-text small">Don't have an account? <a href="register.html" class="text-success">Register Now!</a></div>
        </div>
    </div>
    <!---------------------------------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------------------------------->
    <!-- Image of location/map -->
    <img src="images\2.jpg" class="w3-image w3-greyscale-min" style="width:100%;margin-top: 10%">

    <!-- Footer -->
    <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
        <h4>Follow Us</h4>
        <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
        <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
        <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
        <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
        <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Celebrations.com</a></p>

        <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
            <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>
            <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
                    <i class="fa fa-chevron-circle-up"></i></span></a>
        </div>
    </footer>

</body>

</html>