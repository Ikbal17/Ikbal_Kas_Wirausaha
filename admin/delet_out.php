<?php
include "../koneksi.php";
include "../header.php";

$id = $_GET['id'];
$result = $conn->query("DELETE FROM tb_money_out WHERE id='$id'");
if ($result) {
    header("location:index.php?page=Pengeluaran");
}


?>

<?php
include "../footer.php";
?>