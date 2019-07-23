<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"events");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
$result1 = mysqli_query($conn,"SELECT username,email,phone FROM user1");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">



<?php
if (mysqli_num_rows($result1) > 0) {
?>
<br><br><br>
    <table width="400" border="2" cellpadding="2" cellspacing='1' id="mytable">
           <tr bgcolor="#2ECCFA">
 
    <td>username</td>
    <td>Email</td>
    <td>phone No</td>
  

  </tr>
<?php

while($row1 = mysqli_fetch_array($result1)) {
?>
<tr>


       <td><?php echo $row1["username"] ?></td>
    <td><?php echo $row1["email"] ?></td>
    <td><?php echo $row1["phone"] ?></td>
</tr>

<?php

}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>