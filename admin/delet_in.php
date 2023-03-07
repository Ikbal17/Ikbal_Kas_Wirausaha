<?php
    include "../koneksi.php";
    include "../header.php";

        $id = $_GET['id'];
        $result = $conn->query("DELETE FROM tb_addmision_fee WHERE id='$id'");
        if ($result) {
            header("location:index.php?page=Pemasukan");
            }if ($sql) {

        }



?>

<?php
include "../footer.php";
?>