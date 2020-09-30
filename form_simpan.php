<html>
<head>
  <title>Website CRUD</title>
</head>
<body>
  <h1>Tambah Produk</h1>
  <form method="post" action="proses_simpan.php">
    <table cellpadding="8">
      <tr>
        <td>nama_produk</td>
        <td><input type="text" name="nama_produk"></td>
      </tr>
      <tr>
        <td>keterangan</td>
        <td><input type="text" name="keterangan"></td>
      </tr>
      <tr>
        <td>harga</td>
        <td><input type="text" name="harga"></td>
      </tr>
      <tr>
        <td>jumlah</td>
        <td><input type="text" name="jumlah"></td>
      </tr>
    </table>

    <hr>
    <input type="submit" value="Simpan">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>