<?php
session_start();
require '../../../../koneksi.php';

//SESSION
if ($_SESSION['role'] !== 'mahasiswa') {
    header("Location: ../../auth/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bebas Tanggungan</title>
    <link rel="shortcut icon" type="image/png" href="../../../assets/images/logos/jti.png" />
    <link rel="stylesheet" href="../../../assets/css/styles.min.css" />
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
                    <a href="index.php" class="text-nowrap logo-img">
                        <img src="../../../assets/images/logos/logo.jpg" width="210" alt="" />
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
                            <a class="sidebar-link" href="index.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Manajemen Sistem</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="form-ta.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-archive"></i>
                                </span>
                                <span class="hide-menu">Unggah Tugas Akhir</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="form-pusat.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-archive"></i>
                                </span>
                                <span class="hide-menu">Unggah Dokumen Pusat</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="form-jurusan.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-archive"></i>
                                </span>
                                <span class="hide-menu">Unggah Dokumen Jurusan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="status.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-checklist"></i>
                                </span>
                                <span class="hide-menu">Status Verifikasi Tugas Akhir</span>
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
                                    <img src="../sadmin/mahasiswa-page/<?php echo $_SESSION['image'] ?>" alt=""
                                        width="40" height="40" class="rounded-circle" />
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
                            <li class="nav-item">
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->

            <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <div class="col d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body p-4">
                                <h4 class="mb-0">Status Verifikasi Dokumen</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="table-primary">
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
                                                <td><span class="badge bg-success">Terverifikasi</span></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Pengajuan Dokumen Syarat Kelulusan JTI</td>
                                                <td>Dokumen belum diverifikasi</td>
                                                <td><span class="badge bg-warning text-dark">Belum Terverifikasi</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Pengajuan Dokumen Tugas Akhir</td>
                                                <td>Ada kesalahan pada dokumen Anda, silahkan hubungi Admin</td>
                                                <td><span class="badge bg-danger">Gagal Terverifikasi</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-6 px-6 text-center">
                        <p class="mb-0 fs-4">
                            <span class="pe-1 text-primary text-decoration-underline">Bebas Tanggungan TA</span>
                            | Design and Developed by
                            <span class="pe-1 text-primary text-decoration-underline">Kelompok 4</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/js/sidebarmenu.js"></script>
    <script src="../../../assets/js/app.min.js"></script>
    <!-- <script src="../../../assets/libs/apexcharts/dist/apexcharts.min.js"></script> -->
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