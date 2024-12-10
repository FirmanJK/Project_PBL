
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bebas Tanggungan</title>
  <link rel="shortcut icon" type="image/png" href="../../../assets/images/logos/Sibeta1.png" />
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
      <!--  Header End -->

      <!--  Main Content Start -->
  
      <div style="width: 100%; max-width: 800px; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); margin: auto; margin-top: 100px; ">
        <h2 style="font-size: 20px; margin-bottom: 20px; color: #333; text-align: center;">Profil</h2>
        <div style="text-align: center;">
          <img src="../../../assets/images/profile/dimas.jpg" alt="" width="100" height="100" style="border-radius: 50%; margin-bottom:20px;">
        </div>
        <form>
        <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 20px;">
            <!-- Kolom Kiri -->
            <div style="flex: 1; text-align: left;">
              <label for="first-name" style="font-size: 14px; color: #666; display: block; margin-bottom: 5px;">Nama Depan</label>
              <input type="text" id="first-name" value="Dimas"
                style="width: 100%; padding: 5px; font-size: 14px; border: 1px solid #ddd; border-radius: 5px; margin-bottom: 15px;">
              <label for="nip" style="font-size: 14px; color: #666; display: block; margin-bottom: 5px;">NIM</label>
              <input type="text" id="nip" value="2341720033"
                style="width: 100%; padding: 5px; font-size: 14px; border: 1px solid #ddd; border-radius: 5px; margin-bottom: 15px;">
              <label for="email" style="font-size: 14px; color: #666; display: block; margin-bottom: 5px;">E-mail</label>
              <input type="email" id="email" value="dimasngrho16@gmail.com"
                style="width: 100%; padding: 5px; font-size: 14px; border: 1px solid #ddd; border-radius: 5px; margin-bottom: 15px;">
            </div>
            <!-- Kolom Kanan -->
            <div style="flex: 1; text-align: left;">
              <label for="last-name" style="font-size: 14px; color: #666; display: block; margin-bottom: 5px;">Nama Belakang</label>
              <input type="text" id="last-name" value="Nugroho"
                style="width: 100%; padding: 5px; font-size: 14px; border: 1px solid #ddd; border-radius: 5px; margin-bottom: 15px;">
              <label for="dob" style="font-size: 14px; color: #666; display: block; margin-bottom: 5px;">Tanggal Lahir</label>
              <input type="text" id="dob" value="16/02/2005"
                style="width: 100%; padding: 5px; font-size: 14px; border: 1px solid #ddd; border-radius: 5px; margin-bottom: 15px;">
              <label for="phone" style="font-size: 14px; color: #666; display: block; margin-bottom: 5px;">No Telp</label>
              <input type="text" id="phone" value="082341234567"
                style="width: 100%; padding: 5px; font-size: 14px; border: 1px solid #ddd; border-radius: 5px; margin-bottom: 15px;">
            </div>
          </div>
          <div style="text-align: center;">
            <a href="edit-profile.php"
              style="display: inline-block; text-align: center; padding: 10px 20px; font-size: 14px; background-color: #007bff; color: white; border-radius: 5px; text-decoration: none; transition: background-color 0.3s ease;">Edit Profil</a>
          </div>
          </div>
          
        </form>
        <div class="py-6 px-6 text-center justify-content-center" style="text-align: center; display: flex; ">
          <p class="mb-0 fs-4" >
            <span class="pe-1 text-primary text-decoration-underline">Bebas Tanggungan TA</span>
            | Design and Developed by
            <span class="pe-1 text-primary text-decoration-underline">Kelompok 4</span>
          </p>
      </div>
    </div>


      <!-- Footer -->
      
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
