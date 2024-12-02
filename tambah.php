<html>

<head>
  <title>Tambah Data</title>
</head>

<body>
  <h2>Tambah data</h2>
  <form method="post" action="aksi/insert.php">
    <!-- TODO sesuaikan dengan nama kolom  -->

    <input name="nama_acara" placeholder="Nama kegiatan" />
    <input name="deskripsi" placeholder="Nama kegiatan" />
    <input type="date" name="waktu" placeholder="waktu kegiatan" />

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">

  </form>
</body>

</html>