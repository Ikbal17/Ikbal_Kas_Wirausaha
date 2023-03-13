<?php
ob_start();
include "../koneksi.php";
include "../header.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tb_user WHERE ID='$id'";
$edit = $conn->query($sql);
?>

<?php
while ($row=$edit->fetch_assoc()) {
?> 
<a href=""></a>
<div class="col-8 ms-5 pt-5 ps-5">
<form class="row g-3" action="" method="post">

 <div class="col-6">
 <div class="col-12">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="name" value="<?php echo $row['Name'];?>">
  </div>

  <div class="col-12">
    <label for="no" class="form-label">No Handphone</label>
    <input type="text" class="form-control" id="no" name="No_hp" value="<?php echo $row['No_hp'];?>">
  </div>
  <div class="col-12">
    <label for="no" class="form-label">Username</label>
    <input type="text" class="form-control" id="no" name="Username"  value="<?php echo $row['Username']?>">
  </div>
  <div class="col-12">
    <label for="no" class="form-label">Password</label>
    <input type="text" class="form-control" id="no" name="Password"  value="<?php echo $row['Password']?>">
  </div>
  <div class="col-12">
    <label for="role">Tipe Akun</label>
  <select class="form-select" aria-label="Default select example" id="role" name="role">
  <option value="admin">Admin</option>
  <option value="petugas">Petugas</option>
</select>
  </div>
  
 </div>

  <div class="col-6">
    <label for="Address" class="form-label">Alamat</label>
    <textarea class="form-control" id="Address" name="Address" cols="40" rows="12"><?php echo $row['Address']?></textarea>
  </div>

  <div class="">
<input type="submit" class="btn btn-success d-inline" value="Tambah" name="add">
</div>
</form>
</div>
<?php

}
if (isset($_POST['edit'])) {
    $Name = $_POST['Name'];
    $No = $_POST['No_hp'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Address = $_POST['Address'];
    $role = $_POST['role'];

    $update = $conn->query("UPDATE tb_user SET Name='$Name',
    No_hp='$No', Username='$Username', Password=MD5('$Password'), Address='$Address', role='$role' WHERE ID='$id'");
    if ($update) {
       echo "<script>
       document.location.href='index.php?page=tampil_user';
       </script>";
       ob_end_flush();
    }
}
?>

<?php
include "../footer.php";
?>