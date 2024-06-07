<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $noHp = $_POST['noHp'];
    $alamat = $_POST['alamat'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tanggal'];

    $sql = "UPDATE transaksi SET nama='$nama', noHp='$noHp', alamat='$alamat', Jenis_kelamin='$jenisKelamin', harga='$harga', Tanggal='$tanggal' WHERE id=$id";
    if (mysqli_query($koneksi, $sql)) {
        echo "Data transaksi berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM transaksi WHERE id=$id";
    $result = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($result);
} else {
    header('Location: read_transaksi.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Transaksi</title>
    <link rel="stylesheet" href="css/style-new.css">
</head>
<body>
    <h2>Edit Transaksi</h2>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
        <label>No. HP:</label><br>
        <input type="text" name="noHp" value="<?php echo $data['noHp']; ?>"><br>
        <label>Alamat:</label><br>
        <textarea name="alamat"><?php echo $data['alamat']; ?></textarea><br>
        <label>Jenis Kelamin:</label><br>
        <select name="jenisKelamin">
            <option value="Laki-laki" <?php if ($data['Jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
            <option value="Perempuan" <?php if ($data['Jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
        </select><br>
        <label>Harga:</label><br>
        <input type="text" name="harga" value="<?php echo $data['harga']; ?>"><br>
        <label>Tanggal:</label><br>
        <input type="date" name="tanggal" value="<?php echo $data['Tanggal']; ?>"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
