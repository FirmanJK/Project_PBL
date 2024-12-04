<?php
session_start();
require '../../../../koneksi.php';

// SESSION
if ($_SESSION['role'] !== 'jurusan') {
    header("Location: ../../auth/login.php");
    exit;
}

$error = '';
$success = '';

// Ambil data dokumen yang diupload
try {
    $query = "SELECT * FROM UnggahDokumenJurusan WHERE status = 'Pending'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $documents = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $error = "Terjadi kesalahan: " . htmlspecialchars($e->getMessage());
}

// Proses Approval atau Reject
if (isset($_POST['approve']) || isset($_POST['reject'])) {
    $doc_id = $_POST['doc_id'];
    var_dump($doc_id); // Pastikan ini mengeluarkan ID dokumen yang benar
    $status = isset($_POST['approve']) ? 'Approved' : 'Rejected';
    try {
        $query = "UPDATE UnggahDokumenJurusan SET status = :status WHERE dokumen_id = :id";
        $stmt = $conn->prepare($query);
        $stmt->execute([':status' => $status, ':id' => $doc_id]);

        $success = "Dokumen berhasil di $status.";
    } catch (PDOException $e) {
        $error = "Terjadi kesalahan: " . htmlspecialchars($e->getMessage());
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Verifikasi Dokumen</title>
    <link rel="shortcut icon" type="image/png" href="../../../assets/images/logos/jti.png" />
    <link rel="stylesheet" href="../../../assets/css/styles.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <aside class="left-sidebar">
            <!-- Sidebar content here -->
        </aside>

        <div class="body-wrapper">
            <header class="app-header">
                <!-- Header content here -->
            </header>

            <div class="container-fluid">
                <div class="row">
                    <div class="col d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body p-4">
                                <h4 class="fw-semibold card-title">Verifikasi Dokumen</h4>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <?php if ($error): ?>
                                        <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
                                    <?php elseif ($success): ?>
                                        <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
                                    <?php endif; ?>

                                    <?php if (empty($documents)): ?>
                                        <div class="alert alert-info">Tidak ada dokumen yang perlu diverifikasi.</div>
                                    <?php else: ?>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Dokumen</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($documents as $index => $doc): ?>
                                                    <tr>
                                                        <td><?php echo $index + 1; ?></td>
                                                        <td>
                                                            <ul>
                                                                <li>Surat Keterangan Bebas Kompen: <a href="<?php echo $doc['file_skla']; ?>" target="_blank">Lihat</a></li>
                                                                <li>Hasil TOEIC: <a href="<?php echo $doc['file_toeic']; ?>" target="_blank">Lihat</a></li>
                                                                <li>Laporan Skripsi: <a href="<?php echo $doc['file_skripsi']; ?>" target="_blank">Lihat</a></li>
                                                            </ul>
                                                        </td>
                                                        <td><?php echo $doc['status']; ?></td>
                                                        <td>
                                                            <form action="verif-doc.php" method="POST">
                                                                <input type="hidden" name="doc_id" value="<?php echo $doc['dokumen_id']; ?>" />
                                                                <button type="submit" name="approve" class="btn btn-success btn-sm">Approve</button>
                                                                <button type="submit" name="reject" class="btn btn-danger btn-sm">Reject</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    <?php endif; ?>
                                </div>
                            </div>
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
</body>
</html>
