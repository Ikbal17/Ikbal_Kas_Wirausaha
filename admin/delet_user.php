<?php
ob_start();
    include "../koneksi.php";
    include "../header.php";

        $id = $_GET['id'];
        $result = $conn->query("DELETE FROM tb_user WHERE ID='$id'");
        if ($result) {
            header("location:index.php?page=tampil_user");
          ob_end_flush();
        }


?>

<?php
include "../footer.php";
?>