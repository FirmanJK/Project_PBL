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
    <div class="body-wrapper min-vh-100 d-flex flex-column justify-content-between">
      <!--  Header Start -->
      <?php include '../layer/header.php'; ?>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-bold mb-1">Unggah Dokumen Syarat Kelulusan JTI</h5>
            <h6 class="card-sub-title fw-regular mb-1  text-danger">Pastikan dokumen yang
              unggah telah sesuai</h6>
            <hr class="mb-4">
            <form>
              <div class="mb-3">
                <label for="fileBebasKompen" class="form-label">Surat Keterangan Bebas Kompen</label><br>
                <label for="fileBebasKompen" class="form-sub-label mb-3">Surat bukti bahwa tidak memiliki tanggungan
                  kompen<br>(format .pdf, maksimal 2MB)</label>
                <input type="file" class="form-control" id="fileBebasKompen">
              </div>
              <div class="mb-3">
                <label for="fileTOEIC" class="form-label">Hasil Tes TOEIC</label><br>
                <label for="fileTOEIC" class="form-sub-label" style="margin-bottom: 2%;">(format .pdf, maksimal
                  2MB)</label>
                <input type="file" class="form-control" id="fileTOEIC">
              </div>
              <div class="mb-3">
                <label for="fileMagangSkripsi" class="form-label">Laporan Magang/Skripsi</label><br>
                <label for="fileMagangSkripsi" class="form-sub-label" style="margin-bottom: 2%;">(format .pdf, maksimal
                  20MB)</label>
                <input type="file" class="form-control" id="fileMagangSkripsi">
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