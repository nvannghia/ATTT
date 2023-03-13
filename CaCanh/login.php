<?php
session_start();
require 'configuration/database.php';
include "ceasar.php";
if (isset($_POST['login'])) {
  $uname = $_POST['uname'] ?? '';
  $pwd = $_POST['psw'] ?? '';

  $sql = " SELECT username,password FROM attt.customer;";
  if ($connection != null) {
    try {
      $stm = $connection->prepare($sql);
      $stm->execute();
      $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
      $accounts = $stm->fetchALL();
      foreach ($accounts as $acount) {
        $username = $acount['username'];
        $password = ceasar_decryption($acount['password']);
        if ($username == $uname && $password == $pwd) {
          $_SESSION['username'] = $username;
          header("Location:index.php"); 
          break;
        }
      }
      echo "<p style='color:red; font-weight:700''>Incorrected account!</p>";
    } catch (PDOException $e) {
      echo "Connection failed! Error:" . $e->getMessage();
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Đăng nhập</title>
</head>

<body style="display: flex;justify-content: center;">
<div style="width:50%;">
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="imgcontainer">
      <img src="Images/logo.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" name="login">Login</button>
      Don't have account? <a href="register.php">Sign up here</a> <br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn" name="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

</body>

</html>