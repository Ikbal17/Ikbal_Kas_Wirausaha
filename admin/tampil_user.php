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
                    <a href="index.php?page=add_user" class=""><button class="btn btn-primary">Tambah</button></a> <br><br>
                        <div class="table-responsive">
                        <table class="table table-bordered table-info table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
        <td>NO</td>
        <td>NAMA</td>
        <td>NO HP</td>
        <td>ALAMAT</td>
        <td>USERNAME</td>
        <td>PASSWORD</td>
        <td>ROLE</td>
        <td>ACTION</td>
    </tr>
                                    </thead>
                                 
                                    <tbody>
                                    <?php
                    $query = "SELECT * FROM tb_user ORDER BY id DESC";
                    $result= $conn->query($query);
    $data = 1;
    while ($row=$result->fetch_array()){
        
        ?>
        <tr>
            <td><?php echo $data++;?></td>
            <td><?php echo $row['Name']?></td>
            <td><?php echo $row['No_hp']?></td>
            <td><?php echo $row['Address']?></td>
            <td><?php echo $row['Username']?></td>
            <td><?php echo $row['Password']?></td>
             <td><?php echo $row['role']?></td>
            <td><a href="index.php?page=edit_user&id=<?php echo $row['ID'];?>"><img src="../image/edit.png" height="30" alt=""></a>
            <button class="btn" type="button" value="" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['ID'];?>"><img src="../image/hapus.png" height="30" alt=""></button>
<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['ID'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Yakin Ingin menghapusnya ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <a href="delet_user.php?id=<?php echo $row['ID'];?>" class="btn btn-primary">Yakin</a>
    </div>
    </div>
  </div>
</div>
            
        </td>
        </tr>
<?php
    }
    ?>
   
                                     
                                    </tbody>
                                 
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