<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
  <!--  Header Start -->
  <header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item d-block d-xl-none">
          <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-icon-hover nav-icon-active" href="../pages/notif-mhs.php">
            <i class="ti ti-bell-ringing"></i>
            <div id="notification" class="notification bg-primary rounded-circle"></div>
          </a>
        </li>
      </ul>
      <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
          <li class="nav-item dropdown">
            <a class="nav-link" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
              aria-expanded="false">
              <img src="../../assets/images/profile/user-1.jpg" alt="" width="35" height="35"
                class="rounded-circle" />
              <p class="mb-0 ms-2 fs-3">2341234567 / BUDIONO SIREGAR </p>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
              <div class="message-body">
                <a href="./profil.php" class="d-flex align-items-center gap-2 dropdown-item">
                  <i class="ti ti-user fs-6"></i>
                  <p class="mb-0 fs-3">Profil</p>
                </a>
                <button id="logoutButton" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</button>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!--  Header End -->
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>