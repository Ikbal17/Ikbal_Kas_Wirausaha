<?php
include "../koneksi.php";
include "../header.php";
?>

<div class="pt-5">
<a href="index.php?page=Masuk" class="m-3"><button class="btn btn-primary">Tambahan Pemasukan</button></a>
<table class="table table-striped table-hover m-3">
    <tr>
        <td>NO</td>
        <td>NAMA</td>
        <td>TANGGAL</td>
        <td>SALDO</td>
        <td>KETERANGAN</td>
        <td>ACTION</td>
    </tr>
    <?php
    $sql = "SELECT * FROM tb_addmision_fee ORDER BY id DESC";
    $result = $conn->query($sql);
    $data = 1;
    while ($row=$result->fetch_assoc()){
        
        ?>
        <tr>
            <td><?php echo $data++;?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['date']?></td>
            <td><?php echo $row['saldo']?></td>
            <td><?php echo $row['description']?></td>
            <td><a href="index.php?page=edit_in&id=<?php echo $row['id'];?>">Edit</a>
            <a href="delet_in.php?id=<?php echo $row['id'];?>">Hapus</a></td>
        </tr>
<?php
    }
    ?>
</table>

</div>
<?php
include "../footer.php";
?>