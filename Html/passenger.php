<?php
session_start();

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "airline1";
$conn = mysqli_connect($servername, $username, $password, "$dbname");
if (!$conn) {
    die('Could not Connect My Sql:' . mysql_error());
}
if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $Age = $_POST['Age'];
    $address = $_POST['address'];
   
    $sql = "INSERT INTO passenger_detail (name, contact,email,Age,address) 
     VALUES ('$name', '$contact', '$email','$Age','$address')";
 $_SESSION['name'] = $_POST['name'];
 $_SESSION['contact'] = $_POST['contact'];
 $_SESSION['email'] = $_POST['email'];
 $_SESSION['Age'] = $_POST['Age'];
 $_SESSION['address'] = $_POST['address'];
    if (mysqli_query($conn, $sql)) {

        echo "New record created successfully !";
        //header ('Location:fl.php');

        ?>
        <br> <br> <br>
        <table width="400" border="2" cellpadding="2" cellspacing='1' id="mytable">
            <tr bgcolor="#2ECCFA">
                <td>From:</td>
                <td>To :</td>
                <td>DEPT DATE:</td>
                <td>Flight Name:</td>
                <td>Flight No: </td>
            </tr>
            <tr>
                <td>
                    <h3><b> <?php echo  $_SESSION['froml']; ?></b></h3>
                </td>

                <td>
                    <h3><b><?php echo $_SESSION['tol']; ?></b></h3>
                </td>
                <td>

                    <h3> <b><?php echo $_SESSION['dept']; ?></b></h3>
                </td>

                <?php
                $query = "SELECT fname, fno FROM flight_booking where dept='$_SESSION[dept] ' AND froml='$_SESSION[froml] '  AND tol='$_SESSION[tol]'";

                if ($result = mysqli_query($conn, $query)) {

                    /* fetch associative array */
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?><td>
                            <h3><b><?php printf("%s ",$_SESSION= $row["fname"]); ?></b></h3>
                            <h3><b>
                        </td>
                        <td><b><?php
                                printf("%s ",$_SESSION= $row["fno"]); ?></b></h3>
                        </td><?php
                            }

                            /* free result set */
                            mysqli_free_result($result);
                        } ?>
            </tr>
        </table>
        <br><br><br>
        <table width="400" border="2" cellpadding="2" cellspacing='1' id="mytable">
            <tr bgcolor="#2ECCFA">

                <td> Name </td>
                <td> Contact </td>
                <td> Email </td>
                <td> Age </td>
                <td> address</td>

            </tr>
            <tr>
            <?php


            // $row = mysqli_fetch($sql) ;
            $result = mysqli_query($conn, "select * from passenger_detail order by pid desc limit 1 ");
    while ($row = mysqli_fetch_array($result)) {
      echo "<td>&nbsp;&nbsp;" . $row['name'] .
        "</td><td>&nbsp;&nbsp;" . $row['contact'] . "</td><td>&nbsp;&nbsp;"
        . $row['email'] . "</td><td>&nbsp;&nbsp;" . $row['Age']
        . "</td><td>&nbsp;&nbsp;" . $row['address'];
      echo "</td><br />";
    }
  ?>
            </tr>
                   <br><br><br>  
            <?php

            //}

            ?>
        </table>
        <input type="button" value=select name="select"  onclick="window.location.href = 'index.html'"></button>
        <input type="submit" value="confirm"  name ="confirm"></button> <?php
            } else {
                echo "Error: " . $sql . "
" . mysqli_error($conn);
            }


            mysqli_close($conn);
        }
