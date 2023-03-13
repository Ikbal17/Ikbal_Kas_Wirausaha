
<?php 

// menghapus semua session
session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
echo "
<script>document.location.href='../Ikbal_Kas_Wirausaha/index.php';</script>
";
?>