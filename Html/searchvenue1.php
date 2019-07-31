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

<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.common-material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.mobile.min.css" />
<link rel="stylesheet" href="css/mainstyle.css">
<script src="https://kendo.cdn.telerik.com/2019.2.619/js/jquery.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2019.2.619/js/kendo.all.min.js"></script>

<body>

    
    <?php
 
 //$_SESSION['dept']=$_POST['dept'];
    ?>
    <!--<img class="background" src="images\v.jpg" width="300" height="300">-->
              
    <h3>Venue Availablity Details</h3>
    <?php
     // $_SESSION['preffered']=$_POST['preffered'];
    $_SESSION['date']=$_POST['date'];
   
    //$_SESSION['venueid']=$_POST['venueid'];
   // $_SESSION['venue']=$_POST['venue'];
   // $sea=mysqli_query($conn,"SELECT COUNT(isAvailbale) AS NumberOfseat FROM seat where isAvailbale=1");
  // if(isset($_POST["preffered"]))
   //{
   $preffered = $_POST["preffered"];
  // $venueid = $_POST["venueid"];
  // }
  // if(isset($_POST["city"]))
//{
   $city = $_POST["city"];
//}
   $result =  mysqli_query($conn, "SELECT venue.venueid, venue.venue, preffered.preffered, city.city FROM venue LEFT JOIN city ON venue.venueid=city.venueid  JOIN preffered ON city.venueid=preffered.venueid WHERE preffered.preffered='$preffered' AND city.city='$city' AND venue.status=1");
   
	
    if (mysqli_num_rows($result) > 0) {
        ?>
        <br><br><br>
        <table width="400" border="2" cellpadding="2" cellspacing='1' id="mytable">
        <tr>

<td> Venue Name </td>
<td> Event Type </td>
<td> Venue City </td>


            <?php
         
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                      <tr>




</tr>
                    <tr>
                        <td><b><?php echo $row["venue"] ?></b></td>
                        <td><b><?php echo $row["preffered"] ?></b></td>
                        <td><b><?php echo $row["city"] ?></b></td>
                   
                        <td><h4>Select date:</h4>
                        <input type="date" data-date="" data-date-format="YYYY MMMM DD" name="date">
  
                    
                       
                  
     
<a href="venuefbook.php?venueid=<?php echo $row['venueid'];?>">Book</a>
                  
                      </td>
                   
                    </tr>

                    <?php
                    $i++;
                }
            
            ?>
        
    <?php
    } else {
        echo "Sorry!!!Requested Venue is Not available..... ";
        ?><tr> <td> <button class="button0 " name="submit " onclick="window.location.href='mbook.php'" type="submit ">Book Another Venue</button>
                   </td></tr>
   <?php }

    ?>
   
                   </table>
                  
                   <script>
     
     $(document).ready(function() {
         // create DatePicker from input HTML element
         $("#datepicker").kendoDatePicker({
value : new Date(),
dateInput: true
        
     }); 
    });
     </script>
    
</body>
</html>