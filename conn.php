<?php
$koneksi = mysqli_connect("localhost", "root", "", "sepedalistrik");

// Check connection
if (!$koneksi) {
  echo "Koneksi database gagal : " . mysqli_connect_error();
} else {
  echo "koneksi sukses";
}
