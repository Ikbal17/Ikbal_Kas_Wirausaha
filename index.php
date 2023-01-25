<?php

include "bot.php";
?>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
  
   <img class="logo" src="image/logo.png" alt=""><br><br><br><br>
  <br>
<h1>Login</h1>
    <form action="cek_login.php" method='post'>
      <input placeholder="Email/Username" type="text" class="input1" id="username" name="username">
      <input placeholder="Password" type="password" class="input2" id="password" name="password">
    <input type="submit" name="submit" class="button" value="Login">
  </form>
  

 
