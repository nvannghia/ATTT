<?php 
    include "components/header.php";
    include "ceasar.php";

    $str = "HELLOMYFRIEND";
   
 echo ceasar_encode("$str")."<br>";
 echo ceasar_decryption(ceasar_encode("$str"));

;?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
  <div class="imgcontainer">
    <img src="Images/logo.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="phonenumber"><b>Number phone</b></label>
    <input type="text" placeholder="Enter your number phone" name=" " required>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter your address" name="address" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter your email address" name="email" required>
        
    <button type="submit" name ="login">Register</button>
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

</body>
</html>

