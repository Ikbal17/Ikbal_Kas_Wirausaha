<?php

include "header.php";
?>
 
 <link rel="stylesheet" href="patch/style.css" type="text/css">
  <body style="background: #64A7F5;">

  <div class="row">
    <div class="col-md-4 offset-md-4 my-5">
    <div class="text-center">

  <img src="image/logo.png" width=250px;><br>
  <img src="image/1.png" class="rounded">
  <h1>Login</h1>
</div>
<!-- login -->
  <form action="cek_login.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <input type="submit" value="Login" class="btn btn-primary">
</form>


</div>
  </div>
  
</body>
 
<?php
include "footer.php";
?>