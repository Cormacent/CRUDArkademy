<?php
include "koneksi.php";

$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$sql = $pdo->prepare("INSERT INTO produk(nama_produk, keterangan, harga, jumlah) VALUES(:nama_produk,:keterangan,:harga,:jumlah)");
$sql->bindParam(':nama_produk', $nama_produk);
$sql->bindParam(':keterangan', $keterangan);
$sql->bindParam(':harga', $harga);
$sql->bindParam(':jumlah', $jumlah);
$sql->execute(); 

if($sql){ 
  header("location: index.php");
}else{
  echo "Gagal bro, cek proses_simpan.php";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>