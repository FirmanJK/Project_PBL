<?php
session_start();
require '../../../../koneksi.php';

//SESSION
if ($_SESSION['role'] !== 'mahasiswa') {
    header("Location: ../../auth/login.php");
    exit;
}

if (!isset($_SESSION['user_id'])) {
    die("User ID tidak ditemukan. Harap login kembali.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $file_ta = trim($_POST['file_ta']);
    $nama = trim($_POST['nama']);
    $deskripsi = trim($_POST['deskripsi']);
    $user_id = $_SESSION['user_id']; // Asumsikan user_id disimpan di session

    // Validasi data
    if (empty($file_ta) || empty($nama) || empty($deskripsi)) {
        die("Semua field wajib diisi.");
    }

    try {
        // Query untuk menyimpan data
        $query = "INSERT INTO UnggahDokumenTA (user_id, file_ta, nama, deskripsi, status, created_at, updated_at)
                  VALUES (?, ?, ?, ?, 'Pending', GETDATE(), GETDATE())";
        $stmt = $conn->prepare($query);
        $stmt->execute([$user_id, $file_ta, $nama, $deskripsi]);

        echo "<script>alert('Dokumen berhasil diunggah!'); window.location.href = 'form-ta.php';</script>";
    } catch (PDOException $e) {
        echo "Terjadi kesalahan: " . $e->getMessage();
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
                <div class="card">
                    <div class="card-body">
                        <div class="main-content">
                            <h5 class="card-title fw-semibold mb-4">Unggah Tugas Akhir</h5>
                            <!-- <div class="upload-area" id="uploadArea">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-cloud-upload">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1" />
                                        <path d="M9 15l3 -3l3 3" />
                                        <path d="M12 12l0 9" />
                                    </svg>
                                </span>
                                <p>Drag and Drop untuk mengunggah <br>atau</p>
                                <button class="btn btn-primary" id="chooseFileButton">Pilih File</button>
                                <input type="file" id="fileInput">
                            </div> -->
                            <form action="form-ta.php" method="POST">
                                <div class="mb-3">
                                    <label for="file_ta" class="form-label">Link Dokumen</label>
                                    <input type="url" id="file_ta" name="file_ta" class="form-control"
                                        placeholder="Masukkan link dokumen" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama File</label>
                                    <input type="text" id="nama" name="nama" class="form-control"
                                        placeholder="Masukkan nama file" required>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi Singkat</label>
                                    <textarea id="deskripsi" name="deskripsi" class="form-control"
                                        placeholder="Masukkan deskripsi singkat" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <button type="reset" class="btn btn-danger">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/js/sidebarmenu.js"></script>
    <script src="../../../assets/js/app.min.js"></script>
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
    <script>
        const uploadArea = document.getElementById('uploadArea');
        const fileInput = document.getElementById('fileInput');
        const chooseFileButton = document.getElementById('chooseFileButton');

        // Buka file explorer ketika tombol "Pilih File" diklik
        chooseFileButton.addEventListener('click', () => {
            fileInput.click();
        });

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
</body>

</html>