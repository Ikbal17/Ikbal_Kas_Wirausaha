<?php
include "../koneksi.php";
$no = $_GET['No'];
$sql = "SELECT * FROM tb_kas WHERE No='$no'";
$edit = $conn->query($sql);
?>
<form action="" method="post">


<?php
while ($row=$edit->fetch_array($edit)) {
?>    

    <input type="text" name="No" value="<?php echo $row['No'];?>"><br>
    <input type="text" name="Tanggal" value="<?php echo $row['Tanggal'];?>"><br>
    <input type="text" name="Pemasukan" value="<?php echo $row['Pemasukan'];?>"><br>
    <input type="text" name="Pengeluaran" value="<?php echo $row['Pengaluaran'];?>"><br>
    <input type="text" name="Keterangan" value="<?php echo $row['Keterangan'];?>"><br>
    <input type="text" name="Jumlah" value="<?php echo $row['Jumlah'];?>"><br>
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