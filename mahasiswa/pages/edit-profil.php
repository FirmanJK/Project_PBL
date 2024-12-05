<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bebas Tanggungan</title>
  <link rel="shortcut icon" type="image/png" href="../../assets/images/logos/icon-logo.png" />
  <link rel="stylesheet" href="../../assets/css/styles.min.css" />

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include '../layer/sidebar.php'; ?>
    <div class="body-wrapper min-vh-100 d-flex flex-column justify-content-between">
      <!--  Header Start -->
      <?php include '../layer/header.php'; ?>
      <!--  Header End -->

      <!--  Main Content Start -->

      <div
        style="width: 100%; max-width: 800px; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); margin: auto; margin-top: 100px; ">
        <h2 style="font-size: 20px; margin-bottom: 20px; color: #333; text-align: center;">Edit Profil</h2>
        <div style="text-align: center;">
          <img src="../../assets/images/profile/user-1.jpg " alt="" width="100" height="100"
            style="border-radius: 50%; margin-bottom:20px;">
        </div>
        <form>
          <div class="row mb-1">
            <!-- Kolom Kiri -->
            <div class="col-md-6">
              <div class="mb-3">
                <label for="first-name" class="form-label">Nama Depan</label>
                <input type="text" id="first-name" class="form-control" value="Budiono">
              </div>
              <div class="mb-3">
                <label for="nip" class="form-label">NIM</label>
                <input type="text" id="nip" class="form-control" value="2341230001" disabled>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" id="email" class="form-control" value="budionooo@gmail.com">
              </div>
            </div>
            <!-- Kolom Kanan -->
            <div class="col-md-6">
              <div class="mb-3">
                <label for="last-name" class="form-label">Nama Belakang</label>
                <input type="text" id="last-name" class="form-control" value="Siregar">
              </div>
              <div class="mb-3">
                <label for="dob" class="form-label">Tanggal Lahir</label>
                <input type="text" id="dob" class="form-control" value="11/01/2005">
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">No Telp</label>
                <input type="text" id="phone" class="form-control" value="08234567891">
              </div>
            </div>
          </div>
          <!-- Alamat -->
          <div class="mb-4">
            <label for="address" class="form-label">Alamat</label>
            <input type="text" id="address" class="form-control" value="Jalan Kenangan No. 123, Jakarta, Indonesia">
          </div>
          <!-- Tombol -->
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="reset" class="btn btn-danger ms-3">Batal</button>
          </div>
        </form>

      </div>


      <!-- Footer -->

      <!-- Footer End-->
      <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
      <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../../assets/js/sidebarmenu.js"></script>
      <script src="../../assets/js/app.min.js"></script>
      <script src="../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
      <script src="../../assets/libs/simplebar/dist/simplebar.js"></script>
      <script src="../../assets/js/dashboard.js"></script>
</body>

</html>