<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bebas Tanggungan</title>
  <link rel="shortcut icon" type="image/png" href="../../../assets/images/logos/logo-jti.png" />
  <link rel="stylesheet" href="../../../assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    header.app-header {
      border-bottom: 1px solid #ddd;
      margin-bottom: 15px;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #fff;
      margin: 0;
      padding: 0;
    }

    .title {
      text-align: center; /* Center the title */
      margin: 0; /* Remove default margin */
    }
    .sidebar {
      height: 100vh;
      position: fixed;
    }

    .sidebar .nav-link {
      padding: 10px 20px;
      color: #333;
      font-size: 14px;
    }

    .sidebar .nav-link.active {
      background-color: #007bff;
      color: white;
    }

    .card {
      margin-top: 20px;
    }

    .pagination {
      justify-content: right;
      align-items: right;
      margin-top: 10px;
    }

    .main-content {
      padding-top: 80px;
      margin:0 auto;
    }

    h2 {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./dashboard.php" class="text-nowrap logo-img">
            <img src="../../../assets/images/logos/jti-polinema.png" width="220" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
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
              <a class="sidebar-link" href="./arsip-jurusan.php" aria-expanded="false">
                <span>
                  <i class="ti ti-archive"></i>
                </span>
                <span class="hide-menu">Arsip Jurusan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./verifikasi-tugasAkhir.php" aria-expanded="false">
                <span>
                  <i class="ti ti-checklist"></i>
                </span>
                <span class="hide-menu">Verifikasi Tugas Akhir</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href ="./verifikasi-dokumen.php" aria-expanded="false">
                <span>
                  <i class="ti ti-checklist"></i>
                </span>
                <span class="hide-menu">Verifikasi Dokumen</span>
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
                  <img src="../../../assets/images/profile/Farrel-Caesarian.jpg" alt="" width="35" height="35"
                    class="rounded-circle" />
                    <p class="mb-0 ms-2 fs-5">Muhammad Farrel Caesarian</p>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="./data-mahasiswa.php" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-school fs-6"></i>
                      <p class="mb-0 fs-3">Data Mahasiswa</p>
                    </a>
                    <a href="./profile.php" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>                  
                    <button id="logoutButton" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</button>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <main class="col-md-9 col-lg-10 main-content">
      <div class="py-3">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2 class="title mb-0">Verifikasi Dokumen</h2>
          <form class="form-inline d-flex">
            <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="list-group">
              <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                  <strong>Gunawan Tos Santos</strong> - 234198765 mengajukan verifikasi Tugas Akhir
                </span>
                <div>
                  <button class="btn btn-success btn-sm">✔</button>
                  <button class="btn btn-danger btn-sm">✖</button>
                </div>
              </div>
              <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                  <strong>Putri Amelia Novita</strong> - 234198795 mengajukan verifikasi Tugas Akhir
                </span>
                <div>
                  <button class="btn btn-success btn-sm">✔</button>
                  <button class="btn btn-danger btn-sm">✖</button>
                </div>
              </div>
              <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                  <strong>Farrel Caesarian</strong> - 234298795 mengajukan verifikasi Tugas Akhir
                </span>
                <div>
                  <button class="btn btn-success btn-sm">✔</button>
                  <button class="btn btn-danger btn-sm">✖</button>
                </div>
              </div>
              <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                  <strong>Firmandika</strong> - 234191215 mengajukan verifikasi Tugas Akhir
                </span>
                <div>
                  <button class="btn btn-success btn-sm">✔</button>
                  <button class="btn btn-danger btn-sm">✖</button>
                </div>
              </div>
            </div>
            <nav>
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      </main>
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