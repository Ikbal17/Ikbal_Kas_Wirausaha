<?php
ob_start();
include "../koneksi.php";
include "../header.php";
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $input = $_POST['saldo'];
    $information = $_POST['description'];

    $add = "INSERT INTO tb_money_out (name, saldo, description)
    VALUES ('$name', '$input','$information')";
    if ($conn->query($add) === TRUE) {
   header("location: index.php?page=Pengeluaran");
   ob_end_flush();
  }
}
?>
<link rel="stylesheet" href="../style.css" type="text/css">
<div class="col-8 ms-5 pt-5 ps-5">
<form class="row g-3" action="" method="post">

 <div class="col-6">
 <div class="col-12">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input type="text" class="form-control" id="inputEmail4" name="name" pla>
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Pengeluaran</label>
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