<?php
include "../koneksi.php";
include "../header.php";
?>
<div class="row">
<div class="col-lg-10 pt-5">
<a href="index.php?page=Masuk" class="m-3"><button class="btn btn-primary">Tambahan Pemasukan</button></a> 
<?php
        $result = mysqli_query($conn, 'SELECT SUM(saldo) AS saldo FROM tb_money_out'); 
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
    if(isset($_GET['search'])){
                    $Name = $_GET['search'];
                    $query = "SELECT * FROM tb_money_out  WHERE name LIKE '%$Name%'";
                    $result= $conn->query($query);
                }else {
                    $batas = 5;
                    $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                    $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
    
                    $previous = $halaman - 1;
                    $next = $halaman + 1;
                    
                    $data = mysqli_query($conn,"SELECT * FROM tb_money_out ORDER BY Id DESC");
                    $jumlah_data = mysqli_num_rows($data);
                    $total_halaman = ceil($jumlah_data / $batas);
    
                    $data_pegawai = "SELECT * FROM tb_money_out limit $halaman_awal, $batas";
                    $nomor = $halaman_awal+1;
                    //$query = "SELECT * FROM tb_input  ORDER BY Id DESC";
                    $result= $conn->query($data_pegawai);
                }
    $data = 1;
    while ($row=$result->fetch_array()){
        
        ?>
        <tr>
            <td><?php echo $data++;?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['date']?></td>
            <td><?php echo $row['saldo']?></td>
            <td><?php echo $row['description']?></td>
            <td><a href="index.php?page=edit_in&id=<?php echo $row['id'];?>"><img src="../image/edit.png" height="30" alt=""></a>
            <a href="delet_in.php?id=<?php echo $row['id'];?>"><img src="../image/hapus.png" height="30" alt=""></a></td>
        </tr>
<?php
    }
    ?>
</table>
 <div>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous&page=Pemasukan'"; } ?>>Previous</a>
                    </li>
                    <?php 
                    for($x=1;$x<=$total_halaman;$x++){
                        ?> 
                        <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>&page=Pemasukan"><?php echo $x; ?></a></li>
                        <?php
                    }
                    ?>				
                    <li class="page-item">
                        <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next&page=Pemasukan'"; } ?>>Next</a>
                    </li>
                </ul>
                </div>
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

<script type="text/javascript">
  function printDiv (el) {
    var a= document.body.innerHTML;
    var b= document.getElementById(el).innerHTML;

    document.body.innerHTML=b;
    window.print();
    dokument.body.innerHTML=a;
  }
</script>
<?php
include "../footer.php";
?>