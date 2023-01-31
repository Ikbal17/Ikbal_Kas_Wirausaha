<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_ujikom";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";













// $koneksi = mysqli_connect("localhost", "root", "", "db_ujikom");

// if(mysqli_connect_errno()){
//     echo "koneksi database gagal :" . mysqli_connect_error();
// }
?>