<?php
    require 'configuration/database.php';
    include "ceasar.php";
    $uname = $psw = $phone_number = $address = $email = '';
    if(isset($_POST['register']))
    {
      $uname = str_replace(' ','',$_POST['uname']); 
      $psw = str_replace(' ','',$_POST['psw']); 
      $phone_number = str_replace(' ','',$_POST['numberphone']); 
      $address =str_replace(' ','',$_POST['address']);
      $email = str_replace(' ','',$_POST['email']);
    }
    $validate_success = empty($uname)
                        &&empty($psw)
                        &&empty($phone_number)
                        &&empty($address)
                        &&empty($email);
    if(!$validate_success)
    {
      $sql = "INSERT INTO attt.customer (username,password,phonenumber,address,email) VALUES(?,?,?,?,?)";
      if($connection!= null)
      {
        try {
          $stm = $connection->prepare($sql);
          $stm->bindParam(1,$uname);
          $stm->bindParam(2,ceasar_encode($psw));
          $stm->bindParam(3,$phone_number);
          $stm->bindParam(4,ceasar_encode($address));
          $stm->bindParam(5,$email);
          $stm->execute();
          header("Location: login.php");
        } catch (PDOException $e) {
          echo "<p style='color:red'> Cannot insert feedback in to database".$e->getMessage()."</p>";
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
  <link rel ="stylesheet" href ="style.css">
  <title>Đăng ký</title>
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
      <input type="password" placeholder="Enter Password" name="psw" >

      <label for="phonenumber"><b>Number phone</b></label>
      <input type="text" placeholder="Enter your number phone" name="numberphone" required>

      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter your address" name="address" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter your email address" name="email" required>

      <button type="submit" name="register">Register</button>
      Already have an account? <a href="login.php">Sign in here</a> <br>
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
</body>
</html>