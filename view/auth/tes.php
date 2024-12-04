<?php
session_start();
require '../../../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bebas Tanggungan</title>
  <!-- <link rel="shortcut icon" type="image/png" href="../../../assets/images/logos/favicon.png" /> -->
  <link rel="stylesheet" href="../../assets/css/styles.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body {
      background-image: url("../../assets/images/backgrounds/jti.jpg");
      background-repeat: no-repeat;
      background-size: 2000px 1000px;
    }
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0 rounded-2">
              <div class="card-body">
                <a href="#" class="text-nowrap logo-img text-center 5rem d-block py-3 w-100">
                  <img src="../../assets/images/logos/logo-2.jpg" width="" alt="" />
                </a>
                <p class="text-center">Politeknik Negeri Malang</p>
                <form method="POST">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp"
                      required />
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required />
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked />
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                  </div>
                  <button type="submit" name="login" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
                    Sign In
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>