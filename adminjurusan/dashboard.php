

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SIBETA</title>
  <link rel="shortcut icon" type="image/png" href="../../../assets/images/logos/icon-logo.png" />
  <link rel="stylesheet" href="../../../assets/css/styles.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Selamat datang di Portal Bebas Tanggungan JTI Polinema</h5>
                <h6 class="card-subtitle mb-2 text-muted"">Portal Bebas Tanggungan Jurusan Teknologi Informasi Politeknik
                  Negeri Malang</h6>
                <hr>
                <p class=" card-text">Digunakan sebagai portal repositori karya akhir berbentuk produk (seperti
                  aplikasi)
                  dan dokumen lengkap, karya akhir ini nantinya dapat diterbitkan melalui layanan hosting dan repositori
                  yang terhubung dengan portal ini. Layanan ini hanya bisa diakses oleh satu mahasiswa per judul karya
                  akhir, dengan akun yang terdaftar atas nama penulis utama. Untuk mulai
                  menggunakan layanan ini, silakan klik "Lanjut." </p>
                  <a href="./arsip-tugasAkhir.php" class="btn btn-primary">Lanjut</a>
              </div>
            </div>
          </div>
        </div><br><br><br><br><br><br><br><br>
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4" >
            <span class="pe-1 text-primary text-decoration-underline">Bebas Tanggungan TA</span>
            | Design and Developed by
            <span class="pe-1 text-primary text-decoration-underline">Kelompok 4</span>
          </p>
        </div>
      </div>
    </div>
  </div>
  <script src="../../../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../../assets/js/sidebarmenu.js"></script>
  <script src="../../../assets/js/app.min.js"></script>
  <script src="../../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../../../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../../../assets/js/dashboard.js"></script>
  <script>
    document.getElementById('logoutButton').addEventListener('click', function () {
      // Tampilkan konfirmasi SweetAlert2
      Swal.fire({
        title: 'Yakin ingin logout?',
        text: "Anda akan keluar dari sesi ini.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, logout!',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {
          // Arahkan ke logout.php jika pengguna memilih "Ya"
          window.location.href = '../../auth/logout.php';
        }
      });
    });
  </script>
</body>

</html>
