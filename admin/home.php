<?php
include "../koneksi.php";
include "../header.php";
?>
<link rel="stylesheet" href="../style.css"><br><br>
   <div class="container pt-5">
   <div class="row pt-5">

    <div class="col-lg-4 col-md-6">
    <div class="kotak2  card shadow">
    <?php
        $result1 = mysqli_query($conn, 'SELECT SUM(saldo_in) AS saldo_in FROM tb_addmision_fee'); 
        $row = mysqli_fetch_assoc($result1); 
        $sum1 = $row['saldo_in'];
    ?>
        <h5 class="offset-2 pt-5 fw-bold">Rp <?php echo $sum1;?></h5>
        <img class="g1" src="../image/pemasukan.png" alt="" height="100px">
        <h4>Pemasukan</h4>
</div>
    </div>

    <div class="col-lg-4 col-md-6">
    <div class="kotak3 card shadow">

    <?php
        $result2 = mysqli_query($conn, 'SELECT SUM(saldo_out) AS saldo_out FROM tb_money_out'); 
        $row = mysqli_fetch_assoc($result2); 
        $sum2 = $row['saldo_out'];
    ?>

    <h5 class="offset-2 pt-5 fw-bold">Rp <?php echo $sum2;?></h5>
        <img class="g1" src="../image/pengeluaran.png" alt="">
        <h4>Pengeluaran</h4>
    </div>
    </div>

    <div class="col-lg-4 col-md-6">
   <div class="kotak1  card shadow">
   <h5 class="offset-2 pt-5 fw-bold">Rp <?php echo $sum1 - $sum2;?></h5>
        <img class="g1" src="../image/total.png" alt="">
        <h4>Total</h4>
    </div>
   </div>

   </div>
   </div>
<?php
include "../footer.php";
?>