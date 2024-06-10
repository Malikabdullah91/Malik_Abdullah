<?php
include '../koneksi.php';

if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $noHp = $_POST['noHp'];
    $alamat = $_POST['alamat'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tanggal'];

    $sql = "INSERT INTO transaksi (nama, noHp, alamat, Jenis_kelamin, harga, Tanggal) VALUES ('$nama', '$noHp', '$alamat', '$jenisKelamin', '$harga', '$tanggal')";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data transaksi berhasil ditambahkan');
                window.location = 'categories.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi kesalahan saat menambahkan data');
                window.location = 'categories.php';
            </script>
        ";
    }
} else {
    header('location: categories.php');
}
?>
