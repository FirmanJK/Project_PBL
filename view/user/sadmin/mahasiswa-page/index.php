<?php
session_start();
require '../../../../../koneksi.php';

//SESSION
if ($_SESSION['role'] !== 'sadmin') {
    header("Location: ../auth/login.php");
    exit;
}

// Jumlah data per halaman
$limit = 10;

// Hitung offset berdasarkan halaman
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Ambil kata kunci pencarian dari URL
$search = isset($_GET['search']) ? trim($_GET['search']) : '';

// Query untuk mengambil data mahasiswa
$query = "SELECT * FROM Mahasiswa WHERE 1=1";

if (!empty($search)) {
    $query .= " AND (first_name LIKE :search OR last_name LIKE :search OR nim LIKE :search)";
}

$query .= " ORDER BY mahasiswa_id OFFSET :offset ROWS FETCH NEXT :limit ROWS ONLY";

// Siapkan statement
$stmt = $conn->prepare($query);

// Bind parameter pencarian jika ada
if (!empty($search)) {
    $searchParam = '%' . $search . '%';
    $stmt->bindParam(':search', $searchParam, PDO::PARAM_STR);
}

// Bind parameter limit dan offset
$stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);

// Eksekusi query
$stmt->execute();
$mahasiswa = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bebas Tanggungan</title>
    <link rel="shortcut icon" type="image/png" href="../../../../assets/images/logos/jti.png" />
    <link rel="stylesheet" href="../../../../assets/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
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
                            <a class="sidebar-link" href="../jurusan-page/index.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-users"></i>
                                </span>
                                <span class="hide-menu">Jurusan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../pusat-page/index.php" aria-expanded="false">
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
                <div class="row">
                    <div class="col d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body p-4">
                                <div class="table-responsive">
                                    <table id="example" class="display table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>No Telp</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM Mahasiswa";
                                            $stmt = $conn->prepare($query);
                                            $stmt->execute();
                                            $mahasiswa = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                            $no = 1;
                                            foreach ($mahasiswa as $mhs): ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td>

                                                        <?= htmlspecialchars($mhs['first_name'] . ' ' . $mhs['last_name']); ?><br>
                                                        <span class="text-muted">NIM:
                                                            <?= htmlspecialchars($mhs['nim']); ?></span>
                                                    </td>
                                                    <td><?= htmlspecialchars($mhs['email']); ?></td>
                                                    <td><?= htmlspecialchars($mhs['phone_number']); ?></td>
                                                    <td>
                                                        <a href="edit.php?mahasiswa_id=<?= htmlspecialchars($mhs['mahasiswa_id']); ?>"
                                                            class="btn btn-primary btn-sm">Edit</a>
                                                        <a href="form_handler.php?mahasiswa_id=<?= htmlspecialchars($mhs['mahasiswa_id']); ?>"
                                                            class="btn btn-danger btn-sm">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
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
    <script>
        new DataTable('#example');
    </script>
</body>

</html>