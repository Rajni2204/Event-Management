<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"airline1");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
$result = mysqli_query($conn,"SELECT * FROM addfl");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <link rel="stylesheet" href="css\register.css">
 </head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">



<?php
if (mysqli_num_rows($result) > 0) {
?>
<br><br><br>
    <table width="400" border="2" cellpadding="2" cellspacing='1' id="mytable">
           <tr bgcolor="#2ECCFA">
 
    <td>username</td>
    <td>Email</td>
    <td>phone No</td>
  

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>


       <td><?php echo $row["username"] ?></td>
    <td><?php echo $row["email"] ?></td>
    <td><?php echo $row["phone"] ?></td>
</tr>

<?php
$i++;
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