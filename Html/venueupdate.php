<html>

<head>
</head>

<body>



    <?php
    session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "events";
    $conn = new mysqli($host, $user, $password, $dbname);
    //if(isset($_POST['edit'])) { 
    //  $venueid=$_GET['venueid'];
    $_SESSION['venueid'] = $_GET['venueid'];
    $venueid = $_GET['venueid'];
    $sql = "SELECT * FROM venue where venueid=$venueid";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

             ?>

            <table style="margign-left:30%;" width="1010" ; border="2" cellpadding="2" cellspacing='1' id="mytable">
                <form action="venuedit.php">
                    <tr bgcolor="#2ECCFA">
                        <td>Venue Name:</td>
                        <td>Venue Address:</td>
                        <td>Enter Capacity to update:</td>
                        <td>Enter Rent to update:</td>
                    

                    </tr>

                    <tr>
                    
                    <td><?php echo $row['venue']?> </td>
            <td><?php echo $row['address']?></td>
                        <td><input type="text" name="capacity" value="<?php echo $row['capacity']; ?>"></td>
                        <td><input type="text" name="amount" value="<?php echo $row['amount']; ?>" ></td>
                        <td> <button class="button0" name="Add">Add</button>
                            <button class="button0" name="delete">Delete</button>
                        </td>
                    </tr>
                </form>
            </table>


        <?php
        }
    }
    ?>









</body>

</html>