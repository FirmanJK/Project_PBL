<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ARSIP PUSAT</title>
  <link rel="shortcut icon" type="image/png" href="../../../assets/images/logos/Sibeta.png" />
  <link rel="stylesheet" href="../../../assets/css/styles.min.css" />
</head>

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
              <span class="hide-menu">Manajemen Sistem</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./arsip-tugasAkhir.php" aria-expanded="false">
                <span>
                  <i class="ti ti-archive"></i>
                </span>
                <span class="hide-menu" style="font-size: 16px;">Arsip Tugas Akhir</span>
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
              <a class="sidebar-link" href="./verifikasi-dokumen.php" aria-expanded="false">
                <span>
                  <i class="ti ti-checklist"></i>
                </span>
                <span class="hide-menu" style="font-size: 16px;">Verifikasi Dokumen</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header" style=" margin-bottom: 15px;">
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
      
      <!--Menu Arsip Tugas Akhir -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Wrapper untuk heading dan search -->
            <div class="d-flex flex-column align-items-center mb-4">
              <h2 style="margin-bottom: 10px;">Arsip Dokumen Pusat</h2>
              <div class="input-group mt-2" style="max-width: 500px;">
                <input type="text" class="form-control" placeholder="Cari Nama Penyusun" aria-label="Cari Nama Penyusun" />
                <button class="btn btn-outline-secondary" type="button">
                  <i class="ti ti-search"></i>
                </button>
              </div>
            </div>
            <!-- Tabel Arsip -->
            <div class="table-responsive" style="max-width: 900px; margin: 0 auto;">
              <table class="table table-striped" style="width:100%;">
                <thead class="table-light">
                  <tr>
                    <th scope="col">Nama Dokumen</th>
                    <th scope="col">Tanggal Unggah</th>
                    <th scope="col">Penyusun</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Surat Keterangan Lunas Administrasi</td>
                    <td>2 April 2024, 4:54</td>
                    <td>Abdi Pamungkas</td>
                    <td>
                      <button class="btn btn-primary btn-sm">
                        <i class="ti ti-download"></i> Unduh
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Surat Keterangan Bebas Pustaka</td>
                    <td>21 April 2024, 4:54</td>
                    <td>Edo Setiawan S.Ter</td>
                    <td>
                      <button class="btn btn-primary btn-sm">
                        <i class="ti ti-download"></i> Unduh
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Bukti Mengisi Data Alumni</td>
                    <td>2 Mei 2024, 4:54</td>
                    <td>Popo Putri</td>
                    <td>
                      <button class="btn btn-primary btn-sm">
                        <i class="ti ti-download"></i> Unduh
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Surat Keterangan Bebas Pustaka</td>
                    <td>2 April 2020, 4:54</td>
                    <td>Adi Kencono S.Ter</td>
                    <td>
                      <button class="btn btn-primary btn-sm">
                        <i class="ti ti-download"></i> Unduh
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Surat Keterangan Lunas Administrasi</td>
                    <td>30 April 2021, 4:54</td>
                    <td>Bobby Putra</td>
                    <td>
                      <button class="btn btn-primary btn-sm">
                        <i class="ti ti-download"></i> Unduh
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Bukti Mengisi Data Alumni</td>
                    <td>1 Agustus 2019, 4:54</td>
                    <td>Eka Dewi Mayang</td>
                    <td>
                      <button class="btn btn-primary btn-sm">
                        <i class="ti ti-download"></i> Unduh
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <nav>
              <ul class="pagination" style="display: flex; justify-content: flex-end; margin-right: 150px;">
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
      <!--End Menu Arsip Tugas Akhir -->
      <!-- Footer -->
        <div class="py-6 px-6 text-center">
          <br><br><br>
          <p class="mb-0 fs-4" style="text-align: bottom;">
            <span class="pe-1 text-primary text-decoration-underline">Bebas Tanggungan TA</span>
            <span style="color: black;"> | Design and Developed by </span>
            <span class="pe-1 text-primary text-decoration-underline">Kelompok 4</span>
          </p>
        </div>
      <!-- Footer End-->

  <script src="../../../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../../assets/js/sidebarmenu.js"></script>
  <script src="../../../assets/js/app.min.js"></script>
  <script src="../../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../../../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../../../assets/js/dashboard.js"></script>
</body>

</html>