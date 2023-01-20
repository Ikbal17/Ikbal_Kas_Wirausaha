<?php
  $username = 'admin';
  $password = 'admin';

  function login
?>


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="path/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  <link rel="stylesheet" href="path/style.css">
</head>
<body>
  <br>
  <img class="logo" src="image/logo.png" alt=""><br><br><br><br>
  <br>
<h1>Login</h1>
 
<form action="POST">
  <div class="mb-3">
    <input placeholder="Email/Username" type="email" class="input1" id="username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <input placeholder="Password" type="password" class="input2" id="password" name="password">
  </div>
  <button type="submit" class="button">Login</button>
</form>

<!-- Ini JavaScirpt -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>