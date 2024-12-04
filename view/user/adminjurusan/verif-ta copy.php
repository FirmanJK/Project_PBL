<?php
session_start();

require '../../../../koneksi.php';

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// Session check
if ($_SESSION['role'] !== 'jurusan') {
    header("Location: ../auth/login.php");
    exit;
}

// Query untuk mendapatkan data dokumen yang statusnya Pending
$query = "SELECT dokumen_id, user_id, file_skla, file_toeic, file_skripsi, status, komentar, username
          FROM UnggahDokumenJurusan d
          JOIN Users u ON d.user_id = u.user_id
          WHERE d.status = 'Pending'";
try {
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $documents = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $error = "Terjadi kesalahan: " . $e->getMessage();
}

// Proses form submission (update status dokumen)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dokumen_id'])) {
    // Mendapatkan data dari form
    $dokumen_id = $_POST['dokumen_id'];
    $status = $_POST['status'];
    $komentar = trim($_POST['komentar']);

    try {
        // Update status dan komentar pada dokumen
        $query = "UPDATE UnggahDokumenJurusan SET status = :status, komentar = :komentar, updated_at = NOW() WHERE dokumen_id = :dokumen_id";
        $stmt = $conn->prepare($query);
        $stmt->execute([
            ':status' => $status,
            ':komentar' => $komentar,
            ':dokumen_id' => $dokumen_id
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
                                    <<table border="1">
                                        <thead>
                                            <tr>
                                                <th>Nama Mahasiswa</th>
                                                <th>Surat Keterangan Bebas Kompen</th>
                                                <th>Hasil TOEIC</th>
                                                <th>File Skripsi/Magang</th>
                                                <th>Status</th>
                                                <th>Komentar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($documents)): ?>
                                                <?php foreach ($documents as $doc): ?>
                                                    <tr>
                                                        <td><?php echo htmlspecialchars($doc['username']); ?></td>
                                                        <td>
                                                            <?php
                                                            // Membuat path file yang benar dengan path relatif
                                                            $file_skla_path = "../mahasiswa/uploads/" . basename($doc['file_skla']);

                                                            // Cek apakah file SKLA ada
                                                            if (file_exists($file_skla_path)) {
                                                                echo '<a href="' . $file_skla_path . '" target="_blank">Lihat</a>';
                                                            } else {
                                                                echo 'File tidak tersedia';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            // Membuat path file yang benar dengan path relatif
                                                            $file_toeic_path = "../mahasiswa/uploads/" . basename($doc['file_toeic']);

                                                            // Cek apakah file TOEIC ada
                                                            if (file_exists($file_toeic_path)) {
                                                                echo '<a href="' . $file_toeic_path . '" target="_blank">Lihat</a>';
                                                            } else {
                                                                echo 'File tidak tersedia';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            // Membuat path file yang benar dengan path relatif
                                                            $file_skripsi_path = "../mahasiswa/uploads/" . basename($doc['file_skripsi']);

                                                            // Cek apakah file Skripsi/Magang ada
                                                            if (file_exists($file_skripsi_path)) {
                                                                echo '<a href="' . $file_skripsi_path . '" target="_blank">Lihat</a>';
                                                            } else {
                                                                echo 'File tidak tersedia';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td><?php echo htmlspecialchars($doc['status']); ?></td>
                                                        <td><?php echo htmlspecialchars($doc['komentar']); ?></td>
                                                        <td>
                                                            <form action="approval.php" method="POST">
                                                                <input type="hidden" name="dokumen_id"
                                                                    value="<?php echo $doc['dokumen_id']; ?>">
                                                                <textarea name="komentar"
                                                                    placeholder="Komentar/revisi"></textarea><br>
                                                                <label><input type="radio" name="status" value="Approved"
                                                                        required> Approved</label>
                                                                <label><input type="radio" name="status" value="Rejected"
                                                                        required> Rejected</label><br>
                                                                <button type="submit">Submit</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="7">Tidak ada dokumen yang perlu diverifikasi.</td>
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