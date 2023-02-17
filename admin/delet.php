<?php
include "../koneksi.php";
include "../header.php";

$id = $_GET['id'];
$result = $conn->query("DELETE FROM tb_kas WHERE id='$id'");
if ($result) {
    header("location:index.php?page=lapor");
}


?>

<?php
include "../footer.php";
?>