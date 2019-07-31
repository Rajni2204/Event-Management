
<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "events";
$conn = new mysqli($host, $user, $password, $dbname);

   // $venue = $_POST['venue'];
    $venueid = $_GET['venueid'];
    $sql = "UPDATE venue SET status= 1  WHERE venueid =$venueid";  

if ($conn->query($sql) == TRUE) {
    echo "Enabled successfully .";
    //header("Location: packagedit.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}






?>

























