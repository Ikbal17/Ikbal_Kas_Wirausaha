<?php
include "../koneksi.php";
include "../header.php";

?>
<link rel="stylesheet" href="../style.css" type="text/css">

<?php
    $result = mysqli_query($conn, 'SELECT SUM(saldo) AS saldo FROM tb_addmision_fee'); 
    $row = mysqli_fetch_assoc($result); 
    $sum1 = $row['saldo'];
?>
<?php
    $result = mysqli_query($conn, 'SELECT SUM(saldo) AS saldo FROM tb_money_out'); 
    $row = mysqli_fetch_assoc($result); 
    $sum2 = $row['saldo'];
?>

<br>
<button class="btn btn-success  " onclick="printDiv('print')" type="submit" data-toggle="print" data-placement="right" title="print"><i class='bx bx-printer'>Print</i></button>

<div class="row pt-5" id="print" >
    <div class="col-lg-6 ">
      <table class="table table-striped table-hover table-primary m-1">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>TANGGAL</th>
            <th>SALDO</th>
            <th>KETERANGAN</th>
        </tr>
        <?php
        
            $query = "SELECT * FROM tb_addmision_fee";
            $result= $conn->query($query);
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
         <tr>
            <th>Total:</th>
            <td></td>
            <td></td>
            <th><?php echo $sum1?></th>
            <td></td>
        </tr>
    </table>
   
</div>
      

    <br><br>

<!-- Tabel Keluar >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->

        <div class="col-lg-6 ">
       
        <table class="table table-striped table-hover table-success m-1">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>TANGGAL</th>
            <th>SALDO</th>
            <th>KETERANGAN</th>
        </tr>
        <?php
         
            $query2 = "SELECT * FROM tb_money_out";
            $result2= $conn->query($query2);
        $data = 1;
        while ($row=$result2->fetch_assoc()){
            
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
         <tr>
            <th>Total:</th>
            <td></td>
            <td></td>
            <th><?php echo $sum2?></th>
            <td></td>
        </tr>
    </table>

   
</div>
    </div>

</div>
</div>

<script type="text/javascript">
  function printDiv (el) {
    var a= document.body.innerHTML;
    var b= document.getElementById(el).innerHTML;

    document.body.innerHTML=b;
    window.print();
    dokument.body.innerHTML=a;
  }

  function printDiv1 (el) {
    var a1= document.body.innerHTML;
    var b1= document.getElementById(el).innerHTML;

    document.body.innerHTML=b1;
    window.print();
    dokument.body.innerHTML=a1;
  }
</script>


<?php
include "../footer.php";
?>