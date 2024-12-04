<?php
session_start();
require '../../../../koneksi.php';

// SESSION
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'mahasiswa') {
    header("Location: ../../auth/login.php");
    exit;
}

// Proses upload dokumen
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $allowed_types = ['application/pdf']; // Hanya izinkan file PDF
    $max_file_size = 5 * 1024 * 1024; // Maksimal 5 MB
    $target_dir = "../../../assets/uploads/";


    // Pastikan semua file ter-upload
    $required_files = ['file_skla', 'file_toeic', 'file_skripsi'];
    $file_paths = [];
    $errors = [];

    foreach ($required_files as $field) {
        if (isset($_FILES[$field]) && $_FILES[$field]['error'] === UPLOAD_ERR_OK) {
            $file_name = uniqid() . "_" . basename($_FILES[$field]['name']);
            $file_tmp = $_FILES[$field]['tmp_name'];
            $file_type = mime_content_type($file_tmp);
            $file_size = $_FILES[$field]['size'];
            $target_file = $target_dir . $file_name;

            // Validasi tipe dan ukuran file
            if (!in_array($file_type, $allowed_types)) {
                $errors[] = "File $field harus berupa PDF.";
                continue;
            }

            if ($file_size > $max_file_size) {
                $errors[] = "Ukuran file $field terlalu besar. Maksimal 5 MB.";
                continue;
            }

            // Pindahkan file ke folder target
            if (move_uploaded_file($file_tmp, $target_file)) {
                $file_paths[$field] = $target_file;
            } else {
                $errors[] = "Gagal mengunggah file $field.";
            }
        } else {
            $errors[] = "File $field harus diunggah.";
        }
    }

    // Jika ada kesalahan, tampilkan error
    if (!empty($errors)) {
        $error = implode('<br>', $errors);
    } else {
        try {
            // Simpan data ke database
            $query = "INSERT INTO UnggahDokumenJurusan (user_id, file_skla, file_toeic, file_skripsi, status)
                      VALUES (:user_id, :file_skla, :file_toeic, :file_skripsi, 'Pending')";
            $stmt = $conn->prepare($query);
            $stmt->execute([
                ':user_id' => $_SESSION['user_id'],
                ':file_skla' => $file_paths['file_skla'],
                ':file_toeic' => $file_paths['file_toeic'],
                ':file_skripsi' => $file_paths['file_skripsi']
            ]);

            $success = "Dokumen berhasil diupload dan menunggu approval.";
        } catch (PDOException $e) {
            $error = "Terjadi kesalahan: " . htmlspecialchars($e->getMessage());
        }
    }
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
                                    <img src="../sadmin/mahasiswa-page/<?php echo $_SESSION['image'] ?>" alt="" width="40" height="40"
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
                                <h4 class="fw-semibold card-title">Unggah Dokumen Jurusan</h4>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <?php if (isset($error)): ?>
                                        <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
                                    <?php elseif (isset($success)): ?>
                                        <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
                                    <?php endif; ?>

                                    <!-- Form Upload -->
                                    <form action="form-jurusan.php" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="file_skla" class="form-label">Surat Keterangan Bebas
                                                Kompen:</label>
                                            <input type="file" name="file_skla" id="file_skla" class="form-control"
                                                required title="Unggah file PDF untuk Surat Keterangan Bebas Kompen">
                                        </div>
                                        <div class="mb-3">
                                            <label for="file_toeic" class="form-label">Hasil TOEIC:</label>
                                            <input type="file" name="file_toeic" id="file_toeic" class="form-control"
                                                required title="Unggah file PDF untuk hasil TOEIC Anda">
                                        </div>
                                        <div class="mb-3">
                                            <label for="file_skripsi" class="form-label">Laporan Skripsi:</label>
                                            <input type="file" name="file_skripsi" id="file_skripsi"
                                                class="form-control" required
                                                title="Unggah file PDF untuk laporan skripsi">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Unggah</button>
                                    </form>
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