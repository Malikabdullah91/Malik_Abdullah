<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="css/admin.css" />
    <!-- Link CSS -->
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>
    <input type="checkbox" id="check" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <label for="check">
      <i class="bx bx-grid-alt" id="btn"></i>
      <i class="bx bx-grid-alt" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>On The Whay</header>
      <ul>
        <li>
          <a href="index.php"><i class="dashboard">Dashboard</i></a>
        </li>
        <li>
          <a href="categories.php"><i class="categories">Categories</i></a>
        </li>
        <li>
          <a href="transaction.php"><i class="jenis">Transaction</i></a>
        </li>
        <li>
          <a href="#"><i class="logout">Log Out</i></a>
        </li>
      </ul>
    </div>
    <header>
      <div class="container">
        <a href="#" class="navbar-logo"
          ><img
            src="images-removebg-preview.png"
            alt="logo"
            width="39px"
          /><span>On The Way</span></a
        >
    </header>
    <div class="admin-content">
      <!-- Konten admin disini -->
      <h1>Selamat Datang di Halaman Admin</h1>
      <p>
        Ini adalah halaman admin yang berisi berbagai fitur untuk mengelola
        konten website.
      </p>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const hamburgerMenu = document.querySelector(".hamburger-menu");
        const navMenu = document.querySelector(".nav-menu");

        hamburgerMenu.addEventListener("click", function () {
          navMenu.classList.toggle("active");
        });
      });
    </script>
  </body>
</html>
