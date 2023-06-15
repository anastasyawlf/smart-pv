<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'conn.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

  $data = mysqli_fetch_assoc($login);

  // cek jika user login sebagai admin
  if ($data['role'] == "admin") {

    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "admin";
    // alihkan ke halaman dashboard admin
    header("location:admin/dash_admin.php");

    // cek jika user login sebagai superadmin
  } else if ($data['role'] == "superadmin") {
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "superadmin";
    // alihkan ke halaman dashboard pegawai
    header("location:superadmin/dash_superadmin.php");

    // cek jika user login sebagai user
  } else if ($data['role'] == "user") {
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "user";
    // alihkan ke halaman dashboard pengurus
    header("location:user/dash_user.php");
  } else {

    // alihkan ke halaman login kembali
    header("location:index.php");
  }
} else {
  header("location:login.php");
}
