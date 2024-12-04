<?php
session_start();

require '../../../../koneksi.php';

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// Session check
if ($_SESSION['role'] !== 'jurusan') {
    header("Location: ../../auth/login.php");
    exit;
}

// Query untuk mendapatkan data dokumen yang statusnya Pending
$query = "SELECT ta_id, user_id, file_ta, nama, deskripsi, status, komentar 
          FROM UnggahDokumenTA WHERE status = 'Pending'";

// Proses form submission (approve/reject)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ta_id'])) {
    $ta_id = $_POST['ta_id'];
    $status = $_POST['status'];
    $komentar = trim($_POST['komentar']);

    try {
        $query = "UPDATE UnggahDokumenTA 
                  SET status = :status, komentar = :komentar, updated_at = GETDATE() 
                  WHERE ta_id = :ta_id";
        $stmt = $conn->prepare($query);
        $stmt->execute([
            ':status' => $status,
            ':komentar' => $komentar,
            ':ta_id' => $ta_id
        ]);
        $success = "Dokumen berhasil di-" . $status . ".";
    } catch (PDOException $e) {
        $error = "Terjadi kesalahan: " . $e->getMessage();
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
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="../../../assets/images/logos/sibeta.png" width="120" alt="" />
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
                        <!-- Additional Menu Items here -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Manajemen Sistem</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="arsip-ta.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-archive"></i>
                                </span>
                                <span class="hide-menu">Arsip Tugas Akhir</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="arsip-jurusan.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-archive"></i>
                                </span>
                                <span class="hide-menu">Arsip Jurusan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="verif-ta.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-checklist"></i>
                                </span>
                                <span class="hide-menu">Verifikasi Tugas Akhir</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="verif-doc.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-checklist"></i>
                                </span>
                                <span class="hide-menu">Verifikasi Dokumen</span>
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
                    <!-- Navbar content -->
                </nav>
            </header>
            <!--  Header End -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body p-4">
                                <div class="table-responsive" style="max-width: 900px; margin: 0 auto;">
                                    <!-- Tampilkan pesan sukses/gagal -->
                                    <?php if (isset($success)): ?>
                                        <div class="alert alert-success"><?php echo $success; ?></div>
                                    <?php endif; ?>
                                    <?php if (isset($error)): ?>
                                        <div class="alert alert-danger"><?php echo $error; ?></div>
                                    <?php endif; ?>

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nama File</th>
                                                <th>Link Dokumen</th>
                                                <th>Deskripsi</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($documents)): ?>
                                                <?php foreach ($documents as $doc): ?>
                                                    <tr>
                                                        <!-- Nama -->
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                value="<?php echo htmlspecialchars($doc['nama']); ?>" readonly>
                                                        </td>

                                                        <!-- Link Dokumen (Input Read-Only) -->
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                value="<?php echo '../mahasiswa/uploads/' . htmlspecialchars($doc['file_ta']); ?>"
                                                                readonly>
                                                        </td>

                                                        <!-- Deskripsi -->
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                value="<?php echo htmlspecialchars($doc['deskripsi']); ?>"
                                                                readonly>
                                                        </td>

                                                        <!-- Status -->
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                value="<?php echo htmlspecialchars($doc['status']); ?>"
                                                                readonly>
                                                        </td>

                                                        <!-- Komentar -->
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                value="<?php echo htmlspecialchars($doc['komentar']); ?>"
                                                                readonly>
                                                        </td>

                                                        <!-- Form Approve/Reject -->
                                                        <td>
                                                            <form action="verif-ta.php" method="POST">
                                                                <input type="hidden" name="ta_id"
                                                                    value="<?php echo $doc['ta_id']; ?>">

                                                                <!-- Input untuk komentar -->
                                                                <textarea name="komentar" class="form-control mb-2"
                                                                    placeholder="Komentar/revisi"></textarea>

                                                                <!-- Input untuk status -->
                                                                <div>
                                                                    <label>
                                                                        <input type="radio" name="status" value="Approved"
                                                                            required> Approve
                                                                    </label>
                                                                    <label class="ms-2">
                                                                        <input type="radio" name="status" value="Rejected"
                                                                            required> Reject
                                                                    </label>
                                                                </div>

                                                                <!-- Tombol Submit -->
                                                                <button type="submit"
                                                                    class="btn btn-primary mt-2">Submit</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="6" class="text-center">Tidak ada dokumen yang perlu
                                                        diverifikasi.</td>
                                                </tr>
                                            <?php endif; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br><br><br><br><br><br><br>
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
    <script src="../../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/js/sidebarmenu.js"></script>
    <script src="../../../assets/js/app.min.js"></script>
    <script src="../../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../../../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../../../assets/js/dashboard.js"></script>
</body>

</html>