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
          <th>Poto</th>
          <th>Nama Makanan</th>
          <th>Description</th>
          <th>Harga</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td><img src="Untitled2.jpeg" alt="gacoan" width="150px" /></td>
          <td>Gacoan</td>
          <td>Makanan ringan enak</td>
          <td>$1</td>
          <td><button>Edit</button><button>Delete</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td><img src="Untitled1.jpeg" alt="geprek" width="150px" /></td>
          <td>Ayam Geprek</td>
          <td>Makanan pedas</td>
          <td>$3</td>
          <td><button>Edit</button><button>Delete</button></td>
        </tr>
      </tbody>
    </table>
  </main>
  <footer>
    <p>&copy;On The Way</p>
  </footer>
</body>
</html>
