<?php
include('./koneksi.php');
?>

<html>

<head>
  <title>Belajar Todo</title>

  <style>
    table,
    td {
      border: 1px solid black;
    }
  </style>
</head>

<body>
  <h1>Belajar CRUD TODO</h1>
  <a href="tambah.php">Tambah</a>
  <br />
  <br />
  <table>
    <thead>
      <tr>
        <td>No</td>
        <td>Nama Acara</td>
        <td>Tanggal Acara</td>
        <td>Prioritas</td>
        <td>Aksi</td>
      </tr>
    </thead>
    <tbody>
      <!-- //TODO fetch all data -->
      <?php
      $data = mysqli_query($koneksi, "select * from data_admin");
      $no = 1;
      while ($row = mysqli_fetch_assoc($data)) {

      ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $row['username'] ?></td>
          <td>02-12-2024 12:00:00</td>
          <td>02-12-2024 12:00:00</td>
          <td>
            <a href="edit.php?id=1">Edit</a>
            <a href="aksi/delete.php?id=<?= $row['id_admin'] ?>">Delete</a>
          </td>
        </tr>

      <?php } ?>
    </tbody>
  </table>
</body>

</html>