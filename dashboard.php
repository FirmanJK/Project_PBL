<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bebas Tanggungan</title>
  <link rel="shortcut icon" type="image/png" href="../../../assets/images/logos/Sibeta1.png" />
  <link rel="stylesheet" href="../../../assets/css/styles.min.css" />
  <style>
    header.app-header {
      border-bottom: 1px solid #ddd; /* Warna dan ketebalan garis */
      margin-bottom: 10px; /* Jarak antara header dan konten berikutnya */
    }
    .deskripsi {
      background-color: #ECF4FF;
      padding: 50px 40px 40px 40px;
      border-radius: 15px;
      margin-top: 100px; 
    }
    .kelompok4 {
      position: fixed;  /* Menggunakan fixed agar selalu berada di bawah halaman */
      bottom: 0;
      left: 0;
      width: 100%;  /* Agar elemen mencakup seluruh lebar halaman */
      text-align: center;
      padding: 10px 0; /* Jarak di atas dan bawah teks */
      z-index: 10;
      margin-left: 180px;
    }
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-center">
          <a href="./unggah-dokumenPusat.php" class="text-nowrap logo-img">
            <img src="../../../assets/images/logos/Sibeta1.png" width="150" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">BERANDA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="dashboard.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./unggah-dokumenPusat.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file-text"></i>
                </span>
                <span class="hide-menu">Unggah Dokumen Pusat</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./unggah-dokumenJurusan.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file-text"></i>
                </span>
                <span class="hide-menu">Unggah Dokumen Jurusan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./unggah-tugasAkhir.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file-text"></i>
                </span>
                <span class="hide-menu">Unggah Tugas Akhir</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./status-verifikasi.php" aria-expanded="false">
                <span>
                  <i class="ti ti-checklist"></i>
                </span>
                <span class="hide-menu">Status Verifikasi</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->

    <!--  Main Wrapper (Content Section) -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="./notifikasi.php">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../../../assets/images/profile/dimas.jpg" alt="" width="40" height="40"
                    class="rounded-circle"/>
                    <p class="mb-0 ms-2 fs-5">2341720033 / Muhammad Dimas Ajie Nugroho</p>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                    </a>
                    <a href="./profile.php" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">Profil</p>
                    </a>                  
                    <button id="logoutButton" class="btn btn-outline-primary mx-3 mt-2 d-block">Keluar</button>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->

      <!--  Main Content Start -->
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-md-8 col-12 offset-lg-2 offset-md-2">
            <div class="deskripsi">  
              <h2>Selamat datang di Portal Bebas Tanggungan JTI Polinema</h2>
              <p>Portal Bebas Tanggungan Jurusan Teknologi Informasi Politeknik Negeri Malang</p><hr>
              <p>Digunakan sebagai portal repositori karya akhir berbentuk produk (seperti aplikasi) dan dokumen lengkap,
                karya akhir ini nantinya dapat diterbitkan melalui layanan hosting dan repositori yang terhubung dengan
                portal ini. Layanan ini hanya bisa diakses oleh satu mahasiswa per judul karya akhir, dengan akun yang
                terdaftar atas nama penulis utama. Untuk mulai menggunakan layanan ini, silakan klik "Lanjut." </p>
            </div>
          </div>
        </div>
      </div>
      <!--  Main Content End -->
    </div>
  </div>

  <script src="../../../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../../assets/js/sidebarmenu.js"></script>
  <script src="../../../assets/js/app.min.js"></script>
  <script src="../../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../../../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../../../assets/js/dashboard.js"></script>
</body>

</html>