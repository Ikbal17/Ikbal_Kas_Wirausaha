<?php
include "../koneksi.php";
include "../header.php";
?>
<div class="row">
<div class="col-lg-10 pt-5">
<a href="index.php?page=Masuk" class="m-3"><button class="btn btn-primary">Tambahan Pemasukan</button></a> 
<?php
        $result = mysqli_query($conn, 'SELECT SUM(saldo) AS saldo FROM tb_addmision_fee'); 
        $row = mysqli_fetch_assoc($result); 
        $sum = $row['saldo'];
    ?>
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
<!-- <table class="table table-striped table-hover m-3">
    <tr>
        <td>Total</td>
        <td class="text-end"><?php echo $sum;?></td>
    </tr>
</table> -->

</div>

<div class="pt-5 col-lg-2 mt-5">
<div class="card mt-1">
      <div class="card-body">
        <h5 class="card-title">Saldo Akhir</h5>
        <p class="card-text"><?php echo $sum;?></p>
      </div>
    </div>
</div>

</div>
<?php
include "../footer.php";
?>