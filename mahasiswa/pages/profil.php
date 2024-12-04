<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil</title>
  <link rel="shortcut icon" type="image/png" href="../../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../../assets/css/styles.min.css" />
  <style>
    .profile-card {
      max-width: 800px;
      margin: 2rem auto;
      padding: 2rem;
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .profile-picture {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      overflow: hidden;
      margin: 0 auto;
    }

    .profile-picture img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .profile-details {
      margin-top: 1.5rem;
    }

    .profile-details input {
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 0.5rem;
      width: 100%;
    }

    .profile-details label {
      margin-top: 1rem;
      font-weight: bold;
    }
  </style>
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
      <div class="container-fluid">
        <div class="profile-card">
          <div class="profile-picture">
            <img src="https://via.placeholder.com/120" alt="Profile Picture">
          </div>
          <div class="profile-details">
            <form>
              <div class="row">
                <div class="col-md-6">
                  <label for="namaDepan">Nama Depan</label>
                  <input type="text" id="namaDepan" value="Budiono">
                </div>
                <div class="col-md-6">
                  <label for="namaBelakang">Nama Belakang</label>
                  <input type="text" id="namaBelakang" value="Siregar">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6">
                  <label for="nip">NIP</label>
                  <input type="text" id="nip" value="2341234567">
                </div>
                <div class="col-md-6">
                  <label for="tanggalLahir">Tanggal Lahir</label>
                  <input type="text" id="tanggalLahir" value="11/01/2001">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6">
                  <label for="email">E-mail</label>
                  <input type="email" id="email" value="budionos@gmail.com">
                </div>
                <div class="col-md-6">
                  <label for="noTelp">No Telp</label>
                  <input type="text" id="noTelp" value="082341234567">
                </div>
              </div>
            </form>
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