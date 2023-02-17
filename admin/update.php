<?php
include "../koneksi.php";
include "../header.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tb_kas WHERE id='$id'";
$edit = $conn->query($sql);
?>
<form action="" method="post">


<?php
while ($row=$edit->fetch_assoc()) {
?>    
    <div class="col-8 ms-5 pt-5 ps-5">
<form class="row g-3" action="" method="post">
  <div class="col-6">
    <label for="id" class="form-label">Id</label>
    <input type="text" class="form-control" id="id" name="id" value="<?php echo $row['id'];?>" >
  </div>
  <div class="col-6">
    <label for="name" class="form-label">Nama</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'];?>">
  </div>
  <div class="col-6">
    <label for="inputPassword4" class="form-label">Tanggal Masuk</label>
    <input type="date" class="form-control" id="inputPassword4" name="date" value="<?php echo $row['date'];?>">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Pemasukan</label>
    <input type="text" class="form-control" id="inputAddress" name="input" value="<?php echo $row['input'];?>">
  </div>
  <div class="col-6">
    <label for="out" class="form-label">Pengeluaran</label>
    <input type="text" class="form-control" id="out" name="output" value="<?php echo $row['output'];?>">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Keterangan</label>
    <input type="text" class="form-control" id="inputAddress2" name="information" value="<?php echo $row['Information'];?>">
  </div>
  <div class="col-6">
    <label for="total" class="form-label">Total</label>
    <input type="text" class="form-control" id="total" name="total" value="<?php echo $row['total'];?>">
  </div>

  <div class="offset-5">

  

    <input type="submit" class="btn btn-success d-inline" value="Tambah" name="edit" value="Tambah">
</div>
</form>
</div>


<?php

}
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $input = $_POST['input'];
    $output = $_POST['output'];
    $Information = $_POST['Keterangan'];
    $total = $_POST['total'];

    $update =  $conn->query("UPDATE tb_kas SET id='$id', name='$name', date='$date',
    input='$output', Information='$Information', total='$total'WHERE id='$id'");
    if ($update) {
        header('location:index.php');
    }else {
        echo "maaf gagal merubah data";
    }
}
?>
</form>

<?php
include "../footer.php";
?>