<?php
include "../koneksi.php";
?>

<a href="tambah.php"><button>Tambahan</button></a>
<table class="table table-striped table-hover">
    <tr>
        <td>NO</td>
        <td>NAMA</td>
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
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['date']?></td>
            <td><?php echo $row['input']?></td>
            <td><?php echo $row['output']?></td>
            <td><?php echo $row['Information']?></td>
            <td><?php echo $row['total']?></td>
            <td><a href="index.php?page=edit&id=<?php echo $row['id'];?>">Edit</a>
            <a href="delet.php?id=<?php echo $row['id'];?>">Hapus</a></td>
        </tr>
<?php
    }
    ?>
</table>

<?php
include "../footer.php";
?>