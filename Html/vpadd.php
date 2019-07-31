<?php
//include('config.php');

// Start the session
session_start();
//Establish a connection with the DB
$host = "localhost";
$user = "root";
$password = "";
$dbname = "events";
$conn = new mysqli($host, $user, $password, $dbname);

//$username = $_POST["username"];


//$sql = "SELECT id FROM users1 WHERE username='$username'";
//$result = $conn->query($sql);





if(isset($_POST['add']))
{
    $preffered=$_POST['preffered'];
$venueid=$_POST['venueid'];
//$venue=$_POST['venue'];
    $sql="INSERT INTO preffered(preffered,venueid) VALUES('$preffered',$venueid)";
    $sq=$conn->query($sql);
    if($sq == TRUE)
    {
        echo "<p> Added Successfully</p>";
    }
    else 
        {
            echo "something went wrong";
        }
}




  ?>
