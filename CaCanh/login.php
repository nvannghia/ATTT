<?php 
  require "components/header.php";
  session_start();
  if(isset($_POST['register'])){
    header("Location: index.php");
  }
  if(isset($_POST['login']) ){
    $uname = $_POST['uname'] ?? '';
    $pwd = $_POST['psw'] ?? '';

    $sql = "SELECT * from attt.customer;";
  if($connection != null){
    try{
        $stm = $connection->prepare($sql);
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $accounts = $stm->fetchALL();
        foreach($accounts as $acount){
          $username = $acount['username'];
          $password = $acount['password'];
          if($username == $uname && $password == $pwd)
          {
            $_SESSION['username'] = $username;
            header("Location:index.php");
            break;
          }
        }
        echo "<p class='text-danger'>Incorrected account!</p>";
    }catch(PDOException $e){
      echo "Connection failed! Error:".$e->getMessage();
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<title>Đăng nhập</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
  <div class="imgcontainer">
    <img src="Images/logo.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name ="login">Login</button>
    <button type="submit" name ="register">Register</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" name="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>


