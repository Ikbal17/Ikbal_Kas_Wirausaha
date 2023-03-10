<?php
include "../koneksi.php";
include "../header.php";
?>
<?php
    $result = mysqli_query($conn, 'SELECT SUM(saldo) AS saldo FROM tb_money_out'); 
    $row = mysqli_fetch_assoc($result); 
    $sum = $row['saldo'];
?>
<head>



<!-- Custom fonts for this template -->
<link href="../patch/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template -->

<!-- Custom styles for this page -->
<link href="../patch/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

            <!-- End of Topbar -->
            
            <!-- Begin Page Content -->
            <div class="container-fluid">

               
                    <div class="card-body pt-5">
                    <a href="index.php?page=Keluar" class=""><button class="btn btn-primary">Tambahan</button></a> <br><br>
                        <div class="table-responsive">
                        
                        <table class="table table-bordered table-striped table-info" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
        <td>NO</td>
        <td>NAMA</td>
        <td>TANGGAL</td>
        <td>SALDO</td>
        <td>KETERANGAN</td>
        <td>ACTION</td>
    </tr>
                                    </thead>
                                 
                                    <tbody>
                                    <?php
                    $query = "SELECT * FROM tb_money_out";
                    $result= $conn->query($query);
    $data = 1;
    while ($row=$result->fetch_array()){
        
        ?>
        <tr>
            <td><?php echo $data++;?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['date']?></td>
            <td>Rp. <?php echo $row['saldo']?></td>
            <td><?php echo $row['description']?></td>
            <td><a href="index.php?page=edit_out&id=<?php echo $row['id'];?>"><img src="../image/edit.png" height="30" alt=""></a>
            <!-- <a href="delet_in.php?id=<?php echo $row['id'];?>"><img src="../image/hapus.png" height="30" alt=""></a> -->
            <button class="btn" type="button" value="" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['id'];?>"><img src="../image/hapus.png" height="30" alt=""></button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel<?php echo $row['id'];?>">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Yakin Ingin menghapusnya ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <a href="delet_out.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Yakin</a>
    </div>
    </div>
  </div>
</div>
            
        </td>        </tr>
<?php
    }
    ?>
                  
                                    </tbody>
                                    <tr>
        <td>Total :</td>
        <td></td>
        <td></td>
        <td>Rp. <?php echo $sum;?></td>
        <td></td>
        <td></td>
    </tr>
                                </table>

           


<!-- Bootstrap core JavaScript-->
<script src="../patch/vendor/jquery/jquery.min.js"></script>
<script src="../patch/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../patch/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../patch/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../patch/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../patch/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="../patch/js/demo/datatables-demo.js"></script><?php
include "../footer.php";
?>

<script>
    const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
</script>