<?php 



















// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai

$sql = "SELECT * FROM tb_user WHERE Username='$username' and Password=md5('$password')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if ($row['role'] == "admin") {
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "admin";
      header("location:admin/index.php");
    } elseif ($row['role'] == "petugas") {
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "petugas";
      header("location: petugas/index.php");
    }
   
  }
}else {
	header("location:index.php?pesan=gagal");
}
$conn->close();


// $data = mysqli_query($koneksi,"select * from tb_login where username='$username' and password='$password'");
 
// // menghitung jumlah data yang ditemukan
// $cek = mysqli_num_rows($data);
 
// if($cek > 0){
// 	$_SESSION['username'] = $username;
// 	$_SESSION['status'] = "login";
// 	header("location:admin/index.php");
// }else{
// 	header("location:index.php?pesan=gagal");
// }
?>