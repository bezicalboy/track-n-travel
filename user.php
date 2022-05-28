<?php
session_start();
if (empty($_SESSION['nik'])) { ?>
    <script type="text/javascript">
        alert('Maaf Anda Belum Melakukan Login');
        window.location.assign('index.php');
    </script>
<?php } ?>

<!DOCTYPE html>
<html lang="en">
  <head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<title>
  
  TRACK&TRAVELS
  

  

  
</title>



<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
<link rel="stylesheet" href="style.css">

<!-- CSS Files -->



<link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.0" rel="stylesheet" />





  </head>


  <body class="g-sidenav-show  bg-gray-100">
    

    

    
      <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="user.php" target="_blank">
      
      <img src="./assets/img/tt.png" class="navbar-brand-img h-100" alt="main_logo">
      
      <span class="ms-1 font-weight-bold">TRACK & TRAVELS</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">

  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      

      
        

          

          
  
<li class="nav-item">
  <a class="nav-link " href="user.php">
    
      <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
      </div>
    
    <span class="nav-link-text ms-1">Dashboard</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link " href="?url=tulis_catatan">
    
      <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
        <i class="ni ni-ruler-pencil text-warning text-sm opacity-10"></i>
      </div>
    
    <span class="nav-link-text ms-1">Tulis Catatan Perjalanan</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link " href="?url=catatan_perjalanan">
    
      <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
        <i class="ni ni-book-bookmark text-success text-sm opacity-10"></i>
      </div>
    
    <span class="nav-link-text ms-1">Catatan Perjalanan</span>
  </a>
</li>

  


  

  
    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6"></h6>
    </li>
  
<li class="nav-item">
  <a class="nav-link " href="logout.php">
    
      <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
        <i class="ni ni-button-power text-dark text-sm opacity-10"></i>
      </div>
    
    <span class="nav-link-text ms-1">Logout</span>
  </a>
</li>

  




          

        
      
    </ul>
  </div>
  
  
  
</aside>
      <main class="main-content border-radius-lg ">
        <!-- Navbar -->


        

<!-- End Navbar -->


        


            <div class="container-fluid py-4">
                














<h6>Selamat Datang Di Aplikasi Track&Travels Dimana Anda Bisa Menulis Catatan Perjalanan</h6>

<div class="row">
  <div class="col-fluid">
    <div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-25">
        <div class="numbers">
          <p class="text-sm mb-0 text-uppercase font-weight-bold"> <?php
                        if (!empty($_GET['url'])) {
                            switch ($_GET['url']) {
                                case 'tulis_catatan';
                                    include 'tulis_catatan.php';
                                    break;

                                case 'catatan_perjalanan';
                                    include 'catatan_perjalanan.php';
                                    break;

                                case 'edit_catatan';
                                include'edit_catatan.php';
                                break;

                                default:
                                    echo "<h3>Halaman Tidak Ditemukan</h3>";
                                    break;
                            }
                        } else {
                          echo "Anda Login Sebagai : ";
                          echo "<h3>" . $_SESSION['nama_lengkap'] . "</h3>";
                          
                        }

                        ?></p>
          <h5 class="font-weight-bolder">
         
          </h5>
          
        </div>
      </div>
      <div class="col-4 text-end">
      
      </div>
    </div>
  </div>
</div>

  </div>

  



  </div>
</div>

<div id="footer">
                <footer class="footer pt-3">
  <div class="container-fluid">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="copyright text-center text-sm text-muted text-lg-start">
          © <script>
            document.write(new Date().getFullYear())
          </script>,
          Muhamad Rico Wijaya XII-RPL
          
        </div>
      </div>
      </div>
    </div>
  </div>
</footer>

            </div>

         
       </main>
    

      
          <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Pengaturan</h5>
          <p>Opsi dasbor</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        
       

        <!-- Sidenav Type -->
        
        <div class="mt-3">
          <h6 class="mb-0">Tipe Nav</h6>
          <p class="text-sm">Pilih antara 2 jenis sidenav yang berbeda.</p>
        </div>

        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">Terang</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Gelap</button>
        </div>

        <p class="text-sm d-xl-none d-block mt-2">Anda dapat mengubah jenis sidenav hanya pada tampilan desktop.</p>
        

        <!-- Navbar Fixed -->
        
        <!-- <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>     
        </div> -->
        

        

        <hr class="horizontal dark my-sm-4">

        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Terang / Gelap</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>          
        </div>
      </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/argon-dashboard.min.js?v=2.0.0"></script>
  </body>

</html>
