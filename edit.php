<html>

<head>
  <title>Edit Data</title>
</head>

<body>
  <h2>Edit data <?= $_GET['id'] ?></h2>
  <!-- TODO sesuaikan form edit -->
   <!-- TODO get select one data  -->
  <form method="post" action="aksi/update.php">
    <input name="id"  type="hidden" />
    <input name="kegiatan" placeholder="Nama kegiatan" />
    <input type="date" name="waktu" placeholder="waktu kegiatan" />

    <input type="submit" value="Update">
    <input type="reset" value="Reset">
  </form>
</body>

</html>