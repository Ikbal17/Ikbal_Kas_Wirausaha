<?php
include "../koneksi.php";
include "../header.php";

?>
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
<div class="row">
    <div class="col bg-info bg-opacity-75">
        <h3>Total Saldo Saat Ini: <?php echo $sum1-$sum2;?></h3>
    </div>
</div>
<div class="row pt-5" >
<!-- Table Masuk -->
  
    
    <div class="col-lg-6 ">
    <button class="btn btn-success mx-2" onclick="printDiv('print')" type="submit" data-toggle="print" data-placement="right" title="print"><i class='bx bx-printer'>Print</i></button>
   <fieldset id="print">
   <table class="table table-striped table-hover table-primary m-1">
        
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>TANGGAL</th>
            <th>SALDO</th>
            <th>KETERANGAN</th>
        </tr>
        <?php
         if(isset($_GET['search'])){
            $Name = $_GET['search'];
            $query = "SELECT * FROM tb_addmision_fee  WHERE name LIKE '%$Name%'";
            $result= $conn->query($query);
        }else {
            $batas = 5;
            $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

            $previous = $halaman - 1;
            $next = $halaman + 1;
            
            $data = mysqli_query($conn,"SELECT * FROM tb_addmision_fee ORDER BY Id DESC");
            $jumlah_data = mysqli_num_rows($data);
            $total_halaman = ceil($jumlah_data / $batas);

            $data_pegawai = "SELECT * FROM tb_addmision_fee limit $halaman_awal, $batas";
            $nomor = $halaman_awal+1;
            //$query = "SELECT * FROM tb_input  ORDER BY Id DESC";
            $result= $conn->query($data_pegawai);
        }
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
    </fieldset>
    <div>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous&page=saldo'"; } ?>>Previous</a>
                    </li>
                    <?php 
                    for($x=1;$x<=$total_halaman;$x++){
                        ?> 
                        <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>&page=saldo"><?php echo $x; ?></a></li>
                        <?php
                    }
                    ?>				
                    <li class="page-item">
                        <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next&page=saldo'"; } ?>>Next</a>
                    </li>
                </ul>
                </div>
</div>
      

    <br><br>

<!-- Tabel Keluar >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->

        <div class="col-lg-6 ">
        <button class="btn btn-success mx-2" onclick="printDiv1('print1')" type="submit" data-toggle="print" data-placement="right" title="print"><i class='bx bx-printer'>Print</i></button>

       
    <fieldset id="print1">
        <table class="table table-striped table-hover table-success m-1">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>TANGGAL</th>
            <th>SALDO</th>
            <th>KETERANGAN</th>
        </tr>
        <?php
         if(isset($_GET['search'])){
            $Name2 = $_GET['search'];
            $query2 = "SELECT * FROM tb_money_out  WHERE name LIKE '%$Name2%'";
            $result2= $conn->query($query2);
        }else {
            $batas2 = 5;
            $halaman2 = isset($_GET['halaman2'])?(int)$_GET['halaman2'] : 1;
            $halaman_awal2 = ($halaman2>1) ? ($halaman2 * $batas2) - $batas2 : 0;	

            $previous2 = $halaman2 - 1;
            $next2 = $halaman2 + 1;
            
            $data2 = mysqli_query($conn,"SELECT * FROM tb_money_out ORDER BY Id DESC");
            $jumlah_data2 = mysqli_num_rows($data2);
            $total_halaman2 = ceil($jumlah_data2 / $batas2);

            $data_pegawai2 = "SELECT * FROM tb_money_out limit $halaman_awal2, $batas2";
            $nomor2 = $halaman_awal2+1;
            //$query = "SELECT * FROM tb_input  ORDER BY Id DESC";
            $result2= $conn->query($data_pegawai2);
        }
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
   </fieldset>
   <div>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" <?php if($halaman2 > 1){ echo "href='?halaman2=$previous2&page=saldo'"; } ?>>Previous</a>
                    </li>
                    <?php 
                    for($x=1;$x<=$total_halaman2;$x++){
                        ?> 
                        <li class="page-item"><a class="page-link" href="?halaman2=<?php echo $x ?>&page=saldo"><?php echo $x; ?></a></li>
                        <?php
                    }
                    ?>				
                    <li class="page-item">
                        <a  class="page-link" <?php if($halaman2 < $total_halaman2) { echo "href='?halaman2=$next2&page=saldo'"; } ?>>Next</a>
                    </li>
                </ul>
                </div>
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