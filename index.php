<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Website CRUD</title>
</head>

<body>
  <div class="container">

    <h1>Data Produk</h1>
    <table class="table table-striped table-borderless">
      <thead class="thead-dark">
        <tr>
          <th>nama_produk</th>
          <th>keterangan</th>
          <th>harga</th>
          <th>jumlah</th>
          <th colspan="2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include "koneksi.php";

        $sql = $pdo->prepare("SELECT * FROM produk");
        $sql->execute();

        while ($data = $sql->fetch()) {
          echo "<tr>";
          echo "<td>" . $data['nama_produk'] . "</td>";
          echo "<td>" . $data['keterangan'] . "</td>";
          echo "<td>" . $data['harga'] . "</td>";
          echo "<td>" . $data['jumlah'] . "</td>";
          echo "<td><a class='btn btn-outline-secondary' href='form_ubah.php?id=" . $data['id'] . "'><i class='fa fa-edit'></i></a> <a class='btn btn-outline-danger' href='proses_hapus.php?id=" . $data['id'] . "'><i class='fa fa-trash danger'></i></a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
    <br><br>
    <div class="mr-3">
      <a class="btn btn-dark pull-right" href="form_simpan.php" role="button">Tambah Data</a>
    </div>
  </div>
</body>

</html>