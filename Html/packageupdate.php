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
    //  $packid=$_GET['packid'];
    $_SESSION['packid'] = $_GET['packid'];
    $packid = $_GET['packid'];
   
    $sql = "SELECT *FROM package where packid=$packid";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

             ?>

            <table style="margign-left:30%;" width="1010" ; border="2" cellpadding="2" cellspacing='1' id="mytable">
                <form action="packagedit1.php">
                    <tr bgcolor="#2ECCFA">
                        <td>package Name:</td>
                        <td>Enter Rent to update:</td>
                    

                    </tr>

                    <tr>
                    
                    <td><?php echo $row['package']?> </td>
                        <td><input type="text" name="amount" value="<?php echo $row['amount']; ?>" ></td>
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