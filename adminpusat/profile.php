<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SIBETA</title>
  <link rel="shortcut icon" type="image/png" href="../../../assets/images/logos/Sibeta.png" />
  <link rel="stylesheet" href="../../../assets/css/styles.min.css" />

</head>
    <style>
    header.app-header {
      border-bottom: 1px solid #ddd; /* Warna dan ketebalan garis */
      margin-bottom: 15px; /* Jarak antara header dan konten berikutnya */
    }

    .profile-container {
      width: 400px;
      height: 460px;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 6px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    .profile-container img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }
    .profile-container h2 {
      font-size: 18px;
      margin-bottom: 20px;
      color: #333;
    }
    .main-profile {
      font-family: Arial, sans-serif;
      margin: 0 auto; /* Tengah secara horizontal */
      background-color: #fff;
      padding-top: 100px; /* Jarak dari header */
      padding-left: 300px;
    }
    .form-row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 15px;
    }
    .form-row div {
      width: 48%;
    }
    .form-row label {
      display: block;
      font-size: 14px;
      color: #666;
      margin-bottom: 5px;
    }
    .form-row input {
      width: 100%;
      padding: 8px;
      font-size: 14px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }
    </style>
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./dashboard.php" class="text-nowrap logo-img">
            <img src="../../../assets/images/logos/Sibeta.png" width="180" alt="" />
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
              <span class="hide-menu">Beranda</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="dashboard.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Manajemen Sistem</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./arsip-tugasAkhir.php" aria-expanded="false">
                <span>
                  <i class="ti ti-archive"></i>
                </span>
                <span class="hide-menu">Arsip Tugas Akhir</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./arsip-pusat.php" aria-expanded="false">
                <span>
                  <i class="ti ti-archive"></i>
                </span>
                <span class="hide-menu">Arsip Pusat</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./verifikasi-dokumen.php" aria-expanded="false">
                <span>
                  <i class="ti ti-checklist"></i>
                </span>
                <span class="hide-menu">Verifikasi Dokumen</span>
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
                  <img src="../../../assets/images/profile/Firman.jpg" alt="" width="40" height="35"
                    class="rounded-circle" />
                    <p class="mb-0 ms-2 fs-5">1987656789 / Mochammad Firmandika Jati Kusuma</p>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
              
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
        <div class="main-profile">
      <div class="profile-container">
        <img src="../../../assets/images/profile/Firman.jpg" alt="Profile Picture">
        <h2>Profil</h2>
        <form>
          <div class="form-row">
            <div>
              <label for="first-name">Nama Depan</label>
              <input type="text" id="first-name" value="Mutiara">
            </div>
            <div>
              <label for="last-name">Nama Belakang</label>
              <input type="text" id="last-name" value="Azzahra">
            </div>
          </div>
          <div class="form-row">
            <div>
              <label for="nip">NIP</label>
              <input type="text" id="nip" value="2341234567">
            </div>
            <div>
              <label for="dob">Tanggal Lahir</label>
              <input type="text" id="dob" value="11/01/2001">
            </div>
          </div>
          <div class="form-row">
            <div>
              <label for="email">E-mail</label>
              <input type="email" id="email" value="mutteee@gmail.com">
            </div>
            <div>
              <label for="phone">No Telp</label>
              <input type="text" id="phone" value="082341234567">
            </div>      
          </div>
          <div style="text-align: center; margin-left: 250px;">
              <a href="editProfile.php" type="button" style="padding: 10px 20px; font-size: 14px; border: none; background-color: #007bff; color: white; border-radius: 5px; cursor: pointer;">
                Edit Profile
              </a>
            </div>
        </form>
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