<?php
include('../koneksi.php');

$data = mysqli_query($koneksi, "delete from data_admin where id_admin=" . $_GET['id']);

if ($data) {
  header('location:../index.php');
} else {
  echo "Gagal hapus";
}
