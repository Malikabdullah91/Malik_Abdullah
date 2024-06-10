<?php
include 'koneksi.php';

$sql = "SELECT * FROM transaksi";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Transaksi</title>
    <link rel="stylesheet" href="css/stylr-css.css">
</head>
<body>
    <h2>Data Transaksi</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>No. HP</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Harga</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['noHp']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['Jenis_kelamin']; ?></td>
                <td><?php echo $row['harga']; ?></td>
                <td><?php echo $row['Tanggal']; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
