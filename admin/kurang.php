<?php
include "../koneksi.php";
include "../header.php";
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $input = $_POST['saldo'];
    $information = $_POST['description'];

    $add = "INSERT INTO tb_kas (name, date, input, information)
    VALUES ('$name','$date', '$input','$information')";
    if ($conn->query($add) === TRUE) {
    echo "New record created successfully";
  }
}
?>

<div class="col-8 ms-5 pt-5 ps-5">
<form class="row g-3" action="" method="post">
  <div class="col-6">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input type="text" class="form-control" id="inputEmail4" name="name" pla>
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Keterangan</label>
    <input type="text" class="form-control" id="inputAddress" name="information" style="height: 75px;">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Keterangan</label>
    <input type="text" class="form-control" id="inputAddress2" name="input">
  </div>

  <div class="">
<input type="submit" class="btn btn-success d-inline" value="Tambah" name="add">
</div>
</form>
</div>

<?php
include "../footer.php";
?>