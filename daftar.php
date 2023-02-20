<?php
include "koneksi.php";
include "header.php";
if (isset($_POST['add'])) {
    $Name = $_POST['Name'];
    $No = $_POST['No hp'];
    $Address = $_POST['Address'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Role = $_POST['role'];

    $add = "INSERT INTO tb_user (Name, No hp, Address, Username, Password, role)
    VALUES ('$Name','$No', '$Address','$Username', MD5('$Password'), '$Role')";
    if ($conn->query($add) === TRUE) {
    echo "New record created successfully";
  }
}
?>

<div class="col-8 ms-5 pt-5 ps-5">
<form class="row g-3" action="" method="post">

  <div class="col-6">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input type="text" class="form-control" id="inputEmail4" name="Name" pla>
  </div>

  <div class="col-6">
    <label for="inputPassword4" class="form-label">Tanggal Masuk</label>
    <input type="date" class="form-control" id="inputPassword4" name="No hp">
  </div>

  <div class="col-6">
    <label for="inputAddress" class="form-label">Pemasukan</label>
    <input type="text" class="form-control" id="inputAddress" name="Address">
  </div>

  <div class="col-6">
    <label for="inputAddress2" class="form-label">Keterangan</label>
    <input type="text" class="form-control" id="inputAddress2" name="Username">
  </div>

  <div class="col-6">
    <label for="inputAddress2" class="form-label">Keterangan</label>
    <input type="text" class="form-control" id="inputAddress2" name="Password">
  </div>

  <div class="col-6">
    <label for="inputAddress2" class="form-label">Keterangan</label>
    <input type="text" class="form-control" id="inputAddress2" name="information">
  </div>

  <div class="">
<input type="submit" class="btn btn-success d-inline" value="Tambah" name="add">
</div>
</form>
</div>

<?php
include "footer.php";
?>