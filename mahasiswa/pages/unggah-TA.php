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
        <div class="card">
          <div class="card-body">
            <div class="main-content p-2">
              <h5 class="card-title fw-semibold mb-4">Unggah Tugas Akhir</h5>
              <div class="upload-area p-4 mb-4 text-center rounded" id="uploadArea"
                style="background-color: #e3f2fd; border:2px dashed #90caf9;cursor: pointer;">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-cloud-upload">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1" />
                    <path d="M9 15l3 -3l3 3" />
                    <path d="M12 12l0 9" />
                  </svg>
                </span>
                <p>Letakkan file untuk mengunggah<br>atau</p>
                <button class="btn btn-primary" id="chooseFileButton">Pilih File</button>
                <input type="file" id="fileInput" class="d-none">
              </div>
              <form>
                <label for="namaFile">Nama File</label>
                <input type="text" id="namaFile" class="form-control mb-3" placeholder="Masukkan nama file">
                <label for="deskripsiSingkat">Deskripsi Singkat</label>
                <textarea id="deskripsiSingkat" class="form-control mb-3"
                  placeholder="Masukkan deskripsi singkat"></textarea>
                <div class="button d-flex justify-content-center "></div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="reset" class="btn btn-danger ms-3">Batal</button>
            </div>
            </form>
          </div>
        </div>
      </div>
       <!-- Footer Start -->
      <?php include '../layer/footer.php'; ?>
      <!-- Footer End -->
    </div>

    <script>
      const uploadArea = document.getElementById('uploadArea');
      const fileInput = document.getElementById('fileInput');
      const chooseFileButton = document.getElementById('chooseFileButton');

      // Buka file explorer ketika tombol "Pilih File" diklik
      chooseFileButton.addEventListener('click', () => {
        fileInput.click();
      });
      b
      // Tambahkan event listener untuk drag-and-drop
      uploadArea.addEventListener('dragover', (event) => {
        event.preventDefault();
        uploadArea.classList.add('dragover');
      });

      uploadArea.addEventListener('dragleave', () => {
        uploadArea.classList.remove('dragover');
      });

      uploadArea.addEventListener('drop', (event) => {
        event.preventDefault();
        uploadArea.classList.remove('dragover');

        const files = event.dataTransfer.files;
        handleFiles(files);
      });

      // Fungsi untuk menangani file yang dipilih atau diunggah
      fileInput.addEventListener('change', (event) => {
        const files = event.target.files;
        handleFiles(files);
      });

      function handleFiles(files) {
        if (files.length > 0) {
          alert(`File yang dipilih: ${files[0].name}`);
        } else {
          alert('Tidak ada file yang dipilih.');
        }
      }
    </script>
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/sidebarmenu.js"></script>
    <script src="../../assets/js/app.min.js"></script>
    <script src="../../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>