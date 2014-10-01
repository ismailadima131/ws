<html>
<title>Tambah Mahasiswa</title>
<body>
  <a href="view_mahasiswa.php">Lihat Mahasiswa</a>
  <form action="mhs.php" method="POST" enctype="application/x-www-form-urlencoded">
    <table>
      <tr>
        <td>NIM</td>
        <td><input type="text" name="nim" id="nim"/></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" id="nama"/></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" id="alamat"/></td>
      </tr>
      <tr>
        <td>Prodi</td>
        <td><input type="text" name="prodi" id="prodi"/></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" value="tambah"/></td>
      </tr>
    </table>
  </form>
</body>
</html>