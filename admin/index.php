<?php
include "../header.php";

session_start();

if ($_SESSION ['level'] ="") {
  header("location: . ./index.php");
  # code...
}

if ($_SESSION ['level'] =="admin") {
  header("location: ../admin/index.php");
  # code...
}

echo $_SESSION['level'];

?>

<link rel="stylesheet" href="../style.css" type="text/css">



      <header>
      <nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block sidebar collapse">
      <div class="position-fixed sidebar-fixed" style="width: 217px; background-color: #64A7F5; height: 100%;">
      <a class="navbar-brand" href="#"><img src="" alt=""></a>
        <ul class="nav  pt-5 flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?page=home">
             <img src="../image/home.png" alt="">
              <p>Beranda</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=Pemasukan">
              <img src="../image/masuk.png" alt="">
              <p>Pemasukan</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=Pengeluaran">
             <img src="../image/keluar.png" alt="">
              <p>Pengeluaran</p>
            </a>
          </li>

          <div class="dropdown px-1">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
   <img src="../image/laporan.png" alt=""><p>Laporan</p>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="index.php?page=saldo">Laporan</a></li>
    <li><a class="dropdown-item" href="#">Tambah Pengguna</a></li>
  </ul>
</div>

<br><br><br><br>
          <hr>
          <li class="nav-item">
            <a class="nav-link" href="../logout.php">
             <img src="../image/logout.svg" alt="">
              <p>logout</p>
            </a>
          </li>
        </ul>

    
        </ul>
      </div>
    </nav>
      <section id="content">
        <nav class="shadow" style="height:50px;">
          <div>
            <h3 class="" style="margin-left: 270px;">Buku kas kelas</h3>
          </div>
          <!-- tombol side -->
          <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><img src="../image/2.png" alt=""></span>
  </button><button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><img src="../image/2.png" alt=""></span>
  </button>
 
       </nav>
     
  </section>
     
      </header>
        <!-- sidebar -->

       
        <div class="row" >
      
    <main class="col-md-10 ms-auto col-lg-10 px-md-5 ">
        

      <?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];

  switch ($page) {
    case 'home':
      include "home.php";
      break;
    case "Pemasukan":
      include "tampil_in.php";
      break;
    case "Pengeluaran":
      include "tampil_out.php";
      break;
    case "Masuk":
      include "tambah.php";
      break;
    case "Keluar":
      include "kurang.php";
      break;
    case "edit_in":
      include "update_in.php";
      break;
    case "edit_out":
      include "update_out.php";
      break;
    case "delete":
      include "delet.php";
      break;
    case "saldo":
      include "saldo.php";
      break;
    case "cari_in":
      include "search_in.php";
      break;
    default:
    echo "halam ini gak ada";
      break;
  }
}else{
  include 'home.php';
}
?>
</main>

       </div>
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<?php
include "../footer.php";
?>