<?php
ob_start();
include "../koneksi.php";
include "../header.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tb_money_out WHERE id='$id'";
$edit = $conn->query($sql);
?>


<?php
while ($row=$edit->fetch_assoc()) {
?>   
<link rel="stylesheet" href="../style.css" type="text/css">

    <div class="col-8 ms-5 pt-5 ps-5">
<form class="row g-3" action="" method="post">
  <div class="col-6">
  <div class="col-12">
    <label for="name" class="form-label">Nama</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'];?>">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Pemasukan</label>
    <input type="text" class="form-control" id="inputAddress" name="saldo" value="<?php echo $row['saldo'];?>">
  </div>
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Keterangan</label>
    <textarea class="form-control" id="inputAddress2" name="description" cols="20" rows="4"><?php echo $row['description'];?></textarea>
  </div>

  <div class="offset-5">

  

    <input type="submit" class="btn btn-success d-inline" value="Tambah" name="edit" value="Ubah">
</div>
</form>
</div>


<?php

}
if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $input = $_POST['saldo'];
    $Information = $_POST['description'];

    $update =  $conn->query("UPDATE tb_money_out SET name='$name',
    saldo='$input', description='$Information' WHERE id='$id'");
    if ($update) {
        header("location:index.php?page=Pengeluaran");
        ob_end_flush();
    }
}
?>
</form>

<?php
include "../footer.php";
?>