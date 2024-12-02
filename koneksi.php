<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "sd";

$koneksi = mysqli_connect($host, $user, $pass, $name);
if (mysqli_connect_errno()) {
  echo "Koneksi database mysqli gagal!!! : " . mysqli_connect_error();
  die("Tidak ada database yang dipilih!");
}
