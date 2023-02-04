<?php

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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

        <div class="d-flex flex-column flex-shrink-0 p-3 " style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto ">
      <li class="nav-item">
        <a href="#" class="nav-link" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Home
        </a>
      </li>
      <li>
        <a href="index.php?page=Buku" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Orders
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Products
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Customers
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>
      </section>
      <section id="content">
        <nav >
          <div class="">
            <h3>buku kas kelas</h3>
          </div>
        <!-- <div class="navbar">
           <h3>Buku Kas Kelas  </h3>
        </div> -->
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
    case "Buku":
      include "tampil.php";
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


