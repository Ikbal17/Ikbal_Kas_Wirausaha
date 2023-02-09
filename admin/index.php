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

  <!-- <section id="sidebar"> -->

        <!-- <div class="d-flex flex-column flex-shrink-0 p-3 overflow-auto shadow" style="width: 250px; background-color: #64A7F5; height: 100%;">
    <a class="navbar-brand"><img src="../image/person.png" alt=""></a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto ">
      <li class="nav-item">
        <a href="index.php?page=home" class="nav-link" aria-current="page">
          <img src="../image/home.png" alt=""><use xlink:href="index.php?page=home"></use></svg>
          <p>Beranda</p>
        </a>
      </li>
      <li>
        <a href="index.php?page=Pemasukan" class="nav-link link-dark">
          <img src="../image/masuk.png" alt=""><use xlink:href="index.php?page=Pemasukan"></use></svg>
          <P>Pemasukan</P>
        </a>
      </li>
      <li>
        <a href="index.php?page=Pengeluaran" class="nav-link link-dark">
          <img src="../image/keluar.png" alt=""><use xlink:href="index.php?page=Pengeluaran"></use></svg>
          <p>Pengeluaran</p>
        </a>
      </li>
      <div class="dropdown px-1">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
   <img src="../image/laporan.png" alt=""><p>Laporan</p>
  </button>
  <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div><br><br><br><br>
<hr>
      <li>
        <a href="../logout.php" class="nav-link link-dark">
        <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M9 42q-1.2 0-2.1-.9Q6 40.2 6 39V9q0-1.2.9-2.1Q7.8 6 9 6h14.55v3H9v30h14.55v3Zm24.3-9.25-2.15-2.15 5.1-5.1h-17.5v-3h17.4l-5.1-5.1 2.15-2.15 8.8 8.8Z"/></svg><use xlink:href="#people-circle"></use>
          logout
        </a>
      </li>
    </ul>
  
  </div>
  </section> -->

      <header>
      <section id="content">
        <nav class="shadow">
          <div>
            <h3 class="" style="margin-left: 270px;">Buku kas kelas</h3>
          </div>
          <!-- tombol side -->
          <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><img src="../image/2.png" alt=""></span>
  </button><button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><img src="../image/2.png" alt=""></span>
  </button>
  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse py-5" style="width: 250px; background-color: #64A7F5; height: 100%;">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
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
  <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div><br><br><br><br>
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
       </nav>
       
  </section>
     
      </header>
        <!-- sidebar -->

       

    
    <main class="col-md-9 ms-auto col-lg-10 px-md-4 pt-5">
        

      <?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];

  switch ($page) {
    case 'home':
      include "home.php";
      break;
    case "Pemasukan":
      include "tambah.php";
      break;
    case "Pengeluaran":
      include "kurang.php";
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<?php
include "../footer.php";
?>