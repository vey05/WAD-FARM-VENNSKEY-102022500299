<?php
require "koneksi.php";
 
if (isset($_POST["simpan"])) {
    $nopelangan = $_POST["no_pelanggan"];
    $nama     = $_POST["nama_pelanggan"];
    $telepon  = $_POST["no_telepon"];
    $alamat   = $_POST["alamat"];
    $satuan   = $_POST["satuan"];
    $harga    = $_POST["harga"];
    $estimasi = $_POST["estimasi_waktu"];
 
    //Query tambah data
    mysqli_query($koneksi, "INSERT INTO pelanggan (no_pelanggan, nama_pelanggan, no_telepon, alamat, satuan, harga, estimasi_waktu)
    VALUES ('$nopelanggan', '$nama', '$telepon', '$alamat', '$satuan', '$harga', '$estimasi')");
 
    //Setelah simpan, kembali ke halaman detail
    header("Location: Detail.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
</head>
<body>
 
<h1>Tambah Pelanggan</h1>
<form method="post">
    <p>No Pelanggan<br>
        <input type="number" step="0.1" name="no_pelanggan" required></p>

    <p>Nama Pelanggan<br>
        <input type="text" name="nama_pelanggan" required></p>
 
    <p>No Telepon<br>
        <input type="text" name="no_telepon" required></p>
 
    <p>Alamat<br>
        <input type="text" name="alamat" required></p>
 
    <p>Satuan (Kg)<br>
        <input type="number" step="0.1" name="satuan" required></p>
 
    <p>Harga (Rp)<br>
        <input type="number" name="harga" required></p>
 
    <p>Estimasi Waktu<br>
        <input type="text" name="estimasi_waktu" placeholder="contoh: 1 Hari" required></p>
 
    <button type="submit" name="simpan">Simpan</button>
    <a href="Detail.php">Batal</a>
</form>
</body>
</html>