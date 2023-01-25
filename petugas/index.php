<?php
include "../bot.php";
include "../koneksi.php";
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
    $query = "SELECT * FROM tb_kas";
    $select = mysqli_query($koneksi, $query);
    while ($data = mysqli_fetch_array($select)){
        ?>
        <tr>
            <td><?php echo $data['No']?></td>
            <td><?php echo $data['Tanggal']?></td>
            <td><?php echo $data['Pemasukan']?></td>
            <td><?php echo $data['Pengeluaran']?></td>
            <td><?php echo $data['Keterangan']?></td>
            <td><?php echo $data['Jumlah']?></td>
            <td><a href="update.php?no=<?php echo $data['No'];?>"></a></td>
            <td><a href="delet.php?no=<?php echo $data['No'];?>">delete</a></td>
        </tr>
<?php
    }
    ?>
</table>
