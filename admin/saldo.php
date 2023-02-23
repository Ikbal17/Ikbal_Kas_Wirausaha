<?php
include "../koneksi.php";
include "../header.php";

?>

<div class="row pt-5" >

    <?php
        $result = mysqli_query($conn, 'SELECT SUM(saldo) AS saldo FROM tb_addmision_fee'); 
        $row = mysqli_fetch_assoc($result); 
        $sum = $row['saldo'];
    ?>
    
    <div class="col-lg-6 ">
        <p class="m-1">Total Pemasukan : <?php echo $sum ?></p>
    <table class="table table-striped table-hover table-primary m-1">
        
    <tr>
        <td>NO</td>
        <td>NAMA</td>
        <td>TANGGAL</td>
        <td>SALDO</td>
        <td>KETERANGAN</td>
    </tr>
    <?php
    $sql = "SELECT * FROM tb_addmision_fee";
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
        </tr>
<?php
    }
    ?>
</table>
    </div>
<br><br>
    <div class="col-lg-6 ">
    <?php
        $result = mysqli_query($conn, 'SELECT SUM(saldo) AS saldo FROM tb_money_out'); 
        $row = mysqli_fetch_assoc($result); 
        $sum = $row['saldo'];
    ?>
    <p class="m-1">Total Pengeluaran :<?php echo $sum ?></p>

    <table class="table table-striped table-hover table-success m-1">
    <tr>
        <td>NO</td>
        <td>NAMA</td>
        <td>TANGGAL</td>
        <td>SALDO</td>
        <td>KETERANGAN</td>
    </tr>
    <?php
    $sql = "SELECT * FROM tb_money_out";
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
        </tr>
<?php
    }
    ?>
</table>
    </div>

</div>

<?php
include "../footer.php";
?>