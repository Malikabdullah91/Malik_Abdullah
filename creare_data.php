<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $noHp = $_POST['noHp'];
    $alamat = $_POST['alamat'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tanggal'];

    $sql = "INSERT INTO transaksi (nama, noHp, alamat, Jenis_kelamin, harga, Tanggal) VALUES ('$nama', '$noHp', '$alamat', '$jenisKelamin', '$harga', '$tanggal')";
    if (mysqli_query($koneksi, $sql)) {
        echo "Data transaksi berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Transaksi</title>
    <link rel="stylesheet" href="css/transaction.css">
</head>
<body>
    <h2>Tambah Transaksi</h2>
    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br>
        <label>No. HP:</label><br>
        <input type="text" name="noHp"><br>
        <label>Alamat:</label><br>
        <textarea name="alamat"></textarea><br>
        <label>Jenis Kelamin:</label><br>
        <select name="jenisKelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        <label>Harga:</label><br>
        <input type="text" name="harga"><br>
        <label>Tanggal:</label><br>
        <input type="date" name="tanggal"><br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
