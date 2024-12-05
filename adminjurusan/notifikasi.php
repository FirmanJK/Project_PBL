<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SIBETA</title>
  <link rel="shortcut icon" type="image/png" href="../../../assets/images/logos/icon-logo.png" />
  <link rel="stylesheet" href="../../../assets/css/styles.min.css" />

</head>
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    
    <?php include './sidebar.php'; ?>
    <div class="body-wrapper min-vh-100 d-flex flex-column justify-content-between">
      <!--  Header Start -->
    <?php include './header.php'; ?>

      <!--  Main Content Start -->
      <div class="container-fluid h-75">
        <div class="card p-4">
          <div class="container">
            <div class="header-wrapper d-flex justify-content-between align-items-center mb-2">
              <h4 class="fw-bold">Notifikasi</h4>
              <button class="btn-add btn btn-primary">
                <i class="ti ti-bell-ringing fs-4"></i> Tandai sudah dibaca
              </button>
            </div>
            <div class="action-wrapper d-flex justify-content-between align-items-center mb-3">
              <p class="notification-status">3 notifikasi belum dibaca</p>

              <div class="input-group" style="width: 30%">
                <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                  aria-describedby="basic-addon1">
              </div>
            </div>
            <div class="notification-list">
              <table class="table ">
                <tbody>
                  <!-- Repeat for each row -->
                  <tr>
                    <td>Mahasiswa Mengajukan Verifikasi<br>Gunawan Tos Santos - 234198765 telah mengajukan verifikasi
                      Tugas Akhir</td>
                    <td style="text-align: right;">09:45 23/11/2024</td>
                    <td style="text-align: center;">
                      <button class="btn-action btn-delete btn btn-danger btn-sm">
                        <i class="ti ti-trash"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Mahasiswa Mengajukan Verifikasi<br>Gunawan Tos Santos - 234198765 telah mengajukan verifikasi
                      Tugas Akhir</td>
                    <td style="text-align: right;">09:45 23/11/2024</td>
                    <td style="text-align: center;">
                      <button class="btn-action btn-delete btn btn-danger btn-sm">
                        <i class="ti ti-trash"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Mahasiswa Mengajukan Verifikasi<br>Gunawan Tos Santos - 234198765 telah mengajukan verifikasi
                      Tugas Akhir</td>
                    <td style="text-align: right;">09:45 23/11/2024</td>
                    <td style="text-align: center;">
                      <button class="btn-action btn-delete btn btn-danger btn-sm">
                        <i class="ti ti-trash"></i>
                      </button>
                    </td>
                  </tr>
                  <!-- Additional rows if needed -->
                </tbody>
              </table>
            </div>
            <nav>
              <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
          </div>
      <!--  Main Content End -->
    </div>
    
  </div>
      <!-- Footer -->
        
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