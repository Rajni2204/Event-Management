<?php
include('config.php');
session_start();


if(isset($_POST['search'])) {

$date = $_POST['date'];
$venue = $_POST['venue'];
$city = $_POST['city'];
$event = $_POST['event'];


$sql = $connection->prepare("SELECT venue FROM booking WHERE 
date=:date AND event=:event ");
 $sql->bindParam("date", $date, PDO::PARAM_STR);
 $sql->bindParam("event", $event, PDO::PARAM_STR);
 
 $sql->execute();
 
echo "<table>";
foreach ($dbo->query($sql) as $row) {
echo "<tr ><td>$row[venue]</td></tr>";
}
echo "</table>";
}
?>
