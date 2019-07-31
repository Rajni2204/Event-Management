<?php
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


    
    <ul class="nav navbar-nav navbar-right ml-auto">
        <li class="nav-item dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="images\adminim.png" class="avatar" alt="Avatar"> My Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></li>
            </ul>
        </li>
        <li class="nav-item"><a href="mnbook.php" class="nav-link notifications"><b>Add Another Events</b><span class="badge"></span></a></li>
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

  <?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "events";
  $conn = new mysqli($host, $user, $password, $dbname);
  ?>
 
  <h1>Facility Details</h1>
  <?php
  $sql = "SELECT * FROM preffered";
 
  $result = $conn->query($sql);
  if ($result->num_rows > 0) 
  {
   
  
  ?>
  <table style="margign-left:30%;" width="1000" ; border="2" cellpadding="2" cellspacing='1' id="mytable">
      <tr bgcolor="#2ECCFA">
          <td>Events Name</td>
         
          <td>Venue id</td>
          <td>Action</td>



      </tr>

      <?php
      $i=0;
      
          while ($row = $result->fetch_assoc()) {
              ?>
              <tr>
                  <td><?php echo $row["preffered"] ?></td>
                  <td><?php echo $row["venueid"] ?></td>
                  <td><a href="eventsupdate.php?pid=<?php echo $row['pid'];?>"><button class="button0">Edit</a></button>
                  <a href="eventsdelete.php?pid=<?php echo $row['pid'];?>"><button class="button1">delete</a></button>
                  
              </td>

              </tr>
             
          <?php
         
        $i++;
    
      }
      ?>
</table>
<?php
       }else {
          echo "error.";
      }
//$conn->close();
      ?>
      
  
    
</body>
</html>