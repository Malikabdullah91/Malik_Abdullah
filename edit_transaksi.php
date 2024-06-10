<?php
include '../koneksi.php';

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $noHp = $_POST['noHp'];
    $alamat = $_POST['alamat'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tanggal'];

    $sql = "UPDATE transaksi SET nama='$nama', noHp='$noHp', alamat='$alamat', Jenis_kelamin='$jenisKelamin', harga='$harga', Tanggal='$tanggal' WHERE id=$id";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data transaksi berhasil diupdate');
                window.location = 'categories.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi kesalahan saat mengupdate data');
                window.location = 'categories.php';
            </script>
        ";
    }
} else {
    header('location: categories.php');
}
?>
