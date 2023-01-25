<?php
include "../koneksi.php";
if (isset($_POST['add'])) {
    $tanggal = $_POST['Tanggal'];
    $pemasukan = $_POST['Pemasukan'];
    $pengeluaran = $_POST['Pengeluaran'];
    $keterangan = $_POST['Keterangan'];
    $jumlah = $_POST['Jumlah'];

    $add = mysqli_query($koneksi, "INSERT INTO tb_kas VALUE('','$tanggal','$pemasukan','$pengeluaran','$keterangan'
    ,'$pemasukan - $pengeluaran')");
   if ($add) {
        header('location:index.php');
   }
}
?>
<form action="" method="post">
    <input type="text" name="Tanggal" id="" placeholder="dd-mm-yyyy"><br>
    <input type="text" name="Pemasukan" id="" placeholder="Pemasukan"><br>
    <input type="text" name="Keterangan" id="" placeholder="Keterangan"><br>
    <input type="submit" name="add" value="Tambahan">
</form>