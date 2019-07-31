
<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "events";
$conn = new mysqli($host, $user, $password, $dbname);
// if ($row->num_rows > 0) {
// while ($row = $result1->fetch_assoc()) {
$venueid = $_SESSION['venueid'];
//if (isset($_POST['Add'])) {



//$_SESSION['venueid'] = $_GET['venueid'];
//  $venueid = $_GET['venueid'];
/* $sql = "SELECT capacity, amount FROM venue where venueid=$venueid";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
        while ($row = $result1->fetch_assoc()) {*/
if (isset($_GET['capacity'])) {
    $capacity = $_GET['capacity'];
}
if (isset($_GET['amount'])) {
    $amount = $_GET['amount'];
}
$sql = "UPDATE venue SET capacity=$capacity, amount=$amount where venueid=$venueid";
if ($conn->query($sql) == TRUE) {
    echo "Details updated.";
    header("Location: venuedit1.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




//}
?>