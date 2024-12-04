<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bebas Tanggungan</title>
  <link rel="shortcut icon" type="image/png" href="../../../assets/images/logos/icon-logo.png" />
  <link rel="stylesheet" href="../../../assets/css/styles.min.css" />
</head>
 
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include './sidebar.php'; ?>
    <div class="body-wrapper min-vh-100 d-flex flex-column justify-content-between">
      <!--  Header Start -->
    <?php include './header.php'; ?>
      <!--Menu Arsip Tugas Akhir -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Wrapper untuk heading dan search -->
            <div class="d-flex flex-column align-items-center mb-4">
              <h2>Arsip Tugas Akhir JTI</h2>
              <div class="input-group mt-2" style="max-width: 400px;">
                <input type="text" class="form-control" placeholder="Cari Nama Penyusun" aria-label="Cari Nama Penyusun" />
                <button class="btn btn-outline-secondary" type="button">
                  <i class="ti ti-search"></i>
                </button>
              </div>
            </div>
            <!-- Tabel Arsip -->
            <div class="table-responsive" style="max-width: 900px; margin: 0 auto;">
              <table class="table table-striped" style="width:100%;">
                <thead class="table-light">
                  <tr>
                    <th scope="col">Nama Dokumen</th>
                    <th scope="col">Tanggal Unggah</th>
                    <th scope="col">Penyusun</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Penjualan Album Korea di Kalangan Anak Muda</td>
                    <td>2 April 2024, 4:54</td>
                    <td>Abdi Pamungkas</td>
                    <td>
                      <button class="btn btn-primary btn-sm">
                        <i class="ti ti-download"></i> Unduh
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Pengaruh Asap Terhadap Lingkungan</td>
                    <td>21 April 2024, 4:54</td>
                    <td>Edo Setiawan S.Ter</td>
                    <td>
                      <button class="btn btn-primary btn-sm">
                        <i class="ti ti-download"></i> Unduh
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Pengaruh Korupsi terhadap Sektor Pertanian</td>
                    <td>2 Mei 2024, 4:54</td>
                    <td>Popo Putri</td>
                    <td>
                      <button class="btn btn-primary btn-sm">
                        <i class="ti ti-download"></i> Unduh
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Pengaruh Media Sosial</td>
                    <td>2 April 2020, 4:54</td>
                    <td>Adi Kencono S.Ter</td>
                    <td>
                      <button class="btn btn-primary btn-sm">
                        <i class="ti ti-download"></i> Unduh
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Perhitungan Matematika dalam Komputer</td>
                    <td>30 April 2021, 4:54</td>
                    <td>Bobby Putra</td>
                    <td>
                      <button class="btn btn-primary btn-sm">
                        <i class="ti ti-download"></i> Unduh
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Peran Orang Tua dalam Perkuliahan</td>
                    <td>1 Agustus 2019, 4:54</td>
                    <td>Eka Dewi Mayang</td>
                    <td>
                      <button class="btn btn-primary btn-sm">
                        <i class="ti ti-download"></i> Unduh
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <nav>
              <ul class="pagination" style="display: flex; justify-content: flex-end; margin-right: 80px;">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Kembali</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Selanjutnya</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>


      <!--End Menu Arsip Tugas Akhir -->
      <!-- Footer -->
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4" style="text-align: bottom;">
            <span class="pe-1 text-primary text-decoration-underline">Bebas Tanggungan TA</span>
            | Design and Developed by
            <span class="pe-1 text-primary text-decoration-underline">Kelompok 4</span>
          </p>
        </div>
      <!-- Footer End-->

  <script src="../../../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../../assets/js/sidebarmenu.js"></script>
  <script src="../../../assets/js/app.min.js"></script>
  <script src="../../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../../../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../../../assets/js/dashboard.js"></script>
</body>

</html>