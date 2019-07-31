
<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "events";
$conn = new mysqli($host, $user, $password, $dbname);
// if ($row->num_rows > 0) {
// while ($row = $result1->fetch_assoc()) {
$packid = $_SESSION['packid'];




//$_SESSION['packid'] = $_GET['packid'];
//  $packid = $_GET['packid'];
/* $sql = "SELECT capacity, amount FROM package where packid=$packid";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
        while ($row = $result1->fetch_assoc()) {*/
if(isset($_GET['Add']))
{

    $amount = $_GET['amount'];
       
$sql = "UPDATE package SET amount=$amount where packid=$packid";
if ($conn->query($sql) == TRUE) {
    echo "Details updated.";
    header("Location: packagedit.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}



//}
?>