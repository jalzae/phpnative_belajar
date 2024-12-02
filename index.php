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
        <td>Kegiatan</td>
        <td>Waktu</td>
        <td>Aksi</td>
      </tr>
    </thead>
    <tbody>
      <!-- //TODO fetch all data -->
      <tr>
        <td>1</td>
        <td>Menulis</td>
        <td>02-12-2024 12:00:00</td>
        <td>
          <a href="edit.php?id=1">Edit</a>
          <a href="aksi/delete.php?id=1">Delete</a>
        </td>
      </tr>
    </tbody>
  </table>
</body>

</html>