<?php
// Start the session
session_start();
$tid = $_SESSION["username"] //Session variable Teacher_ID retrieved
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Personal Details</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS-->
    
</head>

<body>
    <div class="container">
        <h1>Your Personal Details</h1>
        <?php
        //Establish a connection with the DB
        include('config.php');
        ?>
        <!-- Have to collect this data from ..\Teacher Sign Up\signup.php OR Teacher Database -->
        <table>
            <tr>
                <td><label>Name:</label></td>

                <td>
                    <?php
                    $sql = "SELECT Name FROM teachers WHERE Teacher_ID=$tid";
                    $result = $connection->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo $row["Name"];
                        }
                    } else {
                        echo "Unregistered.";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td><label>Teacher ID:</label></td>
                <td>
                    <?php
                    $sql = "SELECT Teacher_ID FROM teachers WHERE Teacher_ID=$tid";
                    $result = $connection->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo $row["Teacher_ID"];
                        }
                    } else {
                        echo "Unregistered.";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <?php
                    $sql = "SELECT Gender FROM teachers WHERE Teacher_ID=$tid";
                    $result = $connection->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo $row["Gender"];
                        }
                    } else {
                        echo "Unregistered.";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td><label>Date of Birth:</label></td>
                <td>
                    <?php
                    $sql = "SELECT DOB FROM teachers WHERE Teacher_ID=$tid";
                    $result = $connection->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo $row["DOB"];
                        }
                    } else {
                        echo "Unregistered.";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td><label>Subject:</label></td>
                <td>
                    <?php
                    $sql = "SELECT Subject_ID FROM teachers WHERE Teacher_ID= $tid";
                    $result = $connection->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo $row["Subject_ID"];
                        }
                    } else {
                        echo "Unregistered.";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td><label>Email:</label></td>
                <td>
                    <?php
                    $sql = "SELECT Email FROM teachers WHERE Teacher_ID=$tid";
                    $result = $connection->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo $row["Email"];
                        }
                    } else {
                        echo "Unregistered.";
                    }
                    ?>
                </td>
            </tr>
        </table>
        <ul type="none">
            <li>
                <button type="button" class="btn" data-toggle="modal" data-target="#Edit">
                    Edit Your Details
                </button>
            </li>
            <li><a href="delete.php" onclick="alert('Are you sure you want to delete your account? You will also be logged out.');">Delete Your Account</a></li>
        </ul>


        <!-- Trigger the EDIT modal with a button -->

        <!-- Modal -->
        <div class="modal fade" id="Edit" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">&nbsp;Edit Your Details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="update.php" method="POST">
                        <div class="modal-body">
                            <table>
                                <tr>
                                    <td><label for="name">Name :</label></td>
                                    <td><input type="text" name="Name" id="name" value="<?php
                                                                                        $sql = "SELECT Name FROM teachers WHERE Teacher_ID=$tid";
                                                                                        $result = $connection->query($sql);

                                                                                        if ($result->num_rows > 0) {
                                                                                            // output data of each row
                                                                                            while ($row = $result->fetch_assoc()) {
                                                                                                echo $row["Name"];
                                                                                            }
                                                                                        } else {
                                                                                            echo "Unregistered.";
                                                                                        }
                                                                                        ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="gender">Gender : </label></td>
                                    <td><input type="text" name="Gender" id="gender" value="<?php
                                                                                            $sql = "SELECT Gender FROM teachers WHERE Teacher_ID=$tid";
                                                                                            $result = $connection->query($sql);

                                                                                            if ($result->num_rows > 0) {
                                                                                                // output data of each row
                                                                                                while ($row = $result->fetch_assoc()) {
                                                                                                    echo $row["Gender"];
                                                                                                }
                                                                                            } else {
                                                                                                echo "Unregistered.";
                                                                                            }
                                                                                            ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="DOB">Date of Birth : </label></td>
                                    <td><input type="date" name="DOB" id="DOB" value="<?php
                                                                                        $sql = "SELECT DOB FROM teachers WHERE Teacher_ID=$tid";
                                                                                        $result = $connection->query($sql);

                                                                                        if ($result->num_rows > 0) {
                                                                                            // output data of each row
                                                                                            while ($row = $result->fetch_assoc()) {
                                                                                                echo $row["DOB"];
                                                                                            }
                                                                                        } else {
                                                                                            echo "Unregistered.";
                                                                                        }
                                                                                        ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="subj">Subject ID : </label></td>
                                    <td><input type="number" name="Subj" id="subj" value="<?php
                                                                                            $sql = "SELECT Subject_ID FROM teachers WHERE Teacher_ID=$tid";
                                                                                            $result = $connection->query($sql);

                                                                                            if ($result->num_rows > 0) {
                                                                                                // output data of each row
                                                                                                while ($row = $result->fetch_assoc()) {
                                                                                                    echo $row["Subject_ID"];
                                                                                                }
                                                                                            } else {
                                                                                                echo "Unregistered.";
                                                                                            }
                                                                                            ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="email">Email : </label></td>
                                    <td><input type="email" name="Email" id="email" value="<?php
                                                                                            $sql = "SELECT Email FROM teachers WHERE Teacher_ID=$tid";
                                                                                            $result = $connection->query($sql);

                                                                                            if ($result->num_rows > 0) {
                                                                                                // output data of each row
                                                                                                while ($row = $result->fetch_assoc()) {
                                                                                                    echo $row["Email"];
                                                                                                }
                                                                                            } else {
                                                                                                echo "Unregistered.";
                                                                                            }
                                                                                            ?>">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn">Save Changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <?php
    $connection->close();
    ?>

    <script src="..\..\JavaScript\myScript.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>