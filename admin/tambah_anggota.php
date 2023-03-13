<?php
ob_start();
include "../koneksi.php";
include "../header.php";
if (isset($_POST['add'])) {
    $Name = $_POST['Name'];
    $No = $_POST['No_hp'];
    $Address = $_POST['Address'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $role = $_POST['role'];

    $add = "INSERT INTO tb_user (Name, No_hp, Address, Username, Password, role)
    VALUES ('$Name', '$No','$Address', '$Username', MD5('$Password'), '$role')";
    if ($conn->query($add) === TRUE) {
   echo "<script>
   document.location.href='index.php?page=tampil_user';
   </script>";
  }
}
?>
<a href=""></a>
<div class="col-8 ms-5 pt-5 ps-5">
<form class="row g-3" action="" method="post">

 <div class="col-6">
 <div class="col-12">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="Name" pla>
  </div>

  <div class="col-12">
    <label for="no" class="form-label">No Handphone</label>
    <input type="text" class="form-control" id="no" name="No_hp">
  </div>
  <div class="col-12">
    <label for="no" class="form-label">Username</label>
    <input type="text" class="form-control" id="no" name="Username">
  </div>
  <div class="col-12">
    <label for="no" class="form-label">Password</label>
    <input type="text" class="form-control" id="no" name="Password">
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
    <textarea class="form-control" id="Address" name="Address" cols="40" rows="12"></textarea>
  </div>

  <div class="">
<input type="submit" class="btn btn-success d-inline" value="Tambah" name="add">
</div>
</form>
</div>

<?php
include "../footer.php";
?>