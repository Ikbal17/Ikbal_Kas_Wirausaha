<?php

include "bot.php";
?>
<?php
session_start();
  $username = 'admin';
  $password = 'admin';
  if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
      $_SESSION["username"] == $username;
      echo "anda berhasil login $username";
    } else { 
      login();
      echo '<p>Kamu salah</p>';
    }
  }else{
    login();
  }


// ieu
  function login(){ ?>
   <img class="logo" src="image/logo.png" alt=""><br><br><br><br>
  <br>
<h1>Login</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
      <input placeholder="Email/Username" type="text" class="input1" id="username" name="username">
      <input placeholder="Password" type="password" class="input2" id="password" name="password">
    <input type="submit" name="submit" class="button" value="Login">
  </form>
  
<?php }?>
 
