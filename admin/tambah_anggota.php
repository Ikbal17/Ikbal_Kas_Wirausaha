<?php
ob_start();
include "../koneksi.php";
include "../header.php";
if (isset($_POST['add'])) {
    $Name = $_POST['Name'];
    $No = $_POST['No hp'];
    $Address = $_POST['Address'];

    $add = "INSERT INTO tb_user (Name, No hp, Address)
    VALUES ('$Name', '$No','$information')";
    if ($conn->query($add) === TRUE) {
   header("location: index.php?page=Pemasukan");
   ob_end_flush();
  }
}
?>
<a href=""></a>
<div class="col-8 ms-5 pt-5 ps-5">
<form class="row g-3" action="" method="post">

 <div class="col-6">
 <div class="col-12">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input type="text" class="form-control" id="inputEmail4" name="name" pla>
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Pemasukan</label>
    <input type="text" class="form-control" id="inputAddress" name="saldo">
  </div>
 </div>

  <div class="col-6">
    <label for="inputAddress2" class="form-label">Keterangan</label>
    <textarea class="form-control" id="inputAddress2" name="description" cols="20" rows="4"></textarea>
  </div>

  <div class="">
<input type="submit" class="btn btn-success d-inline" value="Tambah" name="add">
</div>
</form>
</div>

<?php
include "../footer.php";
?>