<!DOCTYPE html>
<html>

<head>
  <title>Halaman User</title>
</head>

<body>
  <?php
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if ($_SESSION['role'] == "") {
    header("location:dash_user.php");
  }

  ?>
  <h1>Halaman User</h1>

  <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['role']; ?></b>.</p>
  <a href="logout.php">LOGOUT</a>

  <br />
  <br />
</body>

</html>