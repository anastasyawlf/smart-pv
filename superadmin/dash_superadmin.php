<!DOCTYPE html>
<html>

<head>
  <title>Halaman superadmin</title>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>SMART PV</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="../css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="../images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <!-- sidebar -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body id="body-pd" style="background-color: #325662">
  <?php
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if ($_SESSION['role'] == "") {
    header("location:dash_superadmin.php");
  }

  ?>

<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div> <i class='bx bx-user-circle headernav_icon'></i> </div>
  </header>

  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div> <a href="#" class="nav_logo"> <i class='bx bx-cycling nav_logo-icon'></i> <span class="nav_logo-name">SmartBike</span> </a>
        <div class="nav_list">
          <a href="#" class="nav_link active"> <i class='bx bx-home nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
          <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">User</span> </a>
          <a href="userMaps.php" class="nav_link"> <i class='bx bx-map nav_icon'></i> <span class="nav_name">Maps</span> </a>
          <a href="userStats.php" class="nav_link"> <i class='bx bx-bar-chart-alt nav_icon'></i> <span class="nav_name">Stats</span> </a>
        </div>
      </div> <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
    </nav>
  </div>

  <!--Container Main start-->
  <div class="height-100 bg-light">
  <h1>Halaman SuperAdmin</h1>

  <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['role']; ?></b>.</p>
  <a href="logout.php">LOGOUT</a>
  </div>
  <!--Container Main end-->
  <!-- Javascript files-->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/jquery-3.0.0.min.js"></script>
  <script src="../js/plugin.js"></script>
  <!-- sidebar -->
  <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="../js/custom.js"></script>
  <!-- javascript -->
  <script src="../js/owl.carousel.js"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <!-- sidebar2 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function(event) {

      const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
          nav = document.getElementById(navId),
          bodypd = document.getElementById(bodyId),
          headerpd = document.getElementById(headerId)

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
          toggle.addEventListener('click', () => {
            // show navbar
            nav.classList.toggle('show')
            // change icon
            toggle.classList.toggle('bx-x')
            // add padding to body
            bodypd.classList.toggle('body-pd')
            // add padding to header
            headerpd.classList.toggle('body-pd')
          })
        }
      }

      showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

      /*===== LINK ACTIVE =====*/
      const linkColor = document.querySelectorAll('.nav_link')

      function colorLink() {
        if (linkColor) {
          linkColor.forEach(l => l.classList.remove('active'))
          this.classList.add('active')
        }
      }
      linkColor.forEach(l => l.addEventListener('click', colorLink))

      // Your code to run since DOM is loaded and ready
    });
  </script>
</body>

</html>