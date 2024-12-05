<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Status Verifikasi</title>
  <link rel="shortcut icon" type="image/png" href="../../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../../assets/css/styles.min.css" />
</head>

<body class="h-100">
  <div class="page-wrapper h-100" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include '../layer/sidebar.php'; ?>
    <!-- Sidebar End -->
    <div class="body-wrapper min-vh-100 d-flex flex-column justify-content-between">
      <!-- Header Start -->
      <?php include '../layer/header.php'; ?>
      <!-- Header End -->
      <!-- Main Content Start -->
      <div class="container-fluid h-75">
        <div class="card p-4">
          <div class="table-wrapper d-flex flex-column">
            <div class="header-wrapper d-flex justify-content-between align-items-center mb-2">
              <h4 class="fw-bold">Status Verifikasi Dokumen</h4>
              <div class="input-group mb-3" style="width: 30%">
                <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                  aria-describedby="basic-addon1">
              </div>
            </div>
            <table class="table justify-content-center">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Jenis Pengajuan</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Pengajuan Dokumen Syarat Kelulusan Kampus Polinema</td>
                  <td>Dokumen telah diverifikasi, silahkan hubungi Admin</td>
                  <td class="text-success">Terverifikasi</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Pengajuan Dokumen Syarat Kelulusan JTI</td>
                  <td>Dokumen belum diverifikasi</td>
                  <td class="text-warning">Belum Terverifikasi</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Pengajuan Dokumen Tugas Akhir</td>
                  <td>Ada kesalahan pada dokumen Anda, silahkan hubungi Admin</td>
                  <td class="text-danger">Gagal Terverifikasi</td>
                </tr>
              </tbody>
            </table>
            <nav>
              <ul class="pagination d-flex justify-content-end">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
          </div>
        </div>

      </div>
      <!-- Main Content End -->
      <!-- Footer Start -->
      <div class="footer h-25 center">
        <?php include '../layer/footer.php'; ?>
      </div>
      <!-- Footer End -->

    </div>
  </div>
  <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/js/sidebarmenu.js"></script>
  <script src="../../assets/js/app.min.js"></script>
  <script src="../../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>