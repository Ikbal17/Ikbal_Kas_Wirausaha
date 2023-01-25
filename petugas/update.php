<?php
include "../koneksi.php";
$no = $_GET['No'];
$edit = mysqli_query($koneksi, "SELECT * FROM tb_kas WHERE No='$no'");
?>
<form action="" method="post">


<?php
while ($data = mysqli_fetch_array($edit)) {
?>    

    <input type="text" name="No" value="<?php echo $data['No'];?>"><br>
    <input type="text" name="Tanggal" value="<?php echo $data['Tanggal'];?>"><br>
    <input type="text" name="Pemasukan" value="<?php echo $data['Pemasukan'];?>"><br>
    <input type="text" name="Pengeluaran" value="<?php echo $data['Pengaluaran'];?>"><br>
    <input type="text" name="Keterangan" value="<?php echo $data['Keterangan'];?>"><br>
    <input type="text" name="Jumlah" value="<?php echo $data['Jumlah'];?>"><br>
    <input type="submit" name="edit">

<?php

}
if (isset($_POST['edit'])) {
    $no = $_POST['No'];
    $tanggal = $_POST['Tanggal'];
    $pemasukan = $_POST['Pemasukan'];
    $pengeluaran = $_POST['Pengeluaran'];
    $keterangan = $_POST['Keterangan'];
    $jumlah = $_POST['Jumlah'];

    $update = mysqli_query($koneksi, "UPDATE tb_kas SET No='$no', Tanggal='$tanggal', Pemasukan='$pemasukan',
    Pengeluaran='$pengeluaran', Keterangan='$keterangan', Jumlah='$jumlah'WHERE No='$no'");
    if ($update) {
        header('location:index.php');
    }
}
?>
</form>