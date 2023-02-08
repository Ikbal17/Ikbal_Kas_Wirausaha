<?php
include "../koneksi.php";

session_start();
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
    $data = 1;
    while ($row=$result->fetch_assoc()){
        
        ?>
        <tr>
            <td><?php echo $data++;?></td>
            <td><?php echo $row['Tanggal']?></td>
            <td><?php echo $row['Pemasukan']?></td>
            <td><?php echo $row['Pengeluaran']?></td>
            <td><?php echo $row['Keterangan']?></td>
            <td><?php echo $row['Jumlah']?></td>
            <td><a href="update.php"><?php echo $row['No'];?></a></td>
        </tr>
<?php
    }
    ?>
</table>

<br>              <a href="../logout.php">logout</a>

<?php
include "footer.php";
?>