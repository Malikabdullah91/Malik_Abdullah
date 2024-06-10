<?php 
session_start();
if($_SESSION['username'] == null) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Entry</title>
    <link rel="stylesheet" href="css/categories-entry.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
<label for="check">
    <i class="bx bx-grid-alt" id="btn"></i>
    <i class="bx bx-grid-alt" id="cancel"></i>
</label>
<div class="sidebar">
    <header>On The Way</header>
    <ul>
        <li><a href="index.php"><i class="dashboard">Dashboard</i></a></li>
        <li><a href="categories.php"><i class="categories">Categories</i></a></li>
        <li><a href="transaction.php"><i class="jenis">Transaction</i></a></li>
        <li><a href="categories-entry.php"><i class="categories-entri">Categories Entry</i></a></li>
        <li><a href="logout.php"><i class="logout">Log Out</i></a></li>
    </ul>
</div>
<div class="container">
    <h1>Category Entry</h1>
    <form action="categories-proses.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="category">Nama Makanan:</label>
            <input type="text" id="category" name="categories" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="text" id="harga" name="price" required>
        </div>
        <div class="form-group">
            <label for="image">Category Image:</label>
            <input type="file" id="image" name="photo" accept="image/*" required>
        </div>
        <button type="submit" name="simpan" class="submit-button">Submit</button>
    </form>
</div>
</body>
</html>
