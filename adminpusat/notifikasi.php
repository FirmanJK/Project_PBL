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
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #ffff;
    }
    .app-header {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000; 
        background-color: #fff; 
    }
    .body-wrapper {
        margin-top: 100px; 
    }
    .container {
        width: 80%;
        margin: 10px auto;
        background: #fff;
        padding-left: 60px;
        padding-right: 60px;
        padding-top: 20px;
        padding-bottom: 20px;
        border-radius: 8px;
    }

    .header {
        display: flex;
        justify-content: space-between; /* Memisahkan elemen kiri dan kanan */
        align-items: center; /* Menjaga elemen tetap sejajar secara vertikal */
        margin-bottom: 10px;
    }

    .header-left {
        display: flex;
        flex-direction: column; /* Membuat judul dan teks status dalam kolom */
    }

    .header-left h2 {
        margin: 0;
    }

    .header h2 {
        margin: 0;
    }

    .btn-add {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-add:hover {
        background-color: #0056b3;
    }

    .search-bar {
        margin-bottom: 20px;
        text-align: center;
    }

    .search-bar input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn-action {
        border: none;
        cursor: pointer;
        padding: 5px;
        margin: 0 2px;
        border-radius: 3px;
    }

    .btn-edit {
        background-color: #007bff;
        color: #fff;
    }

    .btn-edit:hover {
        background-color: #0056b3;
    }

    .btn-delete {
        background-color: #dc3545;
        color: #fff;
    }

    .btn-delete:hover {
        background-color: #a71d2a;
    }

    .pagination {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
    }

    .pagination button {
        color: #007bff;
        padding: 10px;
        border: 1px solid #ddd;
        background-color: #fff;
        cursor: pointer;
        border-radius: 5px;
    }

    .pagination button:hover {
        background-color: #f4f4f4;
    }

    .page-numbers {
        display: flex;
    }

    .page-numbers button {
        margin: 0 5px;
    }
    .notification-status {
        margin-top: 5px; /* Jarak kecil antara judul dan teks status */
        font-size: 14px;
        color: #555;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px; /* Tambahkan jarak antara search bar dan tabel */
    }
    table tr {
        border-bottom: 1px solid #ddd;
    }
    table td {
        padding: 15px;
    }
    table td:last-child {
        text-align: center;
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
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
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
          <div class="header">
            <div class="header-left">
              <h2>Notifikasi</h2>
              <p class="notification-status">3 notifikasi belum dibaca</p>
            </div>
              <button class="btn-add"><i class="ti ti-bell-ringing fs-4"></i>Tandai sudah dibaca</button>
          </div>
          <div class="search-bar">
              <input type="text" placeholder="Pencarian...">
          </div>
          <table>
                <tbody>
                    <!-- Repeat for each row -->
                    <tr style="border-bottom: 1px solid #ddd; padding: 15px;">
                      <td style="padding: 15px;">Mahasiswa Mengajukan Verifikasi<br>Gunawan Tos Santos - 234198765 telah mengajukan verifikasi Tugas Akhir</td>
                      <td style="padding: 15px; text-align: right;">09:45 23/11/2024</td>
                      <td style="padding: 15px; text-align: center;">
                        <button class="btn-action btn-delete">
                          <i class="ti ti-trash"></i>
                        </button>
                      </td>
                    </tr>
                    <tr style="border-bottom: 1px solid #ddd; padding: 15px;">
                      <td style="padding: 15px;">Mahasiswa Mengajukan Verifikasi<br>Gunawan Tos Santos - 234198765 telah mengajukan verifikasi Tugas Akhir</td>
                      <td style="padding: 15px; text-align: right;">09:45 23/11/2024</td>
                      <td style="padding: 15px; text-align: center;">
                        <button class="btn-action btn-delete">
                          <i class="ti ti-trash"></i>
                        </button>
                      </td>
                    </tr>
                    <tr style="border-bottom: 1px solid #ddd; padding: 15px;">
                      <td style="padding: 15px;">Mahasiswa Mengajukan Verifikasi<br>Gunawan Tos Santos - 234198765 telah mengajukan verifikasi Tugas Akhir</td>
                      <td style="padding: 15px; text-align: right;">09:45 23/11/2024</td>
                      <td style="padding: 15px; text-align: center;">
                        <button class="btn-action btn-delete">
                          <i class="ti ti-trash"></i>
                        </button>
                      </td>
                    </tr>
                    <!-- Example row repetition -->
                    <!-- Copy above block for rows -->
                </tbody>
            </table>
          <div class="pagination">
              <button>Kembali</button>
              <div class="page-numbers">
                  <button>1</button>
                  <button>2</button>
                  <button>3</button>
              </div>
              <button>Selanjutnya</button>
          </div>
      </div>
      <!--  Main Content End -->
    </div>
  </div>

                <div class="py-8 px-8 text-center">
                    <p class="mb-30 fs-4">
                        <span class="pe-1 text-primary text-decoration-underline">Bebas Tanggungan TA</span>
                        | Design and Developed by
                        <span class="pe-1 text-primary text-decoration-underline">Kelompok 4</span>
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