
<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "events";
$conn = new mysqli($host, $user, $password, $dbname);
// if ($row->num_rows > 0) {
// while ($row = $result1->fetch_assoc()) {
$pid = $_SESSION['pid'];




//$_SESSION['pid'] = $_GET['pid'];
//  $pid = $_GET['pid'];
/* $sql = "SELECT capacity, preffered FROM preffered where pid=$pid";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
        while ($row = $result1->fetch_assoc()) {*/
if(isset($_GET['Add']))
{

    $preffered = $_GET['preffered'];
       
$sql = "UPDATE preffered SET preffered='$preffered' where pid=$pid";
if ($conn->query($sql) == TRUE) {
    echo "Details updated.";
    header("Location: eventsedit.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}



//}
?>