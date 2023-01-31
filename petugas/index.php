<?php
include "../bot.php";
include "../koneksi.php";

session_start();

if ($_SESSION['level']= "") {
  header("location:../index.php");
}

if ($_SESSION ['level'] == "admin") {
  header("location: ../admin/index.php");
}

echo $_SESSION['level'];
?>
<a href="tambah.php"><button>Tambahan</button></a>
<table class="table">
    <tr>
        <td>NO</td>
        <td>TANGGAL</td>
        <td>PEMASUKAN</td>
        <td>PENGELUARAN</td>
        <td>KETERANGAN</td>
        <td>JUMLAH</td>
        <td>ACTION</td>

    </tr>
    <?php
    $sql = "SELECT * FROM tb_kas";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        
        ?>
        <tr>
            <td><?php echo $row['No']?></td>
            <td><?php echo $row['Tanggal']?></td>
            <td><?php echo $row['Pemasukan']?></td>
            <td><?php echo $row['Pengeluaran']?></td>
            <td><?php echo $row['Keterangan']?></td>
            <td><?php echo $row['Jumlah']?></td>
            <td><a href="update.php?no=<?php echo $row['No'];?>"></a></td>
            <td><a href="delet.php?no=<?php echo $row['No'];?>">delete</a></td>
        </tr>
<?php
    }
    ?>
</table>
