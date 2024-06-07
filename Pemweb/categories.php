<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Categories</title>
  <link rel="stylesheet" href="css/transaction.css" />
</head>
<body>
  <header>
    <a href="#" class="navbar-logo">
      <img src="images-removebg-preview.png" alt="logo" width="45px" />
    </a>
    <h1>Terima Kasih Atas Kunjungan Anda</h1>
  </header>

  <nav>
    <ul>
      <li><a href="index.php" onclick="handleSubMenuClick('index')">Dashboard</a></li>
      <li><a href="transaction.php" onclick="handleSubMenuClick('transaction')">Transaction</a></li>
      <li><a href="categories.php" onclick="handleSubMenuClick('categories')">Categories</a></li>
      <li><a href="#" onclick="handleSubMenuClick('settings')">Settings</a></li>
    </ul>
  </nav>
  <center>
    <h2>Categories</h2>
  </center>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Photo</th>
        <th>Nama Makanan</th>
        <th>Description</th>
        <th>Harga</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM db_categories";
      $result = mysqli_query($koneksi, $sql);
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td><img src='img_categories{$row['photo']}' alt='{$row['nama']}' width='150px' /></td>";
        echo "<td>{$row['nama']}</td>";
        echo "<td>{$row['description']}</td>";
        echo "<td>{$row['harga']}</td>";
        echo "<td>
                <form action='categories-proses.php' method='post' style='display:inline-block;'>
                  <input type='hidden' name='id' value='{$row['id']}'>
                  <button type='submit' name='edit'>Edit</button>
                </form>
                <form action='categories-proses.php' method='post' style='display:inline-block;'>
                  <input type='hidden' name='id' value='{$row['id']}'>
                  <button type='submit' name='hapus'>Delete</button>
                </form>
              </td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
  <footer>
    <p>&copy;On The Way</p>
  </footer>
</body>
</html>
