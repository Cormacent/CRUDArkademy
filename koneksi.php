<?php
// $host = "localhost"; 
// $username = "root"; 
// $password = ""; 
// $database = "db_arkademy";

// Koneksi ke MySQL dengan PDO
try {
    // $pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
    $pdo = new PDO('mysql:host=localhost'.';dbname=db_arkademy', "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$sql = "CREATE TABLE IF NOT EXISTS produk (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    nama_produk VARCHAR(15) NOT NULL,
    keterangan TEXT NOT NULL,
    harga VARCHAR(15),
    jumlah VARCHAR(3)
)";

$pdo->exec($sql);
?>