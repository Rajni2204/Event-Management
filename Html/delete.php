<?php
// Start the session
session_start();
$id = $_SESSION["id"]; //Session variable Teacher_ID retrieved
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Delete
    </title>
</head>

<body>
    <?php
    //Establish a connection with the DB
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "events";
    $conn = new mysqli($host, $user, $password, $dbname);
    //DELETE existing record in the teachers table in the database
    $sql = "DELETE FROM `users1` WHERE `id` = $id";
    if ($conn->query($sql) == TRUE) {
        echo "Account deleted.";
        header("Location: mdetails.php");
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    ?>
</body>

</html>