<html>
<head>
  <title>Website CRUD</title>
</head>
<body>
  <h1>Ubah Produk</h1>

  <?php
  include "koneksi.php";

  $id = $_GET['id'];

  $sql = $pdo->prepare("SELECT * FROM produk WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();
  ?>

  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>">
    <table cellpadding="8">
  
      <tr>
        <td>nama_produk</td>
        <td><input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>"></td>
      </tr>
      <tr>
        <td>keterangan</td>
        <td><input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>"></td>
      </tr>
      <tr>
        <td>harga</td>
        <td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
      </tr>
      <tr>
        <td>jumlah</td>
        <td><textarea name="jumlah"><?php echo $data['jumlah']; ?></textarea></td>
      </tr>
    </table>

    <hr>
    <input type="submit" value="Ubah">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>