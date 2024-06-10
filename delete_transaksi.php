<?php
include '../koneksi.php';

if(isset($_POST['submit'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM transaksi WHERE id=$id";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data transaksi berhasil dihapus');
                window.location = 'categories.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi kesalahan saat menghapus data');
                window.location = 'categories.php';
            </script>
        ";
    }
} else {
    header('location: categories.php');
}
?>
