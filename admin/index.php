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

  <section id="sidebar">
  <!-- <div class="sidebar " style="  border-right: 1px solid black;">

      <div style="width:15%;">
       <nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block sidebar collapse " style="color: black;">
       <a class="navbar-brand" href="#"><img class="images" src="../img/profile.png " width="200%" alt=""></a>
          <div class="sidebar-sticky pt-3">
            <ul class="navbar-nav px-3 flex-column" style="margin-top:20% ;">
              <li class="nav-item ">
                <a class="nav-link d-flex align-items-center" href="index.php?page=home" role="button" data-toggle="dropdown" aria-expanded="false" style="color:black;">
                  <img src="../img/home 2.png" class="icon" alt="" /> Home
                </a>
             
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center" href="index.php?page=Buku" style="color:black;">
                  <img src="../img/laporan 2.png" alt="" class="icon" />
                    Buku<span class="px-1">Kas</span>
                </a>
              </li>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black;"><img src="../img/umum.png" alt="" >
            Laporan 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#" style="color:black;"> >Laporan Harian</a></li>
            <li><a class="dropdown-item" href="#" style="color:black;">  >Laporan Mingguan</a></li>
            <li><a class="dropdown-item" href="#" style="color:black;"> >Laporan Bulanan </a></li>
          </ul>
        </li>
           
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="form">Form</a>
                  <a class="dropdown-item" href="https://wa.me/6285861880292">Whatsapp</a>
                  <a class="dropdown-item" href="https://www.instagram.com/diirapril28_/?next=%2F">Instagram</a>
                </div>
              </li>
              <li class="nav-item">
                <a  href="../logout.php"><img src="../img/logout.png" alt=""> logout </a>
              </li>
            </ul>

            
          </div>
        </nav> -->

        <div class="d-flex flex-column flex-shrink-0 p-3 overflow-auto shadow" style="width: 250px; background-color: #64A7F5; height: 100%;">
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
      </section>
      <section id="content">
        <nav class="shadow">
          <div>
            <h3 class="mx-5">Buku kas kelas</h3>
          </div>
          
       </nav>
       
      </section>
        <main>

    
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