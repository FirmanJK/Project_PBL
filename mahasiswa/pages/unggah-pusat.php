<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bebas Tanggungan TA</title>
  <link rel="shortcut icon" type="image/png" href="../../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include '../layer/sidebar.php'; ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php include '../layer/header.php'; ?>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-bold mb-1">Unggah Dokumen Syarat Kelulusan Kampus Polinema</h5>
              <h6 class="card-sub-title fw-regular mb-1  text-danger">Pastikan dokumen yang
                unggah telah sesuai</h6>
              <hr class="mb-4">
              <form>
                <div class="mb-3">
                  <label for="fileSKLA" class="form-label">Surat Keterangan Lunas Administrasi (SKLA)</label> <br>
                  <label for="fileSKLA" class="form-sub-label  text-muted" style="margin-bottom: 2%;">Surat bukti bahwa telah
                    membayar biaya administrasi secara lunas <br>(format .pdf, maksimal 2MB)</label>
                  <input type="file" class="form-control" id="fileSKLA">
                </div>
                <div class="mb-3">
                  <label for="fileBebasPustaka" class="form-label">Surat Keterangan Bebas Pustaka dari Perpustakaan
                    Pusat</label><br>
                  <label for="fileSKLA" class="form-sub-label mb-3">Surat bukti bahwa tidak
                    memiliki tanggungandari Perpustakaan Pusat Polinema<br>(format .pdf, maksimal 2MB)</label>
                  <input type="file" class="form-control" id="fileBebasPustaka">
                </div>
                <div class="mb-3">
                  <label for="fileSimfoni" class="form-label">Bukti Mengisi Data Alumni (SIMFONI POLINEMA)</label><br>
                  <label for="fileSKLA" class="form-sub-label" style="margin-bottom: 2%;">(format .png/.jpg/.jpeg,
                    maksimal 2MB)</label><br>
                  <label for="fileSKLA" class="form-sub-label" style="margin-bottom: 2%;"><a href="https://forms.gle/eFJhCcG55PzZa8Qv5">https://forms.gle/eFJhCcG55PzZa8Qv5</a></label>
                  <input type="file" class="form-control" id="fileSimfoni"> 
                </div> 
                <br>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="cekUlang">
                  <label class="form-check-label" for="cekUlang">* Cek kembali file sebelum menekan tombol
                    simpan</label>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="fileTidakBisaDirubah">
                  <label class="form-check-label" for="fileTidakBisaDirubah">** File yang telah disimpan tidak bisa
                    dirubah</label>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="reset" class="btn btn-danger ms-3">Batal</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Start -->
      <?php include '../layer/footer.php'; ?>
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