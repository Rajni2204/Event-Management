<?php
// Start the session
session_start();
$id = $_SESSION["id"]; //Session variable Teacher_ID retrieved
//Establish a connection with the DB
$host = "localhost";
$user = "root";
$password = "";
$dbname = "events";
$conn = new mysqli($host, $user, $password, $dbname);
//Retrieve data from previous signup page

$email = $_POST["email"];
$phone = $_POST["phone"];
$sql1 = "SELECT username FROM users1 WHERE id=$id";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>Name:</td><td>";
        echo $row["username"];
    }
} else {
    echo "Unregistered user. Sign Up first.";
}
//UPDATE existing record in the teachers table in the database
$sql = "UPDATE `users1` SET `email`='$email',`phone`='$phone' WHERE `id`=$id";
if ($conn->query($sql) == TRUE) {
    echo "Details updated.";
    header("Location: mdetails.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>