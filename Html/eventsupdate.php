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
    //  $pid=$_GET['pid'];
    $_SESSION['pid'] = $_GET['pid'];
    $pid = $_GET['pid'];
   
    $sql = "SELECT *FROM preffered where pid=$pid";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

             ?>

            <table style="margign-left:30%;" width="1010" ; border="2" cellpadding="2" cellspacing='1' id="mytable">
                <form action="eventsedit1.php">
                    <tr bgcolor="#2ECCFA">
                        <td>Events Name:</td>
                        <td>Venue id:</td>
                    

                    </tr>

                    <tr>
                    
                    
                        <td><input type="text" name="preffered" value="<?php echo $row['preffered']; ?>" ></td>
                        <td><?php echo $row['venueid']?> </td>
                        <td> <button class="button0" name="Add">Save</button>
                            <button class="button0" name="delete">Cancel</button>
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