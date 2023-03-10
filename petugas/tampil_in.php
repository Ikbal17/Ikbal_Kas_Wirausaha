<?php
include "../koneksi.php";
include "../header.php";
?>
<?php
    $result = mysqli_query($conn, 'SELECT SUM(saldo) AS saldo FROM tb_addmision_fee'); 
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
                    <a href="index.php?page=Masuk" class=""><button class="btn btn-primary">Tambahan</button></a> <br><br>
                        <div class="table-responsive">
                        <table class="table table-bordered table-info table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
        <td>NO</td>
        <td>NAMA</td>
        <td>TANGGAL</td>
        <td>SALDO</td>
        <td>KETERANGAN</td>
    </tr>
                                    </thead>
                                 
                                    <tbody>
                                    <?php
                    $query = "SELECT * FROM tb_addmision_fee";
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
        </tr>
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

