<?php
session_start();
require '../../../../../koneksi.php';

//SESSION
if ($_SESSION['role'] !== 'sadmin') {
    header("Location: ../auth/login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bebas Tanggungan</title>
    <link rel="shortcut icon" type="image/png" href="../../../../assets/images/logos/jti.png" />
    <link rel="stylesheet" href="../../../../assets/css/styles.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="../index.php" class="text-nowrap logo-img">
                        <img src="../../../../assets/images/logos/logo.jpg" width="210" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Beranda</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../index.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4 "></i>
                            <span class="hide-menu">User</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="index.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-users"></i>
                                </span>
                                <span class="hide-menu">Mahasiswa</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../jurusan-page" aria-expanded="false">
                                <span>
                                    <i class="ti ti-users"></i>
                                </span>
                                <span class="hide-menu">Jurusan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../pusat-page" aria-expanded="false">
                                <span>
                                    <i class="ti ti-users"></i>
                                </span>
                                <span class="hide-menu">Pusat</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src=".//<?php echo $_SESSION['image'] ?>" alt="" width="40" height="40"
                                        class="rounded-circle" />
                                    <h5 class="m-2"><?php echo $_SESSION['username'] ?></h5>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <button id="logoutButton"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->
                <!--  Header End -->
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold mb-4">Forms</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <form action="form_handler.php" method="POST" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <div class="col-sm">
                                                    <label for="first_name" class="form-label">Nama
                                                        Depan</label>
                                                    <input type="text" class="form-control" id="first_name"
                                                        name="first_name" />
                                                </div>
                                                <div class="col-sm">
                                                    <label for="last_name" class="form-label">Nama
                                                        Belakang</label>
                                                    <input type="text" class="form-control" id="last_name"
                                                        name="last_name" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-6 ">
                                                    <label for="nim" class="form-label">Nim</label>
                                                    <input type="text" class="form-control" id="nim" name="nim" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" />
                                                    <div id="emailHelp" class="form-text">
                                                        We'll never share your email with anyone else.
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <label for="phone_number" class="form-label">No Telp</label>
                                                    <input type="text" class="form-control" id="phone_number"
                                                        name="phone_number" />
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password"
                                                    name="password" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="alamat" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Upload your image</label>
                                                <input class="form-control" type="file" id="formFile" accept="image/*"
                                                    name="image" />
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                Submit
                                            </button>
                                        </form>
                                        <!-- <form action="form_handler.php" method="POST" enctype="multipart/form-data">
                                            <input type="text" name="first_name" placeholder="First Name" required>
                                            <input type="text" name="last_name" placeholder="Last Name" required>
                                            <input type="text" name="nim" placeholder="NIM" required>
                                            <input type="email" name="email" placeholder="Email" required>
                                            <input type="password" name="password" placeholder="Password" required>
                                            <input type="text" name="phone_number" placeholder="Phone Number" required>
                                            <textarea name="alamat" placeholder="Address" required></textarea>
                                            <input type="file" name="image" required>
                                            <button type="submit">Submit</button>
                                        </form> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">
                        <span class="pe-1 text-primary text-decoration-underline">Bebas Tanggungan TA</span>
                        | Design and Developed by
                        <span class="pe-1 text-primary text-decoration-underline">Kelompok 4</span>
                </div>
            </div>
        </div>
    </div>
    <script src="../../../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../../assets/js/sidebarmenu.js"></script>
    <script src="../../../../assets/js/app.min.js"></script>
    <script src="../../../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../../../../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../../../../assets/js/dashboard.js"></script>
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
                    window.location.href = '../../../auth/logout.php';
                }
            });
        });
    </script>
</body>

</html>