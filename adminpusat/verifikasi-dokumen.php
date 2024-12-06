<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SIBETA</title>
  <link rel="shortcut icon" type="image/png" href="../../../assets/images/logos/Sibeta.png" />
  <link rel="stylesheet" href="../../../assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./dashboard.php" class="text-nowrap logo-img">
            <img src="../../../assets/images/logos/Sibeta.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu" style="font-size: 16px;">BERANDA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="dashboard.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu" style="font-size: 16px;">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu" style="font-size: 16px;">Manajemen Sistem</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./arsip-tugasAkhir.php" aria-expanded="false">
                <span>
                  <i class="ti ti-archive"></i>
                </span>
                <span class="hide-menu"style="font-size: 16px;">Arsip Tugas Akhir</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./arsip-pusat.php" aria-expanded="false">
                <span>
                  <i class="ti ti-archive"></i>
                </span>
                <span class="hide-menu" style="font-size: 16px;">Arsip Pusat</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href ="./verifikasi-dokumen.php" aria-expanded="false">
                <span>
                  <i class="ti ti-checklist"></i>
                </span>
                <span class="hide-menu" style="font-size: 16px;">Verifikasi Dokumen</span>
                </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <div class="body-wrapper">
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
                <i class="ti ti-bell-ringing" style="font-size: 30px;"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
            </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../../../assets/images/profile/Firman.jpg" alt="" width="40" height="40"
                    class="rounded-circle" />
                    <p style="margin-top: 15px; margin-left: 10px;">1987656789 / Mochammad Firmandika Jati Kusuma</p>
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
              <li class="nav-item">
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <main class="col-md-9 col-lg-10 main-content" style="margin-left: 80px;">
  <!-- Add margin-top to offset the fixed header -->
  <div class="py-3">
    <div class="d-flex justify-content-between align-items-center mb-4" style="margin-top: 80px;">
      <div>
        <h2 class="title mb-0">Verifikasi Dokumen Syarat Kelulusan JTI</h2>
        <p style="color: grey; font-size: small; margin-top: 5px;">2 dokumen baru mengajukan verifikasi</p>
      </div>
      <form class="form-inline d-flex">
        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Cari</button>
      </form>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="list-group">
          <!-- Item 1 -->
          <div class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #add8e6; border-radius: 5px;">
            <span>
              <strong>Gunawan Tos Santos</strong> - 234198765 mengajukan verifikasi Tugas Akhir
              <br>
              <small style="color: grey;">Tanggal: 04-12-2024, Waktu : 14:00</small>
            </span>
            <div style="display: flex; gap: 10px;">
            <div>
                  <button class="btn btn-outline-primary btn-sm">✔</button>
                    <style>
                      .btn-outline-primary.btn-sm:hover {
                        background-color: #5bc0de;
                        color: white;
                        border-color: #5bc0de;
                      }
                    </style>
                    <button class="btn btn-outline-danger btn-sm">✖</button>
                    <style>
                      .btn-outline-danger.btn-sm:hover {
                        background-color: #FF4141;
                        color: white;
                        border-color: #FF4141;
                      }
                    </style>
                  </div>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #add8e6; border-radius: 5px;">
            <span>
              <strong>Putri Amelia Novita</strong> - 234198795 mengajukan verifikasi Tugas Akhir
              <br>
              <small style="color: grey;">Tanggal: 04-12-2024, Waktu : 14:15</small>
            </span>
            <div style="display: flex; gap: 10px;">
            <div>
                  <button class="btn btn-outline-primary btn-sm">✔</button>
                    <style>
                      .btn-outline-primary.btn-sm:hover {
                        background-color: #5bc0de;
                        color: white;
                        border-color: #5bc0de;
                      }
                    </style>
                    <button class="btn btn-outline-danger btn-sm">✖</button>
                    <style>
                      .btn-outline-danger.btn-sm:hover {
                        background-color: #FF4141;
                        color: white;
                        border-color: #FF4141;
                      }
                    </style>
                  </div>
            </div>
          </div>
          <div class="list-group-item d-flex justify-content-between align-items-center">
            <span>
              <strong>Farrel Caesarian</strong> - 234298795 mengajukan verifikasi Tugas Akhir
              <br>
              <small style="color: grey;">Tanggal : 04-12-2024, Waktu : 14:00</small>
            </span>
            <div>
            <div>
                  <button class="btn btn-outline-primary btn-sm">✔</button>
                    <style>
                      .btn-outline-primary.btn-sm:hover {
                        background-color: #5bc0de;
                        color: white;
                        border-color: #5bc0de;
                      }
                    </style>
                    <button class="btn btn-outline-danger btn-sm">✖</button>
                    <style>
                      .btn-outline-danger.btn-sm:hover {
                        background-color: #FF4141;
                        color: white;
                        border-color: #FF4141;
                      }
                    </style>
                  </div>
            </div>
          </div>
          <div class="list-group-item d-flex justify-content-between align-items-center">
            <span>
              <strong>Firmandika</strong> - 234191215 mengajukan verifikasi Tugas Akhir
              <br>
              <small style="color: grey;">Tanggal : 04-12-2024, Waktu : 14:00</small>
            </span>
            <div>
            <div>
                  <button class="btn btn-outline-primary btn-sm">✔</button>
                    <style>
                      .btn-outline-primary.btn-sm:hover {
                        background-color: #5bc0de;
                        color: white;
                        border-color: #5bc0de;
                      }
                    </style>
                    <button class="btn btn-outline-danger btn-sm">✖</button>
                    <style>
                      .btn-outline-danger.btn-sm:hover {
                        background-color: #FF4141;
                        color: white;
                        border-color: #FF4141;
                      }
                    </style>
                  </div>
            </div>
          </div>
          <div class="list-group-item d-flex justify-content-between align-items-center">
            <span>
              <strong>Firmandika</strong> - 234191215 mengajukan verifikasi Tugas Akhir
              <br>
              <small style="color: grey;">Tanggal: 04-12-2024, Waktu : 14:00</small>
            </span>
            <div>
           <button class="btn btn-outline-primary btn-sm">✔</button>
                    <style>
                      .btn-outline-primary.btn-sm:hover {
                        background-color: #5bc0de;
                        color: white;
                        border-color: #5bc0de;
                      }
                    </style>
                    <button class="btn btn-outline-danger btn-sm">✖</button>
                    <style>
                      .btn-outline-danger.btn-sm:hover {
                        background-color: #FF4141;
                        color: white;
                        border-color: #FF4141;
                      }
                    </style>
                  </div>
            </div>
          </div>
          <div class="list-group-item d-flex justify-content-between align-items-center">
            <span>
              <strong>Firmandika</strong> - 234191215 mengajukan verifikasi Tugas Akhir
              <br>
              <small style="color: grey;">Tanggal : 04-12-2024, Waktu : 14:00</small>
            </span>
            <div>
            <button class="btn btn-outline-primary btn-sm">✔</button>
                    <style>
                      .btn-outline-primary.btn-sm:hover {
                        background-color: #5bc0de;
                        color: white;
                        border-color: #5bc0de;
                      }
                    </style>
                    <button class="btn btn-outline-danger btn-sm">✖</button>
                    <style>
                      .btn-outline-danger.btn-sm:hover {
                        background-color: #FF4141;
                        color: white;
                        border-color: #FF4141;
                      }
                    </style>
                  </div>
            </div>
          </div>
        </div>
        <nav>
          <ul class="pagination justify-content-end mt-3">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Kembali</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Selanjutnya</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</main>

      <!-- Footer -->
       
      <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4" >
            <span class="pe-1 text-primary text-decoration-underline">Bebas Tanggungan TA</span>
            <span style="color: black;"> | Design and Developed by </span>
            <span class="pe-1 text-primary text-decoration-underline">Kelompok 4 <br><br><br><br><br><br></span>
          </p>
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