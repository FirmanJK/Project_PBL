<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Status Verifikasi</title>
  <link rel="shortcut icon" type="image/png" href="../../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../../assets/css/styles.min.css" />
  <style>
    body {
      background-color: #ffffff;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      /* Menjamin body minimal setinggi viewport */
      display: flex;
      /* Menggunakan Flexbox */
      flex-direction: column;
      justify-content: space-between;
      /* Mengatur elemen menjadi kolom */
    }

    .container-fluid {
      /* flex: 1; */
      
      height: 100%;
      /* Mengisi ruang yang tersisa */
    }

    .card {
      padding: 20px;
    }

    .table-wrapper {
      display: flex;
      flex-direction: column;
    }

    .header-wrapper {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }

    .body-wrapper {
      min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .header-wrapper h2 {
      margin: 0;
      font-size: 20px;
      font-weight: bold;
      color: #333;
    }

    .search-bar input {
      padding: 8px 12px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
      width: 250px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      border-radius: 20px;
      /* Membulatkan sudut */
      overflow: hidden;
      /* Menyembunyikan elemen di luar radius */
      border: 1px solid black;
      /* Garis luar tabel */
    }

    table th,
    table td {
      text-align: left;
      padding: 12px;
      border-bottom: 1px solid #ddd;
    }

    table th {
      background-color: #f9f9fc;
      font-weight: bold;
    }

    table tr:hover {
      background-color: #f5f5f5;
    }

    .pagination {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .pagination a {
      text-decoration: none;
      padding: 8px 12px;
      border: 1px solid #ddd;
      color: #007bff;
      border-radius: 5px;
      margin: 0 5px;
      font-size: 14px;
    }

    .pagination a:hover {
      background-color: #007bff;
      color: white;
    }

    .footer {
      /* align-items: flex-end; */
    }
  </style>
</head>

<body class="h-100">
  <div class="page-wrapper h-100" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include '../layer/sidebar.php'; ?>
    <!-- Sidebar End -->
    <div class="body-wrapper h-100">
      <!-- Header Start -->
      <?php include '../layer/header.php'; ?>
      <!-- Header End -->
      <!-- Main Content Start -->
      <div class="container-fluid h-75">
        <div class="card">
          <div class="table-wrapper">
            <div class="header-wrapper">
              <h2>Status Verifikasi Dokumen</h2>
              <div class="search-bar">
                <input type="text" placeholder="Search..." />
              </div>
            </div>
            <table>
              <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis Pengajuan</th>
                  <th>Keterangan</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Pengajuan Dokumen Syarat Kelulusan Kampus Polinema</td>
                  <td>Dokumen telah diverifikasi, silahkan hubungi Admin</td>
                  <td style="color: green;">Terverifikasi</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Pengajuan Dokumen Syarat Kelulusan JTI</td>
                  <td>Dokumen belum diverifikasi</td>
                  <td style="color: orange;">Belum Terverifikasi</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Pengajuan Dokumen Tugas Akhir</td>
                  <td>Ada kesalahan pada dokumen Anda, silahkan hubungi Admin</td>
                  <td style="color: red;">Gagal Terverifikasi</td>
                </tr>
              </tbody>
            </table>
            <div class="pagination">
              <a href="#">Previous</a>
              <a href="#">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">Next</a>
            </div>
          </div>
        </div>

      </div>
      <!-- Main Content End -->
      <!-- Footer Start -->
      <div class="footer h-25">
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