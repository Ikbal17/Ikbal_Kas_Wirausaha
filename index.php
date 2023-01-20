<?php

include "bot.php";
?>
<?php
session_start();
  $username = 'admin';
  $password = 'admin';
  if (isset($_POST['submit'])){
    if($_POST ['username'] == $username && $_POST ['password'] == $password){
      $_SESSION['username'] == $username;
      header('home.php');
    } else { 
      login();
      echo '<p>Kamu salah</p>';
    }
  }else{
    login();
  }

  function login() { ?>
   <img class="logo" src="image/logo.png" alt=""><br><br><br><br>
  <br>
<h1>Login</h1>
    <form action=<?php echo $_SERVER['PHP_SELF']?> method='POST'>
    <div class="mb-3">
      <input placeholder="Email/Username" type="text" class="input1" id="username" name="username" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <input placeholder="Password" type="password" class="input2" id="password" name="password">
    </div>
    <input type="submit" class="button" value="Login">
  </form>
  
<?php }?>
 
