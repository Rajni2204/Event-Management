<?php
 

include('config.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM users1 WHERE username=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['ID'];
           // echo '<p class="success">Congratulations, you are logged in!</p>';
           header("location:mdetails.html"); 
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
 

?>
<?php
# Prepare the SELECT Query
  $selectSQL = $connection->prepare('SELECT * FROM user1');
  $selectSQL->execute();
  $selectRes = $selectSQL->fetch(PDO::FETCH_ASSOC);
 # Execute the SELECT Query
  if( !( $selectRes)
  {
    echo '<p class="error">Username password combination is wrong!</p>';
  }else{
    ?>
    <html>
    <head><title></title></head>
    <body>
<table border="2">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
     
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['usernamme']}</td><td>{$row['email']}</td><td>{$row['phone']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
</body>
</html>
    <?php
  }

?>
