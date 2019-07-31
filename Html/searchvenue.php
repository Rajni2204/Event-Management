<?php

$url = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_connect($url, $username, $password, "events");
if (!$conn) {
    die('Could not Connect My Sql:' . mysql_error());
   
// Start the session
session_start();

}

?>
<!DOCTYPE html>
<html>

<head>
    <title> Retrive data</title>
    <link rel="stylesheet" href="css\register.css">
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css\indexcss.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.common-material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.mobile.min.css" />
<link rel="stylesheet" href="css/mainstyle.css">
<script src="https://kendo.cdn.telerik.com/2019.2.619/js/jquery.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2019.2.619/js/kendo.all.min.js"></script>

<body>
<div class="w3-row-padding w3-padding-64 w3-theme-l2" id="mabout">
    
    <?php
 
 //$_SESSION['dept']=$_POST['dept'];
    ?>
    <!--<img class="background" src="images\v.jpg" width="300" height="300">-->
    <fieldset class="fieldset3">           
    <h3>Venue Availablity Details</h3>
    <?php
    $_SESSION['preffered']=$_POST['preffered'];
    $_SESSION['city']=$_POST['city'];
    //$_SESSION['venueid']=$_POST['venueid'];
   // $_SESSION['venue']=$_POST['venue'];
   // $sea=mysqli_query($conn,"SELECT COUNT(isAvailbale) AS NumberOfseat FROM seat where isAvailbale=1");
  // if(isset($_POST["preffered"]))
   //{
   $preffered = $_POST["preffered"];
  // }
  // if(isset($_POST["city"]))
//{
   $city = $_POST["city"];
//}
   $result =  mysqli_query($conn, "SELECT venue.venue FROM venue LEFT JOIN city ON venue.venueid=city.venueid  JOIN preffered ON city.venueid=preffered.venueid WHERE preffered.preffered='$preffered' AND city.city='$city' AND venue.status=1");
   
	
    if (mysqli_num_rows($result) > 0) {
        ?>
        <br><br><br>
        <table width="400"  cellpadding="2" cellspacing='1' id="mytable">
           
            <?php
         
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                      <tr>




</tr>
                    <tr>
                        <td><b><?php echo $row["venue"] ?></b></td>
                        <td> <button class="button0 " name="submit " onclick="window.location.href='venuefbook.php'" type="submit ">Book Venue</button>
                   </td>
                        <!--<td>  <a href="bookvenue.php?venueid=/*?php echo $row['venueid'];?>">Book Now</a>
                   </td>-->
                   <td>
                    </tr>

                    <?php
                    $i++;
                }
            
            ?>
        
    <?php
    } else {
        echo "Sorry!!!Requested Venue is Not available..... ";
        ?><tr> <td> <button class="button0 " name="submit " onclick="window.location.href='book11.php'" type="submit ">Book Another Venue</button>
                   </td></tr>
   <?php }

    ?>
   
                   </table>
                   </fieldset>
</div>
    
</body>
</html>